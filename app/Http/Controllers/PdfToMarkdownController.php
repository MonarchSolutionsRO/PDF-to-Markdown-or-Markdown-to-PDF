<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Smalot\PdfParser\Parser;

class PdfToMarkdownController extends Controller
{
    public function index()
    {
        return view('pdf-to-markdown');
    }

    public function convert(Request $request)
    {
        $request->validate([
            'pdf_file' => 'required|file|mimes:pdf|max:10240', // max 10MB
        ]);

        try {
            $pdfParser = new Parser();
            $pdf = $pdfParser->parseFile($request->file('pdf_file')->path());
            
            // Extract text from PDF
            $text = $pdf->getText();
            
            // Convert to Markdown
            $markdown = $this->convertToMarkdown($text);
            
            return response()->json([
                'success' => true,
                'markdown' => $markdown
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'error' => 'Failed to convert PDF: ' . $e->getMessage()
            ], 422);
        }
    }

    private function convertToMarkdown($text)
    {
        // Basic text cleanup
        $text = preg_replace('/\r\n|\r/', "\n", $text);
        $text = trim($text);

        // Split into lines
        $lines = explode("\n", $text);
        $markdown = '';
        $inList = false;

        foreach ($lines as $line) {
            $line = trim($line);
            
            if (empty($line)) {
                $markdown .= "\n\n";
                $inList = false;
                continue;
            }

            // Detect headings (based on font size or position)
            if ($this->isHeading($line)) {
                $markdown .= "# " . $line . "\n\n";
                continue;
            }

            // Detect lists
            if ($this->isList($line)) {
                $markdown .= "- " . ltrim($line, '•-*') . "\n";
                $inList = true;
                continue;
            }

            // Regular paragraph
            if (!$inList) {
                $markdown .= $line . "\n\n";
            }
        }

        return trim($markdown);
    }

    private function isHeading($line)
    {
        // Simple heuristic: lines that end with colon or are all uppercase
        return preg_match('/^[A-Z\s]+$/', $line) || 
               preg_match('/^.+:$/', $line);
    }

    private function isList($line)
    {
        return preg_match('/^[\s]*[•\-\*]/', $line);
    }
}
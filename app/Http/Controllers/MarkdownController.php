<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use League\CommonMark\Environment\Environment;
use League\CommonMark\Extension\CommonMark\CommonMarkCoreExtension;
use League\CommonMark\Extension\GithubFlavoredMarkdownExtension;
use League\CommonMark\Extension\Attributes\AttributesExtension;
use League\CommonMark\Extension\HeadingPermalink\HeadingPermalinkExtension;
use League\CommonMark\Extension\TableOfContents\TableOfContentsExtension;
use League\CommonMark\MarkdownConverter;
use Barryvdh\DomPDF\Facade\Pdf;

class MarkdownController extends Controller
{
    public function index()
    {
        return view('markdown');
    }

    public function convert(Request $request)
    {
        $request->validate([
            'markdown' => 'required|string',
            'heading_color' => 'required|string',
            'text_color' => 'required|string',
            'font_family' => 'required|string',
            'font_size' => 'required|integer|min:8|max:24',
            'enable_tables' => 'boolean',
            'enable_toc' => 'boolean',
            'enable_attributes' => 'boolean',
            'enable_heading_anchors' => 'boolean',
        ]);

        // Configure Markdown environment
        $config = [
            'html_input' => 'allow',
            'allow_unsafe_links' => false,
            'max_nesting_level' => 100,
            'heading_permalink' => [
                'html_class' => 'heading-permalink',
                'symbol' => '¶',
            ],
            'table_of_contents' => [
                'position' => 'top',
                'style' => 'bullet',
                'min_heading_level' => 1,
                'max_heading_level' => 6,
                'normalize' => 'relative',
            ],
        ];

        $environment = new Environment($config);
        $environment->addExtension(new CommonMarkCoreExtension());
        $environment->addExtension(new GithubFlavoredMarkdownExtension());
        
        if ($request->input('enable_attributes', false)) {
            $environment->addExtension(new AttributesExtension());
        }
        if ($request->input('enable_heading_anchors', false)) {
            $environment->addExtension(new HeadingPermalinkExtension());
        }
        if ($request->input('enable_toc', false)) {
            $environment->addExtension(new TableOfContentsExtension());
        }

        $converter = new MarkdownConverter($environment);
        $html = $converter->convert($request->input('markdown'));

        // Add custom styling
        $styles = "
            <style>
                body { 
                    font-family: {$request->input('font_family', 'Arial')};
                    font-size: {$request->input('font_size', 14)}px;
                    color: {$request->input('text_color', '#000000')};
                }
                h1, h2, h3, h4, h5, h6 { 
                    color: {$request->input('heading_color', '#000000')};
                }
                table {
                    width: 100%;
                    border-collapse: collapse;
                    margin: 15px 0;
                }
                th, td {
                    border: 1px solid #ddd;
                    padding: 8px;
                    text-align: left;
                }
                th {
                    background-color: #f5f5f5;
                }
                code {
                    background-color: #f5f5f5;
                    padding: 2px 4px;
                    border-radius: 4px;
                }
                pre {
                    background-color: #f5f5f5;
                    padding: 15px;
                    border-radius: 4px;
                    overflow-x: auto;
                }
                .heading-permalink {
                    font-size: 0.8em;
                    text-decoration: none;
                    color: #cccccc;
                    margin-left: 0.3em;
                }
            </style>
        ";

        // Generate PDF with custom styling
        $pdf = Pdf::loadHTML($styles . $html);
        $pdf->setPaper('A4');
        $pdf->setOption('enable-javascript', true);
        $pdf->setOption('javascript-delay', 1000);
        $pdf->setOption('enable-smart-shrinking', true);
        $pdf->setOption('no-stop-slow-scripts', true);
        
        return $pdf->download('document.pdf');
    }
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        // Example blog data (replace with actual data from your database)
        $blogs = [
            [
                'title' => 'Exploring the Beaches of Thailand',
                'date' => '2024-04-25',
                'description' => 'Thailand’s beaches are some of the most stunning in the world, known for their crystal-clear waters...',
                'image' => 'images/blog1.jpg'
            ],
            [
                'title' => 'Hiking Adventures in the Swiss Alps',
                'date' => '2024-04-10',
                'description' => 'The Swiss Alps offer some of the best hiking trails in Europe, with stunning landscapes and challenging climbs...',
                'image' => 'images/blog2.jpg'
            ],
            [
                'title' => 'City Life in New York City',
                'date' => '2024-03-30',
                'description' => 'New York City is always buzzing with life, from its iconic skyscrapers to its diverse neighborhoods...',
                'image' => 'images/blog3.jpg'
            ]
        ];

        // Pass the blog data to the view
        return view('blog', compact('blogs'));
    }
}

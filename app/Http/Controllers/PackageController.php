<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PackageController extends Controller
{
    public function index()
    {
        // Example package data (replace with actual data from a database)
        $packages = [
            [
                'title' => 'Beach Paradise',
                'price' => '$799',
                'description' => 'Enjoy a relaxing stay at some of the world’s best beaches.',
                'image' => 'images/package1.jpg'
            ],
            [
                'title' => 'Mountain Adventure',
                'price' => '$999',
                'description' => 'Get your adrenaline pumping with mountain trekking.',
                'image' => 'images/package2.jpg'
            ],
            [
                'title' => 'City Escape',
                'price' => '$599',
                'description' => 'Explore vibrant cities with guided tours and shopping.',
                'image' => 'images/package3.jpg'
            ]
        ];

        // Pass the data to the Blade view
        return view('packages', compact('packages'));
    }
}

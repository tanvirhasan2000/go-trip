<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    public function index()
    {
        // Example data for About Us page
        $aboutUs = [
            'title' => 'About Us',
            'description' => 'We are a travel company offering memorable experiences worldwide. Our mission is to bring the world closer together through unique travel experiences.',
            'team' => [
                'Solaiman Molla' => 'Founder & CEO',
                'Tanvir Hasan Shawon' => 'Marketing Director',
                'Mahfuz ' => 'Lead Tour Guide',
            ],
            'vision' => 'To make travel accessible for everyone and promote cultural exchange.',
            'mission' => 'To create extraordinary travel experiences that empower our customers to discover new cultures.'
        ];

        // Passing data to the view
        return view('about', compact('aboutUs'));
    }
}

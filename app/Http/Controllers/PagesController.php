<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'Welcome to LSAPP BLog';
        return view('pages.index', compact('title'));
    }

    public function about(){
        $title = 'About Us';
        return view('pages.about')->with('title', $title);
    }

    public function category(){
        $data = array(
            'title' => 'Categories',
            'categories' => [
                'Fashion Blogs',
                'Food Blogs',
                'Travel Blogs',
                'Music Blogs',
                'Lifestyle Blogs',
                'Fitness Blogs',
                'DIY Blogs',
                'Sports Blogs',
                'Finance Blogs',
                'Political Blogs',
                'Parenting Blogs',
                'Business Blogs',
                'Personal Blogs',
                'Movie Blogs',
                'Car Blogs',
                'News Blogs',
                'Pet Blogs',
                'Gaming Blogs',
            ],
        );
        return view('pages.categories')->with($data);

    }
    public function contact(){
        $title = 'Contact Us';
        // return view('pages.contact')->with('title', $title);
    }
}

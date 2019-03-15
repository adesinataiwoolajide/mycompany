<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $data = [
            "title" => 'Welcome',
        ];
        return view("website.index")->with($data);
    }

    public function about()
    {
        $data = [
            "title" => 'About Us',
        ];
        return view("website.aboutus")->with($data);
    }

    public function client()
    {
        $data = [
            "title" => 'Our Clients',
        ];
        return view("website.client")->with($data);
    }

    public function partner()
    {
        $data = [
            "title" => 'Our Partners',
        ];
        return view("website.client")->with($data);
    }

    public function portfolio()
    {
        $data = [
            "title" => 'Our Partners',
        ];
        return view("website.portfolio")->with($data);
    }

    public function careers()
    {
        $data = [
            "title" => 'Our Partners',
        ];
        return view("careers.client")->with($data);
    }

    public function project()
    {
        $data = [
            "title" => 'Our Projects',
        ];
        return view("website.ourproject")->with($data);
    }

    public function service()
    {
        $data = [
            "title" => 'Our Services',
        ];
        return view("website.services")->with($data);
    }

    public function team()
    {
        $data = [
            "title" => 'Our Team',
        ];
        return view("website.team")->with($data);
    }

    public function gallery()
    {
        $data = [
            "title" => 'Gallery',
        ];
        return view("website.gallery")->with($data);
    }

    public function contact()
    {
        $data = [
            "title" => 'Contact Us',
        ];
        return view("website.contactus")->with($data);
    }
}

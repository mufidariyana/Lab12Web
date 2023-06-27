<?php

namespace App\Controllers;

class Page extends BaseController
{
    public function about()
    {
        return view('about', [
            'title' => 'Halaman About',
            'content' => 'Ini adalah halaman about yang menjelaskan tentang isi
       halaman ini.'
        ]);
    }

    public function contact()
    {
        return view('contact', [
            'title' => 'Halaman contact',
            'content' => 'Ini adalah halaman contact'
        ]);
    }

    public function home()
    {
        return view('home', [
            'title' => 'Halaman home',
            'content' => 'Ini adalah halaman home'
        ]);
    }
}

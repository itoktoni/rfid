<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {

    }

    public function index($post, $query)
    {
        $template = get_field('template', 5);
        $data['template'] = json_decode(json_encode($template), FALSE);

        return view('pages.homepage', $data);
    }

    public function about()
    {
        return view('pages.about');
    }
}

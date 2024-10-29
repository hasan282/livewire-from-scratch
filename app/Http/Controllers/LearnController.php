<?php

namespace App\Http\Controllers;

class LearnController extends Controller
{
    public function index($section)
    {
        if (!method_exists($this, $section)) {
            return response('Method is not exists', 404);
        } else {
            return $this->{$section}();
        }
    }

    public function greet()
    {
        return view('learn.greet');
    }
}

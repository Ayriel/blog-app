<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Image;

class ImagesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $images = Image::paginate(6);
        $images->each(function($images){
            $images->article;
        });
        // dd($images);
        return view('admin.images.index', compact('images'));

    }
}

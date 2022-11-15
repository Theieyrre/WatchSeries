<?php

namespace App\Http\Controllers;

use App\Models\Media;
use Illuminate\Http\Request;

class MediaController extends Controller
{
    //Show all episodes
    public function show(Media $media)
    {
        return view('medias.show', [
            'media' => $media
        ]);
    }
}

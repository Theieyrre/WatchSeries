<?php

namespace App\Http\Controllers;

use App\Models\MediaDirectory;
use Illuminate\Http\Request;

class MediaController extends Controller
{
    // Show all media
    public function index()
    {
        return view("index", [
            "medias" => MediaDirectory::latest()->get()
        ]);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MediaDirectory;

class MediaDirectoryController extends Controller
{
    // Show all media
    public function index()
    {
        return view("medias.index", [
            "medias" => MediaDirectory::latest()->paginate(5)
        ]);
    }
}

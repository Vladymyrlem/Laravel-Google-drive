<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
class HomeController
{
    public function index()
    {
        Storage::disk('google')->allFiles();
    }
    public function upload(Request $request){
        return $request->file("photo")->store("","google");
    }
}

<?php

namespace App\Http\Controllers\File;

use App\Http\Controllers\Controller;
use App\Models\File;

class IndexController extends Controller
{
    public function __invoke(){
        $files = File::all();
        return view("file.index", compact("files"));
    }
}

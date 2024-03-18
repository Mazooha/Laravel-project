<?php

namespace App\Http\Controllers\File;

use App\Http\Controllers\Controller;
use App\Models\File;

class ShowController extends Controller
{
    public function __invoke(File $file){
        return view("file.show", compact("file"));
    }
}

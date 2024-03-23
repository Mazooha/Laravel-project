<?php

namespace App\Http\Controllers\File;

use App\Http\Controllers\Controller;
use App\Models\File;
use App\Models\Page;

class ShowController extends Controller
{
    public function __invoke(File $file){
        $pages = Page::all();
        return view("file.show", compact("file", "pages"));
    }
}

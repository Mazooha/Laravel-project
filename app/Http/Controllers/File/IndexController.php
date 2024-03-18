<?php

namespace App\Http\Controllers\File;

use App\Http\Controllers\Controller;
use App\Models\File;
use App\Models\Page;

class IndexController extends Controller
{
    public function __invoke(){
        $files = File::all();
        $pages = Page::all();
        return view("file.index", compact("files", "pages"));
    }
}

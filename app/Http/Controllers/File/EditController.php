<?php

namespace App\Http\Controllers\File;

use App\Http\Controllers\Controller;
use App\Models\File;
use App\Models\Page;
use Illuminate\Http\Request;

class EditController extends Controller
{
    public function __invoke(File $file, Page $pages){
        $files = File::all();
        $pages = Page::all();
        return view("file.edit", compact("file", "pages"));
    }
}

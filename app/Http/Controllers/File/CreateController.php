<?php

namespace App\Http\Controllers\File;

use App\Http\Controllers\Controller;
use App\Models\Page;

class CreateController extends Controller
{
    public function __invoke(){
        $pages = Page::all();
        return view("file.create", compact("pages"));
    }
}

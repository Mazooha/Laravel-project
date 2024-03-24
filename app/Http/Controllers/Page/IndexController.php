<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use App\Models\Page;

class IndexController extends Controller
{
    public function __invoke(){
        $pages = Page::all();
        
        return view("page.index", compact("pages"));
    }
}

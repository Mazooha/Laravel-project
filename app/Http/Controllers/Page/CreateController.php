<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;

class CreateController extends Controller
{
    public function __invoke(){
        return view("page.create");
    }
}

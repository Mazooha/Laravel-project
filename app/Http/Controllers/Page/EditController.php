<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use App\Models\Page;
use Illuminate\Http\Request;

class EditController extends Controller
{
    public function __invoke(Page $page){
        return view("page.edit", compact("page"));
    }
}

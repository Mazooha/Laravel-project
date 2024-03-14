<?php

namespace App\Http\Controllers\File;

use App\Http\Controllers\Controller;
use App\Models\File;
use Illuminate\Http\Request;

class EditController extends Controller
{
    public function __invoke(File $file){
        return view("file.edit", compact("file"));
    }
}

<?php

namespace App\Http\Controllers\File;

use App\Http\Controllers\Controller;
use App\Models\File;
use Illuminate\Http\Request;

class DeleteController extends Controller
{
    public function __invoke(File $file){
        $file->delete();

        return redirect()->route("file.index");
    }
}

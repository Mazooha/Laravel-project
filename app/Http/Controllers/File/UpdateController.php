<?php

namespace App\Http\Controllers\File;

use App\Http\Controllers\Controller;
use App\Http\Requests\File\UpdateRequest;
use App\Models\File;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, File $file){
        $data = $request->validated();
        $file->update($data);
        $files = File::find($file->id);
        $page = $files->page->page_name;
        
        return view("file.show", compact("file", "page"));
    }
}

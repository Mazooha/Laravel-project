<?php

namespace App\Http\Controllers\File;

use App\Http\Controllers\Controller;
use App\Http\Requests\File\UpdateRequest;
use App\Models\File;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, File $file){
        $data = $request->validated();
        $file->update($data);
        return view("file.show", compact("file"));
    }
}

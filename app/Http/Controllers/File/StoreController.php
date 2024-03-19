<?php

namespace App\Http\Controllers\File;

use App\Http\Controllers\Controller;
use App\Http\Requests\File\StoreRequest;
use App\Models\File;
use Illuminate\Support\Facades\Storage;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request){
        dd($request->all());
        $data = $request->validated();
        $data['file_path'] = Storage::disk('public')->put('/files', $data['file_path']);
        dd($data);
        File::firstOrCreate($data);

        return redirect()->route("file.index");
    }
}

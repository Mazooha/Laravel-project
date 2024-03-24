<?php

namespace App\Http\Controllers\News;

use App\Http\Controllers\Controller;
use App\Http\Requests\News\StoreRequest;
use App\Models\News;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request){
        $data = $request->validated();
        News::firstOrCreate($data);

        return redirect()->route("news.index");
    }
}

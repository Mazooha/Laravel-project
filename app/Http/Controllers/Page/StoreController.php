<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use App\Http\Requests\Page\StoreRequest;
use App\Models\Page;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request){
        $data = $request->validated();
        Page::firstOrCreate($data);

        return redirect()->route("page.index");
    }
}

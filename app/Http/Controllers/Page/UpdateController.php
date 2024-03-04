<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use App\Http\Requests\Page\UpdateRequest;
use App\Models\Page;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Page $page){
        $data = $request->validated();
        $page->update($data);
        return view("page.show", compact("page"));
    }
}

<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use App\Models\Page;
use Illuminate\Http\Request;

class DeleteController extends Controller
{
    public function __invoke(Page $page){
        $page->delete();

        return redirect()->route("page.index");
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function show()
    {
        // $data = ['title'=>'Hello, world!'];
        // return view('default.template', $data);
        // return view('default.template')->with('title', 'Hello, world! 567');

        if (view()->exists('default.template')) {
            $data = ['title'=>'Hello, world!'];

            $path = config('view.path');
            // view()->file($path[0].'/default/template.php')->withTitle('New Title');
            return view('default.template', $data);
        }

        abort(404);
    }
}

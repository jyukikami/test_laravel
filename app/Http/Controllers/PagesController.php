<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //

    public function about() {

        // 配列に値をセット
        $data = [];
        $data["first_name"] = "Luke";
        $data["last_name"] = "Skywalker";
        return view('pages.about',$data);
    }
}

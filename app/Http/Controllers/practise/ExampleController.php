<?php

namespace App\Http\Controllers\practise;

use App\Models\Item;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class ExampleController extends Controller
{
    public function index(){
        $items = Item::orderBy('id','desc')->get();
        return view('admin.index',compact('items'));
    }


}

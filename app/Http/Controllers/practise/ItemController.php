<?php

namespace App\Http\Controllers\practise;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Item;
class ItemController extends Controller
{
    //item create
    public function create(){
        return view('admin.item_create');
    }//end method

    //item insert
    public function insert(Request $request){
        $request->validate([
            'name'=>'required|unique:items',
        ],[
            'name.required'=>'The can not be empty.',
        ]);

          //orm
          $item = new Item();
          $item->name = $request->name;
          $item->save();
          $message = 'Item inserted successfully';
          return redirect()->route('home')->with('success_message', $message );
    }//end method

    //edit form
    public function edit($id){
        $item = Item::find($id);
        //$item = Item::where('id',$id)->first();
        return view('admin.item_edit',compact('item'));
    }//end method

    //update
    public function update(Request $request){
        $id = $request->id;


        $request->validate([
            'name'=>'required|unique:items,name,'.$id,
        ],[
            'name.required'=>'The can not be empty.',
        ]);

        $item = Item::find($id);
        $item->name = $request->name;
        $item->save();
        $message = 'Item updated successfully';
        return redirect()->route('home')->with('success_message', $message );
    }//end method

    //delete
    public function delete($id){
        $item = Item::find($id);
        $item->delete();
        $message = 'Item deleted successfully';
        return redirect()->route('home')->with('success_message', $message );
    }
}

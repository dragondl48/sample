<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FirstController extends Controller
{
    public function index(){
        return 'hieuVIP';
    }
    public function __construct()
    {
        
    }

    public function aaa(){
        return view ('list');
    }

    public function getCategory($id){
        return view ('edit');
    }

    public function updateCategory($id){
        
        return 'update Category'.$id;
    }

    public function addCategory(){
        return view('add');
    }

    public function handleAddCategory(Request $request){
        $categoriesName=$request->input('categoryName');
        // $my_array=array();
        // array_push($my_array,$categoriesName);
        // foreach($my_array as $my_array){
		//     // echo $my_array ;
        //     print_r($my_array);
		// }
        
        
        return $categoriesName;
    }

    public function deleteCategory($id){
        // return 'delete data'.$id;
        return 'phuc test';
    }
}

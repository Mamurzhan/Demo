<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Ajax;

class AjaxController extends Controller
{
    public function form_submit(Request $request){
       $model=new Ajax();
       $model->name=$request->post('name');
       $model->lastname=$request->post('lastname');
       $model->email=$request->post('email');
       $model->save();
       return ["msg"=>"Data inserted"];
    }
}

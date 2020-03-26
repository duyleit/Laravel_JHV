<?php

namespace App\Http\Controllers;


use App\Article;
use Illuminate\Http\Request;
use App\posts;
use Illuminate\Support\Facades\Input;


class FoodOrderController extends Controller
{
    //
   public function  show($id)
   {
       $post=posts::find($id);
       return view('foodorder.show')->with('post',$post);
   }

    public  function search()
    {
      //  $this->auth();
        $posts = posts::all();
        //return view('FoodOrder.search')->with('posts',$posts);
        return view('FoodOrder.search',['posts'=>$posts]);
    }
    public function edit($id)
    {
      $post= posts::find($id);
      return view('FoodOrder.edit',compact('post'));
    }
    public function update($id)
    {
            dd('update thanh cong');
    }
    public function add()
    {
       $title= Input::get('vtitle');
       $content=Input::get('vcontent');

        posts::create([
           'title' => $title,
           'content'=>$content
            ]);

       return redirect()->route('foodorder.search');

    }
    public function destroy($id )
    {

       $post = posts::find($id);
       $post->delete();


        return redirect()->route('foodorder.search');
    }
}

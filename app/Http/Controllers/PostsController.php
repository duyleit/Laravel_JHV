<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\posts;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Paginator;


class PostsController extends Controller
{

    public  function index()
    {
       return view('Posts.index');
    }
    public function advanceSearch()
    {

     /*   if ($this->request->isPost()) {
            $query = Criteria::fromInput($this->di, 'Post', $_POST);
            $this->persistent->parameters = $query->getParams();
        } else {
            $numberPage = $this->request->getQuery("page", "int");
        }

        $parameters = $this->persistent->parameters;
        if (!is_array($parameters)) {
            $parameters = [];
        }
        $parameters["order"] = "id DESC";
        $extendConditions = 'com_code LIKE "' . $this->session->get('user-com_code') . '" AND status >= 1';*/

        $numberPage = 2;
        $qry= 'title LIKE %' . Input::get('txtTitle').'%';

        //  $post = Posts::find($this->addConditions($parameters, $extendConditions));
        //   $meeting_room_booking = MeetingRoomBooking::find($parameters);
        $post = Posts::find($qry);
        if ($post != '') {
    /*        $this->flash->notice("The search did not find any post");

            $this->dispatcher->forward([
                "controller" => "posts",
                "action" => "index"
            ]);*/

            session()->flash('success','The search did not find any post !!!');
            return redirect()->route('posts.index');

             }
/*
        $paginator = new Paginator([
            'data' => $post,
            'limit' => 10,
            'page' => $numberPage
        ]);

        $this->view->page = $paginator->getPaginate();*/
        return view ('Posts.search')->with('posts',$post);
    }

    public function  search()
    {
/*
        parent::auth();
        $posts = posts::all()->paginate(2);
        if (!Auth::check()) {
            return redirect("system/login");
        }*/
        $posts= posts::simplePaginate(3);
        return view ('Posts.search')->with('posts',$posts);

    }
    public function edit($id)
    {
        $post=posts::find($id);
     //  dd($post->title);
         return view('Posts.edit',compact('post'));
//        return view('articles.edit', compact('article'));
    }
    public function update($id)
    {

        $data = request()->all();
        $post= posts::find($id);
        $post->title = $data['txtTitle'];
        $post->content = $data['txtContent'];

        $post->save();
  /*      return redirect('/posts');

        $post = posts::find($id);
        $post->update(
            [
                'title' => $request->input('txtTitle'),
                'content' => $request->input('txtContent')

            ]
        );*/
        session()->flash('success','Cập nhật dữ liệu thành công !!!');
        return redirect()->route('Posts.search');


/*        public function update(Request $request, $id)
{
        $product = Product::findOrFail($id);
        $product->update($request->all());
        return redirect()->route('products.index');
    }*/
    }
    public function add()
    {
        return view('Posts.add');
    }


    public function store()
    {
        $title = Input::get('txtTitle');
        $content = Input::get('txtContent');
        posts::create([
            'title' => $title,
            'content' => $content
        ]);
        session()->flash('success', 'Lưu dữ liệu thành công !!!');
        return redirect()->route('Posts.search');
    }
    public function destroy($id)
    {
        $post = posts::find($id);
        if (!$post) {
            session()->flash('success', 'Không tìm thấy dữ liệu để xóa !!!');
        } else {
            $post->delete();
            session()->flash('success', 'Đã xóa thành công !!!');
            return redirect()->route('Posts.search');

        }
    }
}

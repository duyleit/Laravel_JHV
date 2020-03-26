<?php

namespace App\Http\Controllers;

use App\role;
use App\com;
use App\dept;
//use App\user;
use App\users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Paginator;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function __construct()
    {
    $role = role::all();
    $com =com::all();
    $dept= dept::all();
   // $status=[0,1];



//       $role=role::find([
//           'columns' => 'code,name',
//           'order' => 'name ASC'
//       ]);
        view()->share('role',$role);
        view()->share('com',$com);
        view()->share('dept',$dept);
    //    view()->share('status',$status);
//        parent::__construct();
//   dd($role);
//        $r= dept::where('code','=','AC')->first();
        //foreach( $dept_find as $r)
       // {
//            echo $r->code . ' - ' . $r->name. ' - ';
       // }
//        $user=user::find(1);
//        dd($user->id);
//        $role_new=role::find(99);
//        $role_new->delete();
//    die();



    }
    public function search()
    {

        $users= users::simplePaginate(5);
        return view('user.search')->with('users',$users);
        //return redirect()->route('add');

//      //  $ar=['name','tam'];
//        $obj =role::where('id','>',1)
//               ->orderBy('id','desc')
//               ->take(10)
//               ->get();
//        //$objArr=array("dulieuobj" => $obj);
//        foreach ($obj as $ar)
//        {
//            echo "<pre>";
//           // var_dump($objArr);
//            echo $ar->name;
//            echo "</pre>";
//        }
//        die();
    }

    public function create()
    {
//        $name='Nani';
//        $age= 48;
//        $info=[];
//        $info['name']=$name;
//        $info['age']=$age;
        return view('user.add');
    }

    public function store(Request $request)
    {

//        $request->validate([
//          'txt_name' => 'required|min:5|max:255'
//        ]);

        $validator = Validator::make($request->all(), [
            'txt_name' => 'required|min:5|max:255',
            'txt_email' => 'required|email'

        ]);

        if ($validator->fails())
        {
           // return $validator->errors();
            return redirect('/user/new')->withErrors($validator)->withInput();
        }


//      $id =   $request->input('txt_id');  C1
//      $pass = $request->input('txt_pass');
        $id = $request->txt_id; //C2
        $pass = $request->txt_pass;
//      $name = $request->input('txt_name');
        $name = $request->txt_name;
        $email = $request->input('txt_email');
        $phone = $request->input('txt_phone');

        $role = $request->input('sel_role'); // lay gia tri ID tu select form
        $role_code=role::find($role);  // tim ra dong tuong ung voi ID

        $com = $request->input('sel_com');
        $com_code=com::find($com);

        $dept = $request->input('sel_dept');
        $dept_code=dept::find($dept);

        $act = $request->input('sel_active');


        $user = new users();
      //  $user->id=100;   Auto Increment
        $user->code=$id;
        $user->pass=password_hash($pass,PASSWORD_BCRYPT);
        $user->fullname=$name;
        $user->email=$email;
        $user->phone_extend=$phone;
        $user->role_code=$role_code->code; // tư dong ID tren lay ra gia tri CODE
        $user->com_code=$com_code->code;
        $user->dept_code=$dept_code->code;
        $user->status=$act;
        $user->save();

//        $user = new users();
//        $user->id=99;
//        $user->username=$id;
//        $user->password=password_hash($pass, PASSWORD_BCRYPT);
//
//        $user->save();

        session()->flash('message','Save successfully !!!');
        return redirect()->route('user.search');

       // dd($role_code->code);
       // die();

    }

    public function edit($id)
    {
        $user = users::find($id);
        $other=[];
        $other['com']=$user->com_code;
        $other['role']=$user->role_code;
        $other['dept']=$user->dept_code;
        $other['status']=$user->status;

  //    return view('user.edit')->with('user',$user);
  //    return view('user.edit')->with(compact('user'))->with(compact('com',$user->com_code))->with(compact('role',$user->role_code));
        return view('user.edit')->with('other',$other)->with('user',$user);

    }

    public function update( Request $request)
    {

        $id = $request->txt_id;
        $name = $request->txt_name;
        $email = $request->txt_email;
        $phone = $request->txt_phone;

        $role = $request->input('sel_role'); // lay gia tri ID tu select form
        $role_code=role::find($role);  // tim ra dong tuong ung voi ID

        $com = $request->input('sel_com');
        $com_code=com::find($com);

        $dept = $request->input('sel_dept');
        $dept_code=dept::find($dept);

        $act = $request->sel_active;


        $user = users::find($id);

        $user->fullname=$name;
        $user->email=$email;
        $user->phone_extend=$phone;
        $user->role_code=$role_code->code; // tư dong ID tren lay ra gia tri CODE
        $user->com_code=$com_code->code;
        $user->dept_code=$dept_code->code;
        $user->status=$act;
        $user->save();

        session()->flash('message','Update successfully !!!');
        return redirect()->route('user.search');

//        return redirect('register')
//            ->with('message', 'Update successfully !!!');

    }

    public function destroy($id)
    {
        $user= users::find($id);
       // $user= user::findFirstByid($id);  Phalcon

        if($user == null)
        {
            session()->flash('message','User does not exist !!!');

        }
       else
       {
            $user->delete();
           session()->flash('message','Delete successfully !!!');

        }
        return redirect()->route('user.search');

    }
    public function show()
    {
         echo ' Processing .... !!!';
    }
    public function index()
    {
         return view('user.index');
    }
}

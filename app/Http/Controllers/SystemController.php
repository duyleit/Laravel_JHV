<?php
/**
 * Created by PhpStorm.
 * User: Duy.Le
 * Date: 17/10/2019
 * Time: 3:32 PM
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;

use Illuminate\Http\Response;
use App\users;
use PharIo\Manifest\AuthorTest;
//use App\Users;

class SystemController extends Controller
{
//    function __construct()
//    {
//        if(Auth::check())
//        {
//            view()->share('userlg',Auth::user());
//        }
//    }

    public function login()
       {
//           if(request()->isPost())
//           {
//               echo "You pushed button";
//           }
//           else
//           {
//               return view("authen");//
//            }
         //  return view('Posts.add');
           return view("System.login");
         //   return view("auth.login");
        //   return $this->response->redirect('FoodOrderController/search');
       }
//    public function postRegister(Request $request) {
//        $username = $request['username'];
//        $email = $request['email'];
//        $password = bcrypt($request['password']);
//
//        $user = new User();
//        $user->email = $email;
//        $user->username = $username;
//        $user->password = $password;
//
//        $user->save();
//
//        return redirect()->route('login');
//    }
       public function ChkLgn(Request $request)
       {

           $getuname = $request['txtUser'];
           $password = $request['txtPass'];
           //$uname = User::findFirstByUsername($request['txtUser']);
           //   $uname=User::where('username',$getuname)->first(); *
           // $uname = DB::table('User')->where('username', $request['txtUser'])->first();
           //  if ($uname)*
           // if(Auth::attempt(['code'=>$getuname,'pass' =>$password]))
            $user= users::where('code',$getuname)->first();


           //  $pass= $this->security->hash($password);
           if ($user) {
               //  dd(User['password']);
               //   if( $password == $uname->password)*
               //    {
               // return "Login Successfully !!!";
               //  session()->flash('success','Login Successfully');
               // return view('layouts.index');
               // session()->set('username',$uname);
               // $request->session()->put('username',$getuname); //dont need session var

               if ( password_verify($password,$user->pass)) {
                   // return redirect('');
                   $request->session()->put('username',$getuname); //dont need session var
                   return view('layouts.index');
               }
               else {
                   // return "Password wrong !!!";
                   $request->session()->flash('failure', 'Password wrong');
                   return view('System.login');
                   //  return redirect()->back()->with(['flag' => 'danger','message' => 'Đăng nhập thất bại']);
               }

               //  return redirect()->back()->with(['flag' => 'success','message' => 'Đăng nhập thành công']);
           }

//          }*
              else
              {
                  session()->flash('failure','User does not exist');
                  return view('System.login');
                 // return "Users not exist !!!";
              }


//
//           $credentials = [
//               'username' => $request['txtUser'],
//               'password' => $request['txtPass']
//           ];
//
//         if (Auth::attempt($credentials,true)){
//             dd('success');
//           }
//           else {
//               dd('failed');
//           }

////           $username = Input::get('txtUser');'password' => $request['txtPass'],
////           $pass     = Input::get('txtPass');


       }
       public function logout(Request $request)
       {
           //    Request::session()->forget('username');
           //       Auth::logout(); // lien quan remember_token in db
               $request->session()->forget('username'); //dont need session var
//           $this->session->remove('username');
           return redirect('');
       }
       public function profile()
       {
           return 'Trang cập nhật thông tin người dùng';
       }
//       public  function setCookie()
//       {
//          $response = new response;
//          $response->withCookie(
//              'name','laravelCookie',1
//          );
//          return $response;
//       }
//       public function  getCookie(Request $request)
//       {
//           echo 'cookie cua ban la :' ;
//           return $request->cookie('name');
//       }
}

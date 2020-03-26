@extends('./master')
@section('bg')
  <div class="container-fluid jhv-bodytop3" style="background: url({{ url('img/system/top-bg.jpg') }}) no-repeat center center; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;">
    <h1 class="text-center text-shadow">Systems</h1>
  </div>
@endsection
@section('content')

 <div class="container">
<hr>
<div class="row">
  <div class="col-md-6 col-md-offset-3">
   <div class="row">
     <div class="col-md-4 col-md-offset-4">
         <img class="img-responsive" src={{url('img/system/padlock-icon.png')}}>
     </div>
   </div>

    <hr>
    <div class="page-header">
          <h1>Login</h1>
      </div>

    <form action="{{route('system.ChkLgn')}}" method="POST" class="form-horizontal">

    <div class="form-group">
    <label for="fieldUser" class="col-sm-3 control-label">User</label>
    <div class="col-sm-9">
    <input type="text" class="form-control" name="txtUser" required placeholder="Nhập UserName">
    </div>
    </div>

    <div class="form-group">
    <label for="fieldPass" class="col-sm-3 control-label">Password</label>
    <div class="col-sm-9">
    <input type="Password" class="form-control" name="txtPass" required placeholder="Nhập Password">
    </div>
    </div>

    <input type="hidden" name="_token" value="{{csrf_token()}}">

    <div class="form-group">
    <div class="col-sm-offset-3 col-sm-3">
    <button type="submit" class="btn btn-default">Login</button>
    </div>
    </div>

    </form>

  </div>
 </div>



   {{--#2 CÁCH KHÁC --}}
   {{--<div class="page-header">--}}
   {{--</div>--}}

   {{--<div class="row">--}}
     {{--<div class="col-md-4"></div>--}}
     {{--<div class="col-md-4">--}}
       {{--<img height="170px" width="170px" src={{url('img/system/padlock-icon.png')}}>--}}
     {{--</div>--}}
     {{--<div class="col-md-4"></div>--}}
   {{--</div>--}}

   {{--<div class="row">--}}
     {{--<div class="col-md-3"></div>--}}
     {{--<div class="col-sm-offset-3 col-sm-3">--}}
       {{--<hr>--}}
       {{--<h3> Login</h3>--}}
       {{--<hr>--}}
     {{--</div>--}}
     {{--<div class="col-md-4"></div>--}}
   {{--</div>--}}

   {{--<div class="row">--}}
      {{--<div class="col-md-3"></div>--}}
      {{--<div class="col-md-5">--}}
       {{--<form action="{{route('system.ChkLgn')}}" method="POST" class="form-horizontal">--}}
         {{--<div class="form-group">--}}
           {{--<label for="fieldUser" class="col-sm-3 control-label">User</label>--}}
           {{--<div class="col-sm-9">--}}
             {{--<input type="text" class="form-control" name="txtUser" required placeholder="Nhập UserName">--}}
           {{--</div>--}}
         {{--</div>--}}

         {{--<div class="form-group">--}}
           {{--<label for="fieldPass" class="col-sm-3 control-label">Password</label>--}}
           {{--<div class="col-sm-9">--}}
             {{--<input type="Password" class="form-control" name="txtPass" required placeholder="Nhập Password">--}}
             {{--<input id="password" type="password" class="form-control" name="txtPass" required placeholder="Nhập Password">--}}
           {{--</div>--}}
         {{--</div>--}}
         {{--<input type="hidden" name="_token" value="{{csrf_token()}}">--}}
        {{--<div class="form-group">--}}
           {{--<div class="col-sm-offset-3 col-sm-3">--}}
             {{--<button type="submit" class="btn btn-default">Login</button>--}}
           {{--</div>--}}
         {{--</div>--}}

       {{--</form>--}}
     {{--</div>--}}
     {{--<div class="col-md-4"></div>--}}
   {{--</div>--}}
 </div>
@endsection
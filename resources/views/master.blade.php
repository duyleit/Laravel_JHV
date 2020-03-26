<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css"  href="{{ url('bootstrap/css/bootstrap.min.css') }}"/>
        <link rel="stylesheet" type="text/css"  href="{{url('css/font-awesome/css/font-awesome.min.css')}}"/>
        <link rel="stylesheet" type="text/css"  href="{{ url('css/app.css') }}"/>
        <title>Laravel</title>
    </head>

    <body>
    <header>
        <div class="container-fluid jhv-top1">
            <ul class="nav pull-right small">
                <a href="{{ url('system/lang/en') }}"><img src="{{ url('img/flags/en.png') }}" title="English"></a>
                <a href="{{ url('system/lang/zh-hans') }}"><img src="{{ url('img/flags/zh-hans.png') }}" title="中文"></a>
                <a href="{{ url('system/lang/vi') }}"><img src="{{ url('img/flags/vi.png') }}" title="Tiếng Việt"></a>

                {{--@if( isset($userlg) )--}}
                    {{--<a href="{{route('system.profile')}}"> {{  $userlg->username }}</a>--}}
                    {{--<a href="{{route('system.logout')}}">Logout</a>--}}
                {{--@else--}}
                    {{--<a href="system/login">Login</a>--}}
                {{--@endif--}}

                @if(  session()->has('username') )
                <a href="{{route('system.profile')}}">{{session()->get('username')}}</a>
                <a href="{{route('system.logout')}}">Logout</a>
                @else
                <a href="{{route('system.login')}}">Login</a>
                @endif

                {{--@if(  Auth::check() )--}}
                    {{--<a href="{{route('system.profile')}}">{{ Auth::user()->username }}</a>--}}
                    {{--<a href="{{route('system.logout')}}">Logout</a>--}}
                {{--@else--}}
                    {{--<a href="{{route('system.login')}}">Login</a>--}}
                {{--@endif--}}

            </ul>
        </div>
     <div class="container-fluid jhv-top2">
        <nav class="navbar navbar-default ">
            {{--<div class="container-fluid">--}}
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="{{ url('') }}"><img src="{{ url('img/logo.png') }}"></a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="active"><a href="{{ url('') }}">Home</a></li>
                            <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">App
                                <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="{{ url('meeting_room_booking') }}">Meeting Room Booking</a></li>
                                <li><a href="{{ url('medicine_basic') }}">Infirmary</a></li>
                                <li><a href="{{ url('user') }}">User</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            {{--</div>--}}
        </nav>
     </div>
    </header>

    {{--<div class="container-fluid jhv-bg1" style="background: url({{ url('img/index/top-bg.jpg') }}) no-repeat center center">--}}
        {{--<h1 class="text-center text-shadow">Company Applications</h1>--}}
    {{--</div>--}}



    <div class="container-fluid jhv-top3">
        @yield('bg')
    </div>

    <div class="container-fluid">
        {{--@if(session()->has('success'))--}}
            {{--<div class="alert alert-success">--}}
                {{--{{session()->get('success')}}--}}
                {{--{{Session::get('success')}} Cach 2 --}}
            {{--</div>--}}
        {{--@endif--}}
        {{--@if(session()->has('failure'))--}}
                {{--<div class="alert alert-danger">--}}
                    {{--{{session()->get('failure')}}--}}
                    {{--{{Session::get('failure')}} Cach 2--}}
                {{--</div>--}}
         {{--@endif--}}
        @yield('content')
    </div>

    <footer>
        <hr>
        <div class="container">
            <p class="small text-justify " style="margin-top: 20px">
                Hoan nghênh bạn sử dụng hệ thống APP của công ty, hệ thống này bao gồm thông tin cá nhân quan trọng hoặc bí mật kinh doanh, hãy dựa theo quyền hạn trách nhiệm được giao lưu giữ, tuân thủ các quy định liên quan và cẩn thận khi thao tác sử dụng, tránh các hành vi vi phạm pháp luật. Nếu có hành vi vi phạm các quyền hạn và trách nhiệm được công ty trao về việc thu thập, xử lý không đúng, lợi dụng quyền hạn từ đó gây ra bất kỳ thiệt hại nào cho công ty hoặc KH, sẽ căn cứ theo chính sách của công ty và pháp luật có liên quan tiến hành xử phạt. Khi sử dụng nếu bạn có bất kỳ câu hỏi nào về chương trình này, xin vui lòng liên hệ với bộ phận IT phần mềm, số nội bộ JHV 1159 , chúc bạn sử dụng vui vẻ.
            </p>
        </div>
        <hr>

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8">
                    <p class="small">
                        Copyright &copy2019 by <strong>Jia Hsin Co.,LTD</strong>. All right reserved.
                    </p>
                </div>
                {{--<div class="col-md-4">--}}
                {{--</div>--}}
                <div class="col-md-4">
                    <p class="text-right small">
                        Version <strong>1.0.1</strong> - Developed by <strong>Jia Hsin IT Department</strong>.
                    </p>
                </div>
            </div>
        </div>
    </footer>
<script type="text/javascript" src="{{url('js/jquery.min.js')}}">  </script>
<script type="text/javascript" src="{{url('bootstrap/js/bootstrap.min.js')}}">  </script>
 <script type="text/javascript" language="javascript" src="{{url('vendor/ckeditor/ckeditor.js')}}" ></script>
</body>
</html>

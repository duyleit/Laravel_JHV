@extends('./master')
@section('bg')
    <div class="container-fluid jhv-bodytop3" style="background: url({{ url('img/user/top-bg.jpg') }}) no-repeat center center; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;">
        <h1 class="text-center text-shadow">Users</h1>
    </div>
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="row">
                <div class="col-md-4 col-md-offset-5">
                    <a href="{{url('user')}}" class="btn btn-primary" style="margin-top: 5px"><i class="fa fa-list-ul" aria-hidden="true"></i> User List</a>
                </div>
            </div>
            <div class="row procbar">
                <div class="col-md-5">
                    <form method="post" class="form-horizontal" action="">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search...">
                            <span class="input-group-btn"><button class="btn btn-default" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button></span>
                        </div>
                    </form>

                </div>
                <div class="col-md-7 text-right">
                    <a href="{{url('user')}}" class="btn btn-sm btn-default">  <i class="fa fa-search" aria-hidden="true"></i>  Advance Search</a>
                    <a href="{{url('user/search')}}" class="btn btn-sm btn-default"><i class="fa fa-list-ul" aria-hidden="true"></i>  List</a>
                    <a href="{{url('user/new')}}" class="btn btn-sm btn-primary btn-sm"><i class=" fa fa-plus" aria-hidden="true"></i>  Add</a>
                </div>
            </div>
        </div>
        <hr>
        @yield('body')
    </div>

@endsection




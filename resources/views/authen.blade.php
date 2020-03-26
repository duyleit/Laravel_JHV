@extends('master')

@section('content')
    <div class="container">
        <div class="col-sm-6 col-sm-offset-3">
            <div class="row">
                <div class="col-xs-4 col-xs-offset-4 ">
                    <image class="img-responsive" src={{url('public/img/padlock-icon.png')}}></image>
                </div>
            </div>

            <hr>
            <div class="page-header">
                <h1> Login</h1>
            </div>


            <form action="System/Auth" method="post" autocomplete="off" class="form-horizontal">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group">
                    <label class="col-sm-3 control-label">User</label>
                    <div class="col-sm-9"><input type="text" autofocus="true" required="true" class="form-control"
                                                 size="30" id="fieldUser" required placeholder="Input User" name="user">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Pass</label>
                    <div class="col-sm-9"><input type="password" class="form-control" id="fieldPass" size="30"
                                                 autofocus="true" required="true" required placeholder="Input Pass"
                                                 name="pass"></div>
                </div>
                <div class="form-group">
                    <div class=" col-sm-offset-3 col-sm-9"><input type="submit" class="btn btn-default" value="Login">
                    </div>
                </div>


            </form>

            {{--<div class="lgn">--}}
            {{--<div class="row">--}}
            {{--<label>User</label>--}}
            {{--<input width="25px">--}}
            {{--</div>--}}
            {{--<div class="row">--}}
            {{--<label>Password</label>--}}
            {{--<input width="25px" >--}}
            {{--</div>--}}
            {{--<div class="row">--}}
            {{--<input width="25px" type="button" value="Login">--}}
            {{--</div>--}}
            {{--</div>--}}

        </div>
    </div>
@stop
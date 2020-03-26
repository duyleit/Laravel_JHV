{{--@extends('./master')--}}
{{--@include('./layouts/post')--}}
@extends('./layouts/user')
@section('body')
<div class="page-header">
    <h5>Add User</h5>
</div>


{{--@if (count($errors) > 0)--}}
    {{--<div class="alert alert-danger">--}}
        {{--Thông tin đăng ký không đầy đủ, bạn cần chỉnh sửa như sau:--}}
        {{--<ul>--}}
            {{--@foreach ($errors->all() as $error)--}}
                {{--<li>{{ $error }}</li>--}}
            {{--@endforeach--}}
        {{--</ul>--}}
    {{--</div>--}}
{{--@endif--}}

@if($errors->count())
    <div class="alert alert-danger">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <strong>Errors!</strong>
        <ul>
            @foreach($errors->all() as $error)
            <li> {{$error}}</li>
            @endforeach
        </ul>
    </div>    
@endif

<form action="{{route('user.store')}}" method="POST" class="form-horizontal">

    <div class="form-group">
        <label class="col-md-2  control-label">Id</label>
       <div class="col-md-10">
           <input class="form-control" name="txt_id">
       </div>
     </div>

    <div class="form-group">
        <label class="col-md-2  control-label">Pass</label>
        <div class="col-md-10">
            <input class="form-control" name="txt_pass" type="password">
        </div>
    </div>

    <div class="form-group">
        <label class="col-md-2  control-label">Name</label>
        <div class="col-md-10">
            <input class="form-control" name="txt_name">
        </div>
    </div>

    {{--select--}}
    <div class="form-group">
        <label class="col-md-2  control-label">Role</label>
        <div class="col-md-10">
            <select name="sel_role" class="form-control">
               <option selected hidden>Choose here</option>
              @foreach( $role as $r)
                  <option value="{{$r->id}}">{{$r->name}}</option>
              @endforeach
               </select>
         </div>
      </div>
{{--select--}}
<div class="form-group">
<label class="col-md-2  control-label">Company</label>
<div class="col-md-10">
    <select name="sel_com" class="form-control">
        <option selected hidden>Choose here</option>
        @foreach( $com as $c)
            <option value="{{$c->id}}">{{$c->name}}</option>
        @endforeach
    </select>
</div>
</div>
{{--select--}}
<div class="form-group">
<label class="col-md-2  control-label">Department</label>
<div class="col-md-10">
    <select name="sel_dept" class="form-control">
        <option selected hidden>Choose here</option>
        @foreach( $dept as $d)
            <option value="{{$d->id}}">{{$d->name}}</option>
        @endforeach
    </select>
</div>
</div>

<div class="form-group">
<label class="col-md-2  control-label">Email</label>
<div class="col-md-10">
 <input class="form-control" name="txt_email" type="email">
</div>
</div>

<div class="form-group">
<label class="col-md-2  control-label">Phone</label>
<div class="col-md-10">
 <input class="form-control" name="txt_phone" type="number">
</div>
</div>

    {{--select--}}
    <div class="form-group">
        <label class="col-md-2  control-label">Active</label>
        <div class="col-md-10">
            <select name="sel_active" class="form-control">
                <option value="1">Active</option>
                <option value="0">Disable</option>
            </select>
        </div>
    </div>

<div class="form-group">
<div class="col-md-10 col-md-offset-2">
 <button type="submit" class="btn btn-default">Save</button>
</div>
</div>

    <input type="hidden" name="_token" value="{{csrf_token()}}"> </input>

</form>

@endsection


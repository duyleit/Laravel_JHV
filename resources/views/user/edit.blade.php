{{--@extends('./master')--}}
{{--@include('./layouts/post')--}}
@extends('./layouts/user')
@section('body')

 <div class="page-header">
  <h5>Edit User</h5>
 </div>

 <form method="POST" action="{{route('user.update')}}" class="form-horizontal">

   <div class="form-group">
    <label class="control-label col-md-2">Id</label>
    <div class="col-md-10">
     <input class="form-control" name="txt_id" value="{{$user->id}}" readonly>
    </div>
   </div>

  <div class="form-group">
   <label class="col-md-2  control-label">Name</label>
   <div class="col-md-10">
    <input class="form-control" name="txt_name" value="{{$user->fullname}}">
   </div>
  </div>

  {{--select--}}
  <div class="form-group">
   <label class="col-md-2  control-label">Role</label>
   <div class="col-md-10">
    <select name="sel_role" class="form-control">
     @foreach( $role as $r)
      {{--<option value="{{$r->id}}" {% if {{$r->code}} == {{ $other['role'] }} %} selected {%endif%}>{{$r->name}}</option>--}}
      <option value="{{$r->id}}" {{ ( $r->code == $other['role']) ? 'selected' : '' }}>{{$r->name}}</option>
     @endforeach
    </select>
   </div>
  </div>

  {{--select--}}
  <div class="form-group">
   <label class="col-md-2  control-label">Company</label>
   <div class="col-md-10">
    <select name="sel_com" class="form-control">
     @foreach( $com as $c)
{{--      <option value="{{$c->id}}" {% if {{$c->code}} == {{$other['com']}}) %} selected {% endif %} >{{$c->name}}</option>--}}
      <option value="{{$c->id}}" {{ ( $c->code == $other['com']) ? 'selected' : '' }}>{{$c->name}}</option>
     @endforeach
    </select>
   </div>
  </div>

  {{--select--}}
  <div class="form-group">
   <label class="col-md-2  control-label">Department</label>
   <div class="col-md-10">
    <select name="sel_dept" class="form-control">
     @foreach( $dept as $d)
      {{--<option value="{{$d->id}}">{{$d->name}}</option>--}}
      <option value="{{$d->id}}" {{ ( $d->code == $other['dept']) ? 'selected' : '' }}>{{$d->name}}</option>
     @endforeach
    </select>
   </div>
  </div>

  <div class="form-group">
   <label class="col-md-2  control-label">Email</label>
   <div class="col-md-10">
    <input class="form-control" name="txt_email" type="email" value="{{$user->email}}">
   </div>
  </div>

  <div class="form-group">
   <label class="col-md-2  control-label">Phone</label>
   <div class="col-md-10">
    <input class="form-control" name="txt_phone" type="number" value="{{$user->phone_extend}}">
   </div>
  </div>

  {{--select--}}
  <div class="form-group">
   <label class="col-md-2  control-label">Active</label>
   <div class="col-md-10">
    <select name="sel_active" class="form-control">
      <option value="1"  {{ ( $other['status']) == 1 ? 'selected' : '' }}> Active</option>
      <option value="0"  {{ (  $other['status']) == 0 ? 'selected' : '' }}> Disable</option>
      {{--<option value="{{$s['att']}}" {{ ( $s['att'] == $other['status']) ? 'selected' : '' }}>{{$s['att']}}</option>--}}
    </select>
   </div>
  </div>

  <input type="hidden" name="_token" value="{{csrf_token()}}">

  <div class="form-group">
   <div class="col-md-10 col-md-offset-2">
    <button type="submit" class="btn btn-default">Save</button>
   </div>
  </div>

 </form>
@endsection


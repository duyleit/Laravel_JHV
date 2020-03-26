{{--@extends('./master')--}}
{{--@include('./layouts/post')--}}
@extends('./layouts/user')
@section('body')

    @if(Session::has('message'))
        <p class="alert {{ Session::get('alert-class', 'alert-info') }}">   {{ Session::get('message') }} </p>
    @endif


    <div class="row table-responsive">
        <table class="table table-bordered table-hover">
            <thead>
                <tr class="success">
                    <th>Id</th>
                    <th>Name</th>
                    <th>Role</th>
                    <th>Com</th>
                    <th>Dept</th>
                    <th>Email</th>
                    <th>Phone</th>

                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
              @foreach( $users as $user )
                  <tr>
                      <td>{{$user->code}}</td>
                      <td>{{$user->fullname}}</td>
                      <td>{{$user->role_code}}</td>
                      <td>{{$user->com_code}}</td>
                      <td>{{$user->dept_code}}</td>
                      <td>{{$user->email}}</td>
                      <td>{{$user->phone_extend}}</td>

                      <td><a href="{{$user->id}}/edit" class="btn btn-default btn-sm"><i class="fa fa-edit" aria-hidden="true"></i>  Edit</a></td>
                      <td><a href="destroy/{{$user->id}}" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure DELETE?')"><i class="fa fa-trash-o" aria-hidden="true"></i>  Delete</a></td>
                  </tr>

              @endforeach
            </tbody>
        </table>

    </div>

    <div class="col-md-8 col-md-offset-5">
        {{$users->render()}}
{{--        {{ $users->nextPageUrl()  }}--}}
    </div>

    {{--<div class="row table-responsive">--}}
          {{--<table class="table table-bordered table-hover">--}}
              {{--<thead >--}}
              {{--<tr class="success">--}}
                  {{--<th> Id </th>--}}
                  {{--<th> UserName </th>--}}
                  {{--<th> Email </th>--}}
                  {{--<th> Date Created </th>--}}

                  {{--<th></th>--}}
                  {{--<th></th>--}}
              {{--</tr>--}}
              {{--</thead>--}}
              {{--<tbody>--}}



              {{--@foreach ($posts as $post )--}}
                  {{--<tr>--}}
                      {{--<td> {{$post->id}} </td>--}}
                      {{--<td> {{$post->title}} </td>--}}
                      {{--<td> {{ substr($post->content, 0, 80)}} </td>--}}
                      {{--<td>{{ $post->created_at }}</td>--}}
                      {{--<td><a href="{{$post->id}}/edit" class="btn btn-default btn-xs"><i class="fa fa-edit">  Edit</i></a></td>--}}
                      {{--<td><a href="destroy/{{$post->id}}" class="btn btn-danger btn-xs" onclick="return confirm('Are you sure to DELETE?')"><i class="fa fa-trash-o">  Delete</i></a></td>--}}

                      {{--<td><a href="edit/{{$post->id}}" class="btn btn-primary"> <i class=" fa fa-pencil-square-o">Edit</i></a></td>--}}
                      {{--<td><a href="destroy/{{$post->id}}" class="btn btn-xs btn-danger" onclick="return confirm('Are you sure delete ???')" ><i class="fa fa-trash-o">Delete</i></a> </td>--}}

                      {{--<td>{{ link_to("posts/edit/"~post.id, '<i class="fa fa-edit" aria-hidden="true"></i> Edit', 'class':'btn btn-xs btn-default') }}</td>--}}
                      {{--<td>{{ link_to("onclick":"return confirm('Are you sure to DELETE?')","posts/delete/"~post.id, '<i class="fa fa-trash-o" aria-hidden="true"></i> Delete', 'class':'btn btn-xs btn-danger', 'onClick': 'return confirm("Are you sure to DELETE?");') }}</td>--}}
                  {{--</tr>--}}
              {{--@endforeach--}}

              {{--</tbody>--}}
          {{--</table>--}}
      {{--</div>--}}
@endsection


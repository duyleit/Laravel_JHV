@extends('./layouts/post')
@section('body')
       <div class="page-header">
            <h3> Edit Content </h3>
        </div>
          <form method="POST" action="{{route('posts.update',$post->id)}}" class="form-horizontal col-md-offset-1">
            {{--<form method="POST" action="{{ route ("posts.update",$post->id }}"  class="form-horizontal">--}}
        {{--{!! Form::model($post, [--}}
                   {{--'route' => [ 'posts.update', $post->id ],--}}
                   {{--'method' => 'PUT',--}}
                   {{--'class' => 'form-horizontal'--}}
               {{--])--}}
           {{--!!}--}}
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            {{--<input type="hidden" name="_method" value="POST">--}}
            {{--{{csrf_field()}}--}}
            <div class="form-group">
                <label class="col-md-2 control-label" for="title">Title: </label>
                <div class="col-md-10">
                    <input class="form-control" type="text" name="txtTitle" value="{{$post->title}}">
                </div>
             </div>

            <div class="form-group">
                <label class="col-md-2 control-label" for="content">Content: </label>
                <div class="col-md-10">
                    {{--<input class="form-control" type="text" name="txtContent" value="{{$post->content}}">--}}
                    <textarea class="form-control" type="text" name="txtContent" rows="5">{{$post->content}}</textarea>

                </div>
              </div>
            <div class="form-group">
                <div class="col-md-10 col-md-offset-2">
                    <button class="btn btn-default" type="submit">Update</button>
                </div>
            </div>
{{--        {!! Form::close() !!}--}}
        </form>

@endsection
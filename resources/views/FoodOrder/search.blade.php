@extends('./master')

{{--@foreach( $articles as $article)--}}
@section('content')
 <div class="container">

         <div class="col-md-4 col-md-offset-4">
             <a href="./add" class="btn btn-primary">Add New</a>
             <hr>
         </div>


   <div class="row">
     <table class="table table-bordered table-hover">
        <thead>
        <tr>
             <th>Id</th>
             <th>Title</th>
             <th>Content</th>
            <th>CategoriesId</th>
            <th>slug</th>
            <th>created</th>
            <th>tags</th>
            <th>Userid</th>
            <th></th>
            <th></th>
        </tr>
        </thead>
         <tbody>
         {{--@if($articles.)--}}

         {{--@endif--}}
         @foreach($posts as $post)
             <tr>
                 <td>{{$post->id}}</td>
                 <td>{{$post->title}}</td>
                 <td>{{$post->content}}</td>
                 <td>{{$post->CategoriesId}}</td>
                 {{--<td>{{$post->slug}}</td>--}}
                 {{--<td>{{date('Y-m-d',$post->created)}}</td>--}}
                 {{--<td>{{$post->tags}}</td>--}}
                 {{--<td>{{$post->Userid}}</td>--}}

                 {{--<td><a href="edit/{{$post->id}}" class="btn btn-primary"> <i class=" fa fa-pencil-square-o">Edit</i></a></td>--}}
                 {{--<td><a href="destroy/{{$post->id}}" class="btn btn-xs btn-danger" onclick="return confirm('Are you sure delete ???')" ><i class="fa fa-trash-o">Delete</i></a> </td>--}}

             </tr>
        @endforeach
        </tbody>
     </table>


   </div>
     {{--<div class="row">--}}
         {{--<div class="col-sm-1">--}}
           {{--<p class="pagination">--}}
            {{--Tổng số trang:--}}
               {{--{!! $posts->lastPage() !!}}}--}}
           {{--</p>--}}
         {{--</div>--}}
         {{--<div class="col-sm-11">--}}

         </div>
@endsection
     {{--</div>--}}
 {{--</div>--}}

{{--@endforeach--}}
{{--@endsection--}}
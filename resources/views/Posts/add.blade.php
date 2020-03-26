@extends('./layouts/post')
@section('body')
    <div class="page-header">
        <h3> Add Content </h3>
    </div>

    <form method="POST" action="{{route('posts.store')}}" class="form-horizontal">
        <input type="hidden" name="_token" value="{{csrf_token()}}">

        <div class="form-group">
            <label class="control-label col-md-2" for="title">Title: </label>
            <div class="col-md-10">
                <input class="form-control" type="text" name="txtTitle" required placeholder="Nhập tiêu đề bài viết" >
            </div>
         </div>

        <div class="form-group">
            <label class="control-label col-md-2" for="content">Content: </label>
            <div class="col-md-10">
                <textarea id="demo" class="form-control" type="text" name="txtContent" rows="8"></textarea>
            </div>
         </div>

        <div class="form-group">
            <div class="col-md-10 col-md-offset-2">
                <button class="btn btn-default" type="submit">Save</button>
            </div>
          </div>
    </form>

@endsection
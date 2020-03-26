@extends('./layouts/post')
@section('body')
    <div class="page-header">
        <h3> Search Article</h3>
    </div>
    <form method="POST" action="{{route('posts.advanceSearch')}}" class="form-horizontal">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <div class="form-group">
            <div class="col-md-2">
                <label  class="control-label">
                    Title
                </label>
            </div>
            <div class="col-md-10">
                <input class="form-control" name="txtTitle" type="text">
            </div>

        </div>

        <div class="form-group">
            <div class="col-md-10 col-md-offset-2">
                <button class="btn btn-default" type="submit">Search</button>
            </div>
        </div>


    </form>




@endsection
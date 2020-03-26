@extends('./welcome')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
                <h3>
                    Thêm mới
                </h3>
                <hr>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
                <form action="./add" class="form-horizontal" method="POST">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="form-group">
                        <label class="control-label">Title: </label>
                        {{--<div class="col-sm-5">--}}
                        <input type="text" class="form-control" name="vtitle" required="required">
                        {{--</div>--}}

                    </div>
                    <div class="form-group">
                        <label class="control-label">Content: </label>
                        {{--<div class="col-sm-5">--}}
                        <input type="text" class="form-control" name="vcontent" required="required">
                        {{--</div>--}}
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary">Post Add</button>
                    </div>
                    {{--<div class="col-md-4 col-md-offset-4">--}}
                    {{--<input type="submit" value="Add New">--}}
                    {{--</div>--}}

                </form>
            </div>
        </div>

    </div>
@endsection
@extends('./welcome')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
                <h3>
                    <label>Cập Nhật Bài Viết</label>
                    <hr>
                </h3>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6">
                <form action=" ./update" class="form-horizontal" method="PUT">

                    <div class="form-group">
                        <label class="control-label">Title: </label>
                        <input class="form-control" type="text" required="required" name="content" id="vcontent">
                    </div>
                    <div class="form form-group">
                        <label class="control-label">Content: </label>
                        <input class="form-control" type="text" required="required" name="title" id="vtitle">
                    </div>
                    <div class="col-md-4 col-md-offset-4">
                        <button class="btn btn-primary">Update</button>
                    </div>

                </form>
            </div>
        </div>


    </div>

@endsection
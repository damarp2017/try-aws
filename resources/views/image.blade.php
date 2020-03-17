<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Upload Image to Amazon s3 cloud Storage Using laravel</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</head>
<body>
<div class="container">
    <h2>Laravel Upload Image to Amazon s3 cloud Storage Tutorial</h2><br/>
    @if (\Session::has('success'))
        <div class="alert alert-success">
            <p>{{ \Session::get('success') }}</p>
        </div><br/>
    @endif
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form method="post" action="{{url('store')}}" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <input type="file" name="image">
            </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <button type="submit" class="btn btn-success">Upload</button>
            </div>
        </div>
    </form>
</div>
</body>
</html>

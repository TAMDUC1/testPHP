<!-- edit.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Laravel 5.5 bookshelf </title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
<div class="container">
    <h2>Edit A User</h2><br  />
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div><br />
    @endif
    <form method="post" action="{{action('UserController@update', $id)}}">
        {{csrf_field()}}
        <input name="_method" type="hidden" value="PATCH">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <label for="name">Name:</label>
                <input type="text" class="form-control" name="name" value="{{$user->name}}">
            </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <label for="email">Email:</label>
                <input type="text" class="form-control" name="email" value="{{$user->email}}">
            </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <label for="password">Password:</label>
                <input type="text" class="form-control" name="password" value="{{$user->password}}">
            </div>
        </div>

</div>
<div class="row">
    <div class="col-md-4"></div>
    <div class="form-group col-md-4">
        <button type="submit" class="btn btn-success" style="margin-left:38px">Update Product</button>
    </div>
</div>
</form>
</div>
</body>
</html>
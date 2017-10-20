<!-- cart.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Cart </title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
<div class="container">
    <h2>Create A Cart</h2><br  />
    <form method="post">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <label for="name">Name:</label>

            </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <label for="price">Price:</label>

            </div>
        </div>
</div>
<div class="row">
    <div class="col-md-4"></div>
    <div class="form-group col-md-4">
        <button type="OK" class="btn btn-success" style="margin-left:38px">Add Product</button>
    </div>
</div>
</form>
</div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
    <div class="col col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3"></div>
    <div class="col col-12 col-sm-6 col-lg-6">
    <form action="/bookread" method="post">
    
    {{ csrf_field() }}
    
    <table class="table">
    <tr>
        <td>Title</td>
        <td><input name="bname" type="text" class="form-control"></td>
    </tr>
    <tr>
        <td>Author name</td>
        <td><input name="aname" type="text" class="form-control"></td>
    </tr>
    <tr>
        <td>Description</td>
        <td><input name="bdes" type="text" class="form-control"></td>
    </tr>
    <tr>
        <td>Distributer</td>
        <td><input name="bdis" type="text" class="form-control"></td>
    </tr>
    <tr>
        <td>Price</td>
        <td><input name="bprice" type="text" class="form-control"></td>
    </tr>
    <tr>
        <td></td>
        <td><button class="btn btn-primary">Submit</button></td>
    </tr>
    
    
    </table>
    
    </form>
    
    </div>
    
    </div>
</body>
</html>
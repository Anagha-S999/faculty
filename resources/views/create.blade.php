<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faculty</title>
</head>
<body>
    <div class="container">
    <div class="row">
    <div class="col col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3"></div>
    <div class="col">
    <form action="/facultyread" method="post">
     {{ csrf_field() }}

     <table class="table">
    <tr>
        <td>Faculty name</td>
        <td><input name="fname" type="text" class="form-control"></td>
    </tr>
    <tr>
        <td>Designation</td>
        <td><input name="fdes" type="text" class="form-control"></td>
    </tr>
    <tr>
        <td>College</td>
        <td><input name="fcollege" type="text" class="form-control"></td>
    </tr>
    <tr>
        <td>Contact no</td>
        <td><input name="fcontact" type="text" class="form-control"></td>
    </tr>
    <tr>
        <td></td>
        <td><button class="btn btn-primary">Submit</button></td>
    </tr>
    </table>
    
    
    </form>
    </div>
    </div>
    
    </div>
</body>
</html>
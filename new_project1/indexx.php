<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>CURD APP</title>
  </head>
  <body>
    <div class="container p-4 shadow">
    <h1> <a href="#" style="text-decoration: none;"> DarunIT Student Database</a></h1> 
    <form action="indexx.php" class="form" enctype="multipart/form-data">
        <input type="text" name="std_name"  class="form-control mb-2" placeholder="Enter your Name">
        <input type="number" name="std_Roll"  class="form-control mb-2" placeholder="Enter your Roll">
        <label for="std_img">Upload your Image </label>
        <input type="file" name="std_img" class="form_control mb-2">
        <input type="Submit" name="Add Information" id="" class="form-control bg-warning">

    </form> 
    </div>

    <div class="container p-4 my-4 shadow">
        <table class="table table-responsive">
            <thead>
                <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Roll</th>
                <th>Image</th>
                <th>Action</th>
                </tr>
            </thead>

        
        <tbody>
            <td>
                <tr>
                    <td>1</td>
                    <td>MD. Nazebul </td>
                    <td>950510</td>
                    <td> </td>
                    <td>
                        <a href="#" class="btn btn-success"> Edite</a>
                        <a href="#" class="btn btn-warning">Delete</a>
                    </td>
                </tr>
            </td>
        </tbody>
        </table>
    </div>





    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>
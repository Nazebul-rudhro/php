<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Student Add</title>
  </head>
  <body>
  <div class="container p-4 my-4">
        <form action="insert.php" method="post" class="form card p-4">
            <h2 class="text-center"><a href="#" style="text-decoration: none;"> Student Add Form </a></h2>
            <label>Full Name : </label>
            
            <input type="text" name="add_name" class="form-control mb-3" id="user" onchange="uperCase()" placeholder="Enter your Full Name" required>
            <label> Roll Number : </label>
            <input type="number" name="add_roll" class="form-control mb-3" placeholder="Enter your Roll Number" required>
            <label> Email : </label>
            <input type="email" name="add_email" class="form-control mb-3" placeholder="Enter your Email" required>
            <input type="submit" value="Add Student" name="add_submit" class="form-control mb-3 bg-success">
        </form>
    </div> 





    
    </script>
    <script>
        function uperCase(){
         const x = document.getElementById("user");
         x.value = x.value.toUpperCase();
     }
    </script>
    
  </body>
</html>

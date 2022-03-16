

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    

  <div class="container p-4 shadow">
      <form action="uploa.php" method="Post" class="form" enctype="multipart/form-data">
          <input type="file" name="btn_img" id="" class="form-control mb-3"> 
          <input type="submit" value="sumit" class="form-control bg-warning" name="btn_submit">
      </form>
  </div>

   




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>


<?php
// //tarikh
// echo date("d");
// //day
// echo date("D") . "<br>";
// //year
// echo date("Y"). "<br>";
// echo date_default_timezone_set("Asia/Dhaka");
// echo date_default_timezone_get();
// echo date("d/F/Y h-i-s") . "<br>";
// echo "<br>";
// echo date("d-M-Y");

// mk time- hour min sex moth day year
// 1st - hours - minute - secound -- month-day-year
// $mytime = mktime(20, 10, 30, 12, 16, 2023);
// echo date("d/F/Y h-i-s A", $mytime) . "<br>";

// $mytime1 = strtotime("next saturday");
// echo date("d/F/Y h-i-s A", $mytime1). "<br>";


$starDay = strtotime("next friday");
$endDay = strtotime("+7 weeks".$starDay);
while($starDay <= $endDay){
    echo date("d/F/Y ")
}

?>
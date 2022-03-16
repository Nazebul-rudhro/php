<?php

if(isset($_POST['btn_submits'])){
    $name = filter_input(INPUT_POST,'btn_name',FILTER_SANITIZE_STRING);
    $email= filter_input(INPUT_POST,'btn_emil',FILTER_SANITIZE_STRING);
    $comment = filter_input(INPUT_POST,'btn_comment',FILTER_SANITIZE_STRING);
    // $name = $_POST['btn_name'];
    // $email = $_POST['btn_emil'];
    // $comment = $_POST['btn_comment'];

  //echo $name ." ". $email." ". $comment;

}





?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="blog.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Blog</title>
  </head>
  <body>
    <div class="p-5 shadow">
        <div class="row ">
            <h2 class="text-center pb-5">Our Certificate & online programs For 2021</h2>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <div class="card">
                    <img src="eduford_img_2/certificate.jpg" alt="">
                     </div>
                     <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident placeat est similique in, deserunt minus ipsum tempore molestiae asperiores sapiente aperiam laudantium optio eos, voluptatum consectetur laboriosam unde, iure atque.</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident placeat est similique in, deserunt minus ipsum tempore molestiae asperiores sapiente aperiam laudantium optio eos, voluptatum consectetur laboriosam unde, iure atque.</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident placeat est similique in, deserunt minus ipsum tempore molestiae asperiores sapiente aperiam laudantium optio eos, voluptatum consectetur laboriosam unde, iure atque.</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident placeat est similique in, deserunt minus ipsum tempore molestiae asperiores sapiente aperiam laudantium optio eos, voluptatum consectetur laboriosam unde, iure atque.</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident placeat est similique in, deserunt minus ipsum tempore molestiae asperiores sapiente aperiam laudantium optio eos, voluptatum consectetur laboriosam unde, iure atque.</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident placeat est similique in, deserunt minus ipsum tempore molestiae asperiores sapiente aperiam laudantium optio eos, voluptatum consectetur laboriosam unde, iure atque.</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident placeat est similique in, deserunt minus ipsum tempore molestiae asperiores sapiente aperiam laudantium optio eos, voluptatum consectetur laboriosam unde, iure atque.</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident placeat est similique in, deserunt minus ipsum tempore molestiae asperiores sapiente aperiam laudantium optio eos, voluptatum consectetur laboriosam unde, iure atque.</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident placeat est similique in, deserunt minus ipsum tempore molestiae asperiores sapiente aperiam laudantium optio eos, voluptatum consectetur laboriosam unde, iure atque.</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident placeat est similique in, deserunt minus ipsum tempore molestiae asperiores sapiente aperiam laudantium optio eos, voluptatum consectetur laboriosam unde, iure atque.</p>
                    <strong><h4><?php
                         if(isset($name)){
                         echo $name;
                      }
                

                    ?>    
                    
                    <h6>
                 <?php
                         if(isset($comment)){
                         echo $comment.'<br>' . '<p style="margin-top:8px;"><strong class="btn bg-warning"> Reply </strong> <strong class="btn bg-success"> Edit </strong></p>';
                      }
                    ?>
                 </h6>  
                 
                </h4>
                  
                </strong>


            </div>
            
            <div class="col-sm-6">
            <div class="card">
                <div class="">
                    <table class="table table-responsiv">
                        <thead>
                        <tr>
                            <th class="bg-success">Post Categories</th>
                            <th class="bg-success"> </th>
                            
                        </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Business Analytics</td>
                                <td>21</td>
                            </tr>
                            <tr>
                                <td>Data science</td>
                                <td>28</td>
                            </tr>
                            <tr>
                                <td>Machine Learning</td>
                                <td>15</td>
                            </tr>
                            <tr>
                                <td>Computer Science</td>
                                <td>34</td>
                            </tr>
                            <tr>
                                <td>AutoCAD</td>
                                <td>42</td>
                            </tr>
                            <tr>
                                <td>Journalism</td>
                                <td>22</td>
                            </tr>
                            <tr>
                                <td>Commorco</td>
                                <td>13</td>
                            </tr>
                            <tr>
                                <td>Civil</td>
                                <td>15</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            </div>
            </div>

<div class="row">
    <div class="col-sm-6">
       <div class="card">
           <div class="p-4">
           <h5>Leave a Comment</h5>
           <form action="blog.php" method="post" class="form">
            <input type="text" name="btn_name" placeholder="Enter Your Name" class="form-control mb-3">
           
            <input type="email" name="btn_emil" placeholder="Enter Your E-mail" class="form-control mb-3">
            <textarea name="btn_comment" class="form-control mb-3" cols="74" rows="5" placeholder="Please writing someting......"></textarea>
            <input type="submit" value="Post Comment" name="btn_submits" class="form-control bg-success">
           </form>
           </div>
       </div>
    </div>
    <div class="col-sm-6 text-center">
        <form action="index.php" method="post" class="form">
            <input type="submit" class="btn bg-success" name="home_pag" value="Go To Home Page">
       
        </form>
    </div>
</div>





    </div>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>



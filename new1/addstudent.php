<?php include "header.php"; 


?>


<div class="container my-1">
<form action="insert.php" method="post" class="form  p-5 mx-5">
    <h2><a href="#" style="text-decoration: none;">Add Your Student </a></h2>
    <input type="text" name="btn_name" placeholder="Enter Your Student Full Name" class="form-control mb-3" onchange="upperCase()" id="fname" required>
    <input type="Number" name="btn_Roll" placeholder="Enter Roll Number" class="form-control mb-3" required>
    <input type="text" name="btn_semester" placeholder="Enter Current Semester" class="form-control mb-3" required>
    <input type="email" name="btn_email" placeholder="Enter Your Email" class="form-control mb-3" required>
    <input type="submit" value="Log in" name="btn_submit" class="form-control bg-warning" >
</form>
<h4 class="successfull_print">
    <?php 
    if(isset($_GET['new_massage'])){
        echo $_GET['new_massage'];
    }
    ?>
</h4>
</div>

<script>
 function upperCase(){
     const x = document.getElementById('fname');
     x.value = x.value.toUpperCase();
 }
</script>

<?php include "footer.php"; ?>
<?php include "header.php" ?>


<section id="frist" class="bg-warning">
    <div class="header">
        <div class="studentadd"> <a href="addstudent.php" style="text-decoration: none; color:black">Student Add</a> </div>
        <div class="Studentlist"><a href="output.php" style="text-decoration: none; color:black">Student List </a> </div>
        <div class="ownername"><a href="" style="text-decoration: none; color:black">Nazebul Hasan  </a></div>
    </div>
</section>

<p id="demo"> </p>
<script>

document.getElementById("demo").innerHTML = "Now time " + Date();


</script>


<?php include "footer.php" ?>
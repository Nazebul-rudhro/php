<?php include "header.php"?>
<?php include "dbconnect.php"?>
<form action="config.php" method="POST" class="form p-4">
    <h3> <a href="#" style="text-decoration: none;"> Crud Apps</a></h3>
    <label for="">Full Name :</label>
    <input type="text" name="btn_name" placeholder="Input your Full Name" class="form-control mb-2">
    <label for="">Roll :</label>
    <input type="number" name="btn_roll" placeholder="Input your Roll Number" class="form-control mb-2">
    <label for="">Email :</label>
    <input type="email" name="btn_email" placeholder="Input your Email" class="form-control mb-2">
    <input type="submit" value="submit" name="btn_submit"  class="form-control mb-2 bg-warning">



   
</form>
<table class="table table-hover table-bordered responsive p-4">
        <thead>
            <tr>
                <th>ID</th>
                <th>Full Name</th>
                <th>Roll Number</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $output ="SELECT * FROM `crud_apps` ";
            $result = mysqli_query($conn, $output);
            
            if(!$result){
                echo die("Query faild ". mysqli_error($conn));
            }else{
                while($row = mysqli_fetch_assoc($result)){
                    
                    ?>
                        <tr>
                <td> <?php echo $row['id']; ?> </td>
                <td><?php echo $row['Name']; ?></td>
                <td><?php echo $row['Roll']; ?></td>
                <td><?php echo $row['Email']; ?></td>
                <td>
                 <button type="button" class="btn btn-outline-success">Edit</button>
                 <button type="button" class="btn btn-outline-warning">Delete</button>
                </td>
                </tr>

                    <?php
                }
            }
            ?>
            
        </tbody>
    
    </table>


<?php include "footer.php"?>
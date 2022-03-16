<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="bio.php" method="POST">
    <label> Name : </label> <br>
    <input type="text" name="user_name"> <br>


    <label> Phone Number : </label> <br>
    <input type="number" name="phone"> <br> 

    <label> Date Of Birth : </label> <br>
    <input type="date" name="dob"> <br> 
     
    <label> Age : </label> <br>
    <input type="number" name="age"> <br> 
    


    <label> E-mail : </label> <br>
    <input type="email" name="email"> <br>
    <label> Password : </label> <br>
    <input type="password" name="password"> <br>

    <label> Comment : </label> <br>
    <textarea name="comment" cols="30" rows="10">Something write please </textarea> <br>
    <input type="checkbox" name="checkbox"> Are you Agree Web site Policy. <br>
    <input type="submit" value="submit" name="btn">


    </form>
</body>
</html>
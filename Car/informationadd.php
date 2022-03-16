<?php
include "header.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="information.css">
    <title>Information Add</title>
</head>
<body>
    
<div class="container py-4">
    
<form class="row g-3" action="infoconfig.php" method="POST" onsubmit="return myvalu()">
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Full Name </label>
    <input type="text" class="form-control" name="btn_fullname" id="inputEmail4" placeholder="Enter your full Name" value="">
    <label id="Fname" class=" text-success"></label>
  </div>
  <div class="col-md-6">
    <label for="inputdrivingid" class="form-label">Driving Id Number</label>
    <input type="number" class="form-control" name="btn_did" id="inputdrivingid" value="" placeholder="Enter your Driving Id Number" required>
    <label id="Fderivingid" class=" text-success"></label>
  </div>
  <div class="col-12">
    <label for="inputcarnumber" class="form-label">Car Number </label>
    <input type="text" class="form-control" name="btn_carnumber" id="inputcarnumber"  value="" placeholder="Enter your Car Number" required>
    <label id="Fcnumber" class=" text-success"></label>
  </div>
  <div class="col-12">
    <label for="inputAddress2" class="form-label">Owner Address </label>
    <input type="text" class="form-control" name="btn_address" id="inputAddress2"  value="" placeholder="Enter your Present Address" >
  </div>
  <div class="col-md-6">
    <label for="inputphone" class="form-label"> Phone Number </label>
    <input type="number" class="form-control" name="btn_phone" id="inputphone" value="" placeholder="Enter your Car Number" required>
    <label id="Fphone" class=" text-success"></label>  
  </div>
  <div class="col-md-4">
    <label for="inputState" class="form-label">State</label>
    <select id="inputState" class="form-select" name="btn_opption">
      <option selected>Choose...</option>
      <option name="btn_opption">Dhaka</option>
      <option name="btn_opption">Rajshahi</option>
      <option name="btn_opption">Rungpur</option>
      <option name="btn_opption">Dinajpur</option>
      <option name="btn_opption">Maymongsing</option>
      <option name="btn_opption"> chuttogram</option>
      <option name="btn_opption">khulna</option>
    </select>
  </div>
  <div class="col-md-2">
    <label for="inputzip" class="form-label">Zip</label>
    <input type="number" class="form-control" name="btn_zip" id="inputzip" value="">
    <label id="Fzip" class=" text-success"></label>
  </div>
  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck" required>
      <label class="form-check-label" for="gridCheck" >
        Check me out
      </label>
    </div>
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Sign in</button>
  </div>
</form>


</div>
<script>
function myvalu(){
  var name = document.getElementById('inputEmail4').value;
  var drivingid = document.getElementById('inputdrivingid').value;
  var carnumber = document.getElementById('inputcarnumber').value;
  var phone = document.getElementById('inputphone').value;
  var zip = document.getElementById('inputzip').value;

  if (name ==  ""){
    document.getElementById('Fname').innerHTML = "** Please input the fild";
    return false;
  }
  if (name.length > 30){
    document.getElementById('Fname').innerHTML = "** Please input in 30 words";
    return false;
  }
  if (name.length < 5){
    document.getElementById('Fname').innerHTML = "** You can't input words less than 5";
    return false;
  }

  // driving
  if(drivingid.length != 10 ){
    document.getElementById('Fderivingid').innerHTML = "Please input Right Number";
    return false;
  }

  // car number
  if(carnumber.length != 15){
    document.getElementById('Fcnumber').innerHTML = "Your Car Number is Worng";
    return false;
  }

// phone number
if(phone.length != 10){
  document.getElementById('Fphone').innerHTML = "** Please input Bangladeshi Number";
  return false;
}
// zip code
if(zip.length != 4){
  document.getElementById('Fzip').innerText = "** Please input Right Zip Code";
  return false;
}

}

</script>

</body>
</html>
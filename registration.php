<?php
    //echo "Welcome to PHPSandbox";

// $names  = ['juwon','pamlaugh','lummmy','favour'];
// //print_r($names);

//  for ( $i = 0; $i < count($names); $i++){

//      echo $names[$i];
//  }



?>

// Name
// Email
// Date of Birth
// Gender
// Country

<form name="registration_form" method="post" action="user_data.php"> 
 <label for="name"> Name:</label><br>
 <input name="name" type="text">  <br>

 <label for="email">Email:</label><br>
 <input name="email" type="email">  <br>
 
  <label for="dob"> Date of Birth:</label><br>
 <input name="dob" type="dob">  <br>

 <label for="gender">Gender:</label><br>
 <select name="gender">
 <option value="male"> Male</option>
 <option value="female"> Female </option>
 <select> <br>
 
 <lable for="country"> Country </label> <br>
 <input name="country" type="text">  <br>

<input type="submit" value="Register"> </input>

</form>


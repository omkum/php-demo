<?php
  
  if ($_POST['submit'] == "Submit")
  {
    
    $valid_form = true;
    
    //checks what was entered in field "First Name"
    if ($_POST['FName'] == "")
    {
      echo "Enter your first name<br/>";
      $valid_form = false;
    }
    else
    {
      $fname = $_POST['FName'];
    }
    
    //checks what was entered in field "Last Name"
    if ($_POST['LName'] == "")
    {
      echo "Enter your last name<br/>";
      $valid_form = false;
    }
    else
    {
      $lname = $_POST['LName'];
    }
    
    //checks what was entered in field "City"
    if ($_POST['City'] == "")
    {
      echo "Enter your city<br/>";
      $valid_form = false;
    }
    else
    {
      $city = $_POST['City'];
    }
    
    //checks what was entered in field "State"
    if ($_POST['State'] == "")
    {
      echo "Enter your state<br/>";
      $valid_form = false;
    }
    else
    {
      $state = $_POST['State'];
    }
    
    //checks what was entered in field "Login"
    if ($_POST['UName'] == "")
    {
      echo "Enter your login<br/>";
      $valid_form = false;
    }
    else
    {
      $login = $_POST['UName'];
    }
    
    //checks what was entered in field "Password"
    if ($_POST['Pass'] == "")
    {
      echo "Enter your password<br/>";
      $valid_form = false;
    }
    elseif (strlen($_POST['Pass']) < 4)
    {
      echo "The password must contain at least 4 characters<br/>";
      $valid_form = false;
    }
    else
    {
      $password = $_POST['Pass'];
    }
    
    //if all fields are valid - start processing
    
    if($valid_form == true)
    {
      // log to file
      $file_name = "tmp/logs/registrations.log";
      $open_file = fopen($file_name, "a+");
      
      $file_contents= $_POST['DateTime'] . ", " . $_POST['FName'] . ", " . $_POST['LName'] ."\n";
      
      fwrite($open_file,$file_contents);
      fclose($open_file);
      
      echo "<b>Congratulations! You have successfully registered</b><br/><br/>";
      echo "Your First Name is: " . $_POST["FName"] . "<br/>";
      echo "Your Last Name is: " . $_POST["LName"] . "<br/>";
      echo "Your City is: " . $_POST["City"] . "<br/>";
      echo "Your State is: " . $_POST["State"] . "<br/>";
      echo "<br/>";
      echo "Your login is: " . $_POST["UName"] . "<br/>";
      echo "<br/>";
      echo "Your Message is: " . $_POST["Message"];
    }
  }
  ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD/XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml11-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <title>Sample PHP Web Page</title>
  </head>
  <body>
    <h2> welcome </h2>
    <form action="process.php" method="post">
      First Name: <input type="text" name="FName"/><br/>
      Last Name:  <input type="text" name="LName"/><br/>
      City:       <input type="text" name="City"/><br/>
      State:      <input type="text" name="State"/><br/></br>
      Login:      <input type="text" name="UName"/></br>
      Password:   <input type="password" name="Pass"/>(must contain at least 4 characters)</br></br>
      Message:    <textarea name="Message" cols="30" rows="5"></textarea><br/>
      <input type="hidden" name="DateTime" value="<?php echo date('g:i a') ?>"/>
      
      <input type="submit" name="submit" value="Submit"/>
    </form>
  </body>
</html>

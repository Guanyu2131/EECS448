<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    $servername = "mysql.eecs.ku.edu";
    $username = "g358l675";
    $password = "daey7jei";
    $U = $_GET["Uname"];
    $mysqli = new mysqli($servername, $username, $password, $username);

    /* check if submit empty string*/
    if(empty($U))
    {
      echo "Please enter a username.";
      ?>
      <br>
      <br>
      <br>
      <a href="https://people.eecs.ku.edu/~g358l675/eecs448/lab5/e2/CreateUser.html">Want to create an account?</a>
      <?php
      exit();
    }

    /* check connection */
    else if ($mysqli->connect_errno) {
      printf("Connect failed: %s\n", $mysqli->connect_error);
      exit();
    }

    /* check if username has used before*/
    $result = $mysqli->query("SELECT * FROM Users WHERE user_id = '$U'");
    if($result->num_rows == 0) {
      /*Insert user name in databse users table*/
      $sql = "INSERT INTO Users(user_id) VALUES ('$U')";
      if ($mysqli->query($sql) === TRUE) {
        echo "New account created successfully";
      }
      else {
        echo "Error: " . $sql . "<br>" . $mysqli->error;
      }
    } else {
     echo"The username has been used, please try another one.";
    }
    /* close connection */
    $mysqli->close();
    ?>
    <br>
    <br>
    <br>
    <a href="https://people.eecs.ku.edu/~g358l675/eecs448/lab5/e2/CreateUser.html">Create a new user</a>
  </body>
</html>

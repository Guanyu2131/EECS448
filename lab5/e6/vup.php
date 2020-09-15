<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>User Posts</title>
  </head>
  <body>
    <h1>Here is the post you got:</h1>
    <?php
      // get data;
      $user = $_GET["user"];

      //2 open mysql databse 
      $servername = "mysql.eecs.ku.edu";
      $username = "g358l675";
      $password = "daey7jei";
      $mysqli = new mysqli($servername, $username, $password, $username);

      /* check connection */
      if ($mysqli->connect_errno) {
        printf("Connect failed: %s\n", $mysqli->connect_error);
        exit();
      }

      $query = "SELECT * FROM Posts WHERE author_id = '$user'";
      $result = mysqli_query($mysqli, $query);
      while($row = $result->fetch_assoc())
      {
        echo $row['content']."-----------given by: ".$user;
        ?><br><?php
      }
     
      //close
      $mysqli->close();
    ?>
    <br>
    <a href="https://people.eecs.ku.edu/~g358l675/eecs448/lab5.html">Back</a>
  </body>
</html>
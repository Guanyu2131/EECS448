<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Create Post</title>
  </head>
  <body>
    <?php
    $servername = "mysql.eecs.ku.edu";
    $username = "g358l675";
    $password = "daey7jei";
    $U = $_GET["Uname"];
    $P = $_GET["Upost"];
    $mysqli = new mysqli($servername, $username, $password, $username);

    /* check if submit empty string*/
    if(empty($P))
    {
      echo "The post has not text.";
      ?>
      <br>
      <br>
      <br>
      <a href="https://people.eecs.ku.edu/~g358l675/eecs448/lab5/e3/CreatePosts.html">Want to try again?</a>
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
      echo "The post was not written by an exisiting user.";
      ?>
      <br>
      <br>
      <br>
      <a href="https://people.eecs.ku.edu/~g358l675/eecs448/lab5/e3/CreatePosts.html">Want to try again?</a>
      <?php
      exit();
    } else {
      $sql = "INSERT INTO Posts(content,author_id) VALUES ('$P','$U')";
      if ($mysqli->query($sql) === TRUE) {
        echo "New post upload successfully";
      }
      else {
        echo "Error: " . $sql . "<br>" . $mysqli->error;
      }
    }
    /* close connection */
    $mysqli->close();
    ?>
    <br>
    <br>
    <br>
    <a href="https://people.eecs.ku.edu/~g358l675/eecs448/lab5/e3/CreatePosts.html">Upload another post?</a>
  </body>
</html>

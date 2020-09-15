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
      $user_content = $_POST["delete"];

      //2 open mysql databse 
      $servername = "mysql.eecs.ku.edu";
      $username = "g358l675";
      $password = "daey7jei";
      $mysqli = new mysqli($servername, $username, $password, $username);
      $query = "SELECT * FROM Posts WHERE content = '$user_content'";
      $result = $mysqli->query($query);
      $row = $result->fetch_assoc();
      $user = $row["author_id"];
      $query2 = "SELECT * FROM Posts WHERE author_id = '$user'";
      $result2 = $mysqli->query($query2);

      


      try {
        $conn = new PDO("mysql:host=$servername;dbname=$username", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // sql to delete a record
        $sql = "DELETE FROM Posts WHERE content = '$user_content'";
        if($result2->num_rows == 1) {
        $sql2 = "DELETE FROM Users WHERE user_id = '$user'";
        }

        // use exec() because no results are returned
        $conn->exec($sql);
        if($result2->num_rows == 1) {
        $conn->exec($sql2);}
        echo "Record deleted successfully";
      }
      catch(PDOException $e)
      {
        echo $sql . "<br>" . $e->getMessage();
        if($result2->num_rows == 1) {
        echo $sql2 . "<br>" . $e->getMessage();}
      }

      $conn = null;  
      $mysqli->close();  
    ?>
    <br>
    <a href="https://people.eecs.ku.edu/~g358l675/eecs448/lab5.html">Back</a>
  </body>
</html>
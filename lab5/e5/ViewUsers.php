<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>User</title>
  </head>
  <body>
    <h1> Exercise 5</h1>
    <h2> Display username </h2>
 
    <?php
      $servername = "mysql.eecs.ku.edu";
      $username = "g358l675";
      $password = "daey7jei";
      $mysqli = new mysqli($servername, $username, $password, $username);

      /* check connection */
      if ($mysqli->connect_errno) {
        printf("Connect failed: %s\n", $mysqli->connect_error);
        exit();
      }
      $query = "SELECT * FROM Users";
      $result = $mysqli->query($query);

      if($result->num_rows > 0){
    ?>
      <table algin="center" border="1px" style="width:200px; line-height:30px;">
        <tr>
          <th colspan="1"></th>
        </tr>
        <t>
          <th>User_ID</th>
        </t>
     
    <?php

        while($row = $result->fetch_assoc()){
        ?><tr>
          <td><?php echo $row["user_id"]; ?></td>
          </tr>
        <?php
          }
        ?>
        </table>
     <?php
       } 
      else{
        echo "There are no user in data base yet.";
      }
      $result->free();
      $mysqli->close();
    ?>


    <br>
    <a href="https://people.eecs.ku.edu/~g358l675/eecs448/lab5.html">Back</a>
  </body>
</html>

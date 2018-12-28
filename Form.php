<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<maa charset="UTF=8">
   <link rel="stylesheet" href="../CSS/test.css">
   <title>Viesw_search</title>
</head>
<body>
  <p>Bulletin Board</p>

  <a href="create.php"><button type="button">+Create new</button></a>

<div id = whole>
  <table>
    <tr>
      <td>ID</td>
      <td>Title</td>
      <td>Content</td>
      <td>Created at</td>
      <td>Action</td>
    </tr>
        <?php
        include 'dbconect.php';
    
        $sql = "SELECT * FROM test ";
        $result = $conn->query($sql);
          // var_dump($result);


          if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                  echo"<tr>";
                  echo"<td>".$row["ID"]."</td>";
                  echo"<td>".$row["title"]."</td>";
                  echo"<td>".$row["content"]."<td>";
                  echo"<td>".$row["createat"]."<td>";
                  // echo"<tr>";
                  $rownum = $row["ID"];

                  $_session["ID"] = $row["ID"];
                  $_session["title"] = $row["title"];
                  $_session["content"] = $row["content"];
                  $_session["createat"] = $row["createat"];

                  echo"<td>".
                     "<form action='Edit.php' method='POST'>
                       <button name='edit' type='submit' value='$rownum'>Edit</button>
                      </form>" .
                  "</td>";

                  echo"<td>".
                     "<form action='Delete.php' method='POST'>
                       <button name='delete' type='submit' value='$rownum'>Delete</button>
                      </form>" .
                  "</td>";
                  "<tr>";
                  }

               }
           ?>
     </table>
  </div><br>
     <!-- <a href="Form.php"><button type="button">Back</button></a> -->

</body>
</html>

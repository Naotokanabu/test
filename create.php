<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<maa charset="UTF=8">
   <!-- <link rel="stylesheet" href="../CSS/Table.css"> -->
</head>
<body>
<p>Create new post</p>

<form action="create_back.php" method="POST">

<p>Title</p>
<input type="text" name="title" size="40" required>

<p>content</p>
<textarea name ="content" rows="16" cols="100" required ></textarea><br>
<input type="submit" name="send" value="send">
</form>
</body>
</html>

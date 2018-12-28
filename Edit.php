<?php
session_start();
$_session["ID"]:
$_session["title"] = $row["title"];
$_session["content"] = $row["content"];
$_session["createat"] = $row["createat"];
?>
<!DOCTYPE html>
<html>
<head>
<title>Edit</title>
<!-- <link rel="stylesheet" href="../CSS/Edit.css"> -->
</head>
<body>
<p>Edit post</p>

<form action="edit_back.php" method="POST">

<p>Title</p>
<input type="text" name="title" size="40" required>
<?php
echo $session = $row["title"];
?>
<p>content</p>
<textarea name ="content" rows="16" cols="100" required >
<?php
$session = $row["title"];
?>
</textarea><br>
<input type="submit" name="send" value="send">
</form>
</body>
</html>
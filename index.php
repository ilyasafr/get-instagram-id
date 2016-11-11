<!DOCTYPE html>
<html>
<head>
   <title>Get Instagram ID</title>
</head>
<body align="center">
<form method="post">
Username: <input type="text" name="username" placeholder="ilyasa48" />
<br><br>
<input type="submit" value="Get Now!" >
<br><br>
<?php if (isset($_POST["username"])) {
$usernamenya = $_POST["username"];
$get = file_get_contents("https://www.instagram.com/".$usernamenya."/?__a=1");
$json = json_decode($get);
$id = $json->user->id;
echo $id;
}
?>
</form>
</body>
</html>
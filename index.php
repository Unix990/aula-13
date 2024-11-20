<!DOCTYPE html>
<html lang="en">
    <link rel="stylesheet" href="style.css">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Horas do dia</title>
<h1>Porfavor digite seu nome</h1>
<form action="/action_page.php">
  <label for="fname">nome:</label><br>
  <input type="text" id="fname" name="fname" value=""><br>
  <label for="lname">sobrenome:</label><br>
  <input type="text" id="lname" name="lname" value=""><br><br>
  <input type="submit" value="Submit">
</form> 

<body>
<?php
//echo readfile("webdictionary.txt");
//$myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
//echo fread($myfile,filesize("webdictionary.txt"));
//fclose($myfile);
$myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
$txt = "\n";
fwrite($myfile, $txt);
$txt = "\n";
fwrite($myfile, $txt);
fclose($myfile);
?>
</body>
</html>
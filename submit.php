<?php
$t=time();
$txt = $_POST["textareaCode"];
$fileName = $_POST["fileName"];
$myfile = fopen("template/".$fileName.".html", "w") or die("Unable to open file!");
fwrite($myfile, $txt);
fclose($myfile);
header("Location: https://minhphu.info/template/".$fileName);
exit();
?>

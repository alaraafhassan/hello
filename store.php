<?php

$myfile = fopen("presence.txt", "a") or die("Unable to open file!");
$txt = "lat=" . $_GET["lat"]."\n". "long=". $_GET["long"];
fwrite($myfile, $txt);
fclose($myfile);

?>
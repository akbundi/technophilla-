<?php
$filename = $_GET["name"];
ob_end_clean();
header("Content-Type: application/octet-stream;");
header("Content-Transfer-Encoding: binary");
header("Content-Length: ". filesize($filename).";");
header("Content-disposition: attachment; filename=" . $filename);
readfile($filename);
die();
?>
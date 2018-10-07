<?php
$link = mysqli_connect('localhost', 'lg_library', 'lg_library');
if (!$link) {
die('Could not connect: ' . mysqli_error());
}
echo 'Connected successfully';
mysqli_close($link);
?>

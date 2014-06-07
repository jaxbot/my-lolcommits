<!DOCTYPE html>
<html>
<head>
<title>Jaxbot's Lolcommits</title>
</head>
<body>
<h1>Jaxbot's Lolcommits</h1>

These images are generated whenever I commit code, thanks to <a href="https://github.com/mroth/lolcommits">lolcommits</a>.<br><br>

<?php

$files = scandir("img/", SCANDIR_SORT_DESCENDING);

foreach ($files as $file) {
	if (substr($file, 0, 1) == ".") continue;
?>
	<img src="img/<?=$file?>" alt="lolcommit <?=$file?>"><br><br>
<?php
}

?>

</body>
</html>


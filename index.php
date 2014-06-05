<?php

$files = scandir("img/");

foreach ($files as $file) {
	if (substr($file, 0, 1) == ".") continue;
?>
	<img src="<?=$file?>" alt="lolcommit <?=$file?>"><br><br>
<?php
}


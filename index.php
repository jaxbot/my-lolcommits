<?php

$files = scandir("img/");

foreach ($files as $file) {
?>
	<img src="<?=$file?>" alt="lolcommit <?=$file?>"><br><br>
<?php
}


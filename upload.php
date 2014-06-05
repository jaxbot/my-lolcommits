<?php

if ($_GET['token'] !== file_get_contents(".token"))
	die("Invalid token");

file_put_contents("img/" . date("m_d_y_h_i_s_a") . ".png", $_POST['file']);


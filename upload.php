<?php

if (trim($_GET['token']) != trim(file_get_contents(".token")))
	die("Invalid token");

file_put_contents("img/" . time() . "_" . date("m_d_y_h_i_s_a") . ".png", base64_decode($_POST['file']));


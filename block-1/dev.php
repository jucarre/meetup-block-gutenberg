<?php

function dd($data)
{
	echo '<br><br><br><br><br><br><br><pre>';
	var_dump($data);
	echo '</pre>';
	die();
}

<?php

/**
 * ajax.php
 */

sleep(2);

if (empty($_POST['first-name'])) {
	$result = false;
} else {
	$result = true;
}

echo json_encode(compact('result'));
exit;

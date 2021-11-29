<?php

function response_header($success = true, $message = null, $data = array())
{
	header('Content-Type: application/json; charset=utf-8');
	echo json_encode(
		array(
			'success' => $success,
			'message' => $message,
			'data'   => $data
		)
	);

	exit;
}

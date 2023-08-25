<?php
	try {
	session_start();
	session_destroy();
	header("Location: index.html");
	exit;
}
catch (Exception $e) {
    echo("<script>alert('An Error Detected Contact Web Admin'); window.location.href = 'index.html';</script>");
} 
?>
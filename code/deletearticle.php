<?php
session_start();
include("config.php");
include("lib/db.php");
include("lib/auth.php");

$current_author = $_SESSION['author'];

if ($_SESSION['authenticated'] == True && ($_SESSION['username'] == "admin" || $_SESSION['username'] == $current_author)) {
	$aid = $_GET['aid'];
	#echo "aid=".$aid."<br>";
	$result = delete_article($dbconn, $aid);
	#echo "result=".$result."<br>";
	# Check result
	header("Location: /admin.php");
} else {
	echo "Unable to delete.";
}
?>

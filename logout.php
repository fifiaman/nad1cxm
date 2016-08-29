<?php
session_start();
if(session_destroy()) // Destroying All Sessions
{
header("Location: login_admin.php"); // Redirecting To Home Page
}
?>
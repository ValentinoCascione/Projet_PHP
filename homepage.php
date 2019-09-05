<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('location:login');
}

include $PATHS['header'];  

$rows = getAllPosts();
showTab($rows);

include $PATHS['footer']; 
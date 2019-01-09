<?php
    session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/camagru.css">
</head>

<div class="wrapper">
    <header class="header">
        <a href="index.php" id="title"><h1>We Think Code_</h1></a>
        <ul class="navbar">
            <li><a href="index.php">Home</a></li>
            <li><a href="share.php">Share</a></li>
            <li><a href="gallery.php">Gallery</a></li>
            <li><a href="wall.php">Public Wall</a></li>
            <?php if ($_SESSION[Username] && !empty($_SESSION[Username])): ?>
              <li><a href='user/ft_disconnect.php'>Sign out</a></li>
              <li><a href='edit.php'>Edit Profile</a></li>
            <?php endif; ?>
        </ul>
    </header>

</html>

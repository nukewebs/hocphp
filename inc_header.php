<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
   <link rel="stylesheet" href="style.css">
  <title>bài tập</title>
</head>
<body>
<main>
  <header class="M0 P0 bg">Trung Tam hoc tap</header>
  <nav class="M0 P0">
  <?php ob_start();?>
    <ul>
      <li><a href="?view=trangchu.php">Trang Chủ </a></li>
      <li><a href="?view=gioithieu.php">Giới Thiệu</a></li>
      <li><a href="?view=luubut.php">Lưu Bút</a></li>
      <li><a href="?view=lienlac.php">Liên Lạc</a></li>
    </ul>
	<?php nav_smart(ob_get_clean(),'class="active"');?>
    
   
  </nav>
  <div id="content">

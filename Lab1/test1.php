<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test 1</title>
    <style>
    </style>
</head>
<body>
<?php
// Khởi tạo mảng menu
$menus = [
"Trang chủ",
"Tin tức",
"Liên hệ",
"Giới thiệu"
];
?>
<!-- =====Menu====== -->
<nav>
<ul>
<?php foreach ($menus as $menu) { ?>
<li>
<a href="#"><?= $menu ?></a>
</li>
<?php } ?>
</ul>
</nav>
</body>
</html>
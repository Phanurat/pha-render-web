<?php
// กำหนดค่าตัวแปร
$page = isset($_GET['page']) ? $_GET['page'] : 'home';

// ฟังก์ชันสำหรับแสดงเนื้อหาของแต่ละหน้า
function getPageContent($page) {
    $pages = [
        'home' => '<h2>ยินดีต้อนรับสู่หน้าแรก</h2><p>นี่คือเนื้อหาของหน้าแรก</p>',
        'about' => '<h2>เกี่ยวกับเรา</h2><p>ข้อมูลเกี่ยวกับเว็บไซต์นี้</p>',
    ];

    return $pages[$page] ?? '<h2>404 - ไม่พบหน้า</h2>';
}
?>

<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My PHP Template</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            text-align: center;
        }
        header {
            background: #007bff;
            color: white;
            padding: 15px;
        }
        nav a {
            color: white;
            margin: 0 10px;
            text-decoration: none;
        }
        footer {
            background: #f8f9fa;
            padding: 10px;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <header>
        <h1>My Website</h1>
        <nav>
            <a href="?page=home">หน้าแรก</a>
            <a href="?page=about">เกี่ยวกับเรา</a>
        </nav>
    </header>
    <main>
        <?php echo getPageContent($page); ?>
    </main>
    <footer>
        <p>&copy; <?php echo date("Y"); ?> My Website. All rights reserved.</p>
    </footer>
</body>
</html>

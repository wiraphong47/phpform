<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ข้อมูลผู้ใช้</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            color: #333;
        }
        .container {
            width: 80%;
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background-color: white;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }
        h1 {
            text-align: center;
            color: #4CAF50;
        }
        .user-info {
            font-size: 18px;
            line-height: 1.6;
            margin: 20px 0;
        }
        .user-info strong {
            color: #333;
        }
        .btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            margin-top: 20px;
            text-align: center;
        }
        .btn:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>ข้อมูลผู้ใช้</h1>

        <?php
        if ($_POST) {
            $name = $_POST['fname'];
            $surname = $_POST['lname'];
            $birthday = $_POST['birthday'];
            $sex = $_POST['sex'];
            $username = $_POST['username'];
            $pwd = $_POST['pwd'];

            echo "<div class='user-info'>";
            echo "<p><strong>ชื่อ:</strong> $name $surname</p>";
            echo "<p><strong>วันเกิด:</strong> $birthday</p>";
            echo "<p><strong>เพศ:</strong> $sex</p>";
            echo "<p><strong>ชื่อผู้ใช้:</strong> $username</p>";
            echo "<p><strong>รหัสผ่าน:</strong> $pwd</p>";
            echo "</div>";
        }
        ?>

        <a href="form.php" class="btn">กลับ</a>
    </div>
</body>
</html>

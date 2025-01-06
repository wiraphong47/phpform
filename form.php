<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>รับฟอร์ม</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        form {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            width: 400px;
            box-sizing: border-box;
        }

        h2 {
            text-align: center;
            color: #333;
        }

        label {
            font-size: 16px;
            margin-bottom: 8px;
            display: block;
            color: #555;
        }

        input[type="text"], input[type="password"], input[type="date"], select {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 16px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #007BFF;
            color: white;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        .form-group {
            margin-bottom: 15px;
        }
    </style>

</head>
<body>
    <form action="name.php" method="POST">
    <label for="sex">เพศ :</label>
    <select name="sex">
    <option value="f">หญิง</option>
    <option value="m">ชาย</option>
    </select><br>
    <label for="fname">ชื่อ :</label><br>
    <input type="text" id="fname" name="fname"><br>
    <label for="fname">สกุล :</label><br>
    <input type="text" id="lname" name="lname"><br>
    <label for="birthday">วันเกิด</label>
    <input type="date" name="birthday"><br>
    <label for="username">username :</label>
    <input type="text" name="username"><br>
    <label for="password">password :</label>
    <input type="password" name="pwd"><br>
    <input type="submit" value="บันทึกข้อมูล"><br>
    </form>
</body>
</html>
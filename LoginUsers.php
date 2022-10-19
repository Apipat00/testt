<html>
    <head>
        <meta charset="UTF-8">
        <title>Users Login</title>
        <link rel="stylesheet" href="css/styles-LoginUsers.css">
    </head>

    <body>
        <div class="frame">
            <h2>เข้าสู่ระบบผู้ใช้ทั่วไป</h2>
            <img src="pic/user.jpg" width="30%"><br><br>
            <form name="formLogin"  method="post" action="LoginUsersCheck.php">
                <label>ชื่อผู้ใช้</label><br>
                    <input type="text" name="username" id="username" size="25" required placeholder="Username"><br><br>
                <label>รหัสผ่าน</label><br>
                    <input type="password" name="password" id="password" size="25" required placeholder="Password"><br><br>
                <button class="buttonConfirm" type="submit">เข้าสู่ระบบ</button>
            </form>
            <a class="buttonRegister" href="RegisterForm.php">ลงทะเบียน</a>
        </div>
    </body>
</html>
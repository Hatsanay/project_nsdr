<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <?php include "bootstraplink.php"; ?>
    <link rel="stylesheet" type="text/css" href="components\login\logincss.css">
    
</head>

<body>
<div class="comtianer">
        <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4" style="margin-top: 10%;" >
            <H1 align="center">เข้าสู่ระบบ</H1>
        <form action="checklogin.php"style="margin-top:30px" method="post">
            <div class="form">
                <input type="text" class="form-control" placeholder="อีเมล*" name="user" style="height:50px;" >
            </div>
            <div class="form">
                <input type="password" class="form-control mt-3" placeholder="รหัสผ่าน*"  name="pwd" style="height:50px;">
            </div>
            <button type="submit" class="btn btn-danger btn-block btn-lg" style="margin-top: 25px;">เข้าสู่ระบบ</button>
            <a href="index.php" class="btn btn-primary btn-block btn-lg" style="margin-top: 5px;">ย้อนกลับ</a>
        </form>
        </div>
        <div class="col-md-4"></div>
        </div>
    </div>!
</body>
</html>
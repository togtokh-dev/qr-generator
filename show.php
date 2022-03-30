<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>QR Code</title>

</head>
<body >
    <div>
        <br><br><br>
        <div >
            <div style="background-color: white; padding: 20px; box-shadow: 10px 10px 5px #888;">
                <div >
                    <h1><?php echo $_GET['text']?></h1>
                </div>
                <hr>
                <div id="qrbox" style="text-align: center;">
                    <img src="generate.php?text=<?php echo $_GET['text']?>" alt="">
                </div>
                <hr>
                <a href="index.php">Шинийг үүсгэх</a>
            </div>
        </div>
    </div>
</body>
</html>

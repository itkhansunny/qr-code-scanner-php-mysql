<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>QR Code Scanner</title>
</head>
<body>

    <form action="decode.php" method="post" enctype="multipart/form-data">
        <input type="file" name="qrimage" accept="image/*" id="qrimage" class="form-control"><br>
        <input type="submit" value="Decode the Code">
    </form>
    
</body>
</html>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Instagram Upload</title>
</head>
<body>
<h4>Upload your photo to Instagram</h4>
<form action="instagram_upload.php" method="post" enctype="multipart/form-data">
    <p>Select your photo:
    <input name="your_photo" type="file">
        <br>
    <button type="submit">Upload</button>
    </p>
</form>
</body>
</html>
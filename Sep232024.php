<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload</title>
</head>
<body>
    <form action="fileUpload.php" method="post" enctype="multipart/form-data">
        <label for="name">Enter Name</label>
        <input type="text" name="name" id="name">
        <br><br>
        <label for="fileToUpload">Select a File</label>
        <input type="file" name="fileToUpload" id="fileToUpload">
        <input type="submit" value="Upload">
    </form>
</body>
</html>
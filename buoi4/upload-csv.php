<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload CSV File</title>
</head>
<body>
    <h2>Upload CSV File</h2>
    <form action="upload-csv-processing.php" method="post" enctype="multipart/form-data">
        <input type="file" name="csvFile" accept=".csv" required>
        <input type="submit" value="Upload and Process">
    </form>
</body>
</html>
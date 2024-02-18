<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST Data</title>
</head>

<body>
    <h2>POST Data</h2>
    <form action="process_post.php" method="POST">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email">
        <button type="submit">Submit</button>
    </form>
</body>

</html>
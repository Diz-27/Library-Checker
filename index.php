//Daren Shannon

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Return Date</title>
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
        rel="stylesheet">
    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        defer></script>
</head>
<body>
    <h1>Book Return Dates</h1>
    <p><?= $returnDate?></p>
   <?php
    include "form.php";
    ?>

    <h1>Book Due Date</h1>
    <p><?= $dueDate ?></p>
    
</body>
</html>
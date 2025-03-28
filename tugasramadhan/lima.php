<?php

function quiz($jawaban) {
    if ($jawaban == "jakarta" || $jawaban == "Jakarta") {
        return "benar";
    } else {
        return "salah";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>quiz</title>
</head>
<body>
    <h1>Apa Ibu Kota Indonesia</h1>
    <form action="" method="post">
        <input type="text" name="jawaban">
        <button type="submit" name="submit">submit</button>
    </form>
    <h2>
        <?php
            if (isset($_POST['submit'])) {
                $jawaban = $_POST['jawaban'];
                echo quiz($jawaban);
            }
        ?>
</body>
</html>
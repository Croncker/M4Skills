<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Maand van het jaar</h1>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <label for="month_input">Voer de maand in (nummer of afkorting):</label>
        <input type="text" name="month_input" id="month_input">
        <input type="submit" value="Toon maand">
    </form>

    <?php
    function getMonth($monthInput) {
        $monthInput = strtolower($monthInput);

        switch ($monthInput) {
            case "1":
            case "jan":
                return "januari";
            case "2":
            case "feb":
                return "februari";
            case "3":
            case "mar":
                return "maart";
            case "4":
            case "apr":
                return "april";
            case "5":
            case "may":
                return "mei";
            case "6":
            case "jun":
                return "juni";
            case "7":
            case "jul":
                return "juli";
            case "8":
            case "aug":
                return "augustus";
            case "9":
            case "sep":
                return "september";
            case "10":
            case "oct":
                return "oktober";
            case "11":
            case "nov":
                return "november";
            case "12":
            case "dec":
                return "december";
            default:
                return "Ongeldige invoer";
        }
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $month = $_POST["month_input"];
        $result = getMonth($month);
        echo "<p>$result</p>";
    }
    ?>
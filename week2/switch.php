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

$month = readline("Voer de maand in (nummer of afkorting): ");
$result = getMonth($month);
echo $result;
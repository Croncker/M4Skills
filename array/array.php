<!DOCTYPE html>
<html>
<head>
    <title>PHP Code</title>
</head>
<body>
    <pre>
        <?php
        function vul_array_met_cijfers($aantal_cijfers = 5) {
            $cijfers = [];
            for ($i = 1; $i <= $aantal_cijfers; $i++) {
                $cijfers[] = $i;
            }
        
            return $cijfers;
        }

        function toon_array_in_browser($array) {
            echo "<pre>";
            print_r($array);
            echo "</pre>";
        }
        $resultaat = vul_array_met_cijfers();
        toon_array_in_browser($resultaat);
        ?>
    </pre>
</body>
</html>
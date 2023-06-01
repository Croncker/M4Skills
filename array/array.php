<!DOCTYPE html>
<html>
<head>
    <title>Exibir Código PHP</title>
</head>
<body>
    <pre>
        <?php
        function vul_array_met_cijfers($aantal_cijfers) {
            if ($aantal_cijfers < 5) {
                echo "O número mínimo de cijfers é 5.";
                return [];
            }

            $cijfers = range(1, $aantal_cijfers);
            return $cijfers;
        }

        $resultaat = vul_array_met_cijfers(7);
        print_r($resultaat);
        ?>
    </pre>
</body>
</html>
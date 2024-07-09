<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        table {
            cellpadding: 3px;
            cellspacing: 0px;
        }
        th, td {
            border: 1px solid #000;
            padding: 5px;
        }
    </style>
</head>
<body>
    <table>
        <tbody>
            <?php
            $rows = 6;
            $cols = 5;
            for ($i = 1; $i <= $rows; $i++) {
                echo "<tr>";
                for ($j = 1; $j <= $cols; $j++) {
                    echo "<td>{$i} * {$j} = " . ($i * $j) . "</td>";
                }
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chess Board</title>
    <style>
        table {
            width: 270px;
            height: 270px;
            border-collapse: collapse;
        }
        td {
            width: 30px;
            height: 30px;
        }
    </style>
</head>
<body style="background-color: #FFFFFF;">
    <h2></h2>
    <table>
        <?php
        for ($row = 0; $row < 8; $row++) {
            echo "<tr>";
            for ($col = 0; $col < 8; $col++) {
                // Alternate colors for the chessboard
                if (($row + $col) % 2 == 0) {
                    echo "<td style='background-color: #FFFFFF;'></td>"; // White
                } else {
                    echo "<td style='background-color: #000000;'></td>"; // Black
                }
            }
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>

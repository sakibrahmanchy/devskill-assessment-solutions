<?php 
$x = 4; $y = 10; $rows = null; $cols = null;

$cols = min($x, $y);
$rows = max($x, $y);

$generatedHTML = <<<EOT
<html>
    <head>
        <style>
            table {
                font-family: arial, sans-serif;
                border-collapse: collapse;
                width: 100%;
            }

            th {
                background-color: black;
                color: white;
            }

            td, th {
                border: 1px solid #dddddd;
                text-align: left;
                padding: 8px;
            }

            tr:nth-child({$rows}) {
                background-color: black;
                color: white;
            }
        </style>
    </head>
    <body>
        <table>
            <thead>
EOT;

// Column generation
for ($i = 0; $i < $cols; $i++) {
   $generatedHTML .= "<th>Random Column</th>";
}
$generatedHTML .= "</thead><tbody>";


// Row generation
for ($i = 0; $i < $rows; $i++) {
    $generatedHTML .= '<tr>';
    for ($j = 0; $j < $cols; $j++) {
        $generatedHTML .= '<td>9102</td>';
    }
    $generatedHTML .= '</tr>';
}

// Ending table
$generatedHTML .= '</tbody></table>';


echo $generatedHTML;
?>


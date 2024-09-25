<?php

require_once 'FileUtility.php';


$persons = FileUtility::readFromFile('persons.csv');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Persons Data</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        th {
            position: sticky;
            top: 0;
        }
    </style>
</head>
<body>

    <h1>List of Persons</h1>
    
    <table>
        <thead>
            <tr>
                <?php foreach ($persons[0] as $header): ?>
                    <th><?= $header; ?></th>
                <?php endforeach; ?>
            </tr>
        </thead>
        <tbody>
            <?php for ($i = 1; $i < count($persons); $i++): ?>
                <tr>
                    <?php foreach ($persons[$i] as $data): ?>
                        <td><?= $data; ?></td>
                    <?php endforeach; ?>
                </tr>
            <?php endfor; ?>
        </tbody>
    </table>

</body>
</html>

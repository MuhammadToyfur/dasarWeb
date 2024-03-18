<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Array Terindeks</title>
        <style>
            table {
                border-collapse: collapse;
                width: 100%;
            }
            th, td {
                border: 1px solid black;
                padding: 8px;
                text-align: left;
            }
            th {
                background-color: #f2f2f2;
            }
        </style>
    </head>
    <body>
        <h2>Array Terindeks</h2>
        <table>
            <tr>
                <th>Nama</th>
                <th>Domisili</th>
                <th>Jenis Kelamin</th>
            </tr>
            <?php
            $Dosen = [
                'nama' => 'Elok Nur Hamdana',
                'domisili' => 'Malang',
                'jenis_kelamin' => ' Perempuan' ];
            
                echo "<tr>";
                echo "<td>{$Dosen ['nama']}</td>";
                echo "<td>{$Dosen ['domisili']}</td>";
                echo "<td>{$Dosen ['jenis_kelamin']}</td>";
                echo "</tr>";
            ?>
        </table>
    </body>
</html>
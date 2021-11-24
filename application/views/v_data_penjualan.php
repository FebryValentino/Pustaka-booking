<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Penjualan</title>
</head>
</head>

<body>
    <center>
        <table>
            <tr>
                <th colspan="3" align="center">
                    <h2>Data Penjualan </h2>
                    <hr>
                </th>
            </tr>

            <tr>
                <th>Nama pembeli</th>
                <td>:</td>
                <td><?= $nama; ?></td>
            </tr>

            <tr>
                <th>No HP</th>
                <td>:</td>
                <td><?= $nohp; ?></td>
            </tr>

            <tr>
                <th>Merk</th>
                <td>:</td>
                <td><?= $merk; ?></td>
            </tr>

            <tr>
                <th>Ukuran</th>
                <td>:</td>
                <td><?= $ukuran; ?></td>
            </tr>

            <tr>
                <th>Harga</th>
                <td>:</td>
                <td><?= $harga; ?></td>
            </tr>

            <tr>
                <td colspan="3">
                    <hr>
                </td>
            </tr>

            <tr>
                <td colspan="3" align="center"> <a href="http://localhost/Pustaka-book/penjualan">Kembali</a></td>
            </tr>
        </table>
    </center>
</body>

</html>
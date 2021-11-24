<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input</title>
</head>

<body>
    <?php echo validation_errors(); ?>
    <center>
        <form action="<?php echo base_url() ?>penjualan/print" method="POST">
            <table>
                <tr>
                    <th colspan="3" align="center">
                        <h2>Masukan Data Penjualan</h2>
                        <hr>
                    </th>
                </tr>

                <tr>
                    <th>Nama</th>
                    <td>:</td>
                    <td>
                        <input type="text" name="nama" id="nama">
                    </td>
                </tr>

                <tr>
                    <th>No Hp</th>
                    <td>:</td>
                    <td>
                        <input type="text" name="nohp" id="nohp">
                    </td>

                </tr>

                <tr>
                    <th>Merk</th>
                    <td>:</td>
                    <td>
                        <select name="merk" id="merk">
                            <option selected disabled>Pilih Merk</option>
                            <option value="Nike">Nike</option>
                            <option value="Adidas">Adidas</option>
                            <option value="Kicker">Kicker</option>
                            <option value="Eiger">Eiger</option>
                            <option value="Bucherri">Bucherri</option>
                        </select>
                    </td>
                </tr>

                <tr>
                    <th>Ukuran</th>
                    <td>:</td>
                    <td>
                        <select name="ukuran" id="ukuran">
                            <option selected disabled>Pilih Ukuran</option>
                            <option value="32">32</option>
                            <option value="33">33</option>
                            <option value="34">34</option>
                            <option value="35">35</option>
                            <option value="36">36</option>
                            <option value="37">37</option>
                            <option value="38">38</option>
                            <option value="39">39</option>
                            <option value="40">40</option>
                            <option value="41">41</option>
                            <option value="42">42</option>
                            <option value="43">43</option>
                            <option value="44">44</option>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td colspan="3" align="center">
                        <hr> <input type="submit">
                    </td>
                </tr>


            </table>
        </form>
    </center>
</body>

</html>
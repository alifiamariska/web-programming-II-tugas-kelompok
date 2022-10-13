<!DOCTYPE html>
<html lang="en">
<head>
    <title>Tampil Data Menu</title>
</head>
<body>
    <center>
        <table>
            <tr>
                <th colspan="3">
                    Tampil Data Menu
                </th>
            </tr>
            <tr>
                <td colspan="3">
                    <hr>
                </td>
            </tr>
            <tr>
                <th>Kode Menu</th>
                <th>:</th>
                <td>
                    <?= $kdmenu; ?>
                </td>
            </tr>
            <tr>
                <th>Nama Menu</th>
                <th>:</th>
                <td>
                    <?= $nmmenu; ?>
                </td>
            </tr>
            <tr>
                <th>Harga</th>
                <th>:</th>
                <td>
                    <?= $harga; ?>
                </td>
            </tr>
            <tr>
                <td>
                    <a href="<?= base_url('menu'); ?>" colspan="3" align="center">Kembali</a>
                </td>
            </tr>
        </table>
    </center>
</body>
</html>
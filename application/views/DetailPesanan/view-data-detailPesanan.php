<!DOCTYPE html>
<html lang="en">
<head>
    <title>Tampil Data Detail Pesanan</title>
</head>
<body>
    <center>
        <table>
            <tr>
                <th colspan="3">
                    Tampil Data Detail Pesanan
                </th>
            </tr>
            <tr>
                <td colspan="3">
                    <hr>
                </td>
            </tr>
            <tr>
                <th>Kode Detail Pesanan</th>
                <th>:</th>
                <td>
                    <?= $kddetailpesanan; ?>
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
                <th>Jumlah Pesanan</th>
                <th>:</th>
                <td>
                    <?= $jmlhpesanan; ?>
                </td>
            </tr>
            <tr>
                <th>Sub Total</th>
                <th>:</th>
                <td>
                    <?= $harga*$jmlhpesanan ?>
                </td>
            </tr>
            <tr>
                <td>
                    <a href="<?= base_url('detailPesanan'); ?>" colspan="3" align="center">Kembali</a>
                </td>
            </tr>
        </table>
    </center>
</body>
</html>
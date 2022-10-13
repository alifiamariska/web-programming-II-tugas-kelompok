<!DOCTYPE html>
<html lang="en">
<head>
    <title>Tampil Data Transaksi</title>
</head>
<body>
    <center>
        <table>
            <tr>
                <th colspan="3">
                    Tampil Data Transaksi
                </th>
            </tr>
            <tr>
                <td colspan="3">
                    <hr>
                </td>
            </tr>
            <tr>
                <th>Kode Admin</th>
                <th>:</th>
                <td>
                    <?= $kdadmin; ?>
                </td>
            </tr>
            <tr>
                <th>Kode Transaksi</th>
                <th>:</th>
                <td>
                    <?= $kdtransaksi; ?>
                </td>
            </tr>
            <tr>
                <th>Tanggal Transaksi</th>
                <th>:</th>
                <td>
                    <?= $tgltransaksi; ?>
                </td>
            </tr>
            <tr>
                <th>Nama Pembeli</th>
                <th>:</th>
                <td>
                    <?= $namapembeli; ?>
                </td>
            </tr>
            <tr>
                <th>Alamat</th>
                <th>:</th>
                <td>
                    <?= $alamat; ?>
                </td>
            </tr>
            <tr>
                <th>Nomor Telepon</th>
                <th>:</th>
                <td>
                    <?= $notelp; ?>
                </td>
            </tr>
            <tr>
                <th>Total Bayar</th>
                <th>:</th>
                <td>
                    <?= $totalbayar; ?>
                </td>
            </tr>
            <tr>
                <td>
                    <a href="<?= base_url('transaksi'); ?>" colspan="3" align="center">Kembali</a>
                </td>
            </tr>
        </table>
    </center>
</body>
</html>
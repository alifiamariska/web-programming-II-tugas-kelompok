<!DOCTYPE html>
<html lang="en">
<head>
    <title>Form Detail Pesanan</title>
</head>
<body>
    <center>
        <form action="<?= base_url('detailpesanan/cetak'); ?>"
        method="post">
            <table>
                <tr>
                    <th colspan="3">
                        Form Detail Pesanan
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
                        <input type="text" name="kddetailpesanan" id="kddetailpesanan" placeholder="Kode Detail Pesanan">
                        <?php echo form_error('kddetailpesanan');?>
                    </td>
                </tr>
                <tr>
                    <th>Nama Menu</th>
                    <th>:</th>
                    <td>
                        <input type="text" name="nmmenu" id="nmmenu" placeholder="Nama Menu">
                        <?php echo form_error('nmmenu');?>
                    </td>
                </tr>
                <tr>
                    <th>Harga</th>
                    <th>:</th>
                    <td>
                        <input type="text" name="harga" id="harga" placeholder="Harga">
                    </td>
                </tr>
                <tr>
                    <th>Jumlah Pesanan</th>
                    <th>:</th>
                    <td>
                        <input type="text" name="jmlhpesanan" id="jmlhpesanan" placeholder="Jumlah Pesanan">
                    </td>
                </tr>
                <tr>
                    <td colspan="3" align="center">
                        <input type="submit" value="Submit">
                    </td>
                </tr>
            </table>
        </form>
    </center>
</body>
</html>
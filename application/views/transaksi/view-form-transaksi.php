<!DOCTYPE html>
<html lang="en">
<head>
    <title>Form Input Transaksi</title>
</head>
<body>
    <center>
        <form action="<?= base_url('transaksi/cetak'); ?>"
        method="post">
            <table>
                <tr>
                    <th colspan="3">
                        Form Input Data Transaksi
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
                    <input type="text" name="kdadmin"  placeholder="Kode Admin... ">
                        <?php echo form_error('kdadmin');?>
                    </td>
                </tr>
                <tr>
                    <th>Kode Transaksi:</th>
                    <th>:</th>
                    <td>
                        <input type="text" name="kdtransaksi"  placeholder="Kode Transaksi... ">
                        <?php echo form_error('kdtransaksi');?>
                    </td>
                </tr>
                <tr>
                    <th>Tanggal Transaksi:</th>
                    <th>:</th>
                    <td>
                        <input type="date" name="tgltransaksi"  placeholder="Tanggal Transaksi... ">
                        <?php echo form_error('tgltransaksi');?>
                    </td>
                </tr>
                <tr>
                    <th>Nama Pembeli:</th>
                    <th>:</th>
                    <td>
                        <input type="text" name="namapembeli"  placeholder="Nama Pembeli... ">
                        <?php echo form_error('namapembeli');?>
                    </td>
                </tr>
                <tr>
                    <th>Alamat:</th>
                    <th>:</th>
                    <td>
                        <input type="text" name="alamat"  placeholder="Alamat... ">
                        <?php echo form_error('alamat');?>
                    </td>
                </tr>
                <tr>
                    <th>Nomor Telepon</th>
                    <th>:</th>
                    <td>
                        <input type="text" name="notelp" placeholder="Nomor Telepon">
                        <?php echo form_error('notelp');?>
                    </td>
                </tr>
                <tr>
                    <th>Total Bayar</th>
                    <th>:</th>
                    <td>
                        <input type="text" name="totalbayar"  placeholder="Total Bayar">
                        <?php echo form_error('totalbayar');?>
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
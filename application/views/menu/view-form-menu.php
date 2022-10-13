<!DOCTYPE html>
<html lang="en">
<head>
    <title>Form Input Menu</title>
</head>
<body>
    <center>
        <form action="<?= base_url('menu/cetak'); ?>"
        method="post">
            <table>
                <tr>
                    <th colspan="3">
                        Form Input Data Menu
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
                        <input type="text" name="kdmenu" id="kdmenu" placeholder="Kode Menu">
                        <?php echo form_error('kdmenu');?>
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
                    <td colspan="3" align="center">
                        <input type="submit" value="Submit">
                    </td>
                </tr>
            </table>
        </form>
    </center>
</body>
</html>
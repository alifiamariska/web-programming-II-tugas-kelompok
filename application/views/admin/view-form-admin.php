<!DOCTYPE html>
<html lang="en">
<head>
    <title>Form Input Admin</title>
</head>
<body>
    <center>
        <form action="<?= base_url('admin/cetak'); ?>"
        method="post">
            <table>
                <tr>
                    <th colspan="3">
                        Form Input Data Admin
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
                        <input type="text" name="kdadmin" id="kdadmin" placeholder="Kode Admin">
                        <?php echo form_error('kdadmin');?>
                    </td>
                </tr>
                <tr>
                    <th>Nama Admin</th>
                    <th>:</th>
                    <td>
                        <input type="text" name="nmadmin" id="nmadmin" placeholder="Nama Admin">
                        <?php echo form_error('nmadmin');?>
                    </td>
                </tr>
                <tr>
                    <th>Nomor Telepon</th>
                    <th>:</th>
                    <td>
                        <input type="text" name="notelp" id="notelp" placeholder="Nomor Telepon">
                        <?php echo form_error('notelp');?>
                    </td>
                </tr>
                <tr>
                    <th>Password</th>
                    <th>:</th>
                    <td>
                        <input type="password" name="password" id="password" placeholder="Password">
                        <?php echo form_error('password');?>
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
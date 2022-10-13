<!DOCTYPE html>
<html lang="en">
<head>
    <title>Tampil Data Admin</title>
</head>
<body>
    <center>
        <table>
            <tr>
                <th colspan="3">
                    Tampil Data Admin
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
                <th>Nama Admin</th>
                <th>:</th>
                <td>
                    <?= $nmadmin; ?>
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
                <th>Password</th>
                <th>:</th>
                <td>
                    <?= $password; ?>
                </td>
            </tr>
            <tr>
                <td>
                    <a href="<?= base_url('admin'); ?>" colspan="3" align="center">Kembali</a>
                </td>
            </tr>
        </table>
    </center>
</body>
</html>
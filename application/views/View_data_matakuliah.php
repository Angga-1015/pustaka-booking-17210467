<html>
<head>
<title>Tampil Data Matakuliah</title>
</head>
<body>
 <center>
 <table>

 <th colspan="3">
 Tampil Data Mata Kuliah
 </th>
    <tr>
        <td colspan="3">
        <hr>
        </td>
    </tr>
    <tr>
        <th>Kode MTK</th>
        <td>:</td>
        <td>
            <?= $kode; ?>
        </td>
    </tr>
    <tr>
        <th>Nama MTK</th>
        <td>:</td>
        <td>
            <?= $nama; ?>
        </td>
    </tr>
    <tr>
        <th>SKS</th>
        <td>:</td>
        <td>
            <?= $sks; ?>
        </td>
    </tr>
    <tr>
        <td colspan="3" align="center">
        <a href="<?= base_url('Matakuliah'); 
        ?>">Back</a>
        </td>
 </table>
 </center>
</body>
</html>
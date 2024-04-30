<html>
<head>
 <title>Form Input Matakuliah</title>
</head>
<body>
 <center>
 <form action="<?= base_url('Matakuliah/cetak');?>"
method="post">
 <table>
 <tr>
 <th colspan="3">
 Form Input Data Mata Kuliah
 </th>
 </tr>
 <tr>
 <td colspan="3">
 <hr>
 </td>
 </tr>
 <tr>
 <th>Kode MTK</th>
 <th>:</th>
 <td>
 <input type="text" name="kode" id="kode" value="<?php echo set_value('kode'); ?>">
 </td>
 </tr>
 <tr>
 <th colspan="2"></th>
 <td style="color:red; font-size:8px; text-align:left;">
    <?= form_error('kode'); ?>
 </td>
 </tr>
 <tr>
 <th>Nama MTK</th>
 <td>:</td>
 <td>
 <input type="text" name="nama" id="nama" value="<?php echo set_value('nama'); ?>">
 </td>
 </tr>
 <tr>
 <th colspan="2"></th>
 <td style="color:red; font-size:8px; text-align:left;" >
    <?= form_error('nama'); ?>
 </td>
 </tr>
 <tr>
 <th>SKS MTK</th>
 <td>:</td>
 <td>
 <select name="sks" id="sks">
 <option value="">Pilih SKS</option>
 <option value="2" <?php echo set_select('sks', '2'); ?> >2</option>
 <option value="3" <?php echo set_select('sks', '3'); ?> >3</option>
 <option value="4" <?php echo set_select('sks', '4'); ?> >4</option>
 </select>
 </td>
 </tr>
 <tr>
 <th colspan="2"></th>
 <td style="color:red; font-size:8px; text-align:left;">
    <?= form_error('sks'); ?>
 </td>
 </tr>
 <tr>
 <th>Status MTK</th>
 <td>:</td>
 <td>
 <input type="radio" name="status_mtk" value="Unggulan" <?php echo set_radio('status_mtk', 'Unggulan'); ?>> Unggulan
 <input type="radio" name="status_mtk" value="Tidak Unggulan" <?php echo set_radio('status_mtk', 'Tidak Unggulan'); ?>> Tidak Unggulan
 </td>
 </tr>
 <tr>
 <th colspan="2"></th>
 <td style="color:red; font-size:8px; text-align:left;">
    <?= form_error('status_mtk'); ?>
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

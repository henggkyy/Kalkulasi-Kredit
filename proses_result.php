<!doctype HTML>
<html>
<h3>HASIL PERHITUNGAN KALKULASI</h3>
<hr>
<table>
<tr>
    <th align="center">Periode</th>
    <th align="center">Angsuran</th>
    <th align="center">Bunga</th>
    <th align="center">Biaya Admin</th>
    <th align="center">Total Angsuran</th>
<?php
    $jml_pinjaman = $_GET['jml_pinjaman'];
    $sk_bunga = $_GET['sk_bunga'];
    $tenor = $_GET['tenor'];
    $biaya_admin = $_GET['biaya_admin'];
    $angsuran_pokok = $jml_pinjaman/$tenor;
    $total_fix = 0;
    for ($x = 1; $x <= $tenor; $x++) {
        
        $bunga = ($jml_pinjaman - (($x-1)*$angsuran_pokok)) * ($sk_bunga/100) / 12;
        $total_angsuran = $angsuran_pokok + $bunga + $biaya_admin;
        $total_fix +=  $total_angsuran
        ?>
        <tr>
            <td align="center">Cicilan bulan ke-<?php echo $x;?></td>
            <td align="center"><?php echo number_format($angsuran_pokok,2) ;?></td>
            <td align="center"><?php echo number_format($bunga,2);?></td>
            <td align="center"><?php echo number_format($biaya_admin,2);?></td>
            <td align="center"><?php echo number_format($total_angsuran,2);?></td>
        </tr>
        <?php
    } 
?>
<tr>
    <td colspan="2" align="center"><h4>TOTAL : </h4></td>
    <td colspan="3" align="center"><?php echo number_format($total_fix,2);?></td>
</tr>
</tr>
</table>
</html>
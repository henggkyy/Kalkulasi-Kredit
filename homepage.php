<!doctype HTML>
<html>
<h3>SIMULASI KREDIT</h3>
<form method="get" action="./proses_result.php">
	<label for="jml_pinjaman">Jumlah Pinjaman (dalam rupiah) : </label><input name="jml_pinjaman" type="number"></input>
	<br>
	<label for="sk_bunga">Suku Bunga Tahunan (dalam %): </label><input name="sk_bunga" type="text"></input>
	<br>
	<label for="tenor">Tenor (dalam bulan) : </label><input name="tenor" type="number"></input>
	<br>
	<label for="biaya_admin">Biaya Administrasi (dalam rupiah) : </label><input name="biaya_admin" type="number"></input>
	<br>
	<button type="submit">Kalkulasi</button>
</form>
</html>
<h1>Form Faktorial</h1>
<form action="" method="POST">
	<table>
		<tr>
			<td>Cari Faktorial</td>
			<td>:</td>
			<td><input type="text" name="angka" placeholder="Masukkan Nilai" required></td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td><input type="submit" name="submit" value="Hasil"></td>
		</tr>
	</table>
</form>

<?php

	$nilai = 1;
	$faktorial = [];

	if (isset($_POST['submit'])) {
		$angka = $_POST['angka'];

		for ($i=1; $i <= $angka; $i++) { 
			$nilai = $nilai*$i;
			array_push($faktorial, $i);
		}

		$detail = array_reverse($faktorial);
		$detail = join(" x ", $detail);

		echo "$angka! = $detail = $nilai"; 
	}

?>
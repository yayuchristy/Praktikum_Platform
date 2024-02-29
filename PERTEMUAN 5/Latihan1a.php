<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Input Kelulusan</title>
	<style type="text/css">
 	/*	table{
 			border: 1px solid black;
 			border-collapse: collapse;
 		}*/
body{
	width: 260px;
	height: 450px;
}
 		.kolom{
 			/*border-style: 5px solid;*/
 			/*border-collapse: collapse;*/
 			/*padding: 5px;*/
 			border:  1px solid black;
 			/*background-color: redd;*/
 		}
	</style>
</head>
<body>
<div class="kolom">
		<form action="Latihan1b.php" method="POST">
		<table >
		<tr>
			<td>NIM</td>
			<td>:</td>
			<td><input type="text" name="nama" value=""/></td>
		</tr>
		<tr>
			<td>Nama</td>
			<td>:</td>
			<td><input type="text" name="nim" value=""/></td></td>
		</tr>
		<tr>
			<td>Status Kelulusan</td>
			<td>:</td>
			<td><select name="predikat">
				<option value="Memuaskan">Memuaskan</option>
				<option value="Cum Laude">Cum Laude</option>
				<option value="Tidak Memuaskan">Tidak Memuaskan</option>
			</select></td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td colspan="3"><input type="submit" value="Submit Data"></td>
		</tr>
	</table>
	</form>

</div>

</body>
</html>

<!-- cellpadding="4" border="1" -->
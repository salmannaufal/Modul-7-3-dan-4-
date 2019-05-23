<?php

include '../connect.php';

$query = "SELECT id_dosen, nama_dosen FROM dosen";
$result = mysqli_query($connect, $query);

?>
<!DOCTYPE html>
<html>
	<body>
		<form method="POST" action="create.php">
			<table>
			<tr>
				<td><label for="kode">KODE</label></td>
				<td>:</td>
				<td><input type="text" name="kode" id="KODE"></td>
			</tr>
			<tr>
				<td><label for="matkul">Matakuliah</td>
				<td>:</td>
				<td><input type="text" name="nama_matkul" id="MATKUL"></td>
			</tr>
			<tr>
				<td><label for="sks">SKS</label></td>
				<td>:</td>
				<td><input type="text" name="sks" id="SKS"></td>
			</tr>
			<tr>
				<td><label for="semester">Semester</td>
				<td>:</td>
				<td><input type="text" name="semester" id="SEMESTER"></td>
			</tr>
			<tr>
			<td><label for="nama_dosen">Dosen Pengajar</label></label></td> <td> : </td>
			<td>
			<select  name="id_dosen" id="nama_dosen">
			<option value="_">--Pilih salah satu--</option>
            <option value="_">--Pilih salah satu--</option>
			<?php
			while ($data = mysqli_fetch_assoc($result)) {
				?>
				<option value="<?php echo $data['id_dosen']; ?>">
				<?php echo $data['nama_dosen']; ?>
				</option>
				<?php
			}
			?>
			</select>
			</td>

			</tr>
			<tr>
			<td></td> <td></td> <td> <input type="submit" value="Simpan"></td>
			</tr>
			</form>
			</table>
	</body>
</html>

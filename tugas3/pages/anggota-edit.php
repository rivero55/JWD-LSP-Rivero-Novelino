<?php
	$id_anggota=$_GET['id'];
	$q_tampil_anggota=mysqli_query($db,"SELECT * FROM tbanggota WHERE idanggota='$id_anggota'");
	$r_tampil_anggota=mysqli_fetch_array($q_tampil_anggota);
?>
<div id="label-page"><h3>Edit Data Anggota</h3></div>
<div id="content">
	<form action="proses/anggota-edit-proses.php" method="POST">
	<table id="tabel-input">
		<tr>
			<td class="label-formulir">ID Anggota</td>
			<td class="isian-formulir"><input type="text" name="id_anggota" value="<?php echo $r_tampil_anggota['idanggota']; ?>" readonly="readonly" class="isian-formulir isian-formulir-border warna-formulir-disabled"></td>
		</tr>
		<tr>
			<td class="label-formulir">Nama</td>
			<td class="isian-formulir"><input type="text" name="nama" value="<?php echo $r_tampil_anggota['nama']; ?>" class="isian-formulir isian-formulir-border" ></td>
		</tr>
		<tr>
			<td class="label-formulir">Nama 2</td>
			<td class="isian-formulir"><input type="text" name="name" value="" class="isian-formulir isian-formulir-border" required></td>
		</tr>
		<tr>
			<td class="label-formulir">Jenis Kelamin</td>
			<td class="isian-formulir">
			<select class="form-select" aria-label="Default select example" name="jenis_kelamin" required>
			<option value="Pria" <?php echo ($r_tampil_anggota['jeniskelamin'] == 'Pria') ? 'selected' : ''; ?> >Pria</option>
					<option value="Wanita" <?php echo ($r_tampil_anggota['jeniskelamin'] == 'Wanita') ? 'selected' : ''; ?> >Wanita</option>
                    </select></td>
		</tr>
		<tr>
			<td class="label-formulir">Alamat</td>
			<td class="isian-formulir"><textarea rows="2" cols="40" name="alamat" class="isian-formulir isian-formulir-border"><?php echo $r_tampil_anggota['alamat']; ?></textarea></td>
		</tr>
		<tr>
			<td class="label-formulir"></td>
			<td class="isian-formulir"><input type="submit" name="simpan" value="Simpan" id="tombol-simpan"></td>
		</tr>
	</table>
	</form>
</div>
<div id="label-page">
    <h3>Input Data Anggota</h3>
</div>
<div id="content">
    <form action="proses/anggota-input-proses.php" method="post">
        <table id="tabel-input">
            <?php
		$kode = "AG";
		$sql_get_latest = "SELECT MAX(idanggota)
		FROM tbanggota";
		$latest_id = mysqli_fetch_array(mysqli_query($db, $sql_get_latest))[0];
		$latest_id = (substr($latest_id, 2));
		$id_anggota =$kode.str_pad($latest_id +1, 3, "0", STR_PAD_LEFT) ;
		
	?>
            <tr>
                <td class="label-formulir">ID Anggota</td>
                <td class="isian-formulir"><input type="text" value="<?php echo $id_anggota ?>" name="id_anggota"
                        class="isian-formulir isian-formulir-border" readonly></td>
            </tr>
            <tr>
                <td class="label-formulir">Nama</td>
                <td class="isian-formulir"><input type="text" name="nama" class="isian-formulir isian-formulir-border"
                        required></td>
            </tr>
            <tr>
                <td class="label-formulir">Jenis Kelamin</td>
                <td class="isian-formulir">
                    <select class="form-select" aria-label="Default select example" name="jenis_kelamin" required>
                        <option selected disabled>--Pilih Jenis Kelamin--</option>
                        <option value="Pria">Pria</option>
                        <option value="Wanita">Wanita</option>
                    </select>
                </td>
            </tr>

            <tr>
                <td class="label-formulir">Alamat</td>
                <td class="isian-formulir"><textarea rows="2" cols="40" name="alamat"
                        class="isian-formulir isian-formulir-border" required></textarea></td>
            </tr>
            <tr>
                <td class="label-formulir"></td>
                <td class="isian-formulir"><input type="submit" name="simpan" value="Simpan" class="tombol"></td>
            </tr>
        </table>
    </form>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
    $(document).ready(function() {
        $("#idanggota").val();
    });
    </script>


</div>
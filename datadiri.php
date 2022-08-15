<form method="post" action="proses_biodata.php" ?>
    Nama :<br><input type="textbox" id="nama" name="nama"><br>
    Tempat Lahir : <br><input type="textbox" id="tempatlahir" name="tempatlahir"><br>
    Tanggal Lahir : <br><input type="date" id="tanggallahir" name="tanggallahir"><br>
    Alamat:<br><textarea rows="5" cols="60" id="alamat" name="alamat"></textarea><br>
    Jenis Kelamin :<br>
    <select name="sex">
        <option value="laki-laki">Laki-laki <br></option>
        <option value="Perempuan">Perempuan <br></option>
    </select><br>
    Agama :<br>
    <input type="radio" id="agama" name="agama" value="Islam">Islam <br>
    <input type="radio" id="agama" name="agama" value="Kristen">Kristen <br>
    <input type="radio" id="agama" name="agama" value="Protestan">Protestan <br>
    <input type="radio" id="agama" name="agama" value="Hindu">Hindu <br>
    <input type="radio" id="agama" name="agama" value="Buddha">Buddha <br>
    <br>
    <input type="submit" name="submit" value="Simpan"><input type="reset" name="reset" value="Cancel">

</form>
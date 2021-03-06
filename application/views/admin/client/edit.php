<?php echo form_open_multipart(base_url('admin/client/edit/'.$client->id_client),'id="tambah"') ?>

    <div class="row">
      <div class="col-md-5">
        <div class="form-group has-error">
          <label class="text-danger">Nama client <span class="text-danger">*</span></label>
          <input type="text" name="nama" id="nama" class="form-control" placeholder="Nama lengkap" value="<?php echo $client->nama ?>">
        </div>

        <div class="form-group has-error">
              <label class="text-danger">Nama Pimpinan/CP <span class="text-danger">*</span></label>
              <input type="text" name="pimpinan" id="pimpinan" class="form-control" placeholder="Nama Pimpinan" value="<?php echo $client->pimpinan ?>">
            </div>

        <div class="form-group">
          <label>Telepon</label>
          <input type="text" name="telepon" id="telepon" class="form-control" placeholder="Telepon" value="<?php echo $client->telepon ?>">
        </div>

        <div class="form-group">
          <label>Email client</label>
          <input type="email" name="email" id="email" class="form-control" placeholder="Email" value="<?php echo $client->email ?>">
        </div>

        <div class="form-group">
          <label>Alamat website (jika ada)</label>
          <input type="text" name="website" id="website" class="form-control" placeholder="Website" value="<?php echo $client->website ?>">
        </div>

        <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label>Jenis client</label>
            <select name="jenis_client" class="form-control">
              <option value="Perorangan">Perorangan</option>
              <option value="Perusahaan" <?php if($client->jenis_client=="Perusahaan") { echo "selected"; } ?>>Perusahaan</option>
              <option value="Organisasi" <?php if($client->jenis_client=="Organisasi") { echo "selected"; } ?>>Organisasi</option>
            </select>
          </div>
        </div>
        
        <div class="col-md-6">
          <div class="form-group">
            <label>Tampilkan testimoni?</label>
            <select name="status_testimoni" class="form-control">
              <option value="No">No</option>
              <option value="Yes" <?php if($client->status_testimoni=="Yes") { echo "selected"; } ?>>Yes</option>
            </select>
          </div>
        </div>
        </div>
        <div class="form-group">
          <label>Tampilkan di website?</label>
          <select name="status_client" class="form-control">
            <option value="No">No</option>
            <option value="Yes" <?php if($client->status_client=="Yes") { echo "selected"; } ?>>Yes</option>
          </select>
        </div>
        
      </div>

      <div class="col-md-7">
        <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>Tempat lahir</label>
                <input type="text" name="tempat_lahir" class="form-control" placeholder="Tempat/kota kelahiran" value="<?php echo $client->tempat_lahir ?>">
              </div>
            </div>
            
            <div class="col-md-6">
              <div class="form-group">
                <label>Tanggal lahir</label>
                <input type="text" name="tanggal_lahir" class="form-control tanggal" placeholder="dd-mm-yyyy" value="<?php echo date('d-m-Y',strtotime($client->tanggal_lahir)) ?>" >
              </div>
            </div>
            </div>

        <div class="form-group">
          <label>Alamat rumah/kantor</label>
          <textarea name="alamat" id="alamat" class="form-control" placeholder="Alamat"><?php echo $client->alamat ?></textarea>
        </div>

        <div class="form-group">
          <label>Isi testimoni</label>
          <textarea name="isi_testimoni" id="isi_testimoni" class="form-control" placeholder="Testimoni"><?php echo $client->isi_testimoni ?></textarea>
        </div>

        <div class="form-group">
          <label>Kata Kunci pencarian di Google</label>
          <textarea name="keywords" id="keywords" class="form-control" placeholder="Keywords"><?php echo $client->keywords ?></textarea>
        </div>

        <div class="form-group">
          <label>Upload Foto/Logo</label>
          <div class="input-group">
              <div class="custom-file">
                <input type="file" name="gambar" id="gambar" class="custom-file-input" placeholder="gambar" value="<?php echo $client->gambar ?>">
                <label class="custom-file-label" for="exampleInputFile">Upload Foto/Logo</label>
              </div>
          </div>
        </div>

        <div class="form-group">
          <button type="submit" name="submit" class="btn btn-success btn-lg"><i class="fa fa-save"></i> Simpan Data</button>
          <button type="reset" name="reset" class="btn btn-info btn-lg"><i class="fa fa-cut"></i> Reset</button>
         
        </div>


      </div>
    </div>
  
<?php echo form_close(); ?>

<script>
$().ready(function() {
// validate signup form on keyup and submit
$("#tambah").validate({
rules: {
  nama: {
    required: true,
    minlength: 4
  },
  email: {
    required: false,
    email: true
  },
},
messages: {
  nama: {
    required: "Isi nama dengan lengkap",
    minlength: "Nama minimal 4 karakter"
  },
  email: "Masukkan alamat email",
}
});
});
</script>
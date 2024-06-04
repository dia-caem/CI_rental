<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">

            <div class="col-md-8">

                <div class="card">
                    <div class="card-header bg-dark">
                        <strong class="card-title text-white">Form Tambah Pengguna</strong>
                    </div>
                    <div class="card-body">
                        <form method="post" action="<?= base_url()?>administrator/Pengguna/simpan" enctype="multipart/form-data">
                            <div class="form-group">
                                <label>Nama</label>
                                <input type="text" name="nama_admin" class="form-control" placeholder="Masukkan Nama" required>
                                <label>Email</label>
                                <input type="email" name="email" class="form-control" placeholder="Masukkan Email" required>
                                <label>Password</label>
                                <input type="text" name="password" class="form-control" placeholder="Masukkan Password" required>
                                <label>Upload Foto</label>
                                <input type="file" name="foto" class="form-control" placeholder="Upload Foto" required>
                            </div>

                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <a href="<?= base_url()?>administrator/pengguna" class="btn btn-dark">Batal</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
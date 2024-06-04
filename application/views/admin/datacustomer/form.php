<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">

            <div class="col-md-8">

                <div class="card">
                    <div class="card-header bg-dark">
                        <strong class="card-title text-white">Form Tambah Customer</strong>
                    </div>
                    <div class="card-body">
                        <form method="post" action="<?= base_url()?>administrator/Datacustomer/simpan" enctype="multipart/form-data">
                            <div class="form-group">
                                <label>Nama</label>
                                <input type="text" name="nama_customer" class="form-control" placeholder="Masukkan Nama" required>
                                <label>Username</label>
                                <input type="text" name="username" class="form-control" placeholder="Masukkan Username" required>
                                <label>Email</label>
                                <input type="email" name="email" class="form-control" placeholder="Masukkan Email" required>
                                <label>Password</label>
                                <input type="password" name="password" class="form-control" placeholder="Masukkan Password" required>
                                <label>Alamat</label>
                                <input type="text" name="alamat" class="form-control" placeholder="Masukkan Alamat" required>
                                <label>Jenis Kelamin</label>
                                <input type="text" name="jns_kelamin" class="form-control" placeholder="Masukkan Jenis Kelamin" required>
                                <label>No. telp</label>
                                <input type="text" name="no_tlp" class="form-control" placeholder="Masukkan Nomor telp" required>
                                <label>No. KTP</label>
                                <input type="text" name="no_ktp" class="form-control" placeholder="Masukkan Nomor KTP" required>
                                <label>Upload Foto</label>
                                <input type="file" name="foto" class="form-control" placeholder="Upload Foto" required>
                            </div>

                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <a href="<?= base_url()?>administrator/datacustomer" class="btn btn-dark">Batal</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
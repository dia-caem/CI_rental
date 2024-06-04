<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row"> 

            <div class="col-md-8">

                <div class="card">
                    <div class="card-header bg-dark">
                        <strong class="card-title text-white">Form Edit Pengguna</strong>
                    </div>
                    <div class="card-body">
                        <form method="post" action="<?= base_url()?>/administrator/Pengguna/update" enctype="multipart/form-data">
                            <div class="form-group">
                                <label>Id Admin</label>
                                <input type="text" name="id_admin" value="<?= $pengguna['id_admin'];?>" class="form-control" placeholder="Masukkan Id" required>
                                <label>Nama</label>
                                <input type="text" name="nama_admin" value="<?= $pengguna['nama_admin'];?>" class="form-control" placeholder="Masukkan Nama" required>
                                <label>Email</label>
                                <input type="email" name="email" value="<?= $pengguna['email'];?>" class="form-control" placeholder="Masukkan Email" required>
                                <label>Password</label>
                                <input type="text" name="password" value="<?= $pengguna['password'];?>" class="form-control" placeholder="Masukkan Password" required>
                            </div>
                            <div class="form-group">
                                <label>Upload Foto</label>
                                <input type="file" name="foto"  class="form-control" placeholder="Upload Foto">
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
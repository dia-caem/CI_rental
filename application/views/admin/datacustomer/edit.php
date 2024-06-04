<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row"> 

            <div class="col-md-8">

                <div class="card">
                    <div class="card-header bg-dark">
                        <strong class="card-title text-white">Form Edit Customer</strong>
                    </div>
                    <div class="card-body">
                        <form method="post" action="<?= base_url()?>/administrator/Datacustomer/update" enctype="multipart/form-data">
                            <div class="form-group">
                                <label>Id Customer</label>
                                <input type="text" name="id_customer" value="<?= $datacustomer['id_customer'];?>" class="form-control" placeholder="Masukkan Id" required>
                                <label>Nama</label>
                                <input type="text" name="nama_customer" value="<?= $datacustomer['nama_customer'];?>" class="form-control" placeholder="Masukkan Nama" required>
                                <label>Email</label>
                                <input type="email" name="email" value="<?= $datacustomer['email'];?>" class="form-control" placeholder="Masukkan Email" required>
                                <label>Password</label>
                                <input type="password" name="password" value="<?= $datacustomer['password'];?>" class="form-control" placeholder="Masukkan Password" required>
                                <label>Username</label>
                                <input type="text" name="username" value="<?= $datacustomer['username'];?>" class="form-control" placeholder="Masukkan Username" required>
                                <label>Alamat</label>
                                <input type="text" name="alamat" value="<?= $datacustomer['alamat'];?>" class="form-control" placeholder="Masukkan Alamat" required>
                                <label>Jenis Kelamin</label>
                                <input type="text" name="jns_kelamin" value="<?= $datacustomer['jns_kelamin'];?>" class="form-control" placeholder="Masukkan Jenis Kelmain" required>
                                <label>No. Telp</label>
                                <input type="text" name="no_tlp" value="<?= $datacustomer['no_tlp'];?>" class="form-control" placeholder="Masukkan Nomor Telepon" required>
                                <label>No. KTP</label>
                                <input type="text" name="no_ktp" value="<?= $datacustomer['no_ktp'];?>" class="form-control" placeholder="Masukkan Nomor KTP" required>
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
    <div class="content mt-3 ">
        <div class="animated fadeIn ">
            <div class="row justify-content-center">

                <div class="col-md-6 ">

                    <div class="card ">
                        <div class="card-header bg-dark">
                            <H4 class="card-title text-white text-center">FORM REGISTRASI</H4>
                        </div>
                        <div class="card-body">
                            <form method="post" action="<?= base_url()?>customer/register/simpan"
                                enctype="multipart/form-data">
                                <div class="form-row">
                                    <div class="form-group">
                                        <label>Nama</label>
                                        <input type="text" name="nama_customer" class="form-control"
                                            placeholder="Input Nama" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Username</label>
                                        <input type="text" name="username" class="form-control"
                                            placeholder="Input Username" required>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="email" name="email" class="form-control" placeholder="Input Email" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="password" name="password" class="form-control"
                                            placeholder="Input Password" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Jenis Kelamin</label>
                                    <select name="jns_kelamin" class="form-control">
                                        <option value=""> Pilih Salah Satu </option>
                                        <option> Laki-laki </option>
                                        <option> Perempuan </option>
                                    </select required>
                                </div>
                                <div class="form-row">
                                    <div class="form-group">
                                        <label>Alamat</label>
                                        <input type="text" name="alamat" class="form-control money"
                                            placeholder="Input Alamat" required>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group">
                                        <label>No. Telp</label>
                                        <input type="number" name="no_tlp" class="form-control"
                                            placeholder="Input Nomor Telp" required>
                                    </div>
                                    <div class="form-group">
                                        <label>No. KTP</label>
                                        <input type="text" name="no_ktp" class="form-control money"
                                            placeholder="Input Nomor KTP" required>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <label>Upload Gambar</label>
                                    <input type="file" name="foto" class="form-control" placeholder="Input Foto" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <button type="submit" class="btn btn-primary">Register</button>
                                    <a href="<?= base_url()?>customer/dashboard/" class="btn btn-dark">Batal</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        <?php
        if($this->session->flashdata('info')){?>
            Swal.fire({
            icon: 'success',
            title: 'Sukses',
            text: '<?= $this->session->flashdata('info')?>',
            })
        <?php }
        ?>
    </script>
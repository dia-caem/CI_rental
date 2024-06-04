<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">

            <div class="col-md-12">

            <a href="<?= base_url()?>administrator/Pengguna/form_pengguna" class="btn btn-dark mb-2"><i class="fa fa-plus"></i> Tambah Pengguna</a>

                <div class="card">
                    <div class="card-header bg-dark">
                        <strong class="card-title text-white">Data Pengguna</strong>
                    </div>
                    <div class="card-body">
                        <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Foto</th>
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th>Password</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($pengguna as $row) {?>
                                <tr>
                                    <td><?= $no++;?></td>
                                    <td>
                                        <img src="<?= base_url()?>assets/images/pengguna/<?= $row->foto;?>" alt="" width="60">
                                    </td>
                                    <td><?= $row->nama_admin;?></td>
                                    <td><?= $row->email;?></td>
                                    <td><?= $row->password;?></td>
                                    <td>
                                        <a href="<?= base_url()?>administrator/Pengguna/edit/<?= $row->id_admin;?>" class="btn btn-success btn-sm">Edit</a>
                                        <a href="<?= base_url()?>administrator/Pengguna/delete/<?= $row->id_admin;?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah yakin akan menghapus?')">Hapus</a>
                                    </td>
                                </tr>
                                <?php }
                                ?>
                            </tbody>
                        </table>
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
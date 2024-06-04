<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">

            <div class="col-md-12">

            <a href="<?= base_url()?>administrator/Mobil/form" class="btn btn-dark mb-2"><i class="fa fa-plus"></i> Tambah Mobil</a>

                <div class="card">
                    <div class="card-header bg-dark">
                        <strong class="card-title text-white">Data Mobil</strong>
                    </div>
                    <div class="card-body">
                        <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Gambar</th>
                                    <th>Nama Mobil</th>
                                    <th>Plat No.</th>
                                    <th>Tahun</th>
                                    <th>Harga</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($mobil as $mbl) {?>
                                <tr>
                                    <td><?= $no++;?></td>
                                    <td>
                                        <img src="<?= base_url()?>assets/images/mobil/<?= $mbl->foto_mobil;?>" alt="" width="80">
                                    </td>
                                    <td><?= $mbl->nama_mobil;?></td>
                                    <td><?= $mbl->plat_no_mobil;?></td>
                                    <td><?= $mbl->tahun_mobil;?></td>
                                    <td><?= number_format($mbl->harga_mobil,0,'.','.');?></td>
                                    <td>
                                        <?php
                                        if ($mbl->status_mobil == 1) {
                                            echo "<span class='badge badge-success'>Ada</span>";
                                        } else {
                                            echo "<span class='badge badge-danger'>Tidak ada</span>";
                                        }
                                        ?>
                                    </td>
                                    <td >
                                        <a href="<?= base_url()?>/administrator/Mobil/detail/<?= $mbl->id_mobil;?>" class="btn btn-dark btn-sm ">Detail</a>
                                        <a href="<?= base_url()?>/administrator/Mobil/edit/<?= $mbl->id_mobil;?>" class="btn btn-primary btn-sm " class="btn btn-primary btn-sm">Edit</a>
                                        <a href="<?= base_url()?>/administrator/Mobil/delete/<?= $mbl->id_mobil;?>" class="btn btn-danger btn-sm " onclick="return confirm('Anda yakin akan menghapus?')">Hapus</a>
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
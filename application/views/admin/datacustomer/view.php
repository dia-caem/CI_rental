<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">

            <div class="col-md-12">

            <a href="<?= base_url()?>administrator/Datacustomer/form_customer" class="btn btn-dark mb-2"><i class="fa fa-plus"></i> Tambah Customer</a>

                <div class="card">
                    <div class="card-header bg-dark">
                        <strong class="card-title text-white">Data Customer</strong>
                    </div>
                    <div class="card-body">
                        <table id="bootstrap-data-table-export" class="table table-striped table-responsive table-bordered">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Nama Lengkap</th>
                                    <th>Email</th>
                                    <th>Alamat</th>
                                    <th>No. telp</th>
                                    <th colspan="2" class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($customer as $row) {?>
                                <tr>
                                    <td><?= $no++;?></td>
                                    <td><?= $row->nama_customer;?></td>
                                    <td><?= $row->email;?></td>
                                    <td><?= $row->alamat;?></td>
                                    <td><?= $row->no_tlp;?></td>
                                    <td>
                                        <a href="<?= base_url()?>administrator/Datacustomer/Detail/<?= $row->id_customer;?>" class="btn btn-dark btn-sm ">Detail</a>
                                        <a href="<?= base_url()?>administrator/Datacustomer/edit/<?= $row->id_customer;?>" class="btn btn-success btn-sm">Edit</a>
                                        <a href="<?= base_url()?>administrator/Datacustomer/delete/<?= $row->id_customer;?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah yakin akan menghapus?')">Hapus</a>
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
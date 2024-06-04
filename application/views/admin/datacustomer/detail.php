<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row justify-content-center">

            <div class="col-md-8">
                <div class="card">
                    <div class="card-header bg-dark text-center">
                        <strong class="card-title text-white ">Detail Customer</strong>
                    </div>
                    <div class="card-body">
                        <table id="bootstrap-data-table-export" class="table  table-sm">
                            <tr>
                                <td colspan="2" class="text-center">
                                    <img src="<?= base_url()?>assets/images/customer/<?= $customer['foto'];?>" alt="" >
                                </td>
                            </tr>
                            <tr>
                                <td>Id Customer</td>
                                <td>: <?= $customer['id_customer']; ?></td>
                            </tr>
                            <tr>
                                <td>Nama Customer</td>
                                <td>: <?= $customer['nama_customer']; ?></td>
                            </tr>
                            <tr>
                                <td>Username</td>
                                <td>: <?= $customer['username']; ?></td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td>: <?= $customer['email']; ?></td>
                            </tr>
                            <tr>
                                <td>Alamat</td>
                                <td>: <?= $customer['alamat']; ?></td>
                            </tr>
                            <tr>
                                <td>Jenis Kelamin</td>
                                <td>: <?= $customer['jns_kelamin']; ?></td>
                            </tr>
                            <tr>
                                <td>No. telp</td>
                                <td>: <?= $customer['no_tlp']; ?></td>
                            </tr>
                            <tr>
                                <td>No. KTP</td>
                                <td>: <?= $customer['no_ktp']; ?></td>
                            </tr>
                            <tr>
                                <td colspan="2" class="text-center">
                                    <a href="<?= base_url()?>administrator/Datacustomer" class="btn btn-sm btn-dark">Kembali</a>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

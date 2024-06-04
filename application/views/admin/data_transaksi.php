<div class="card-header bg-dark">
    <strong class="card-title text-white">Data Transaksi</strong>
</div>
<div  class="table-responsive ">
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>Customer</th>
                <th>Mobil</th>
                <th>Tgl. Rental</th>
                <th>Tgl. Kembali</th>
                <th>Harga/Hari</th>
                <th>Denda/Hari</th>
                <th>Tgl. Dikembalikan</th>
                <th>Status Pengembalian</th>
                <th>Status Rental</th>
                <th>Cek Pembayaran</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $no = 1;
                foreach ($transaksi as $tr) {?>
            <tr>
                <td><?= $no++;?></td>
                <td><?= $tr->nama_customer;?></td>
                <td><?= $tr->nama_mobil;?></td>
                <td><?= date('d/m/Y', strtotime($tr->tgl_rental));?></td>
                <td><?= date('d/m/Y', strtotime($tr->tgl_kembali));?></td>
                <td>Rp. <?= number_format($tr->harga_mobil,0,'.','.');?></td>
                <td>Rp. <?= number_format($tr->denda_mobil,0,'.','.');?></td>
                <td><?php
                    if($tr->tgl_pengembalian == "0000-00-00") {
                        echo "-";
                    }else {
                        echo date('d/m/Y', strtotime($tr->tgl_pengembalian));
                    }
                    ?>
                </td>
                <td>
                    <?php
                        if($tr->status_pengembalian == "Kembali") {
                            echo "Kembali";
                        } else {
                            echo "Belum Kembali";
                        }
                        ?>
                </td>
                <td>
                    <?php
                        if($tr->status_rental == "Selesai") {
                            echo "Selesai";
                        } else {
                            echo "Belum Selesai";
                        }
                        ?>
                </td>
                <td>
                    <center>
                        <?php 
                            if(empty($tr->bukti_pembayaran)) { ?>
                                <button class="btn btn-sm btn-warning"><i class="fa fa-times-circle"></i></button>
                            <?php } else {?>
                                <a class="btn btn-sm btn-primary" href="<?php echo base_url('administrator/transaksi/pembayaran/'.$tr->id_rental)?>">
                                <i class="fa fa-check-circle"></i>
                            </a>
                            <?php } ?>
                    </center>
                </td>
                <td>
                    <?php
                        if($tr->status_mobil == "1"){
                            echo "-";
                        } else { ?>
                    <div class="row">
                        <a class="btn btn-sm btn-success ml-2 mr-2" href="<?= base_url('administrator/transaksi/transaksi_selesai/'.$tr->id_rental) ?>">
                        <i class='fa fa-check'></i></a>
                        <a class="btn btn-sm btn-danger" href="<?= base_url('administrator/transaksi/transaksi_batal/'.$tr->id_rental) ?>">
                        <i class='fa fa-times'></i></a>
                    </div>
                    <?php } ?>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
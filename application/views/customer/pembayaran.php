<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header alert alert-success">
                    Invoice Pembayaran Anda
                </div>
                <div class="card-body">
                    <table class="table">
                        <?php foreach($transaksi as $tr) : ?>
                        <tr>
                            <th>Nama Mobil</th>
                            <td>:</td>
                            <td><?php echo $tr->nama_mobil?></td>
                        </tr>
                        <tr>
                            <th>Tanggal Rental</th>
                            <td>:</td>
                            <td><?php echo $tr->tgl_rental?></td>
                        </tr>
                        <tr>
                            <th>Tanggal Kembali</th>
                            <td>:</td>
                            <td><?php echo $tr->tgl_kembali?></td>
                        </tr>
                        <tr>
                            <th>Biaya Sewa/Hari</th>
                            <td>:</td>
                            <td>Rp. <?php echo number_format($tr->harga_mobil,0,'.','.')?></td>
                        </tr>
                        <tr>
                            <?php 
                                $x = strtotime($tr->tgl_kembali);
                                $y = strtotime($tr->tgl_rental);
                                $jmlHari = abs(($x - $y)/(60*60*24));
                            ?>
                            <th>Jumlah Hari Sewa</th>
                            <td>:</td>
                            <td><?php echo $jmlHari?> Hari</td>
                        </tr>
                        <tr class="text-success">
                            <th>JUMLAH PEMBAYARAN</th>
                            <td>:</td>
                            <td><button class="btn btn-sm btn-success">
                                    Rp. <?php echo number_format($tr->harga_mobil * $jmlHari,0,'.','.');?></button>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="cars-header alert alert-primary">
                    Informasi Pembayaran
                </div>

                <div class="card-body">
                    <p class="text-success mb-2">Silahkan Melakukan Pembayaran Melalui Nomor
                        Rekening dibawah ini:</p>

                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Bank Mandiri 123456789</li>
                        <li class="list-group-item">Bank BCA 1234567890</li>
                        <li class="list-group-item">Bank BNI 0987654321</li>
                    </ul>

                    <?php 
                        if(empty($tr->bukti_pembayaran)) { ?>
                            <button style="width: 100%" type="button" class="btn btn-sm btn-danger mt-3" 
                            data-toggle="modal" data-target="#exampleModalCenter">
                            Upload Bukti Pembayaran
                            </button>
                        <?php } elseif($tr->status_pembayaran == '0') { ?>
                            <button style="width:100%" class="btn btn-sm btn-warning"><i class="fa fa-clock-o" aria-hidden="true"></i> 
                            Menunggu Konfirmasi</button>
                        <?php } elseif($tr->status_pembayaran == '1') {?>
                            <button style="width:100%" class="btn btn-sm btn-success"><i class="fa fa-check-circle">
                            </i> Pembayaran Selesai</button>
                        <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal untuk opload bukti pembayaran anda -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <form method="POST" action="<?= base_url('customer/transaksi/pembayaran_aksi')?>" enctype="multipart/form-data">
      <div class="modal-body">
        <div class="form-group">
            <label>Upload Bukti Pembayaran</label>
            <input type="hidden" name="id_rental" class="form-control" 
            value="<?php echo $tr->id_rental?>">
            <input type="file" name="bukti_pembayaran" class="form-control">
        </div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-success">Kirim</button>
      </div>
      </form>
    </div>
  </div>
</div>
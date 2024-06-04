<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row justify-content-center">

            <div class="col-md-6">
                <div class="card">
                    <div class="card-header bg-dark text-center">
                        <strong class="card-title text-white ">Konfirmasi Pembayaran</strong>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="<?php echo base_url('administrator/transaksi/cek_pembayaran')?>">

                        <?php foreach($pembayaran as $pmb) : ?>
                            <a class="btn btn-sm btn-success" href="<?php echo 
                            base_url('administrator/transaksi/download_pembayaran/'.$pmb->id_rental)?>">
                            <i class="fa fa-download"></i> Download Bukti Pembayaran</a>  
                             
                            <div class="form-check mt-2">
                                <input type="hidden" class="form-check-input" value="<?php echo $pmb->id_rental?>" name="id_rental">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1" value="1" name="status_pembayaran">
                                <label class="form-check-label" for="exampleCheck1">Konfirmasi Pembayaran</label>
                            </div>
                        <hr>
                        <center>
                        <button type="submit" class="btn btn-sm btn-primary">Simpan</button>
                        </center>
                        <?php endforeach; ?>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

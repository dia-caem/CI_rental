<div class="container">

    <div class="card" style="margin-top: 20px; margin-bottom: 50px">
        <div class="card-header">
            Form Rental Mobil
        </div>

        <div class="card-body">
                
                <form method="post" action="<?php echo base_url('customer/Rental/tambah_rental_aksi')?>">

                <div class="form-group">
                    <label>Harga Sewa/Hari</label>
                    <input type="hidden" name="id_mobil" 
                    value="<?= $mobil['id_mobil'];?>">
                    <input type="hidden" name="status_mobil" 
                    value="<?= $mobil['status_mobil'];?>">
                    <input type="text" name="harga_mobil" class="form-control" 
                    value="<?= $mobil['harga_mobil'];?>" readonly>
                </div>
                <div class="form-group" style="margin-top: 10px">
                    <label>Denda/Hari</label>
                    <input type="text" name="denda_mobil" class="form-control" 
                    value="<?= $mobil['denda_mobil'];?>" readonly>
                </div>
                <div class="form-group" style="margin-top: 10px">
                    <label>Tanggal Rental</label>
                    <input type="date" name="tgl_rental" class="form-control">
                </div>
                <div class="form-group" style="margin-top: 10px">
                    <label>Tanggal Kembali</label>
                    <input type="date" name="tgl_kembali" class="form-control">
                </div>

                <button type="submit" class="btn btn-warning" style="margin-top: 10px">Rental</button>

                </form>    
        </div>

    </div>
</div>
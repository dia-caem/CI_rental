<div class="card-header bg-dark">
    <strong class="card-title text-white">Data Transaksi</strong>
</div>

<?php foreach($transaksi as $tr): ?>
<form method="POST" action="<?php echo base_url('administrator/transaksi/transaksi_selesai_aksi')?>">
    <input type="hidden" name="id_rental" value="<?php echo $tr->id_rental?>">
    <input type="hidden" name="tgl_kembali" value="<?php echo $tr->tgl_kembali?>">
    <input type="hidden" name="denda_mobil" value="<?php echo $tr->denda_mobil?>">

    <div class="form-group">
        <label>Tanggal Pengembalian</label>
        <input type="date" name="tgl_pengembalian" class="form-control" value="<?php echo $tr->tgl_pengembalian?>">
    </div>
    <div class="form-group">
        <label>Status Pengembalian</label>
        <select name="status_pengembalian" class="form-control">
            <option value="<?php echo $tr->status_pengembalian?>"><?php echo $tr->status_pengembalian?></option>
            <option value="Kembali">Kembali</option>
            <option value="Belum Kembali">Belum Kembali</option>
        </select>
    </div>
    <div class="form-group">
        <label>Status Rental</label>
        <select name="status_rental" class="form-control">
            <option value="<?php echo $tr->status_rental?>"><?php echo $tr->status_rental?></option>
            <option value="Selesai">Selesai</option>
            <option value="Belum Selesai">Belum Selesai</optison>
        </select>
    </div>

    <button type="submit "class="btn btn-success">Save</button>

</form>
<?php endforeach; ?>
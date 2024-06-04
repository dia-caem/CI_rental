<?php
    $tanggal = date('Y-m-d');
?>

<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">

            <div class="col-md-12">

                <div class="card">
                    <div class="card-header bg-dark">
                        <H4 class="card-title text-white text-center">FORM EDIT MOBIL</H4>
                    </div>
                    <div class="card-body">
                        <form method="post" action="<?= base_url()?>administrator/Mobil/update" enctype="multipart/form-data">
                            <div class="form-row">
                            <div class="form-group col-md-6" hidden>
                                    <label>Id Mobil</label>
                                    <input type="text" name="id_mobil" class="form-control" value="<?= $mobil['id_mobil'];?>" placeholder="Input Nama Mobil">
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Nama</label>
                                    <input type="text" name="nama_mobil" class="form-control" value="<?= $mobil['nama_mobil'];?>" placeholder="Input Nama Mobil">
                                </div>
                                <div class="form-group col-md-6">
                                    <label>BBM</label>
                                    <input type="text" name="bbm_mobil" class="form-control" value="<?= $mobil['bbm_mobil'];?>" placeholder="Input BBM Mobil">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>Tahun</label>
                                    <input type="number" name="tahun_mobil" class="form-control" value="<?= $mobil['tahun_mobil'];?>" placeholder="Input Tahun Mobil">
                                </div>
                                <div class="form-group col-md-6">
                                    <label>PLAT No.</label>
                                    <input type="text" name="plat_no_mobil" class="form-control" value="<?= $mobil['plat_no_mobil'];?>" placeholder="Input Plat Nomor Mobil">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>Kapasitas</label>
                                    <input type="number" name="kapasitas_mobil" class="form-control" value="<?= $mobil['kapasitas_mobil'];?>" placeholder="Input Kapasitas Mobil">
                                </div>
                                <div class="form-group col-md-6">
                                    <label>AC</label>
                                    <select name="ac_mobil" class="form-control">
                                    <option <?php if($mobil ['ac_mobil'] == 1){echo "selected= 'selected'";}
                                    echo $mobil['ac_mobil'];?> value="1">Tersedia</option>
                                    <option <?php if($mobil ['ac_mobil'] == 0){echo "selected= 'selected'";}
                                    echo $mobil['ac_mobil'];?> value="0">Tidak Tersedia</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>Harga</label>
                                    <input type="text" name="harga_mobil" class="form-control money" value="<?= $mobil['harga_mobil'];?>" placeholder="Input Harga Rental">
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Media Player</label>
                                    <select name="media_player_mobil" class="form-control">
                                    <option <?php if($mobil ['media_player_mobil'] == 1){echo "selected= 'selected'";}
                                    echo $mobil['ac_mobil'];?> value="1">Tersedia</option>
                                    <option <?php if($mobil ['media_player_mobil'] == 0){echo "selected= 'selected'";}
                                    echo $mobil['ac_mobil'];?> value="0">Tidak Tersedia</option>
                                    </select>
                                    </select>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>Warna Mobil</label>
                                    <input type="text" name="warna_mobil" class="form-control" value="<?= $mobil['warna_mobil'];?>" placeholder="Input Warna Mobil">
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Denda</label>
                                    <input type="text" name="denda_mobil" class="form-control money" value="<?= $mobil['denda_mobil'];?>" placeholder="Input Denda Mobil">
                                </div>
                            </div>
                            <div class="form-row">
                                    <label>Upload Gambar</label>
                                    <input type="file" name="foto_mobil" class="form-control" placeholder="Input Foto Mobil">
                                    
                            </div>
                            <div class="form-row" hidden>
                                <div class="form-group col-md-6">
                                    <label>Status Mobil</label>
                                    <input type="number" name="status_mobil" value="<?= $mobil['status_mobil'];?>" class="form-control" placeholder="Input Status Mobil">
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Created</label>
                                    <input type="text" name="created_mobil" value="<?= $mobil['created_mobil']?>;" class="form-control" placeholder="Input Denda Mobil">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Update</button>
                            <a href="<?= base_url()?>administrator/Mobil" class="btn btn-dark">Batal</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
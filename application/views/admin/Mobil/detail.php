<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row justify-content-center">

            <div class="col-md-8">
                <div class="card">
                    <div class="card-header bg-dark text-center">
                        <strong class="card-title text-white ">Detail Mobil</strong>
                    </div>
                    <div class="card-body">
                        <table id="bootstrap-data-table-export" class="table  table-sm">
                            <tr>
                                <td colspan="2" class="text-center">
                                    <img src="<?= base_url()?>assets/images/mobil/<?= $mobil['foto_mobil'];?>" alt="" >
                                </td>
                            </tr>
                            <tr>
                                <td>Nama Mobil</td>
                                <td>: <?= $mobil['nama_mobil']; ?></td>
                            </tr>
                            <tr>
                                <td>Tahun Produksi</td>
                                <td>: <?= $mobil['tahun_mobil']; ?></td>
                            </tr>
                            <tr>
                                <td>Kapasitas Mobil</td>
                                <td>: <?= $mobil['kapasitas_mobil']; ?> orang</td>
                            </tr>
                            <tr>
                                <td>Harga sewa Mobil</td>
                                <td>: <?= number_format($mobil['harga_mobil'],0,'.','.'); ?></td>
                            </tr>
                            <tr>
                                <td>Warna Mobil</td>
                                <td>: <?= $mobil['warna_mobil']; ?></td>
                            </tr>
                            <tr>
                                <td>BBM Mobil</td>
                                <td>: <?= $mobil['bbm_mobil']; ?></td>
                            </tr>
                            <tr>
                                <td>Plat Mobil</td>
                                <td>: <?= $mobil['plat_no_mobil']; ?></td>
                            </tr>
                            <tr>
                                <td>AC Mobil</td>
                                <td>:
                                    <?php
                                    if ($mobil['ac_mobil'] == 1) {
                                        echo '<span class="badge badge-success">Tersedia</span>';
                                    } else {
                                        echo '<span class="badge badge-danger">Tidak Tersedia</span>';
                                    }
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <td>Media Player Mobil</td>
                                <td>:
                                    <?php
                                    if ($mobil['media_player_mobil'] == 1) {
                                        echo '<span class="badge badge-success">Tersedia</span>';
                                    } else {
                                        echo '<span class="badge badge-danger">Tidak Tersedia</span>';
                                    }
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <td>Denda Keterlambatan / Hari</td>
                                <td>: <?= number_format($mobil['denda_mobil'],0,'.','.'); ?></td>
                            </tr>
                            <tr>
                                <td>Status Mobil</td>
                                <td>:
                                    <?php
                                    if ($mobil['status_mobil'] == 1) {
                                        echo '<span class="badge badge-success">Tersedia</span>';
                                    } else {
                                        echo '<span class="badge badge-danger">Tidak Tersedia</span>';
                                    }
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <td>Tanggal Diinput</td>
                                <td>: <?=mediumdate_indo($mobil['created_mobil']); ?></td>
                            </tr>
                            <tr>
                                <td colspan="2" class="text-center">
                                    <a href="<?= base_url()?>administrator/Mobil" class="btn btn-sm btn-dark">Kembali</a>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

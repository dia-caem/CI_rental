<!-- Header-->
<header class="bg-dark">
    <div class="text-center">
        <img class="" style="width:82%; height:400px" src="<?= base_url()?>assets/images/banner.png">
    </div>
</header>
<!-- Section-->
<section class="py-5">
    <?php echo $this->session->flashdata('pesan') ?>
    <div class="container px-4 px-lg-5 mt-5">
        <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">

            <?php foreach($mobil as $mbl) {?>

            <div class="col mb-5">
                <div class="card h-100">
                    <!-- Product image-->
                    <img class="card-img-top" src="<?= base_url()?>assets/images/mobil/<?= $mbl->foto_mobil;?>"
                        alt="..." style="width:100%; height:130px" />
                    <!-- Product details-->
                    <div class="card-body p-4">
                        <div>
                            <!-- Product name-->
                            <h5><a><?= $mbl->nama_mobil;?></a></h5>
                            <!-- plat -->
                            <h7 class="text-warning">Rp. <?= number_format($mbl->harga_mobil,0,'.','.');?> / hari</h7>
                        </div>
                    </div>
                    <!-- Product actions-->
                    <div class="card-footer p-4 pt-0 border-top-0 px-0 bg-transparent text-center">
                        <?php 
                        if ($mbl->status_mobil == "1") {
                            echo anchor('customer/rental/tambah_rental/'.$mbl->id_mobil, 
                            '<button class="btn btn-success mt-auto">Rental</button>');
                        } else {
                            echo "<span class='btn btn-danger'>Telah di rental</span>";
                        }
                        ?>
                        <a href="<?= base_url()?>/customer/dashboard/detail/<?= $mbl->id_mobil;?>"
                            class="btn btn-dark mt-auto">Detail</a>
                    </div>
                </div>
            </div>

            <?php } ?>
        </div>
    </div>
</section>
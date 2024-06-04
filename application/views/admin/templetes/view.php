<!-- Section-->
<section class="">
    <?php echo $this->session->flashdata('pesan') ?>
    <div class="container px-4 px-lg-5">

        <?php foreach($mobil as $mbl) {?>
        <div class="">
            <div class="col-lg-3 col-md-6">
                <div class="mt-5">
                    <img class="card-img-top" src="<?= base_url()?>assets/images/mobil/<?= $mbl->foto_mobil;?>"
                        alt="..." style="width:100%; height:130px" />
                    <!-- Product details-->
                    <div class="card-body p-2">
                        <div>
                            <!-- Product name-->
                            <h5><a><?= $mbl->nama_mobil;?></a></h5>
                            <!-- plat -->
                            <h7 class="text-warning">Rp. <?= number_format($mbl->harga_mobil,0,'.','.');?> / hari</h7>
                        </div>
                    </div>
                    <!-- Product actions-->
                    <div class="card-footer  border-top-0 px-0 bg-transparent text-center">
                        <a href="<?= base_url()?>/administrator/dashboard/detail/<?= $mbl->id_mobil;?>"
                            class="btn btn-dark mt-auto">Detail</a>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
</section>
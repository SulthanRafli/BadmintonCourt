<div class="page-header default-template-gradient">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="page-title">Riwayat Pemesanan</h2>
                <p class="page-description">Semua Invoice Pemesanan</p>
            </div>
        </div>
    </div>
</div>

<div class="breadcrumbs-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumbs">
                    <span class="first-item">
                        <a href="<?php echo base_url(); ?>C_home">Beranda</a></span>
                    <span class="separator">&gt;</span>
                    <span class="last-item">Print</span>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="photo-gallery-area">
    <div class="container">
        <div class="col-md-12">
            <div class="heading-content-two text-center">
                <h2 class="title default-text-gradient">Invoice</h2>
            </div>
        </div>
        <div class="row">
            <?php foreach ($list_invoice as $li) {
                echo "
                <div class='col-md-3 col-sm-6 col-xs-6'>
                    <div class='gallery-image-content'>
                        <img src='" . base_url('assets/') . "images/print.jpg' alt='blog' />
                        <div class='overlay-background gradient-transparent'>
                            <a href='" . base_url() . "C_list_invoice/print_invoice/$li->idBooking' target='_blank'>
                                <span><i class='fa fa-cloud-download'></i>$li->noInvoice</span>
                            </a>
                        </div>
                    </div>
                </div>
                ";
            } ?>
        </div>
    </div>
</div>
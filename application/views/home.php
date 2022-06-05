<div class="slider-area">
    <div class="pogoSlider">
        <div class="pogoSlider-slide" data-transition="expandReveal" data-duration="1000" style="background-image: url(<?php echo base_url('assets/') ?>images/Header1.jpeg)">
            <div class="container-slider one">
                <div class="row">
                    <div class="col-md-12">
                        <div class="slider-text-content">
                            <h3 class="pogoSlider-slide-element" data-in="slideDown" data-out="slideUp" data-duration="500" data-delay="500">
                                Kami sajikan pelayanan terbaik kami
                            </h3>
                            <h2 class="pogoSlider-slide-element" data-in="slide-left" data-out="slideUp" data-duration="500" data-delay="500">
                                GOR TITAN
                            </h2>
                            <a href="#daftarLapangan" class="button pogoSlider-slide-element" data-in="slideDown" data-out="slideUp" data-duration="500" data-delay="500">Pesan Sekarang</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="pogoSlider-slide" data-transition="expandReveal" data-duration="1000" style="background-image: url(<?php echo base_url('assets/') ?>images/Header2.jpeg)">
            <div class="container-slider one">
                <div class="row">
                    <div class="col-md-12">
                        <div class="slider-text-content">
                            <h3 class="pogoSlider-slide-element" data-in="slideDown" data-out="slideUp" data-duration="500" data-delay="500">
                                Kami sajikan pelayanan terbaik kami
                            </h3>
                            <h2 class="pogoSlider-slide-element" data-in="slide-left" data-out="slideUp" data-duration="500" data-delay="500">
                                GOR TITAN
                            </h2>
                            <a href="#daftarLapangan" class="button pogoSlider-slide-element" data-in="slideDown" data-out="slideUp" data-duration="500" data-delay="500">Pesan Sekarang</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="aboutus-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="heading-content-one">
                    <h2 class="title">Tentang Kami</h2>
                    <h5 class="sub-title">Selamat datang di GOR Titan</h5>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-2">
                <div class="tab-list">
                    <ul class="nav nav-tabs about-tab hidden-xs hidden-sm" role="tablist">
                        <li role="presentation" class="active">
                            <a href="#home" aria-controls="home" role="tab" data-toggle="tab">Tentang GOR Titan</a>
                        </li>
                        <li role="presentation">
                            <a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Syarat &amp; Ketentuan</a>
                        </li>
                        <li role="presentation">
                            <a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Spesialisasi GOR Titan</a>
                        </li>
                    </ul>
                    <form class="hidden-md hidden-lg">
                        <select class="about-mobile">
                            <option value="0">Tentang GOR Titan</option>
                            <option value="1">Syarat &amp; Ketentuan</option>
                            <option value="2">Spesialisasi GOR Titan</option>
                        </select>
                    </form>
                </div>
            </div>

            <div class="col-md-10">
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active row" id="home">
                        <div class="col-md-6">
                            <div class="text-content">
                                <p>
                                    GOR Titan adalah salah satu GOR yang menyediakan lapangan badminton dan ada tiga lapangan yang tersedia. Lokasi GOR Titan berada di lingkungan warga, dan berdekatan dengan Masjid. Fasilitas yang diberikan juga cukup lengkap.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="image-content">
                                <img src="<?php echo base_url('assets/') ?>images/Header3.jpeg" alt="about" />
                            </div>
                        </div>
                    </div>

                    <div role="tabpanel" class="tab-pane fade row" id="profile">
                        <div class="col-md-6">
                            <div class="text-content">
                                <ul>
                                    <li>Mematuhi protokol kesehatan</li>
                                    <li>Memakai pakaian olahraga</li>
                                    <li>Diharapkan pemanasan terlebih dahulu</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="image-content">
                                <img src="<?php echo base_url('assets/') ?>images/Header3.jpeg" alt="about" />
                            </div>
                        </div>
                    </div>

                    <div role="tabpanel" class="tab-pane fade row" id="messages">
                        <div class="col-md-6">
                            <div class="text-content">
                                <ul>
                                    <li>Lokasi GOR Titan berada di lingkungan warga</li>
                                    <li>Fasilitas yang diberikan juga cukup lengkap</li>
                                    <li>berdekatan dengan Masjid</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="image-content">
                                <img src="<?php echo base_url('assets/') ?>images/Header3.jpeg" alt="about" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="apartments-area bg-gray-color" id="daftarLapangan">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="heading-content-one border">
                    <h2 class="title">Daftar Lapangan</h2>
                    <h5 class="sub-title">Cari lapangan yang kamu inginkan</h5>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-6 col-xs-6">
                <div class="apartments-content">
                    <div class="image-content">
                        <?php if ($this->session->userdata('status') === true) {
                            echo "<a href='" . base_url() . "C_detail_item/detail/1'><img src='" . base_url('assets/') . "images/Lapangan1.jpeg' alt='apartment' /></a>";
                        } else {
                            echo "<a href='#' onclick='loginFirst()'><img src='" . base_url('assets/') . "images/Lapangan1.jpeg' alt='apartment' /></a>";
                        } ?>
                    </div>

                    <div class="text-content">
                        <div class="top-content" style="padding: 0px 20px 5px !important;">
                            <h3>
                                <?php if ($this->session->userdata('status') === true) {
                                    echo "<a href='" . base_url() . "C_detail_item/detail/1'>Lapangan 1</a>";
                                } else {
                                    echo "<a href='#' onclick='loginFirst()'>Lapangan 1</a>";
                                } ?>
                            </h3>
                            <span>
                                <i class="fa fa-clock-o"></i>
                                08.00 - 00.00
                            </span>
                        </div>
                        <div class="bottom-content clearfix">
                            <div class="meta-bed-room">
                                <i class="fa fa-circle"></i> <?php echo $total_lapangan1 ?> Dipesan
                            </div>
                            <span class="clearfix"></span>
                            <div class="rent-price pull-left">Rp 30.0000/jam</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-6">
                <div class="apartments-content">
                    <div class="image-content">
                        <?php if ($this->session->userdata('status') === true) {
                            echo "<a href='" . base_url()  . "C_detail_item/detail/2'><img src='" . base_url('assets/') . "images/Lapangan2.jpeg' alt='apartment' /></a>";
                        } else {
                            echo "<a href='#' onclick='loginFirst()'><img src='" . base_url('assets/') . "images/Lapangan2.jpeg' alt='apartment' /></a>";
                        } ?>
                    </div>

                    <div class="text-content">
                        <div class="top-content" style="padding: 0px 20px 5px !important;">
                            <h3>
                                <?php if ($this->session->userdata('status') === true) {
                                    echo "<a href='" . base_url() . "C_detail_item/detail/2'>Lapangan 2</a>";
                                } else {
                                    echo "<a href='#' onclick='loginFirst()'>Lapangan 2</a>";
                                } ?>
                            </h3>
                            <span>
                                <i class="fa fa-clock-o"></i>
                                08.00 - 00.00
                            </span>
                        </div>
                        <div class="bottom-content clearfix">
                            <div class="meta-bed-room">
                                <i class="fa fa-circle"></i> <?php echo $total_lapangan2 ?> Dipesan
                            </div>
                            <span class="clearfix"></span>
                            <div class="rent-price pull-left">Rp 30.0000/jam</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix hidden-md hidden-lg"></div>
            <div class="col-md-4 col-sm-6 col-xs-6">
                <div class="apartments-content">
                    <div class="image-content">
                        <?php if ($this->session->userdata('status') === true) {
                            echo "<a href='" . base_url() . "C_detail_item/detail/3'><img src='" . base_url('assets/') . "images/Lapangan3.jpeg' alt='apartment' /></a>";
                        } else {
                            echo "<a href='#' onclick='loginFirst()'><img src='" . base_url('assets/') . "images/Lapangan3.jpeg' alt='apartment' /></a>";
                        } ?>
                    </div>

                    <div class="text-content">
                        <div class="top-content" style="padding: 0px 20px 5px !important;">
                            <h3>
                                <?php if ($this->session->userdata('status') === true) {
                                    echo "<a href='" . base_url() . "C_detail_item/detail/3'>Lapangan 3</a>";
                                } else {
                                    echo "<a href='#' onclick='loginFirst()'>Lapangan 3</a>";
                                } ?>
                            </h3>
                            <span>
                                <i class="fa fa-clock-o"></i>
                                08.00 - 00.00
                            </span>
                        </div>
                        <div class="bottom-content clearfix">
                            <div class="meta-bed-room">
                                <i class="fa fa-circle"></i> <?php echo $total_lapangan3 ?> Dipesan
                            </div>
                            <span class="clearfix"></span>
                            <div class="rent-price pull-left">Rp 30.0000/jam</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="fun-fects-area" style="background-image: url(<?php echo base_url('assets/') ?>images/count-down-image.png)">
    <div class="container">
        <div class="stat">
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="milestone-counter">
                    <h3 class="stat-count highlight" data-form="1" data-to="<?php echo $total_user ?>" data-speed="3000">
                        <?php echo $total_user ?>
                    </h3>
                    <div class="milestone-details">Pengguna</div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="milestone-counter">
                    <h3 class="stat-count highlight" data-form="1" data-to="<?php echo $total_booking ?>" data-speed="3000">
                        <?php echo $total_booking ?>
                    </h3>
                    <div class="milestone-details">Pemesanan</div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="milestone-counter">
                    <h3 class="stat-count highlight" data-form="1" data-to="3" data-speed="3000">
                        3
                    </h3>
                    <div class="milestone-details">Lapangan</div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="contact-area">
    <div class="container-large-device">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="heading-content-two available">
                        <h2 class="title">
                            Kami Tersedia<br />
                            Untuk Anda 24/7
                        </h2>
                        <h5 class="sub-title">
                            Layanan dukungan online kami selalu 24 Jam
                        </h5>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-7">
                    <div class="map-left-content">
                        <iframe width="600" height="350" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.681777339981!2d106.86571781471714!3d-6.305474695436518!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ed78ff89ccb1%3A0x6b0ee39b8f7388d2!2sGOR%20Titan!5e0!3m2!1sid!2sid!4v1624479150342!5m2!1sid!2sid" allowfullscreen="allowfullscreen"></iframe>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="map-right-content">
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <div class="contact">
                                    <h4><i class="fa fa-address-book"></i>Alamat</h4>
                                    <p>
                                        Jl. Gang Madrasah RT 010 RW 005 Kelurahan Susukan, Jakarta Timur
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="contact">
                                    <h4><i class="fa fa-phone-square"></i>Hubungi</h4>
                                    <p>+62813-8380-7237</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="call-to-action overlay-bg" style="background-image: url(<?php echo base_url('assets/') ?>images/contact-bg-image.png)">
    <div class="container">
        <div class="row tb">
            <div class="col-md-6 col-sm-6 tb-cell">
                <div class="contact-left-content">
                    <h3>Apakah Anda ingin Menyewa Lapangan Anda?</h3>
                    <h4>Hubungi kami!</h4>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 tb-cell">
                <div class="contact-right-content">
                    <h4>
                        <a href="https://api.whatsapp.com/send?phone=6281383807237" target="_blank">+62813-8380-7237</a>
                    </h4>
                    <a href="https://api.whatsapp.com/send?phone=6281383807237" target="_blank" class="button">Hubungi Kami</a>
                </div>
            </div>
        </div>
    </div>
</div>


<script>
    function loginFirst() {
        swal({
            title: "Perhatian",
            text: "Harap masuk terlebih dahulu",
            icon: "warning",
            button: "OK",
        });
    }
</script>
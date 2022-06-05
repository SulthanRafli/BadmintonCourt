<div class="page-header default-template-gradient">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="page-title">Kontak</h2>
                <p class="page-description">Kontak kami</p>
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
                    <span class="last-item">Kontak</span>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="map-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="heading-content-one">
                    <h5>Temukan lokasi Kami</h5>
                    <h2 class="title default-text-gradient">
                        Peta &amp; Petunjuk arah
                    </h2>
                    <p>Cari tahu cara menemukan kami dari lokasi Anda saat ini</p>
                </div>
                <div class="map-content">
                    <iframe height="550" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.681777339981!2d106.86571781471714!3d-6.305474695436518!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ed78ff89ccb1%3A0x6b0ee39b8f7388d2!2sGOR%20Titan!5e0!3m2!1sid!2sid!4v1624479150342!5m2!1sid!2sid" allowfullscreen="allowfullscreen"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="contact-us-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="heading-content-one">
                    <h2 class="title default-text-gradient">
                        Kontak kami<br />
                        secara langsung
                    </h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="contact-us-content-left">
                    <div class="contact">
                        <h4><i class="fa fa-map-marker"></i>Alamat</h4>
                        <p>
                            Jl. Gang Madrasah RT 010 RW 005 <br />
                            Kelurahan Susukan, Jakarta Timur
                        </p>
                    </div>

                    <div class="contact">
                        <h4><i class="fa fa-envelope"></i>Email</h4>
                        <p>
                            yourmail@gmail.com <br />
                            houserentmail@gmail.com
                        </p>
                    </div>

                    <div class="contact">
                        <h4><i class="fa fa-volume-control-phone"></i>Hubungi</h4>
                        <p>
                            +62813-8380-7237
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-8">
                <div class="contact-us-content-right">
                    <form id="basic">
                        <h3>Punya pertanyaan?</h3>
                        <img src="<?php echo base_url('assets/'); ?>images/envelope.jpg" alt="envelope" />
                        <div class="input-content clearfix">
                            <h4>Kirimi Kami email</h4>
                            <div class="row">
                                <div class="col-sm-6">
                                    <input type="text" placeholder="Nama*" name="name" class="form-control" required />
                                </div>
                                <div class="col-sm-6">
                                    <input type="email" placeholder="Email*" name="email" class="form-control Email" required />
                                </div>
                                <div class="col-md-12">
                                    <textarea rows="2" placeholder="Pesan Kamu*" cols="80" name="message" required></textarea>
                                </div>
                            </div>
                            <div class="subimt-button clearfix">
                                <button style="border: none !important;" type="button-submit" class="submit default-template-gradient" onclick="sendContact()">Kirim</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    baseUrl = "<?php echo base_url(); ?>";

    function sendContact() {
        $("#basic").submit(function(e) {
            swal({
                title: "Apa anda yakin ingin mengirim pesan ?",
                text: "Pastikan data yang diinput benar!",
                icon: "warning",
                buttons: ["Tidak", "Iya"],
                dangerMode: true,
            }).then(function(isConfirm) {
                if (isConfirm) {
                    $.ajax({
                        type: "POST",
                        url: baseUrl + "C_contact/save",
                        data: $(e.target).serialize(),
                        dataType: "json",
                        beforeSend: function() {
                            console.log($(e.target).serialize());
                        },
                        error: function(jqXHR, textStatus, errorThrown) {
                            console.log(arguments);
                            console.log(errorThrown);
                            console.log(textStatus);
                        },
                        success: function(data) {
                            if (data.status === true) {
                                swal({
                                    title: "Berhasil",
                                    text: "Terimakasih telah mengirim pesan untuk kami",
                                    icon: "success",
                                    button: "OK",
                                }).then(function(isConfirm) {
                                    window.location = baseUrl + "C_contact";
                                });
                            } else {
                                swal({
                                    title: "Gagal",
                                    text: "Pesan gagal dikirim",
                                    icon: "error",
                                    button: "OK",
                                });
                            }
                        },
                    });
                } else {
                    swal("Cancelled", "", "error");
                }
            });
            return false;
        });
    }
</script>
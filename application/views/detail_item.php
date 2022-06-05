<div class="page-header default-template-gradient">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="page-title">Lapangan <?php echo $no ?></h2>
                <p class="page-description">Detail Lapangan</p>
            </div>
        </div>
    </div>
</div>

<div class="breadcrumbs-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumbs">
                    <span class="first-item"> <a href="<?php echo base_url(); ?>C_home">Beranda</a></span>
                    <span class="separator">&gt;</span>
                    <span class="last-item">Lapangan <?php echo $no ?></span>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="apartment-single-area">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="corousel-gallery-content">
                    <div class="gallery">
                        <div class="full-view owl-carousel">
                            <a class="item image-pop-up" href="<?php echo base_url('assets/'); ?>images/Lapangan1.jpeg">
                                <img src="<?php echo base_url('assets/'); ?>images/Lapangan<?php echo $no ?>.jpeg" alt="corousel" />
                            </a>
                        </div>
                    </div>
                </div>

                <div class="family-apartment-content mobile-extend">
                    <div class="tb">
                        <div class="tb-cell">
                            <h3 class="apartment-title">Lapangan <?php echo $no ?></h3>
                        </div>
                        <div class="tb-cell">
                            <p class="pull-right rent">Harga/jam: Rp 30.000</p>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <p class="apartment-description default-gradient-before">
                        Jl. Gang Madrasah RT 010 RW 005 Kelurahan Susukan, Jakarta Timur
                    </p>
                    <div class="price-details">
                        <h3>Detail Harga-</h3>
                        <ul>
                            <li><span>Harga/jam: </span> Rp 30.000 (NET)</li>
                            <li>
                                <span>Toilet :</span> Gratis
                            </li>
                            <li><span>Kantin :</span> Tersedia</li>
                        </ul>
                    </div>
                </div>
                <div class="hidden-md hidden-lg text-center extend-btn">
                    <span class="extend-icon">
                        <i class="fa fa-angle-down"></i>
                    </span>
                </div>
            </div>

            <div class="col-md-4">
                <div class="apartment-sidebar">
                    <div class="widget_rental_search clerafix">
                        <div class="form-border gradient-border">
                            <form id="basic" class="advance_search_query booking-form">
                                <div class="form-bg seven">
                                    <div class="form-content">
                                        <h2 class="form-title">Pesan Lapangan Ini</h2>
                                        <div class="form-group">
                                            <label>Nama Lengkap</label>
                                            <input type="text" name="fullName" placeholder="Nama Lengkap" required />
                                        </div>
                                        <div class="form-group">
                                            <label>Nomor Telepon</label>
                                            <input type="tel" name="telp" placeholder="+62(8)9999-9999" required />
                                        </div>
                                        <div class="form-group">
                                            <label>Tanggal Pemesanan</label>
                                            <input type="date" name="date" min="<?php echo date("Y-m-d") ?>" required />
                                        </div>
                                        <div class="form-group">
                                            <label>Jam Pemesanan</label>
                                            <input type="text" name="daterange" value="08:00 - 08:00" required />
                                            <input type="hidden" name="startTime" id="startTime" />
                                            <input type="hidden" name="endTime" id="endTime" />
                                        </div>
                                        <div class="form-group">
                                            <label>Durasi (Jam)</label>
                                            <input style="background: aliceblue;" type="number" step="1" min="1" max="100" name="duration" id="duration" size="4" class="input-text" onchange="priceChange()" readonly required />
                                            <input type="hidden" name="duratioValue" id="durationValue" />
                                        </div>
                                        <div class="form-group">
                                            <label>Keterangan</label>
                                            <textarea name="message" placeholder="Keterangan" class="form-controller"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <h5>Harga</h5>
                                                </div>
                                                <div class="col-md-8" style="text-align: right;">
                                                    <h5 id="priceTag">Rp 0</h5>
                                                    <input type="hidden" name="price" id="price" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <input type="hidden" name="idField" id="idField" value="<?php echo $no ?>" />
                                            <button type="button-submit" class="
                                                button
                                                default-template-gradient
                                                button-radius
                                                " onclick="booking()">
                                                Pesan
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="apartments-related-area bg-gray-color">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="heading-content-one">
                    <h2 class="title default-text-gradient">Lapangan Terkait</h2>
                </div>
            </div>
        </div>
        <?php if ($no == 1) { ?>
            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-6">
                    <div class="apartments-content">
                        <div class="image-content">
                            <a href='<?php echo base_url() ?>C_detail_item/detail/2'><img src='<?php echo base_url('assets/') ?>images/Lapangan2.jpeg' alt='apartment' /></a>
                        </div>

                        <div class=" text-content">
                            <div class="top-content" style="padding: 0px 20px 5px !important;">
                                <h3>
                                    <a href='<?php echo base_url() ?>C_detail_item/detail/2'>Lapangan 2</a>
                                </h3>
                                <span>
                                    <i class="fa fa-clock-o"></i>
                                    08.00 - 00.00
                                </span>
                            </div>
                            <div class="bottom-content clearfix">
                                <div class="meta-bed-room">
                                    <i class="fa fa-circle"></i> 3 Dipesan
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
                            <a href='<?php echo base_url() ?>C_detail_item/detail/3'><img src='<?php echo base_url('assets/') ?>images/Lapangan3.jpeg' alt='apartment' /></a>
                        </div>

                        <div class=" text-content">
                            <div class="top-content" style="padding: 0px 20px 5px !important;">
                                <h3>
                                    <a href='<?php echo base_url() ?>C_detail_item/detail/3'>Lapangan 3</a>
                                </h3>
                                <span>
                                    <i class="fa fa-clock-o"></i>
                                    08.00 - 00.00
                                </span>
                            </div>
                            <div class="bottom-content clearfix">
                                <div class="meta-bed-room">
                                    <i class="fa fa-circle"></i> 3 Dipesan
                                </div>
                                <span class="clearfix"></span>
                                <div class="rent-price pull-left">Rp 30.0000/jam</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php } else if ($no == 2) {  ?>
            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-6">
                    <div class="apartments-content">
                        <div class="image-content">
                            <a href='<?php echo base_url() ?>C_detail_item/detail/1'><img src='<?php echo base_url('assets/') ?>images/Lapangan1.jpeg' alt='apartment' /></a>
                        </div>

                        <div class=" text-content">
                            <div class="top-content" style="padding: 0px 20px 5px !important;">
                                <h3>
                                    <a href='<?php echo base_url() ?>C_detail_item/detail/1'>Lapangan 1</a>
                                </h3>
                                <span>
                                    <i class="fa fa-clock-o"></i>
                                    08.00 - 00.00
                                </span>
                            </div>
                            <div class="bottom-content clearfix">
                                <div class="meta-bed-room">
                                    <i class="fa fa-circle"></i> 3 Dipesan
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
                            <a href='<?php echo base_url() ?>C_detail_item/detail/3'><img src='<?php echo base_url('assets/') ?>images/Lapangan3.jpeg' alt='apartment' /></a>
                        </div>

                        <div class=" text-content">
                            <div class="top-content" style="padding: 0px 20px 5px !important;">
                                <h3>
                                    <a href='<?php echo base_url() ?>C_detail_item/detail/3'>Lapangan 3</a>
                                </h3>
                                <span>
                                    <i class="fa fa-clock-o"></i>
                                    08.00 - 00.00
                                </span>
                            </div>
                            <div class="bottom-content clearfix">
                                <div class="meta-bed-room">
                                    <i class="fa fa-circle"></i> 3 Dipesan
                                </div>
                                <span class="clearfix"></span>
                                <div class="rent-price pull-left">Rp 30.0000/jam</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php } else if ($no == 3) {  ?>
            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-6">
                    <div class="apartments-content">
                        <div class="image-content">
                            <a href='<?php echo base_url() ?>C_detail_item/detail/1'><img src='<?php echo base_url('assets/') ?>images/Lapangan1.jpeg' alt='apartment' /></a>
                        </div>

                        <div class=" text-content">
                            <div class="top-content" style="padding: 0px 20px 5px !important;">
                                <h3>
                                    <a href='<?php echo base_url() ?>C_detail_item/detail/1'>Lapangan 1</a>
                                </h3>
                                <span>
                                    <i class="fa fa-clock-o"></i>
                                    08.00 - 00.00
                                </span>
                            </div>
                            <div class="bottom-content clearfix">
                                <div class="meta-bed-room">
                                    <i class="fa fa-circle"></i> 3 Dipesan
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
                            <a href='<?php echo base_url() ?>C_detail_item/detail/2'><img src='<?php echo base_url('assets/') ?>images/Lapangan2.jpeg' alt='apartment' /></a>
                        </div>

                        <div class=" text-content">
                            <div class="top-content" style="padding: 0px 20px 5px !important;">
                                <h3>
                                    <a href='<?php echo base_url() ?>C_detail_item/detail/2'>Lapangan 2</a>
                                </h3>
                                <span>
                                    <i class="fa fa-clock-o"></i>
                                    08.00 - 00.00
                                </span>
                            </div>
                            <div class="bottom-content clearfix">
                                <div class="meta-bed-room">
                                    <i class="fa fa-circle"></i> 3 Dipesan
                                </div>
                                <span class="clearfix"></span>
                                <div class="rent-price pull-left">Rp 30.0000/jam</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>
<script>
    $('input[name="daterange"]').daterangepicker({
        timePicker: true,
        timePicker24Hour: true,
        timePickerIncrement: 60,
        minDate: moment().startOf('day').add(8, "hours"),
        locale: {
            format: 'HH:mm'
        }
    }, function(start, end, label) {
        let diff = moment.duration(end.diff(start));
        $('#duration').val(diff.hours()).trigger('change');
        $('#durationValue').val(diff.hours());
        $('#startTime').val(moment(start).format("HH:mm"));
        $('#endTime').val(moment(end).format("HH:mm"));
    }).on('show.daterangepicker', function(ev, picker) {
        picker.container.find(".calendar-table").hide();
    });

    function priceChange() {
        var formatter = new Intl.NumberFormat('id', {
            style: 'currency',
            currency: 'IDR'
        })
        let dur = $('#duration').val();
        let price = 30000;
        let total = dur * price;
        $('#price').val(total);
        $('#priceTag').html("");
        $('#priceTag').append(formatter.format(total));
    }

    function booking() {
        $("#basic").submit(function(e) {
            swal({
                title: "Apa anda sudah yakin ingin memesan ?",
                text: "Pastikan data yang diinput benar!",
                icon: "warning",
                buttons: ["Tidak", "Iya"],
                dangerMode: true,
            }).then(function(isConfirm) {
                if (isConfirm) {
                    $.ajax({
                        type: "POST",
                        url: baseUrl + "C_booking/checkBooking",
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
                                $.ajax({
                                    type: "POST",
                                    url: baseUrl + "C_booking/save",
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
                                                text: "Terima kasih atas pemesanan anda",
                                                icon: "success",
                                                button: "OK",
                                            }).then(function(isConfirm) {
                                                location.reload();
                                            });
                                        } else {
                                            swal({
                                                title: "Gagal",
                                                text: "Gagal memesan lapangan",
                                                icon: "error",
                                                button: "OK",
                                            });
                                        }
                                    },
                                });
                            } else {
                                swal({
                                    title: "Gagal",
                                    text: "Tanggal dan jam yang dipilih sudah dipesan",
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
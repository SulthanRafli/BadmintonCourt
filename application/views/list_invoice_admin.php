<div class="page-header default-template-gradient">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="page-title">List Pemesanan</h2>
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
            <?php foreach ($list_booking as $li) {
                echo "
                <div class='col-md-3 col-sm-6 col-xs-6'>
                    <div class='gallery-image-content'>
                        <img src='" . base_url('assets/') . "images/print.jpg' alt='blog' />
                        <div class='overlay-background gradient-transparent'>
                            <a href='" . base_url() . "C_list_invoice/print_invoice/$li->idBooking' target='_blank' style='height: 30%;'>
                                <span style='top: 5%'><i class='fa fa-cloud-download'></i></span>
                            </a>     
                            <a style='cursor: pointer; height: 30%;' onclick='confirmation($li->idBooking)'>
                                <span style='top: 35%'><i class='fa fa-check'></i></span>
                            </a>   
                            <a style='cursor: pointer; height: 30%;' onclick='destroy($li->idBooking)'>
                                <span style='top: 65%'><i class='fa fa-trash'></i></span>
                            </a>                          
                        </div>
                    </div>
                </div>
                ";
            } ?>
        </div>
    </div>
</div>

<script>
    baseUrl = "<?php echo base_url(); ?>";

    function confirmation(id) {
        swal({
            title: "Apa anda yakin ingin mengkonfirmasi ?",
            text: "Data yang dikofirmasi tidak dapat dikembalikan!",
            icon: "warning",
            buttons: ["Tidak", "Iya"],
            dangerMode: true,
        }).then(function(isConfirm) {
            if (isConfirm) {
                $.ajax({
                    type: "POST",
                    url: baseUrl + "C_booking/confirmation/" + id,
                    dataType: "json",
                    beforeSend: function() {},
                    error: function(jqXHR, textStatus, errorThrown) {
                        console.log(arguments);
                        console.log(errorThrown);
                        console.log(textStatus);
                    },
                    success: function(data) {
                        if (data.status === true) {
                            swal({
                                title: "Berhasil",
                                text: "Data berhasil dikonfirmasi",
                                icon: "success",
                                button: "OK",
                            }).then(function(isConfirm) {
                                location.reload();
                            });
                        } else {
                            swal({
                                title: "Gagal",
                                text: "Data gagal dikonfirmasi",
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
    }

    function destroy(id) {
        swal({
            title: "Apa anda yakin ingin menghapus ?",
            text: "Data yang dihapus tidak dapat dikembalikan!",
            icon: "warning",
            buttons: ["Tidak", "Iya"],
            dangerMode: true,
        }).then(function(isConfirm) {
            if (isConfirm) {
                $.ajax({
                    type: "POST",
                    url: baseUrl + "C_booking/destroy/" + id,
                    dataType: "json",
                    beforeSend: function() {},
                    error: function(jqXHR, textStatus, errorThrown) {
                        console.log(arguments);
                        console.log(errorThrown);
                        console.log(textStatus);
                    },
                    success: function(data) {
                        if (data.status === true) {
                            swal({
                                title: "Berhasil",
                                text: "Data berhasil dihapus",
                                icon: "success",
                                button: "OK",
                            }).then(function(isConfirm) {
                                location.reload();
                            });
                        } else {
                            swal({
                                title: "Gagal",
                                text: "Data gagal dihapus",
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
    }
</script>
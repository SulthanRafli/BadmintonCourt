<header class="mobile-header-area bg-nero hidden-md hidden-lg">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 tb">
                <div class="mobile-header-block">
                    <div class="menu-area tb-cell">
                        <div class="mobile-menu-main hidden-md hidden-lg">
                            <div class="menucontent overlaybg"></div>
                            <div class="menuexpandermain slideRight">
                                <a id="navtoggole-main" class="animated-arrow slideLeft menuclose">
                                    <span></span>
                                </a>
                                <span id="menu-marker"></span>
                            </div>
                            <div id="mobile-main-nav" class="main-navigation slideLeft">
                                <div class="menu-wrapper">
                                    <div id="main-mobile-container" class="menu-content clearfix"></div>
                                    <div class="left-content">
                                        <ul>
                                            <?php if ($this->session->userdata('status') === true && $this->session->userdata('idUser') == 1) {
                                                echo "
                                                <li class='dropdown'>
                                                    <a href='#' class='dropbtn' style='font-size: 20px !important'><i class='fa fa-user'></i>" . $this->session->userdata('username') . "</a>
                                                    <div class='dropdown-content' style='width: 100%; !important'>
                                                        <a href='" . base_url() . "C_list_invoice/admin'>List Pemesanan</a>
                                                        <a href='" . base_url() . "C_user/logout'>Log Out</a>                                                    
                                                    </div>
                                                </li>                               
                                                ";
                                            } else if ($this->session->userdata('status') === true) {
                                                echo "
                                                <li class='dropdown'>
                                                    <a href='#' class='dropbtn' style='font-size: 20px !important'><i class='fa fa-user'></i>" . $this->session->userdata('username') . "</a>
                                                    <div class='dropdown-content' style='width: 100%; !important'>
                                                        <a href='" . base_url() . "C_list_invoice/detail/" . $this->session->userdata('idUser') . "'>Riwayat Pemesanan</a>
                                                        <a href='" . base_url() . "C_user/logout'>Log Out</a>                                                    
                                                    </div>
                                                </li>
                                                ";
                                            } else
                                                echo "
                                                <li>
                                                    <a href='#' class='cd-signin'><i class='fa fa-sign-in'></i>Masuk / Daftar</a>
                                                </li>
                                            ";
                                            ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="logo-area tb-cell">
                        <div class="site-logo">
                            <a href="<?php echo base_url(); ?>C_home">
                                <img src="<?php echo base_url('assets/') ?>images/logo.png" alt="site-logo" />
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<header class="header-area bg-nero hidden-xs hidden-sm">
    <div class="container">
        <div class="header-top-content">
            <div class="row">
                <div class="col-md-7 col-sm-7 mobile-center">
                    <div class="site-logo">
                        <a href="<?php echo base_url(); ?>C_home">
                            <img src="<?php echo base_url('assets/') ?>images/logo.png" alt="site-logo" />
                        </a>
                    </div>
                </div>
                <div class="col-md-5 col-sm-5 mobile-center">
                    <div class="left-content">
                        <ul>
                            <?php if ($this->session->userdata('status') === true && $this->session->userdata('idUser') == 1) {
                                echo "
                                <li class='dropdown'>
                                    <a href='#' class='dropbtn' style='font-size: 20px !important'><i class='fa fa-user'></i>" . $this->session->userdata('username') . "</a>
                                    <div class='dropdown-content' style='width: 100%; !important'>
                                        <a href='" . base_url() . "C_list_invoice/admin'>List Pemesanan</a>
                                        <a href='" . base_url() . "C_user/logout'>Log Out</a>                                                    
                                    </div>
                                </li>                               
                                ";
                            } else if ($this->session->userdata('status') === true) {
                                echo "
                                <li class='dropdown'>
                                    <a href='#' class='dropbtn' style='font-size: 20px !important'><i class='fa fa-user'></i>" . $this->session->userdata('username') . "</a>
                                    <div class='dropdown-content' style='width: 100%; !important'>
                                        <a href='" . base_url() . "C_list_invoice/detail/" . $this->session->userdata('idUser') . "'>Riwayat Pemesanan</a>
                                        <a href='" . base_url() . "C_user/logout'>Log Out</a>                                                    
                                    </div>
                                </li>
                                ";
                            } else
                                echo "
                                <li>
                                    <a href='#' class='cd-signin'><i class='fa fa-sign-in'></i>Masuk / Daftar</a>
                                </li>
                            ";
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<header class="header-bottom-content bg-nero hidden-xs hidden-sm">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-sm-10">
                <nav id="main-nav" class="site-navigation top-navigation">
                    <div class="menu-wrapper">
                        <div class="menu-content">
                            <ul class="menu-list">
                                <li>
                                    <a href="<?php echo base_url(); ?>C_home">Beranda</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url(); ?>C_about">Tentang</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>

<div class="header-overlay-content">
    <div class="overlay overlay-hugeinc gradient-transparent overlay-menu-item">
        <button type="button" class="overlay-close">Close</button>
    </div>

    <div class="cd-user-modal">
        <div class="cd-user-modal-container">
            <ul class="cd-switcher">
                <li><a href="#0" class="loginClick">Masuk</a></li>
                <li><a href="#0">Daftar</a></li>
            </ul>

            <div id="cd-login">
                <form class="cd-form" id="login">
                    <p class="fieldset">
                        <label class="image-replace cd-email" for="signin-email">E-mail</label>
                        <input class="full-width has-padding has-border" id="signin-email" type="email" name="email_login" placeholder="E-mail" />
                    </p>

                    <p class="fieldset">
                        <label class="image-replace cd-password" for="signin-password">Password</label>
                        <input class="full-width has-padding has-border" id="signin-password" type="text" name="password_login" placeholder="Password" />
                        <a href="#0" class="hide-password">Hide</a>
                    </p>

                    <p class="fieldset">
                        <button class="full-width" type="button-submit" onclick="login()">Masuk</button>
                    </p>
                </form>
                <a href="#0" class="cd-close-form">Close</a>
            </div>

            <div id="cd-signup">
                <form id="register" class="cd-form">
                    <p class="fieldset">
                        <label class="image-replace cd-username" for="signup-username">Username</label>
                        <input class="full-width has-padding has-border" id="signup-username" type="text" placeholder="Username" name="username" required />
                    </p>

                    <p class="fieldset">
                        <label class="image-replace cd-email" for="signup-email">E-mail</label>
                        <input class="full-width has-padding has-border" id="signup-email" type="email" placeholder="E-mail" name="email" required />
                    </p>

                    <p class="fieldset">
                        <label class="image-replace cd-password" for="signup-password">Password</label>
                        <input class="full-width has-padding has-border" id="signup-password" type="text" placeholder="Password" name="password" required />
                        <a href="#0" class="hide-password">Hide</a>
                    </p>

                    <p class="fieldset">
                        <button class="full-width has-padding" type="button-submit" onclick="register()">Daftar</button>
                    </p>
                </form>
                <a href="#0" class="cd-close-form">Close</a>
            </div>

            <a href="#0" class="cd-close-form">Close</a>
        </div>
    </div>
</div>
<script>
    baseUrl = "<?php echo base_url(); ?>";

    function login() {
        $("#login").submit(function(e) {
            $.ajax({
                type: "POST",
                url: baseUrl + "C_user/login",
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
                            text: "Login Berhasil",
                            icon: "success",
                            button: "OK",
                        }).then(function(isConfirm) {
                            location.reload();
                        });
                    } else {
                        swal({
                            title: "Gagal",
                            text: "Login Gagal",
                            icon: "error",
                            button: "OK",
                        });
                    }
                },
            });
            return false;
        });
    }

    function register() {
        $("#register").submit(function(e) {
            $.ajax({
                type: "POST",
                url: baseUrl + "C_user/register",
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
                            text: "Terimakasih telah mendaftar",
                            icon: "success",
                            button: "OK",
                        }).then(function(isConfirm) {
                            $('#signup-username').val("");
                            $('#signup-email').val("");
                            $('#signup-password').val("");
                            $('.loginClick')[0].click();
                        });
                    } else if (data.status == 'exist') {
                        swal({
                            title: "Gagal",
                            text: "Email sudah terdaftar",
                            icon: "error",
                            button: "OK",
                        });
                    } else {
                        swal({
                            title: "Gagal",
                            text: "Pendaftaran gagal",
                            icon: "error",
                            button: "OK",
                        });
                    }
                },
            });
            return false;
        });
    }
</script>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title><?php if(isset($title)){echo $title ;} ;?></title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700%7CVarela+Round" rel="stylesheet">

	<!-- Bootstrap -->
	<style type="text/css">@import url("<?php echo base_url() . 'assets/css/bootstrap.min.css'; ?>");</style>

	<!-- Owl Carousel -->
	<style type="text/css">@import url("<?php echo base_url() . 'assets/css/owl.carousel.css'; ?>");</style>
	<style type="text/css">@import url("<?php echo base_url() . 'assets/css/owl.theme.default.css'; ?>");</style>

	<!-- Magnific Popup -->
	<style type="text/css">@import url("<?php echo base_url() . 'assets/css/magnific-popup.css'; ?>");</style>
	
	<!-- Font Awesome Icon -->
	<style type="text/css">@import url("<?php echo base_url() . 'assets/css/font-awesome.min.css'; ?>");</style>
	
    <!-- PNotify -->
    <style type="text/css">@import url("<?php echo base_url() . 'assets/plugins/pnotify/dist/pnotify.css'; ?>");</style>
    <style type="text/css">@import url("<?php echo base_url() . 'assets/plugins/pnotify/dist/pnotify.buttons.css'; ?>");</style>
    <style type="text/css">@import url("<?php echo base_url() . 'assets/plugins/pnotify/dist/pnotify.nonblock.css'; ?>");</style>

	<!-- Custom stlylesheet -->
	<style type="text/css">@import url("<?php echo base_url() . 'assets/css/style.css'; ?>");</style>
	
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>

<body>

	<!-- Header -->
    <header id="home">
        <!-- Background Image -->
        <div class="bg-img" style="background-image: url('<?= base_url()?>assets/img/background1.jpg');">
            <div class="overlay"></div>
        </div>
        <!-- /Background Image -->

        <!-- Nav -->
        <nav id="nav" class="navbar nav-transparent">
            <div class="container">

                <div class="navbar-header">
                    <!-- Logo -->
                    <div class="navbar-brand">
                        <a href="<?= base_url()?>">
                            <img class="logo" src="<?= base_url()?>assets/img/logo.png" alt="logo">
                            <img class="logo-alt" src="<?= base_url()?>assets/img/logo-alt.png" alt="logo">
                        </a>
                    </div>
                    <!-- /Logo -->

                    <!-- Collapse nav button -->
                    <div class="nav-collapse">
                        <span></span>
                    </div>
                    <!-- /Collapse nav button -->
                </div>

                <!--  Main navigation  -->
                <ul class="main-nav nav navbar-nav navbar-right">
                    <li><a href="<?= base_url()?>Welcome/About"><i class="fa fa-info-circle"></i> Tentang Kami</a></li>
                    <!-- <li><a href="#portfolio">Portfolio</a></li> -->
                    <li><a href="<?= base_url()?>Welcome/FAQ"><i class="fa fa-question"></i> FAQ</a></li>
                    <!-- <li><a href="#pricing">Prices</a></li> -->
                    <li><a href="#" data-toggle="modal" data-target="#Modal-Auth" data-tipe='Authentication'><i class="fa fa-sign-in"></i> Masuk / Daftar</a></li>                    
                </ul>
                <!-- /Main navigation -->

            </div>
        </nav>
        <!-- /Nav -->

        <!-- home wrapper -->
        <div class="home-wrapper">
            <div class="container">
                <div class="row">

                    <!-- home content -->
                    <div class="col-md-10 col-md-offset-1">
                        <div class="home-content">
                            <h1 class="white-text">Tryptonesia (Trading Cryptocurrency Indonesia)</h1>
                            <p class="white-text">Morbi mattis felis at nunc. Duis viverra diam non justo. In nisl. Nullam sit amet magna in magna gravida vehicula. Mauris tincidunt sem sed arcu. Nunc posuere.
                            </p>
                        </div>
                    </div>
                    <!-- /home content -->

                </div>              
            </div>
        </div>
        <!-- /home wrapper -->

    </header>
    <!-- /Header -->

	<?php if(isset($content)){$this->load->view($content);};?>

	<!-- Footer -->
    <footer id="footer" class="sm-padding bg-dark">

        <!-- Container -->
        <div class="container">
            <!-- Row -->
            <div class="row">
                <div class="col-md-8 col-sm-12">
                    <h3 class="text-primary">TRACI v.1.0.0 (beta)</h3>
                    <p>Email / Telpon:</p>
                    <p>support@traci.com / +62 856 484 33 152</p>

                    <p>Kantor:</p>
                    <p>Perumahan Sidoarjo Indah Permai Blok B-1, Sidoarjo, 61234</p>
                </div>

                <div class="col-md-4 col-sm-12">
                    <h5 class="white-text">Link Lainnya</h5>
                    <a href="#" class="white-text">Syarat & Ketentuan</a>

                    <!-- footer follow -->
                    <ul class="footer-follow ">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                        <!-- <li><a href="#"><i class="fa fa-google-plus"></i></a></li> -->
                        <!-- <li><a href="#"><i class="fa fa-linkedin"></i></a></li> -->
                    </ul>
                    <!-- /footer follow -->

                </div>
            </div>
            <!-- /Row -->

            <!-- Row -->
            <div class="row">

                <div class="col-md-12">
                    <!-- Disclaimer -->
                    <div>
                        <p class="text-justify white-text">
                            Tavest.com (Perusahaan) merupakan badan hukum yang didirikan berdasarkan Hukum Republik Indonesia merupakan perusahaan yang tidak diatur oleh dan/atau dalam pengawasan Otoritas Jasa Keuangan (OJK) di Indonesia. Perusahaan tidak menyediakan segala bentuk saran pendanaan atau rekomendasi pendanaan terkait pilihan-pilihan dalam website ini. Isi dan materi yang tersedia pada website ini dimaksudkan untuk memberikan informasi, dan tidak dianggap sebagai sebuah penawaran, permohonan, undangan, saran atau rekomendasi untuk membeli atau menjual pendanaan, sekuritas atau produk pasar modal atau jasa keuangan lainya. Perusahaan dalam memberikan jasanya hanya terbatas pada fungsi administratif. Perusahaan dan tidak memberikan saran, memberi kewajiban atau kewajiban lainya untuk jasanya. Dana ditempatkan di rekening Tavest, adalah tidak dan tidak akan dianggap sebagai simpanan yang diselenggarakan oleh Perusahaan seperti diatur dalam peraturan perundang-undangan tentang Perbankan di Indonesia. Baik Perusahaan atau setiap Direkturnya, Pegawai, karyawan, wakil, afiliasi-afiliasi atau agen-agennya tidak memiliki tanggungjawab terkait setiap gangguan atau masalah yang terjadi atau yang dianggap terjadi, yang disebabkan atau karena kekurangan dari persiapan atau publikasi dari materi yang tercantum pada website Perusahaan. Semua Informasi yang didapatkan dari website Perusahaan akan disimpan sebagaimana diatur dalam Undang-undang 11/2008 tentang Informasi Dan Transaksi Elektronik dan PP No 82/2012 tentang Penyelenggaraan Sistem Dan Transaksi Elektronik, Syarat dan Ketentuan dari Perusahaan, dan Pencatatan Data Personal Perusahaan
                        </p>
                    </div>
                    <!-- /Disclaimer -->

                    <!-- footer copyright -->
                    <div class="footer-copyright">
                        <p>Tryptonesia © 2018. All Rights Reserved. Designed by <a href="https://colorlib.com" target="_blank">Colorlib</a></p>
                    </div>
                    <!-- /footer copyright -->

                </div>

            </div>
            <!-- /Row -->

        </div>
        <!-- /Container -->

    </footer>
    <!-- /Footer -->

	<!-- Back to top -->
	<div id="back-to-top"></div>
	<!-- /Back to top -->

	<!-- Preloader -->
	<div id="preloader">
		<div class="preloader">
			<span></span>
			<span></span>
			<span></span>
			<span></span>
		</div>
	</div>
	<!-- /Preloader -->

	<?php if(isset($modals)){$this->load->view($modals);};?>

    <!-- jQuery Plugins -->
    <script type="text/javascript" src="<?= base_url();?>assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="<?= base_url();?>assets/js/bootstrap.min.js"></script>

    <!-- PNotify -->
    <script src="<?= base_url()?>assets/plugins/pnotify/dist/pnotify.js"></script>
    <script src="<?= base_url()?>assets/plugins/pnotify/dist/pnotify.buttons.js"></script>
    <script src="<?= base_url()?>assets/plugins/pnotify/dist/pnotify.nonblock.js"></script>

    <!-- Counter js  -->
    <script src="<?= base_url()?>assets/plugins/waypoints/jquery.waypoints.min.js"></script>
    <script src="<?= base_url()?>assets/plugins/countdown/js/jquery.counterup.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            /*Counter Js Starts*/
            $('.counter').counterUp({
                delay: 50,
                time: 1500
            });
            /*Counter Js Ends*/
        });

        $('#Modal-Auth').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget) // Button that triggered the modal
            var tipe = button.data('tipe') // Extract info from data-* attributes
            var status_user = <?php if(isset($status_user)){echo $status_user;}else{echo "1";};?>;

            if (status_user == 0){
              $('.modal-body').load('<?= base_url()?>Welcome/Verify');
              var modal = $(this)
              modal.find('.modal-dialog').addClass('modal-lg');
              modal.find('.modal-header').addClass('bg-primary');
              modal.find('.modal-title').text('Verifikasi Identitas')            
          }else if (tipe == 'Authentication') {
              $('.modal-body').load('<?= base_url()?>welcome/authentication');

              var modal = $(this)
              modal.find('.modal-dialog').addClass('modal-lg');
              modal.find('.modal-header').addClass('bg-primary');
              modal.find('.modal-title').text('Masuk / Daftar')            
            }
            else{
            $('.modal-body').load('<?= base_url()?>Welcome/Konfirmasi_Transfer');
              var modal = $(this)
              modal.find('.modal-header').addClass('bg-primary');
              modal.find('.modal-dialog').addClass('modal-lg');
              modal.find('.modal-title').text('Konfirmasi Transfer')
          }
        });
        //$('#Modal-Auth').modal('show');


    </script>
    
    <?php if ($logged_in && $status_user == 0) {?>
        <script>
            $('#Modal-Auth').modal('show');
        </script>
    <?php } ?>

    <?php if ($this->session->flashdata('title')) {?>
        <script>
            new PNotify({
            title: '<?=$this->session->flashdata('title')?>',
            text: '<?=$this->session->flashdata('text')?>',
            type: '<?=$this->session->flashdata('type')?>',
            styling: '<?=$this->session->flashdata('styling')?>'
            })
        </script>
    <?php } ?>
    <script type="text/javascript" src="<?= base_url();?>assets/js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="<?= base_url();?>assets/js/jquery.magnific-popup.js"></script>

    <script type="text/javascript" src="<?= base_url();?>assets/js/main.js"></script>

    



</body>

</html>

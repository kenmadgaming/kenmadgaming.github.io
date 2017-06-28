<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Nén ảnh - HTTZIP.ME</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <!-- CSS Files -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/now-ui-kit.css" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="assets/css/demo.css" rel="stylesheet" />
    <link href="assets/css/toastr.css" rel="stylesheet" />
</head>

<body class="login-page">
    <!-- Navbar -->
    <nav class="navbar navbar-toggleable-md bg-primary fixed-top navbar-transparent " color-on-scroll="500">
        <div class="container">
            <div class="dropdown button-dropdown">
                <a href="#pablo" class="dropdown-toggle" id="navbarDropdown" data-toggle="dropdown">
                    <span class="button-bar"></span>
                    <span class="button-bar"></span>
                    <span class="button-bar"></span>
                </a>
            </div>
            <div class="navbar-translate">
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-bar bar1"></span>
                    <span class="navbar-toggler-bar bar2"></span>
                    <span class="navbar-toggler-bar bar3"></span>
                </button>
                <a class="navbar-brand" href="https://httzip.me/apps/nen-anh/" rel="tooltip" title="Coded by HTTZIP.Me" data-placement="bottom" target="_blank">
                    HTTZIP.Me
                </a>
            </div>
            <div class="collapse navbar-collapse justify-content-end" id="navigation" data-nav-image="assets/img/blurred-image-1.jpg">
                <ul class="navbar-nav">

                    <li class="nav-item">
                        <a class="nav-link" rel="tooltip" title="Follow me on Twitter" data-placement="bottom" href="https://twitter.com/httzip" target="_blank">
                            <i class="fa fa-twitter"></i>
                            <p class="hidden-lg-up">Twitter</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" rel="tooltip" title="Follow me on Facebook" data-placement="bottom" href="https://www.facebook.com/httzip" target="_blank">
                            <i class="fa fa-facebook-square"></i>
                            <p class="hidden-lg-up">Facebook</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->
    <div class="page-header" filter-color="orange">
        <div class="page-header-image" style="background-image:url(assets/img/login.jpg)"></div>
        <div class="container">
            <div class="col-md-12 content-center text-center">
			<center>
                <!-- Hello -->
				<div id="wrapper">
				  <upload-image help="(only PNG,JPG,JPEG) - Max 5 MB"></upload-image>
				</div>

					<template id="dropzone">
					  <div v-if="!image">
					  <h2 class="text-white text-bold"> Kéo ảnh muốn nén vào đây </h2>
						  <div class="dropzone-area" drag-over="handleDragOver" @dragenter="hovering = true" @dragleave="hovering = false" :class="{'hovered': hovering}">
							  <div class="dropzone-text">
								  <span class="dropzone-title">Kéo ảnh vào đây hoặc Click để chọn</span>
								  <span class="dropzone-info" v-if="help">{{ help }}</span>
							  </div>
						<form id="upload-image-form" action="" method="post" enctype="multipart/form-data">
							  <input type="file" @change="onFileChange">
							  </form>
						  </div>
					  </div>
					  <div class="dropzone-preview">     
					  <button @click="removeImage" v-if="image" class="label label-danger">x</button>

						  <img :src="image" style="max-width:300px;" class="img img-responsive img-circle"/>
						  <hr  v-if="image" />
						  </div>
					  {{ data | json }}
					</template>
				<input type="hidden" name="time" id="time" value="123123">
				<!-- Hello -->
				</center>
            </div>
			
        </div>
        <footer class="footer">
            <div class="container">
                <nav>
                    <ul>
                        <li>
                        </li>
                    </ul>
                </nav>
                <div class="copyright">
                    &copy;
                    <script>
                        document.write(new Date().getFullYear())
                    </script>, Coded by
                    <a href="https://httzip.me" target="_blank">HTTZIP</a>.
                </div>
            </div>
        </footer>
    </div>
</body>
<!--   Core JS Files   -->
<script src="assets/js/core/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="assets/js/core/tether.min.js" type="text/javascript"></script>
<script src="assets/js/core/bootstrap.min.js" type="text/javascript"></script>
<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="assets/js/plugins/bootstrap-switch.js"></script>
<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
<!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
<script src="assets/js/plugins/bootstrap-datepicker.js" type="text/javascript"></script>
<script src="assets/js/plugins/toastr.js" type="text/javascript"></script>
<!-- Control Center for Now Ui Kit: parallax effects, scripts for the example pages etc -->
<script src="assets/js/now-ui-kit.js" type="text/javascript"></script>
<script src="assets/js/vue.js" type="text/javascript"></script>
<script src="assets/js/script.js" type="text/javascript"></script>

</html>
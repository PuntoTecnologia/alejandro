<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Punto Tecnologia || Tienda de productos electronicos en Mar del Plata</title>
        <meta name="description" content="Computadoras de escritorio, notebooks, netbooks,tablets, celulares libres de fabrica. Articulos nuevos y usados en Mar del Plata">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="HTMLCooker">

        <!-- ================= Favicon ================== -->
        <!-- Standard -->
        <link rel="shortcut icon" href="http://placehold.it/64.png/000/fff">
        <!-- Retina iPad Touch Icon-->
        <link rel="apple-touch-icon" sizes="144x144" href="http://placehold.it/144.png/000/fff">
        <!-- Retina iPhone Touch Icon-->
        <link rel="apple-touch-icon" sizes="114x114" href="http://placehold.it/114.png/000/fff">
        <!-- Standard iPad Touch Icon--> 
        <link rel="apple-touch-icon" sizes="72x72" href="http://placehold.it/72.png/000/fff">
        <!-- Standard iPhone Touch Icon--> 
        <link rel="apple-touch-icon" sizes="57x57" href="http://placehold.it/57.png/000/fff">
        
        <!-- =============== Google fonts =============== -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,300italic,400,400italic,600,600italic,700,700italic,800' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Raleway:400,700' rel='stylesheet' type='text/css'>
        
        
        <!-- Font Awesome CSS -->
        <link href="/css/font-awesome.min.css" rel="stylesheet">
        <!-- Bootstrap CSS -->
        <link href="/css/bootstrap.min.css" rel="stylesheet">
        <!-- Nivo Slider CSS -->
        <link href="/css/nivo-slider.css" rel="stylesheet">
        <!-- Animate CSS -->
        <link href="/css/animate.css" rel="stylesheet">
        <!-- Owl Carousel CSS -->
        <link href="/css/owl.carousel.css" rel="stylesheet">
        <!-- Main Style CSS -->
        <link href="<?php echo e(asset ('/css/style.css')); ?>" rel="stylesheet">
        <!-- Responsive CSS -->
        <link href="/css/responsive.css" rel="stylesheet">
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
  </head>
  <body>
        <?php echo $__env->make('elements.menu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>;        
        <div class="main">
        	<div class="container">
            	
        <?php echo $__env->yieldContent('content'); ?>
        <?php echo $__env->yieldContent('footer'); ?>
        <?php echo $__env->yieldContent('java_down'); ?>   
<!-- Jquery Js -->
        <script src="<?php echo e(asset ('/js/jquery-1.11.3.min.js')); ?>"></script>
        <!-- Bootstrap Js -->
        <script src="<?php echo e(asset ('/js/bootstrap.min.js')); ?>"></script>
        <!-- Nivo Slider Js -->
        <script src="<?php echo e(asset ('/js/jquery.nivo.slider.pack.js')); ?>"></script>
        <!-- Owl Carousel Js -->
        <script src="<?php echo e(asset ('/js/owl.carousel.min.js')); ?>"></script>
        <!-- Countdown Js -->
        <script src="<?php echo e(asset ('/js/countdown.js')); ?>"></script>
        <!-- Custom Js -->
        <script src="<?php echo e(asset ('/js/custom.js')); ?>"></script>
        
        <script type="text/javascript">
            /* Main Slideshow */
            jQuery(window).load(function() {
                jQuery(document).off('mouseenter').on('mouseenter', '.pos-slideshow', function(e){
                    $('.ma-banner7-container .timethai').addClass('pos_hover');
                });
                jQuery(document).off('mouseleave').on('mouseleave', '.pos-slideshow', function(e){
                    $('.ma-banner7-container .timethai').removeClass('pos_hover');
                });
            });
            jQuery(window).load(function() {
                $('#ma-inivoslider-banner7').nivoSlider({
                    effect: 'random',
                    slices: 15,
                    boxCols: 8,
                    boxRows: 4,
                    animSpeed: 1000,
                    pauseTime: 6000,
                    startSlide: 0,
                    controlNav: false,
                    controlNavThumbs: false,
                    pauseOnHover: true,
                    manualAdvance: false,
                    prevText: 'Prev',
                    nextText: 'Next',
                    afterLoad: function(){
                        },     
                    beforeChange: function(){ 
                    }, 
                    afterChange: function(){ 
                    }
                });
            });
        </script>
       
        <!-- Hot Deals Timer 1-->
        <script type="text/javascript">
            var dthen1 = new Date("12/25/33 11:59:00 PM");
            start = "08/04/15 03:02:11 AM";
            start_date = Date.parse(start);
            var dnow1 = new Date(start_date);
            if(CountStepper>0)
                ddiff= new Date((dnow1)-(dthen1));
            else
                ddiff = new Date((dthen1)-(dnow1));
            gsecs1 = Math.floor(ddiff.valueOf()/1000);
            
            var iid1 = "countbox_1";
            CountBack_slider(gsecs1,"countbox_1", 1);
        </script>
        <!-- Hot Deals Timer 2-->
        <script type="text/javascript">
            var dthen2 = new Date("05/21/26 11:59:00 PM");
            start = "08/04/15 03:02:11 AM";
            start_date = Date.parse(start);
            var dnow2 = new Date(start_date);
            if(CountStepper>0)
                ddiff= new Date((dnow2)-(dthen2));
            else
                ddiff = new Date((dthen2)-(dnow2));
            gsecs2 = Math.floor(ddiff.valueOf()/1000);
            
            var iid2 = "countbox_2";
            CountBack_slider(gsecs2,"countbox_2", 2);
        </script>
        <!-- Hot Deals Timer 3-->
        <script type="text/javascript">
            var dthen3 = new Date("05/21/33 11:59:00 PM");
            start = "08/04/15 03:02:11 AM";
            start_date = Date.parse(start);
            var dnow3 = new Date(start_date);
            if(CountStepper>0)
                ddiff= new Date((dnow3)-(dthen3));
            else
                ddiff = new Date((dthen3)-(dnow3));
            gsecs3 = Math.floor(ddiff.valueOf()/1000);
            
            var iid3 = "countbox_3";
            CountBack_slider(gsecs3,"countbox_3", 3);
        </script>   
  </body>



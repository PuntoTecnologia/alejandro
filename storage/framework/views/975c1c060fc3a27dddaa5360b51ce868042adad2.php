<!DOCTYPE html>
<html>
<head>
<title>Madercar || Siempre buena madera || Mar del Plata</title>
<link href="<?php echo e(asset('css/bootstrap.css')); ?>" rel="stylesheet" type="text/css" media="all" />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="<?php echo e(asset ('js/jquery.min.js')); ?>"></script>
<!-- Custom Theme files -->
<!--theme-style-->
<link href="<?php echo e(asset ('css/style.css')); ?>" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php $__currentLoopData = $my_site; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $element): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<meta name="title" content="<?php echo e($element->title); ?>">
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__currentLoopData = $meta_description; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $desc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<meta name="description" content="<?php echo e($desc->description); ?>">
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__currentLoopData = $metakeys; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $keys): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<meta name="keywords" content="<?php echo e($keys->key1); ?>, <?php echo e($keys->key2); ?>, <?php echo e($keys->key3); ?>, <?php echo e($keys->key4); ?>, <?php echo e($keys->key5); ?>, <?php echo e($keys->key6); ?>, <?php echo e($keys->key7); ?>, <?php echo e($keys->key8); ?>" />
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--fonts-->
<link href='http://fonts.googleapis.com/css?family=Roboto+Slab:300,700,400' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900' rel='stylesheet' type='text/css'>
<!--//fonts-->
<!-- start menu -->
<link href="<?php echo e(asset ('css/megamenu.css')); ?>" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="<?php echo e(asset ('js/megamenu.js')); ?>"></script>
<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
<!--//slider-script-->

<script src="<?php echo e(asset ('js/easyResponsiveTabs.js')); ?>" type="text/javascript"></script>
		    <script type="text/javascript">
			    $(document).ready(function () {
			        $('#horizontalTab').easyResponsiveTabs({
			            type: 'default', //Types: default, vertical, accordion           
			            width: 'auto', //auto or any width like 600px
			            fit: true   // 100% fit in a container
			        });
			    });
				
</script>	
<!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
<script src="<?php echo e(asset ('js/simpleCart.min.js')); ?>"> </script>

</head>
<body> 
<!--header-->	
<div class="header">
	<div class="header-top">
		<div class="container">
			<div class="header-top-in">			
				<ul class="support">
					<li ><i > </i>consultas@madercar.com.ar</li>
					<li ><span ><i class="tele-in"> </i>(0223) 155 200740</span></li>
					<li ><span ><i class="tele-in"> </i>(0223) 484 3767</span></li>
					<li ><span ></i>FORTUNATO DE LA PLAZA Nº 3427</span></li>	
					<li><a href="https://www.facebook.com/www.madercar.com.ar/" target="_blank"><img src="/images/face.png" style="width: 1em;">Facebook</a></li>
							
				</ul>
				<ul class=" support-right">
				<!-- Right Side Of Navbar -->
				                    <ul class="nav navbar-nav navbar-right">
				                        <!-- Authentication Links -->
				                        <?php if(auth()->guard()->guest()): ?>
				                            <li><a href="<?php echo e(route('login')); ?>"><i class="men"> </i>Login</a></li>
				                        <?php else: ?>
				                            <li>
				                            	<a href="ACCESO">
				                            		Admin
				                            	</a>	
				                            </li>
				                            <li>
				                                <a href="<?php echo e(route('logout')); ?>">
				                                            Cerrar Sesion
				                                </a>

				                                        <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
				                                            <?php echo e(csrf_field()); ?>

				                                        </form>
				                                    </li>
				                                </ul>
				                            </li>
				                        <?php endif; ?>
				                    </ul>		
				</ul>
				<div class="clearfix"> </div>
			</div>
			</div>
			<div class="header-bottom">
			<div class="container">			
				<div class="logo">
					<h1><a href="HOME" style="font-size: 0.8em;"><span>wwww.</span>MADERCAR<span>.com.ar</a></h1>
				</div>
				<div class="top-nav">
				<!-- start header menu -->
				<ul class="megamenu skyblue">
					<?php echo $__env->make('elements.menu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
				</ul> 
				<!---->
<div class="clearfix"> </div>
					<!---->
				</div>
				
			</div>
			<div class="clearfix"> </div>
		</div>
		</div>

	<div class="banner">
		<div class="banner-top">
	         <h2>Hola! bienvenido
	         </h2>
	         <p>Te invitamos a recorrer nuestro sitio, encontrarás muchos productos, creatividad y buen gusto.</p>
</div>

 	</div>	

</div>
<!---->
<div class="content">
	<div class="container">
		<div class="content-top">
			<div class="col-md-9">
				<div class="col-top">
					<div class="col-md-6 black">
						<div class="shoe" style="float: left;">
							<h3>ENVIOS</h3>
						</div>
					<img src="/images/sh.png" alt="" >
					</div>
					<div class="col-md-6 black-in">
						<div class="shoe bag" >
							<h3>INSTALACIONES</h3>
							<p>Mano de obra especializada.</p>
						</div>
						<img src="/images/ba.png" alt="" >
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-top-bottom">
					<h3 class="menber">PULIDO PROFESIONAL</h3>
					<a href="CONTACTO" class="now-in">CONSULTAR</a>
					<div class="clearfix"> </div>
				</div>
			</div>
			<div class="col-md-3 per">
				<a href="OFERTAS"><img class="img-responsive" src="/images/pi1.jpg" alt="" >
				<div class="six">
					<h4>OFERTAS</h4>
					<p>imperdibles</p>
					<span>25%</span>
				</div></a>
			</div>
			<div class="clearfix"> </div>
		</div>
		<!---->
		
		<div class="content-bottom">
			<div class="container">
				<p>Recorre nuestras galerias de imágenes, catálogo, y en caso de alguna duda, consultanos por medio de nuestro formulario de contacto, o directamente por las vias de comunicación directa !</p>
			</div>
		</div>
		
</div>
<?php echo $__env->make('elements.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</body>
</html>
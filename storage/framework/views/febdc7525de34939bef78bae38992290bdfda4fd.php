<!DOCTYPE html>
<html>
<head>
<title><?php echo $__env->yieldContent('title'); ?></title>
<link href="<?php echo e(asset ('css/bootstrap.css')); ?>" rel="stylesheet" type="text/css" media="all" />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="<?php echo e(asset ('js/jquery.min.js')); ?>"></script>
<!-- Custom Theme files -->
<!--theme-style-->
<link href="<?php echo e(asset ('css/style.css')); ?>" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->
<?php echo $__env->yieldContent('metakeys'); ?>
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
<script src="<?php echo e(asset ('js/simpleCart.min.js')); ?>"> </script>
<?php echo $__env->yieldContent('script_add'); ?>
</head>
<body> 
<!--header-->	
<div class=" header-product">
	<div class="header-top com">
		<div class="container">
			<div class="header-top-in grid-1">
				<ul class="support">
					<li ><i > </i>consultas@madercar.com.ar</li>
					<li ><span ><i class="tele-in"> </i>(0223) 155 200740</span></li>
					<li ><span ><i class="tele-in"> </i>(0223) 484 3767</span></li>
					<li ><span ></i>FORTUNATO DE LA PLAZA Nº 3427</span></li>	
					<li><a href="https://www.facebook.com/www.madercar.com.ar/" target="_blank"><img src="/images/face.png" style="width: 1em;">Facebook</a></li>			
				</ul>
				<ul class=" support-right">
					<li ><a href="/ACCESO" ><i class="men"> </i>Login</a></li>		
				</ul>
				<div class="clearfix"> </div>
			</div>
		</div>
			<div class="header-bottom bottom-com">
			<div class="container">			
				<img src="/images/logo.png" width="20%">
				<div class="top-nav">
				<!-- start header menu -->
		<ul class="megamenu skyblue menu-in">
			<?php echo $__env->yieldContent('menu'); ?>
		 </ul> 
		 <!---->
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		</div>
		
	</div>
<!---->
<div class="container">
</div>
<div class="back">
	<h2><?php echo e(Request::path()); ?></h2>
</div>
	<?php echo $__env->yieldContent('content'); ?>	
</div>
<div class="bottom-grid1">					
	<div class="fit1">
		<h3 style="color: cadetblue">Clientes Contentos</h3>
		<p style="color: black;">Buena atención..</p>
	</div>
</div>
<?php echo $__env->make('elements.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</body>
</html>
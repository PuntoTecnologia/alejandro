<?php $__env->startSection('title'); ?>
	Mas informacion sobre Madercar.com.ar
<?php $__env->stopSection(); ?>

<?php $__env->startSection('menu'); ?>
	<?php echo $__env->make('elements.menu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('metakeys'); ?>
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
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="container"> 
	  <div class="box_4">
	  	<div class="col-md-7 about_left">
	  		<h3>Un poco sobre nuestra historia...</h3>
	        
		    <p>
		    En MADERCAR, estamos orgullosos de ser una empresa con más de 30 años de experiencia en brindar servicios integrales en pisos y revestimientos.- hechos en madera y afines. Contamos con una gran variedad de productos y opciones para los diferentes ambientes que brindan calidad y confort.- Nuestros productos están elaborados con los mejores materiales para que nuestros clientes tengan completa satisfacción.
			</p>
	       <div class="faqs">
				       <h4>Nuestro Objetivo</h4>
				       <div class="questions">
	        				<p>Nosotros no competimos con el mercado, sino con nosotros mismos, ya que buscamos superarnos día a día. ¡Ese es nuestro desafío!.Somos una empresa familiar consolidada, pujante, en permanente cambio y actualización, tal como exigen los mercados actuales. Y de la mano de estos cambios, miramos hacia el futuro, invirtiendo, investigando y trabajando, para ofrecer los mejores productos para la obra, con la mejor relación precio calidad.</p>
	        		   </div>
	        		   
			        		  <h4>Nuestra Mision</h4>
				       <div class="questions">
	        				<p> La elegancia, calidad, prestancia y nobleza de nuestros productos son el fiel reflejo de nuestra MISION/VISION al día de hoy, usted podrá disfrutar de nuestra atención y asesoramiento como así también de un excelente servicio de ASESORAMIENTO INTEGRAL . Desde nuestros comienzos y junto a usted, hemos construido esta empresa que ha dejado satisfechos a NUESTROS clientes, y asi lo continuamos haciendo, su satisfacción es nuestro objetivo, y nuestros productos, el medio para lograrlo..</p>
	        		   </div>				    
				   </div>  	
	  	</div>
	  	<div class="col-md-5 sidebar">
	  	<img src="images/madercar.jpg" class="img-responsive" style="padding: 0em 0em 2em 0em;
    width: 80%;">
	  		      <h3>Como nacio Madercar ?</h3>
		  			    <div class="testimonials">
		  					 <h5>MADERCAR se forma en la unión de ideas, esfuerzos y convicciones de un grupo de personas, que creen que el desarrollo profesional y personal está basado en la honestidad, el conocimiento, la responsabilidad y la eficacia. Estamos convencidos que sobre estas bases, y desde luego, ofreciendo satisfacción a nuestros clientes a través de productos innovadores, garantizando calidad y precios competitivos, somos una excelente alternativa para realizar sus proyectos. Representa y desarrolla las mejores opciones en pisos/revestimientos relacionados con alta tecnología.</h5>
		  				</div>	
		  			
	  	</div>
	  	<div class="clearfix"> </div>
	  </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.web', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
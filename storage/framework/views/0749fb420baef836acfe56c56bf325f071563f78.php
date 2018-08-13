<?php $__env->startSection('title'); ?>
    <?php echo e($product->titulo); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('script_add'); ?>
        <!-- Animate CSS -->
        <link href="<?php echo e(asset ('/css/animate.css')); ?>" rel="stylesheet">
        <!-- Owl Carousel CSS -->
        <link href="<?php echo e(asset ('/css/owl.carousel.css')); ?>" rel="stylesheet">

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
    <?php $__currentLoopData = $my_site; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $element): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <meta name="title" content="<?php echo e($element->title); ?>">
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
	<div class="container">
        <div class="row">
            <div class="row">
                <div class="col-md-4 col-md-offset-3">
                <!--VISOR DE IMAGENES-->
                <div class="flexslider">
                    <ul class="slides">
                        <?php $__currentLoopData = $img_productos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $img): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <?php if($img->producto_id == $product->id): ?>
                            <li data-thumb="/uploads/<?php echo e($img->producto_id); ?>/full_<?php echo e($img->file_name); ?>">
                                <img src="/uploads/<?php echo e($img->producto_id); ?>/full_<?php echo e($img->file_name); ?>" />
                            </li>
                          <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
                <!-- FlexSlider -->
                  <script defer src="/js/jquery.flexslider.js"></script>
                <link rel="stylesheet" href="/css/flexslider.css" type="text/css" media="screen" />
                <!-- //FlexSlider -->
                </div>
                <!--/VISOR DE IMAGENES-->
            	<div class="product-shop col-md-5" style="min-height:455px;">
                	<div class="product-name">
                        <h1><?php echo e($product->titulo); ?></h1>
                        <?php if($product->tipo == 1): ?>
                		<div class="new-icon" style="float: right;margin-right: 2em;"><span>nuevo</span></div>
                	<?php endif; ?>
                	<?php if($product->tipo == 2): ?>
                		<div class="sale-icon" style="float: right;margin-right: 2em;"><span>usado</span></div>
                	<?php endif; ?>
                    </div>
                    <div class="ratings">
                    	<span class="amount"><a href="#"></a></span>
        			</div>

                    <div class="box-container2"> 
                        <div class="price-box">
                            <p class="special-price"><p style="font-size: x-large;">Valor: </p>
                            <span id="product-price-1" class="price">$<?php echo e(round(((($product->costo*$product->rent)/100)+$product->costo)*$dolar[0]->valor)); ?>-</span>
                            </p>
                   		</div>
                    </div>
                    <!--DIVISOR ENTRE DATOS-->
                    <div class="col-md-12" style="border-bottom: 1px solid #ccc;margin:0.5em 0em 0.5em 0em"></div>
                    <div class="short-description">
                        <div class="std">Marca: 
                        <?php $__currentLoopData = $marcas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $marca): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($product->id_marca == $marca->id): ?>
                                <?php echo e($marca->marca); ?>

                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                    </div>
                    <!--DIVISOR ENTRE DATOS-->
                    <div class="col-md-12" style="border-bottom: 1px solid #ccc;margin:0.5em 0em 0.5em 0em"></div>
                    <div class="short-description">
                        <div class="std">Codigo: (<?php echo e($product->codigo); ?>)</div>
                    </div>
                    <!--DIVISOR ENTRE DATOS-->
                    <div class="col-md-12" style="border-bottom: 1px solid #ccc;margin:0.5em 0em 0.5em 0em"></div>
                    <div class="short-description">
                        <div class="std">Descripcion:<br> <?php echo e($product->descripcion); ?></div>
                    </div>
                    <!--DIVISOR ENTRE DATOS-->
                    <div class="col-md-12" style="border-bottom: 1px solid #ccc;margin:0.5em 0em 0.5em 0em"></div>
                    <p class="availability in-stock">Stock: <span>Consultar</span>
                    
                    </p>
                    <a href="javascript: void(0);"onclick="window.open('http://www.facebook.com/sharer.php?u=http://puntotecnologia.com.ar/detalle/<?php echo e($product->id); ?>','popup', 'toolbar=0, status=0, width=650, height=450');">
                    <img style="width: 30%;" src="/images/facebook.png" alt="Compartir en Facebook" style="margin-left: 10px" /></a>
                </div>
        <!--DIVISOR ENTRE DATOS-->
                    <div class="col-md-12" style="border-bottom: 1px solid #ccc;margin:0.5em 0em 0.5em 0em"></div>
                    <div style="color:#f00;" class="text-center">IMPORTANTE ! </div>
                    <p class="text-center">Los precios son Finales en pesos contado efectivo. Cambios de productos dentro de las 72 horas habiles SIN EXCEPCION. Todos los productos disponen de garantia escrita. Los productos se entregan en sus embalajes originales. Todas las compras estan sujetas a disponibilidad de stock. Los precios pueden variar sin previo aviso.</p>
        </div>
		</div>
	</div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('java_down'); ?>
        <script>
            // Can also be used with $(document).ready()
            $(window).load(function() {
              $('.flexslider').flexslider({
                animation: "slide",
                controlNav: "thumbnails"
              });
            });
        </script>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('footer'); ?>
	<?php echo $__env->make('elements.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.web', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
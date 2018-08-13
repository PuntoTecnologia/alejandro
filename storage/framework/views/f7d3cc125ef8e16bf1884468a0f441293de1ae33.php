<?php $__env->startSection('content'); ?>
<div class="tab-main">
	<!--/tabs-inner-->
		<div class="tab-inner">
			<div id="tabs" class="tabs">
				<h2 class="inner-tittle">Panel 3.0 Pro || <?php echo e(Request::path()); ?></h2>
				<div style="padding-bottom: 4em;">	
				
				<form method="post" action="ACTUALIZA-WEB-TITULO" name="title-presset">
				<?php echo e(csrf_field()); ?>

				<h2 class="form-title" style="color: #fff;">TITULO DEL SITIO
					<button type="submit" class="btn btn-primary" style="float: right;">Actualizar</button>
				</h2>
				<h3>Aqui debe ingresar el titulo principal del sitio. El mismo debe contener una breve descripcion del sitio, la cual se representara en cada sector del portal.</h3>
				<div class="col-md-12">
				<?php $__currentLoopData = $title; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $title): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<?php
						$title=$title->title;
					?>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						<textarea rows="2" name="title" style="width: 100%;" placeholder="Titulo del sitio || Mar del Plata || Bs As | Argentina" required><?php if(isset($title)): ?> <?php echo e($title); ?><?php endif; ?> </textarea>
					</div>
				</form>
				
				<div class="clearfix"> </div>
				<div class="clearfix"> </div>
				<div class="clearfix"> </div>

				<form action="/CONFIGURACION" method="post" name="metakeys">
				<?php echo e(csrf_field()); ?>

					<h2 class="form-title" style="color: #fff;">META KEYWORDS
						<button type="submit" class="btn btn-primary" style="float: right;">Actualizar</button>
					</h2>
					<h3>Las etiquetas meta, son etiquetas que le permiten a los motores de busqueda como google, transmitir informacion en sus indexaciones. Se recomienda no extender demasiado cada unal de ellas, en los posible entre 4 y 6 palabras que conformen fraces que representen lo que el portal brinda a sus visitantes en forma breve.</h3>
					
					<?php $__currentLoopData = $meta_key; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<?php
						$key1=$key->key1;
						$key2=$key->key2;
						$key3=$key->key3;
						$key4=$key->key4;
						$key5=$key->key5;
						$key6=$key->key6;
						$key7=$key->key7;
						$key8=$key->key8;
					?>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							<div class="col-md-3">
								<label>Meta1</label>
								<input type="text" name="key1" <?php if(isset($key1)): ?> value="<?php echo e($key1); ?>"<?php endif; ?> placeholder="computacion en mar del plata" required value="">
							</div>
							<div class="col-md-3">
								<label>Meta2</label>
								<input type="text" name="key2"<?php if(isset($key2)): ?> value="<?php echo e($key2); ?>"<?php endif; ?> placeholder="ropa mujer y hombre" required>
							</div>
							<div class="col-md-3">
								<label>Meta3</label>
								<input type="text" name="key3" <?php if(isset($key3)): ?> value="<?php echo e($key3); ?>"<?php endif; ?> placeholder="muebles pino buena calidad" required>
							</div>
							<div class="col-md-3">
								<label>Meta4</label>
								<input type="text" name="key4" <?php if(isset($key4)): ?> value="<?php echo e($key4); ?>"<?php endif; ?> placeholder="juegos peliculas cine salida" required>
							</div>
							<div class="col-md-3">
								<label>Meta5</label>
								<input type="text" name="key5" <?php if(isset($key5)): ?> value="<?php echo e($key5); ?>"<?php endif; ?> placeholder="perros gatos veterinaria" required>
							</div>
							<div class="col-md-3">
								<label>Meta6</label>
								<input type="text" name="key6" <?php if(isset($key6)): ?> value="<?php echo e($key6); ?>"<?php endif; ?> placeholder="comida artesanal domicilio" required>
							</div>
							<div class="col-md-3">
								<label>Meta7</label>
								<input type="text" name="key7" <?php if(isset($key7)): ?> value="<?php echo e($key7); ?>"<?php endif; ?> placeholder="lavado auto barato calidad" required>
							</div>
							<div class="col-md-3">
								<label>Meta8</label>
								<input type="text" name="key8" <?php if(isset($key8)): ?> value="<?php echo e($key8); ?>"<?php endif; ?> placeholder="venta cosmetica peluqueria insumos" required>
							</div>

					<div class="clearfix"> </div>
				</div>	
				</form>
				<form method="post" action="/ACTUALIZA-META-DESCRIPCION" name="form-meta-descipt">
				<?php echo e(csrf_field()); ?>

					<h2 class="form-title" style="color: #fff;">META DESCIPCION
						<button type="submit" class="btn btn-primary" style="float: right;">Actualizar</button>
					</h2>
					<h3>Al igual que las etiquetas meta, ayuda a la index y seo del portal, pero en este caso la description es algo mas extensa, y es la que vemos normalmente en google debajo del link al sitio, contando de que se trata el mismo. Es por eso que esta es una herramienta de captacion muy importante y debe ser muy explicita.</h3>
					<div class="col-md-12">
							<?php $__currentLoopData = $description; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $desc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<?php
									$descript=$desc->description;
								?>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							
							<textarea rows="3" name="description" style="width: 100%;" required><?php if(isset($descript)): ?><?php echo e($descript); ?><?php endif; ?></textarea>
							
						
					</div>
				</form>
				<div class="clearfix"> </div>

			</div>
		</div>
</div>	
<?php $__env->stopSection(); ?>
<?php echo $__env->make('panel.layout.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
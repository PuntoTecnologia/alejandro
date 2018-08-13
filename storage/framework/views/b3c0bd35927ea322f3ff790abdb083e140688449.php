<?php $__env->startSection('title'); ?>
	Catalogo de pruductos existentes en el sistema.
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="tab-main">
	<!--/tabs-inner-->
		<div class="tab-inner">
			<div id="tabs" class="tabs">
				<h2 class="inner-tittle" style="margin-bottom: 0em;">Panel 3.0 Pro || <?php echo e(Request::path()); ?></h2>
			
					<div class="col-md-4">
						<p style="margin-bottom: 2em;">Funciones disponibles para ARTICULOS</p>
					</div>
					<div class="col-md-4">
					<form method="get" action="/CATALOGO/BUSQUEDA">
						<label style="color: #fff;">Categoria</label>
					    <select name="categoria" onchange="this.form.submit()" class="form-control" required>
					      <option selected>Filtrar por categoria</option>
					      <?php $__currentLoopData = $lista_categorias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categoria): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					      		
						      	<option value="<?php echo e($categoria->id); ?>"><?php echo e($categoria->nombre); ?></option>
						      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					    </select>
					</form>
					</div>
					<div class="col-md-2">
						<a href="/EDITAR-CATEGORIAS">
							<button style="margin-top: 14%;" type="button" class="btn btn-primary">Editar Categorias</button>
						</a>
					</div>
					<div class="col-md-2">
						<a href="/NUEVO-ARTICULO">
							<button style="margin-top: 14%;" type="button" class="btn btn-primary">Crear Articulo</button>
						</a>
					</div>
				</div>
				<div class="col-md-12" style="padding-top: 3em;">
					<?php $__currentLoopData = $productos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $producto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<div class="grid1_of_4">
							<div class="content_box" style="border-radius: 0em 0em 1em 1em;box-shadow: 2px 1px 7px #666;min-height: 349px; <?php if($producto->active=='0'): ?> border: 1px solid #f00; <?php endif; ?>">
							
							<form action="/ELIMINAR-ARTICULO/<?php echo e($producto->producto_id); ?>/<?php echo e($producto->file_name); ?>" method="post">

						      	<?php echo e(method_field('DELETE')); ?>

						      	<?php echo e(csrf_field()); ?>

					      		<button type="button" class="btn btn-primary btn-delete" style="width: 100%">Eliminar Articulo</button>
							      	
							</form>
							<p style="float: left; margin-left: 0.5em;">Oferta: <?php if($producto->oferta=='1'): ?> <span style="color: #07de07;">Si</span> <?php else: ?> <span style="color: #f00;">No</span> <?php endif; ?></p>
							
							<p style="float: right; margin-right: 0.5em;">Publicado: <?php if($producto->active=='1'): ?> <span style="color: #07de07;">Si</span> <?php else: ?> <span style="color: #f00;">No</span> <?php endif; ?></p>
								<a href="details.html">
											
								<img src="/uploads/<?php echo e($producto->producto_id); ?>/min_<?php echo e($producto->file_name); ?>" class="img-responsive" alt="" style="margin-top: 5%;">
											
						   	   	 	
							   	</a>
							    <h4 class="form-title" style="color: #fff;font-size: 14px;"><?php echo e(substr($producto->titulo, '0', '18')); ?></h4>
							     
							     <p style="min-height: 45px;"><?php echo e(substr($producto->descripcion, '0', '50')); ?>...</p>
								 
								 <div class="grid_1 simpleCart_shelfItem">
							    
									 <div class="item_add">
									 	<span class="item_price"><h6>Valor $<?php echo e($producto->precio); ?>-</h6></span>
									 </div>
									 
										
									 </div>
									 <div class="abajo" style="display: inline-flex;">

									 <form style="margin: 0em 1em 0em 0em;" method="post" action="/EDITAR-ARTICULO-IMG/<?php echo e($producto->producto_id); ?>">
									 	<?php echo e(csrf_field()); ?>

									 	<?php echo e(method_field('PATCH')); ?>

									 <button type="submit" class="btn btn-primary">Editar Fotos</button>
									 </form>

									 <form method="post" action="/EDITAR-ARTICULO/<?php echo e($producto->producto_id); ?>">
									 	<?php echo e(csrf_field()); ?>

									 	<?php echo e(method_field('PATCH')); ?>

									 <button type="submit" class="btn btn-primary">Editar Info</button>
									 </form>

									 </div>
									 
					   		</div>
						</div>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					

				</div>
			</div>
		</div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
	<script>
		$('.btn-delete').on('click', function(e){
					if(confirm('Seguro deseas eliminar este articulo ?')){
						$(this).parents('form:first').submit();
					}
				})
		</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('panel.layout.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
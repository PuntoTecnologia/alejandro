<?php $__env->startSection('content'); ?>
<div class="tab-main">
	<!--/tabs-inner-->
		<div class="tab-inner">
			<div id="tabs" class="tabs">
				<h2 class="inner-tittle" style="margin-bottom: 0em;">Panel 3.0 Pro || <?php echo e(Request::path()); ?></h2>
				<div class="col-md-12">
					
				</div>
				<div class="col-md-12">
					<form action="/EDITAR-CLIENTE/<?php echo e($clients->id); ?>" method="post">	
					<?php echo e(csrf_field()); ?>

					<?php echo e(method_field('patch')); ?>

						<div class="col-md-12" style="margin-bottom:1em;margin-top: 1em;border-bottom: 1px solid #ccc;"></div>

						<div class="col-md-4"><h4 style="margin-bottom: 2em;">EDITAR CLIENTE</h4></div>
						<div class="col-md-5"><label style="float: right;">Creado</label></div>
						<div class="col-md-3"><?php echo e($clients->updated_at); ?></div>
						<div class="col-md-12" style="margin-bottom:1em;border-bottom: 1px solid #ccc;"></div>
						<div class="col-md-4">
							<div class="form-group">
								<label>NOMBRE</label>
								<input type="text" class="form-control" value="<?php echo e($clients->name); ?>" name="name" autofocus required>
							</div>
						</div>

						<div class="col-md-4">
							<div class="form-group">
								<label>APELLIDO</label>
								<input type="text" class="form-control" value="<?php echo e($clients->last_name); ?>" name="last_name" autofocus required>
							</div>
						</div>

						<div class="col-md-4">
							<div class="form-group">
								<label>E-MAIL</label>
								<input type="email" class="form-control" value="<?php echo e($clients->email); ?>" name="email" autofocus required>
							</div>
						</div>

						<div class="col-md-6">
							<div class="form-group">
								<label>TELEFONO</label>
								<input type="number" class="form-control" value="<?php echo e($clients->telefono); ?>" name="telefono" autofocus required>
							</div>
						</div>
						
						<div class="col-md-6">
							<div class="form-group">
								<label>CUIT-CUIL-DNI</label>
								<input type="number" class="form-control" value="<?php echo e($clients->cuit_cuil); ?>" name="cuit_cuil" autofocus required>
							</div>
						</div>	
						<div class="col-md-6"></div>
						<div class="col-md-3">
							<div class="form-group">
								<label style="margin-top: 1.5em;">Activo 
							    	Si <input name="active" value="1" type="radio" <?php if($clients->active=='1'): ?>
					    		checked <?php endif; ?>>
							    	No <input name="active" value="0" type="radio" <?php if($clients->active=='0'): ?>
					    		checked <?php endif; ?>>
							    </label>
							</div>
						</div>

						<div class="col-md-3">
							<div class="form-group">
								<button style="margin-top: 1.2em;" type="submit">EDITAR CLIENTE</button>
							</div>
						</div>
					</form>	
				</div>
			</div>
		</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('panel.layout.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
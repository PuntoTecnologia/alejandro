<?php $__env->startSection('content'); ?>
<div class="tab-main">
	<!--/tabs-inner-->
		<div class="tab-inner">
			<div id="tabs" class="tabs">
				<h2 class="inner-tittle" style="margin-bottom: 0em;">Panel 3.0 Pro || <?php echo e(Request::path()); ?></h2>
				<div class="col-md-12">
					<p style="margin-bottom: 2em;">CREAR NUEVA CATEGORIA</p>
				</div>
				<div class="col-md-12">
					<form action="CREAR-CATEGORIA" method="post">	
					<?php echo e(csrf_field()); ?>

						<div class="col-md-3">
							<div class="form-group">
								<label>CATEGORIA</label>
								<input type="text" name="nombre" autofocus required>
							</div>
						</div>
						
						<div class="col-md-3">
							<div class="form-group">
								<label>SUB-CATEGORIA DE</label>
								<select name="padre" class="form-control" required>
							      <option value="0"></option>
							      <?php $__currentLoopData = $lista_categorias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categoria): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							      	<option value="<?php echo e($categoria->id); ?>">
									
									<?php if($categoria->padre ==0): ?>
										Principal
									
									<?php else: ?>
									
											<?php $__currentLoopData = $lista_categorias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sub_categoria): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
												<?php if($sub_categoria->id == $categoria->padre): ?>
													<?php echo e($sub_categoria->nombre); ?>

												<?php endif; ?>
											<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
									<?php endif; ?>
									-->
							      	<?php echo e($categoria->nombre); ?></option>
							      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							    </select>
							</div>
						</div>	
						
						<div class="col-md-3">
							<div class="form-group" style="float: right;padding-right:10%;">
								<label style="margin-top: 1.5em;">Activa 
							    	Si <input name="active" value="1" type="radio" checked>
							    	No <input name="active" value="0" type="radio">
							    </label>
							</div>
						</div>

						<div class="col-md-3">
							<div class="form-group">
								<button style="margin-top: 1.2em;" type="submit">CREAR CATEGORIA</button>
							</div>
						</div>
					</form>	
				</div>
			</div>
		</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('panel.layout.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
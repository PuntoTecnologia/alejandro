<?php $__env->startSection('script_add'); ?>
	<link rel="stylesheet" href="/panel/css/jquery.dataTables.css">
	<script src="/panel/jquery-2.1.1.min.js"></script>
	<script type="text/javascript" src="/panel/js/jquery.dataTables.min.js"></script>
	<script src="/panel/js/table.js"></script>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="tab-main">
<div class="tab-inner">
			<div id="tabs" class="tabs">
				<h2 class="inner-tittle" style="margin-bottom: 0.5em;">Panel 3.0 Pro || <?php echo e(Request::path()); ?></h2>
					<h4>Ingrese Dolar Actual</h4>
					<div class="col-md-12">
						<form method="post" action="/new_dolar">
						<?php echo e(csrf_field()); ?>

						<div class="col-md-6"></div>
							<div class="col-md-4">
								<label>Nuevo Valor</label>
								<input type="number" name="dolar" class="form-control" step="any">
							</div>
							<div class="col-md-2">
								<input style="margin-top: 1.5em;" type="submit" value="Grabar Dolar" class="form-control">
							</div>
						</form>
					</div>
					<h2 class="form-title" style="margin-top: 3em;color:#fff;">Historico de Dolar</h2>
					<div class="content tab">
					<div class="col-md-12" style=""></div>
							<table id="tabla" class="display" cellspacing="0" width="100%">
						        <thead>
								    <tr>
								      <th scope="col">ID</th>
								      <th scope="col">VALOR</th>
								      <th scope="col">FECHA</th>
								    </tr>
								</thead>
						 
						        <tbody>
						        	<?php $__currentLoopData = $dolar; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dolar): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							    		<tr>
									      <td class="col-md-2"><?php echo e($dolar->id); ?></td>
									      <td class="col-md-6">$<?php echo e($dolar->valor); ?>-</td>
									      <td class="col-md-4"><?php echo e($dolar->created_at); ?></td>
									    </tr>
								    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								  </tbody>
						    </table>
										
						</div>
				<!-- /tabs -->
			</div>
		</div>
	<!--/tabs-inner-->
		
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
	<script>
		$('.btn-delete').on('click', function(e){
					if(confirm('Seguro deseas eliminar este cliente ?')){
						$(this).parents('form:first').submit();
					}
				})
		</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('panel.layout.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
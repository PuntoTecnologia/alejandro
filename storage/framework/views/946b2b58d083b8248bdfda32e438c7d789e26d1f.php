<?php $__env->startSection('title'); ?>
	Panel 3.0 || Gestion en linea || By  Promedios
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script_add'); ?>
	<link rel="stylesheet" href="http://cdn.datatables.net/1.10.2/css/jquery.dataTables.css">
	<script src="/panel/jquery-2.1.1.min.js"></script>
	<script type="text/javascript" src="/panel/js/jquery.dataTables.min.js"></script>
	<script src="/panel/js/table.js"></script>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="tab-main">
	<!--/tabs-inner-->
		<div class="tab-inner">
			<div id="tabs" class="tabs">
				<h2 class="inner-tittle" style="margin-bottom: 0.5em;">Panel 3.0 Pro || <?php echo e(Request::path()); ?></h2>
					<h4>Crear Proveedor</h4>
					<div class="graph">
						<div class="content tab">
							
							<form method="post" action="/new-prover">
								<?php echo e(csrf_field()); ?>

								<div class="col-md-12">
									<div class="col-md-4">
										<label>Nombre</label>
										<input type="text" name="name" class="form-control">
									</div>
									<div class="col-md-4">
										<label>Direccion</label>
										<input type="text" name="direccion" class="form-control">
									</div>
									<div class="col-md-4">
										<label>E-mail</label>
										<input type="email" name="email" class="form-control">
									</div>
									<div class="col-md-6">
										<label>Telefono</label>
										<input type="number" name="telefono" class="form-control">
									</div>
									<div class="col-md-6">
										<label>Cuit / Cuil</label>
										<input type="number" name="cuit_cuil" class="form-control">
									</div>
									<div class="col-md-12 form-group" style="margin-top: 2em;">
									<button style="background:#ccc;" type="submit" class="form-control">Crear Proveedor</button>
									</div>

								</div>
							</form>
										
						</div><!-- /content -->
					</div>
				<!-- /tabs -->
			</div>
		</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('panel.layout.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
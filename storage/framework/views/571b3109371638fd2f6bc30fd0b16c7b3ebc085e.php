<?php $__env->startSection('script_add'); ?>
		<!-- jQuery File Upload Dependencies -->
		<script src="<?php echo e(asset ('panel/js/script.js')); ?>"></script>
		<script src="<?php echo e(asset ('panel/js/jquery.knob.js')); ?>"></script>
		<script src="<?php echo e(asset ('panel/js/jquery.ui.widget.js')); ?>"></script>
		<script src="<?php echo e(asset ('panel/js/jquery.iframe-transport.js')); ?>"></script>
		<script src="<?php echo e(asset ('panel/js/jquery.fileupload.js')); ?>"></script>
		<link href="<?php echo e(asset ('panel/css/style_upload.css')); ?>" rel="stylesheet" />
		<script type="text/javascript">
			function calcularprecio() {
				//GRABO INPUTS PARA LA CUENTA
				costo = document.getElementById("costo").value;
			        if (costo==''){costo=0;}
			        if (!costo){costo=0;}
			    rent = document.getElementById("rent").value;
			        if (rent==''){rent=0;}
			        if (!rent){rent=0;}    
			    iva = document.getElementById("iva").value;
			        if (iva==''){iva=0;}
			        if (!iva){iva=0;}
			    //AHORA ARMO EL CALCULO
			    //rentabilidad
			    calc = (costo*rent) / 100; 
			    //costo+rentabilidad
			    calc2 = parseInt(calc) + parseInt(costo);
			    //((costo+rentabilidad)*iva )/ 100 devuelve iva sin costo
			    calc3 = (calc2*iva) / 100; 
			    //calc3 devuelve iva solo entonces sumo calc2 para obtener el valor final
			    final = Math.round(calc3 + calc2); 
			    //LO MUESTRO EN UN INPUT
			    document.getElementById("precio").value = final;
			}
		</script>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<!-- EJECUTO CALCULO DE PRECIO PARA QUE SE COMPLETE EL CAMPO SOLO-->
<body onload="calcularprecio()">
<div class="tab-main">
	<!--/tabs-inner-->
		<div class="tab-inner">
			<div id="tabs" class="tabs">
				<h2 class="inner-tittle">Panel 3.0 Pro || <?php echo e(Request::path()); ?></h2>
					<form id="upload" method="post" action="/EDITAR_ARTICULO_INFO/<?php echo e($product->id); ?>">
							<?php echo e(csrf_field()); ?>

							<?php echo e(method_field('PATCH')); ?>

						<div class="col-md-2">
						  <div class="form-group">
						    <label style="color: #fff;">Codigo</label>
						    <input class="form-control" name="codigo" placeholder="Codigo" required value="<?php echo e($product->codigo); ?>">
						  </div>
						</div>  
						<div class="col-md-8">
						  <div class="form-group">
						    <label style="color: #fff;">Titulo del Articulo</label>
						    <input class="form-control" name="titulo" placeholder="Producto Titulo" required value="<?php echo e($product->titulo); ?>">
						  </div>
						</div> 
						<div class="col-md-2">
						  <div class="form-group">
						    <label style="color: #fff;">Stock Mínimo</label>
						    <input class="form-control" name="minimo" placeholder="" required type="number" value="<?php echo e($product->stockminimo); ?>">
						  </div>
						</div> 
					  
						<div class="col-md-4">
							<div class="form-group">
								<label style="color: #fff;">Marca</label>
								<select class="form-control" name="id_marca">
									<option></option>
									<?php $__currentLoopData = $marcas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $marca): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
										<option value="<?php echo e($marca->id); ?>" <?php if($marca->id == $product->id_marca): ?> selected <?php endif; ?>><?php echo e($marca->marca); ?></option>
									<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								</select>
							</div>
						</div>

						<div class="col-md-4">
							<div class="form-group">
								<label style="color: #fff;">Proveedor</label>
								<select class="form-control" name="prover">
								<option></option>
									<?php $__currentLoopData = $provers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $prover): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
										<option value="<?php echo e($prover->id); ?>" <?php if($prover->id == $product->prover): ?> selected <?php endif; ?>><?php echo e($prover->name); ?></option>
									<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
									
								</select>
							</div>
						</div>

						<div class="col-md-4"> 
						  <div class="form-group"> 
						    <label style="color: #fff;">Categoria</label>
						    <select name="padre" class="form-control" required>
						      <option></option>
						      <?php $__currentLoopData = $lista_categorias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categoria): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							      	<option value="<?php echo e($categoria->id); ?>" <?php if($categoria->id == $product->padre): ?> selected <?php endif; ?>>
									
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
						<div class="col-md-12"> 
						  <div class="form-group">
						    <label style="color: #fff;">Descripcion del Articulo</label>
						    <textarea class="form-control" name="descripcion" rows="3" required><?php echo e($product->descripcion); ?></textarea>
						  </div>
						</div>
						

						<div class="col-md-3"> 
							<div class="form-group">
						    <label style="color: #fff;" >Costo u$</label>
						    <input class="form-control" name="costo" onchange="calcularprecio()" type="number" id="costo" placeholder="0" required value="<?php echo e($product->costo); ?>"  step="any">
						  </div>
						</div>
						<div class="col-md-3"> 
							<div class="form-group">
						    <label style="color: #fff;" >% Ganancia</label>
						    <input class="form-control" onchange="calcularprecio()" id="rent" name="rent" type="number" placeholder="0" required value="<?php echo e($product->rent); ?>">
						  </div>
						</div>
						<div class="col-md-3"> 
							<div class="form-group">
						    <label style="color: #fff;">Iva</label>
						    	<select id="iva" name="iva" class="form-control" onchange="calcularprecio()">
						    		<?php $__currentLoopData = $iva; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $iva): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						    			<option value="<?php echo e($iva->coef); ?>" <?php if($product->iva == $iva->id): ?> selected <?php endif; ?>><?php echo e($iva->coef); ?></option>
						    		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						    	</select>
						  </div>
						</div>
						<div class="col-md-3"> 
							<div class="form-group">
						    <label style="color: #fff;">Efectivo</label>
						    <input class="form-control" name="precio" id="precio" type="number" value="0" required readonly>
						  </div>
						</div>
						<div class="col-md-3" style="padding-top: 2%;"> 
							<div class="form-group">
						    <label style="color: #fff;">
						    	Usado <input name="tipo" value="2" type="radio" style="margin-right: 0.5em;" <?php if($product->tipo == 2): ?> checked <?php endif; ?>>
						    	Nuevo <input name="tipo" value="1" type="radio" <?php if($product->tipo == 1): ?> checked <?php endif; ?>>
						    	</label>
						 	</div>   
						</div>
						<div class="col-md-2" style="padding-top: 2%;"> 
							<div class="form-group">
						    <label style="color: #fff;">Oferta ? 
						    	Si <input name="oferta" value="1" type="radio" <?php if($product->oferta == 1): ?> checked <?php endif; ?>>
						    	No <input name="oferta" value="0" type="radio" <?php if($product->oferta == 0): ?> checked <?php endif; ?>>
						    	</label>
						 	</div>   
						</div>
						<div class="col-md-5"></div>
						<div class="col-md-2" style="margin-top: 2%;">
							<button type="submit" class="btn btn-primary">Editar Articulo</button> 
						</div>
					</form>
			</div>
		</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('panel.layout.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
			<li><a  href="/">Home</a></li>
			<li ><a  href="/QUIENES-SOMOS">Empresa</a></li>
			<li class="active grid"><a  href="" style="pointer-events: none;cursor: default;">Productos</a>
				<div class="megapanel">
					<div class="row">
						<?php $__currentLoopData = $padres; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $padre): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<?php if($padre->padre=='0'): ?>
								<div class="col1">
									<div class="h_nav">
										<h4><?php echo e(strtoupper($padre->nombre)); ?></h4>
										<ul>
											<?php $__currentLoopData = $padres; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $hijo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
												<?php if($hijo->padre==$padre->id): ?>
													<li><a href="/PRODUCTOS/<?php echo e($hijo->id); ?>"><?php echo e(strtoupper($hijo->nombre)); ?></a></li>
												<?php endif; ?>
											<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
										</ul>	
									</div>							
								</div>
							<?php endif; ?>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>	
						<div class="h_nav">
							<iframe width="38%" float="right" src="https://www.youtube.com/embed/o7sCF6Aq1Vo" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>	
						</div>
								
						</div>
					
    				</div>
				</li>					
				<li><a  href="/OFERTAS">Ofertas</a></li>
				
				<li><a  href="/CONTACTO">Contacto</a>
					
				</li>
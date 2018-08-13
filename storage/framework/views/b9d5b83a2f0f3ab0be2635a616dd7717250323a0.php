<!--FORMULARIO BUSQUEDA CELULARES-->
<form class="form-search  hidden-md hidden-lg hidden-xs" action="/catalogo/busqueda" method="get" style="height: 10%;">
    <input type="text" class="input-text" name="busqueda" placeholder="Buscar Producto..." onfocus="onfocus" style="width: 80%; font-size: 2em; padding: 0.5em 0em 0em 1em;height: 90%;">
    <button type="submit" class="btn btn-danger" style="height: 100%;"><span class="fa fa-search"></span></button>
</form>

<div class="header">          
<div class="topbar visible-lg visible-md">
        <div class="container">
            <div class="topbar-left">
                <ul class="topbar-nav clearfix">
                    <li><span class="phone">(0223) 474 9790</span></li>
                    <li><span class="email">info@puntotecnologia.com.ar</span></li>
                </ul>
            </div>
            <div class="topbar-right">
                <ul class="topbar-nav clearfix">
                <?php if(auth()->guard()->guest()): ?>
                    <li><a href="/login" class="login">Login</a></li>
                <?php else: ?>
                <li><a href="/ACCESO">
                <i class="fa fa-cog"></i> Panel 3.0</a></li>
                <li><a href="/logout" class="login">Salir</a></li>
                <?php endif; ?>

                </ul>
            </div>
        </div><!-- /.container -->
    </div><!-- /.topbar -->
    
    <div class="header-bottom">
    	<div class="container">
        	<div class="row">
            	<div class="col-md-3">
                	<a href="/" class="logo visible-lg"><img src="/images/logo.png" alt=""></a>
                </div>
                <div class="col-md-9">
                	<div class="support-client">
                    	<div class="row">
                        	<div class="col-sm-4 visible-lg">
                            	<div class="box-container time">
                                    <div class="box-inner">
                                    	<h2>Horario On-line</h2>
                                    	<p style="font-size: smaller;">Lun- Sab: 09:00 a 13:00 - 16:00 a 20:00</p>
                                    </div>
                           		</div>
                            </div>
                            <div class="col-sm-4 visible-lg visible-md">
                            	<div class="box-container free-shipping">
                                    <div class="box-inner">
                                        <h2>Envio Grátis</h2>
                                        <p>Consultar zonas</p>
                                    </div>
                            	</div>
                            </div>
                            <div class="col-sm-4 visible-lg visible-md">
                            	<div class="box-container money-back">
                                    <div class="box-inner">
                                        <h2>Pago Seguro</h2>
                                        <p>Efectivo y Tarjetas</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- /.support-client -->
                    <!--FORMULARIO BUSQUEDA COMPUTADORAS-->
                    <form class="form-search  visible-md visible-lg" action="/catalogo/busqueda" method="get">
                        <input type="text" class="input-text" name="busqueda" placeholder="Buscar Producto..." onfocus="onfocus">
                        <div class="dropdown">
                            <!-- MENU DESPLEGABLE DE CATEGORIAS EN BUSCADOR HEADER -->
                            <button type="button" class="btn" data-toggle="dropdown">Categorias <span class="fa fa-angle-down"></span></button>
                            <ul class="dropdown-menu dropdown-menu-right">
                                <?php $__currentLoopData = $categorias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat_search): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                  <?php if($cat_search->padre == 0): ?>
                                        <li><a href="/catalogo/cat/<?php echo e($cat_search->id); ?>"><?php echo e($cat_search->nombre); ?></a></li>
                                    <?php endif; ?>  
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </div>
                        <button type="submit" class="btn btn-danger"><span class="fa fa-search"></span></button>
                    </form>
                </div>
            </div>
            
    <div class="row">
            	<div class="col-md-3">
                	<div class="mega-container visible-lg visible-md">
                        <div class="navleft-container">
                            <div class="mega-menu-title"><h3>Categorias</h3></div>
<!-- ESTE ES EL MENU DE CATEGORIAS PRINCIPAL -->
<div class="mega-menu-category">
	<ul class="nav">
    <!--RECORRO CATEGORIAS-->
    	<?php $__currentLoopData = $categorias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <!--MUESTRO PRINCIPALES-->
        <?php if($cat->padre == 0): ?>
        <li>
                <a href="/catalogo/cat/<?php echo e($cat->id); ?>"><?php echo e($cat->nombre); ?></a>
        
        <!--RECCORRO CATEGORIAS-->
        <?php $__currentLoopData = $categorias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sub): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <!--MUESTRO ID PADRE CORRESPONDIENTE-->
            <?php if($sub->padre == $cat->id): ?>
                <div class="wrap-popup column3" style="width: max-content;">
                    <div class="popup">
                        <div class="row">
                                <!-- SI LA SUB CATEGORIA CONTIENE UN TERCER NIVEL GRABO VAR $NIVELES -->
                                <?php
                                    $niveles=0;
                                ?>
                                <?php $__currentLoopData = $categorias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $niv): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if($niv->padre == $cat->id): ?>
                                        <?php $__currentLoopData = $categorias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $niv3): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php if($niv3->padre == $niv->id): ?>
                                                <?php
                                                    $niveles='3';
                                                ?>
                                            <?php endif; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <!-- SI EL FORMATO DEBE SER DE 3 NIVELES -->
                                <?php if($niveles=='3'): ?>
                                    <?php $__currentLoopData = $categorias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $nivel3): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if($nivel3->padre == $cat->id): ?>
                                            <div class="col-md-4">
                                                    <h3 style="margin-top: 1em;border-bottom: 1px solid #ccc;"><a href="/catalogo/subcat_2/<?php echo e($nivel3->id); ?>"><?php echo e($nivel3->nombre); ?></a></h3>
                                                <ul class="nav">
                                                    <?php $__currentLoopData = $categorias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $nivel4): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <?php if($nivel4->padre == $nivel3->id): ?>
                                                            <li><a href="/catalogo/subcat2/<?php echo e($nivel4->id); ?>"><?php echo e($nivel4->nombre); ?></a></li>
                                                        <?php endif; ?>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </ul>
                                            </div>
                                        <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <!-- SI NO TIENE 3ER NIVEL LO MUESTRO EN FORMATO DE 2 NIVELES -->
                                <?php else: ?>
                                <div class="col-md-12">
                                    <h3 style="margin-top: 1em;border-bottom: 1px solid #ccc;">
                                        <a href="/catalogo/cat/<?php echo e($cat->id); ?>"><?php echo e($cat->nombre); ?></a></h3>
                                    <ul class="nav">
                                        <?php $__currentLoopData = $categorias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $nivel2): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php if($nivel2->padre == $cat->id): ?>
                                                <li><a href="/catalogo/subcat/<?php echo e($nivel2->id); ?>"><?php echo e($nivel2->nombre); ?></a></li>
                                            <?php endif; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </ul>
                                </div>
                                <?php endif; ?>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </li>
        <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
</div>

</div>
</div>
</div>
    <!-- ESTE ES EL MENU TOP CATEGORIAS -->
    <div class="col-md-9">
    	<ul class="menu clearfix visible-lg visible-md">
        <!-- FAMILIAS -->
            <li><a href="/">Home</a></li>
        	<li><a href="/destacados/">Productos  Destacados</a></li>
        	<li><a href="/ultimos/ingresos">Ultimos Ingresos</a></li>
        	<li><a href="/ofertas">Ofertas</a></li>
        	<li><a href="/catalogo/cat/7">Insumos</a></li>
            <li><a href="/catalogo/cat/17">Repuestos</a></li>
        </ul>
    </div>
</div>
</div>
        <!-- ESTE ES EL MENU COLAPSADO PARA CELULARES -->
        <nav class="navbar navbar-primary navbar-static-top visible-xs">
          	<div class="container">
            	<div class="navbar-header">
              		<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
              		</button>
                    <h2 class="navbar-brand visible-xs visible-md">Menu</h2>
            	</div>
            	
                <div class="collapse navbar-collapse">
              		<ul class="nav navbar-nav">
                        <?php $__currentLoopData = $categorias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $niv1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                            <!--NIVEL 1-->
                            <?php if($niv1->padre == 0): ?>
                                <li class="dropdown">
                                  <a href="/catalogo/cat/<?php echo e($niv1->id); ?>"  data-toggle="dropdown"><?php echo e($niv1->nombre); ?> <span class="fa fa-angle-down"></span>
                                  </a>
                                <!--NIVEL 2-->
                                <?php $__currentLoopData = $categorias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $niv2): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if($niv1->id == $niv2->padre): ?>
                                            <ul class="dropdown-menu">
                                               <li><a href="/catalogo/cat/<?php echo e($niv2->id); ?>"><?php echo e($niv2->nombre); ?></a></li>
                                            </ul>
                                    <?php elseif($niv1->id == $niv2->id): ?>
                                        <ul class="dropdown-menu">
                                           <li><a href="/catalogo/cat/<?php echo e($niv2->id); ?>"><?php echo e($niv2->nombre); ?></a></li>
                                        </ul>
                                    <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </li>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    	
              		</ul>
            	</div><!-- /.navbar-collapse -->
          	</div><!-- /.container -->
        </nav>
    </div><!-- /.header-bottom -->
</div><!-- /.header -->
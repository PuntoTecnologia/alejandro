<div class="header">          
<div class="topbar">
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
                    <!--
                    <li class="dropdown">
                        <a href="#" class="account dropdown-toggle" data-toggle="dropdown">Mi Cuenta</a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li><a title="My Account" href="account.html">Mi Info</a></li>
                            
                            <li><a title="My Wishlist" href="wishlist.html">My Wishlist</a></li>
                            
                            <li><a title="My Cart" href="cart.html">Mi Carro</a></li>
                            
                            <li><a title="Checkout" href="checkout.html">Checkout</a></li>
                            -->
                            <!--
                            <li><a title="Testimonial" href="testimonial.html">Testimonial</a></li>
                            
                        </ul>
                    </li>
                    -->
                </ul>
            </div>
        </div><!-- /.container -->
    </div><!-- /.topbar -->
    
    <div class="header-bottom">
    	<div class="container">
        	<div class="row">
            	<div class="col-md-3">
                	<a href="#" class="logo"><img src="/images/logo.png" alt=""></a>
                </div>
                <div class="col-md-9">
                	<div class="support-client">
                    	<div class="row">
                        	<div class="col-sm-4">
                            	<div class="box-container time">
                                    <div class="box-inner">
                                    	<h2>Horario On-line</h2>
                                    	<p>Lun- Sab: 09:00 a 13:00 - 16:00 a 20:00</p>
                                    </div>
                           		</div>
                            </div>
                            <div class="col-sm-4">
                            	<div class="box-container free-shipping">
                                    <div class="box-inner">
                                        <h2>Envio Grátis</h2>
                                        <p>Consultar zonas</p>
                                    </div>
                            	</div>
                            </div>
                            <div class="col-sm-4">
                            	<div class="box-container money-back">
                                    <div class="box-inner">
                                        <h2>Pago Seguro</h2>
                                        <p>Efectivo y Tarjetas</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- /.support-client -->
                    <form class="form-search" action="/catalogo/busqueda" method="get">
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
                    <div class="mini-cart">
                    	<div class="top-cart-title">
                            <a href="cart.html" class="dropdown-toggle" data-toggle="dropdown">
                            	Dolar Actual
                            	<span class="price">u$<?php echo e($dolar[0]->valor); ?>-</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                            	<div class="cart-listing">
                                	<div class="media">
                                    	<div class="media-left"><a href="#"><img src="/images/products/11.jpg" alt="" class="img-responsive"></a></div>
                                        <div class="media-body">
                                        	<button type="button" class="remove-cart-item" >&times;</button>
                                        	<h4>Accumsan elit</h4>
                                            <div class="mini-cart-qty">Qty:2</div>
                                            <div class="mini-cart-price">$ 64.00</div>
                                        </div>
                                    </div>
                                    <div class="media">
                                    	<div class="media-left"><a href="#"><img src="/images/products/13.jpg" class="img-responsive" alt=""></a></div>
                                        <div class="media-body">
                                        	<button type="button" class="remove-cart-item" >&times;</button>
                                        	<h4>Accumsan elit</h4>
                                            <div class="mini-cart-qty">Qty:2</div>
                                            <div class="mini-cart-price">$ 64.00</div>
                                        </div>
                                    </div>
                                </div><!-- /.cart-listing -->
                                <div class="mini-cart-subtotal">Shipping: <span class="price">$5.00</span></div>
                                <div class="mini-cart-subtotal">Total: <span class="price">$200.00</span></div>
                                <div class="checkout-btn">
                                	<a href="#" class="btn btn-default btn-md fwb">CHECK OUT</a>
                                </div>
                            </div>
                        </div>
                    </div>
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
        	<li><a href="/repuestos">Repuestos</a></li>
            <li><a href="/servicios">Servicios</a></li>
        </ul>
    </div>
</div>
</div>
        <!-- ESTE ES EL MENU COLAPSADO PARA CELULARES -->
        <nav class="navbar navbar-primary navbar-static-top hidden-lg hidden-md">
          	<div class="container">
            	<div class="navbar-header">
              		<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
              		</button>
                    <h2 class="navbar-brand visible-xs">Menu</h2>
            	</div>
            	
                <div class="collapse navbar-collapse">
              		<ul class="nav navbar-nav">
                    	<li class="active"><a href="#">Home</a></li>
                		<li class="dropdown">
                        	<a href="#" class="dropdown-toggle" data-toggle="dropdown">Computer <span class="fa fa-angle-down"></span></a>
                            <ul class="dropdown-menu">
                            	<li><a href="#">Desktop PC</a></li>
                            	<li><a href="#">Notebook</a></li>
                            	<li><a href="#">Gaming</a></li>
                            	<li><a href="#">Mouse &amp; Keyboard</a></li>
                            </ul>
                        </li>
                    	<li class="dropdown">
                        	<a href="#" class="dropdown-toggle" data-toggle="dropdown">Camera <span class="fa fa-angle-down"></span></a>
                            <ul class="dropdown-menu">
                            	<li><a href="#">Walkera</a></li>
                                <li><a href="#">Fpv System &amp; Parts</a></li>
                                <li><a href="#">RC Cars &amp; Parts</a></li>
                                <li><a href="#">Helicopters &amp; Part</a></li>
                            </ul>
                        </li>
                    	<li class="dropdown">
                        	<a href="#" class="dropdown-toggle" data-toggle="dropdown">Smart Phone <span class="fa fa-angle-down"></span></a>									<ul class="dropdown-menu">
                                <li><a href="#">Accessories for iPhone</a></li>
                                <li><a href="#">Accessories for iPad</a></li>
                                <li><a href="#">Accessories for Tablet PC</a></li>
                                <li><a href="#">Tablet PC</a></li>
                            </ul>
                       	</li>
                    	<li class="dropdown">
                        	<a href="#" class="dropdown-toggle" data-toggle="dropdown">Electtronic <span class="fa fa-angle-down"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Batteries &amp; Chargers</a></li>
                                <li><a href="#">Headphone, Headset</a></li>
                                <li><a href="#">Home Audio</a></li>
                                <li><a href="#">Mp3 Player Accessories</a></li>
                            </ul>
                        </li>
                        <li><a href="#">New Arrivals</a></li>
              		</ul>
            	</div><!-- /.navbar-collapse -->
          	</div><!-- /.container -->
        </nav>
    </div><!-- /.header-bottom -->
</div><!-- /.header -->
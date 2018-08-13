<!--/sidebar-menu-->
<div class="sidebar-menu">
<header class="logo1">
<a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> 
</header>
<div style="border-top:1px ridge rgba(255, 255, 255, 0.15)"></div>
<div class="menu">
		<ul id="menu" >
			<li>
				<a href="/ACCESO">
					<i class="fa fa-tachometer"></i> 
					<span>Home</span>
				</a>
			</li>
			<li>
				<a href="/CONFIGURACION">
					<i class="lnr lnr-pencil"></i> 
						<span>Configuracion</span>
				</a>
			</li>
			<li id="menu-academico" >
				<a href="/CATALOGO">
					<i class="fa fa-file-text-o"></i> 
						<span>Catalogo</span>
				</a>
			</li>
			<li>
				<a href="/ESTADISTICAS">
				<i class="lnr lnr-chart-bars"></i> 
				<span>Estadisticas</span>
				</a>
			</li>
	        
			<li>
				<a href="/CONSULTAS">
				<i class="lnr lnr-envelope"></i>
				<span>Consultas</span>
				</a>
			</li>

			<li>
				<a href="/">
					<i class="lnr lnr-book"></i>
					<span>Ir al Portal</span>
				</a>
			</li>
			
			<li>
			<a href="<?php echo e(route('logout')); ?>">
				<i class="glyphicon glyphicon-remove"></i>
				<span>Cerrar Sesion</span>
			<span class="fa fa-angle-right" style="float: right"></span>
			</a>
			</li>
	  </ul>
</div>
</div>
<div class="clearfix"></div>	
</div>
<script>
	var toggle = true;
				
	$(".sidebar-icon").click(function() {                
	  if (toggle)
	  {
		$(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
		$("#menu span").css({"position":"absolute"});
	  }
	  else
	  {
		$(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
		setTimeout(function() {
		  $("#menu span").css({"position":"relative"});
		}, 400);
	  }
					
					toggle = !toggle;
				});
	</script>
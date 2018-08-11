<template>
<div class="tab-main">
		<div class="tab-inner">
			<div id="tabs" class="tabs">
				<h2 class="inner-tittle" style="margin-bottom: 0em;">Panel 3.0 Pro || CATALOGO</h2>
					<div class="col-md-4">
						<p style="margin-bottom: 2em;">Funciones disponibles para ARTICULOS</p>
					</div>
					<div class="col-md-4">
					</div>
					<div class="col-md-2">
					</div>
					<div class="col-md-2">
						<a href="/NUEVO-ARTICULO">
							<button style="margin-top: 14%;" type="button" class="btn btn-primary">Crear Articulo</button>
						</a>
					</div>
				<div class="col-md-12" style="padding-top: 3em;">
							<table  id="tabla" class="display table" cellspacing="0" width="100%">
						        <thead>
								    <tr>
								      <th scope="col">IMG</th>
								      <th scope="col">TITULO</th>
								      <th scope="col">CODIGO</th>
								      <th scope="col">COSTO</th>
								      <th scope="col">RENT(%)</th>
								      
								    </tr>
								</thead>
						        <tbody>
							    	<tr v-for="(producto,index) in this.productos" :key="index" >
										
										<td class="col-md-4">
											<img src="/uploads/'.{{}}'" class="img-responsive" alt="" style="width: 50%;"/>
										</td> 
									      <td class="col-md-2" v-text="producto.titulo"></td>
									      <td class="col-md-2" v-text="producto.codigo"></td>
									      <td class="col-md-1" v-text="producto.costo"></td>
									      <td class="col-md-1" v-text="producto.rent"></td>
									      <td class="col-md-2" style="display: inline-flex;">
											<button @click="editarFoto(producto)" type="button" class="btn btn-primary">Editar Fotos</button>
											<button @click="editarInfo(producto)" style="margin-left: 0.5em;" type="button" class="btn btn-primary">Editar Info</button>
									      	<button type="button" @click="eliminarProducto(producto)" class="btn btn-primary btn-delete" style="margin-left: 0.5em;">Eliminar</button>   	
									      </td>
									    </tr>
								  </tbody>
						    </table>
				</div>
			</div>
		</div>
</div>


</template>

<script>
import axios from 'axios';

    export default {
		name:'Product',
		props:[],
		data (){
			 return {
				  msg: 'Welcome to Your Vue.js App',
				  productos:[]
   			 }
		},
		methods:{
			listarProductos(){
				var app=this;
				axios.get('/GetProductos')
				.then(function (response) {
					app.productos=response.data;
				})
				.catch(function (error) {
					console.log(error);
				});
				this.productos=app.productos;
			},
			editarFoto(producto){
				window.location.href='/EDITAR-ARTICULO-IMG/'+producto.id
				
			},
			editarInfo(producto){
		        window.location.href='/EDITAR-ARTICULO/'+producto.id;
				
			},
			eliminarProducto(producto){
				
				axios.delete('/ELIMINAR-ARTICULO/'+producto.id)
				.then(function (response) {
					console.log("entre a axios");
					window.location.href=window.location.pathname;
				})
				.catch(function (error) {
					console.log(error);
				});
			}
		
		},
	mounted(){
			this.listarProductos();
		}
    }
</script>

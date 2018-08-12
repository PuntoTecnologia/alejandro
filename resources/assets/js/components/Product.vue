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
					<div class="form-group row">
                            
                                <div class="col-md-2 ">
                                    <select class="form-control" v-model="criterio" >
                                      <option value="titulo">Titulo</option>
                                      <option value="codigo">Codigo</option>
                                    </select>
                                </div>
								<div class=" col-md-4 ">
                                    <input type="text" v-model="buscar" @keyup.enter="listarProductos(1,buscar,criterio)" class="form-control" placeholder="Texto a buscar">
                                </div>
								<div class=" col-md-2 ">
									<button type="submit" @click="listarProductos(1,buscar,criterio)" class="btn btn-primary "><i class="fa fa-search"></i></button>
                                </div>
								
										
								
                           
                        </div>
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
										
										<td class="col-md-4" v-for="(i,j) in producto.image" :key="j" >
											<img  v-bind:src="`/uploads/${ producto.id }/min_${i.file_name}`" class="img-responsive"  style="width: 50%;" />
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
							<div class="row">
									<nav class="col-md-6">
                            <ul class="pagination">
                                <li class="page-item" v-if="this.pagination.current_page > 1">
                                    <a class="page-link" href="#" @click.prevent="cambiarPagina(this.pagination.current_page - 1,buscar,criterio)">Ant</a>
                                </li>
                                <li class="page-item"  v-for="page in pagesNumber" :key="page" :class="[page == isActived ? 'active' : '']" >
                                    <a class="page-link" href="#" @click.prevent="cambiarPagina(page,buscar,criterio)" v-text="page" ></a>
                                </li>
                                <li class="page-item" v-if="this.pagination.current_page < this.pagination.last_page">
                                    <a class="page-link" href="#" @click.prevent="cambiarPagina(this.pagination.current_page + 1,buscar,criterio)">Sig</a>
                                </li>
                            </ul>
                        </nav>					
							</div>
							
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
				  productos:[],
				  imagenes:[],
				   pagination : {
                    total : 0,
                    current_page : 0,
                    per_page : 0,
                    last_page : 0,
                    from : 0,
                    to : 0,
                },
                offset : 3,
                criterio : 'titulo',
                buscar : ''
   			 }
		},
		computed:{
            isActived: function(){
                return this.pagination.current_page;
            },
			
            //Calcula los elementos de la paginación
            pagesNumber: function() {
                if(!this.pagination.to) {
                    return [];
                }
                
                var from = this.pagination.current_page - this.offset; 
                if(from < 1) {
                    from = 1;
                }

                var to = from + (this.offset * 2); 
                if(to >= this.pagination.last_page){
                    to = this.pagination.last_page;
                }  

                var pagesArray = [];
                while(from <= to) {
                    pagesArray.push(from);
                    from++;
                }
                return pagesArray;             

            }
        },
		methods:{
			listarProductos(page,buscar,criterio){
				let app=this;
				var url='/GetProductos?page=' + page + '&buscar='+ buscar + '&criterio='+ criterio;
				axios.get(url)
				.then(function (response) {
					var respuesta=response.data;
					app.productos=respuesta.productos.data;
					app.pagination=respuesta.pagination;

					
				})
				.catch(function (error) {
					console.log(error);
				});
				
			},
			cambiarPagina(page,buscar,criterio){
                let me = this;
                //Actualiza la página actual
                me.pagination.current_page = page;
                //Envia la petición para visualizar la data de esa página
                me.listarProductos(page,buscar,criterio);
            },
			editarFoto(producto){
				window.location.href='/EDITAR-ARTICULO-IMG/'+producto.id
				
			},
			editarInfo(producto){
				
					console.log(producto.image);
				
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
<style>
	.pagination {
  display: -ms-flexbox;
  display: flex;
  padding-left: 0;
  list-style: none; }

.page-item:first-child .page-link, .pagination-datatables li:first-child .page-link, .pagination li:first-child .page-link, .page-item:first-child .pagination-datatables li a, .pagination-datatables li .page-item:first-child a, .pagination-datatables li:first-child a, .page-item:first-child .pagination li a, .pagination li .page-item:first-child a, .pagination li:first-child a {
  margin-left: 0; }

.page-item.active .page-link, .pagination-datatables li.active .page-link, .pagination li.active .page-link, .page-item.active .pagination-datatables li a, .pagination-datatables li .page-item.active a, .pagination-datatables li.active a, .page-item.active .pagination li a, .pagination li .page-item.active a, .pagination li.active a {
  z-index: 2;
  color: #fff;
  background-color: black;
  border-color: black; }

.page-item.disabled .page-link, .pagination-datatables li.disabled .page-link, .pagination li.disabled .page-link, .page-item.disabled .pagination-datatables li a, .pagination-datatables li .page-item.disabled a, .pagination-datatables li.disabled a, .page-item.disabled .pagination li a, .pagination li .page-item.disabled a, .pagination li.disabled a {
  color: #536c79;
  height: auto;
  pointer-events: none;
  background-color: #fff;
  border-color: #ddd; }

.page-link, .pagination-datatables li a, .pagination li a {
  position: relative;
  height: auto;
  width: auto;
  display: block;
  padding: 0.5rem 0.75rem;
  margin-left: -1px;
  line-height: 0;
  color: black;
  background-color: #fff;
  border: 1px solid #ddd; }
  .page-link:focus, .pagination-datatables li a:focus, .pagination li a:focus, .page-link:hover, .pagination-datatables li a:hover, .pagination li a:hover {
    color: #167495;
    text-decoration: none;
    background-color: #c2cfd6;
    border-color: #ddd; }

.pagination-lg .page-link, .pagination-lg .pagination-datatables li a, .pagination-datatables li .pagination-lg a, .pagination-lg .pagination li a, .pagination li .pagination-lg a {
  padding: 0.75rem 1.5rem;
  font-size: auto;
  line-height: 0; }

.pagination-sm .page-link, .pagination-sm .pagination-datatables li a, .pagination-datatables li .pagination-sm a, .pagination-sm .pagination li a, .pagination li .pagination-sm a {
  padding: 0.25rem 0.5rem;
  font-size: 0.875rem;
  line-height: 1; }
</style>

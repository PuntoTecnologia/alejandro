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
                            
                                <div class=" col-md-2 ">
                                    <select class="form-control" v-model="criterio" >
                                      <option value="titulo">Titulo</option>
                                      <option value="codigo">Codigo</option>
                                    </select>
                                </div>
								<div class=" col-md-6 ">
                                    <input type="text" v-model="buscar" @keyup.enter="listarProductos(1,buscar,criterio)" class="form-control col-md-2" placeholder="Texto a buscar">
									<button type="submit" @click="listarProductos(1,buscar,criterio)" class="btn btn-primary col-md-2"><i class="fa fa-search"></i> Buscar</button>
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
										
										<td class="col-md-4" >
											<img src="/uploads/'.{{ producto.image[0].producto_id }}/min_{{producto.image[0].file_name}}'" class="img-responsive"  style="width: 50%;" />
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
									<nav class="col-md-4">
                            <ul class="pagination">
                                <li class="page-item" v-if="this.pagination.current_page > 1">
                                    <a class="page-link" href="#" @click.prevent="cambiarPagina(this.pagination.current_page - 1,buscar,criterio)">Ant</a>
                                </li>
                                <li class="page-item"  v-for="page in pagesNumber" :key="page" :class="[page == isActived ? 'active' : '']">
                                    <a class="page-link" href="#" @click.prevent="cambiarPagina(page,buscar,criterio)" v-text="page"></a>
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

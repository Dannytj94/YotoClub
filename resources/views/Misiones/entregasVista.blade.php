@include('admin.title')

  <body>
     @include('maestro.navbarm')
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
         
         
        <h1>Saca Canicas</h1>

    <section class="our-webcoderskull padding-lg">
  		<div class="container">
  			<div class="row justify-content-center">
  				<div class="col-4">
  					<div class="row heading heading-icon">
	       				<h4>Selecciona un equipo</h4>
	       				<br>
	    			</div>
  				</div>	
  				<div class="col-4">
  					<form>
  						<div class="form-group">
						    <select class="form-control" id="exampleFormControlSelect1">
						      <option>Cuqui</option>
						      <option>Chuaqui</option>
						      <option>Morritos</option>					 
						    </select>
						</div>
  					</form>
  				</div>
  				<div class="col-4">
  					<a class="btn btn-primary">Buscar</a>
  				</div>
  			</div>
  <div class="row justify-content-center">

    		<div class="col-10">
    			<br>
	    		<div class="card text-center">

					<div class="card-body">
			    		<h5 class="card-title"><strong>Cuaqui</strong></h5>
			    		<p class="card-text">
						 Pepe- 5 canicas
						 Mario- 10 canicas 
						 Sofía - 7 canicas
						</p>
						<!-- Button trigger modal -->
                        <button type="button" style="margin-bottom: 15px" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                          Ver archivos adjuntos
                        </button>

                        	<!-- Modal -->
                        	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                         		<div class="modal-dialog" role="document">
                            		<div class="modal-content">
                              
                              			<div class="modal-body">
                               				<h5>No hay archivos disponibles</h5>
                              			</div>
                            			<br>
                                		<button type="button" class="btn btn-secondary" data-dismiss="modal">
                                			Cerrar
                                		</button>                           
                            		</div>
                          		</div>
                        	</div>

						<div class="card-footer text-muted">
							<div class="btn" data-toggle="modal" data-target="#calificarModal">
					    		<span data-feather="edit"></span> Calificar
							</div>
								<!-- Modal -->
	                        	<div class="modal fade" id="calificarModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	                         		<div class="modal-dialog" role="document">
	                            		<div class="modal-content">
	                              
	                              			<div class="modal-body">
	                              				<br>
	                               				<h5>Inserte calificacion:</h5>
	                               				 <form class="range-field">
									                <input type="range" min="0" max="100" />
									             </form>
	                              			</div>
	                            			<br>
	                                		<div class="modal-footer">
	                            				<button type="button" class="btn btn-secondary" data-dismiss="modal">
	                                				Cancelar
	                                			</button>
	                                			<button type="button" class="btn btn-primary" data-dismiss="modal">
	                                				Aceptar
	                                			</button>
	                            			</div>                          
	                            		</div>
	                          		</div>
	                        	</div>
						</div>
		    		</div>
		    		</div>
	    		</div>
	    		<br>
    		
    			
    		<div class="col-10">
    			<br>
	    		<div class="card text-center">

					<div class="card-body">
			    		<h5 class="card-title"><strong>Morritos</strong></h5>
			    		<p class="card-text">
				<br>
						Sandra- 17 canicas
						Armando- 0 canincas
						Jerry- 6 canincas


						</p>
						<!-- Button trigger modal -->
                        <button type="button" style="margin-bottom: 15px" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal1">
                          Ver archivos adjuntos
                        </button>

                        	<!-- Modal -->
                        	<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                         		<div class="modal-dialog" role="document">
                            		<div class="modal-content">
                              
                              			<div class="modal-body">
                               				<h5>No hay archivos disponibles</h5>
                              			</div>
                            			<br>
                                		<button type="button" class="btn btn-secondary" data-dismiss="modal">
                                			Cerrar
                                		</button>                           
                            		</div>
                          		</div>
                        	</div>
						<div class="card-footer text-muted">
							<div class="btn" data-toggle="modal" data-target="#calificarModal1" data-placement="top" title="Calificar">
					    		<span data-feather="edit"> </span> Calificar
							</div>
								<!-- Modal -->
	                        	<div class="modal fade" id="calificarModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	                         		<div class="modal-dialog" role="document">
	                            		<div class="modal-content">
	                              
	                              			<div class="modal-body">
	                               				<br>
	                               				<h5>Inserte calificacion:</h5>
	                               				 <form class="range-field">
									                <input type="range" min="0" max="100" />
									             </form>
	                              			</div>
	                            			<br>
	                            			<div class="modal-footer">
	                            				<button type="button" class="btn btn-secondary" data-dismiss="modal">
	                                				Cancelar
	                                			</button>
	                                			<button type="button" class="btn btn-primary" data-dismiss="modal">
	                                				Aceptar
	                                			</button>
	                            			</div>
	                                		                           
	                            		</div>
	                          		</div>
	                        	</div>
						</div>
		    		</div>
	    		</div>
	    		<br> 
    		</div>
  		</div>
</div>
</section>
</main>

	<script type="text/javascript">
		        $('#myModal').on('shown.bs.modal', function () {
		  $('#myInput').trigger('focus')
		})
    </script>
    <script type="text/javascript">
        $(document).ready(function(){
          $('[data-toggle="tooltip"]').tooltip(); 
        });
      </script>
  
  @include('admin.footer')

</html>
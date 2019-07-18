@include('admin.title')

  <body>
     @include('maestro.navbarm')
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
         
         
        <h1>Misiones</h1>

    <section class="our-webcoderskull padding-lg">
  		<div class="container">
  			<div class="row justify-content-center">
  				<div class="col-4">
  					<div class="row heading heading-icon">
	       				<h4>Selecciona una tierra</h4>
	       				<br>
	    			</div>
  				</div>	
  				<div class="col-4">
  					<form>
  						<div class="form-group">
						    <select class="form-control" id="exampleFormControlSelect1">
						      <option>Movimiento</option>
						      <option>Desarrollo cognitivo</option>
						      <option>Emociones</option>
						      <option>Ecología</option>						 
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
			    		<h5 class="card-title"><strong>Canica-saca-canicas</strong></h5>
			    		<p class="card-text">
						 Reúnete con dos compañeros o compañeras y tracen un círculo en el suelo de seis manos de diámetro. Si es un espacio con tierra será más fácil trazar el círculo.

						Coloca las 20 canicas al interior del círculo.  

						Cada jugador lanza su tiro y tiene que sacar el mayor número de canicas posible. 

						Deben de respetar los turnos. 

						Si un tiro queda dentro del círculo se quedará el tiro dentro del círculo y utilizar alguna canica de las que han ganado como tiro. 

						Registren el número de canicas que han ganado
						</p>
						<a href="/entregasVista" class="btn btn-primary" style="margin-bottom: 20px">Ver entregas</a>

						<div class="card-footer text-muted">
							<div class="row justify-content-center">
								<div class="col-8">
									<span data-feather="clock"></span>
					    			Fecha inicio   : <input type="date" name="fechaInicio">
								</div>
								<div class="col-8">
									<span data-feather="clock"></span>
					    			Fecha entrega :  <input type="date" name="fechaEntrega">
								</div>
								<div class="col-5">
									<button class="btn btn-primary" style="margin: 15px 15px;" data-toggle="modal" data-target="#confirmaModal">Programar Mision</button>

									<!-- Modal -->
                        	<div class="modal fade" id="confirmaModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                         		<div class="modal-dialog" role="document">
                            		<div class="modal-content">
                              
                              			<div class="modal-body">
                               				<h5>Misión programada exitosamente</h5>
                              			</div>
                            			<br>
                                		<button type="button" class="btn btn-secondary" data-dismiss="modal">
                                			Cerrar
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
    		</div>
    			
    		<div class="col-10">
    			<br>
	    		<div class="card text-center">

					<div class="card-body">
			    		<h5 class="card-title"><strong>Globo arriba</strong></h5>
			    		<p class="card-text">
						 Para esta misión necesitas:
						 <li>
						 	<lu>
						3 globos
					</lu>
				</li>
				<br>
						Esta misión necesitas hacerla con 4 compañeros y/o compañeras más.
						Necesitas hacerlo dentro de un salón o espacio donde no corra mucho viento. 

						Van a inflar los tres globos y es tarea de todos no dejar que los globos toquen el suelo. 
						No pueden usar ninguna parte del cuerpo para mantenerlo arriba, deben de soplarle para evitar que se caiga. 

						Escriban ¿cuál fue la estrategia para no dejar caer los globos?

						</p>
						<a href="/entregasVista" class="btn btn-primary" style="margin-bottom: 7px">Ver entregas</a>

						<div class="card-footer text-muted">
							<div class="row justify-content-center">
								<div class="col-8">
									<span data-feather="clock"></span>
					    			Fecha inicio   : <input type="date" name="fechaInicio1">
								</div>
								<div class="col-8">
									<span data-feather="clock"></span>
					    			Fecha entrega :  <input type="date" name="fechaEntrega1">
								</div>
								<div class="col-5">
									<button class="btn btn-primary" style="margin: 15px 15px;" data-toggle="modal" data-target="#confirmaModal1">Programar Mision</button>

									<!-- Modal -->
                        	<div class="modal fade" id="confirmaModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                         		<div class="modal-dialog" role="document">
                            		<div class="modal-content">
                              
                              			<div class="modal-body">
                               				<h5>Misión programada exitosamente</h5>
                              			</div>
                            			<br>
                                		<button type="button" class="btn btn-secondary" data-dismiss="modal">
                                			Cerrar
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

  @include('admin.footer')

</html>
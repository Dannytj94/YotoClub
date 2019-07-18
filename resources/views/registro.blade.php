@include('layout.title')
<body>
	<div class="background">
    	@include('layout.new')
    	
    		<div class="container row">
    			
	    		<div class="card text-center col-6 offset-3" style="width:60%; border-radius: 12px">

					<div class="card-body">
			    		<h5 class="card-title"><strong>Registro</strong></h5>
			    		<hr>
			    		@include('error')
			    		<form style="width:100%" class="row justify-content-center" action="{{url('/registrar')}}" method="POST">
			    			{{csrf_field()}}
			    			<div class="form-group col-10">
			    				Imagen
			    			</div>
			    			<div class="form-group col-10">
			    				<label for="heroe">Nombre de Héroe:</label>
						    	<input type="text" class="form-control" name="apodo" id="apodo" aria-describedby="emailHelp" placeholder="ej. Ligma">
			    			</div>
			    			<div class="form-group col-10 offset-1">
						    	<label for="correo">Correo Electrónico:</label>
						    	<input type="email" name="email" class="form-control" id="email" placeholder="ej. ejemplo@direccion.com">
						  </div>
						  <br>
						  <br>	
			    			<hr>
						  <br>
						  <div class="form-group col-10">
						    <label for="nombre">Nombre:</label>
						    <input type="text" class="form-control" name="nombre" id="nombre" aria-describedby="emailHelp" placeholder="ej. Juan">
						   </div>
						  <div class="form-group col-10">
						    <label for="apellido">Apellidos:</label>
						    <input type="text" class="form-control" name="apellidos" id="apellidos" placeholder="ej. Ramírez">
						  </div>
						  <div class="form-group col-10">
						    <label for="password">Contraseña:</label>
						    <input type="password" class="form-control" name="password" id="password" placeholder="">
						  </div>

						  <div class="col-4"></div>
						  <!--<div class="form-chec col-4">
						    <label for="sexo">Sexo: </label>
						    <select class="form-control" id="sexo">
						      <option value="1">Niño</option>
						      <option value="0">Niña</option>		  </select>
						  </div> -->
						  <div class="col-4"></div>
						  
						  <button type="submit" class="btn btn-primary " style="padding: 10px; margin: 15px">Aceptar</button>
						</form>

		    		</div>
	    		</div>


    		</div>

			<br>
	
 @include('layout.footer')
 	</div>
 <script>
        $(document).ready(function(){
          $('[data-toggle="tooltip"]').tooltip(); 
        });
      </script>
</body>
</html>

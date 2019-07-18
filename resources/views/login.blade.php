@include('layout.title')
<body>
	<div class="background">
    	@include('layout.new')
    	
    		<div class="container row">
    			
	    		<div class="card text-center col-6 offset-3" style="width:60%; border-radius: 12px">

					<div class="card-body">
			    		<h5 class="card-title"><strong>Login</strong></h5>
			    		<hr>
			    		@include('error')
			    		<form style="width:100%" class="row justify-content-center" method="POST" action="{{url('/verificar')}}">
			    			{{csrf_field()}}
			    			<div class="form-group col-10">
			    				<label for="apodo">Nombre de Héroe:</label>
						    	<input type="text" class="form-control" name="apodo" id="apodo" aria-describedby="emailHelp" placeholder="ej. Ligma">
			    			</div>
			    			
						  <div class="form-group col-10">
						    <label for="password">Contraseña:</label>
						    <input type="password" class="form-control" name="password" id="password" placeholder="">
						  </div>
						  
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

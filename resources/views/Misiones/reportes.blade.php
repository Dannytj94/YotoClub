@include('admin.title')

  <body>
     @include('maestro.navbarm')
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
         
         
        <h1>Reportes</h1>

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
  			<br>
				<img style="padding-left: 170px" src="img/grafica.png">

 
</div>
</section>


  </body>
  @include('admin.footer')

</html>
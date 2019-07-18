  @include('admin.title')
<link rel="stylesheet" type="text/css" href="css/kidcard.css">
  <body>
     @include('maestro.navbarm')
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
         
        <h1>Alumnos</h1>

    <section class="our-webcoderskull padding-lg">
  		<div class="container">
  			<div class="row justify-content-center">
  				<div class="col-4">
  					<div class="row heading heading-icon">
	       				<h4>Selecciona un grupo:</h4>
	       				<br>
	    			</div>
  				</div>	
  				<div class="col-4">
  					<form>
  						<div class="form-group">
						    <select class="form-control" id="exampleFormControlSelect1">
						      <option>Grupo</option>
						      <option>Otro Grupo</option>
						      <option>Tango</option>
						      <option>Mango</option>						 
						    </select>
						</div>
  					</form>
  				</div>
  				<div class="col-4">
  					<a class="btn btn-primary">Buscar</a>
  				</div>
  			</div>
	    		
        <ul class="row">
      		<li class="col-12 col-md-6 col-lg-3">
          		<div class="cnt-block equal-hight" style="height: 349px;">
            		<figure><img src="http://www.webcoderskull.com/img/team1.png" class="img-responsive" alt=""></figure>
            		<h3><a href="http://www.webcoderskull.com/">Abraham Guevara</a></h3>
           			<p>12 años</p>
           			<p>Equipo: Cuaqui</p>
            		<ul class="follow-us clearfix">
		             	<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
		             	<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
		             	<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
		            </ul>
          		</div>
      		</li>
      		<li class="col-12 col-md-6 col-lg-3">
          		<div class="cnt-block equal-hight" style="height: 349px;">
            		<figure><img src="http://www.webcoderskull.com/img/team2.png" class="img-responsive" alt=""></figure>
            		<h3><a href="http://www.webcoderskull.com/">Juan Ángel Peñalva</a></h3>
           			<p>12 años</p>
           			<p>Equipo: Cuaqui</p>
            		<ul class="follow-us clearfix">
		             	<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
		             	<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
		             	<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
		            </ul>
          		</div>
      		</li>
      		<li class="col-12 col-md-6 col-lg-3">
          		<div class="cnt-block equal-hight" style="height: 349px;">
            		<figure><img src="http://www.webcoderskull.com/img/team3.png" class="img-responsive" alt=""></figure>
            		<h3><a href="http://www.webcoderskull.com/">Jose Luis Pedroza</a></h3>
           			<p>11 años</p>
           			<p>Equipo: Cuaqui</p>
            		<ul class="follow-us clearfix">
		             	<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
		             	<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
		             	<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
		            </ul>
          		</div>
      		</li>
      		<li class="col-12 col-md-6 col-lg-3">
          		<div class="cnt-block equal-hight" style="height: 349px;">
            		<figure><img src="http://www.webcoderskull.com/img/team4.png" class="img-responsive" alt=""></figure>
            		<h3><a href="http://www.webcoderskull.com/">Sergio Hernández</a></h3>
           			<p>10 años</p>
           			<p>Equipo: Morritos</p>
            		<ul class="follow-us clearfix">
		             	<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
		             	<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
		             	<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
		            </ul>
          		</div>
      		</li>
      		<li class="col-12 col-md-6 col-lg-3">
          		<div class="cnt-block equal-hight" style="height: 349px;">
            		<figure><img src="http://www.webcoderskull.com/img/team3.png" class="img-responsive" alt=""></figure>
            		<h3><a href="http://www.webcoderskull.com/">Darío Alcántara</a></h3>
           			<p>9 años</p>
           			<p>Equipo: Morritos</p>
            		<ul class="follow-us clearfix">
		             	<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
		             	<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
		             	<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
		            </ul>
          		</div>
      		</li>
      		<li class="col-12 col-md-6 col-lg-3">
          		<div class="cnt-block equal-hight" style="height: 349px;">
            		<figure><img src="http://www.webcoderskull.com/img/team1.png" class="img-responsive" alt=""></figure>
            		<h3><a href="http://www.webcoderskull.com/">Martín Molinillo</a></h3>
           			<p>8 años</p>
           			<p>Equipo: Morritos</p>
            		<ul class="follow-us clearfix">
		             	<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
		             	<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
		             	<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
		            </ul>
          		</div>
      		</li>
  		</ul>
  	</div>
  </section>

  </body>
  @include('admin.footer')
</html>
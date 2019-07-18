@include('admin.title')

  <body>
     @include('maestro.navbarm')
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
         
         
        <h1>Calificaciones</h1>

    <section class="our-webcoderskull padding-lg">
  		<div class="container">
  			<div class="row justify-content-center">
  				<div class="col-4">
  					<div class="row heading heading-icon">
	       				<h4>Selecciona un niño</h4>
	       				<br>
	    			</div>
  				</div>	
  				<div class="col-4">
  					<form>
  						<div class="form-group">
						    <select class="form-control" id="exampleFormControlSelect1">
						      <option>Alejandro</option>
						      <option>Roberto</option>
						      <option>Ana</option>					 
						    </select>
						</div>
  					</form>
  				</div>



  				<div class="col-4">
  					<a class="btn btn-primary">Buscar</a>
  				</div>


  			</div>
  			
        <br>
        <h4>Alejandro</h4>
        <br>
       
          <div class="row">
            <div class="col">
                <p> <strong>Movimiento</strong>  </p>
            </div>
            <div class="col">
                <form class="range-field">
                <input type="range" min="0" max="100" />
                </form>
              </div>
        </div>

         <div class="row">
            <div class="col">
                <p> <strong>Desarrollo Cognitivo</strong>  </p>
            </div>
            <div class="col">
                <form class="range-field">
                <input type="range" min="0" max="100" />
                </form>
              </div>
        </div>
         <div class="row">
            <div class="col">
                <p> <strong>Arte</strong>  </p>
            </div>
            <div class="col">
                <form class="range-field">
                <input type="range" min="0" max="100" />
                </form>
              </div>
        </div>
         <div class="row">
            <div class="col">
                <p> <strong>Diversidad</strong>  </p>
            </div>
            <div class="col">
                <form class="range-field">
                <input type="range" min="0" max="100" />
                </form>
              </div>
        </div>
         <div class="row">
            <div class="col">
                <p> <strong>Ecología</strong>  </p>
            </div>
            <div class="col">
                <form class="range-field">
                <input type="range" min="0" max="100" />
                </form>
              </div>
        </div>
         <div class="row">
            <div class="col">
                <p> <strong>Desarrollo manual </strong>  </p>
            </div>
            <div class="col">
                <form class="range-field">
                <input type="range" min="0" max="100" />
                </form>
              </div>
        </div>
         <div class="row">
            <div class="col">
                <p> <strong>Desarrollo Cognitivo</strong>  </p>
            </div>
            <div class="col">
                <form class="range-field">
                <input type="range" min="0" max="100" />
                </form>
              </div>
        </div>

</div>
</section>


  </body>
  @include('admin.footer')

</html>
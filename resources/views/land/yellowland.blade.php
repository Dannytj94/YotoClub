@include('layout.title')
  <body>

	<div class="background_tierraAmarilla">
    	@include('layout.new')
    	<div>
			@include('layout.sidenav')
  		</div>
        <div class="row">
            <div class="col-10">
                <div class="container">
                    <img class= "imgAmarilla" src="../img/8TierraAmarilla.png" alt="Tierra Amarilla" >
                </div>
            </div>
            <div class="col-2 text-center buttons-top-margin">
                <a href="/misionesyellow" data-toggle="tooltip" data-placement="left" title="Misiones"><img class="imgbarrita1" src="img/BotonMisiones.png" alt="Tierra Azul" ></a>
                <br>
                <a href="/yellowstory" data-toggle="tooltip" data-placement="left" title="Personajes e Historias"><img class="imgbarrita2" src="img/BotonPersonajeseHistorias.png" alt="Tierra Azul" ></a>
                <br>
                <a href="https://www.minijuegos.com/juego/super-smash-bros" data-toggle="tooltip" data-placement="left" title="Videojuegos"><img class="imgbarrita3" src="img/BotonVJ.png" alt="Tierra Azul" ></a>
                <br>
                <a href="/" data-toggle="tooltip" data-placement="left" title="Regresar"><img class="imgbarrita4" src="img/BotonReturn.png" alt="Tierra Azul" ></a>
            </div>
        </div>
     </div>
  @include('layout.footer')
    <script>
        $(document).ready(function(){
          $('[data-toggle="tooltip"]').tooltip(); 
        });
      </script>
    </body>
</html>


	
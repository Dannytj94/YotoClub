@include('layout.title')
  <body class="background">

    @include('layout.new')

	
    <div>
    @include('layout.sidenav')
  </div>

     <div class="container">
        <h1>Entregar Misión </h1>
        <br>
        <div class="card">
            <h5 class="card-header">Saca-Canicas</h5>
             <div class="card-body">
                
                <form>
                    <div class="row justify-content-center">
                        <div class="col-4 ">
                            <h5>Grupo: 3</h5>
                        </div>
                        <div class="col-4 ">
                        </div>
                        <div class="col-4">
                            <h5>Equipo: Morritos</h5>
                        </div>
                    </div>
                    <br/>
                    <div class="row align-items-center justify-content-center">
                        <div class="col-7">
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Descripción de la entrega:</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <label for="exampleFormControlFile1">Archivo de evidencia:</label>
                                <input type="file" class="form-control-file" id="exampleFormControlFile1">
                            </div>
                        </div>
                        </div>
                    </form>
                </div>
                <div class="card-footer">
                    
                    <div class="row justify-content-center">
                        <div class="col-1">
                                 <!-- Button trigger modal -->
                            <button  type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                              Entregar
                            </button>

                                 <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                  
                                  <div class="modal-body">
                                    <h5>Tarea entregada</h5>
                                  </div>
                                 <br>
                                     <button  type="button" class="btn btn-secondary" data-dismiss="modal"> Cerrar </button> 
                                    
                                
                                </div>
                              </div>
                            </div> 
                        </div>
                    </div>

                           
                        </div>
                    </div>

                </form>
              
        




		<br>

     </div>

     <script type="text/javascript">
        $('#myModal').on('shown.bs.modal', function () {
  $('#myInput').trigger('focus')
})
    </script>


   
    @include('layout.footer')
</html>
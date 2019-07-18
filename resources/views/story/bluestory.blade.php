

@include('layout.title')
  <body class="background_tierraAzul">

   
    <div class="background_tierraAzul comfortaa">
     @include('layout.new')
     <div class="main">
      <div class="row">
          <div class="col-2">
            @include('layout.sidenav')
          </div>

          <div class="col-10">
            @include('land.alllands')
          </div>
      </div>
      <br>

    
     
    <div>
    
  </div>

<div class="container comfortaa">
  <h1 class="centered"> Tierra de Yalliz</h1>

  @include('layout.bigcard')

</div>




<br>
 
<br>
    <div class="container">
      <div class="row">
        <div class="col-sm">
          @include('layout.card')
        </div>
        <div class="col-sm">
          @include('layout.card2')
        </div>
        <div class="col-sm">
          @include('layout.card3')
        </div>
      </div>
    </div>
    <br>
    <br>

    @include('layout.footer')
  </div>
    
  
 </div>
    </body>


 </html>


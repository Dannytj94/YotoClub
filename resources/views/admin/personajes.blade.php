 <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Administrador</title>

  <!--meta name="csrf-token" content="kFrqPOb5TWYFf6SBWtwMHuJk5a6a5oyhxiJHWNWu"-->
  <meta name="csrf-token" content="{{ csrf_token() }}"> 

        <link rel="stylesheet" href="assets/grocery-crud/css/bootstrap/bootstrap.css">
        <link rel="stylesheet" href="assets/grocery-crud/css/jquery-ui/jquery-ui.css">
        <link rel="stylesheet" href="assets/grocery-crud/css/grocery-crud-v2.6.10.7cd5c9e.css">
          <!-- Bootstrap core CSS -->
    <link href="css/boot.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/admincss.css" rel="stylesheet">
  </head>


<body>
  <br>
   @include('admin.navbar')
    <div class="main">

      <div class="row">
          <div class="col-2">
           
          </div>

          <div class="col-10">
            <div class="container">
            <h1>Gestor de personajes</h1>
            <br>
             {!! $output !!}
          </div>
        </div>
      </div>

 
  

 
        <script src="assets/grocery-crud/js/jquery/jquery.js"></script>
        <script src="assets/grocery-crud/js/libraries/jquery-ui.js"></script>
        <script src="assets/grocery-crud/js/libraries/react/react.v16.5.2.js"></script>
        <script src="assets/grocery-crud/js/libraries/modernizr-custom.js"></script>
        <script src="assets/grocery-crud/js/build/grocery-crud-v2.6.10.7cd5c9e.js"></script>

  <script>
    if (typeof $ !== 'undefined') {
      $(document).ready(function () {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
      });
    }




  </script>
  <!--

     <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
         <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
   -->
    <!-- Icons -->
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
      feather.replace()
    </script>
</body>
</html>
@include('admin.title')
<?php 
$connect = mysqli_connect("localhost", "root", "", "yotodb");
$query1 = DB::select("SELECT * FROM usuarios WHERE user_type = 'nino' ORDER BY id ASC");
$result1 = json_decode(json_encode($query1), true);

$query2 = DB::select("SELECT * FROM grupo ORDER BY idGrupo ASC");
$result2 = json_decode(json_encode($query2), true);
//$result = mysqli_query($connect, $query);
//$query2 = "SELECT * FROM grupo ORDER BY id ASC";
//$result2 = mysqli_query($connect, $query2);
//$var1 = mysqli_fetch_array(mysqli_query($connect, $query),MYSQLI_ASSOC);
?>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.js"></script>
  <body>
     @include('admin.navbar')
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
          
        <h1>Creación de Grupos</h1>
            <br>

        <div class="container">
		<div class="row">
			<div class="col-12 offset-7">
				<button class="btn btn-primary" id="nuevoGrupo">Agregar Grupo</button>
			</div>
			<br>
			<br>
			<div class="col">
			   	<h1 align="center">Niños</h1>
			   	<br />
			   	<ul class="list-unstyled" id="nombres">
			   		<?php 
			   			foreach ($result1 as $row ) {
			   				echo '<li class="list-drag" id="draggable'.$row["id"].'">'.$row["nombre"].'</li>';
			   			}
			   		?>
			   		<!-- <?php 
			   			//while($row = mysqli_fetch_array($result)) {
			    		//echo '<li class="list-drag" id="draggable'.$row["id"].'">'.$row["nombre"].'</li>';
			   			//}
			   		?> -->
			   	</ul>
			   	<input type="hidden" name="page_order_list" id="page_order_list" />
			</div>
			<div class="col">
				<h1 align="center">Grupos</h1>
			   	<br />
			   	<ul class="list-unstyled" id="grupos">
			   		<?php 
			   			foreach ($result2 as $row ) {
			   				echo '<li class="list-reciever" id="droppable">'.$row["nombre"].'</li>';
			   			}
			   		?>
			   		<!-- <?php 
			   			//while($row = mysqli_fetch_array($result2)) {
			    		//echo '<li class="list-reciever" id="droppable">'.$row["nombre"].'</li>';
			   			//}
			   		?> -->
			   	</ul>
			</div>
		</div>
  	</div>
  </body>
  
 <script>
		$(document).on('click','#nuevoGrupo',function() {
        	$('#grupos').append('<li class="list-reciever ui-droppable" id="droppable">Nuevo Grupo</li>')
    	})

		$(document).ready(function(){
			$( "#nombres" ).sortable({
		 		placeholder : "ui-state-highlight",
		  		update  : function(event, ui) {
		   			var page_id_array = new Array();
		   			$('li').each(function(){
		    			page_id_array.push($(this).attr("id"));
		   			});
		   			$.ajax({
		    			url:"update.php",
		    			method:"POST",
		    			data:{page_id_array:page_id_array},
		    			success:function(data) {
		     				alert(data);
		    			}
		   			});
		  		}
		 	});

		});
		$('.list-drag').draggable();
		$( ".list-reciever" ).droppable({
      		drop: function( event, ui ) {
      			console.log(event,'---------------EVENT')
      			console.log($(this),'.-------------------------THIS')
      			console.log(ui.draggable,'------------------------UUUUIII')
        		$(ui.draggable).remove()
      		}
    	});

	</script>
  @include('admin.footer')
</html>
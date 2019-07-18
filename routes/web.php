<?php


Route::get('/', 'PostController@index');

Route::get('/post/create', "PostController@create");

Route:: get('/registro', function(){

	return view('registro');
});
Route:: get('/login', function(){

	return view('login');
});

Route::post('/registrar', 'LoginUsuarioController@RegistroNino');

Route::post('/verificar', 'LoginUsuarioController@LoginUsuario');
//lands

Route:: get('/pinkland', function(){

	return view('land.pinkland');
});
Route:: get('/greenland', function(){

	return view('land.greenland');
});
Route:: get('/blueland', function(){

	return view('land.blueland');
});
Route:: get('/purpleland', function(){

	return view('land.purpleland');
});
Route:: get('/whiteland', function(){

	return view('land.whiteland');
});
Route:: get('/redland', function(){

	return view('land.redland');
});
Route:: get('/yellowland', function(){

	return view('land.yellowland');
});




Route:: get('/yellowstory', function(){

	return view('story.yellowstory');
});
Route:: get('/pinkstory', function(){

	return view('story.pinkstory');
});
Route:: get('/greenstory', function(){

	return view('story.greenstory');
});
Route:: get('/bluestory', function(){

	return view('story.bluestory');
});
Route:: get('/purplestory', function(){

	return view('story.purplestory');
});
Route:: get('/whitestory', function(){

	return view('story.whitestory');
});
Route:: get('/redstory', function(){

	return view('story.redstory');
});



//Maestro
Route:: get('/alumnos', function(){

	return view('maestro.alumnos');
});

Route:: get('/listaMisiones', function(){

	return view('maestro.listamisiones');
});
Route:: get('/calificacionesm', function(){

	return view('misiones.calificacionesm');
});






//Misiones
Route:: get('/misionesblue', function(){

	return view('misiones.misionesblueland');
});

Route:: get('/misionesyellow', function(){

	return view('misiones.misionesyellowland');
});

Route:: get('/misionesgreen', function(){

	return view('misiones.misionesgreenland');
});

Route:: get('/misionesred', function(){

	return view('misiones.misionesredland');
});

Route:: get('/misioneswhite', function(){

	return view('misiones.misioneswhiteland');
});

Route:: get('/misionespink', function(){

	return view('misiones.misionespinkland');
});

Route:: get('/misionespurple', function(){

	return view('misiones.misionespurpleland');
});

Route:: get('/entregas', function(){

	return view('misiones.entregas');
});

Route:: get('/entregasVista', function(){

	return view('misiones.entregasVista');
});


Route:: get('/creaGrupo', function(){

	return view('admin.creaGrupo');
});

Route:: get('/reportesm', function(){

	return view('misiones.reportes');
});



Route:: get('/admin', function(){

	return view('admin.mainview');
});
Route:: get('/calificaciones', function(){

	return view('admin.calificaciones');
});
Route:: get('/equipos', function(){

	return view('admin.equipos');
});
Route:: get('/grupos', function(){

	return view('admin.grupos');
});
Route:: get('/historias', function(){

	return view('admin.historias');
});
Route:: get('/maestros', function(){

	return view('admin.maestros');
});
Route:: get('/misiones', function(){

	return view('admin.misiones');
});

Route:: get('/ninos', function(){

	return view('admin.ninos');
});
Route:: get('/personajes', function(){

	return view('admin.personajes');
});
Route:: get('/historias', function(){

	return view('admin.historias');
});
Route:: get('/planDeEstudios', function(){

	return view('admin.plan');
});
Route:: get('/reportes', function(){

	return view('admin.reportes');
});
Route:: get('/administradores', function(){

	return view('admin.administradores');
});

// web.php
Route::get('historias', 'CustomersController@datagrid');
Route::post('historias', 'CustomersController@datagrid');

Route::get('/prueba', 'CustomersController@datagrid2');
Route::post('/prueba', 'CustomersController@datagrid2');

Route::get('/administradores', 'CustomersController@datagrid3');
Route::post('/administradores', 'CustomersController@datagrid3');

Route::get('/grupos', 'CustomersController@datagrid4');
Route::post('/grupos', 'CustomersController@datagrid4');

Route::get('/equipos', 'CustomersController@datagrid5');
Route::post('/equipos', 'CustomersController@datagrid5');

Route::get('/personajes', 'CustomersController@datagrid6');
Route::post('/personajes', 'CustomersController@datagrid6');

Route::get('/planEstudios', 'CustomersController@datagrid7');
Route::post('/planEstudios', 'CustomersController@datagrid7');

Route::get('/ninos', 'CustomersController@datagrid8');
Route::post('/ninos', 'CustomersController@datagrid8');

Route::get('/misiones', 'CustomersController@datagrid9');
Route::post('/misiones', 'CustomersController@datagrid9');




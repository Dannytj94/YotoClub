<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use GroceryCrud\Core\GroceryCrud;
class CustomersController extends Controller
{
    /**
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
    private function _getDatabaseConnection() {
        $databaseConnection = config('database.default');
        $databaseConfig = config('database.connections.' . $databaseConnection);
        return [
            'adapter' => [
                'driver' => 'Pdo_Mysql',
                'database' => $databaseConfig['database'],
                'username' => $databaseConfig['username'],
                'password' => $databaseConfig['password'],
                'charset' => 'utf8'
            ]
        ];
    }
    /**
     * Show the datagrid for customers
     *
     * @return \Illuminate\Http\Response
     */
    public function datagrid()
    {
        $database = $this->_getDatabaseConnection();
        $config = config('grocerycrud');
        $crud = new GroceryCrud($config, $database);
        $crud->setTable('historia');
        $crud->setSubject('historia', 'historia');
        $output = $crud->render();
        if ($output->isJSONResponse) {
            return response($output->output, 200)
                  ->header('Content-Type', 'application/json')
                  ->header('charset', 'utf-8');
        }
        $css_files = $output->css_files;
        $js_files = $output->js_files;
        $output = $output->output;
        return view('default_template', [
            'output' => $output,
            'css_files' => $css_files,
            'js_files' => $js_files
        ]);
    }

    public function datagrid2()
    {
        $database = $this->_getDatabaseConnection();
        $config = config('grocerycrud');
        $crud = new GroceryCrud($config, $database);
        $crud->setTable('maestros');
        $crud->setSubject('maestros', 'maestros');
        $output = $crud->render();
        if ($output->isJSONResponse) {
            return response($output->output, 200)
                  ->header('Content-Type', 'application/json')
                  ->header('charset', 'utf-8');
        }
        $css_files = $output->css_files;
        $js_files = $output->js_files;
        $output = $output->output;
        return view('prueba', [
            'output' => $output,
            'css_files' => $css_files,
            'js_files' => $js_files
        ]);
    }
    
      public function datagrid3()
    {
        $database = $this->_getDatabaseConnection();
        $config = config('grocerycrud');
        $crud = new GroceryCrud($config, $database);
        $crud->setTable('administrador');
        $crud->setSubject('administradores', 'administradores');
        $output = $crud->render();
        if ($output->isJSONResponse) {
            return response($output->output, 200)
                  ->header('Content-Type', 'application/json')
                  ->header('charset', 'utf-8');
        }
        $css_files = $output->css_files;
        $js_files = $output->js_files;
        $output = $output->output;
        return view('admin.administradores', [
            'output' => $output,
            'css_files' => $css_files,
            'js_files' => $js_files
        ]);
    }
    
        public function datagrid4()
    {
        $database = $this->_getDatabaseConnection();
        $config = config('grocerycrud');
        $crud = new GroceryCrud($config, $database);
        $crud->setTable('grupo');
        $crud->setSubject('grupos', 'grupos');
        $crud->setRelation('idPlanEstudio','planestudio','PlanEstudios');
        $crud->displayAs('idPlanEstudio','Plan de Estudios');
        $crud->setRelation('idMaestro','maestros','nombre');
        $crud->displayAs('idMaestro','Maestro');
        $crud->setRelation('idAlbergue','albergue','nombre');
        $crud->displayAs('idAlbergue','Albergue');
        $output = $crud->render();
        if ($output->isJSONResponse) {
            return response($output->output, 200)
                  ->header('Content-Type', 'application/json')
                  ->header('charset', 'utf-8');
        }
        $css_files = $output->css_files;
        $js_files = $output->js_files;
        $output = $output->output;
        return view('admin.grupos', [
            'output' => $output,
            'css_files' => $css_files,
            'js_files' => $js_files
        ]);
    }

    public function datagrid5()
    {
        $database = $this->_getDatabaseConnection();
        $config = config('grocerycrud');
        $crud = new GroceryCrud($config, $database);
        $crud->setTable('equipo');
        $crud->setSubject('equipos', 'equipos');
        $crud->setRelation('idGrupo','grupo','nombre');
        $crud->displayAs('idGrupo','Grupo');
        $output = $crud->render();
        if ($output->isJSONResponse) {
            return response($output->output, 200)
                  ->header('Content-Type', 'application/json')
                  ->header('charset', 'utf-8');
        }
        $css_files = $output->css_files;
        $js_files = $output->js_files;
        $output = $output->output;
        return view('admin.equipos', [
            'output' => $output,
            'css_files' => $css_files,
            'js_files' => $js_files
        ]);
    }
    
     public function datagrid6()
    {
        $database = $this->_getDatabaseConnection();
        $config = config('grocerycrud');
        $crud = new GroceryCrud($config, $database);
        $crud->setTable('personaje');
        $crud->setSubject('personajes', 'personajes');
        $output = $crud->render();
        if ($output->isJSONResponse) {
            return response($output->output, 200)
                  ->header('Content-Type', 'application/json')
                  ->header('charset', 'utf-8');
        }
        $css_files = $output->css_files;
        $js_files = $output->js_files;
        $output = $output->output;
        return view('admin.personajes', [
            'output' => $output,
            'css_files' => $css_files,
            'js_files' => $js_files
        ]);
    }
    
      public function datagrid7()
    {
        $database = $this->_getDatabaseConnection();
        $config = config('grocerycrud');
        $crud = new GroceryCrud($config, $database);
        $crud->setTable('planestudio');
        $crud->setSubject('planestudios', 'planestudios');
        $output = $crud->render();
        if ($output->isJSONResponse) {
            return response($output->output, 200)
                  ->header('Content-Type', 'application/json')
                  ->header('charset', 'utf-8');
        }
        $css_files = $output->css_files;
        $js_files = $output->js_files;
        $output = $output->output;
        return view('admin.plan', [
            'output' => $output,
            'css_files' => $css_files,
            'js_files' => $js_files
        ]);
    }
    
         public function datagrid8()
    {
        $database = $this->_getDatabaseConnection();
        $config = config('grocerycrud');
        $crud = new GroceryCrud($config, $database);
        $crud->setTable('nino');
        $crud->setSubject('ninos', 'ninos');
        $crud->setRelation('idEquipo','equipo','nombre');
        $crud->displayAs('idEquipo','Equipo');
        $output = $crud->render();
        if ($output->isJSONResponse) {
            return response($output->output, 200)
                  ->header('Content-Type', 'application/json')
                  ->header('charset', 'utf-8');
        }
        $css_files = $output->css_files;
        $js_files = $output->js_files;
        $output = $output->output;
        return view('admin.ninos', [
            'output' => $output,
            'css_files' => $css_files,
            'js_files' => $js_files
        ]);
    }
    public function datagrid9()
    {
        $database = $this->_getDatabaseConnection();
        $config = config('grocerycrud');
        $crud = new GroceryCrud($config, $database);
        $crud->setTable('mision');
        $crud->setSubject('misiones', 'misiones');
        $output = $crud->render();
        if ($output->isJSONResponse) {
            return response($output->output, 200)
                  ->header('Content-Type', 'application/json')
                  ->header('charset', 'utf-8');
        }
        $css_files = $output->css_files;
        $js_files = $output->js_files;
        $output = $output->output;
        return view('admin.misiones', [
            'output' => $output,
            'css_files' => $css_files,
            'js_files' => $js_files
        ]);
    }
    
  
    



}
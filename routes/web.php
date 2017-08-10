<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

/*
Auth::routes();
*/
// Authentication Routes...
Route::get('login', [
    'as' => 'login',
    'uses' => 'Auth\LoginController@showLoginForm'
]);
Route::post('login', [
    'as' => '',
    'uses' => 'Auth\LoginController@login'
]);
Route::post('logout', [
    'as' => 'logout',
    'uses' => 'Auth\LoginController@logout'
]);
// Password Reset Routes...
Route::post('password/email', [
    'as' => 'password.email',
    'uses' => 'Auth\ForgotPasswordController@sendResetLinkEmail'
]);
Route::get('password/reset', [
    'as' => 'password.request',
    'uses' => 'Auth\ForgotPasswordController@showLinkRequestForm'
]);
Route::post('password/reset', [
    'as' => '',
    'uses' => 'Auth\ResetPasswordController@reset'
]);
Route::get('password/reset/{token}', [
    'as' => 'password.reset',
    'uses' => 'Auth\ResetPasswordController@showResetForm'
]);

// Registration Routes...
Route::get('register', [
    'as' => 'register',
    'uses' => 'Auth\RegisterController@showRegistrationForm'
]);
Route::post('register', [
    'as' => '',
    'uses' => 'Auth\RegisterController@register'
]);

Route::get('/campanhas', [
    'as' => 'campanhas',
    'uses' => 'HomeController@campanhas'
]);

Route::middleware(['auth'])->group(function () {

    Route::middleware(['check-permission:all'])->group(function () {

        Route::get('/home', [
            'as' => 'home',
            'uses' => 'HomeController@home'
        ]);
        Route::get('/hospitais', [
            'as' => 'hospitais',
            'uses' => 'HomeController@hospitais'
        ]);
        Route::get('/laboratorios', [
            'as' => 'laboratorios',
            'uses' => 'HomeController@laboratorios'
        ]);
    });

    Route::middleware(['check-permission:admin'])->group(function () {

        Route::get('/admin/', [
            'as' => 'admin.index',
            'uses' => 'Admin\AdminController@index'
        ]);

        Route::get('/admin/credentials', [
            'as' => 'admin.credentials',
            'uses' => 'Admin\AdminController@credentials'
        ]);
        Route::get('/admin/monitoring', [
            'as' => 'admin.monitoring',
            'uses' => 'Admin\AdminController@monitoring'
        ]);
        Route::get('/admin/reports', [
            'as' => 'admin.reports',
            'uses' => 'Admin\AdminController@reports'
        ]);

    });

    Route::middleware(['check-permission:doador'])->group(function () {
        Route::get('/doador/', [
            'as' => 'doador.index',
            'uses' => 'Doador\DoadorController@index'
        ]);
        Route::get('/doador/create', [
            'as' => 'doador.create',
            'uses' => 'Doador\DoadorController@create'
        ]);
        Route::post('/doador/store', [
            'as' => 'doador.store',
            'uses' => 'Doador\DoadorController@store'
        ]);
        Route::get('/doador/agendar', [
            'as' => 'doador.agendar',
            'uses' => 'Doador\AgendamentoController@create'
        ]);
        Route::post('/doador/agendar', [
            'as' => 'agenda.store',
            'uses' => 'Doador\AgendamentoController@store'
        ]);
    });

    Route::middleware(['check-permission:hosp.enfermeiro'])->group(function () {
        Route::get('/hospital/', [
            'as' => 'hospital.index',
            'uses' => 'Hospital\HospitalController@index'
        ]);
        Route::get('/hospital/solicitar-sangue', [
            'as' => 'hospital.solicitar-sangue',
            'uses' => 'Hospital\HospitalController@solicitarSangue'
        ]);
        Route::get('/hospital/historico-solicitacoes', [
            'as' => 'hospital.historico-solicitacoes',
            'uses' => 'Hospital\HospitalController@historicoSolicitacoes'
        ]);
    });

    Route::middleware(['check-permission:lab.tecnico'])->group(function () {
        Route::get('/laboratorio/coletar-sangue', [
            'as' => 'laboratorio.coletar-sangue',
            'uses' => 'Laboratorio\LaboratorioController@coletarSangue'
        ]);
    });
    Route::middleware(['check-permission:lab.biomedico'])->group(function () {
        Route::get('/laboratorio/analise-sangue', [
            'as' => 'laboratorio.analise-sangue',
            'uses' => 'Laboratorio\LaboratorioController@analiseSangue'
        ]);
    });
    Route::middleware(['check-permission:lab.logistico'])->group(function () {
        Route::get('/laboratorio/estoque-sangue', [
            'as' => 'laboratorio.estoque-sangue',
            'uses' => 'Laboratorio\LaboratorioController@estoqueSangue'
        ]);
    });
    Route::middleware(['check-permission:lab.gerente'])->group(function () {
        Route::get('/laboratorio/agenda', [
            'as' => 'laboratorio.agenda',
            'uses' => 'Laboratorio\LaboratorioController@agenda'
        ]);
        Route::get('/laboratorio/relatorios', [
            'as' => 'laboratorio.relatorios',
            'uses' => 'Laboratorio\LaboratorioController@relatorios'
        ]);
        Route::get('/laboratorio/comunicacao', [
            'as' => 'laboratorio.comunicacao',
            'uses' => 'Laboratorio\LaboratorioController@comunicacao'
        ]);
    });
});

/*
 Route::group(['middleware' => 'auth'], function () {
    Route::get('permissions-all-users', [
        'middleware' => 'check-permission:user|admin|superadmin',
        'uses' => 'HomeController@allUsers']);

    Route::get('permissions-admin-superadmin', [
        'middleware' => 'check-permission:admin|superadmin',
        'uses' => 'HomeController@adminSuperadmin']);

    Route::get('permissions-superadmin', [
        'middleware' => 'check-permission:superadmin',
        'uses' => 'HomeController@superadmin']);

});*/

/*
Route::resource('doadores', 'DoadorController');

Route::get('/doador/login', [
    'as' => 'doador.login',
    'uses' => 'DoadorController@login'
]);

Route::get('/doador/novo', [
    'as' => 'doador.create',
    'uses' => 'DoadorController@create'
]);

Route::post('/doador/salvar', [
        'as' => 'doador.store',
        'uses' => 'DoadorController@store'
    ]
);
*/
//Auth::routes();

//Route::post('/login' , 'Auth\AuthController@authenticate');


/*Simulacao sendo cliente
Route::get('/', function () {
    $query = http_build_query([
        'client_id' => '3',
        'redirect_uri' => 'http://localhost:9999/callback',
        'response_type' => 'code',
        'scope' =>''
    ]);
    return redirect("http://localhost:8000/oauth/authorize?".$query);
});

Route::get('callback', function(\Illuminate\Http\Request $request){
    $code = $request->get('code');

    $http = new \GuzzleHttp\Client();

    $response = $http->post('http://localhost:8000/oauth/token',[
        'form_params' => [
            'client_id' => 3,
            'client_secret' => 'NY4We32QUAxftegKaKdjbLXll9mq2I4Jc95QpCQW',
            'redirect_uri' => 'http://localhost:9999/callback',
            'code' => $code,
            'grant_type' => 'authorization_code' // ou password ou client
        ]
    ]);
    dd(json_decode($response->getBody(), true));
});
*/
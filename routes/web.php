<?php

use App\Film;
use Illuminate\Support\Facades\Route;
use App\User;
use App\Calificacion;
use App\Http\Controllers\AuspiciantesController;
use App\Http\Controllers\EdicionespasadasController;
use App\permisos\Models\Role;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;


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


/******************* USUARIOS*************** */

/*Route::get('/', function () {
    return view('index');
});
*/
Route::get('/', 'FilmController@indexp')->name('indexp');


Route::get('/peliculas', 'FilmController@peliculas')->name('peliculas');
Route::get('/pelicula/{id}', 'FilmController@pelicula')->name('pelicula');

Route::get('/wawas', 'FilmController@wawas')->name('wawas');
Route::get('/canelos', 'FilmController@canelos')->name('canelos');
Route::get('/largometrajeficcion', 'FilmController@larfic')->name('largometrajeficcion');
Route::get('/largometrajedocumental', 'FilmController@lardoc')->name('largometrajedocumental');
Route::get('/cortometrajeficcion', 'FilmController@corfic')->name('cortometrajeficcion');
Route::get('/cortometrajedocumental', 'FilmController@cordoc')->name('cortometrajedocumental');
Route::get('/cortometrajeanimado', 'FilmController@coranim')->name('cortometrajeanimado');
Route::get('/cortometrajeuniversitario', 'FilmController@coruni')->name('cortometrajeuniversitario');
Route::get('/cortos', 'FilmController@wawascortos')->name('wawascortos');

Route::get('/talleres', 'TallerController@index')->name('gallery');

Route::get('/noticias', 'NoticiaController@noticias')->name('noticias');
Route::get('/noticia/{id}', 'NoticiaController@noticia')->name('noticia');

Route::get('/programacion', 'ProgramacionController@index')->name('programacion');
Route::get('/redireccion/{admin}', 'FilmController@pelicula')->name('redireccion');

Route::get('/gallery', 'GaleriaController@index')->name('gallery');
Route::get('/bases', 'FestivalController@index')->name('bases');
Route::get('/equipo', 'FestivalController@equipo')->name('equipo');
Route::get('/festival-kuntur', 'FestivalController@festival_kuntur')->name('festival-kuntur');
Route::get('/el-festival', 'FestivalController@el_festival')->name('el_festival');
Route::get('/jurado', 'JuradoController@index')->name('jurado');

Route::get('/premiacion', 'NoticiaController@noticiaKuntur')->name('noticias');

Route::get('/auspiciantes', 'AuspiciantesController@index')->name('auspiciantes');

Route::get('/ediciones-pasadas', 'EdicionespasadasController@index')->name('ediciones-pasadas');




/********************** Perfil Usuario************** */
Route::get('/lista', 'CalificacionFilmUserController@index')->name('lista');

Route::get('/listcomen', 'ComentarioController@listcoment')->name('listcomen');
Route::get('/editcomen/{id}/edit', 'ComentarioController@edit')->name('editcomen');
Route::patch('/editcomen/{admin}', 'ComentarioController@update')->name('editcomen');
Route::delete('/deletecomen/{id}', 'ComentarioController@destroy')->name('deletecomen');

Route::post('/vote/{id}', 'FilmController@vote')->name('vote');
Route::delete('/delete_vote/{id}', 'CalificacionFilmUserController@destroy')->name('delete_vote');
Route::post('/createcoment', 'ComentarioController@store')->name('createcoment');

Route::get('/editperfil', 'HomeController@editperfil')->name('editperfil');
Route::post('uperfil', 'HomeController@register')->name('uperfil');



Auth::routes();
Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');

/******************************ADMIN*********************** */
//Route::get('/nosotros', 'HomeController@nosotros')->name('nosotros');
Route::get('/admin', 'FilmController@index')->name('admin');
Route::get('/create', 'FilmController@agregar')->name('create');
Route::post('/create', 'FilmController@store')->name('create');
Route::get('/listar', 'FilmController@show')->name('listar');
Route::get('/edit/{admin}/edit', 'FilmController@edit')->name('edit');
Route::patch('/edit/{admin}', 'FilmController@update')->name('edit');
Route::delete('/delete/{admin}', 'FilmController@destroy')->name('delete');

//Noticias
Route::get('/cnoticia', 'NoticiaController@create')->name('cnoticia');
Route::post('/create_not', 'NoticiaController@store')->name('create_not');
Route::get('/listnotice', 'NoticiaController@show')->name('listnotice');
Route::get('/editnotice/{admin}/edit', 'NoticiaController@edit')->name('editnotice');
Route::patch('/editnotice/{admin}', 'NoticiaController@update')->name('editnotice');
Route::delete('/deletenotice/{admin}', 'NoticiaController@destroy')->name('deletenotice');

//Jurado
Route::get('/cjurado', 'JuradoController@create')->name('cjurado');

//galeria
Route::get('/cgallery', 'GaleriaController@create')->name('cgallery');
Route::post('/cgallery', 'GaleriaController@store')->name('cgallery');
Route::get('/lgallery', 'GaleriaController@show')->name('lgallery');
Route::delete('/gdelete/{admin}', 'GaleriaController@destroy')->name('gdelete');

//Talleres
Route::get('/ctaller', 'TallerController@create')->name('ctaller');
Route::post('/ctaller', 'TallerController@store')->name('ctaller');
Route::get('/ltaller', 'TallerController@show')->name('ltaller');
Route::get('/etaller/{admin}/edit', 'TallerController@edit')->name('etaller');
Route::patch('/etaller/{admin}', 'TallerController@update')->name('etaller');
Route::delete('/dtaller/{admin}', 'TallerController@destroy')->name('dtaller');


//Programaci??n

Route::get('/cprogramacion', 'ProgramacionController@create')->name('cprogramacion');
Route::post('/create_programacion', 'ProgramacionController@store')->name('create_programacion');
Route::get('/lprogramacion', 'ProgramacionController@show')->name('lprogramacion');
Route::get('/eprogramacion/{admin}/edit', 'ProgramacionController@edit')->name('eprogramacion');
Route::patch('/eprogramacion/{admin}', 'ProgramacionController@update')->name('eprogramacion');
Route::delete('/dprogramacion/{admin}', 'ProgramacionController@destroy')->name('dprogramacion');

//Fecha Programaci??n

Route::get('/cfechapro', 'FechaprgramacionController@create')->name('cprogramacion');
Route::post('/cre_fechapro', 'FechaprgramacionController@store')->name('cre_fechapro');
Route::get('/lfechapro', 'FechaprgramacionController@show')->name('lfechap');
Route::get('/efechapro/{admin}/edit', 'FechaprgramacionController@edit')->name('efechap');
Route::patch('/ufechapro/{admin}', 'FechaprgramacionController@update')->name('ufechap');
Route::delete('/dfechapro/{admin}', 'FechaprgramacionController@destroy')->name('dfechap');


Route::get('/lvotos', 'CalificacionFilmUserController@show')->name('lvotos');

//comentarios
Route::get('/lcomentarios', 'HomeController@lcomentarios')->name('lcomentarios');
Route::delete('/dcoment/{id}', 'HomeController@destroy')->name('dcoment');

//listados
Route::get('/lusuarios', 'HomeController@lusuarios')->name('lusuarios');
Route::delete('/deleteuser/{admin}', 'HomeController@deleteusu')->name('deleteuser');







Route::get('/test', function () {

    /*return Role::create([
        'name'=>'admin',
        'slug'=>'admin',
        'description'=>'administrador',
        'full-acces'=>'yes'
    ]);*/

   /* return Role::create([
        'name'=>'user',
        'slug'=>'user',
        'description'=>'usuario',
        'full-acces'=>'no'
    ]);*/

    /*return Role::create([
        'name'=>'judge',
        'slug'=>'judge',
        'description'=>'juez',
        'full-acces'=>'no'
    ]);*/

    $id_user =  User::where('id',1)->first();
    //dd($id_user->id);
    $id_film =  Film::where('id',1)->first();
    $id_calif =  Calificacion::where('id',1)->first();


    DB::table('calificacion_film_user')->insert([
        'calificacion_id' => '1',
        'film_id' => '1',
        'user_id' =>'1',

        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),

        //'tutor_id' => 0
    ]);

    return redirect('/create')->with('Mensaje','Film Agregado con Exito');


    //$user= User::find(1);
    //dd($user->id);

    //$user->film()->attach([1,1]);
    //$user->roles()->detach([1,3]);
    //$user->film()->sync([1]);


    //$user->califficacion()->sync([1]);

    return $id_calif  ;




});


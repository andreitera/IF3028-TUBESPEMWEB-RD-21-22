<?php

use Illuminate\Support\Facades\Route;

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
    return redirect('/home');
});

Route::get('/home', function () {
    $test = [
        [
            "judul" => "Judul 1",
            "pesan" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui velit nemo libero, in eius amet inventore minima nihil ullam doloribus odio suscipit ipsum rerum officiis sequi perferendis ipsa cupiditate eum labore quaerat ad eligendi minus perspiciatis accusamus? Modi iusto unde ea repellendus optio fugiat nemo cumque amet earum culpa beatae velit sed voluptatum atque nobis delectus, molestiae quisquam nostrum deserunt dicta recusandae. Similique, voluptatem eaque commodi sed tempore dolor tempora itaque voluptates hic id, blanditiis magnam, ab harum dignissimos praesentium laboriosam delectus. Repellat minima explicabo amet, omnis quaerat cupiditate nulla commodi cum recusandae eveniet ratione ab dignissimos quam praesentium ipsam quas vitae molestias perferendis error? Optio adipisci ab dolorem hic quasi asperiores quam unde nam, voluptatem quo veniam cupiditate dolorum quae ducimus praesentium neque cum sequi iste ullam animi repellendus, autem sit! Assumenda quis modi esse, adipisci culpa vitae asperiores aliquid. Amet consequuntur assumenda sit provident natus reiciendis fuga? Dolores nobis perspiciatis quia nam error nulla nisi ullam ad iusto provident corrupti quo nostrum nesciunt commodi maiores, incidunt doloribus expedita autem eum. Optio perferendis vel expedita soluta earum enim voluptatum exercitationem hic facilis delectus laudantium minima fugit tenetur repudiandae molestiae, ullam blanditiis adipisci vero, impedit sed aliquid voluptatem! Dicta, perferendis.",
            "created_at" => "2 Juni 2021",
            "lampiran" => "test.jpg"
        ]
    ];
    return view('Home',[
        "title" => "Posts",
        "posts" =>$test
    ]);
});

Route::get('/buat', function () {
    return view('Buat');
});

Route::get('detail/{slug}', function ($slug) {
    return view('detail');
});

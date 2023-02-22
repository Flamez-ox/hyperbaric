<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CurrencyController;
use App\Http\Controllers\HomeContactController;
use App\Http\Controllers\LogoController;
use App\Http\Controllers\MultiImageController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\UserController;
use App\Models\Brand;
use App\Models\HomeAbout;
use App\Models\HomePortfolio;
use App\Models\HomePortfolioImage;
use App\Models\HomeService;
use App\Models\MultiImage;
use App\Models\Slider;
use App\Models\User;
use Illuminate\Support\Facades\DB;
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

// Defaut Route for Email Verify

Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware(['auth'])->name('verification.notice');


Route::get('/', function () {

    $sliders = Slider::latest()->paginate(4);
    $brands = Brand::Latest()->get();
    $abouts = HomeAbout::Latest()->first();
    $services = HomeService::Latest()->get();

    $portfolios = HomePortfolio::first()->images;

    // dd($portfolios);

    return view('home', compact('portfolios', 'brands', 'abouts', 'services', 'sliders'));
})->name('home');



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {

        // using eloquent orm
        // $users = User::all();

        // using query builder
        // $users = DB::table('users')->get();

        return view('admin.index');
    })->name('dashboard');
    
});

// Route::get('/dashboard', function(){ return view('admin.index');
//     })->name('dashboard');



Route::get("/user/logout", [UserController::class, 'logout'])->name("user.logout");

// user change password ROute
Route::get("/user/password/change", [UserController::class, 'changePassword'])->name("user.change.password");
Route::post("/user/password/update", [UserController::class, 'updatePassword'])->name("password.update");

// user change profile update ROute
Route::get("/user/profile/update", [UserController::class, 'UserProfile'])->name("user.profile.update");
Route::post("/user/password/update", [UserController::class, 'UserProfileUpdate'])->name("user.update.profile");



// Portfolio Route Pages
Route::get("/portfolio", function () {

    $portfolios = HomePortfolio::first()->images;
    return view("pages.portfolio", compact('portfolios'));

})->name("portfolio");

Route::get('/service/detail/{id}', function ($id) {
    $service = HomeService::findOrFail($id);
    return view("pages.service_detail", compact('service'));
})->name('service.detail');




// Portfolio Route
// Route::get('/home/portfolio', [PortfolioController::class, 'index'])->name('portfolio');
Route::get('/home/portfolio', [PortfolioController::class, 'index'])->name('all.portfolio');
Route::get('/create/portfolio', [PortfolioController::class, 'create'])->name('create.portfolio');
Route::post('/add/portfolio', [PortfolioController::class, 'store'])->name('store.portfolio');

Route::get('/edit/portfolio/{id}', [PortfolioController::class, 'edit'])->name('edit.portfolio');
Route::post('/update/portfolio/{id}', [PortfolioController::class, 'update'])->name('update.portfolio');

Route::get('/delete/portfolio/{id}', [PortfolioController::class, 'destroy'])->name('destroy.portfolio');




// Contact Route
Route::get('/admin/contact', [HomeContactController::class, 'index'])->name('admin.contact');
Route::get('/create/contact', [HomeContactController::class, 'create'])->name('create.contact');
Route::post('/add/contact', [HomeContactController::class, 'store'])->name('store.contact');
Route::get('/edit/contact/{id}', [HomeContactController::class, 'edit'])->name('edit.contact');
Route::post('/update/contact/{id}', [HomeContactController::class, 'update'])->name('update.contact');

Route::get('/delete/contact/{id}', [HomeContactController::class, 'destroy'])->name('destroy.contact');

Route::get('/admin/message', [HomeContactController::class, 'AdminMessage'])->name('admin.message');
Route::get('/delete/message/{id}', [HomeContactController::class, 'AdminDeleteMessage'])->name('delete.message');

// Other home Pages 
Route::get('/service', [HomeContactController::class, 'homeService'])->name('home.service');
Route::get('/about', [HomeContactController::class, 'homeAbout'])->name('home.about');
Route::get('/team', [HomeContactController::class, 'homeTeam'])->name('home.team');
Route::get('/privacy', [HomeContactController::class, 'privacy'])->name('privacy');


// Home Contact Route
Route::get('/contact', [HomeContactController::class, 'HomeContact'])->name('contact');
Route::post('/contact/form', [HomeContactController::class, 'ContactForm'])->name('contact.form');




// Category Route
Route::get('/all/category', [CategoryController::class, 'index'])->name('all.category');
Route::post('/add/category', [CategoryController::class, 'store'])->name('store.category');

Route::get('/edit/category/{id}', [CategoryController::class, 'edit'])->name('edit.category');
Route::post('/update/category/{id}', [CategoryController::class, 'update'])->name('update.category');

Route::get('/softdelete/category/{id}', [CategoryController::class, 'softDelete'])->name('softdelete.category');
Route::get('/restore/category/{id}', [CategoryController::class, 'restoreDelete'])->name('restore.category');

Route::get('/destroy/category/{id}', [CategoryController::class, 'destroy'])->name('destroy.category');



// Brand Route
Route::get('/home/brand', [BrandController::class, 'index'])->name('all.brand');
Route::post('/add/brand', [BrandController::class, 'store'])->name('store.brand');

Route::get('/edit/brand/{id}', [BrandController::class, 'edit'])->name('edit.brand');
Route::post('/update/brand/{id}', [BrandController::class, 'update'])->name('update.brand');

Route::get('/delete/brand/{id}', [BrandController::class, 'destroy'])->name('destroy.brand');




// Slider Route
Route::get('/home/slider', [SliderController::class, 'index'])->name('all.slider');
Route::get('/create/slider', [SliderController::class, 'create'])->name('create.slider');
Route::post('/store/slider', [SliderController::class, 'store'])->name('store.slider');

Route::get('/edit/slider/{id}', [SliderController::class, 'edit'])->name('edit.slider');
Route::post('/update/slider/{id}', [SliderController::class, 'update'])->name('update.slider');

Route::get('/delete/slider/{id}', [SliderController::class, 'destroy'])->name('destroy.slider');


// Home About Route
Route::get('/home/about', [AboutController::class, 'index'])->name('all.about');
Route::get('/create/about', [AboutController::class, 'create'])->name('create.about');
Route::post('/store/about', [AboutController::class, 'store'])->name('store.about');

Route::get('/edit/about/{id}', [AboutController::class, 'edit'])->name('edit.about');
Route::post('/update/about/{id}', [AboutController::class, 'update'])->name('update.about');

Route::get('/delete/about/{id}', [AboutController::class, 'destroy'])->name('destroy.about');





// Home Service Route
Route::get('/home/service', [ServiceController::class, 'index'])->name('all.service');
Route::get('/create/service', [ServiceController::class, 'create'])->name('create.service');
Route::post('/store/service', [ServiceController::class, 'store'])->name('store.service');

Route::get('/edit/service/{id}', [ServiceController::class, 'edit'])->name('edit.service');
Route::post('/update/service/{id}', [ServiceController::class, 'update'])->name('update.service');

Route::get('/delete/service/{id}', [ServiceController::class, 'destroy'])->name('destroy.service');



// Home Team Route
Route::get('/home/team', [TeamController::class, 'index'])->name('all.team');
Route::post('//home/team', [TeamController::class, 'exchangeCurrency'])->name('currency');
Route::get('/create/team', [TeamController::class, 'create'])->name('create.team');
Route::post('/store/team', [TeamController::class, 'store'])->name('store.team');

Route::get('/edit/team/{id}', [TeamController::class, 'edit'])->name('edit.team');
Route::post('/update/team/{id}', [TeamController::class, 'update'])->name('update.team');

Route::get('/delete/team/{id}', [TeamController::class, 'destroy'])->name('destroy.team');




// Multi Image Route
Route::get('/all/image', [MultiImageController::class, 'index'])->name('all.image');
Route::post('/add/image', [MultiImageController::class, 'store'])->name('store.image');

Route::get('/edit/image/{id}', [MultiImageController::class, 'edit'])->name('edit.image');
Route::post('/update/image/{id}', [MultiImageController::class, 'update'])->name('update.image');


// HomeSlide All Route
Route::controller(LogoController::class)->group(function() {

    Route::get('/admin/home/logo', 'edit')->name('home.logo');
    Route::post('/admin/update/logo', 'update')->name('update.logo');
});

//currency
// Route::get('/currency',[CurrencyController::class, 'index'])->name('currency');
// Route::post('/currency', [CurrencyController::class, 'exchangeCurrency'])->name('currency');
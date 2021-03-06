<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CheckoutsController;
use App\Http\Controllers\ProgramContentsController;
use App\Http\Controllers\ProgramsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

#region controllers usage
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ActivityCalendarController;
use App\Http\Controllers\TrainingUserController;
use App\Http\Controllers\FoodCalendarController;
use App\Http\Controllers\UserMenuController;
use App\Http\Controllers\PersonalAccountController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\PhysicsParametersController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\MainPageController;
use App\Http\Controllers\TrainingController;
use App\Http\Controllers\FileController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\AccessHistoryController;
#endregion

Route::get("/", [MainPageController::class,'index'])->name('main');
Route::view("/diet","diet")->middleware('auth');
Route::view("/workout","workout")->middleware('auth');
Route::view("/plugin","plugin")->middleware('auth');
Route::view("/question", "question")->middleware('auth')->name('question');
Route::view("/article","article")->middleware('auth');
Route::get("/article/{id}", [ArticleController::class,'index']);
Route::post("/searchQuestions", [ArticleController::class,'searchQuestions'])->middleware('auth')->name('search');
Route::get("/search", [ArticleController::class,'search'])->middleware('auth');

Route::prefix('/admin')->group(function () {
    Route::get('/', [AdminController::class, "openAdminDashboard"])->name('adminMain');
    Route::get('/login', [AdminController::class, "openAdminLoginPage"])->name('adminLogin');
    Route::post('/login', [AdminController::class, "loginAsAdministrator"])->name('loginAsAdmin');
    Route::prefix('/users')->group(function () {  // word: "icons" - not working as part of adress
        //Route::get('/', function(){         return view('admin.dashboard.admin.usersList'); });
        Route::get('/', [PersonalAccountController::class,'adminUsers'])->name('user');
    });
    Route::prefix('/program-contents')->group(function () {
        Route::get('/', [ProgramContentsController::class, "showAll"])->name('showAllContents');
        Route::get('/add', [ProgramContentsController::class, "openAddingForm"]);
        Route::post('/add', [ProgramContentsController::class, "addProgramContent"])->name('addProgramContent');
        Route::get('/edit/{id}', [ProgramContentsController::class, "openProgramContentEditingPage"]);
        Route::post('/edit/{id}', [ProgramContentsController::class, "editProgramContent"])->name('editProgramContent');
        Route::delete('/remove/{id}', [ProgramContentsController::class, "deleteProgramContent"]);
    });
    Route::prefix('/menu')->group(function () {  // word: "icons" - not working as part of adress
        Route::get('/', [MenuController::class,'adminMenus'])->name('menu');
        Route::get('/edit/{id}', [MenuController::class,'adminShowMenu']);
        Route::post('/editMenu/{id}', [MenuController::class,'adminEditMenu'])->name('editMenu');
        Route::get('/add', [MenuController::class,'adminAddView']);
        Route::post('/addMenu', [MenuController::class,'adminAddMenu'])->name('addMenu');
        Route::delete('/remove/{id}', [MenuController::class, "deleteMenu"])->name('deleteMenu');
        Route::prefix('/days')->group(function () {
            Route::get('/edit/{id}', [MenuController::class,'adminShowMenuDay']);
            Route::post('/editMenuDay/{id}', [MenuController::class,'adminEditMenuDay'])->name('editMenuDay');
            Route::get('/add/{id}', [MenuController::class,'adminAddViewDay']);
            Route::post('/addMenuDay', [MenuController::class,'adminAddMenuDay'])->name('addMenuDay');
            Route::delete('/remove/{id}', [MenuController::class,'deleteMenuDay'])->name('deleteMenuDay');
            Route::get('/{id}', [MenuController::class,'adminMenuDay'])->name('menuDay');
        });
    });
    Route::prefix('/workout')->group(function () {  // word: "icons" - not working as part of adress
        Route::get('/', [TrainingController::class,'adminTrainings'])->name('training');
        Route::get('/edit/{id}', [TrainingController::class,'adminShowTraining']);
        Route::post('/editTraining/{id}', [TrainingController::class,'adminEditTraining'])->name('editTraining');
        Route::get('/add', [TrainingController::class,'adminAddView']);
        Route::post('/addTraining', [TrainingController::class,'adminAddTraining'])->name('addTraining');
        Route::post('/deleteTraining/{id}', [TrainingController::class,'adminDeleteTraining'])->name('deleteTraining');
        Route::prefix('/days')->group(function () {
            Route::get('/add/{id}', [TrainingController::class,'openTrainingDayAdding'])->name('openTrainingDayAdding');
            Route::get('/edit/{id}', [TrainingController::class,'adminShowTrainingDay']);
            Route::post('/editTrainingDay/{id}', [TrainingController::class,'adminEditTrainingDay'])->name('editTrainingDay');
            Route::post('/addTrainingDay', [TrainingController::class,'adminAddTrainingDay'])->name('addTrainingDay');
            Route::delete('/remove/{id}', [TrainingController::class,'deleteDay'])->name('deleteTrainingDay');
            Route::get('/{id}', [TrainingController::class,'adminTrainingsDay'])->name('trainingDay');
        });
    });
    Route::prefix('/question')->group(function () {  // word: "icons" - not working as part of adress
        Route::get('/', [ArticleController::class,'adminArticles'])->name('adminQuestion');
        Route::get('/show/{id}', [ArticleController::class,'adminArticle']);
        Route::get('/edit/{id}', [ArticleController::class,'adminShowArticle']);
        Route::post('/editArticle/{id}', [ArticleController::class,'adminEditArticle'])->name('editArticle');
        Route::get('/add', [ArticleController::class,'adminAddView']);
        Route::post('/addArticle', [ArticleController::class,'adminAddArticle'])->name('addArticle');
        Route::post('/deleteArticle/{id}', [ArticleController::class,'adminDeleteArticle'])->name('deleteArticle');
    });
    Route::prefix('/program')->group(function () {  // word: "icons" - not working as part of adress
        Route::get('/', [ProgramsController::class, "openProgramsPage"])->name('openProgramsPage');
        Route::get('/edit/{id}', [ProgramsController::class, "openProgramEditingPage"])->name('openProgramEditingPage');
        Route::post('/edit/{id}', [ProgramsController::class, "editProgram"])->name('editProgram');
        Route::get('/add', [ProgramsController::class, "openAddingForm"])->name('openAddingForm');
        Route::post('/add', [ProgramsController::class, "addProgram"])->name('addProgram');
        Route::delete('/remove/{id}', [ProgramsController::class, "deleteProgram"])->name('deleteProgram');
    });
    Route::prefix('/main')->group(function () {  // word: "icons" - not working as part of adress
        Route::get('/', [MainPageController::class,'adminMagePage'])->name('adminMagePage');
        Route::post('/edit/{id}', [MainPageController::class,'adminEditContent']);
    });
    Route::prefix('notification')->group(function () {  // word: "icons" - not working as part of adress
        Route::get('/', [NotificationController::class,'list'])->name('notification');
        Route::delete('/remove/{id}', [NotificationController::class,'deleteNotification'])->name('notification.destroy');
        Route::get('/edit/{id}', [NotificationController::class,'adminShowNotification']);
        Route::post('/editNotification/{id}', [NotificationController::class,'editNotification'])->name('editNotification');
        Route::get('/add', [NotificationController::class,'adminAddView']);
        Route::post('/addNotification', [NotificationController::class,'addNotification'])->name('addNotification');
    });
});

Auth::routes();

Route::post('/upload/{id}', [FileController::class, 'upload'])->name('uploadIMG');

Route::prefix('api/personal-account')->group(function () {
    Route::get('/list', [PersonalAccountController::class,'index']);
    Route::get('/show/{id}', [PersonalAccountController::class,'show']);
    Route::post('/create', [PersonalAccountController::class,'store']);
    Route::put('/update/{id}', [PersonalAccountController::class,'update']);
    Route::delete('/delete/{id}', [PersonalAccountController::class,'destroy']);
});

Route::prefix('/initialize-checkout')->group(function () {
    Route::post('/stripe', [CheckoutsController::class, "prepareStripeCheckoutPage"]);
    Route::post('/stripe-for-diet', [CheckoutsController::class, "prepareStripeCheckoutPageForDiet"]);
    Route::post('/stripe-for-training', [CheckoutsController::class, "prepareStripeCheckoutPageForTraining"]);
    Route::post('/tinkoff', [CheckoutsController::class, "prepareTinkoffCheckout"]);
    Route::post('/tinkoff-for-diet', [CheckoutsController::class, "prepareTinkoffCheckoutForDiet"]);
    Route::post('/tinkoff-for-training', [CheckoutsController::class, "prepareTinkoffCheckoutForTraining"]);
});

Route::prefix('/open-checkout')->group(function () {
    Route::get('/stripe', [CheckoutsController::class, "generateStripeCheckoutPage"]);
    Route::get('/stripe-for-diet', [CheckoutsController::class, "generateStripeCheckoutPageForDiet"]);
    Route::get('/stripe-for-training', [CheckoutsController::class, "generateStripeCheckoutPageForTraining"]);
});

Route::get('/finish-checkout', [CheckoutsController::class, "finishStripeCheckout"])->name('checkout-finish');
Route::get('/cancel-checkout', [CheckoutsController::class, "cancelCheckout"])->name('cancel-checkout');
Route::get('/finish-tinkoff-checkout', [CheckoutsController::class, "finishTinkoffCheckout"]);
Route::get('/finish-stripe-checkout-for-diet', [CheckoutsController::class, "finishStripeCheckoutForDiet"])->name('finishStripeCheckoutForDiet');
Route::get('/finish-tinkoff-checkout-diet', [CheckoutsController::class, "finishTinkoffCheckoutForDiet"])->name('finishTinkoffCheckoutForDiet');
Route::get('/finish-stripe-checkout-for-training', [CheckoutsController::class, "finishStripeCheckoutForTraining"])->name('finishStripeCheckoutForTraining');
Route::get('/finish-tinkoff-checkout-training', [CheckoutsController::class, "finishTinkoffCheckoutForTraining"])->name('finishTinkoffCheckoutForTraining');

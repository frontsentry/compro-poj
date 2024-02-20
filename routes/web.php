<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    HomeController,
    ArticleController,
    GalleryController,
    PartnerController,
    VacancyController,
    CaptchaController,
    MailController,
    ReportController
};

use App\Models\{Gallery, FileReport};

use Illuminate\Support\Facades\Mail;
use App\Mail\VacancyApplicationMail;
use Illuminate\Mail\Markdown;


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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/profile', function () {
    return view('profile');
})->name('profile');

Route::get('/appreciation', function () {
    return view('appreciation');
})->name('appreciation');

Route::get('/certification', function () {
    return view('certification');
})->name('certification');

Route::get('/security', function () {
    $galleries = Gallery::getTenLatestByProductType('outsourcing_security');
    return view('security', compact('galleries'));
})->name('security');

Route::get('/cleaning-service', function () {
    $galleries = Gallery::getTenLatestByProductType('outsourcing_cleaning_service');
    return view('cleaning-service', compact('galleries'));
})->name('cleaning-service');

Route::get('/driver', function () {
    $galleries = Gallery::getTenLatestByProductType('outsourcing_driver');
    return view('driver', compact('galleries'));
})->name('driver');

Route::get('/car', function () {
    $galleries = Gallery::getTenLatestByProductType('rental_mobil');
    return view('car', compact('galleries'));
})->name('car');

Route::get('/motorcycle', function () {
    $galleries = Gallery::getTenLatestByProductType('rental_motor');
    return view('motorcycle', compact('galleries'));
})->name('motorcycle');

Route::get('/office-equipment', function () {
    $galleries = Gallery::getTenLatestByProductType('rental_alat_kantor');
    return view('office-equipment', compact('galleries'));
})->name('office-equipment');

Route::get('/call-center', function () {
    $galleries = Gallery::getTenLatestByProductType('tele_center');
    return view('call-center', compact('galleries'));
})->name('tele-center');

Route::get('/expedition', function () {
    $galleries = Gallery::getTenLatestByProductType('ekspedisi');
    return view('expedition', compact('galleries'));
})->name('expedition');

Route::get('/annual-report', function () {
    $files = FileReport::getLatestByType('annual_report');
    return view('report/annual-report', compact('files'));
})->name('annual-report');

Route::get('/financial-statement', function () {
    $files = FileReport::getLatestByType('financial_report');
    return view('report/financial-statement', compact('files'));
})->name('financial-statement');

Route::get('/job-vacancy', [VacancyController::class, 'pageJobVacancy'])->name('job-vacancy');
Route::get('/join-us', [VacancyController::class, 'pageJoinUs'])->name('join-us');
Route::post('/vacancy/application', [VacancyController::class, 'createApplication'])->name('job-apply');


Route::get('/head-office', [function () {
    return view('contact/head-office');
}])->name('head-office');

Route::post('/mail/send', [MailController::class, 'send'])->name('mail-send');

Route::get('/representative-office', function () {
    return view('contact/representative-office');
})->name('representative-office');

Route::get('/whistle-blowing-system', function () {
    return view('contact/wbs/whistle-blowing-system');
})->name('whistle-blowing-system');

Route::get('/how-to-report', function () {
    return view('contact/wbs/how-to-report');
})->name('how-to-report');

Route::get('/report', function () {
    return view('contact/wbs/report');
})->name('report');

Route::post('/report', [ReportController::class, 'create'])->name('create-report');

Route::get('/privacy-policy', function () {
    return view('privacy-policy/index');
})->name('privacy-policy');

Route::get('/information', function () {
    return view('information-page');
})->name('information-page');

Route::get('/news', [ArticleController::class, 'index'])->name('article.home');
Route::get('/news/{article:slug}', [ArticleController::class, 'detail'])->name('article.detail');
Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery');

Route::get('api/gallery', [GalleryController::class, 'getGalleries']);
Route::get('api/gallery/tags', [GalleryController::class, 'getGalleryTags']);

Route::get('/insurance-partner', [PartnerController::class, 'index'])->name('insurance-partner');
Route::get('/service-partner', [PartnerController::class, 'service'])->name('service-partner');

Route::get('/api/captcha', [CaptchaController::class, 'getCaptchaSource'])->name('get-captcha-source');
Route::get('/api/partners', [PartnerController::class, 'getPartners'])->name('get-partners');

<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\InschrijvingController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Leon — v1 stub routes
|--------------------------------------------------------------------------
| Sitemap source: docs/wiki/design/30-structure.md
| NL-only slugs in v1. FR/EN routing model deferred to Skeleton plane (Dn-).
*/

Route::view('/', 'home')->name('home');

// Contact form (server-handled; emails the team, stores nothing — see Dn-03 contact slice)
// Throttled: each submit sends an email and the honeypot is bypassable, so cap per-IP bursts.
Route::post('/contact', [ContactController::class, 'store'])
    ->middleware('throttle:5,1')
    ->name('contact.store');
Route::view('/privacybeleid', 'privacybeleid')->name('privacybeleid');

// Inschrijving-interesse (editie participant signup; emails the team, stores nothing).
// Interest-only slice of Dn-03 — the participant DB + minors consent stay deferred.
Route::post('/inschrijving', [InschrijvingController::class, 'store'])
    ->middleware('throttle:5,1')
    ->name('inschrijving.store');

// Dansateliers & performances
Route::prefix('dansateliers-performances')->name('dansateliers.')->group(function () {
    Route::view('/',                   'dansateliers.index')->name('index');
    Route::view('/atelier-leon',       'dansateliers.atelier-leon')->name('atelier-leon');
    Route::view('/leon-op-school',     'dansateliers.leon-op-school')->name('leon-op-school');
    Route::view('/mariage',            'dansateliers.mariage')->name('mariage');
    Route::get('/mariage/{editie}', function (\App\Models\Edition $editie) {
        return view('dansateliers.mariage-editie', ['editie' => $editie]);
    })->name('mariage.editie');
    Route::view('/mobiele-dansstudio', 'dansateliers.mobiele-dansstudio')->name('mobiele-dansstudio');
});

// Samenwerken
Route::prefix('samenwerken')->name('samenwerken.')->group(function () {
    Route::view('/',           'samenwerken.index')->name('index');
    Route::view('/opzetten',   'samenwerken.opzetten')->name('opzetten');
    Route::view('/uitnodigen', 'samenwerken.uitnodigen')->name('uitnodigen');
    Route::view('/doen',       'samenwerken.doen')->name('doen');
});

// Agenda — events table, filterable by type × practice × project.
// View is self-contained: query + filter logic live in agenda.blade.php @php block,
// honoring URL params (per 42-briefs/12-agenda BG-4).
Route::view('/agenda', 'agenda')->name('agenda');

// Over Leon
Route::prefix('over-leon')->name('over.')->group(function () {
    Route::view('/',             'over-leon.index')->name('index');
    Route::view('/missie-visie', 'over-leon.missie-visie')->name('missie-visie');
    Route::view('/impact',       'over-leon.impact')->name('impact');
    Route::view('/team',         'over-leon.team')->name('team');
    Route::view('/historiek',    'over-leon.historiek')->name('historiek');
    Route::view('/contact',      'over-leon.contact')->name('contact');
});

// Internal build-status dashboard — non-production only, unlinked.
if (! app()->isProduction()) {
    Route::get('/build', App\Http\Controllers\BuildDashboardController::class)
        ->name('build.dashboard');
}

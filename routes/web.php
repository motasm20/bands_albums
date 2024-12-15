<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BandController;
use App\Http\Controllers\AlbumController;
use App\Http\Controllers\SongController;


Route::resource('bands', BandController::class);
Route::resource('albums', AlbumController::class);
Route::resource('songs', SongController::class);


// Route::get('/bands/index',   [BandController::class, 'index'   ])->name('bands.index');
// Route::get('/bands/create',   [BandController::class, 'create'   ])->name('bands.create');
// Route::post('/bands/store',  [BandController::class, 'store'  ])->name('bands.store');
// Route::get('/bands/show/{band}', [BandController::class, 'show'   ])->name('bands.show');
// Route::get('/bands/edit/{band}', [BandController::class, 'edit'   ])->name('bands.edit');
// Route::put('/bands/update/{band}', [BandController::class, 'update'])->name('bands.update');
// Route::delete('/bands/destroy/{band}', [BandController::class, 'destroy'])->name('bands.destroy');

// Route::get('/albums/index',   [AlbumController::class, 'index'   ])->name('albums.index');
// Route::get('/albums/create',   [AlbumController::class, 'create'   ])->name('albums.create');
// Route::post('/albums/store',  [AlbumController::class, 'store'  ])->name('albums.store');
// Route::get('/albums/show/{album}', [AlbumController::class, 'show'   ])->name('albums.show');
// Route::get('/albums/edit/{album}', [AlbumController::class, 'edit'   ])->name('albums.edit');
// Route::put('/albums/update/{album}', [AlbumController::class, 'update'])->name('albums.update');
// Route::delete('/albums/destroy/{album}', [AlbumController::class, 'destroy'])->name('albums.destroy');

// Route::get('/songs/index',   [SongController::class, 'index'   ])->name('songs.index');
// Route::get('/songs/create',   [SongController::class, 'create'   ])->name('songs.create');
// Route::post('/songs/store',  [SongController::class, 'store'  ])->name('songs.store');
// Route::get('/songs/show/{song}', [SongController::class, 'show'   ])->name('songs.show');
// Route::get('/songs/edit/{song}', [SongController::class, 'edit'   ])->name('songs.edit');
// Route::put('/songs/update/{song}', [SongController::class, 'update'])->name('songs.update');
// Route::delete('/songs/destroy/{song}', [SongController::class, 'destroy'])->name('songs.destroy');









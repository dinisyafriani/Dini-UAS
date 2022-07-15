<?php

use Illuminate\Support\Facades\Route;

Auth::routes();

Route::middleware('auth')->group(function(){
    Route::get('/', 'DashboardController@index')->name('/');

    // book
    Route::get('book', 'BookController@index')->name('book');
    Route::get('book/create', 'BookController@create')->name('book.create');
    Route::post('book', 'BookController@insert')->name('book.insert');
    Route::get('book/edit/{book}', 'BookController@edit')->name('book.edit');
    Route::put('book', 'BookController@update')->name('book.update');
    Route::delete('book', 'BookController@delete')->name('book.delete');

    Route::get('borrower', 'BorrowerController@index')->name('borrower');
    Route::get('borrower/create', 'BorrowerController@create')->name('borrower.create');
    Route::post('borrower', 'BorrowerController@insert')->name('borrower.insert');
    Route::get('borrower/edit/{borrower}', 'BorrowerController@edit')->name('borrower.edit');
    Route::put('borrower', 'BorrowerController@update')->name('borrower.update');
    Route::delete('borrower', 'BorrowerController@delete')->name('borrower.delete');

    Route::get('book_loan', 'BookLoanController@index')->name('book_loan');
    Route::get('book_loan/create', 'BookLoanController@create')->name('book_loan.create');
    Route::post('book_loan', 'BookLoanController@insert')->name('book_loan.insert');
    Route::get('book_loan/edit/{book_loan}', 'BookLoanController@edit')->name('book_loan.edit');
    Route::put('book_loan', 'BookLoanController@update')->name('book_loan.update');
    Route::delete('book_loan', 'BookLoanController@delete')->name('book_loan.delete');

    Route::get('book_return', 'BookReturnController@index')->name('book_return');
    Route::get('book_return/create', 'BookReturnController@create')->name('book_return.create');
    Route::post('book_return', 'BookReturnController@insert')->name('book_return.insert');
    Route::get('book_return/edit/{book_return}', 'BookReturnController@edit')->name('book_return.edit');
    Route::put('book_return', 'BookReturnController@update')->name('book_return.update');
    Route::delete('book_return', 'BookReturnController@delete')->name('book_return.delete');

    Route::get('pengguna', 'PenggunaController@index')->name('pengguna');
    Route::get('pengguna/create', 'PenggunaController@create')->name('pengguna.create');
    Route::post('pengguna', 'PenggunaController@insert')->name('pengguna.insert');
    Route::get('pengguna/edit/{user}', 'PenggunaController@edit')->name('pengguna.edit');
    Route::put('pengguna', 'PenggunaController@update')->name('pengguna.update');
    Route::delete('pengguna', 'PenggunaController@delete')->name('pengguna.delete');
    
});



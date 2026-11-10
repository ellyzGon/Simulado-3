<?php

use App\Livewire\FornecedoresCreate;
use App\Livewire\Login;
use App\Livewire\ProdutoCreate;
use App\Livewire\ProdutoIndex;
use Illuminate\Support\Facades\Route;

Route::get('/login', Login::class);
Route::get('/produto', ProdutoCreate::class);
Route::get('/index', ProdutoIndex::class);
Route::get('/fornecedores', FornecedoresCreate::class);
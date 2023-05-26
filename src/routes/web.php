<?php

use Illuminate\Support\Facades\Route;
use Webdesign7\Randomquote\Controllers\QuoteController;

Route::get('quote', QuoteController::class);


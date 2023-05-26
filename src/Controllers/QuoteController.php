<?php

namespace Webdesign7\Randomquote\Controllers;

use Illuminate\Support\ServiceProvider;
use Webdesign7\Randomquote\Quote;

class QuoteController
{
    public function __invoke(Quote $quote) {
        $quote = $quote->getQuote();
        return view('randomquote::index', compact('quote'));
    }
}

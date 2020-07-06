<?php

use Invoice;

class AlternativesController extends Controller
{
     function alternatives() {
   $customer = Invoice::makeParty([
        'name' => 'John Doe',
    ]);

    $item = Invoice::makeItem('Your service or product title')->pricePerUnit(9.99);

    return Invoice::make()->buyer($customer)->addItem($item)->stream();
    }
}
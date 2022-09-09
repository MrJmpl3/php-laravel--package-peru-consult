<?php

// TODO: Made dataset and mock response

use MrJmpl3\LaravelPeruConsult\Classes\Responses\Company;
use MrJmpl3\LaravelPeruConsult\Facades\Sunat;

test('check company values', function () {
    /** @var Company $company */
    $company = Sunat::get(20603682182);

    $this->assertNotNull($company);
});

test('check wrong data', function () {
    $company = Sunat::get(20603782182);

    $this->assertNull($company);
});

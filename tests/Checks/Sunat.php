<?php

// TODO: Made dataset and mock response

test('check company values', function () {
    $company = \MrJmpl3\LaravelPeruConsult\Facades\Sunat::get(20603682182);

    $this->assertNotNull($company);
});

test('check wrong data', function () {
    $company = \MrJmpl3\LaravelPeruConsult\Facades\Sunat::get(20603782182);

    $this->assertNull($company);
});

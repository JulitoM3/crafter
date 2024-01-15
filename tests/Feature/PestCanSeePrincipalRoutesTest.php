<?php

use function Pest\Laravel\get;



it("La aplicación muestra el index", function () {

    $response = get("/");

    expect($response->getStatusCode())->toBe(200);


});


it("La aplicación muestra los proyectos", function () {
    $response = get("/projects");

    expect($response->getStatusCode())->toBe(200);
});

it("La aplicacion muestra el acerca de...", function () {
    $response = get("/about");

    expect($response->getStatusCode())->toBe(200);
});

it("La aplicacion muestra el formulario de contacto", function () {
    $response = get("/contact");

    expect($response->getStatusCode())->toBe(200);
});

it("La aplicación muestra la ruta login para CRM", function () {
    $response = get("/crm/login");

    expect($response->getStatusCode())->toBe(200);
});



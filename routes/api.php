<?php

use Illuminate\Routing\Router;

return function (Router $router) {
    $router->post("{typeOne}/{idOne}/{typeTwo}/{idTwo}", [
        "as" => "types.attach",
        "uses" => "TypesController@attach",
    ]);

    $router->delete("{typeOne}/{idOne}/{typeTwo}/{idTwo}", [
        "as" => "types.detach",
        "uses" => "TypesController@detach",
    ]);

    $router->post("{typeOne}/{id}/{typeTwo}", [
        "as" => "types.sync",
        "uses" => "TypesController@sync",
    ]);

    $router->get("{type}/{id}", [
        "as" => "types.detail",
        "uses" => "TypesController@detail",
    ]);

    $router->patch("{type}/{id}", [
        "as" => "types.update",
        "uses" => "TypesController@update",
    ]);

    $router->delete("{type}/{id}", [
        "as" => "types.destroy",
        "uses" => "TypesController@destroy",
    ]);

    $router->get("{type}", [
        "as" => "types.index",
        "uses" => "TypesController@index",
    ]);

    $router->post("{type}", [
        "as" => "types.create",
        "uses" => "TypesController@create",
    ]);
};

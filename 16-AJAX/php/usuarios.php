<?php

header("Content-Type: application/json; charset=utf-8");

$respuesta = [
   
    [
        'id' => '3e5789gyh224113ffd2456g',
        'nombre' => 'Yaiza',
        'edad' => 22,
        'pais' => 'España',
        'correo' => 'correo@correo.com'
    ],
    [
        'id' => '9875gh32ss654gg87y6i8u7t',
        'nombre' => 'Carlos',
        'edad' => 23,
        'pais' => 'España',
        'correo' => 'correo@correo.com'
    ]
];


echo json_encode($respuesta);


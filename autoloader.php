<?php

spl_autoload_register(function ($nombre_clase) {
    include 'src/' . basename($nombre_clase) . '.php';
});

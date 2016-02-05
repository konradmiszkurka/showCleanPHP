<?php

set_include_path(
    str_replace('/libs', '', __DIR__)
    .PATH_SEPARATOR."./libs/"
    .PATH_SEPARATOR."app/controllers/"
    .PATH_SEPARATOR."app/models/"
    .PATH_SEPARATOR."app/helpers/"
);
function __autoload($class_name) {
    require_once $class_name . '.php';
}

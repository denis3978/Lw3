<?php

function toSnakeCase(string $input): string
{
    $result = preg_replace('/([a-z0-9])([A-Z])/', '$1_$2', $input);
    $result = preg_replace('/([A-Z])([A-Z][a-z])/', '$1_$2', $result);
    return strtolower($result);
}

var_dump(toSnakeCase("userName"));
var_dump(toSnakeCase("HTMLParser"));
var_dump(toSnakeCase("getUserById"));
var_dump(toSnakeCase("XMLHttpRequest"));

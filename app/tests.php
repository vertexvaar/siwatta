<?php
require 'functions.php';

$array = [
    'foo' => ['a' => 'foo'],
    'bar' => ['a' => 'bar'],
    'baz' => ['a' => 'baz'],
    'far' => ['a' => 'far'],
];

if ($array === array_index_by_column(array_values($array), 'a')) {
    echo 'array_index_by_column success' . PHP_EOL;
} else {
    echo 'array_index_by_column failed' . PHP_EOL;
}

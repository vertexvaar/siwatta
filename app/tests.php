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

$string = 'I have nuggets';
$array = [
    'I',
    false,
    [],
    'have',
    0,
    '0',
    'nuggets',
    null,
];

if ($string === array_filter_implode($array, ' ')) {
    echo 'array_filter_implode success' . PHP_EOL;
} else {
    echo 'array_filter_implode failed' . PHP_EOL;
}

<?php

if (!function_exists('array_column_index')) {
    function array_index_by_column(array $array, string $index)
    {
        return array_combine(array_column($array, $index), $array);
    }
}

if (!function_exists('array_filter_implode')) {
    function array_filter_implode(array $array, string $glue = '')
    {
        return implode($glue, array_filter($array));
    }
}

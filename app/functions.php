<?php

if (!function_exists('array_column_index')) {
    function array_index_by_column(array $array, string $index): array
    {
        return array_combine(array_column($array, $index), $array);
    }
}

if (!function_exists('array_filter_implode')) {
    function array_filter_implode(array $array, string $glue = ''): string
    {
        return implode($glue, array_filter($array));
    }
}

if (!function_exists('startsWith')) {
    public function startsWith(string $haystack, string $needle): bool
    {
        return $needle === substr($haystack, 0, strlen($needle));
    }
}

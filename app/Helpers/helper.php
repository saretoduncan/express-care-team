<?php
if (!function_exists('flashError')) {
    function flashError(string $message, string $timeout = '', string $position = 'top-center')
    {
        return flash()->options(['timeout' => $timeout, 'position' => $position])->error($message);
    }
}
if (!function_exists('success')) {
    function flashSuccess(string $message, string $timeout = '3000', string $position = 'top-right')
    {
        return flash()->options(['timeout' => $timeout, 'position' => $position])->success($message);
    }
}

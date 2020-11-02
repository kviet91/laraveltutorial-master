<?php

if (!function_exists('show_menu')) {
    function show_menu($data, $parent_id)
    {
        return view("child_menu", ['data' => $data, 'parent_id' => $parent_id]);
    }
}

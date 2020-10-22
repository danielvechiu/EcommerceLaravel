<?php

function productImage($path)
{
    return $path && file_exists('storage/' . $path) ? asset('storage/' . $path) : asset('images/sneaker.jpg');
}

function getActiveClass($category, $output = 'active')
{
    return $category == request()->category ? $output : '';
}

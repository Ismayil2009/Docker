<?php

$goods = [
    [
        'title' => 'Phone',
        'description' => 'Hello',
        'photo' => '',
        'price' => '1500$',
    ],
    [
        'title' => 'Tablet',
        'description' => 'Hello',
        'photo' => '',
        'price' => '2500$',
    ],
    [
        'title' => 'Computer',
        'description' => 'Hello',
        'photo' => '',
        'price' => '3500$',
    ]
];

$color = "green";

echo '<pre>';
var_dump($goods);
echo '</pre>';

?>


<style>
    body{
        color: <?= $color ?>
    }
</style>
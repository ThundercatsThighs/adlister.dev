<?php 

require_once __DIR__ . '/../../models/Item.php';

$item = new item;
$item->name = 'ball';
$item->description = 'its a ball';
$item->owner = "finn_the_human";
$item->save();

$item = new item;
$item->name = 'ball';
$item->description = 'its a ball';
$item->owner = "jake_the_dog";
$item->save();

$item = new item;
$item->name = 'ball';
$item->description = 'its a ball';
$item->owner = "marceline_abadeer";
$item->save();
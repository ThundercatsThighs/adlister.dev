<?php 

require_once __DIR__ . '/../../models/Item.php';

$item = new item;
$item->name = 'scythe';
$item->description = 'for farming';
$item->owner = "finn_the_human";
$item->price = "21.00";
$item->picture = "scythe.png";
$item->user_id = 1;
$item->save();

$item = new item;
$item->name = 'bone';
$item->description = 'great for "dogs"';
$item->owner = "jake_the_dog";
$item->price = "300.00";
$item->picture = "bone.png";
$item->user_id = 2;
$item->save();

$item = new item;
$item->name = 'cat';
$item->description = 'sleeps sometimes';
$item->owner = "ice_king";
$item->price = "2.00";
$item->picture = "cat.png";
$item->user_id = 3;
$item->save();

//new items 05_31

$item = new item;
$item->name = 'urn';
$item->description = 'for storage';
$item->owner = "ice_king";
$item->price = "50.00";
$item->picture = "urn.png";
$item->user_id = 3;
$item->save();

$item = new item;
$item->name = 'gargoyle';
$item->description = 'cute, decorative piece';
$item->owner = "ice_king";
$item->price = "32.00";
$item->picture = "gargoyle.png";
$item->user_id = 3;
$item->save();

$item = new item;
$item->name = 'tarantula';
$item->description = 'good pet, house-trained';
$item->owner = "ice_king";
$item->price = "200.00";
$item->picture = "tarantula.png";
$item->user_id = 3;
$item->save();
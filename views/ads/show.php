<!--Page for single advertisement -->
<?php 

$uniqueId = implode(",", $_GET);
$uniqueId = intval($uniqueId);
$var = Item::find($uniqueId);
// var_dump($var);

?>

<div class="row">
    <div class="col s6 m6 l6 push-s3 push-m3 push-l3">
        <div id ="cardz" class="card">
            <div class="container card-image">
                <p>Item: <?=($var->name) ?> </p>
                <p>Price: <?=($var->price) ?> </p>
                <p>Seller:  <?=($var->owner) ?> </p>
                <p>Description:  <?=($var->description) ?> </p>
                <img src="/img/<?php echo($var->picture) ?>">
            </div>
        </div>
    </div>
</div>


<div class="row">
    <div class="col s1 m1 l1 right-align">
        <a href="/index" class="btn btn-success">Back to items</a>
    </div>
</div>
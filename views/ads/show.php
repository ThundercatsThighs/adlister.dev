<!--Page for single advertisement -->
<?php 

$uniqueId = implode(",", $_GET);
$uniqueId = intval($uniqueId);
$var = Item::find($uniqueId);
// var_dump($var);

?>

<div class="row">
    <div class="col s6 m6 l6">
        <div id ="cardz" class="card">
            <div class="container card-image">
                <p>Description: <?=($var->name) ?> </p>
                <p>Price: <?=($var->price) ?> </p>
                <p>Seller:  <?=($var->owner) ?> </p>
                <img src="/img/<?php echo($var->picture) ?>">
            </div>
        </div>
    </div>
</div>


<div class="row">
    <div class="col s6 left-align">
        <a href="/index" class="btn btn-success">Back to items</a>
    </div>
</div>
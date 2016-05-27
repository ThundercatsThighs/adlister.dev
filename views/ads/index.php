<!--Page for an index of advertisements-->
<div class="container">
    <!-- check REQUEST for offset -->
    <!-- prep and exec sql stmt with offset  -->
    <!-- buttons for pagination -->

    <h1>All The Ads</h1>
    <div class="row">
        <?php  foreach ($indexItems->attributes as $value): ?>
        <div class="card small col s4 hoverable">
            <div class="card-image waves-effect waves-block waves-light">
                <img class="activator" src="/img/<?= $value['picture']?>">
            </div>
            <div class="card-content">
                <span class="card-title activator grey-text text-darken-4"><?= Input::escape($value['name'])?></span>
            </div>
            <div class="card-reveal">
                <span class="card-title grey-text text-darken-4"><?=Input::escape($value['name'])?><i class="material-icons right">X</i></span>
                <p>Description: <?= Input::escape($value['description'])?> </p>
                <p>Price: <?= Input::escape($value['price'])?> </p>
                <p>Seller:  <?= Input::escape($value['owner'])?> </p>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>
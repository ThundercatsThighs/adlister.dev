<div class="container">

    <section id="welcome">

        <div class="row">

            <div class="col s12">

                <h1 class="center-align">Welcome To The Adlister of Death</h1>

            </div>

        </div>

    </section>

    <section id="features">

        
            <h3 class="">Featured Items</h3>
            <!-- loop through cards for featured row on homepage -->
            <!-- png pics shown at different size inside of card -->
            <div class="row">
            <?php $featuredItems = Item::findThreeItems(); ?>
                <?php  foreach ($featuredItems->attributes as $value): ?>
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
                    <p><a href="/show?ad=<?php echo $value['id']?>">Details for <?=Input::escape($value['name'])?></a></p>
                </div>
                <?php endforeach; ?>
            </div>

    </section>

</div>
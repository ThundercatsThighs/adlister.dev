<!--Page for user account home-->
<!-- Page adjust navbar if user is logged in -->

<!-- User info -->

<div class="row">
<?php ?>
    <div class="col s4 m4 l4">
        <p>Name: <?= $user['name'] ?></p>
        <p>Email: <?= $user['email'] ?></p>
        <p>Username: <?= $user['username'] ?></p>
    </div>
</div>
<!--  User edit profile button -->
<div class="row">
    <div class="col s4 offset-s4">
        <a href="/edit" class="btn btn-success">Edit Profile</a>
    </div>    
</div>

<!-- Users ads -->
<h2>Your Ads</h2>
<div class="container">
<?php if (Item::getUsersItems($user['id'])): ?>
<div class="row">
                <?php  foreach ($userItems->attributes as $item): ?>
                <div class="card small col s4 hoverable">
                    <div class="card-image waves-effect waves-block waves-light">
                        <img class="activator" src="/img/<?= $item['picture']?>">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4"><?= Input::escape($item['name'])?></span>
                    </div>
                    <div class="card-reveal">
                        <span class="card-title grey-text text-darken-4"><?=Input::escape($item['name'])?><i class="material-icons right">X</i></span>
                        <p>Description: <?= Input::escape($item['description'])?> </p>
                        <p>Price: <?= Input::escape($item['price'])?> </p>
                        <p>Seller:  <?= Input::escape($item['owner'])?> </p>
                    </div>
                    <p><a href="/show?ad=<?php echo $item['id']?>">Details for <?=Input::escape($item['name'])?></a></p>
                </div>
                <?php endforeach; ?>
            </div>
<div class="row">
    <div class="col-sm-6 text-right">
        <a href="/create" class="btn btn-success">Create Ad</a>
    </div>
</div>
<?php endif; ?>
</div>
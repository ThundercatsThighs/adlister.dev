<!--Page for user account home-->
<!-- Page adjust navbar if user is logged in -->

<!-- User info -->
<?php $user = Auth::user(); ?>
<div class="row">
    <div class="col s4 m4 l4">
        <p>Name: <?= $user->attributes['name'] ?></p>
        <p>Email: <?= $user->attributes['email'] ?></p>
        <p>Username: <?= $user->attributes['username'] ?></p>
    </div>
</div>
<!--  User edit profile button -->
<div class="row">
    <div class="col s4 offset-s4">
        <a href="/edit" class="btn btn-success">Edit Profile</a>
    </div>    
</div>

<!-- Users ads -->

<div class="row">
    <?php foreach ($variable as $key => $value): ?>
        <div class="card small col s6">
            <div class="card-image waves-effect waves-block waves-light">
                <img class="activator" src="/IMG/<?php echo $value['name']?>.jpg">
            </div>
            <div class="card-content">
                <span class="card-title activator grey-text text-darken-4"><?php echoInput::escape($value['name'])?><i class="material-icons right">More Info</i></span>
            </div>
            <div class="card-reveal">
                <span class="card-title grey-text text-darken-4"><?php echoInput::escape($value['name'])?><i class="material-icons right">X</i></span>
                <p>Data: <?php echoInput::escape($value['location'])?> </p>
                <p>Data:  <?php echoInput::escape($value['date_established'])?> </p>
                <p>Data: <?php echoInput::escape($value['area_in_acres'])?> </p>
                <p>Data: <?php echoInput::escape($value['description'])?> </p>
            </div>
        </div>
    <?php endforeach; ?>
    </div>
<div class="row">
    <div class="col-sm-6 text-right">
        <a href="/create" class="btn btn-success">Create Ad</a>
    </div>
</div>
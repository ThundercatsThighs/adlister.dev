<!--Page for an index of advertisements-->
<?php 

// include_once __DIR__ . '/../views/partials/head.php';
// include_once __DIR__ . '/../views/partials/navbar.php';



 ?>
<div class="row">
    <?php // foreach ($variable as $key => $value): ?>
        <div class="card small col s6">
            <div class="card-image waves-effect waves-block waves-light">
                <img class="activator" src="/IMG/<?php //echo $value['name']?>.jpg">
            </div>
            <div class="card-content">
                <span class="card-title activator grey-text text-darken-4"><?php //echoInput::escape($value['name'])?><i class="material-icons right">More Info</i></span>
            </div>
            <div class="card-reveal">
                <span class="card-title grey-text text-darken-4"><?php //echoInput::escape($value['name'])?><i class="material-icons right">X</i></span>
                <p>Data: <?php //echoInput::escape($value['location'])?> </p>
                <p>Data:  <?php //echoInput::escape($value['date_established'])?> </p>
                <p>Data: <?php //echoInput::escape($value['area_in_acres'])?> </p>
                <p>Data: <?php //echoInput::escape($value['description'])?> </p>
            </div>
        </div>
    <?php// endforeach; ?>
    </div>
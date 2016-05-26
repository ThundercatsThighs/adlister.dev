<div class="container">

    <section id="welcome">

        <div class="row">

            <div class="col s12">

                <h1 class="center-align">Welcome To The Adlister of Death</h1>

            </div>

        </div>

    </section>

    <section id="features">

        <div class="row">

            <h3 class="">Featured Items</h3>
            <!-- loop through cards for featured row on homepage -->
            <div class="row">
                <?php // foreach ($variable as $key => $value): ?>
                <div class="card small col s6">
                    <div class="card-image waves-effect waves-block waves-light">
                        <img class="activator" src="/css/<?php //echo $value['picture']?>">
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

    </section>

</div>
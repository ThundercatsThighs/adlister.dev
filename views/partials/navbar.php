<!--partial view for navbar-->

<?php 

 ?>
<html>
    <nav id="navbar" class="grey darken-1">
        <a href="../views/home.php" class="brand-logo">ADLISTEROFDEATH!!</a>
        <div class="nav-wrapper">
            <ul class="right hide-on-med-and-down">
                <li><a href="home">Home</a></li>
                <li><a href="index">Items</a></li>
                <?php if (Auth::check()): ?>
                    <li><a href="logout">Logout</a></li>
                <?php else: ?>
                    <li><a href="login">Login</a></li>
                <?php endif ?>
            </ul>
            <!-- nav links when narrow -->
            <ul id="slide-out" class="side-nav">
                <li><a href="home">Home</a></li>
                <li><a href="index">Items</a></li>
                <?php if (Auth::check()): ?>
                    <li><a href="logout">Logout</a></li>
                <?php else: ?>
                    <li><a href="login">Login</a></li>
                <?php endif ?>
            </ul>
            <!-- hamburger -->
            <a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">polymer</i></a>
        </div>
    </nav>
    <?php var_dump($_SESSION); ?>
</html>
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navigation-nav">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href=""><img src="resources/images/logo.png" alt="Logo" ></a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navigation-nav">
            <ul class="nav navbar-nav navbar-right">
                <li <?php if(basename($_SERVER['PHP_SELF'],".php")=='index'){ echo "class='active'"; } ?>><a href="">Home</a></li>
                <li <?php if(basename($_SERVER['PHP_SELF'],".php")=='inventory'){ echo "class='active'"; } ?>><a href="inventory.php">Inventory</a></li>
                <li <?php if(basename($_SERVER['PHP_SELF'],".php")=='members'){ echo "class='active'"; } ?>><a href="members.php">Members</a></li>
                <li <?php if(basename($_SERVER['PHP_SELF'],".php")=='events'){ echo "class='active'"; } ?>><a href="events.php">Events</a></li>
                <li <?php if(basename($_SERVER['PHP_SELF'],".php")=='about-us'){ echo "class='active'"; } ?>><a href="about-us.php">About Us</a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container -->
</nav>
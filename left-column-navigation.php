<?php // @Layout name: Left Column with pages submenu?>
    <?php echo ipView('_header.php')->render(); ?>

    <!-- Header -->
    <header class="subpage">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <?php echo ipSlot('breadcrumb'); ?>
                </div>
            </div>
        </div>
    </header>

    <!-- Portfolio Grid Section -->
    <section id="main" class="subpage">
        <div class="container">
            <div class="row">
                <div class="col-lg-3" id="sidebar" role="navigation">
                    <?php

                    //submenu of currently active menu item
                    $pages = \Ip\Menu\Helper::getChildItems();
                    echo ipSlot('menu', $pages);

                    echo ipBlock('side1')->render();

                    ?>
                </div>
                <div class="col-lg-9">
                    <?php echo ipBlock('main')->render(); ?>
                </div>
            </div>
        </div>
    </section>

    <?php echo ipView('_footer.php')->render(); ?>

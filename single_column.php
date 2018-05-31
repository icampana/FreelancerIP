<?php // @Layout name: Single Column ?>
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
                <div class="col-lg-12">
                    <?php echo ipBlock('main')->render(); ?>
                </div>
            </div>
        </div>
    </section>

    <?php echo ipView('_footer.php')->render(); ?>

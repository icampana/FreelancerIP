<?php // @Layout name: Home Layout ?>
    <?php echo ipView('_header.php')->render(); ?>

    <!-- Header -->
    <header>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <?php
                    $options = array(
                        'id' => 'homeImage',
                        'width' => '197',
                        'height'=>'227',
                        'class' => '',
                        'default' => ipThemeUrl('img/profile.png')
                    );
                    echo ipSlot('image', $options);
                    ?>
                    <div class="intro-text">
                        <span class="name">
                            <?php echo ipSlot('text', array(
                                'id' => 'home_name',
                                'default' => "Freelancer"
                            )); ?>
                        </span>
                        <hr class="star-light">
                        <span class="skills">
                            <?php echo ipSlot('text', array(
                                'id' => 'home_skills',
                                'default' => "Web Developer - JS Dev - UX Designer"
                            )); ?>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Portfolio Grid Section -->
    <section id="main">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <?php echo ipBlock('main')->render(); ?>
                </div>
            </div>
        </div>
    </section>

    <?php echo ipView('_footer.php')->render(); ?>

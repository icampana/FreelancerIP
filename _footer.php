<!-- Footer -->
<footer class="text-center">
    <div class="footer-above">
        <div class="container">
            <div class="row">
                <div class="footer-col col-md-4">
                    <?php echo ipBlock('footer_about')->render(); ?>
                </div>
                <div class="footer-col col-md-4">
                    <?php echo ipSlot('text', array('id' => 'socialNetworks', 'tag' => 'h3', 'default' => __('Social Networks', 'Freelancer', false))); ?>
                    <ul class="list-inline">
                        <li>
                            <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-facebook"></i></a>
                        </li>
                        <li>
                            <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-google-plus"></i></a>
                        </li>
                        <li>
                            <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-twitter"></i></a>
                        </li>
                        <li>
                            <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-linkedin"></i></a>
                        </li>
                        <li>
                            <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-dribbble"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="footer-col col-md-4">
                  <?php echo ipBlock('footer_about')->render(); ?>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-below">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <?php echo ipSlot('text', array('id' => 'themeName', 'tag' => 'div', 'default' => __('Theme "Freelancer"', 'Freelancer', false), 'class' => 'left')); ?>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
<div class="scroll-top page-scroll hidden-sm hidden-xs hidden-lg hidden-md">
    <a class="btn btn-primary" href="#page-top">
        <i class="fa fa-chevron-up"></i>
    </a>
</div>

<!-- Plugin JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

<?php
  echo ipAddJs('js/jqBootstrapValidation.js');
  echo ipAddJs('js/contact_me.js');
  echo ipAddJs('js/freelancer.min.js');
?>
<?php if (!(ipIsManagementState ( ))) { echo ipAddJs('vendor/bootstrap/js/bootstrap.min.js'); } ?>
<?php if (ipIsManagementState ( )) { echo ipAddJs('assets/tinymceConfig.js'); } ?>
<?php echo ipJs(); ?>

</body>
</html>

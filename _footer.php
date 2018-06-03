<?php
$profiles = array(
  'facebook' => array(
    'url' => ipGetThemeOption('facebookLink',''),
    'icon' => 'fa-facebook'
  ),
  'twitter' => array(
    'url' => ipGetThemeOption('twitterLink',''),
    'icon' => 'fa-twitter'
  ),
  'google' => array(
    'url' => ipGetThemeOption('googleLink',''),
    'icon' => 'fa-google-plus'
  ),
  'linkedin' => array(
    'url' => ipGetThemeOption('linkedinLink',''),
    'icon' => 'fa-linkedin'
  ),
  'website' => array(
    'url' => ipGetThemeOption('websiteLink',''),
    'icon' => 'fa-dribbble'
  ),
);

?>

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
                      <?php foreach($profiles as $profile): ?>
                        <?php if (!empty($profile['url'])): ?>
                        <li>
                            <a href="<?php echo $profile['url'] ?>" target="_blank" class="btn-social btn-outline"><i class="fa fa-fw <?php echo $profile['icon'] ?>"></i></a>
                        </li>
                        <?php endif ?>
                      <?php endforeach ?>
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

<?php
  echo ipAddJs('assets/vendor/jquery/jquery.easing.min.js', null, 10);
  echo ipAddJs('assets/js/freelancer.min.js', null, 100);
?>
<?php if (!(ipIsManagementState ( ))) { echo ipAddJs('assets/vendor/bootstrap/js/bootstrap.min.js'); } ?>
<?php if (ipIsManagementState ( )) { echo ipAddJs('assets/tinymceConfig.js'); } ?>
<?php echo ipJs(); ?>

</body>
</html>

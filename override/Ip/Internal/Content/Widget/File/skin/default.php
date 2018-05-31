<?php if (isset($files) && is_array($files)) { ?>
<ul>
<?php foreach ($files as $fileKey => $file) { ?>
    <li>
    <i class="fa fa-download fa-3"></i>
        <a href="<?php echo esc($file['url']) ?>"
           title="<?php echo esc($file['title']) ?>">
            <?php echo esc($file['title']); ?>
        </a>
    </li>
<?php } ?>
</ul>
<?php } ?>

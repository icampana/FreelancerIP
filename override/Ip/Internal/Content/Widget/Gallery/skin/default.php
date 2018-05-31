<div class="container-fluid pt">
<div class="row mt centered">   
<?php if (isset($images) && is_array($images)) { ?>
<div class="_container">
<?php foreach ($images as $imageKey => $image) { ?>
    <div class="_item ipsItem">
        <?php if(ipGetLayout() !== "main.php"):?>
        <div class="col-lg-3 col-md -3 col-sm-3 col-xs-6"> 
    <?php else:?>
        <div class="col-lg-3 col-md -3 col-sm-3 col-xs-6"> 
    <?php endif; ?>    
        <a
            <?php if ($image['type'] == 'lightbox' && !ipIsManagementState()) { ?>
                rel="lightbox"
                href="<?php echo escAttr($image['imageBig']); ?>"
            <?php } ?>
            <?php if ($image['type'] == 'link') { ?>
                href="<?php echo escAttr($image['url']); ?>"
                <?php echo $image['blank'] ? ' target="_blank" ' : ''; ?>
            <?php } ?>
            class="_link zoom green"
            title="<?php echo esc($image['title']); ?>"
            data-description="<?php echo isset($image['description']) ? escAttr($image['description']) : ''; ?>"
            >
            <img class="_image ipsImage img-responsive" src="<?php echo escAttr($image['imageSmall']); ?>" alt="<?php echo escAttr($image['title']); ?>" />
            <div class="zoomOverlay" style="opacity: 0; display: block; background-color: rgb(26, 188, 156);"></div></a>
            <p><?php echo escAttr($image['title']); ?></p>
        </a>
        </div> 
    </div>
<?php } ?>
</div>
<?php } ?>
</div>
</div>

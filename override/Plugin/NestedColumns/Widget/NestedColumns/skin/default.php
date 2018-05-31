<div class="_nestedContainer ipsNestedColsContainer">
<?php 
 $total = count($cols);
 $cols_size = floor(12 / $total);
 $cols_md_size = floor(18 / $total);
 $cols_sm_size = floor(24 / $total);
 $offset = 0;

 // Need to add an offset
 $col_diff = (12 - ($cols_size * $total));
$col_offset = '';
 if ($col_diff > 0) {
	$offset = floor($col_diff / 2);
 } 

?>
<?php foreach($cols as $i => $columnUniqueStr) { ?>
    <div class="ipsNestedCol _nestedCol col-xs-12 col-sm-<?php echo $cols_sm_size ?> col-md-<?php echo $cols_md_size ?> col-lg-<?php echo $cols_size ?> <?php echo ($i==0 && $offset>0) ? 'col-lg-offset-' .$offset : '' ?>">
        <?php
        $block = ipBlock($columnUniqueStr)->exampleContent(' ');
        if (!empty($static)) {
            $block->asStatic();
        }
        echo $block->render($revisionId); ?>
    </div>
<?php } ?>
</div>

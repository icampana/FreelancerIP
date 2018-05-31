<?php

/**
 * This comment block is used just to make IDE suggestions to work
 * @var $items \Ip\Menu\Item[]
 * @var $this \Ip\View
 */
?>
<?php if (!empty($items)){ ?>
<ul <?php echo $attributesStr; ?>><?php
    foreach($items as $menuItem) {
        $css = array();
        $submenu = '';
        $target = '';
        $class = '';
        $anchorToggleClass='';

        if($menuItem->isCurrent()) {
            $css[] = $active;
        } elseif ($menuItem->isInCurrentBreadcrumb()) {
            $css[] = $crumb;
        }
        if(sizeof($menuItem->getChildren()) > 0) {
            $css[] = "dropdown";
            $anchorToggleClass="dropdown-toggle";


        }
        if ($menuItem->isDisabled()) {
            $href = '';
            $css[] = $disabled;
        } else {
            $href = ' href="' . escAttr($menuItem->getUrl()) . '"';
        }

        if ($menuItem->getBlank()) {
            $target = ' target="_blank"';
        }

        if ($menuItem->getChildren()) {
            $submenuData = array(
                'items' => $menuItem->getChildren(),
                'depth' => $depth + 1,
                'attributesStr' => 'class="dropdown-menu" role="menu"'
            );

            $submenuData = array_merge($this->getVariables(), $submenuData);
            $submenu = ipView('menu.php', $submenuData)->render();

        }

        if (!empty($css)) {
            $class = ' class="'.implode(' ', $css).'"';
        }
        ?>
        <li<?php echo $class; ?>>

            <a <?php echo (strlen($anchorToggleClass) > 0) ? 'data-toggle="dropdown" ': '' ?> class="<?php echo $anchorToggleClass ?>" <?php echo $href; ?><?php echo $target; ?> title="<?php echo escAttr($menuItem->getTitle()); ?>">
              <?php echo $menuItem->getTitle(); ?>
            </a>
            <?php echo $submenu; ?>
        </li><?php
    } ?>
</ul>
<?php }
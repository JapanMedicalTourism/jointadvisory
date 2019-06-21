<?php
    global $base_url;
    
    $path = 'node/' . (int) $row->nid;
    $alias = drupal_get_path_alias($path);
?>
 <a href="<?php echo $alias; ?>">
    <?php echo $row->node_title; ?>
</a>
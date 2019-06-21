<?php
    global $base_url;

    $term = taxonomy_term_load($row->_field_data['nid']['entity']->field_content_category['und'][0]['tid']);
    $path = 'node/' . (int) $row->nid;
    $alias = drupal_get_path_alias($path);
?>

<a href="<?php echo $alias; ?>">
    <span class="category"><?php echo $term->name; ?> SERVICE</span>
    <div class="title">
        <?php echo $row->node_title; ?>
    </div>
</a>
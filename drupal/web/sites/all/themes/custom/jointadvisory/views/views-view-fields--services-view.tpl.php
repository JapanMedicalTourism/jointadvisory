<?php
    global $base_url;

    $uri = file_create_url($row->_field_data['nid']['entity']->field_banner['und'][0]['uri']);

    $path = 'node/' . (int) $row->_field_data['nid']['entity']->nid;
    $alias = drupal_get_path_alias($path);
?>
<a href="<?php echo $base_url . '/' .  $alias; ?>">
    <div class="service-card type-2 card__shadow--light">
        <div class="img-cover" style="background-image: url(<?php echo $uri; ?>);"></div>
        <div class="card-content article-content">
            <h1 class='title'><?php echo $row->_field_data['nid']['entity']->title; ?></h1>
        </div>
    </div>
</a>
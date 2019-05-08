<?php
    global $base_url;

    $uri = file_create_url($row->_field_data['nid']['entity']->field_image['und'][0]['uri']);

    $path = 'node/' . (int) $row->_field_data['nid']['entity']->nid;
    $alias = drupal_get_path_alias($path);
?>

<div class="team-article-card article-card">
    <div class="article-card__wrapper card__shadow--light">
        <a href="<?php echo $base_url . '/' .  $alias; ?>">
            <div class="article-card__thumbnail"
                 style="background-image: url(<?php echo $uri; ?>);"></div>
        </a>
        <div class="article-card__content article-content">
            <div class="title smaller">
                <?php echo $row->_field_data['nid']['entity']->title; ?>
            </div>
            <div class="description smaller">
                <?php echo $row->_field_data['nid']['entity']->field_position['und'][0]['value'] ?>
            </div>
            <a href="<?php echo $base_url . '/' .  $alias; ?>" title="" class="link-re">Read Bio</a>
        </div>
    </div>
</div>
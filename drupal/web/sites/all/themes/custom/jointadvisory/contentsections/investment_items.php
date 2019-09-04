<?php  
    $items = $para_banner['#entity']->field_text['und']; 
?>
<section class="main-section">
    <div class="statistics-wrapper">
        <div class="container-fluid indent-section flat-top flat-bottom ">
            <!-- Stats -->
            <div class="stats-row flat general-stat">
                <?php foreach ($items as $item) { ?>
                <div class="stats-card">
                    <?php echo $item['value']; ?>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
</section>
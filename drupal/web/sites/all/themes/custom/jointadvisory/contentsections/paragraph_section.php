<?php  
    $title = $para_banner['#entity']->field_title['und'][0]['value'];
    $text = $para_banner['#entity']->field_text['und'][0]['value'];
?>

<div class="col-md-12">
    <div class=" article-content"><br> 
        <div class="description bio styled-links dark">
            <div class="article-content styled-links dark">
                <?php if($title){ ?>
                <a><span class="category"><?php echo $title; ?></span></a>
                <hr>
            </div>
            <?php 
                    }
                echo $text;
            ?>
        </div> 
    </div>
</div>
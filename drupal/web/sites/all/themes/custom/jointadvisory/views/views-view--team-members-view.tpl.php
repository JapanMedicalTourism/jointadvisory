<section id="article-team-section" class="main-section">
    <div class="article-wrapper">
        <div class="container-fluid indent-section">
            <div class="row article-row">
                <?php print $rows; ?>
            </div>

            <?php if ($pager): ?>
		    	<?php print $pager; ?>
		  	<?php endif; ?>
        </div>
    </div>
</section>
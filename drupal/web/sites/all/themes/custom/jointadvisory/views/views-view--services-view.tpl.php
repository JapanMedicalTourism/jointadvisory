<section id="" class="main-section">
        <div class="article-wrapper">
            <div class="container-fluid indent-section">
                <div class="row">
                    <div class="col-lg-12">
                        <?php if ($header): ?>
                            <?php print $header; ?>
                        <?php endif; ?>
                    </div>
                    <div class="col-12">
                        <!-- 👁 Content LAYOUT TYPE 1 --> 
                        <div class="row">
                            <!-- Use type-1 for images with 16:9 ratio and only use lg-4 for low reso-->
                             <?php print $rows; ?>
                        </div> 
                        <!-- Content LAYOUT TYPE 1 -->
                    </div>
                </div>
            </div>
        </div>
    </section>
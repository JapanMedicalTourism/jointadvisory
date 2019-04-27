<?php
include("page-header.php");
print render ($page['content']['metatags']);
?>
<div class="container-fluid">
<?php
echo render($page['content']);
?>
</div>
<?php
include("page-footer.php");

include("page-script.php");
include("page-close-tag.php");
?>
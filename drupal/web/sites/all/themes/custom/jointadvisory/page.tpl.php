<?php
include("page-header.php");

print render ($page['content']['metatags']);

print render($page['content']);

include("page-footer.php");
include("page-script.php");
include("page-close-tag.php");
?>
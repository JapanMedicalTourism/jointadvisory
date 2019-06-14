<?php
  $block = module_invoke('views', 'block_view', $para_banner['#entity']->field_block_machine_name['und'][0]['value']);
  print render($block['content']);
?>
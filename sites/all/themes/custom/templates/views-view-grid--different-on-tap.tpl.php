<?php

/**
 * @file
 * Default simple view template to display a rows in a grid.
 *
 * - $rows contains a nested array of rows. Each row contains an array of
 *   columns.
 *
 * @ingroup views_templates
 */
?>
<div class="col-md-4">
  <?php if (!empty($title)) : ?>
    <h3 class="beer-category"><?php print $title; ?></h3>
  <?php endif; ?>
  
    <?php if (!empty($caption)) : ?>
      <caption><?php print $caption; ?></caption>
    <?php endif; ?>


      <?php foreach ($rows as $row_number => $columns): ?>
        
          <?php foreach ($columns as $column_number => $item): ?>
            <div class="beer-container">
              <?php print $item; ?>
            </div>
          <?php endforeach; ?>

      <?php endforeach; ?>

</div>
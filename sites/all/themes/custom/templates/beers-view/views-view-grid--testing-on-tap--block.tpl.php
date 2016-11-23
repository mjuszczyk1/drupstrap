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

<div class="col-md-4<?php echo' ' . $class; ?>">
  <?php if (!empty($title)) : ?>
    <h3 class="beer-category"><?php print $title; ?></h3>
  <?php endif; ?>
  <?php if (!empty($caption)) : ?>
    <caption><?php print $caption; ?></caption>
  <?php endif; ?>
  <?php foreach ($rows as $row_number => $columns): ?>
    <div class="beer-container<?php if ($row_classes[$row_number]) { print ' ' . $row_classes[$row_number] .'"';  } ?>">
      <?php foreach ($columns as $column_number => $item): ?>
        <?php if ($column_classes[$row_number][$column_number]) { print '<div class="' . $column_classes[$row_number][$column_number] .'"';  } ?>
          <?php print $item; ?>
        <?php if ($column_classes[$row_number][$column_number]): print '</div>'; endif; ?>
      <?php endforeach; ?>
    </div>
  <?php endforeach; ?>
</div>

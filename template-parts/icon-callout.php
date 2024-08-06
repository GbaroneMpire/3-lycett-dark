<?php 
/**
 * @param array $fields | required
 */
?>

<?php 
  extract($args);

  $icon_handle = $fields['icon_handle'];
  $main_text = $fields['main_text'];
  $sub_text = $fields['sub_text'];
  $column_direction = 'flex-column';
  $border_class = 'border-bottom';
  $gap_class = 'lct-gap-1';

  if (isset($is_icon_callout_section)) {
    $column_direction = 'flex-column-reverse';
    $border_class = 'border-0';
    $gap_class = 'lct-gap-2';
  }

?>
<div class="lct-callout d-flex <?= $fields['layout'] ?> lct-gap-3 align-items-center pb-4 <?= $border_class ?> <?= $fields['text_align'] ?>">

  <?php if($icon_handle): ?>
    <figure class="lct-callout__icon">
      <i class="fas fa-<?= $icon_handle ?>"></i>
    </figure>
  <?php endif; ?>

  <div class="lct-callout__text d-flex <?= $column_direction ?> <?= $gap_class ?>">
    <?php if($sub_text): ?>
      <span class="lct-callout__sub_text"><?= $sub_text ?></span>
    <?php endif; ?>

    <?php if($main_text): ?>
      <span class="lct-callout__main-text"><?= $main_text ?></span>
    <?php endif; ?>
  </div>
    
</div>
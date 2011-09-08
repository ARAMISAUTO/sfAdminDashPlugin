<?php
  use_helper('I18N');
  /** @var Array of menu items */ $items = $sf_data->getRaw('items');
?>

<div class="cpanel">
  <?php foreach ($items as $key => $item): ?>
    <?php if (sfAdminDash::hasPermission($item, $sf_user)):?>
      <div style="float: left">
        <div class="icon">
          <a href="<?php echo url_for($item['url']) ?>" title="<?php echo __($item['name'], null, 'sf_admin_dash'); ?>">
            <?php echo image_tag($item['image'], array('alt' => __($item['name'], null, 'sf_admin_dash'))); ?>
            <span><?php echo __($item['name'], null, 'sf_admin_dash'); ?></span>
          </a>
        </div>
      </div>
    <?php endif; ?>
  <?php endforeach; ?>
  <div class="clear"></div>
</div>
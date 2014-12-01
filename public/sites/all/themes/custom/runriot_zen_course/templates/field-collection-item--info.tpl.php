<?php if (!isset($items) || empty($items)) return;?>
<dl class="accordion">
<?php foreach ($items as $key => $item) : ?>
  <?php $info_item = current($item['entity']['field_collection_item']);?>
  <dt>
    <div>
      <a href="#"><?php print $info_item['field_question'][0]['#markup']; ?><span></span></a>
    </div>
  </dt>
  <dd style="display: none;">

    <?php
    $string = html_entity_decode($info_item['field_answer'][0]['#markup']);
    // check for HTML
    $html = FALSE;
    $html = $string != strip_tags($string) ? TRUE : FALSE;
    ?>
    <?php if($html) : ?>
      <?php print $string; ?>
    <?php else: ?>
      <div>
        <p><?php print nl2br($info_item['field_answer'][0]['#markup']); ?></p>
      </div>
    <?php endif; ?>

  </dd>
<?php endforeach; ?>
</dl>

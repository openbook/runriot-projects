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
    <div>
      <p><?php print $info_item['field_answer'][0]['#markup']; ?></p>
    </div>
  </dd>
<?php endforeach; ?>
</dl>

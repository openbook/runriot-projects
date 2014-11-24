
<?php if (!isset($items) || empty($items)) return;?>

<?php $current = current($items[0]['entity']['field_collection_item']);?>
<div id="media-player">
  <iframe width="100%" height="400px" src="<?php print $current['field_url'][0]['#markup']; ?>" frameborder="0" allowfullscreen=""></iframe>
</div>

<ul class="trainer-media">
<?php foreach ($items as $key => $item) : ?>
  <?php $info_item = current($item['entity']['field_collection_item']);  ?>
    <li <?php if ($key === 0) : ?>class="active"<?php endif; ?>>
      <?php print $info_item['field_description'][0]['#markup']; ?>
      <form>
        <input type="hidden" rel="popup" value="<?php print $info_item['field_show_in_pop_up']['#items'][0]['value']; ?>" />
        <input type="hidden" rel="url" value="<?php print $info_item['field_url'][0]['#markup']; ?>" />
      </form>
    </li>
    <?php endforeach; ?>
</ul>


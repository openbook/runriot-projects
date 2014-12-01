<div class="pane-thumb">
  <?php print $row->field_field_image[0]['rendered']; ?>
</div>
<div class="pane-desc">
  <h3><?php print $row->node_title;?></h3>
  <p class="meta"><?php print strip_tags($row->field_field_author[0]['rendered']);?></p>
  <p><?php print strip_tags($row->field_body[0]['rendered']);?></p>
  <p><a href="<?php print $row->field_field_link[0]['raw']['url']; ?>">Read more</a></p>
</div>

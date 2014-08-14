<div class="pane-thumb">
  <?php print $row->field_field_image[0]['rendered']; ?>
  <ul class="meta">
    <li><?php print strip_tags($row->field_field_type[0]['rendered']); ?></li>
    <li><?php print strip_tags($row->field_field_date[0]['rendered']); ?></li>
  </ul>
</div>
<div class="pane-desc">
  <h3><?php print $row->node_title;?></h3>
  <p><?php print strip_tags($row->field_body[0]['rendered']);?></p>
  <p><a href="<?php print $row->field_field_link[0]['raw']['url']; ?>">Read more</a></p>
</div>



<li class="max">
<div class="pane-thumb">
  <img src="<?php print image_style_url("project_list", $row->_field_data['nid']['entity']->field_promo_image['und'][0]['uri']); ?>" naptha_cursor="region">
  <div class="project-type">
    <p><?php print $row->_field_data['nid']['entity']->field_project_type['und'][0]['value']; ?></p>
  </div>
</div>
<div class="pane-desc">
  <h3><?php print $row->_field_data['nid']['entity']->title; ?></h3>
  <p><a class="btn" href="<?php print url("node/". $row->nid); ?>">Find out more</a></p>
</div>
</li>

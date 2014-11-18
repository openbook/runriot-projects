
<?php if (!isset($items) || empty($items)) return;?>

<?php $current = current($items[0]['entity']['field_collection_item']);?>
<?php if ($current['#view_mode'] == 'token') : ?>

<div id="course-options">
<?php foreach ($items as $key => $item) : ?>

  <?php $info_item = current($item['entity']['field_collection_item']);?>

    <div class="course-option">
      <a name="course-option-evening" class="anchor-offset"></a>
      <div class="inside cf">
        <div class="icon" id="evening"></div>
        <h3><?php print $info_item['field_title'][0]['#markup']; ?></h3>

        <div class="inside-column">
          <?php print $info_item['field_course_description'][0]['#markup']; ?>
        </div>

        <!--<div class="pullout-trainer">
          <div class="trainer-avatar"><img src="images/tamara.jpg"></div>
          <h4>The Trainer</h4>
          <p>Dr. Tamara Russell, PHD, D.CLIN PSYCH, is a neuroscientist, author, clinical  psychologist and leading Mindfulness trainer. <a href="#trainer">More about Tamara</a></p>
        </div>-->
      </div>
    </div>
  <?php endforeach; ?>

</div>

<?php else : ?>

  <?php
  $booking_items = current($current['field_event_info'][0]['entity']['field_collection_item']); ?>

        <ul id="booking-options">

        <?php foreach ($items as $key => $item) : ?>

          <?php
            $info_item = current($item['entity']['field_collection_item']);
            $short_desc = substr(strip_tags($info_item['field_course_description'][0]['#markup']), 0, strpos(wordwrap(strip_tags($info_item['field_course_description'][0]['#markup']), 100), "\n"));
          ?>

          <li><a name="booking-evening-course" class="anchor-offset"></a>
            <h2><?php print $info_item['field_title'][0]['#markup']; ?></h2>
            <p><?php print $short_desc; ?> <a href="#course-option-evening">More</a>.</p>

            <table>
              <thead>
                <tr>
                  <th class="bo-date">Date &amp; Time</th>
                  <th class="bo-group">Group size</th>
                  <th class="bo-location">Location</th>
                  <th class="bo-price">Price</th>
                  <th class="bo-concession"><span class="has-tooltip">Concessions <span class="tooltip"><span class="tooltip-icon">?</span> <span class="tooltip-message">We are offering a number of concessionary rate places for the unemployed and students, on a first come, first served basis.</span></span></span></th>
                  <th class="bo-book"></th>
                </tr>
              </thead>
              <tbody>
              <?php foreach ($info_item['field_event_info']['#items'] as $key => $booking_key) : ?>
                <?php
                $booking_item = current($info_item['field_event_info'][$key]['entity']['field_collection_item']);
                $event = _runriot_get_event_by_id($booking_item['field_eventbrite_page'][0]['#markup']);
                $tickets = _runriot_get_tickets($event);
                $full_state = isset($tickets['full']->quantity_available)
                && isset($tickets['full']->quantity_sold)
                && $tickets['full']->quantity_available > $tickets['full']->quantity_sold ? TRUE : FALSE;
                $concession_state = isset($tickets['concession']->quantity_available)
                && isset($tickets['concession']->quantity_sold)
                && $tickets['concession']->quantity_available > $tickets['concession']->quantity_sold ? TRUE : FALSE;
                ?>
                <tr>
                  <td class="bo-date"><?php print $booking_item['field_date_and_time'][0]['#markup']; ?></td>
                  <td class="bo-group"><?php print $booking_item['field_group_size'][0]['#markup']; ?></td>
                  <td class="bo-location"><?php print $booking_item['field_location'][0]['#markup']; ?></td>
                  <td class="bo-price"><?php print $booking_item['field_full_price'][0]['#markup']; ?></td>
                  <td class="bo-concession"><?php print $booking_item['field_concession_price'][0]['#markup']; ?></td>
                  <td class="bo-book">
                    <?php if (!$concession_state && !$full_state) : ?>
                    <span class="message">Sold out</span>
                    <a class="cta" href="#">Join mailing list</a>
                    <?php else : ?>
                    <a class="btn" href="<?php print $event->url; ?>">Book</a>
                    <?php endif; ?>
                  </td>
                </tr>
              <?php endforeach; ?>
              </tbody>
            </table>
          </li>

        <?php endforeach; ?>

        </ul>

<?php endif; ?>

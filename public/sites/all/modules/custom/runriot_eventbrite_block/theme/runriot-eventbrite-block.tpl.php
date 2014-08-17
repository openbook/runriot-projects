<?php
/**
 * @file
 * Template file for the theming example text form.
 *
 * Available custom variables:
 * - $text_form: A string containing the pre-rendered form.
 * - $text_form_content: An array of form elements keyed by the element name.
 *
 * The default example below renders the entire form and its form elements in
 * a default order provided by Drupal.
 *
 * Alternatively, you may print each form element in the order you desire,
 * adding any extra html markup you wish to decorate the form like this:
 *
 * <?php print $text_form_content['element_name']; ?>
 *
 * The following snippet will print the contents of the $text_form_content
 * array, hidden in the source of the page, for you to discover the individual
 * element names.
 *
 * <?php print '<!--' . print_r($text_form_content, TRUE) . '-->'; ?>
 */
$event = $variables['items']['event'];
$tickets = _runriot_get_tickets($event);
$full_state = isset($tickets['full']->quantity_available)
&& $tickets['full']->quantity_available > 0 ? TRUE : FALSE;
$concession_state = isset($tickets['concession']->quantity_available)
&& $tickets['full']->quantity_available > 0 ? TRUE : FALSE;

?>
<form id="mailing-list">
<input type="hidden" id="mailing-list-id" value="<?php print $nid; ?>" />
</form>
<!-- theming-example-text-form template -->
<ul id="ticket-options">
  <?php if ($full_state) :?>
  <li>
    <h3>Full price</h3>
    <p>&pound;<?php print money_format($tickets['full']->display_price, 2);?></p>
    <a href="<?php print $event->url; ?>" class="btn btn-alt">Book now</a>
  </li>
  <?php else : ?>
  <li class="sold-out">
    <h3>Full price</h3>
    <p>&pound;<?php print money_format($tickets['full']->display_price, 2);?> <span>Sold out</span></p>
    <a href="/rr/mailinglist/nojs/<?php print $nid; ?>" class="btn btn-alt ctools-use-modal waitinglist-signup">Join waiting list</a>
  </li>
  <?php endif; ?>

  <?php if ($concession_state) :?>
  <li>
    <h3>Concessions <span class="tooltip" style="display: inline-block;">?<span style="top: -6.5em; display: none;"> We are offering a number of concessionary rate places for the unemployed and students, on a first come, first served basis.</span></span></h3>
    <p>&pound;<?php print money_format($tickets['concession']->display_price, 2);?></p>
    <a href="<?php print $event->url; ?>" class="btn btn-alt">Book now</a>
  </li>
  <?php else : ?>
  <li class="sold-out">
    <h3>Concessions <span class="tooltip" style="display: inline-block;">?<span style="top: -6.5em; display: none;"> We are offering a number of concessionary rate places for the unemployed and students, on a first come, first served basis.</span></span></h3>
    <p>&pound;<?php print money_format($tickets['concession']->display_price, 2);?> <span>Sold out</span></p>
    <a href="/rr/mailinglist/nojs/<?php print $nid; ?>" class="btn btn-alt ctools-use-modal waitinglist-signup">Join waiting list</a>
  </li>
  <?php endif; ?>
</ul>



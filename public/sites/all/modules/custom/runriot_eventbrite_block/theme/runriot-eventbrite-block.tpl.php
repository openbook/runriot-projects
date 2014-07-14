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
?>
<!-- theming-example-text-form template -->
<div class="event-ticekts">

  <h2><?php print $event->title; ?></h2>
  <?php if (!empty($event->description)) : ?>
    <p><?php print $event->description; ?></p>
  <?php endif; ?>
  <p class="date">
    <?php print _runriot_get_event_date($event->start_date, $event->end_date); ?>
  </p>
  <div class="tickets">
    <div class="consession">
    <p class="price">Concessions: &pound;<?php print number_format($tickets['concession']->display_price, 2);?></p>
    <?php
      $tickets['concession']->quantity_available = 0;
    if (isset($tickets['concession']->quantity_available)
    && $tickets['concession']->quantity_available > 0) : ?>
      <form action="<?php print $event->url; ?>">
        <input type="submit" value="Book tickets">
      </form>
    <?php else : ?>
      <p>Concession tickets for this event have sold out.  To be notified when
      tickets become available join the <a href="javascript:void(0);"
      onclick="show('subscribe-form-concession');">mailing list</a></p>
      <?php
      $form = drupal_get_form('runriot_signup_block', array("ticket-type" => "concession"));
      print drupal_render_children($form); ?>
    <?php endif; ?>
    </div>

    <div class="full">
      <p class="price">Full price: &pound;<?php print money_format($tickets['full']->display_price, 2);?></p>
    <?php if (isset($tickets['full']->quantity_available)
    && $tickets['full']->quantity_available > 0) : ?>
      <form action="<?php print $event->url; ?>">
        <input type="submit" value="Book tickets">
      </form>
    <?php else : ?>
      <p>Concession tickets for this event have sold out.  To be notified when
      tickets become available join the <a href="javascript:void(0);"
      onlick="document.getElementById(\"subscribe-form-full\").display='block';">mailing list</a></p>
      <?php print drupal_render_children(drupal_get_form('runriot_signup_block',
      array("ticket-type" => "full",))); ?>
    <?php endif; ?>
    </div>
  </div>

</div>

<script>
function show(element) {
    if(document.getElementById(element).style.display=='none') {
      document.getElementById(element).style.display='block';
    }
}
</script>

<?php
// $Id$
/**
 * @file
 * Template to display a wall calendar.
 *
 * Available variables:
 * - $calendar
 * - $settings_form
 * - $year: The Gregorian year displayed.
 * - $month: The Gregorian month displayed.
 */
?>
<?php print drupal_render($settings_form); ?>
<div class="holidays-calendar <?php print _holidays_calculate_directionality($calendar); ?>">
  <?php print theme('holidays_calendar_navigation', array('calendar' => $calendar, 'year' => $year, 'month' => $month)); ?>
  <?php print theme('holidays_calendar_month', array('calendar' => $calendar, 'year' => $year, 'month' => $month)); ?>
</div>
<p><?php print l(t('iCal feed'), _holidays_build_url('holidays/feed')); ?></p>

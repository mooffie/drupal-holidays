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
<?php print $settings_form; ?>
<div class="calendar <?php print _holidays_calculate_directionality($calendar); ?>">
  <?php print theme('holidays_calendar_navigation', $calendar, $year, $month); ?>
  <?php print theme('holidays_calendar_month', $calendar, $year, $month); ?>
</div>

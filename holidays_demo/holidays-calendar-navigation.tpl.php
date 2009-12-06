<?php
// $Id$
/**
 * @file
 * Template to display the navigation links in a calendar.
 *
 * Available variables:
 * - $calendar: The calendar object.
 * - $year: The Gregorian year displayed.
 * - $month: The Gregorian month displayed.
 * - $today: Today's date.
 * - $first_date_shown: The date of the first day of the month displayed.
 * - $last_date_shown: The date of the last day of the month displayed.
 *
 * @see template_preprocess_holidays_calendar_navigation()
 */
?>
<table class="navigator-table" align="center"><tr>

<td>
  <div class="title"><?php print $calendar->title(); ?></div>
  <div class="navigator-today">
    <?php print _holidays_build_link(t('Back to today'), $today['year'], $today['mon']); ?>
  </div>
</td>

<td>
  <div class="navigator">
    <?php print _holidays_build_link(t('Previous year'), $year - 1, $month, _holidays_back_arrow($calendar)); ?>
    <?php print theme('holidays_year_selector', $year); ?>
    <?php print _holidays_build_link(t('Next year'), $year + 1, $month, _holidays_forward_arrow($calendar)); ?>
  </div> <!-- .navigator -->

  <div class="navigator">
    <?php print _holidays_build_link(t('Previous month'), $year, $month - 1, _holidays_back_arrow($calendar)); ?>
    <?php print theme('holidays_month_selector', $month); ?>
    <?php print _holidays_build_link(t('Next month'), $year, $month + 1, _holidays_forward_arrow($calendar)); ?>
  </div> <!-- .navigator -->

  <div class="calendar-range">
   <?php print $calendar->getLongDate($first_date_shown); ?> &#x2013; <?php print $calendar->getLongDate($last_date_shown); ?>
  </div>
</td>

</tr>
</table>

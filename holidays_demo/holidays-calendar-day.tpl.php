<?php
// $Id$
/**
 * @file
 * Template to display a day. That is, a single cell in a month view.
 *
 * Available variables:
 * - $calendar: The calendar object.
 * - $gregorian_date: The Gregorian date of this day.
 * - $native_date: The native date of this day.
 * - $holidays: An array of information about each holiday falling on this day.
 * - $holidays_classes: A list of the IDs of the holidays; suitable for a 'class' attribute.
 * - $is_today: Whether the day displayed is today.
 * - $data: Additional markup 3'rd party modules may inject.
 *
 * @see template_preprocess_holidays_calendar_day()
 */
?>
<td class="day <?php print $holiday_classes; ?> <?php if ($is_today) print 'today'; ?> ">
<span class="gregorian-number"><?php print $gregorian_date['mday']; ?></span>
<span class="native-number"><?php print $calendar->getNumber($native_date['mday']); ?>
  <?php if ($native_date['mday'] == 1): ?>
    <span class="month-name">(<?php print $calendar->getMonthName($native_date['year'], $native_date['mon']); ?>)</span>
  <?php endif; ?>
</span>
<?php foreach ($holidays as $holiday): ?>
<div class="holiday-name"><?php print $holiday['name']; ?></div>
<?php endforeach; ?>
<?php print $data; ?>
</td>

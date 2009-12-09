<?php
// $Id$
/**
 * @file
 * Template to display a full month of the calendar.
 *
 * Note that the month shown is Gregorian (that is, January, February,
 * etc.), with native dates merely overlayed upon it. Therefore, the
 * parameters theme('holidays-calendar-month', ..., $year, $month) gets
 * are <em>Gregorian</em> year and month.
 *
 * Available variables:
 * - $day_names: An array of the day of week names for the table header.
 * - $rows: An array of arrays of data for each day of the week.
 * - $year: The Gregorian year displayed.
 * - $month: The Gregorian month displayed.
 *
 * @see template_preprocess_holidays_calendar_month()
 */
?>
<table class="holidays-calendar">

<tr>
  <?php foreach ($day_names as $day): ?>
    <th class="day-header"><?php print $day; ?></td>
  <?php endforeach; ?>
</tr>

<?php foreach ($rows as $row): ?>
<tr>
  <?php foreach ($row as $cell): ?>
    <?php print $cell; ?>
  <?php endforeach; ?>
</tr>
<?php endforeach; ?>

</table>

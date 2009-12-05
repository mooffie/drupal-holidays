<?php
// @todo: document the variables.
?>
<table class="navigator-table" align="center"><tr>

<td>
  <div class="title"><?= $calendar->title() ?></div>
  <div class="navigator-today">
    <?php print _holidays_build_link(t('Back to today'), $today['year'], $today['mon']); ?>
  </div>
</td>

<td>
  <div class="navigator">
    <?php print _holidays_build_link(t('Previous year'), $year - 1, $month, _holidays_back_arrow($calendar)); ?>
    <?php print _holidays_get_year_selector(); ?>
    <?php print _holidays_build_link(t('Next year'), $year + 1, $month, _holidays_forward_arrow($calendar)); ?>
  </div> <!-- .navigator -->

  <div class="navigator">
    <?php print _holidays_build_link(t('Previous month'), $year, $month - 1, _holidays_back_arrow($calendar)); ?>
    <?php print _holidays_get_month_selector(); ?>
    <?php print _holidays_build_link(t('Next month'), $year, $month + 1, _holidays_forward_arrow($calendar)); ?>
  </div> <!-- .navigator -->

  <div class="calendar-range">
   <?php print $calendar->getLongDate($first_date_shown); ?> &#x2013; <?php print $calendar->getLongDate($last_date_shown); ?>
  </div>
</td>

</tr>
</table>

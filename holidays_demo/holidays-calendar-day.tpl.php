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
</td>

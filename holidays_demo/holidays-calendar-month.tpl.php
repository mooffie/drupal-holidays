<table class="calendar">

<tr>
  <?php foreach ($day_names as $day): ?>
    <td class="day-header"><?php print $day; ?></td>
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

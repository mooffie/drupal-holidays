// $Id$

/*
 * @file
 * Make the year and month dropdowns automatically submit the form.
 */

$(function() {

  $('#month-selector').change(function() {
    var form = $('#holidays-calendar-selection-form')[0];
    form.elements['month'].value = $(this).val();
    form.submit();
  });

  $('#year-selector').change(function() {
    var form = $('#holidays-calendar-selection-form')[0];
    form.elements['year'].value = $(this).val();
    form.submit();
  });

});

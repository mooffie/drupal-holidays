<?php
// $Id$

/**
 * @file
 * Module settings UI.
 */

function holidays_admin_overview() {
  $headers = array(t('Calendar'), t('Operations'));
  $rows = array();
  foreach (holidays_get_calendars() as $calendar_name) {
    $calendar = holidays_factory($calendar_name);
    $rows[] = array($calendar->title(), l(t('configure'), 'admin/settings/holidays/' . $calendar_name));
  }
  return theme('table', $headers, $rows);
}

function holidays_admin_calendar_form($calendar) {
  drupal_set_title(t('Default settings for %calendar-name', array('%calendar-name' => $calendar->title())));
  // Restore settings which holidays_factory() may have overriden; e.g., the language.
  $calendar = $calendar->copy();
  $calendar->settings(_holidays_default_settings($calendar->name));

  $form = $calendar->settings_form();
  $form['the_calendar'] = array(
    '#type' => 'value',
    '#value' => $calendar,
  );
  $form['submit'] = array(
    '#type' => 'submit',
    '#value' => t('Save'),
  );
  return $form;
}

function holidays_admin_calendar_form_submit($form_id, $form_values) {
  $calendar = $form_values['the_calendar'];
  $calendar->settings_form_save($form_values);
  variable_set('holidays_defaults_' . $calendar->name, $calendar->settings_get());
  drupal_set_message(t('Defaults for %calendar-name saved.', array('%calendar-name' => $calendar->title())));
  return 'admin/settings/holidays';
}

$Id$

The main use of this module is to print dates in non-Gregorian calendar
systems. E.g., use this module if you want to print Hebrew dates (and
holidays).

This module primarily provides API. Therefore it has scant user interface.

INSTALLATION
------------

Get the "engine", from https://github.com/mooffie/holidays , and copy
its 'lib' folder here.

The API
-------

The API is documented in the "engine".

When using Drupal, use `holidays_factory(calendar_name)` instead of
`NativeCalendar::factory(calendar_name)`.

DEMONSTRATION
-------------

Enable the 'holidays_demo' sub-module to see this module put to some use. You'll
find a new menu item, pointing to ?q=holidays, which will print a nice calendar.

function calendar(date) {
  // If no parameter is passed use the current date.
  if(date == null)
     date = new Date();

  day = date.getDate();
  month = date.getMonth();
  year = date.getFullYear();

  months = new Array('Th&#225;ng 1 - ','Th&#225;ng 2 - ','Th&#225;ng 3 - ','Th&#225;ng 4 - ','Th&#225;ng 5 - ','Th&#225;ng 6 - ','Th&#225;ng 7 - ','Th&#225;ng 8 - ','Th&#225;ng 9 - ','Th&#225;ng 10 - ','Th&#225;ng 11 - ','Th&#225;ng 12 - ');

  this_month = new Date(year, month, 1);
  next_month = new Date(year, month + 1, 1);

  // Find out when this month starts and ends.
  first_week_day = this_month.getDay();
  days_in_this_month = Math.round((next_month.getTime() - this_month.getTime()) / (1000 * 60 * 60 * 24));

  calendar_html = '<table style="background-color:666699; color:ffffff;">';
  calendar_html += '<tr><td colspan="7" style="background-color:9999cc; color:000000; text-align: center;">' + months[month] + ' ' + year + '</td></tr>';
  calendar_html += '<tr>';

  // Fill the first week of the month with the appropriate number of blanks.
  for(week_day = 0; week_day < first_week_day; week_day++) {
    calendar_html += '<td style="background-color:9999cc; color:000000;"> </td>';
  }

  week_day = first_week_day;
  for(day_counter = 1; day_counter <= days_in_this_month; day_counter++) {
    week_day %= 7;
    if(week_day == 0)
      calendar_html += '</tr><tr>';

    // Do something different for the current day.
    if(day == day_counter)
      calendar_html += '<td style="text-align: center;"><b>&nbsp;&nbsp;&nbsp;' + day_counter + '</b></td>';
    else
      calendar_html += '<td style="background-color:9999cc; color:000000; text-align: center;">&nbsp;&nbsp;&nbsp;' + day_counter + '</td>';

    week_day++;
  }

  calendar_html += '</tr>';
  calendar_html += '</table>';

  // Display the calendar.
  document.write(calendar_html);
}

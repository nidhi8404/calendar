function getEvent() {
  var events = new Array();
  $.ajax({
    type: "POST",
    url: "function.php?type=list",
    dataType: "json",
    success: function (data) {
      var result = data;

      $.each(result, function (i, item) {
        events.push({
          event_id: result[i].event_id,
          title: result[i].event_name,
          start: result[i].event_start_date,
          end: result[i].event_end_date,
        });
      });

      var calendarEl = document.getElementById("calendar");

      var calendar = new FullCalendar.Calendar(calendarEl, {
        headerToolbar: {
          left: "prevYear,prev,next,nextYear today",
          center: "title",
          right: "dayGridMonth,dayGridWeek,dayGridDay",
        },
        initialDate:  new Date().toISOString().slice(0, 10),
        navLinks: true, // can click day/week names to navigate views
        editable: true,
        dayMaxEvents: true, // allow "more" link when too many events
        selectable: true,
        events: events
      });

      calendar.render();
    },
  });
}
getEvent();

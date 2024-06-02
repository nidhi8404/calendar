<!DOCTYPE html>
<html>

<head>
    <title>Calendar</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" />
    <meta charset='utf-8' />


    <style>
        body {
            margin: 40px 10px;
            padding: 0;
            font-family: Arial, Helvetica Neue, Helvetica, sans-serif;
            font-size: 14px;
        }

        #calendar {
            max-width: 1100px;
            margin: 0 auto;
        }
    </style>
</head>

<body>

    <div id='calendar'></div>

    <div
      class="modal fade"
      id="event_entry_modal"
      tabindex="-1"
      role="dialog"
      aria-labelledby="modalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="modalLabel">Add New Event</h5>
            <button
              type="button"
              class="close"
              data-dismiss="modal"
              aria-label="Close"
            >
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="img-container">
              <div class="row">
                <div class="col-sm-12">
                  <div class="form-group">
                    <label for="event_name">Event name</label>
                    <input
                      type="text"
                      name="event_name"
                      id="event_name"
                      class="form-control"
                      placeholder="Enter your event name"
                    />
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="event_start_date">Event start</label>
                    <input
                      type="date"
                      name="event_start_date"
                      id="event_start_date"
                      class="form-control onlydatepicker"
                      placeholder="Event start date"
                    />
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="event_end_date">Event end</label>
                    <input
                      type="date"
                      name="event_end_date"
                      id="event_end_date"
                      class="form-control"
                      placeholder="Event end date"
                    />
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button
              type="button"
              class="btn btn-primary"
              onclick="save_event()"
            >
              Save Event
            </button>
          </div>
        </div>
      </div>
    </div>

    <script src='js/index.global.js'></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    <script src="js/script.js"></script>

    <!-- <script type="text/javascript"> -->

</body>


</html>
# Bootstrap datetimepicker v1.0 #

A jQuery UI datetimepicker widget with Twitter Bootstrap theme.  It's based on jQuery UI 1.9.1 and Twitter Bootstrap 2.1.1.

See demo page for more examples.

## Usage ##

    <input type="text" name="date" class="datetimepicker" />

    <script>
        $(document).ready(function() {
            $(".datetimepicker").datetimepicker();
        });
    </script>

Using fancy bootstrap input/button combo:

    <div class="control-group">
        <label class="control-label" for="datetimepicker">Date</label>
        <div class="controls">
            <div class="input-append">
                <input id="datetimepicker" class="input-small" type="text">
                <button id="datetimepickerbtn" class="btn" type="button"><i class="icon-calendar"></i></button>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $("#datetimepicker").datetimepicker();
            $("#datetimepickerbtn").click(function(event) {
                event.preventDefault();
                $("#datetimepicker").focus();
            })
        });
    </script>

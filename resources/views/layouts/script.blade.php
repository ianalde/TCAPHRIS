<!-- jQuery 3 -->
<script src="{{ asset('bower_components/jquery/dist/jquery.min.js') }}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{ asset('bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('dist/js/adminlte.min.js') }}"></script>
<!-- Moment.js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.min.js">
moment.tz.setDefault("Asia/Manila");
var moment = require('moment');
</script>
<script>
function startTime(){
	setTimeout(startTime, 1000);
	$('.display-time').html(moment().format('LTS'));
}

startTime();

$(document).ready(function() {
	$('.treeview-menu li').click(function() {
		$('.treeview').addClass('active');
	});
});
</script>
@yield('scripts')
<!--  JAVASCRIPT  -->
<script src="/js/jquery-1.10.2.js" type="text/javascript"></script>
<script src="/js/bootstrap.min.js" type="text/javascript"></script>
<!--  Checkbox, Radio & Switch Plugins  -->
<script src="/js/bootstrap-checkbox-radio.js"></script>
<!--  Notifications Plugin  -->
<script src="/js/bootstrap-notify.js"></script>
<!--  Theme Core javascript and methods for Demo purpose  -->
<script src="/js/paper-dashboard.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		demo.initChartist();
		$.notify({
			icon: 'ti-gift',
			message: "Welcome to <b>Paper Dashboard</b> - a beautiful Bootstrap freebie for your next project."
		},{
			type: 'success',
			timer: 4000
		});
	});
</script>
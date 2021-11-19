
	<div class="gototop js-top">
		<a href="#" class="<?php echo base_url('assets/') ?>js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	
	<script src="<?php echo base_url('assets/') ?>js/jquery.min.js"></script>
	<script src="<?php echo base_url('assets/') ?>js/jquery.easing.1.3.js"></script>
	<script src="<?php echo base_url('assets/') ?>js/bootstrap.min.js"></script>
	<script src="<?php echo base_url('assets/') ?>js/jquery.waypoints.min.js"></script>

	<script src="<?php echo base_url('assets/') ?>js/simplyCountdown.js"></script>
	<script src="<?php echo base_url('assets/') ?>js/main.js"></script>

	<script>
    var d = new Date(new Date().getTime() + 100 * 120 * 120 * 2000);

    simplyCountdown('.simply-countdown-one', {
        year: d.getFullYear(),
        month: d.getMonth() + 1,
        day: d.getDate()
    });

    $('#simply-countdown-losange').simplyCountdown({
        year: d.getFullYear(),
        month: d.getMonth() + 1,
        day: d.getDate(),
        enableUtc: false
    });
</script>

	</body>
</html>
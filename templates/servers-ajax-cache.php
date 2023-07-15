<?php
	$rdata = array_map('to_utf8', array_map('safe_html', array_map('html_attr_tags_ok', $rdata)));
	$jdata = array_map('to_utf8', array_map('safe_html', array_map('html_attr_tags_ok', $jdata)));
?>
<script>
	$j(function() {
		var tn = 'servers';

		/* data for selected record, or defaults if none is selected */
		var data = {
			client: <?php echo json_encode(['id' => $rdata['client'], 'value' => $rdata['client'], 'text' => $jdata['client']]); ?>,
			hosted_at: <?php echo json_encode(['id' => $rdata['hosted_at'], 'value' => $rdata['hosted_at'], 'text' => $jdata['hosted_at']]); ?>,
			data_center: <?php echo json_encode(['id' => $rdata['data_center'], 'value' => $rdata['data_center'], 'text' => $jdata['data_center']]); ?>,
			os: <?php echo json_encode(['id' => $rdata['os'], 'value' => $rdata['os'], 'text' => $jdata['os']]); ?>
		};

		/* initialize or continue using AppGini.cache for the current table */
		AppGini.cache = AppGini.cache || {};
		AppGini.cache[tn] = AppGini.cache[tn] || AppGini.ajaxCache();
		var cache = AppGini.cache[tn];

		/* saved value for client */
		cache.addCheck(function(u, d) {
			if(u != 'ajax_combo.php') return false;
			if(d.t == tn && d.f == 'client' && d.id == data.client.id)
				return { results: [ data.client ], more: false, elapsed: 0.01 };
			return false;
		});

		/* saved value for hosted_at */
		cache.addCheck(function(u, d) {
			if(u != 'ajax_combo.php') return false;
			if(d.t == tn && d.f == 'hosted_at' && d.id == data.hosted_at.id)
				return { results: [ data.hosted_at ], more: false, elapsed: 0.01 };
			return false;
		});

		/* saved value for data_center */
		cache.addCheck(function(u, d) {
			if(u != 'ajax_combo.php') return false;
			if(d.t == tn && d.f == 'data_center' && d.id == data.data_center.id)
				return { results: [ data.data_center ], more: false, elapsed: 0.01 };
			return false;
		});

		/* saved value for os */
		cache.addCheck(function(u, d) {
			if(u != 'ajax_combo.php') return false;
			if(d.t == tn && d.f == 'os' && d.id == data.os.id)
				return { results: [ data.os ], more: false, elapsed: 0.01 };
			return false;
		});

		cache.start();
	});
</script>


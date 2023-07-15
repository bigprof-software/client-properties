<?php
	$rdata = array_map('to_utf8', array_map('safe_html', array_map('html_attr_tags_ok', $rdata)));
	$jdata = array_map('to_utf8', array_map('safe_html', array_map('html_attr_tags_ok', $jdata)));
?>
<script>
	$j(function() {
		var tn = 'data_centers';

		/* data for selected record, or defaults if none is selected */
		var data = {
			hosting_provider: <?php echo json_encode(['id' => $rdata['hosting_provider'], 'value' => $rdata['hosting_provider'], 'text' => $jdata['hosting_provider']]); ?>
		};

		/* initialize or continue using AppGini.cache for the current table */
		AppGini.cache = AppGini.cache || {};
		AppGini.cache[tn] = AppGini.cache[tn] || AppGini.ajaxCache();
		var cache = AppGini.cache[tn];

		/* saved value for hosting_provider */
		cache.addCheck(function(u, d) {
			if(u != 'ajax_combo.php') return false;
			if(d.t == tn && d.f == 'hosting_provider' && d.id == data.hosting_provider.id)
				return { results: [ data.hosting_provider ], more: false, elapsed: 0.01 };
			return false;
		});

		cache.start();
	});
</script>


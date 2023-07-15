<?php
	$rdata = array_map('to_utf8', array_map('safe_html', array_map('html_attr_tags_ok', $rdata)));
	$jdata = array_map('to_utf8', array_map('safe_html', array_map('html_attr_tags_ok', $jdata)));
?>
<script>
	$j(function() {
		var tn = 'subdomains';

		/* data for selected record, or defaults if none is selected */
		var data = {
			domain: <?php echo json_encode(['id' => $rdata['domain'], 'value' => $rdata['domain'], 'text' => $jdata['domain']]); ?>,
			server: <?php echo json_encode(['id' => $rdata['server'], 'value' => $rdata['server'], 'text' => $jdata['server']]); ?>
		};

		/* initialize or continue using AppGini.cache for the current table */
		AppGini.cache = AppGini.cache || {};
		AppGini.cache[tn] = AppGini.cache[tn] || AppGini.ajaxCache();
		var cache = AppGini.cache[tn];

		/* saved value for domain */
		cache.addCheck(function(u, d) {
			if(u != 'ajax_combo.php') return false;
			if(d.t == tn && d.f == 'domain' && d.id == data.domain.id)
				return { results: [ data.domain ], more: false, elapsed: 0.01 };
			return false;
		});

		/* saved value for server */
		cache.addCheck(function(u, d) {
			if(u != 'ajax_combo.php') return false;
			if(d.t == tn && d.f == 'server' && d.id == data.server.id)
				return { results: [ data.server ], more: false, elapsed: 0.01 };
			return false;
		});

		cache.start();
	});
</script>


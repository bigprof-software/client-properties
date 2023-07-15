<?php
	$rdata = array_map('to_utf8', array_map('safe_html', array_map('html_attr_tags_ok', $rdata)));
	$jdata = array_map('to_utf8', array_map('safe_html', array_map('html_attr_tags_ok', $jdata)));
?>
<script>
	$j(function() {
		var tn = 'domains';

		/* data for selected record, or defaults if none is selected */
		var data = {
			client: <?php echo json_encode(['id' => $rdata['client'], 'value' => $rdata['client'], 'text' => $jdata['client']]); ?>,
			registrar: <?php echo json_encode(['id' => $rdata['registrar'], 'value' => $rdata['registrar'], 'text' => $jdata['registrar']]); ?>,
			dns_manager: <?php echo json_encode(['id' => $rdata['dns_manager'], 'value' => $rdata['dns_manager'], 'text' => $jdata['dns_manager']]); ?>,
			mail_provider: <?php echo json_encode(['id' => $rdata['mail_provider'], 'value' => $rdata['mail_provider'], 'text' => $jdata['mail_provider']]); ?>
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

		/* saved value for registrar */
		cache.addCheck(function(u, d) {
			if(u != 'ajax_combo.php') return false;
			if(d.t == tn && d.f == 'registrar' && d.id == data.registrar.id)
				return { results: [ data.registrar ], more: false, elapsed: 0.01 };
			return false;
		});

		/* saved value for dns_manager */
		cache.addCheck(function(u, d) {
			if(u != 'ajax_combo.php') return false;
			if(d.t == tn && d.f == 'dns_manager' && d.id == data.dns_manager.id)
				return { results: [ data.dns_manager ], more: false, elapsed: 0.01 };
			return false;
		});

		/* saved value for mail_provider */
		cache.addCheck(function(u, d) {
			if(u != 'ajax_combo.php') return false;
			if(d.t == tn && d.f == 'mail_provider' && d.id == data.mail_provider.id)
				return { results: [ data.mail_provider ], more: false, elapsed: 0.01 };
			return false;
		});

		cache.start();
	});
</script>


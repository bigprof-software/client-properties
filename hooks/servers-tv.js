/* start of mass_update code */
var massUpdateAlert = function(msg, showOk, okClass) {
	if(showOk == undefined) showOk = false;
	if(okClass == undefined) okClass = 'default';

	var footer = [];
	if(showOk) footer.push({ label: massUpdateTranslation.ok, bs_class: okClass });

	$j('.modal').modal('hide');
	var mId = modal_window({ message: '', title: msg, footer: footer });
	$j('#' + mId).find('.modal-body').remove();
	if(!footer.length) $j('#' + mId).find('.modal-footer').remove();
}


/* Set client command */
function massUpdateCommand_rwxxyl8crbkhb8rohohq(tn, ids) {

	/* Ask user for new value */
	modal_window({
		id: 'mass-update-new-value-modal',
		message: "<div id=\"mass-update-new-value\"><\/div>",
		title: '<i class="glyphicon glyphicon-user"></i> ' + 
			"Set client",
		footer :[{
			label: massUpdateTranslation.confirm,
			bs_class: 'primary',
			click: function () {
				var newValue = $j('#mass-update-new-value').select2('val')

				/* send update request */
				massUpdateAlert(massUpdateTranslation.pleaseWait);
				$j.ajax({
					url: "hooks\/ajax-mass-update-servers-client-rwxxyl8crbkhb8rohohq.php",
					data: { ids: ids, newValue: newValue },
					success: function() { location.reload(); },
					error: function() {
						massUpdateAlert('<span class="text-danger">' + massUpdateTranslation.error + '</span>', true, 'danger');
					}
				});
			}
		}]
	});


	/* prepare select2 drop-down inside modal */
	$j('#mass-update-new-value-modal').on('shown.bs.modal', function () {
		$j("#mass-update-new-value").select2({
			width: '100%',
			formatNoMatches: function(term){ return massUpdateTranslation.noMatches; },
			minimumResultsForSearch: 5,
			loadMorePadding: 200,
			ajax: {
				url: 'ajax_combo.php',
				dataType: 'json',
				cache: true,
				data: function(term, page) {
					return { t: 'servers', f: 'client', s: term, p: page, json: 1 }; 
				},
				results: function(resp, page){ return resp; }
			},
			escapeMarkup: function(str){ return str; }
		}).select2('focus');
	});

}

/* Set hosting provider command */
function massUpdateCommand_iq10g1trpcjtlivm3ddm(tn, ids) {

	/* Ask user for new value */
	modal_window({
		id: 'mass-update-new-value-modal',
		message: "<div id=\"mass-update-new-value\"><\/div>",
		title: '<i class="glyphicon glyphicon-globe"></i> ' + 
			"Set hosting provider",
		footer :[{
			label: massUpdateTranslation.confirm,
			bs_class: 'primary',
			click: function () {
				var newValue = $j('#mass-update-new-value').select2('val')

				/* send update request */
				massUpdateAlert(massUpdateTranslation.pleaseWait);
				$j.ajax({
					url: "hooks\/ajax-mass-update-servers-hosted_at-iq10g1trpcjtlivm3ddm.php",
					data: { ids: ids, newValue: newValue },
					success: function() { location.reload(); },
					error: function() {
						massUpdateAlert('<span class="text-danger">' + massUpdateTranslation.error + '</span>', true, 'danger');
					}
				});
			}
		}]
	});


	/* prepare select2 drop-down inside modal */
	$j('#mass-update-new-value-modal').on('shown.bs.modal', function () {
		$j("#mass-update-new-value").select2({
			width: '100%',
			formatNoMatches: function(term){ return massUpdateTranslation.noMatches; },
			minimumResultsForSearch: 5,
			loadMorePadding: 200,
			ajax: {
				url: 'ajax_combo.php',
				dataType: 'json',
				cache: true,
				data: function(term, page) {
					return { t: 'servers', f: 'hosted_at', s: term, p: page, json: 1 }; 
				},
				results: function(resp, page){ return resp; }
			},
			escapeMarkup: function(str){ return str; }
		}).select2('focus');
	});

}

/* Set OS command */
function massUpdateCommand_ec0pvl4vj5bqfledal9p(tn, ids) {

	/* Ask user for new value */
	modal_window({
		id: 'mass-update-new-value-modal',
		message: "<div id=\"mass-update-new-value\"><\/div>",
		title: '<i class="glyphicon glyphicon-modal-window"></i> ' + 
			"Set OS",
		footer :[{
			label: massUpdateTranslation.confirm,
			bs_class: 'primary',
			click: function () {
				var newValue = $j('#mass-update-new-value').select2('val')

				/* send update request */
				massUpdateAlert(massUpdateTranslation.pleaseWait);
				$j.ajax({
					url: "hooks\/ajax-mass-update-servers-os-ec0pvl4vj5bqfledal9p.php",
					data: { ids: ids, newValue: newValue },
					success: function() { location.reload(); },
					error: function() {
						massUpdateAlert('<span class="text-danger">' + massUpdateTranslation.error + '</span>', true, 'danger');
					}
				});
			}
		}]
	});


	/* prepare select2 drop-down inside modal */
	$j('#mass-update-new-value-modal').on('shown.bs.modal', function () {
		$j("#mass-update-new-value").select2({
			width: '100%',
			formatNoMatches: function(term){ return massUpdateTranslation.noMatches; },
			minimumResultsForSearch: 5,
			loadMorePadding: 200,
			ajax: {
				url: 'ajax_combo.php',
				dataType: 'json',
				cache: true,
				data: function(term, page) {
					return { t: 'servers', f: 'os', s: term, p: page, json: 1 }; 
				},
				results: function(resp, page){ return resp; }
			},
			escapeMarkup: function(str){ return str; }
		}).select2('focus');
	});

}
/* end of mass_update code */
<?php
	// For help on using hooks, please refer to https://bigprof.com/appgini/help/working-with-generated-web-database-application/hooks

	function servers_init(&$options, $memberInfo, &$args) {

		return TRUE;
	}

	function servers_header($contentType, $memberInfo, &$args) {
		$header='';

		switch($contentType) {
			case 'tableview':
				$header='';
				break;

			case 'detailview':
				$header='';
				break;

			case 'tableview+detailview':
				$header='';
				break;

			case 'print-tableview':
				$header='';
				break;

			case 'print-detailview':
				$header='';
				break;

			case 'filters':
				$header='';
				break;
		}

		return $header;
	}

	function servers_footer($contentType, $memberInfo, &$args) {
		$footer='';

		switch($contentType) {
			case 'tableview':
				$footer='';
				break;

			case 'detailview':
				$footer='';
				break;

			case 'tableview+detailview':
				$footer='';
				break;

			case 'print-tableview':
				$footer='';
				break;

			case 'print-detailview':
				$footer='';
				break;

			case 'filters':
				$footer='';
				break;
		}

		return $footer;
	}

	function servers_before_insert(&$data, $memberInfo, &$args) {

		return TRUE;
	}

	function servers_after_insert($data, $memberInfo, &$args) {

		return TRUE;
	}

	function servers_before_update(&$data, $memberInfo, &$args) {

		return TRUE;
	}

	function servers_after_update($data, $memberInfo, &$args) {

		return TRUE;
	}

	function servers_before_delete($selectedID, &$skipChecks, $memberInfo, &$args) {

		return TRUE;
	}

	function servers_after_delete($selectedID, $memberInfo, &$args) {

	}

	function servers_dv($selectedID, $memberInfo, &$html, &$args) {

	}

	function servers_csv($query, $memberInfo, &$args) {

		return $query;
	}
	function servers_batch_actions(&$args) {
		/* Inserted by Mass Update on 2021-11-04 11:05:35 */
		
		/*
		 * Q: How do I return other custom batch commands not defined in mass_update plugin?
		 * 
		 * A: Define your commands ABOVE the 'Inserted by Mass Update' comment above 
		 * in an array named $custom_actions_top to display them above the commands 
		 * created by the mass_update plugin.
		 * 
		 * You can also define commands in an array named $custom_actions_bottom
		 * (also ABOVE the 'Inserted by Mass Update' comment block) to display them 
		 * below the commands created by the mass_update plugin.
		 * 
		*/

		if(!isset($custom_actions_top) || !is_array($custom_actions_top))
			$custom_actions_top = [];

		if(!isset($custom_actions_bottom) || !is_array($custom_actions_bottom))
			$custom_actions_bottom = [];

		$command = [
			'rwxxyl8crbkhb8rohohq' => [
				'title' => "Set client",
				'function' => 'massUpdateCommand_rwxxyl8crbkhb8rohohq',
				'icon' => 'user'
			],
			'iq10g1trpcjtlivm3ddm' => [
				'title' => "Set hosting provider",
				'function' => 'massUpdateCommand_iq10g1trpcjtlivm3ddm',
				'icon' => 'globe'
			],
			'ec0pvl4vj5bqfledal9p' => [
				'title' => "Set OS",
				'function' => 'massUpdateCommand_ec0pvl4vj5bqfledal9p',
				'icon' => 'modal-window'
			],
		];

		$mi = getMemberInfo();
		switch($mi['group']) {
			case 'Admins':
				return array_merge(
					$custom_actions_top,
					[
						$command['rwxxyl8crbkhb8rohohq'],
						$command['iq10g1trpcjtlivm3ddm'],
						$command['ec0pvl4vj5bqfledal9p']
					],
					$custom_actions_bottom
				);
		}


		/* End of Mass Update code */


		return [];
	}

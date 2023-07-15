<?php
	// For help on using hooks, please refer to https://bigprof.com/appgini/help/working-with-generated-web-database-application/hooks

	function domains_init(&$options, $memberInfo, &$args) {

		return TRUE;
	}

	function domains_header($contentType, $memberInfo, &$args) {
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

	function domains_footer($contentType, $memberInfo, &$args) {
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

	function domains_before_insert(&$data, $memberInfo, &$args) {

		return TRUE;
	}

	function domains_after_insert($data, $memberInfo, &$args) {

		return TRUE;
	}

	function domains_before_update(&$data, $memberInfo, &$args) {

		return TRUE;
	}

	function domains_after_update($data, $memberInfo, &$args) {

		return TRUE;
	}

	function domains_before_delete($selectedID, &$skipChecks, $memberInfo, &$args) {

		return TRUE;
	}

	function domains_after_delete($selectedID, $memberInfo, &$args) {

	}

	function domains_dv($selectedID, $memberInfo, &$html, &$args) {

	}

	function domains_csv($query, $memberInfo, &$args) {

		return $query;
	}
	function domains_batch_actions(&$args) {
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
			'u8b86c2xe16tn648537b' => [
				'title' => "Mark as Expired",
				'function' => 'massUpdateCommand_u8b86c2xe16tn648537b',
				'icon' => 'remove'
			],
			'sah827yxuxnbil9f0lmi' => [
				'title' => "Set client",
				'function' => 'massUpdateCommand_sah827yxuxnbil9f0lmi',
				'icon' => 'user'
			],
			'mlnqg9j2640k34v1x9gq' => [
				'title' => "Set registrar",
				'function' => 'massUpdateCommand_mlnqg9j2640k34v1x9gq',
				'icon' => 'book'
			],
			'rqao5j3oc0xmrecwch71' => [
				'title' => "Set DNS manager",
				'function' => 'massUpdateCommand_rqao5j3oc0xmrecwch71',
				'icon' => 'signal'
			],
			'n3l34q4y1i80tenqkbjq' => [
				'title' => "Set mail provider",
				'function' => 'massUpdateCommand_n3l34q4y1i80tenqkbjq',
				'icon' => 'envelope'
			],
		];

		$mi = getMemberInfo();
		switch($mi['group']) {
			case 'Admins':
				return array_merge(
					$custom_actions_top,
					[
						$command['u8b86c2xe16tn648537b'],
						$command['sah827yxuxnbil9f0lmi'],
						$command['mlnqg9j2640k34v1x9gq'],
						$command['rqao5j3oc0xmrecwch71'],
						$command['n3l34q4y1i80tenqkbjq']
					],
					$custom_actions_bottom
				);
		}


		/* End of Mass Update code */


		return [];
	}

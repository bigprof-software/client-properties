<?php
	define('PREPEND_PATH', '');
	include_once(__DIR__ . '/lib.php');

	// accept a record as an assoc array, return transformed row ready to insert to table
	$transformFunctions = [
		'servers' => function($data, $options = []) {
			if(isset($data['client'])) $data['client'] = pkGivenLookupText($data['client'], 'servers', 'client');
			if(isset($data['hosted_at'])) $data['hosted_at'] = pkGivenLookupText($data['hosted_at'], 'servers', 'hosted_at');
			if(isset($data['data_center'])) $data['data_center'] = pkGivenLookupText($data['data_center'], 'servers', 'data_center');
			if(isset($data['os'])) $data['os'] = pkGivenLookupText($data['os'], 'servers', 'os');

			return $data;
		},
		'operating_systems' => function($data, $options = []) {

			return $data;
		},
		'hosting_providers' => function($data, $options = []) {

			return $data;
		},
		'data_centers' => function($data, $options = []) {
			if(isset($data['hosting_provider'])) $data['hosting_provider'] = pkGivenLookupText($data['hosting_provider'], 'data_centers', 'hosting_provider');

			return $data;
		},
		'domains' => function($data, $options = []) {
			if(isset($data['client'])) $data['client'] = pkGivenLookupText($data['client'], 'domains', 'client');
			if(isset($data['registrar'])) $data['registrar'] = pkGivenLookupText($data['registrar'], 'domains', 'registrar');
			if(isset($data['dns_manager'])) $data['dns_manager'] = pkGivenLookupText($data['dns_manager'], 'domains', 'dns_manager');
			if(isset($data['mail_provider'])) $data['mail_provider'] = pkGivenLookupText($data['mail_provider'], 'domains', 'mail_provider');
			if(isset($data['registration_date'])) $data['registration_date'] = guessMySQLDateTime($data['registration_date']);
			if(isset($data['next_renewal_date'])) $data['next_renewal_date'] = guessMySQLDateTime($data['next_renewal_date']);

			return $data;
		},
		'subdomains' => function($data, $options = []) {
			if(isset($data['domain'])) $data['domain'] = pkGivenLookupText($data['domain'], 'subdomains', 'domain');
			if(isset($data['server'])) $data['server'] = pkGivenLookupText($data['server'], 'subdomains', 'server');

			return $data;
		},
		'registrars' => function($data, $options = []) {

			return $data;
		},
		'dns_managers' => function($data, $options = []) {

			return $data;
		},
		'mail_providers' => function($data, $options = []) {

			return $data;
		},
		'clients' => function($data, $options = []) {

			return $data;
		},
		'client_contacts' => function($data, $options = []) {
			if(isset($data['client'])) $data['client'] = pkGivenLookupText($data['client'], 'client_contacts', 'client');

			return $data;
		},
		'server_events' => function($data, $options = []) {
			if(isset($data['datetime'])) $data['datetime'] = guessMySQLDateTime($data['datetime']);
			if(isset($data['server'])) $data['server'] = pkGivenLookupText($data['server'], 'server_events', 'server');

			return $data;
		},
		'domain_events' => function($data, $options = []) {
			if(isset($data['datetime'])) $data['datetime'] = guessMySQLDateTime($data['datetime']);
			if(isset($data['domain'])) $data['domain'] = pkGivenLookupText($data['domain'], 'domain_events', 'domain');

			return $data;
		},
		'subdomain_events' => function($data, $options = []) {
			if(isset($data['datetime'])) $data['datetime'] = guessMySQLDateTime($data['datetime']);
			if(isset($data['subdomain'])) $data['subdomain'] = pkGivenLookupText($data['subdomain'], 'subdomain_events', 'subdomain');

			return $data;
		},
		'client_events' => function($data, $options = []) {
			if(isset($data['datetime'])) $data['datetime'] = guessMySQLDateTime($data['datetime']);
			if(isset($data['client'])) $data['client'] = pkGivenLookupText($data['client'], 'client_events', 'client');

			return $data;
		},
	];

	// accept a record as an assoc array, return a boolean indicating whether to import or skip record
	$filterFunctions = [
		'servers' => function($data, $options = []) { return true; },
		'operating_systems' => function($data, $options = []) { return true; },
		'hosting_providers' => function($data, $options = []) { return true; },
		'data_centers' => function($data, $options = []) { return true; },
		'domains' => function($data, $options = []) { return true; },
		'subdomains' => function($data, $options = []) { return true; },
		'registrars' => function($data, $options = []) { return true; },
		'dns_managers' => function($data, $options = []) { return true; },
		'mail_providers' => function($data, $options = []) { return true; },
		'clients' => function($data, $options = []) { return true; },
		'client_contacts' => function($data, $options = []) { return true; },
		'server_events' => function($data, $options = []) { return true; },
		'domain_events' => function($data, $options = []) { return true; },
		'subdomain_events' => function($data, $options = []) { return true; },
		'client_events' => function($data, $options = []) { return true; },
	];

	/*
	Hook file for overwriting/amending $transformFunctions and $filterFunctions:
	hooks/import-csv.php
	If found, it's included below

	The way this works is by either completely overwriting any of the above 2 arrays,
	or, more commonly, overwriting a single function, for example:
		$transformFunctions['tablename'] = function($data, $options = []) {
			// new definition here
			// then you must return transformed data
			return $data;
		};

	Another scenario is transforming a specific field and leaving other fields to the default
	transformation. One possible way of doing this is to store the original transformation function
	in GLOBALS array, calling it inside the custom transformation function, then modifying the
	specific field:
		$GLOBALS['originalTransformationFunction'] = $transformFunctions['tablename'];
		$transformFunctions['tablename'] = function($data, $options = []) {
			$data = call_user_func_array($GLOBALS['originalTransformationFunction'], [$data, $options]);
			$data['fieldname'] = 'transformed value';
			return $data;
		};
	*/

	@include(__DIR__ . '/hooks/import-csv.php');

	$ui = new CSVImportUI($transformFunctions, $filterFunctions);

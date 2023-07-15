<?php
// This script and data application were generated by AppGini 23.13
// Download AppGini for free from https://bigprof.com/appgini/download/

	include_once(__DIR__ . '/lib.php');
	@include_once(__DIR__ . '/hooks/servers.php');
	include_once(__DIR__ . '/servers_dml.php');

	// mm: can the current member access this page?
	$perm = getTablePermissions('servers');
	if(!$perm['access']) {
		echo error_message($Translation['tableAccessDenied']);
		exit;
	}

	$x = new DataList;
	$x->TableName = 'servers';

	// Fields that can be displayed in the table view
	$x->QueryFieldsTV = [
		"`servers`.`id`" => "id",
		"`servers`.`ip_address`" => "ip_address",
		"IF(    CHAR_LENGTH(`clients1`.`client`), CONCAT_WS('',   `clients1`.`client`), '') /* Client */" => "client",
		"IF(    CHAR_LENGTH(`hosting_providers1`.`hosting_provider`), CONCAT_WS('',   `hosting_providers1`.`hosting_provider`), '') /* Hosted at */" => "hosted_at",
		"IF(    CHAR_LENGTH(`data_centers1`.`data_center`), CONCAT_WS('',   `data_centers1`.`data_center`), '') /* Data center */" => "data_center",
		"`servers`.`hostname`" => "hostname",
		"`servers`.`ram`" => "ram",
		"`servers`.`storage`" => "storage",
		"IF(    CHAR_LENGTH(`operating_systems1`.`operating_system`), CONCAT_WS('',   `operating_systems1`.`operating_system`), '') /* OS */" => "os",
		"`servers`.`comments`" => "comments",
	];
	// mapping incoming sort by requests to actual query fields
	$x->SortFields = [
		1 => '`servers`.`id`',
		2 => 2,
		3 => '`clients1`.`client`',
		4 => '`hosting_providers1`.`hosting_provider`',
		5 => '`data_centers1`.`data_center`',
		6 => 6,
		7 => '`servers`.`ram`',
		8 => '`servers`.`storage`',
		9 => '`operating_systems1`.`operating_system`',
		10 => 10,
	];

	// Fields that can be displayed in the csv file
	$x->QueryFieldsCSV = [
		"`servers`.`id`" => "id",
		"`servers`.`ip_address`" => "ip_address",
		"IF(    CHAR_LENGTH(`clients1`.`client`), CONCAT_WS('',   `clients1`.`client`), '') /* Client */" => "client",
		"IF(    CHAR_LENGTH(`hosting_providers1`.`hosting_provider`), CONCAT_WS('',   `hosting_providers1`.`hosting_provider`), '') /* Hosted at */" => "hosted_at",
		"IF(    CHAR_LENGTH(`data_centers1`.`data_center`), CONCAT_WS('',   `data_centers1`.`data_center`), '') /* Data center */" => "data_center",
		"`servers`.`hostname`" => "hostname",
		"`servers`.`ram`" => "ram",
		"`servers`.`storage`" => "storage",
		"IF(    CHAR_LENGTH(`operating_systems1`.`operating_system`), CONCAT_WS('',   `operating_systems1`.`operating_system`), '') /* OS */" => "os",
		"`servers`.`comments`" => "comments",
	];
	// Fields that can be filtered
	$x->QueryFieldsFilters = [
		"`servers`.`id`" => "ID",
		"`servers`.`ip_address`" => "IP address",
		"IF(    CHAR_LENGTH(`clients1`.`client`), CONCAT_WS('',   `clients1`.`client`), '') /* Client */" => "Client",
		"IF(    CHAR_LENGTH(`hosting_providers1`.`hosting_provider`), CONCAT_WS('',   `hosting_providers1`.`hosting_provider`), '') /* Hosted at */" => "Hosted at",
		"IF(    CHAR_LENGTH(`data_centers1`.`data_center`), CONCAT_WS('',   `data_centers1`.`data_center`), '') /* Data center */" => "Data center",
		"`servers`.`hostname`" => "Hostname",
		"`servers`.`ram`" => "RAM (GB)",
		"`servers`.`storage`" => "Storage (GB)",
		"IF(    CHAR_LENGTH(`operating_systems1`.`operating_system`), CONCAT_WS('',   `operating_systems1`.`operating_system`), '') /* OS */" => "OS",
		"`servers`.`comments`" => "Comments",
	];

	// Fields that can be quick searched
	$x->QueryFieldsQS = [
		"`servers`.`id`" => "id",
		"`servers`.`ip_address`" => "ip_address",
		"IF(    CHAR_LENGTH(`clients1`.`client`), CONCAT_WS('',   `clients1`.`client`), '') /* Client */" => "client",
		"IF(    CHAR_LENGTH(`hosting_providers1`.`hosting_provider`), CONCAT_WS('',   `hosting_providers1`.`hosting_provider`), '') /* Hosted at */" => "hosted_at",
		"IF(    CHAR_LENGTH(`data_centers1`.`data_center`), CONCAT_WS('',   `data_centers1`.`data_center`), '') /* Data center */" => "data_center",
		"`servers`.`hostname`" => "hostname",
		"`servers`.`ram`" => "ram",
		"`servers`.`storage`" => "storage",
		"IF(    CHAR_LENGTH(`operating_systems1`.`operating_system`), CONCAT_WS('',   `operating_systems1`.`operating_system`), '') /* OS */" => "os",
		"`servers`.`comments`" => "comments",
	];

	// Lookup fields that can be used as filterers
	$x->filterers = ['client' => 'Client', 'hosted_at' => 'Hosted at', 'data_center' => 'Data center', 'os' => 'OS', ];

	$x->QueryFrom = "`servers` LEFT JOIN `clients` as clients1 ON `clients1`.`id`=`servers`.`client` LEFT JOIN `hosting_providers` as hosting_providers1 ON `hosting_providers1`.`id`=`servers`.`hosted_at` LEFT JOIN `data_centers` as data_centers1 ON `data_centers1`.`id`=`servers`.`data_center` LEFT JOIN `operating_systems` as operating_systems1 ON `operating_systems1`.`id`=`servers`.`os` ";
	$x->QueryWhere = '';
	$x->QueryOrder = '';

	$x->AllowSelection = 1;
	$x->HideTableView = ($perm['view'] == 0 ? 1 : 0);
	$x->AllowDelete = $perm['delete'];
	$x->AllowMassDelete = (getLoggedAdmin() !== false);
	$x->AllowInsert = $perm['insert'];
	$x->AllowUpdate = $perm['edit'];
	$x->SeparateDV = 1;
	$x->AllowDeleteOfParents = 0;
	$x->AllowFilters = 1;
	$x->AllowSavingFilters = (getLoggedAdmin() !== false);
	$x->AllowSorting = 1;
	$x->AllowNavigation = 1;
	$x->AllowPrinting = 1;
	$x->AllowPrintingDV = 1;
	$x->AllowCSV = 1;
	$x->RecordsPerPage = 25;
	$x->QuickSearch = 1;
	$x->QuickSearchText = $Translation['quick search'];
	$x->ScriptFileName = 'servers_view.php';
	$x->RedirectAfterInsert = 'servers_view.php?SelectedID=#ID#';
	$x->TableTitle = 'Servers';
	$x->TableIcon = 'resources/table_icons/server.png';
	$x->PrimaryKey = '`servers`.`id`';
	$x->DefaultSortField = '1';
	$x->DefaultSortDirection = 'desc';

	$x->ColWidth = [150, 150, 150, 150, 150, 150, 150, 150, 150, ];
	$x->ColCaption = ['IP address', 'Client', 'Hosted at', 'Data center', 'Hostname', 'RAM (GB)', 'Storage (GB)', 'OS', 'Comments', ];
	$x->ColFieldName = ['ip_address', 'client', 'hosted_at', 'data_center', 'hostname', 'ram', 'storage', 'os', 'comments', ];
	$x->ColNumber  = [2, 3, 4, 5, 6, 7, 8, 9, 10, ];

	// template paths below are based on the app main directory
	$x->Template = 'templates/servers_templateTV.html';
	$x->SelectedTemplate = 'templates/servers_templateTVS.html';
	$x->TemplateDV = 'templates/servers_templateDV.html';
	$x->TemplateDVP = 'templates/servers_templateDVP.html';

	$x->ShowTableHeader = 1;
	$x->TVClasses = "";
	$x->DVClasses = "";
	$x->HasCalculatedFields = false;
	$x->AllowConsoleLog = false;
	$x->AllowDVNavigation = true;

	// hook: servers_init
	$render = true;
	if(function_exists('servers_init')) {
		$args = [];
		$render = servers_init($x, getMemberInfo(), $args);
	}

	if($render) $x->Render();

	// hook: servers_header
	$headerCode = '';
	if(function_exists('servers_header')) {
		$args = [];
		$headerCode = servers_header($x->ContentType, getMemberInfo(), $args);
	}

	if(!$headerCode) {
		include_once(__DIR__ . '/header.php'); 
	} else {
		ob_start();
		include_once(__DIR__ . '/header.php');
		echo str_replace('<%%HEADER%%>', ob_get_clean(), $headerCode);
	}

	echo $x->HTML;

	// hook: servers_footer
	$footerCode = '';
	if(function_exists('servers_footer')) {
		$args = [];
		$footerCode = servers_footer($x->ContentType, getMemberInfo(), $args);
	}

	if(!$footerCode) {
		include_once(__DIR__ . '/footer.php'); 
	} else {
		ob_start();
		include_once(__DIR__ . '/footer.php');
		echo str_replace('<%%FOOTER%%>', ob_get_clean(), $footerCode);
	}

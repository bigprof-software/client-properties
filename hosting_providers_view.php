<?php
// This script and data application were generated by AppGini 23.13
// Download AppGini for free from https://bigprof.com/appgini/download/

	include_once(__DIR__ . '/lib.php');
	@include_once(__DIR__ . '/hooks/hosting_providers.php');
	include_once(__DIR__ . '/hosting_providers_dml.php');

	// mm: can the current member access this page?
	$perm = getTablePermissions('hosting_providers');
	if(!$perm['access']) {
		echo error_message($Translation['tableAccessDenied']);
		exit;
	}

	$x = new DataList;
	$x->TableName = 'hosting_providers';

	// Fields that can be displayed in the table view
	$x->QueryFieldsTV = [
		"`hosting_providers`.`id`" => "id",
		"`hosting_providers`.`hosting_provider`" => "hosting_provider",
		"`hosting_providers`.`comments`" => "comments",
	];
	// mapping incoming sort by requests to actual query fields
	$x->SortFields = [
		1 => '`hosting_providers`.`id`',
		2 => 2,
		3 => 3,
	];

	// Fields that can be displayed in the csv file
	$x->QueryFieldsCSV = [
		"`hosting_providers`.`id`" => "id",
		"`hosting_providers`.`hosting_provider`" => "hosting_provider",
		"`hosting_providers`.`comments`" => "comments",
	];
	// Fields that can be filtered
	$x->QueryFieldsFilters = [
		"`hosting_providers`.`id`" => "ID",
		"`hosting_providers`.`hosting_provider`" => "Provider",
		"`hosting_providers`.`comments`" => "Comments",
	];

	// Fields that can be quick searched
	$x->QueryFieldsQS = [
		"`hosting_providers`.`id`" => "id",
		"`hosting_providers`.`hosting_provider`" => "hosting_provider",
		"`hosting_providers`.`comments`" => "comments",
	];

	// Lookup fields that can be used as filterers
	$x->filterers = [];

	$x->QueryFrom = "`hosting_providers` ";
	$x->QueryWhere = '';
	$x->QueryOrder = '';

	$x->AllowSelection = 1;
	$x->HideTableView = ($perm['view'] == 0 ? 1 : 0);
	$x->AllowDelete = $perm['delete'];
	$x->AllowMassDelete = (getLoggedAdmin() !== false);
	$x->AllowInsert = $perm['insert'];
	$x->AllowUpdate = $perm['edit'];
	$x->SeparateDV = 0;
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
	$x->ScriptFileName = 'hosting_providers_view.php';
	$x->RedirectAfterInsert = 'hosting_providers_view.php?SelectedID=#ID#';
	$x->TableTitle = 'Hosting providers';
	$x->TableIcon = 'resources/table_icons/hostname.png';
	$x->PrimaryKey = '`hosting_providers`.`id`';
	$x->DefaultSortField = '2';
	$x->DefaultSortDirection = 'asc';

	$x->ColWidth = [150, ];
	$x->ColCaption = ['Provider', ];
	$x->ColFieldName = ['hosting_provider', ];
	$x->ColNumber  = [2, ];

	// template paths below are based on the app main directory
	$x->Template = 'templates/hosting_providers_templateTV.html';
	$x->SelectedTemplate = 'templates/hosting_providers_templateTVS.html';
	$x->TemplateDV = 'templates/hosting_providers_templateDV.html';
	$x->TemplateDVP = 'templates/hosting_providers_templateDVP.html';

	$x->ShowTableHeader = 1;
	$x->TVClasses = "col-lg-3";
	$x->DVClasses = "col-lg-9";
	$x->HasCalculatedFields = false;
	$x->AllowConsoleLog = false;
	$x->AllowDVNavigation = true;

	// hook: hosting_providers_init
	$render = true;
	if(function_exists('hosting_providers_init')) {
		$args = [];
		$render = hosting_providers_init($x, getMemberInfo(), $args);
	}

	if($render) $x->Render();

	// hook: hosting_providers_header
	$headerCode = '';
	if(function_exists('hosting_providers_header')) {
		$args = [];
		$headerCode = hosting_providers_header($x->ContentType, getMemberInfo(), $args);
	}

	if(!$headerCode) {
		include_once(__DIR__ . '/header.php'); 
	} else {
		ob_start();
		include_once(__DIR__ . '/header.php');
		echo str_replace('<%%HEADER%%>', ob_get_clean(), $headerCode);
	}

	echo $x->HTML;

	// hook: hosting_providers_footer
	$footerCode = '';
	if(function_exists('hosting_providers_footer')) {
		$args = [];
		$footerCode = hosting_providers_footer($x->ContentType, getMemberInfo(), $args);
	}

	if(!$footerCode) {
		include_once(__DIR__ . '/footer.php'); 
	} else {
		ob_start();
		include_once(__DIR__ . '/footer.php');
		echo str_replace('<%%FOOTER%%>', ob_get_clean(), $footerCode);
	}
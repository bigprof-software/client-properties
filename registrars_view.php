<?php
// This script and data application were generated by AppGini 23.13
// Download AppGini for free from https://bigprof.com/appgini/download/

	include_once(__DIR__ . '/lib.php');
	@include_once(__DIR__ . '/hooks/registrars.php');
	include_once(__DIR__ . '/registrars_dml.php');

	// mm: can the current member access this page?
	$perm = getTablePermissions('registrars');
	if(!$perm['access']) {
		echo error_message($Translation['tableAccessDenied']);
		exit;
	}

	$x = new DataList;
	$x->TableName = 'registrars';

	// Fields that can be displayed in the table view
	$x->QueryFieldsTV = [
		"`registrars`.`id`" => "id",
		"`registrars`.`registrar`" => "registrar",
		"`registrars`.`comments`" => "comments",
	];
	// mapping incoming sort by requests to actual query fields
	$x->SortFields = [
		1 => '`registrars`.`id`',
		2 => 2,
		3 => 3,
	];

	// Fields that can be displayed in the csv file
	$x->QueryFieldsCSV = [
		"`registrars`.`id`" => "id",
		"`registrars`.`registrar`" => "registrar",
		"`registrars`.`comments`" => "comments",
	];
	// Fields that can be filtered
	$x->QueryFieldsFilters = [
		"`registrars`.`id`" => "ID",
		"`registrars`.`registrar`" => "Registrar",
		"`registrars`.`comments`" => "Comments",
	];

	// Fields that can be quick searched
	$x->QueryFieldsQS = [
		"`registrars`.`id`" => "id",
		"`registrars`.`registrar`" => "registrar",
		"`registrars`.`comments`" => "comments",
	];

	// Lookup fields that can be used as filterers
	$x->filterers = [];

	$x->QueryFrom = "`registrars` ";
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
	$x->ScriptFileName = 'registrars_view.php';
	$x->RedirectAfterInsert = 'registrars_view.php?SelectedID=#ID#';
	$x->TableTitle = 'Registrars';
	$x->TableIcon = 'resources/table_icons/book_spelling.png';
	$x->PrimaryKey = '`registrars`.`id`';
	$x->DefaultSortField = '2';
	$x->DefaultSortDirection = 'asc';

	$x->ColWidth = [150, ];
	$x->ColCaption = ['Registrar', ];
	$x->ColFieldName = ['registrar', ];
	$x->ColNumber  = [2, ];

	// template paths below are based on the app main directory
	$x->Template = 'templates/registrars_templateTV.html';
	$x->SelectedTemplate = 'templates/registrars_templateTVS.html';
	$x->TemplateDV = 'templates/registrars_templateDV.html';
	$x->TemplateDVP = 'templates/registrars_templateDVP.html';

	$x->ShowTableHeader = 1;
	$x->TVClasses = "col-lg-3";
	$x->DVClasses = "col-lg-9";
	$x->HasCalculatedFields = false;
	$x->AllowConsoleLog = false;
	$x->AllowDVNavigation = true;

	// hook: registrars_init
	$render = true;
	if(function_exists('registrars_init')) {
		$args = [];
		$render = registrars_init($x, getMemberInfo(), $args);
	}

	if($render) $x->Render();

	// hook: registrars_header
	$headerCode = '';
	if(function_exists('registrars_header')) {
		$args = [];
		$headerCode = registrars_header($x->ContentType, getMemberInfo(), $args);
	}

	if(!$headerCode) {
		include_once(__DIR__ . '/header.php'); 
	} else {
		ob_start();
		include_once(__DIR__ . '/header.php');
		echo str_replace('<%%HEADER%%>', ob_get_clean(), $headerCode);
	}

	echo $x->HTML;

	// hook: registrars_footer
	$footerCode = '';
	if(function_exists('registrars_footer')) {
		$args = [];
		$footerCode = registrars_footer($x->ContentType, getMemberInfo(), $args);
	}

	if(!$footerCode) {
		include_once(__DIR__ . '/footer.php'); 
	} else {
		ob_start();
		include_once(__DIR__ . '/footer.php');
		echo str_replace('<%%FOOTER%%>', ob_get_clean(), $footerCode);
	}

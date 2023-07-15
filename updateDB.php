<?php
	// check this file's MD5 to make sure it wasn't called before
	$tenantId = Authentication::tenantIdPadded();
	$setupHash = __DIR__ . "/setup{$tenantId}.md5";

	$prevMD5 = @file_get_contents($setupHash);
	$thisMD5 = md5_file(__FILE__);

	// check if this setup file already run
	if($thisMD5 != $prevMD5) {
		// set up tables
		setupTable(
			'servers', " 
			CREATE TABLE IF NOT EXISTS `servers` ( 
				`id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
				PRIMARY KEY (`id`),
				`ip_address` VARCHAR(40) NULL,
				`client` INT UNSIGNED NULL,
				`hosted_at` INT UNSIGNED NULL,
				`data_center` INT UNSIGNED NULL,
				`hostname` VARCHAR(40) NULL,
				`ram` DECIMAL(10,2) NULL,
				`storage` DECIMAL(10,2) NULL,
				`os` INT UNSIGNED NULL,
				`comments` TEXT NULL
			) CHARSET utf8mb4"
		);
		setupIndexes('servers', ['client','hosted_at','data_center','os',]);

		setupTable(
			'operating_systems', " 
			CREATE TABLE IF NOT EXISTS `operating_systems` ( 
				`id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
				PRIMARY KEY (`id`),
				`operating_system` VARCHAR(40) NULL,
				`comments` TEXT NULL
			) CHARSET utf8mb4"
		);

		setupTable(
			'hosting_providers', " 
			CREATE TABLE IF NOT EXISTS `hosting_providers` ( 
				`id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
				PRIMARY KEY (`id`),
				`hosting_provider` VARCHAR(40) NULL,
				`comments` TEXT NULL
			) CHARSET utf8mb4"
		);

		setupTable(
			'data_centers', " 
			CREATE TABLE IF NOT EXISTS `data_centers` ( 
				`id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
				PRIMARY KEY (`id`),
				`hosting_provider` INT UNSIGNED NULL,
				`data_center` VARCHAR(40) NULL,
				`comments` TEXT NULL
			) CHARSET utf8mb4"
		);
		setupIndexes('data_centers', ['hosting_provider',]);

		setupTable(
			'domains', " 
			CREATE TABLE IF NOT EXISTS `domains` ( 
				`domain_name` VARCHAR(100) NOT NULL,
				PRIMARY KEY (`domain_name`),
				`expired` TINYINT NULL DEFAULT '0',
				`client` INT UNSIGNED NULL,
				`registrar` INT UNSIGNED NULL,
				`dns_manager` INT UNSIGNED NULL,
				`mail_provider` INT UNSIGNED NULL,
				`registration_date` DATE NULL,
				`next_renewal_date` DATE NULL,
				`comments` TEXT NULL
			) CHARSET utf8mb4"
		);
		setupIndexes('domains', ['client','registrar','dns_manager','mail_provider',]);

		setupTable(
			'subdomains', " 
			CREATE TABLE IF NOT EXISTS `subdomains` ( 
				`id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
				PRIMARY KEY (`id`),
				`subdomain` VARCHAR(40) NULL,
				`domain` VARCHAR(100) NULL,
				`server` INT UNSIGNED NULL,
				`comments` TEXT NULL
			) CHARSET utf8mb4"
		);
		setupIndexes('subdomains', ['domain','server',]);

		setupTable(
			'registrars', " 
			CREATE TABLE IF NOT EXISTS `registrars` ( 
				`id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
				PRIMARY KEY (`id`),
				`registrar` VARCHAR(40) NULL,
				`comments` TEXT NULL
			) CHARSET utf8mb4"
		);

		setupTable(
			'dns_managers', " 
			CREATE TABLE IF NOT EXISTS `dns_managers` ( 
				`id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
				PRIMARY KEY (`id`),
				`dns_manager` VARCHAR(40) NULL,
				`comments` TEXT NULL
			) CHARSET utf8mb4"
		);

		setupTable(
			'mail_providers', " 
			CREATE TABLE IF NOT EXISTS `mail_providers` ( 
				`id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
				PRIMARY KEY (`id`),
				`mail_provider` VARCHAR(40) NULL,
				`comments` TEXT NULL
			) CHARSET utf8mb4"
		);

		setupTable(
			'clients', " 
			CREATE TABLE IF NOT EXISTS `clients` ( 
				`id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
				PRIMARY KEY (`id`),
				`client` VARCHAR(40) NULL,
				`comments` TEXT NULL
			) CHARSET utf8mb4"
		);

		setupTable(
			'client_contacts', " 
			CREATE TABLE IF NOT EXISTS `client_contacts` ( 
				`id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
				PRIMARY KEY (`id`),
				`client` INT UNSIGNED NULL,
				`first_name` VARCHAR(40) NULL,
				`last_name` VARCHAR(40) NULL,
				`title` VARCHAR(40) NULL,
				`mobile` VARCHAR(40) NULL,
				`work_phone` VARCHAR(40) NULL,
				`email` VARCHAR(80) NULL,
				`comments` TEXT NULL
			) CHARSET utf8mb4"
		);
		setupIndexes('client_contacts', ['client',]);

		setupTable(
			'server_events', " 
			CREATE TABLE IF NOT EXISTS `server_events` ( 
				`id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
				PRIMARY KEY (`id`),
				`datetime` DATETIME NULL,
				`server` INT UNSIGNED NULL,
				`event` VARCHAR(100) NULL,
				`details` TEXT NULL
			) CHARSET utf8mb4"
		);
		setupIndexes('server_events', ['server',]);

		setupTable(
			'domain_events', " 
			CREATE TABLE IF NOT EXISTS `domain_events` ( 
				`id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
				PRIMARY KEY (`id`),
				`datetime` DATETIME NULL,
				`domain` VARCHAR(100) NULL,
				`event` VARCHAR(100) NULL,
				`details` TEXT NULL
			) CHARSET utf8mb4"
		);
		setupIndexes('domain_events', ['domain',]);

		setupTable(
			'subdomain_events', " 
			CREATE TABLE IF NOT EXISTS `subdomain_events` ( 
				`id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
				PRIMARY KEY (`id`),
				`datetime` DATETIME NULL,
				`subdomain` INT UNSIGNED NULL,
				`event` VARCHAR(100) NULL,
				`details` TEXT NULL
			) CHARSET utf8mb4"
		);
		setupIndexes('subdomain_events', ['subdomain',]);

		setupTable(
			'client_events', " 
			CREATE TABLE IF NOT EXISTS `client_events` ( 
				`id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
				PRIMARY KEY (`id`),
				`datetime` DATETIME NULL,
				`client` INT UNSIGNED NULL,
				`event` VARCHAR(100) NULL,
				`details` TEXT NULL
			) CHARSET utf8mb4"
		);
		setupIndexes('client_events', ['client',]);



		// save MD5
		@file_put_contents($setupHash, $thisMD5);
	}


	function setupIndexes($tableName, $arrFields) {
		if(!is_array($arrFields) || !count($arrFields)) return false;

		foreach($arrFields as $fieldName) {
			if(!$res = @db_query("SHOW COLUMNS FROM `$tableName` like '$fieldName'")) continue;
			if(!$row = @db_fetch_assoc($res)) continue;
			if($row['Key']) continue;

			@db_query("ALTER TABLE `$tableName` ADD INDEX `$fieldName` (`$fieldName`)");
		}
	}


	function setupTable($tableName, $createSQL = '', $arrAlter = '') {
		global $Translation;
		$oldTableName = '';
		ob_start();

		echo '<div style="padding: 5px; border-bottom:solid 1px silver; font-family: verdana, arial; font-size: 10px;">';

		// is there a table rename query?
		if(is_array($arrAlter)) {
			$matches = [];
			if(preg_match("/ALTER TABLE `(.*)` RENAME `$tableName`/i", $arrAlter[0], $matches)) {
				$oldTableName = $matches[1];
			}
		}

		if($res = @db_query("SELECT COUNT(1) FROM `$tableName`")) { // table already exists
			if($row = @db_fetch_array($res)) {
				echo str_replace(['<TableName>', '<NumRecords>'], [$tableName, $row[0]], $Translation['table exists']);
				if(is_array($arrAlter)) {
					echo '<br>';
					foreach($arrAlter as $alter) {
						if($alter != '') {
							echo "$alter ... ";
							if(!@db_query($alter)) {
								echo '<span class="label label-danger">' . $Translation['failed'] . '</span>';
								echo '<div class="text-danger">' . $Translation['mysql said'] . ' ' . db_error(db_link()) . '</div>';
							} else {
								echo '<span class="label label-success">' . $Translation['ok'] . '</span>';
							}
						}
					}
				} else {
					echo $Translation['table uptodate'];
				}
			} else {
				echo str_replace('<TableName>', $tableName, $Translation['couldnt count']);
			}
		} else { // given tableName doesn't exist

			if($oldTableName != '') { // if we have a table rename query
				if($ro = @db_query("SELECT COUNT(1) FROM `$oldTableName`")) { // if old table exists, rename it.
					$renameQuery = array_shift($arrAlter); // get and remove rename query

					echo "$renameQuery ... ";
					if(!@db_query($renameQuery)) {
						echo '<span class="label label-danger">' . $Translation['failed'] . '</span>';
						echo '<div class="text-danger">' . $Translation['mysql said'] . ' ' . db_error(db_link()) . '</div>';
					} else {
						echo '<span class="label label-success">' . $Translation['ok'] . '</span>';
					}

					if(is_array($arrAlter)) setupTable($tableName, $createSQL, false, $arrAlter); // execute Alter queries on renamed table ...
				} else { // if old tableName doesn't exist (nor the new one since we're here), then just create the table.
					setupTable($tableName, $createSQL, false); // no Alter queries passed ...
				}
			} else { // tableName doesn't exist and no rename, so just create the table
				echo str_replace("<TableName>", $tableName, $Translation["creating table"]);
				if(!@db_query($createSQL)) {
					echo '<span class="label label-danger">' . $Translation['failed'] . '</span>';
					echo '<div class="text-danger">' . $Translation['mysql said'] . db_error(db_link()) . '</div>';

					// create table with a dummy field
					@db_query("CREATE TABLE IF NOT EXISTS `$tableName` (`_dummy_deletable_field` TINYINT)");
				} else {
					echo '<span class="label label-success">' . $Translation['ok'] . '</span>';
				}
			}

			// set Admin group permissions for newly created table if membership_grouppermissions exists
			if($ro = @db_query("SELECT COUNT(1) FROM `membership_grouppermissions`")) {
				// get Admins group id
				$ro = @db_query("SELECT `groupID` FROM `membership_groups` WHERE `name`='Admins'");
				if($ro) {
					$adminGroupID = intval(db_fetch_row($ro)[0]);
					if($adminGroupID) @db_query("INSERT IGNORE INTO `membership_grouppermissions` SET
						`groupID`='$adminGroupID',
						`tableName`='$tableName',
						`allowInsert`=1, `allowView`=1, `allowEdit`=1, `allowDelete`=1
					");
				}
			}
		}

		echo '</div>';

		$out = ob_get_clean();
		if(defined('APPGINI_SETUP') && APPGINI_SETUP) echo $out;
	}

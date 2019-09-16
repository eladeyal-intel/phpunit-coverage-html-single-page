#!/usr/bin/env php

<?php
$possibleAutoloadPaths = [
	// local dev repository
	__DIR__ . '/../vendor/autoload.php',
	// dependency
	__DIR__ . '/../../../../vendor/autoload.php',
];

foreach ( $possibleAutoloadPaths as $possibleAutoloadPath ) {
	if ( file_exists( $possibleAutoloadPath ) ) {
		require_once $possibleAutoloadPath;
		break;
	}
}

require_once realpath( __DIR__ . '/../compile-code-coverage.php' );

PHPUnitCompileCodeCoverage\compile();

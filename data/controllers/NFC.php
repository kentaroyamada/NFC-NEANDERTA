<?php

/*
 * Example PHP implementation used for the index.html example
 */

// DataTables PHP library
include( "../lib/DataTables.php" );

// Alias Editor classes so they are easy to use
use
	DataTables\Editor,
	DataTables\Editor\Field,
	DataTables\Editor\Format,
	DataTables\Editor\Mjoin,
	DataTables\Editor\Options,
	DataTables\Editor\Upload,
	DataTables\Editor\Validate,
	DataTables\Editor\ValidateOptions;

// Build our Editor instance and process the data coming from _POST
Editor::inst( $db, 'NFC' )
	->fields(
		Field::inst( 'type' )
			->validator( Validate::notEmpty( ValidateOptions::inst()
				->message( 'type is requied' )	
			) ),
		Field::inst( 'our_id' )
			->validator( Validate::notEmpty( ValidateOptions::inst()
				->message( 'our_id required' )	
			) ),
		Field::inst( 'decoded' ),
		Field::inst( 'encoded' ),
		Field::inst( 'URL' ),
		Field::inst( 'quality' ),
		Field::inst( 'owner_name' ),
		Field::inst( 'tagged' ),
		Field::inst( 'sales_term' ),
		Field::inst( 'tagged_date' )
			->validator( Validate::dateFormat( 'Y-m-d' ) )
			->getFormatter( Format::dateSqlToFormat( 'Y-m-d' ) )
			->setFormatter( Format::dateFormatToSql('Y-m-d' ) ),

		Field::inst( 'sold_date' )
			->validator( Validate::dateFormat( 'Y-m-d' ) )
			->getFormatter( Format::dateSqlToFormat( 'Y-m-d' ) )
			->setFormatter( Format::dateFormatToSql('Y-m-d' ) )
	)
	->process( $_POST )
	->json();

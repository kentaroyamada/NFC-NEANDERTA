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
Editor::inst( $db, 'tags' )
	->leftJoin( 'products', 'products.id', '=', 'tags.product_id' )
	->leftJoin( 'owners', 'owners.id', '=', 'tags.owner_id' )
	->fields(
		Field::inst( 'products.type' ),
		Field::inst( 'tags.product_id' )
			->validator( Validate::notEmpty( ValidateOptions::inst()
				->message( 'type is requied' )
			) )
			->options( Options::inst()
        ->table( 'products' )
        ->value( 'id' )
        ->label( 'type' )
    	),
		Field::inst( 'tags.our_id' )
			->validator( Validate::notEmpty( ValidateOptions::inst()
				->message( 'our_id required' )
			) ),
		Field::inst( 'tags.decoded' ),
		Field::inst( 'tags.encoded' ),
		Field::inst( 'tags.URL' ),
		Field::inst( 'tags.quality' ),
		Field::inst( 'owners.owner_name' ),
		Field::inst( 'tags.owner_id' )
			->options( Options::inst()
				->table( 'owners' )
				->value( 'id' )
				->label( 'owner_name' )
			),
		Field::inst( 'tags.tagged' ),
		Field::inst( 'tags.sales_term' ),
		Field::inst( 'tags.tagged_date' )
			->validator( Validate::dateFormat( 'Y-m-d' ) )
			->getFormatter( Format::dateSqlToFormat( 'Y-m-d' ) )
			->setFormatter( Format::dateFormatToSql('Y-m-d' ) ),

		Field::inst( 'tags.sold_date' )
			->validator( Validate::dateFormat( 'Y-m-d' ) )
			->getFormatter( Format::dateSqlToFormat( 'Y-m-d' ) )
			->setFormatter( Format::dateFormatToSql('Y-m-d' ) )
	)
	->process( $_POST )
	->json();

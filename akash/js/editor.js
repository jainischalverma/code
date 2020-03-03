wp.domReady( () => {
	wp.blocks.unregisterBlockStyle(
		'core/button',
		[ 'default', 'outline', 'squared', 'fill' ]
	);

/*
	wp.blocks.registerBlockStyle(
		'core/button',
		[
			{
				name: 'akash',
				label: 'Akash',
				isDefault: true,
			}
		]
	);
*/
} );

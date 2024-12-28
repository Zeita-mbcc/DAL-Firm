( function( api ) {

	// Extends our custom "business-accountant" section.
	api.sectionConstructor['business-accountant'] = api.Section.extend( {

		// No events for this type of section.
		attachEvents: function () {},

		// Always make the section active.
		isContextuallyActive: function () {
			return true;
		}
	} );

} )( wp.customize );
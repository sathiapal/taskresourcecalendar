Runner.buttonEvents["btnEventActions"] = function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = 'btnEventActions';
	
	if ( !pageObj.buttonEventBefore['btnEventActions'] ) {
		pageObj.buttonEventBefore['btnEventActions'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row, submit ) {		
			var ajax = ctrl;
var btnSet = $("#"+ctrl.id);	//	Re-cast the current controller so we can use JQuery extensions

	params['event_id']	= btnSet.data('event_id');
	params['resource_id']	= btnSet.data('resource_id');
 	params['start'] 	= btnSet.data('start');
params['end'] 	= btnSet.data('end');
params['action'] 	= btnSet.data('action');

 
		}
	}
	
	if ( !pageObj.buttonEventAfter['btnEventActions'] ) {
		pageObj.buttonEventAfter['btnEventActions'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row, params ) {
			var ajax = ctrl;
// Put your code here.
//var message = result["txt"] + " !!!";
//ajax.setMessage(message);

		}
	}
	
	$('a[id="btnEventActions"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "btnEventActions" + "_" + Runner.genId();
		
		// create object
		var button_btnEventActions = new Runner.form.Button({
			id: this.id ,
			btnName: "btnEventActions"
		});
		
		// init
		button_btnEventActions.init( {args: [ pageObj, proxy, pageid ]} );
	});
};


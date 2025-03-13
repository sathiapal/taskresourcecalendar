const dp = new DayPilot.Scheduler("dp", {
    timeHeaders: [{"groupBy":"Day"},{"groupBy":"Hour"}],
    scale: "Hour",
businessBeginsHour:7,
 businessEndsHour: 18,
    days: DayPilot.Date.today().daysInYear(),
    startDate: DayPilot.Date.today(),
    timeRangeSelectedHandling: "Enabled",
    onTimeRangeSelected: async (args) => {
         
const dateObjS = new Date(args.start);
const isoStringS = dateObjS.toISOString().replace("T", " ").split(".")[0];
const dateObjE = new Date(args.end);
const isoStringE = dateObjE.toISOString().replace("T", " ").split(".")[0];

        const modal =  Runner.displayPopup( {
   url: "tf_clients_resourcecalendar_add.php?resource_id="+args.resource+"&starttime="+isoStringS+"&endtime="+isoStringE,
  width: 700,

  height: 700,
});
 
     /* const scheduler = args.control;
      const modal = await DayPilot.Modal.prompt("Create a new event:", "Event 1");
      scheduler.clearSelection();
      if (modal.canceled) { return; }
      scheduler.events.add({
        start: args.start,
        end: args.end,
        id: DayPilot.guid(),
        resource: args.resource,
        text: modal.result
      });
      */
    },
    
     
    eventMoveHandling: "Update",
	onEventMove: (args) => {
		if(!confirm("Confirm move event ?"))
	  {
		 args.preventDefault();
	  }
    },
    onEventMoved: (args) => {
		$("[id^='btnEventActions_']").data('event_id', args.e.id());
		$("[id^='btnEventActions_']").data('resource_id', args.e.resource());
		$("[id^='btnEventActions_']").data('start', args.e.start());
		$("[id^='btnEventActions_']").data('end', args.e.end());
		$("[id^='btnEventActions_']").data('action', 'moved');
		$("[id^='btnEventActions_']").click()
		 
      args.control.message("Moved");
    },
    eventResizeHandling: "Update",
	onEventResize : (args) => {
      
	  if(!confirm("Confirm edit range ?"))
	  {
		 args.preventDefault();
	  }
	},
    onEventResized: (args) => {
		$("[id^='btnEventActions_']").data('event_id', args.e.id());
		$("[id^='btnEventActions_']").data('resource_id', args.e.resource());
		$("[id^='btnEventActions_']").data('start', args.e.start());
		$("[id^='btnEventActions_']").data('end', args.e.end());
		$("[id^='btnEventActions_']").data('action', 'resized');
		$("[id^='btnEventActions_']").click()
		 
      args.control.message("Resized");
    },
    eventDeleteHandling: "Update",
	onEventDelete : (args) => {
      
	 if(!confirm("Confirm Delete ?"))
	 {
		args.preventDefault();
	 }
  },
  onEventDeleted : (args) => {
    // API call to delete the event on the server side
    // ...
	$("[id^='btnEventActions_']").data('event_id', args.e.id());
		$("[id^='btnEventActions_']").data('resource_id', args.e.resource());
		$("[id^='btnEventActions_']").data('start', args.e.start());
		$("[id^='btnEventActions_']").data('end', args.e.end());
		$("[id^='btnEventActions_']").data('action', 'delete');
		$("[id^='btnEventActions_']").click()
		args.control.message("Deleted");
  },
     
      //args.control.message("Event deleted: " + args.e.text());
    
    eventClickHandling: "Enabled",
    onEventClicked: (args) => {
        
        Runner.displayPopup( {
   url: "tf_clients_resourcecalendar_edit.php?editid1="+args.e.id(),
  width: 700,

  height: 700,
});
    //args.control.message("Event clicked: " + args.e.text());
  },
    eventHoverHandling: "Bubble",
    bubble: new DayPilot.Bubble({
      onLoad: function(args) {
            var ev = args.source;
            args.html = "Event : " + ev.text();
        }
    }),
    treeEnabled: true,
  });
   
  dp.init();

  const app = {
    init() {
      const resources = {$resources}
      const events = {$events};
      dp.update({resources, events});
    }
  };
  app.init();
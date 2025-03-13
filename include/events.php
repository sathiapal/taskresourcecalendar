<?php
class eventsBase
{
	var $events = array();
	var $maps = array();
	function exists($event, $table = "")
	{
		if($table == "")
			return (array_key_exists($event,$this->events)!==FALSE);
		else
			return isset($this->events[$event]) && isset($this->events[$event][$table]);
	}

	function existsMap($page)
	{
		return (array_key_exists($page,$this->maps)!==FALSE);
	}
}

class class_GlobalEvents extends eventsBase
{
	function __construct()
	{
	// fill list of events

//	onscreen events
		$this->events["tf_clients_resourcecalendar_snippet"] = true;
		$this->events["tf_clients_resourcecalendar_snippet1"] = true;
		$this->events["tf_clients_resourcecalendar_snippet2"] = true;



		}

//	handlers

//	onscreen events
	function event_tf_clients_resourcecalendar_snippet(&$params)
	{
	// Put your code here.
echo '<script src="js/daypilot/daypilot-all.min.js"></script>';
	;
}
	function event_tf_clients_resourcecalendar_snippet1(&$params)
	{
	// Put your code here.
echo '<div id="dp"></div>';
	;
}
	function event_tf_clients_resourcecalendar_snippet2(&$params)
	{
	// Put your code here.
echo '<script>
  const dp = new DayPilot.Scheduler("dp", {
    timeHeaders: [{"groupBy":"Day"},{"groupBy":"Hour"}],
    scale: "Hour",
businessBeginsHour:7,
 businessEndsHour: 18,
    days: DayPilot.Date.today().daysInYear(),
    startDate: DayPilot.Date.today(),
    timeRangeSelectedHandling: "Enabled",
    onTimeRangeSelected: async (args) => {
      const scheduler = args.control;
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
    },
    eventMoveHandling: "Update",
    onEventMoved: (args) => {
      args.control.message("Event moved: " + args.e.text());
    },
    eventResizeHandling: "Update",
    onEventResized: (args) => {
      args.control.message("Event resized: " + args.e.text());
    },
    eventDeleteHandling: "Update",
    onEventDeleted: (args) => {
      args.control.message("Event deleted: " + args.e.text());
    },
    eventClickHandling: "Disabled",
    eventHoverHandling: "Bubble",
    bubble: new DayPilot.Bubble({
      onLoad: (args) => {
        
        args.html = "Event details";
      }
    }),
    treeEnabled: true,
  });
  dp.init();

  const app = {
    init() {
      const resources = [
        {name: "Resource 1", id: "R1"},
        {name: "Resource 2", id: "R2"},
        {name: "Resource 3", id: "R3"},
        {name: "Resource 4", id: "R4"},
        {name: "Resource 5", id: "R5"},
        {name: "Resource 6", id: "R6"},
        {name: "Resource 7", id: "R7"},
        {name: "Resource 8", id: "R8"},
        {name: "Resource 9", id: "R9"},
      ];
      const events = [];
      dp.update({resources, events});
    }
  };
  app.init();
</script>';
	;
}




}
?>

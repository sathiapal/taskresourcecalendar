<?php
$tdatatf_clients_resourcecalendar = array();
$tdatatf_clients_resourcecalendar[".searchableFields"] = array();
$tdatatf_clients_resourcecalendar[".ShortName"] = "tf_clients_resourcecalendar";
$tdatatf_clients_resourcecalendar[".OwnerID"] = "";
$tdatatf_clients_resourcecalendar[".OriginalTable"] = "tf_events";


$tdatatf_clients_resourcecalendar[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"list\":[\"list\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatatf_clients_resourcecalendar[".originalPagesByType"] = $tdatatf_clients_resourcecalendar[".pagesByType"];
$tdatatf_clients_resourcecalendar[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"list\":[\"list\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatatf_clients_resourcecalendar[".originalPages"] = $tdatatf_clients_resourcecalendar[".pages"];
$tdatatf_clients_resourcecalendar[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"list\":\"list\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatatf_clients_resourcecalendar[".originalDefaultPages"] = $tdatatf_clients_resourcecalendar[".defaultPages"];

//	field labels
$fieldLabelstf_clients_resourcecalendar = array();
$fieldToolTipstf_clients_resourcecalendar = array();
$pageTitlestf_clients_resourcecalendar = array();
$placeHolderstf_clients_resourcecalendar = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelstf_clients_resourcecalendar["English"] = array();
	$fieldToolTipstf_clients_resourcecalendar["English"] = array();
	$placeHolderstf_clients_resourcecalendar["English"] = array();
	$pageTitlestf_clients_resourcecalendar["English"] = array();
	$fieldLabelstf_clients_resourcecalendar["English"]["client_id"] = "Client Id";
	$fieldToolTipstf_clients_resourcecalendar["English"]["client_id"] = "";
	$placeHolderstf_clients_resourcecalendar["English"]["client_id"] = "";
	$fieldLabelstf_clients_resourcecalendar["English"]["title"] = "Title";
	$fieldToolTipstf_clients_resourcecalendar["English"]["title"] = "";
	$placeHolderstf_clients_resourcecalendar["English"]["title"] = "";
	$fieldLabelstf_clients_resourcecalendar["English"]["start"] = "Start";
	$fieldToolTipstf_clients_resourcecalendar["English"]["start"] = "";
	$placeHolderstf_clients_resourcecalendar["English"]["start"] = "";
	$fieldLabelstf_clients_resourcecalendar["English"]["end"] = "End";
	$fieldToolTipstf_clients_resourcecalendar["English"]["end"] = "";
	$placeHolderstf_clients_resourcecalendar["English"]["end"] = "";
	$fieldLabelstf_clients_resourcecalendar["English"]["event_id"] = "Event Id";
	$fieldToolTipstf_clients_resourcecalendar["English"]["event_id"] = "";
	$placeHolderstf_clients_resourcecalendar["English"]["event_id"] = "";
	$fieldLabelstf_clients_resourcecalendar["English"]["resource_id"] = "Resource Id";
	$fieldToolTipstf_clients_resourcecalendar["English"]["resource_id"] = "";
	$placeHolderstf_clients_resourcecalendar["English"]["resource_id"] = "";
	$pageTitlestf_clients_resourcecalendar["English"]["edit"] = "Resourcecalendar, Edit [{%event_id}]";
	$pageTitlestf_clients_resourcecalendar["English"]["add"] = "Resourcecalendar, Add new";
	if (count($fieldToolTipstf_clients_resourcecalendar["English"]))
		$tdatatf_clients_resourcecalendar[".isUseToolTips"] = true;
}


	$tdatatf_clients_resourcecalendar[".NCSearch"] = true;



$tdatatf_clients_resourcecalendar[".shortTableName"] = "tf_clients_resourcecalendar";
$tdatatf_clients_resourcecalendar[".nSecOptions"] = 0;

$tdatatf_clients_resourcecalendar[".mainTableOwnerID"] = "";
$tdatatf_clients_resourcecalendar[".entityType"] = 1;
$tdatatf_clients_resourcecalendar[".connId"] = "broadspireatcrmcluster8cg8qeeg";


$tdatatf_clients_resourcecalendar[".strOriginalTableName"] = "tf_events";

	



$tdatatf_clients_resourcecalendar[".showAddInPopup"] = false;

$tdatatf_clients_resourcecalendar[".showEditInPopup"] = false;

$tdatatf_clients_resourcecalendar[".showViewInPopup"] = false;

$tdatatf_clients_resourcecalendar[".listAjax"] = false;
//	temporary
//$tdatatf_clients_resourcecalendar[".listAjax"] = false;

	$tdatatf_clients_resourcecalendar[".audit"] = false;

	$tdatatf_clients_resourcecalendar[".locking"] = false;


$pages = $tdatatf_clients_resourcecalendar[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatf_clients_resourcecalendar[".edit"] = true;
	$tdatatf_clients_resourcecalendar[".afterEditAction"] = 1;
	$tdatatf_clients_resourcecalendar[".closePopupAfterEdit"] = 0;
	$tdatatf_clients_resourcecalendar[".afterEditActionDetTable"] = "Detail tables not found!";
}

if( $pages[PAGE_ADD] ) {
$tdatatf_clients_resourcecalendar[".add"] = true;
$tdatatf_clients_resourcecalendar[".afterAddAction"] = 1;
$tdatatf_clients_resourcecalendar[".closePopupAfterAdd"] = 0;
$tdatatf_clients_resourcecalendar[".afterAddActionDetTable"] = "Detail tables not found!";
}

if( $pages[PAGE_LIST] ) {
	$tdatatf_clients_resourcecalendar[".list"] = true;
}



$tdatatf_clients_resourcecalendar[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatf_clients_resourcecalendar[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatf_clients_resourcecalendar[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatf_clients_resourcecalendar[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatf_clients_resourcecalendar[".printFriendly"] = true;
}



$tdatatf_clients_resourcecalendar[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatf_clients_resourcecalendar[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatf_clients_resourcecalendar[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatf_clients_resourcecalendar[".isUseAjaxSuggest"] = true;



			

$tdatatf_clients_resourcecalendar[".ajaxCodeSnippetAdded"] = false;

$tdatatf_clients_resourcecalendar[".buttonsAdded"] = false;

$tdatatf_clients_resourcecalendar[".addPageEvents"] = true;

// use timepicker for search panel
$tdatatf_clients_resourcecalendar[".isUseTimeForSearch"] = false;


$tdatatf_clients_resourcecalendar[".badgeColor"] = "008B8B";


$tdatatf_clients_resourcecalendar[".allSearchFields"] = array();
$tdatatf_clients_resourcecalendar[".filterFields"] = array();
$tdatatf_clients_resourcecalendar[".requiredSearchFields"] = array();

$tdatatf_clients_resourcecalendar[".googleLikeFields"] = array();
$tdatatf_clients_resourcecalendar[".googleLikeFields"][] = "client_id";
$tdatatf_clients_resourcecalendar[".googleLikeFields"][] = "title";
$tdatatf_clients_resourcecalendar[".googleLikeFields"][] = "start";
$tdatatf_clients_resourcecalendar[".googleLikeFields"][] = "end";
$tdatatf_clients_resourcecalendar[".googleLikeFields"][] = "event_id";
$tdatatf_clients_resourcecalendar[".googleLikeFields"][] = "resource_id";



$tdatatf_clients_resourcecalendar[".tableType"] = "list";

$tdatatf_clients_resourcecalendar[".printerPageOrientation"] = 0;
$tdatatf_clients_resourcecalendar[".nPrinterPageScale"] = 100;

$tdatatf_clients_resourcecalendar[".nPrinterSplitRecords"] = 40;

$tdatatf_clients_resourcecalendar[".geocodingEnabled"] = false;










$tdatatf_clients_resourcecalendar[".pageSize"] = 20;

$tdatatf_clients_resourcecalendar[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatatf_clients_resourcecalendar[".strOrderBy"] = $tstrOrderBy;

$tdatatf_clients_resourcecalendar[".orderindexes"] = array();


$tdatatf_clients_resourcecalendar[".sqlHead"] = "SELECT tf_events.client_id,  tf_events.title,  tf_events.`start`,  tf_events.`end`,  tf_events.event_id,  tf_events.resource_id";
$tdatatf_clients_resourcecalendar[".sqlFrom"] = "FROM tf_events   INNER JOIN tf_clients ON tf_clients.client_id = tf_events.client_id";
$tdatatf_clients_resourcecalendar[".sqlWhereExpr"] = "";
$tdatatf_clients_resourcecalendar[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatf_clients_resourcecalendar[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatf_clients_resourcecalendar[".arrGroupsPerPage"] = $arrGPP;

$tdatatf_clients_resourcecalendar[".highlightSearchResults"] = true;

$tableKeystf_clients_resourcecalendar = array();
$tableKeystf_clients_resourcecalendar[] = "event_id";
$tdatatf_clients_resourcecalendar[".Keys"] = $tableKeystf_clients_resourcecalendar;


$tdatatf_clients_resourcecalendar[".hideMobileList"] = array();




//	client_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "client_id";
	$fdata["GoodName"] = "client_id";
	$fdata["ownerTable"] = "tf_events";
	$fdata["Label"] = GetFieldLabel("tf_clients_resourcecalendar","client_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "client_id";

		$fdata["sourceSingle"] = "client_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tf_events.client_id";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatatf_clients_resourcecalendar["client_id"] = $fdata;
		$tdatatf_clients_resourcecalendar[".searchableFields"][] = "client_id";
//	title
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "title";
	$fdata["GoodName"] = "title";
	$fdata["ownerTable"] = "tf_events";
	$fdata["Label"] = GetFieldLabel("tf_clients_resourcecalendar","title");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "title";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tf_events.title";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatatf_clients_resourcecalendar["title"] = $fdata;
		$tdatatf_clients_resourcecalendar[".searchableFields"][] = "title";
//	start
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "start";
	$fdata["GoodName"] = "start";
	$fdata["ownerTable"] = "tf_events";
	$fdata["Label"] = GetFieldLabel("tf_clients_resourcecalendar","start");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "start";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tf_events.`start`";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

		$edata["ShowTime"] = true;

		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 2;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatatf_clients_resourcecalendar["start"] = $fdata;
		$tdatatf_clients_resourcecalendar[".searchableFields"][] = "start";
//	end
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "end";
	$fdata["GoodName"] = "end";
	$fdata["ownerTable"] = "tf_events";
	$fdata["Label"] = GetFieldLabel("tf_clients_resourcecalendar","end");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "end";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tf_events.`end`";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

		$edata["ShowTime"] = true;

		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 2;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatatf_clients_resourcecalendar["end"] = $fdata;
		$tdatatf_clients_resourcecalendar[".searchableFields"][] = "end";
//	event_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "event_id";
	$fdata["GoodName"] = "event_id";
	$fdata["ownerTable"] = "tf_events";
	$fdata["Label"] = GetFieldLabel("tf_clients_resourcecalendar","event_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "event_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tf_events.event_id";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatatf_clients_resourcecalendar["event_id"] = $fdata;
		$tdatatf_clients_resourcecalendar[".searchableFields"][] = "event_id";
//	resource_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "resource_id";
	$fdata["GoodName"] = "resource_id";
	$fdata["ownerTable"] = "tf_events";
	$fdata["Label"] = GetFieldLabel("tf_clients_resourcecalendar","resource_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "resource_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tf_events.resource_id";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "tf_resources";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "resource_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "resourcename";

				$edata["LookupWhere"] = "client_id=':session.client_id'";


	
	$edata["LookupOrderBy"] = "resourcename";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatatf_clients_resourcecalendar["resource_id"] = $fdata;
		$tdatatf_clients_resourcecalendar[".searchableFields"][] = "resource_id";


$tables_data["tf_clients_resourcecalendar"]=&$tdatatf_clients_resourcecalendar;
$field_labels["tf_clients_resourcecalendar"] = &$fieldLabelstf_clients_resourcecalendar;
$fieldToolTips["tf_clients_resourcecalendar"] = &$fieldToolTipstf_clients_resourcecalendar;
$placeHolders["tf_clients_resourcecalendar"] = &$placeHolderstf_clients_resourcecalendar;
$page_titles["tf_clients_resourcecalendar"] = &$pageTitlestf_clients_resourcecalendar;


changeTextControlsToDate( "tf_clients_resourcecalendar" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["tf_clients_resourcecalendar"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["tf_clients_resourcecalendar"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_tf_clients_resourcecalendar()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "tf_events.client_id,  tf_events.title,  tf_events.`start`,  tf_events.`end`,  tf_events.event_id,  tf_events.resource_id";
$proto0["m_strFrom"] = "FROM tf_events   INNER JOIN tf_clients ON tf_clients.client_id = tf_events.client_id";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "";
$proto2["m_havingmode"] = false;
$proto2["m_inBrackets"] = false;
$proto2["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto2);

$proto0["m_where"] = $obj;
$proto4=array();
$proto4["m_sql"] = "";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = false;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto6=array();
			$obj = new SQLField(array(
	"m_strName" => "client_id",
	"m_strTable" => "tf_events",
	"m_srcTableName" => "tf_clients_resourcecalendar"
));

$proto6["m_sql"] = "tf_events.client_id";
$proto6["m_srcTableName"] = "tf_clients_resourcecalendar";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "title",
	"m_strTable" => "tf_events",
	"m_srcTableName" => "tf_clients_resourcecalendar"
));

$proto8["m_sql"] = "tf_events.title";
$proto8["m_srcTableName"] = "tf_clients_resourcecalendar";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "start",
	"m_strTable" => "tf_events",
	"m_srcTableName" => "tf_clients_resourcecalendar"
));

$proto10["m_sql"] = "tf_events.`start`";
$proto10["m_srcTableName"] = "tf_clients_resourcecalendar";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "end",
	"m_strTable" => "tf_events",
	"m_srcTableName" => "tf_clients_resourcecalendar"
));

$proto12["m_sql"] = "tf_events.`end`";
$proto12["m_srcTableName"] = "tf_clients_resourcecalendar";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "event_id",
	"m_strTable" => "tf_events",
	"m_srcTableName" => "tf_clients_resourcecalendar"
));

$proto14["m_sql"] = "tf_events.event_id";
$proto14["m_srcTableName"] = "tf_clients_resourcecalendar";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "resource_id",
	"m_strTable" => "tf_events",
	"m_srcTableName" => "tf_clients_resourcecalendar"
));

$proto16["m_sql"] = "tf_events.resource_id";
$proto16["m_srcTableName"] = "tf_clients_resourcecalendar";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "tf_events";
$proto19["m_srcTableName"] = "tf_clients_resourcecalendar";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "event_id";
$proto19["m_columns"][] = "client_id";
$proto19["m_columns"][] = "title";
$proto19["m_columns"][] = "start";
$proto19["m_columns"][] = "end";
$proto19["m_columns"][] = "resource_id";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "tf_events";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "tf_clients_resourcecalendar";
$proto20=array();
$proto20["m_sql"] = "";
$proto20["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto20["m_column"]=$obj;
$proto20["m_contained"] = array();
$proto20["m_strCase"] = "";
$proto20["m_havingmode"] = false;
$proto20["m_inBrackets"] = false;
$proto20["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto20);

$proto18["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto18);

$proto0["m_fromlist"][]=$obj;
												$proto22=array();
$proto22["m_link"] = "SQLL_INNERJOIN";
			$proto23=array();
$proto23["m_strName"] = "tf_clients";
$proto23["m_srcTableName"] = "tf_clients_resourcecalendar";
$proto23["m_columns"] = array();
$proto23["m_columns"][] = "client_id";
$proto23["m_columns"][] = "client_name";
$obj = new SQLTable($proto23);

$proto22["m_table"] = $obj;
$proto22["m_sql"] = "INNER JOIN tf_clients ON tf_clients.client_id = tf_events.client_id";
$proto22["m_alias"] = "";
$proto22["m_srcTableName"] = "tf_clients_resourcecalendar";
$proto24=array();
$proto24["m_sql"] = "tf_clients.client_id = tf_events.client_id";
$proto24["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "client_id",
	"m_strTable" => "tf_clients",
	"m_srcTableName" => "tf_clients_resourcecalendar"
));

$proto24["m_column"]=$obj;
$proto24["m_contained"] = array();
$proto24["m_strCase"] = "= tf_events.client_id";
$proto24["m_havingmode"] = false;
$proto24["m_inBrackets"] = false;
$proto24["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto24);

$proto22["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto22);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="tf_clients_resourcecalendar";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tf_clients_resourcecalendar = createSqlQuery_tf_clients_resourcecalendar();


	
		;

						

$tdatatf_clients_resourcecalendar[".sqlquery"] = $queryData_tf_clients_resourcecalendar;



include_once(getabspath("include/tf_clients_resourcecalendar_events.php"));
$tdatatf_clients_resourcecalendar[".hasEvents"] = true;

?>
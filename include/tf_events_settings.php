<?php
$tdatatf_events = array();
$tdatatf_events[".searchableFields"] = array();
$tdatatf_events[".ShortName"] = "tf_events";
$tdatatf_events[".OwnerID"] = "";
$tdatatf_events[".OriginalTable"] = "tf_events";


$tdatatf_events[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdatatf_events[".originalPagesByType"] = $tdatatf_events[".pagesByType"];
$tdatatf_events[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdatatf_events[".originalPages"] = $tdatatf_events[".pages"];
$tdatatf_events[".defaultPages"] = my_json_decode( "{\"list\":\"list\",\"search\":\"search\"}" );
$tdatatf_events[".originalDefaultPages"] = $tdatatf_events[".defaultPages"];

//	field labels
$fieldLabelstf_events = array();
$fieldToolTipstf_events = array();
$pageTitlestf_events = array();
$placeHolderstf_events = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelstf_events["English"] = array();
	$fieldToolTipstf_events["English"] = array();
	$placeHolderstf_events["English"] = array();
	$pageTitlestf_events["English"] = array();
	$fieldLabelstf_events["English"]["title"] = "Title";
	$fieldToolTipstf_events["English"]["title"] = "";
	$placeHolderstf_events["English"]["title"] = "";
	$fieldLabelstf_events["English"]["start"] = "Start";
	$fieldToolTipstf_events["English"]["start"] = "";
	$placeHolderstf_events["English"]["start"] = "";
	$fieldLabelstf_events["English"]["end"] = "End";
	$fieldToolTipstf_events["English"]["end"] = "";
	$placeHolderstf_events["English"]["end"] = "";
	$fieldLabelstf_events["English"]["client_id"] = "Client Id";
	$fieldToolTipstf_events["English"]["client_id"] = "";
	$placeHolderstf_events["English"]["client_id"] = "";
	$fieldLabelstf_events["English"]["resource_id"] = "Resource Id";
	$fieldToolTipstf_events["English"]["resource_id"] = "";
	$placeHolderstf_events["English"]["resource_id"] = "";
	$fieldLabelstf_events["English"]["event_id"] = "Event Id";
	$fieldToolTipstf_events["English"]["event_id"] = "";
	$placeHolderstf_events["English"]["event_id"] = "";
	if (count($fieldToolTipstf_events["English"]))
		$tdatatf_events[".isUseToolTips"] = true;
}


	$tdatatf_events[".NCSearch"] = true;



$tdatatf_events[".shortTableName"] = "tf_events";
$tdatatf_events[".nSecOptions"] = 0;

$tdatatf_events[".mainTableOwnerID"] = "";
$tdatatf_events[".entityType"] = 0;
$tdatatf_events[".connId"] = "broadspireatcrmcluster8cg8qeeg";


$tdatatf_events[".strOriginalTableName"] = "tf_events";

	



$tdatatf_events[".showAddInPopup"] = false;

$tdatatf_events[".showEditInPopup"] = false;

$tdatatf_events[".showViewInPopup"] = false;

$tdatatf_events[".listAjax"] = false;
//	temporary
//$tdatatf_events[".listAjax"] = false;

	$tdatatf_events[".audit"] = false;

	$tdatatf_events[".locking"] = false;


$pages = $tdatatf_events[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatf_events[".edit"] = true;
	$tdatatf_events[".afterEditAction"] = 1;
	$tdatatf_events[".closePopupAfterEdit"] = 1;
	$tdatatf_events[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatf_events[".add"] = true;
$tdatatf_events[".afterAddAction"] = 1;
$tdatatf_events[".closePopupAfterAdd"] = 1;
$tdatatf_events[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatf_events[".list"] = true;
}



$tdatatf_events[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatf_events[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatf_events[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatf_events[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatf_events[".printFriendly"] = true;
}



$tdatatf_events[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatf_events[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatf_events[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatf_events[".isUseAjaxSuggest"] = true;



			

$tdatatf_events[".ajaxCodeSnippetAdded"] = false;

$tdatatf_events[".buttonsAdded"] = false;

$tdatatf_events[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatf_events[".isUseTimeForSearch"] = false;


$tdatatf_events[".badgeColor"] = "E8926F";


$tdatatf_events[".allSearchFields"] = array();
$tdatatf_events[".filterFields"] = array();
$tdatatf_events[".requiredSearchFields"] = array();

$tdatatf_events[".googleLikeFields"] = array();
$tdatatf_events[".googleLikeFields"][] = "event_id";
$tdatatf_events[".googleLikeFields"][] = "client_id";
$tdatatf_events[".googleLikeFields"][] = "title";
$tdatatf_events[".googleLikeFields"][] = "start";
$tdatatf_events[".googleLikeFields"][] = "end";
$tdatatf_events[".googleLikeFields"][] = "resource_id";



$tdatatf_events[".tableType"] = "list";

$tdatatf_events[".printerPageOrientation"] = 0;
$tdatatf_events[".nPrinterPageScale"] = 100;

$tdatatf_events[".nPrinterSplitRecords"] = 40;

$tdatatf_events[".geocodingEnabled"] = false;










$tdatatf_events[".pageSize"] = 20;

$tdatatf_events[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatatf_events[".strOrderBy"] = $tstrOrderBy;

$tdatatf_events[".orderindexes"] = array();


$tdatatf_events[".sqlHead"] = "SELECT event_id,  	client_id,  	title,  	`start`,  	`end`,  	resource_id";
$tdatatf_events[".sqlFrom"] = "FROM tf_events";
$tdatatf_events[".sqlWhereExpr"] = "";
$tdatatf_events[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatf_events[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatf_events[".arrGroupsPerPage"] = $arrGPP;

$tdatatf_events[".highlightSearchResults"] = true;

$tableKeystf_events = array();
$tdatatf_events[".Keys"] = $tableKeystf_events;


$tdatatf_events[".hideMobileList"] = array();




//	event_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "event_id";
	$fdata["GoodName"] = "event_id";
	$fdata["ownerTable"] = "tf_events";
	$fdata["Label"] = GetFieldLabel("tf_events","event_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "event_id";

		$fdata["sourceSingle"] = "event_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "event_id";

	
	
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


	$tdatatf_events["event_id"] = $fdata;
		$tdatatf_events[".searchableFields"][] = "event_id";
//	client_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "client_id";
	$fdata["GoodName"] = "client_id";
	$fdata["ownerTable"] = "tf_events";
	$fdata["Label"] = GetFieldLabel("tf_events","client_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "client_id";

		$fdata["sourceSingle"] = "client_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "client_id";

	
	
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


	$tdatatf_events["client_id"] = $fdata;
		$tdatatf_events[".searchableFields"][] = "client_id";
//	title
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "title";
	$fdata["GoodName"] = "title";
	$fdata["ownerTable"] = "tf_events";
	$fdata["Label"] = GetFieldLabel("tf_events","title");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "title";

		$fdata["sourceSingle"] = "title";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "title";

	
	
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


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
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


	$tdatatf_events["title"] = $fdata;
		$tdatatf_events[".searchableFields"][] = "title";
//	start
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "start";
	$fdata["GoodName"] = "start";
	$fdata["ownerTable"] = "tf_events";
	$fdata["Label"] = GetFieldLabel("tf_events","start");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "start";

		$fdata["sourceSingle"] = "start";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`start`";

	
	
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

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
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


	$tdatatf_events["start"] = $fdata;
		$tdatatf_events[".searchableFields"][] = "start";
//	end
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "end";
	$fdata["GoodName"] = "end";
	$fdata["ownerTable"] = "tf_events";
	$fdata["Label"] = GetFieldLabel("tf_events","end");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "end";

		$fdata["sourceSingle"] = "end";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`end`";

	
	
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

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
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


	$tdatatf_events["end"] = $fdata;
		$tdatatf_events[".searchableFields"][] = "end";
//	resource_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "resource_id";
	$fdata["GoodName"] = "resource_id";
	$fdata["ownerTable"] = "tf_events";
	$fdata["Label"] = GetFieldLabel("tf_events","resource_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "resource_id";

		$fdata["sourceSingle"] = "resource_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "resource_id";

	
	
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


	$tdatatf_events["resource_id"] = $fdata;
		$tdatatf_events[".searchableFields"][] = "resource_id";


$tables_data["tf_events"]=&$tdatatf_events;
$field_labels["tf_events"] = &$fieldLabelstf_events;
$fieldToolTips["tf_events"] = &$fieldToolTipstf_events;
$placeHolders["tf_events"] = &$placeHolderstf_events;
$page_titles["tf_events"] = &$pageTitlestf_events;


changeTextControlsToDate( "tf_events" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["tf_events"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["tf_events"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_tf_events()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "event_id,  	client_id,  	title,  	`start`,  	`end`,  	resource_id";
$proto0["m_strFrom"] = "FROM tf_events";
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
	"m_strName" => "event_id",
	"m_strTable" => "tf_events",
	"m_srcTableName" => "tf_events"
));

$proto6["m_sql"] = "event_id";
$proto6["m_srcTableName"] = "tf_events";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "client_id",
	"m_strTable" => "tf_events",
	"m_srcTableName" => "tf_events"
));

$proto8["m_sql"] = "client_id";
$proto8["m_srcTableName"] = "tf_events";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "title",
	"m_strTable" => "tf_events",
	"m_srcTableName" => "tf_events"
));

$proto10["m_sql"] = "title";
$proto10["m_srcTableName"] = "tf_events";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "start",
	"m_strTable" => "tf_events",
	"m_srcTableName" => "tf_events"
));

$proto12["m_sql"] = "`start`";
$proto12["m_srcTableName"] = "tf_events";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "end",
	"m_strTable" => "tf_events",
	"m_srcTableName" => "tf_events"
));

$proto14["m_sql"] = "`end`";
$proto14["m_srcTableName"] = "tf_events";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "resource_id",
	"m_strTable" => "tf_events",
	"m_srcTableName" => "tf_events"
));

$proto16["m_sql"] = "resource_id";
$proto16["m_srcTableName"] = "tf_events";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "tf_events";
$proto19["m_srcTableName"] = "tf_events";
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
$proto18["m_srcTableName"] = "tf_events";
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
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="tf_events";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tf_events = createSqlQuery_tf_events();


	
		;

						

$tdatatf_events[".sqlquery"] = $queryData_tf_events;



$tdatatf_events[".hasEvents"] = false;

?>
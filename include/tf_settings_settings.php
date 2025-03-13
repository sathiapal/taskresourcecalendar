<?php
$tdatatf_settings = array();
$tdatatf_settings[".searchableFields"] = array();
$tdatatf_settings[".ShortName"] = "tf_settings";
$tdatatf_settings[".OwnerID"] = "";
$tdatatf_settings[".OriginalTable"] = "tf_settings";


$tdatatf_settings[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"]}" );
$tdatatf_settings[".originalPagesByType"] = $tdatatf_settings[".pagesByType"];
$tdatatf_settings[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"]}" ) );
$tdatatf_settings[".originalPages"] = $tdatatf_settings[".pages"];
$tdatatf_settings[".defaultPages"] = my_json_decode( "{\"list\":\"list\"}" );
$tdatatf_settings[".originalDefaultPages"] = $tdatatf_settings[".defaultPages"];

//	field labels
$fieldLabelstf_settings = array();
$fieldToolTipstf_settings = array();
$pageTitlestf_settings = array();
$placeHolderstf_settings = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelstf_settings["English"] = array();
	$fieldToolTipstf_settings["English"] = array();
	$placeHolderstf_settings["English"] = array();
	$pageTitlestf_settings["English"] = array();
	$fieldLabelstf_settings["English"]["id"] = "Id";
	$fieldToolTipstf_settings["English"]["id"] = "";
	$placeHolderstf_settings["English"]["id"] = "";
	$fieldLabelstf_settings["English"]["ndays"] = "Ndays";
	$fieldToolTipstf_settings["English"]["ndays"] = "";
	$placeHolderstf_settings["English"]["ndays"] = "";
	$fieldLabelstf_settings["English"]["cweekend"] = "Cweekend";
	$fieldToolTipstf_settings["English"]["cweekend"] = "";
	$placeHolderstf_settings["English"]["cweekend"] = "";
	$fieldLabelstf_settings["English"]["choliday"] = "Choliday";
	$fieldToolTipstf_settings["English"]["choliday"] = "";
	$placeHolderstf_settings["English"]["choliday"] = "";
	$fieldLabelstf_settings["English"]["cday1"] = "Cday1";
	$fieldToolTipstf_settings["English"]["cday1"] = "";
	$placeHolderstf_settings["English"]["cday1"] = "";
	$fieldLabelstf_settings["English"]["cday2"] = "Cday2";
	$fieldToolTipstf_settings["English"]["cday2"] = "";
	$placeHolderstf_settings["English"]["cday2"] = "";
	$fieldLabelstf_settings["English"]["cunavailable"] = "Cunavailable";
	$fieldToolTipstf_settings["English"]["cunavailable"] = "";
	$placeHolderstf_settings["English"]["cunavailable"] = "";
	$fieldLabelstf_settings["English"]["cunavailabletext"] = "Cunavailabletext";
	$fieldToolTipstf_settings["English"]["cunavailabletext"] = "";
	$placeHolderstf_settings["English"]["cunavailabletext"] = "";
	$fieldLabelstf_settings["English"]["tooltipfields"] = "Tooltipfields";
	$fieldToolTipstf_settings["English"]["tooltipfields"] = "";
	$placeHolderstf_settings["English"]["tooltipfields"] = "";
	$fieldLabelstf_settings["English"]["adddays"] = "Adddays";
	$fieldToolTipstf_settings["English"]["adddays"] = "";
	$placeHolderstf_settings["English"]["adddays"] = "";
	$fieldLabelstf_settings["English"]["intName"] = "Int Name";
	$fieldToolTipstf_settings["English"]["intName"] = "";
	$placeHolderstf_settings["English"]["intName"] = "";
	$fieldLabelstf_settings["English"]["intValue"] = "Int Value";
	$fieldToolTipstf_settings["English"]["intValue"] = "";
	$placeHolderstf_settings["English"]["intValue"] = "";
	$fieldLabelstf_settings["English"]["weekends"] = "Weekends";
	$fieldToolTipstf_settings["English"]["weekends"] = "";
	$placeHolderstf_settings["English"]["weekends"] = "";
	$fieldLabelstf_settings["English"]["minTime"] = "Min Time";
	$fieldToolTipstf_settings["English"]["minTime"] = "";
	$placeHolderstf_settings["English"]["minTime"] = "";
	$fieldLabelstf_settings["English"]["maxTime"] = "Max Time";
	$fieldToolTipstf_settings["English"]["maxTime"] = "";
	$placeHolderstf_settings["English"]["maxTime"] = "";
	$fieldLabelstf_settings["English"]["clickEvent"] = "Click Event";
	$fieldToolTipstf_settings["English"]["clickEvent"] = "";
	$placeHolderstf_settings["English"]["clickEvent"] = "";
	$fieldLabelstf_settings["English"]["showTitle"] = "Show Title";
	$fieldToolTipstf_settings["English"]["showTitle"] = "";
	$placeHolderstf_settings["English"]["showTitle"] = "";
	if (count($fieldToolTipstf_settings["English"]))
		$tdatatf_settings[".isUseToolTips"] = true;
}


	$tdatatf_settings[".NCSearch"] = true;



$tdatatf_settings[".shortTableName"] = "tf_settings";
$tdatatf_settings[".nSecOptions"] = 0;

$tdatatf_settings[".mainTableOwnerID"] = "";
$tdatatf_settings[".entityType"] = 0;
$tdatatf_settings[".connId"] = "broadspireatcrmcluster8cg8qeeg";


$tdatatf_settings[".strOriginalTableName"] = "tf_settings";

	



$tdatatf_settings[".showAddInPopup"] = false;

$tdatatf_settings[".showEditInPopup"] = false;

$tdatatf_settings[".showViewInPopup"] = false;

$tdatatf_settings[".listAjax"] = false;
//	temporary
//$tdatatf_settings[".listAjax"] = false;

	$tdatatf_settings[".audit"] = false;

	$tdatatf_settings[".locking"] = false;


$pages = $tdatatf_settings[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatf_settings[".edit"] = true;
	$tdatatf_settings[".afterEditAction"] = 1;
	$tdatatf_settings[".closePopupAfterEdit"] = 1;
	$tdatatf_settings[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatf_settings[".add"] = true;
$tdatatf_settings[".afterAddAction"] = 1;
$tdatatf_settings[".closePopupAfterAdd"] = 1;
$tdatatf_settings[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatf_settings[".list"] = true;
}



$tdatatf_settings[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatf_settings[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatf_settings[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatf_settings[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatf_settings[".printFriendly"] = true;
}



$tdatatf_settings[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatf_settings[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatf_settings[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatf_settings[".isUseAjaxSuggest"] = true;



			

$tdatatf_settings[".ajaxCodeSnippetAdded"] = false;

$tdatatf_settings[".buttonsAdded"] = false;

$tdatatf_settings[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatf_settings[".isUseTimeForSearch"] = false;


$tdatatf_settings[".badgeColor"] = "00C2C5";


$tdatatf_settings[".allSearchFields"] = array();
$tdatatf_settings[".filterFields"] = array();
$tdatatf_settings[".requiredSearchFields"] = array();

$tdatatf_settings[".googleLikeFields"] = array();
$tdatatf_settings[".googleLikeFields"][] = "id";
$tdatatf_settings[".googleLikeFields"][] = "ndays";
$tdatatf_settings[".googleLikeFields"][] = "cweekend";
$tdatatf_settings[".googleLikeFields"][] = "choliday";
$tdatatf_settings[".googleLikeFields"][] = "cday1";
$tdatatf_settings[".googleLikeFields"][] = "cday2";
$tdatatf_settings[".googleLikeFields"][] = "cunavailable";
$tdatatf_settings[".googleLikeFields"][] = "cunavailabletext";
$tdatatf_settings[".googleLikeFields"][] = "tooltipfields";
$tdatatf_settings[".googleLikeFields"][] = "adddays";
$tdatatf_settings[".googleLikeFields"][] = "intName";
$tdatatf_settings[".googleLikeFields"][] = "intValue";
$tdatatf_settings[".googleLikeFields"][] = "weekends";
$tdatatf_settings[".googleLikeFields"][] = "minTime";
$tdatatf_settings[".googleLikeFields"][] = "maxTime";
$tdatatf_settings[".googleLikeFields"][] = "clickEvent";
$tdatatf_settings[".googleLikeFields"][] = "showTitle";



$tdatatf_settings[".tableType"] = "list";

$tdatatf_settings[".printerPageOrientation"] = 0;
$tdatatf_settings[".nPrinterPageScale"] = 100;

$tdatatf_settings[".nPrinterSplitRecords"] = 40;

$tdatatf_settings[".geocodingEnabled"] = false;










$tdatatf_settings[".pageSize"] = 20;

$tdatatf_settings[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatatf_settings[".strOrderBy"] = $tstrOrderBy;

$tdatatf_settings[".orderindexes"] = array();


$tdatatf_settings[".sqlHead"] = "SELECT id,  	ndays,  	cweekend,  	choliday,  	cday1,  	cday2,  	cunavailable,  	cunavailabletext,  	tooltipfields,  	adddays,  	intName,  	intValue,  	weekends,  	minTime,  	maxTime,  	clickEvent,  	showTitle";
$tdatatf_settings[".sqlFrom"] = "FROM tf_settings";
$tdatatf_settings[".sqlWhereExpr"] = "";
$tdatatf_settings[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatf_settings[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatf_settings[".arrGroupsPerPage"] = $arrGPP;

$tdatatf_settings[".highlightSearchResults"] = true;

$tableKeystf_settings = array();
$tableKeystf_settings[] = "id";
$tdatatf_settings[".Keys"] = $tableKeystf_settings;


$tdatatf_settings[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "tf_settings";
	$fdata["Label"] = GetFieldLabel("tf_settings","id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id";

		$fdata["sourceSingle"] = "id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id";

	
	
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


	$tdatatf_settings["id"] = $fdata;
		$tdatatf_settings[".searchableFields"][] = "id";
//	ndays
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "ndays";
	$fdata["GoodName"] = "ndays";
	$fdata["ownerTable"] = "tf_settings";
	$fdata["Label"] = GetFieldLabel("tf_settings","ndays");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "ndays";

		$fdata["sourceSingle"] = "ndays";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ndays";

	
	
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
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
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


	$tdatatf_settings["ndays"] = $fdata;
		$tdatatf_settings[".searchableFields"][] = "ndays";
//	cweekend
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "cweekend";
	$fdata["GoodName"] = "cweekend";
	$fdata["ownerTable"] = "tf_settings";
	$fdata["Label"] = GetFieldLabel("tf_settings","cweekend");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "cweekend";

		$fdata["sourceSingle"] = "cweekend";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cweekend";

	
	
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
			$edata["EditParams"].= " maxlength=50";

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


	$tdatatf_settings["cweekend"] = $fdata;
		$tdatatf_settings[".searchableFields"][] = "cweekend";
//	choliday
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "choliday";
	$fdata["GoodName"] = "choliday";
	$fdata["ownerTable"] = "tf_settings";
	$fdata["Label"] = GetFieldLabel("tf_settings","choliday");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "choliday";

		$fdata["sourceSingle"] = "choliday";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "choliday";

	
	
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
			$edata["EditParams"].= " maxlength=50";

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


	$tdatatf_settings["choliday"] = $fdata;
		$tdatatf_settings[".searchableFields"][] = "choliday";
//	cday1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "cday1";
	$fdata["GoodName"] = "cday1";
	$fdata["ownerTable"] = "tf_settings";
	$fdata["Label"] = GetFieldLabel("tf_settings","cday1");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "cday1";

		$fdata["sourceSingle"] = "cday1";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cday1";

	
	
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
			$edata["EditParams"].= " maxlength=50";

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


	$tdatatf_settings["cday1"] = $fdata;
		$tdatatf_settings[".searchableFields"][] = "cday1";
//	cday2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "cday2";
	$fdata["GoodName"] = "cday2";
	$fdata["ownerTable"] = "tf_settings";
	$fdata["Label"] = GetFieldLabel("tf_settings","cday2");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "cday2";

		$fdata["sourceSingle"] = "cday2";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cday2";

	
	
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
			$edata["EditParams"].= " maxlength=50";

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


	$tdatatf_settings["cday2"] = $fdata;
		$tdatatf_settings[".searchableFields"][] = "cday2";
//	cunavailable
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "cunavailable";
	$fdata["GoodName"] = "cunavailable";
	$fdata["ownerTable"] = "tf_settings";
	$fdata["Label"] = GetFieldLabel("tf_settings","cunavailable");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "cunavailable";

		$fdata["sourceSingle"] = "cunavailable";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cunavailable";

	
	
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
			$edata["EditParams"].= " maxlength=50";

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


	$tdatatf_settings["cunavailable"] = $fdata;
		$tdatatf_settings[".searchableFields"][] = "cunavailable";
//	cunavailabletext
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "cunavailabletext";
	$fdata["GoodName"] = "cunavailabletext";
	$fdata["ownerTable"] = "tf_settings";
	$fdata["Label"] = GetFieldLabel("tf_settings","cunavailabletext");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "cunavailabletext";

		$fdata["sourceSingle"] = "cunavailabletext";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cunavailabletext";

	
	
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
			$edata["EditParams"].= " maxlength=50";

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


	$tdatatf_settings["cunavailabletext"] = $fdata;
		$tdatatf_settings[".searchableFields"][] = "cunavailabletext";
//	tooltipfields
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "tooltipfields";
	$fdata["GoodName"] = "tooltipfields";
	$fdata["ownerTable"] = "tf_settings";
	$fdata["Label"] = GetFieldLabel("tf_settings","tooltipfields");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "tooltipfields";

		$fdata["sourceSingle"] = "tooltipfields";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tooltipfields";

	
	
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
			$edata["EditParams"].= " maxlength=1000";

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


	$tdatatf_settings["tooltipfields"] = $fdata;
		$tdatatf_settings[".searchableFields"][] = "tooltipfields";
//	adddays
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "adddays";
	$fdata["GoodName"] = "adddays";
	$fdata["ownerTable"] = "tf_settings";
	$fdata["Label"] = GetFieldLabel("tf_settings","adddays");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "adddays";

		$fdata["sourceSingle"] = "adddays";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "adddays";

	
	
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
			$edata["EditParams"].= " maxlength=50";

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


	$tdatatf_settings["adddays"] = $fdata;
		$tdatatf_settings[".searchableFields"][] = "adddays";
//	intName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "intName";
	$fdata["GoodName"] = "intName";
	$fdata["ownerTable"] = "tf_settings";
	$fdata["Label"] = GetFieldLabel("tf_settings","intName");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "intName";

		$fdata["sourceSingle"] = "intName";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "intName";

	
	
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
			$edata["EditParams"].= " maxlength=50";

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


	$tdatatf_settings["intName"] = $fdata;
		$tdatatf_settings[".searchableFields"][] = "intName";
//	intValue
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "intValue";
	$fdata["GoodName"] = "intValue";
	$fdata["ownerTable"] = "tf_settings";
	$fdata["Label"] = GetFieldLabel("tf_settings","intValue");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "intValue";

		$fdata["sourceSingle"] = "intValue";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "intValue";

	
	
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
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
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


	$tdatatf_settings["intValue"] = $fdata;
		$tdatatf_settings[".searchableFields"][] = "intValue";
//	weekends
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "weekends";
	$fdata["GoodName"] = "weekends";
	$fdata["ownerTable"] = "tf_settings";
	$fdata["Label"] = GetFieldLabel("tf_settings","weekends");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "weekends";

		$fdata["sourceSingle"] = "weekends";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "weekends";

	
	
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
			$edata["EditParams"].= " maxlength=50";

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


	$tdatatf_settings["weekends"] = $fdata;
		$tdatatf_settings[".searchableFields"][] = "weekends";
//	minTime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "minTime";
	$fdata["GoodName"] = "minTime";
	$fdata["ownerTable"] = "tf_settings";
	$fdata["Label"] = GetFieldLabel("tf_settings","minTime");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "minTime";

		$fdata["sourceSingle"] = "minTime";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "minTime";

	
	
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


	$tdatatf_settings["minTime"] = $fdata;
		$tdatatf_settings[".searchableFields"][] = "minTime";
//	maxTime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "maxTime";
	$fdata["GoodName"] = "maxTime";
	$fdata["ownerTable"] = "tf_settings";
	$fdata["Label"] = GetFieldLabel("tf_settings","maxTime");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "maxTime";

		$fdata["sourceSingle"] = "maxTime";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "maxTime";

	
	
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


	$tdatatf_settings["maxTime"] = $fdata;
		$tdatatf_settings[".searchableFields"][] = "maxTime";
//	clickEvent
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "clickEvent";
	$fdata["GoodName"] = "clickEvent";
	$fdata["ownerTable"] = "tf_settings";
	$fdata["Label"] = GetFieldLabel("tf_settings","clickEvent");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "clickEvent";

		$fdata["sourceSingle"] = "clickEvent";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "clickEvent";

	
	
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
			$edata["EditParams"].= " maxlength=50";

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


	$tdatatf_settings["clickEvent"] = $fdata;
		$tdatatf_settings[".searchableFields"][] = "clickEvent";
//	showTitle
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "showTitle";
	$fdata["GoodName"] = "showTitle";
	$fdata["ownerTable"] = "tf_settings";
	$fdata["Label"] = GetFieldLabel("tf_settings","showTitle");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "showTitle";

		$fdata["sourceSingle"] = "showTitle";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "showTitle";

	
	
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
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
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


	$tdatatf_settings["showTitle"] = $fdata;
		$tdatatf_settings[".searchableFields"][] = "showTitle";


$tables_data["tf_settings"]=&$tdatatf_settings;
$field_labels["tf_settings"] = &$fieldLabelstf_settings;
$fieldToolTips["tf_settings"] = &$fieldToolTipstf_settings;
$placeHolders["tf_settings"] = &$placeHolderstf_settings;
$page_titles["tf_settings"] = &$pageTitlestf_settings;


changeTextControlsToDate( "tf_settings" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["tf_settings"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["tf_settings"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_tf_settings()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	ndays,  	cweekend,  	choliday,  	cday1,  	cday2,  	cunavailable,  	cunavailabletext,  	tooltipfields,  	adddays,  	intName,  	intValue,  	weekends,  	minTime,  	maxTime,  	clickEvent,  	showTitle";
$proto0["m_strFrom"] = "FROM tf_settings";
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
	"m_strName" => "id",
	"m_strTable" => "tf_settings",
	"m_srcTableName" => "tf_settings"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "tf_settings";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "ndays",
	"m_strTable" => "tf_settings",
	"m_srcTableName" => "tf_settings"
));

$proto8["m_sql"] = "ndays";
$proto8["m_srcTableName"] = "tf_settings";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "cweekend",
	"m_strTable" => "tf_settings",
	"m_srcTableName" => "tf_settings"
));

$proto10["m_sql"] = "cweekend";
$proto10["m_srcTableName"] = "tf_settings";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "choliday",
	"m_strTable" => "tf_settings",
	"m_srcTableName" => "tf_settings"
));

$proto12["m_sql"] = "choliday";
$proto12["m_srcTableName"] = "tf_settings";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "cday1",
	"m_strTable" => "tf_settings",
	"m_srcTableName" => "tf_settings"
));

$proto14["m_sql"] = "cday1";
$proto14["m_srcTableName"] = "tf_settings";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "cday2",
	"m_strTable" => "tf_settings",
	"m_srcTableName" => "tf_settings"
));

$proto16["m_sql"] = "cday2";
$proto16["m_srcTableName"] = "tf_settings";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "cunavailable",
	"m_strTable" => "tf_settings",
	"m_srcTableName" => "tf_settings"
));

$proto18["m_sql"] = "cunavailable";
$proto18["m_srcTableName"] = "tf_settings";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "cunavailabletext",
	"m_strTable" => "tf_settings",
	"m_srcTableName" => "tf_settings"
));

$proto20["m_sql"] = "cunavailabletext";
$proto20["m_srcTableName"] = "tf_settings";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "tooltipfields",
	"m_strTable" => "tf_settings",
	"m_srcTableName" => "tf_settings"
));

$proto22["m_sql"] = "tooltipfields";
$proto22["m_srcTableName"] = "tf_settings";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "adddays",
	"m_strTable" => "tf_settings",
	"m_srcTableName" => "tf_settings"
));

$proto24["m_sql"] = "adddays";
$proto24["m_srcTableName"] = "tf_settings";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "intName",
	"m_strTable" => "tf_settings",
	"m_srcTableName" => "tf_settings"
));

$proto26["m_sql"] = "intName";
$proto26["m_srcTableName"] = "tf_settings";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "intValue",
	"m_strTable" => "tf_settings",
	"m_srcTableName" => "tf_settings"
));

$proto28["m_sql"] = "intValue";
$proto28["m_srcTableName"] = "tf_settings";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "weekends",
	"m_strTable" => "tf_settings",
	"m_srcTableName" => "tf_settings"
));

$proto30["m_sql"] = "weekends";
$proto30["m_srcTableName"] = "tf_settings";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "minTime",
	"m_strTable" => "tf_settings",
	"m_srcTableName" => "tf_settings"
));

$proto32["m_sql"] = "minTime";
$proto32["m_srcTableName"] = "tf_settings";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "maxTime",
	"m_strTable" => "tf_settings",
	"m_srcTableName" => "tf_settings"
));

$proto34["m_sql"] = "maxTime";
$proto34["m_srcTableName"] = "tf_settings";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "clickEvent",
	"m_strTable" => "tf_settings",
	"m_srcTableName" => "tf_settings"
));

$proto36["m_sql"] = "clickEvent";
$proto36["m_srcTableName"] = "tf_settings";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "showTitle",
	"m_strTable" => "tf_settings",
	"m_srcTableName" => "tf_settings"
));

$proto38["m_sql"] = "showTitle";
$proto38["m_srcTableName"] = "tf_settings";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto40=array();
$proto40["m_link"] = "SQLL_MAIN";
			$proto41=array();
$proto41["m_strName"] = "tf_settings";
$proto41["m_srcTableName"] = "tf_settings";
$proto41["m_columns"] = array();
$proto41["m_columns"][] = "id";
$proto41["m_columns"][] = "ndays";
$proto41["m_columns"][] = "cweekend";
$proto41["m_columns"][] = "choliday";
$proto41["m_columns"][] = "cday1";
$proto41["m_columns"][] = "cday2";
$proto41["m_columns"][] = "cunavailable";
$proto41["m_columns"][] = "cunavailabletext";
$proto41["m_columns"][] = "tooltipfields";
$proto41["m_columns"][] = "adddays";
$proto41["m_columns"][] = "intName";
$proto41["m_columns"][] = "intValue";
$proto41["m_columns"][] = "weekends";
$proto41["m_columns"][] = "minTime";
$proto41["m_columns"][] = "maxTime";
$proto41["m_columns"][] = "clickEvent";
$proto41["m_columns"][] = "showTitle";
$obj = new SQLTable($proto41);

$proto40["m_table"] = $obj;
$proto40["m_sql"] = "tf_settings";
$proto40["m_alias"] = "";
$proto40["m_srcTableName"] = "tf_settings";
$proto42=array();
$proto42["m_sql"] = "";
$proto42["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto42["m_column"]=$obj;
$proto42["m_contained"] = array();
$proto42["m_strCase"] = "";
$proto42["m_havingmode"] = false;
$proto42["m_inBrackets"] = false;
$proto42["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto42);

$proto40["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto40);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="tf_settings";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tf_settings = createSqlQuery_tf_settings();


	
		;

																	

$tdatatf_settings[".sqlquery"] = $queryData_tf_settings;



$tdatatf_settings[".hasEvents"] = false;

?>
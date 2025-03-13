<?php
$tdatatf_resources = array();
$tdatatf_resources[".searchableFields"] = array();
$tdatatf_resources[".ShortName"] = "tf_resources";
$tdatatf_resources[".OwnerID"] = "";
$tdatatf_resources[".OriginalTable"] = "tf_resources";


$tdatatf_resources[".pagesByType"] = my_json_decode( "{\"search\":[\"search\"]}" );
$tdatatf_resources[".originalPagesByType"] = $tdatatf_resources[".pagesByType"];
$tdatatf_resources[".pages"] = types2pages( my_json_decode( "{\"search\":[\"search\"]}" ) );
$tdatatf_resources[".originalPages"] = $tdatatf_resources[".pages"];
$tdatatf_resources[".defaultPages"] = my_json_decode( "{\"search\":\"search\"}" );
$tdatatf_resources[".originalDefaultPages"] = $tdatatf_resources[".defaultPages"];

//	field labels
$fieldLabelstf_resources = array();
$fieldToolTipstf_resources = array();
$pageTitlestf_resources = array();
$placeHolderstf_resources = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelstf_resources["English"] = array();
	$fieldToolTipstf_resources["English"] = array();
	$placeHolderstf_resources["English"] = array();
	$pageTitlestf_resources["English"] = array();
	$fieldLabelstf_resources["English"]["categoryid"] = "Categoryid";
	$fieldToolTipstf_resources["English"]["categoryid"] = "";
	$placeHolderstf_resources["English"]["categoryid"] = "";
	$fieldLabelstf_resources["English"]["client_id"] = "Client Id";
	$fieldToolTipstf_resources["English"]["client_id"] = "";
	$placeHolderstf_resources["English"]["client_id"] = "";
	$fieldLabelstf_resources["English"]["resourcename"] = "Resourcename";
	$fieldToolTipstf_resources["English"]["resourcename"] = "";
	$placeHolderstf_resources["English"]["resourcename"] = "";
	$fieldLabelstf_resources["English"]["resource_id"] = "Resource Id";
	$fieldToolTipstf_resources["English"]["resource_id"] = "";
	$placeHolderstf_resources["English"]["resource_id"] = "";
	if (count($fieldToolTipstf_resources["English"]))
		$tdatatf_resources[".isUseToolTips"] = true;
}


	$tdatatf_resources[".NCSearch"] = true;



$tdatatf_resources[".shortTableName"] = "tf_resources";
$tdatatf_resources[".nSecOptions"] = 0;

$tdatatf_resources[".mainTableOwnerID"] = "";
$tdatatf_resources[".entityType"] = 0;
$tdatatf_resources[".connId"] = "broadspireatcrmcluster8cg8qeeg";


$tdatatf_resources[".strOriginalTableName"] = "tf_resources";

	



$tdatatf_resources[".showAddInPopup"] = false;

$tdatatf_resources[".showEditInPopup"] = false;

$tdatatf_resources[".showViewInPopup"] = false;

$tdatatf_resources[".listAjax"] = false;
//	temporary
//$tdatatf_resources[".listAjax"] = false;

	$tdatatf_resources[".audit"] = false;

	$tdatatf_resources[".locking"] = false;


$pages = $tdatatf_resources[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatf_resources[".edit"] = true;
	$tdatatf_resources[".afterEditAction"] = 1;
	$tdatatf_resources[".closePopupAfterEdit"] = 1;
	$tdatatf_resources[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatf_resources[".add"] = true;
$tdatatf_resources[".afterAddAction"] = 1;
$tdatatf_resources[".closePopupAfterAdd"] = 1;
$tdatatf_resources[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatf_resources[".list"] = true;
}



$tdatatf_resources[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatf_resources[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatf_resources[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatf_resources[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatf_resources[".printFriendly"] = true;
}



$tdatatf_resources[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatf_resources[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatf_resources[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatf_resources[".isUseAjaxSuggest"] = true;



			

$tdatatf_resources[".ajaxCodeSnippetAdded"] = false;

$tdatatf_resources[".buttonsAdded"] = false;

$tdatatf_resources[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatf_resources[".isUseTimeForSearch"] = false;


$tdatatf_resources[".badgeColor"] = "2F4F4F";


$tdatatf_resources[".allSearchFields"] = array();
$tdatatf_resources[".filterFields"] = array();
$tdatatf_resources[".requiredSearchFields"] = array();

$tdatatf_resources[".googleLikeFields"] = array();
$tdatatf_resources[".googleLikeFields"][] = "resource_id";
$tdatatf_resources[".googleLikeFields"][] = "client_id";
$tdatatf_resources[".googleLikeFields"][] = "resourcename";
$tdatatf_resources[".googleLikeFields"][] = "categoryid";



$tdatatf_resources[".tableType"] = "list";

$tdatatf_resources[".printerPageOrientation"] = 0;
$tdatatf_resources[".nPrinterPageScale"] = 100;

$tdatatf_resources[".nPrinterSplitRecords"] = 40;

$tdatatf_resources[".geocodingEnabled"] = false;










$tdatatf_resources[".pageSize"] = 20;

$tdatatf_resources[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatatf_resources[".strOrderBy"] = $tstrOrderBy;

$tdatatf_resources[".orderindexes"] = array();


$tdatatf_resources[".sqlHead"] = "SELECT resource_id,  	client_id,  	resourcename,  	categoryid";
$tdatatf_resources[".sqlFrom"] = "FROM tf_resources";
$tdatatf_resources[".sqlWhereExpr"] = "";
$tdatatf_resources[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatf_resources[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatf_resources[".arrGroupsPerPage"] = $arrGPP;

$tdatatf_resources[".highlightSearchResults"] = true;

$tableKeystf_resources = array();
$tdatatf_resources[".Keys"] = $tableKeystf_resources;


$tdatatf_resources[".hideMobileList"] = array();




//	resource_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "resource_id";
	$fdata["GoodName"] = "resource_id";
	$fdata["ownerTable"] = "tf_resources";
	$fdata["Label"] = GetFieldLabel("tf_resources","resource_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

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


	$tdatatf_resources["resource_id"] = $fdata;
		$tdatatf_resources[".searchableFields"][] = "resource_id";
//	client_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "client_id";
	$fdata["GoodName"] = "client_id";
	$fdata["ownerTable"] = "tf_resources";
	$fdata["Label"] = GetFieldLabel("tf_resources","client_id");
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


	$tdatatf_resources["client_id"] = $fdata;
		$tdatatf_resources[".searchableFields"][] = "client_id";
//	resourcename
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "resourcename";
	$fdata["GoodName"] = "resourcename";
	$fdata["ownerTable"] = "tf_resources";
	$fdata["Label"] = GetFieldLabel("tf_resources","resourcename");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "resourcename";

		$fdata["sourceSingle"] = "resourcename";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "resourcename";

	
	
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


	$tdatatf_resources["resourcename"] = $fdata;
		$tdatatf_resources[".searchableFields"][] = "resourcename";
//	categoryid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "categoryid";
	$fdata["GoodName"] = "categoryid";
	$fdata["ownerTable"] = "tf_resources";
	$fdata["Label"] = GetFieldLabel("tf_resources","categoryid");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "categoryid";

		$fdata["sourceSingle"] = "categoryid";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "categoryid";

	
	
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


	$tdatatf_resources["categoryid"] = $fdata;
		$tdatatf_resources[".searchableFields"][] = "categoryid";


$tables_data["tf_resources"]=&$tdatatf_resources;
$field_labels["tf_resources"] = &$fieldLabelstf_resources;
$fieldToolTips["tf_resources"] = &$fieldToolTipstf_resources;
$placeHolders["tf_resources"] = &$placeHolderstf_resources;
$page_titles["tf_resources"] = &$pageTitlestf_resources;


changeTextControlsToDate( "tf_resources" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["tf_resources"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["tf_resources"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_tf_resources()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "resource_id,  	client_id,  	resourcename,  	categoryid";
$proto0["m_strFrom"] = "FROM tf_resources";
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
	"m_strName" => "resource_id",
	"m_strTable" => "tf_resources",
	"m_srcTableName" => "tf_resources"
));

$proto6["m_sql"] = "resource_id";
$proto6["m_srcTableName"] = "tf_resources";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "client_id",
	"m_strTable" => "tf_resources",
	"m_srcTableName" => "tf_resources"
));

$proto8["m_sql"] = "client_id";
$proto8["m_srcTableName"] = "tf_resources";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "resourcename",
	"m_strTable" => "tf_resources",
	"m_srcTableName" => "tf_resources"
));

$proto10["m_sql"] = "resourcename";
$proto10["m_srcTableName"] = "tf_resources";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "categoryid",
	"m_strTable" => "tf_resources",
	"m_srcTableName" => "tf_resources"
));

$proto12["m_sql"] = "categoryid";
$proto12["m_srcTableName"] = "tf_resources";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "tf_resources";
$proto15["m_srcTableName"] = "tf_resources";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "resource_id";
$proto15["m_columns"][] = "client_id";
$proto15["m_columns"][] = "resourcename";
$proto15["m_columns"][] = "categoryid";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "tf_resources";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "tf_resources";
$proto16=array();
$proto16["m_sql"] = "";
$proto16["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto16["m_column"]=$obj;
$proto16["m_contained"] = array();
$proto16["m_strCase"] = "";
$proto16["m_havingmode"] = false;
$proto16["m_inBrackets"] = false;
$proto16["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto16);

$proto14["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto14);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="tf_resources";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tf_resources = createSqlQuery_tf_resources();


	
		;

				

$tdatatf_resources[".sqlquery"] = $queryData_tf_resources;



$tdatatf_resources[".hasEvents"] = false;

?>
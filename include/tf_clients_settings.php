<?php
$tdatatf_clients = array();
$tdatatf_clients[".searchableFields"] = array();
$tdatatf_clients[".ShortName"] = "tf_clients";
$tdatatf_clients[".OwnerID"] = "";
$tdatatf_clients[".OriginalTable"] = "tf_clients";


$tdatatf_clients[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"list\":[\"list\"]}" );
$tdatatf_clients[".originalPagesByType"] = $tdatatf_clients[".pagesByType"];
$tdatatf_clients[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"list\":[\"list\"]}" ) );
$tdatatf_clients[".originalPages"] = $tdatatf_clients[".pages"];
$tdatatf_clients[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"list\":\"list\"}" );
$tdatatf_clients[".originalDefaultPages"] = $tdatatf_clients[".defaultPages"];

//	field labels
$fieldLabelstf_clients = array();
$fieldToolTipstf_clients = array();
$pageTitlestf_clients = array();
$placeHolderstf_clients = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelstf_clients["English"] = array();
	$fieldToolTipstf_clients["English"] = array();
	$placeHolderstf_clients["English"] = array();
	$pageTitlestf_clients["English"] = array();
	$fieldLabelstf_clients["English"]["client_id"] = "Client Id";
	$fieldToolTipstf_clients["English"]["client_id"] = "";
	$placeHolderstf_clients["English"]["client_id"] = "";
	$fieldLabelstf_clients["English"]["client_name"] = "Client Name";
	$fieldToolTipstf_clients["English"]["client_name"] = "";
	$placeHolderstf_clients["English"]["client_name"] = "";
	if (count($fieldToolTipstf_clients["English"]))
		$tdatatf_clients[".isUseToolTips"] = true;
}


	$tdatatf_clients[".NCSearch"] = true;



$tdatatf_clients[".shortTableName"] = "tf_clients";
$tdatatf_clients[".nSecOptions"] = 0;

$tdatatf_clients[".mainTableOwnerID"] = "";
$tdatatf_clients[".entityType"] = 0;
$tdatatf_clients[".connId"] = "broadspireatcrmcluster8cg8qeeg";


$tdatatf_clients[".strOriginalTableName"] = "tf_clients";

	



$tdatatf_clients[".showAddInPopup"] = false;

$tdatatf_clients[".showEditInPopup"] = false;

$tdatatf_clients[".showViewInPopup"] = false;

$tdatatf_clients[".listAjax"] = false;
//	temporary
//$tdatatf_clients[".listAjax"] = false;

	$tdatatf_clients[".audit"] = false;

	$tdatatf_clients[".locking"] = false;


$pages = $tdatatf_clients[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatf_clients[".edit"] = true;
	$tdatatf_clients[".afterEditAction"] = 1;
	$tdatatf_clients[".closePopupAfterEdit"] = 1;
	$tdatatf_clients[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatf_clients[".add"] = true;
$tdatatf_clients[".afterAddAction"] = 1;
$tdatatf_clients[".closePopupAfterAdd"] = 1;
$tdatatf_clients[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatf_clients[".list"] = true;
}



$tdatatf_clients[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatf_clients[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatf_clients[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatf_clients[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatf_clients[".printFriendly"] = true;
}



$tdatatf_clients[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatf_clients[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatf_clients[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatf_clients[".isUseAjaxSuggest"] = true;



			

$tdatatf_clients[".ajaxCodeSnippetAdded"] = false;

$tdatatf_clients[".buttonsAdded"] = false;

$tdatatf_clients[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatf_clients[".isUseTimeForSearch"] = false;


$tdatatf_clients[".badgeColor"] = "CD853F";


$tdatatf_clients[".allSearchFields"] = array();
$tdatatf_clients[".filterFields"] = array();
$tdatatf_clients[".requiredSearchFields"] = array();

$tdatatf_clients[".googleLikeFields"] = array();
$tdatatf_clients[".googleLikeFields"][] = "client_id";
$tdatatf_clients[".googleLikeFields"][] = "client_name";



$tdatatf_clients[".tableType"] = "list";

$tdatatf_clients[".printerPageOrientation"] = 0;
$tdatatf_clients[".nPrinterPageScale"] = 100;

$tdatatf_clients[".nPrinterSplitRecords"] = 40;

$tdatatf_clients[".geocodingEnabled"] = false;










$tdatatf_clients[".pageSize"] = 20;

$tdatatf_clients[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatatf_clients[".strOrderBy"] = $tstrOrderBy;

$tdatatf_clients[".orderindexes"] = array();


$tdatatf_clients[".sqlHead"] = "SELECT client_id,  	client_name";
$tdatatf_clients[".sqlFrom"] = "FROM tf_clients";
$tdatatf_clients[".sqlWhereExpr"] = "";
$tdatatf_clients[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatf_clients[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatf_clients[".arrGroupsPerPage"] = $arrGPP;

$tdatatf_clients[".highlightSearchResults"] = true;

$tableKeystf_clients = array();
$tableKeystf_clients[] = "client_id";
$tdatatf_clients[".Keys"] = $tableKeystf_clients;


$tdatatf_clients[".hideMobileList"] = array();




//	client_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "client_id";
	$fdata["GoodName"] = "client_id";
	$fdata["ownerTable"] = "tf_clients";
	$fdata["Label"] = GetFieldLabel("tf_clients","client_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

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


	$tdatatf_clients["client_id"] = $fdata;
		$tdatatf_clients[".searchableFields"][] = "client_id";
//	client_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "client_name";
	$fdata["GoodName"] = "client_name";
	$fdata["ownerTable"] = "tf_clients";
	$fdata["Label"] = GetFieldLabel("tf_clients","client_name");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "client_name";

		$fdata["sourceSingle"] = "client_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "client_name";

	
	
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


	$tdatatf_clients["client_name"] = $fdata;
		$tdatatf_clients[".searchableFields"][] = "client_name";


$tables_data["tf_clients"]=&$tdatatf_clients;
$field_labels["tf_clients"] = &$fieldLabelstf_clients;
$fieldToolTips["tf_clients"] = &$fieldToolTipstf_clients;
$placeHolders["tf_clients"] = &$placeHolderstf_clients;
$page_titles["tf_clients"] = &$pageTitlestf_clients;


changeTextControlsToDate( "tf_clients" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["tf_clients"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["tf_clients"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_tf_clients()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "client_id,  	client_name";
$proto0["m_strFrom"] = "FROM tf_clients";
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
	"m_strTable" => "tf_clients",
	"m_srcTableName" => "tf_clients"
));

$proto6["m_sql"] = "client_id";
$proto6["m_srcTableName"] = "tf_clients";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "client_name",
	"m_strTable" => "tf_clients",
	"m_srcTableName" => "tf_clients"
));

$proto8["m_sql"] = "client_name";
$proto8["m_srcTableName"] = "tf_clients";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "tf_clients";
$proto11["m_srcTableName"] = "tf_clients";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "client_id";
$proto11["m_columns"][] = "client_name";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "tf_clients";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "tf_clients";
$proto12=array();
$proto12["m_sql"] = "";
$proto12["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto12["m_column"]=$obj;
$proto12["m_contained"] = array();
$proto12["m_strCase"] = "";
$proto12["m_havingmode"] = false;
$proto12["m_inBrackets"] = false;
$proto12["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto12);

$proto10["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto10);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="tf_clients";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tf_clients = createSqlQuery_tf_clients();


	
		;

		

$tdatatf_clients[".sqlquery"] = $queryData_tf_clients;



$tdatatf_clients[".hasEvents"] = false;

?>
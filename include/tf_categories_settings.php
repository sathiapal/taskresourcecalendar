<?php
$tdatatf_categories = array();
$tdatatf_categories[".searchableFields"] = array();
$tdatatf_categories[".ShortName"] = "tf_categories";
$tdatatf_categories[".OwnerID"] = "";
$tdatatf_categories[".OriginalTable"] = "tf_categories";


$tdatatf_categories[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdatatf_categories[".originalPagesByType"] = $tdatatf_categories[".pagesByType"];
$tdatatf_categories[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdatatf_categories[".originalPages"] = $tdatatf_categories[".pages"];
$tdatatf_categories[".defaultPages"] = my_json_decode( "{\"list\":\"list\",\"search\":\"search\"}" );
$tdatatf_categories[".originalDefaultPages"] = $tdatatf_categories[".defaultPages"];

//	field labels
$fieldLabelstf_categories = array();
$fieldToolTipstf_categories = array();
$pageTitlestf_categories = array();
$placeHolderstf_categories = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelstf_categories["English"] = array();
	$fieldToolTipstf_categories["English"] = array();
	$placeHolderstf_categories["English"] = array();
	$pageTitlestf_categories["English"] = array();
	$fieldLabelstf_categories["English"]["cname"] = "Cname";
	$fieldToolTipstf_categories["English"]["cname"] = "";
	$placeHolderstf_categories["English"]["cname"] = "";
	$fieldLabelstf_categories["English"]["category_id"] = "Category Id";
	$fieldToolTipstf_categories["English"]["category_id"] = "";
	$placeHolderstf_categories["English"]["category_id"] = "";
	if (count($fieldToolTipstf_categories["English"]))
		$tdatatf_categories[".isUseToolTips"] = true;
}


	$tdatatf_categories[".NCSearch"] = true;



$tdatatf_categories[".shortTableName"] = "tf_categories";
$tdatatf_categories[".nSecOptions"] = 0;

$tdatatf_categories[".mainTableOwnerID"] = "";
$tdatatf_categories[".entityType"] = 0;
$tdatatf_categories[".connId"] = "broadspireatcrmcluster8cg8qeeg";


$tdatatf_categories[".strOriginalTableName"] = "tf_categories";

	



$tdatatf_categories[".showAddInPopup"] = false;

$tdatatf_categories[".showEditInPopup"] = false;

$tdatatf_categories[".showViewInPopup"] = false;

$tdatatf_categories[".listAjax"] = false;
//	temporary
//$tdatatf_categories[".listAjax"] = false;

	$tdatatf_categories[".audit"] = false;

	$tdatatf_categories[".locking"] = false;


$pages = $tdatatf_categories[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatf_categories[".edit"] = true;
	$tdatatf_categories[".afterEditAction"] = 1;
	$tdatatf_categories[".closePopupAfterEdit"] = 1;
	$tdatatf_categories[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatf_categories[".add"] = true;
$tdatatf_categories[".afterAddAction"] = 1;
$tdatatf_categories[".closePopupAfterAdd"] = 1;
$tdatatf_categories[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatf_categories[".list"] = true;
}



$tdatatf_categories[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatf_categories[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatf_categories[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatf_categories[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatf_categories[".printFriendly"] = true;
}



$tdatatf_categories[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatf_categories[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatf_categories[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatf_categories[".isUseAjaxSuggest"] = true;



			

$tdatatf_categories[".ajaxCodeSnippetAdded"] = false;

$tdatatf_categories[".buttonsAdded"] = false;

$tdatatf_categories[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatf_categories[".isUseTimeForSearch"] = false;


$tdatatf_categories[".badgeColor"] = "E67349";


$tdatatf_categories[".allSearchFields"] = array();
$tdatatf_categories[".filterFields"] = array();
$tdatatf_categories[".requiredSearchFields"] = array();

$tdatatf_categories[".googleLikeFields"] = array();
$tdatatf_categories[".googleLikeFields"][] = "category_id";
$tdatatf_categories[".googleLikeFields"][] = "cname";



$tdatatf_categories[".tableType"] = "list";

$tdatatf_categories[".printerPageOrientation"] = 0;
$tdatatf_categories[".nPrinterPageScale"] = 100;

$tdatatf_categories[".nPrinterSplitRecords"] = 40;

$tdatatf_categories[".geocodingEnabled"] = false;










$tdatatf_categories[".pageSize"] = 20;

$tdatatf_categories[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatatf_categories[".strOrderBy"] = $tstrOrderBy;

$tdatatf_categories[".orderindexes"] = array();


$tdatatf_categories[".sqlHead"] = "SELECT category_id,  	cname";
$tdatatf_categories[".sqlFrom"] = "FROM tf_categories";
$tdatatf_categories[".sqlWhereExpr"] = "";
$tdatatf_categories[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatf_categories[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatf_categories[".arrGroupsPerPage"] = $arrGPP;

$tdatatf_categories[".highlightSearchResults"] = true;

$tableKeystf_categories = array();
$tdatatf_categories[".Keys"] = $tableKeystf_categories;


$tdatatf_categories[".hideMobileList"] = array();




//	category_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "category_id";
	$fdata["GoodName"] = "category_id";
	$fdata["ownerTable"] = "tf_categories";
	$fdata["Label"] = GetFieldLabel("tf_categories","category_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "category_id";

		$fdata["sourceSingle"] = "category_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "category_id";

	
	
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


	$tdatatf_categories["category_id"] = $fdata;
		$tdatatf_categories[".searchableFields"][] = "category_id";
//	cname
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "cname";
	$fdata["GoodName"] = "cname";
	$fdata["ownerTable"] = "tf_categories";
	$fdata["Label"] = GetFieldLabel("tf_categories","cname");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "cname";

		$fdata["sourceSingle"] = "cname";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cname";

	
	
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


	$tdatatf_categories["cname"] = $fdata;
		$tdatatf_categories[".searchableFields"][] = "cname";


$tables_data["tf_categories"]=&$tdatatf_categories;
$field_labels["tf_categories"] = &$fieldLabelstf_categories;
$fieldToolTips["tf_categories"] = &$fieldToolTipstf_categories;
$placeHolders["tf_categories"] = &$placeHolderstf_categories;
$page_titles["tf_categories"] = &$pageTitlestf_categories;


changeTextControlsToDate( "tf_categories" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["tf_categories"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["tf_categories"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_tf_categories()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "category_id,  	cname";
$proto0["m_strFrom"] = "FROM tf_categories";
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
	"m_strName" => "category_id",
	"m_strTable" => "tf_categories",
	"m_srcTableName" => "tf_categories"
));

$proto6["m_sql"] = "category_id";
$proto6["m_srcTableName"] = "tf_categories";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "cname",
	"m_strTable" => "tf_categories",
	"m_srcTableName" => "tf_categories"
));

$proto8["m_sql"] = "cname";
$proto8["m_srcTableName"] = "tf_categories";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "tf_categories";
$proto11["m_srcTableName"] = "tf_categories";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "category_id";
$proto11["m_columns"][] = "cname";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "tf_categories";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "tf_categories";
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
$proto0["m_srcTableName"]="tf_categories";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tf_categories = createSqlQuery_tf_categories();


	
		;

		

$tdatatf_categories[".sqlquery"] = $queryData_tf_categories;



$tdatatf_categories[".hasEvents"] = false;

?>
<?php

include_once(getabspath("connections/ConnectionManager_base.php"));

class ConnectionManager extends ConnectionManager_Base
{
	/**
	 * @param String connId
	 * @return Connection
	 */
	protected function getConnection( $connId )
	{
		include_once getabspath("connections/Connection.php");

		$data = $this->_connectionsData[ $connId ];
		switch( $data["connStringType"] )
		{
			case "mysql":
				if( useMySQLiLib() )
				{
					include_once getabspath("connections/MySQLiConnection.php");
					return new MySQLiConnection( $data );
				}

				include_once getabspath("connections/MySQLConnection.php");
				return new MySQLConnection( $data );

			case "mssql":
			case "compact":
				if( useMSSQLWinConnect() )
				{
					include_once getabspath("connections/MSSQLWinConnection.php");
					return new MSSQLWinConnection( $data );
				}
				if( isSqlsrvExtLoaded() )
				{
					include_once getabspath("connections/MSSQLSrvConnection.php");
					return new MSSQLSrvConnection( $data );
				}

				if( function_exists("mssql_connect") ) {
					include_once getabspath("connections/MSSQLUnixConnection.php");
					return new MSSQLUnixConnection( $data );
				}

				if( class_exists("PDO") ) {
					include_once getabspath("connections/PDOConnection.php");
					$drivers = pdo_drivers();
					if( in_array( "sqlsrv", $drivers) )
					{
						$data["PDOString"] = "sqlsrv:Server=" . $data["connInfo"][0] . ";Database=" . $data["connInfo"][3];
						$data["PDOUser"] = $data["connInfo"][1];
						$data["PDOPass"] = $data["connInfo"][2];
						return new PDOConnection( $data );
					}
					if( in_array( "dblib", $drivers) )
					{
						$data["PDOString"] = "dblib:host=" . $data["connInfo"][0] . ";dbname=" . $data["connInfo"][3];
						$data["PDOUser"] = $data["connInfo"][1];
						$data["PDOPass"] = $data["connInfo"][2];
						return new PDOConnection( $data );
					}
				}
				echo "No SQL Server driver found in your PHP settings.";
				if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') {
					echo "<br>To enable SQL Server support add the following line to php.ini file:";
					echo "<br>extension=php_com_dotnet.dll";
				}
				exit();

			case "msaccess":
			case "odbc":
			case "odbcdsn":
			case "custom":
			case "file":
				if( stripos($data["ODBCString"], 'Provider=') !== false )
				{
					include_once getabspath("connections/ADOConnection.php");
					return new ADOConnection( $data );
				}

				include_once getabspath("connections/ODBCConnection.php");
				return new ODBCConnection( $data );

			case "oracle":
				include_once getabspath("connections/OracleConnection.php");
				return new OracleConnection( $data );

			case "postgre":
				include_once getabspath("connections/PostgreConnection.php");
				return new PostgreConnection( $data );

			case "db2":
				include_once getabspath("connections/DB2Connection.php");
				return new DB2Connection( $data );

			case "informix":
				include_once getabspath("connections/InformixConnection.php");
				return new InformixConnection( $data );

			case "sqlite":
				include_once getabspath("connections/SQLite3Connection.php");
				return new SQLite3Connection( $data );
			case "pdo":
				include_once getabspath("connections/PDOConnection.php");
				return new PDOConnection( $data );
		}
	}

	/**
	 * Set the data representing the project's
	 * db connection properties
	 */
	protected function _setConnectionsData()
	{
		// content of this function can be modified on demo account
		// variable names $data and $connectionsData are important

		$connectionsData = array();

		$data = array();
		$data["dbType"] = 0;
		$data["connId"] = "broadspireatcrmcluster8cg8qeeg";
		$data["connName"] = "taskform at locathost";
		$data["connStringType"] = "mysql";
		$data["connectionString"] = "mysql;localhost;root;;;taskform;;1"; //currently unused

		$this->_connectionsIdByName["taskform at locathost"] = "broadspireatcrmcluster8cg8qeeg";

		$data["connInfo"] = array();
		$data["ODBCUID"] = "root";
		$data["ODBCPWD"] = "";
		$data["leftWrap"] = "`";
		$data["rightWrap"] = "`";

		$data["DBPath"] = "db"; //currently unused
		$data["useServerMapPath"] = 1; //currently unused

//admin db		
$adservername = "localhost";
$adusername = "root";
$adpassword = "";
$addbname = "taskformadmin";

// Create connection
$conn = new mysqli($adservername, $adusername, $adpassword, $addbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM ad_clients where client_subdomain='client1.zjcdzjffrp-eqg35xv516xn.p.temp-site.link' limit 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  $row= $result->fetch_array(MYSQLI_BOTH);
  
} else {
	header("Location: error.php");
	die();
}

		
$host="localhost";
$user=$row["client_dbusername"];
$pwd=$row["client_dbpassword"];
$port="";
$sys_dbname=$row["client_dbname"];
 
$data["connInfo"][0] = $host;
$data["connInfo"][1] = $user;
$data["connInfo"][2] = $pwd;
$data["connInfo"][3] = $port;
$data["connInfo"][4] = $sys_dbname;
;
		// encription set
		$data["EncryptInfo"] = array();
		$data["EncryptInfo"]["mode"] = 0;
		$data["EncryptInfo"]["alg"]  = 256;
		$data["EncryptInfo"]["key"]  = "";

		$connectionsData["broadspireatcrmcluster8cg8qeeg"] = $data;
		$this->_connectionsData = &$connectionsData;
	}

	/**
	 * Close db connections
	 * @destructor
	 */
	function __desctruct()
	{
		$this->CloseConnections();
	}
}
?>
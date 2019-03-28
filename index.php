<?php
/**
 * Created by PhpStorm.
 * User: zalakpatel
 * Date: 2019-03-27
 * Time: 09:27
 */



/**
 * For initialization
 */

class initialization
{

	function initial($filename)
	{
		$handler	= (new CVS_File)->create_handle($filename);
		$data		= (new CVS_File)->get_file_data($handler);
		              (new HTML_Table)->generate_headings($data);
		while ($data = (new CVS_File)->get_file_data($handler)) {
            (new CVS_File)->data_into_HTML($data);
		}
	}
}


/**
 * Get Records From CVS
 */
class CVS_File
{
	function create_handle($filename)
	{
		return fopen($filename, "r");
	}

	function get_file_data($handler)
	{
		return fgetcsv($handler, 1000, ",");
	}

	function data_into_HTML($data)
	{
		return (new HTML_Table)->generate_rows($data);
	}
}

/**
 * For Generate Tables
 */
class HTML_Table
{

	function generate_headings($array)
	{
		$th="";
		foreach ($array as $key => $value) {
			$th .= "<th>{$value}</th>";
		}
		$tr = "<tr>".$th."</tr>";
		echo $tr;
		return $tr;
	}

	function generate_rows($array)
	{
		$td="";
		foreach ($array as $key => $value) {
			$td .= "<td>{$value}</td>";
		}
		$tr = "<tr>".$td."</tr>";
		echo $tr;
		return $tr;
	}
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>CVS Table</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<style>
		/*tbody tr:nth-child(even) {background-color: #f2f2f2 !important;}*/
		/*tbody tr:nth-child(odd) {background-color: #fff !important;}*/
	</style>
</head>
<body>
	<div class="container">
		<h2 class="alert alert-info text-center">CSV File Records</h2><br>
	<table class="table table-bordered table-striped">
		<?php
		// initialization::initial("01.csv");	// File 01
		// initialization::initial("02.csv");	// File 02
        (new initialization)->initial("03.csv");	// File 03
		// initialization::initial("04.csv");	// File 04
		?>
	</table>
	</div>
</body>
</html>
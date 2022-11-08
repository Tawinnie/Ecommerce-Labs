<?php
// //connect to database class
// require("../settings/db_class.php");

// /**
// *General class to handle all functions 
// */
// /**
//  *@author David Sampah
//  *
//  */

// class general_class extends db_connection
// {
// 	//--INSERT--//
// 	// insert product into the database

// 	function add_product($pcat, $brand,$title,$price){
// 		$sql= "INSERT INTO products('product_cat','product_brand', 'product_title','product_price') Values('$pcat', '$brand','$title','$price')";
// 		return $this->db_query($sql);
// 	}

// //the code we did with Sampah 
// 	//--SELECT--//

// //get all categories
// 	function get_categories_class(){
// 		$sql= "SELECT * FROM categories";
// 		return $this->db_fetch_all($sql);
// 	}

// 	//get all brands
// 	function get_brands_class(){
// 		$sql= "SELECT * FROM brands";
// 		return $this->db_fetch_all($sql);
// 	}

// 	//--UPDATE--//



// 	//--DELETE--//
	

// }

?>
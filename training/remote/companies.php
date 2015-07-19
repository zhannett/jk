<?php


	$rows = array();
/*	
	array_push($rows, array('id' => 1, 'name' => '3m Co', 'price' => 19.80, 'change' => 0.02, 'pctChange' => -0.02, 'last_updated' => '9/1 12:00am', 'industry' => 'Web-Dev', 'desc' => "Whyare my feet so far from my head?"));
	array_push($rows, array('id' => 2, 'name' => 'Foo', 'price' => 9.80, 'change' => 1.02, 'pctChange' => 0.92, 'last_updated' => '9/1 11:00am', 'industry' => 'Web-Dev', 'desc' => "Whyare my feet so far from my head?"));
	array_push($rows, array('id' => 3, 'name' => 'Bar', 'price' => 1.80, 'change' => 0.32, 'pctChange' => 0.08, 'last_updated' => '9/1 9:00am', 'industry' => 'Web-Dev', 'desc' => "Whyare my feet so far from my head?"));
	array_push($rows, array('id' => 4, 'name' => 'Fred', 'price' => 129.80, 'change' => 2.02, 'pctChange' => -0.06, 'last_updated' => '9/1 2:00am', 'industry' => 'Web-Dev', 'desc' => "Whyare my feet so far from my head?"));
	array_push($rows, array('id' => 5, 'name' => 'Barney', 'price' => 232.00, 'change' => 0.0, 'pctChange' => 0.02, 'last_updated' => '9/1 3:30am', 'industry' => 'Web-Dev', 'desc' => "Whyare my feet so far from my head?"));
	array_push($rows, array('id' => 6, 'name' => 'Wilma', 'price' => 165.32, 'change' => 0.5, 'pctChange' => 0.22, 'last_updated' => '9/1 6:30am', 'industry' => 'Web-Dev', 'desc' => "Whyare my feet so far from my head?"));
	array_push($rows, array('id' => 7, 'name' => 'Betty', 'price' => 13.33, 'change' => 0.4, 'pctChange' => -0.03, 'last_updated' => '9/1 8:31am', 'industry' => 'Web-Dev', 'desc' => "Whyare my feet so far from my head?"));
	    
	*/
	
	
	
		array_push($rows, array(
			"name"=>"White Non-Hispanic HH Inc. Per Capita ($), 2006",
			"variable_id"=>1,
			"is_percent"=>"f",
			"is_count"=>"f",
			"is_average"=>"t"
		));
		array_push($rows, array(
			"name"=>"% White Non-Hispanic Pop, Females 25 to 34 Years, 2006",
			"variable_id"=>2,
			"is_percent"=>"t",
			"is_count"=>"f",
			"is_average"=>"f"
		));
		array_push($rows, array(
			"name"=>"# White Non-Hispanic Pop, Females 35 to 44 Years, 2006",
			"variable_id"=>3,
			"is_percent"=>"f",
			"is_count"=>"t",
			"is_average"=>"f"
		));
		array_push($rows, array(
			"name"=>"White Non-Hispanic Male Median Age, 2006",
			"variable_id"=>4,
			"is_percent"=>"f",
			"is_count"=>"f",
			"is_average"=>"t"
		));
		array_push($rows, array(
			"name"=>"# HHs w\/ Homeowners Or Personal Property Insurance: Company: Travelers, 2006",
			"variable_id"=>5,
			"is_percent"=>"f",
			"is_count"=>"t",
			"is_average"=>"f"
		));
		array_push($rows, array(
			"name"=>"White Non-Hispanic HH Inc. Per Capita ($), 2011",
			"variable_id"=>6,
			"is_percent"=>"f",
			"is_count"=>"f",
			"is_average"=>"t"
		));
		array_push($rows, array(
			"name"=>"# White Non-Hispanic HHs, 2011",
			"variable_id"=>7,
			"is_percent"=>"f",
			"is_count"=>"t",
			"is_average"=>"f"
		));
		array_push($rows, array(
			"name"=>"# HHs w\/ Vehicle Insurance: Type Carried: Liability, 2006",
			"variable_id"=>8,
			"is_percent"=>"f",
			"is_count"=>"t",
			"is_average"=>"f"
		));
		array_push($rows, array(
			"name"=>"# Hispanic Pop, Females 18 to 24 Years, 2006",
			"variable_id"=>9,
			"is_percent"=>"f",
			"is_count"=>"t",
			"is_average"=>"f"
		));
		array_push($rows, array(
			"name"=>"# Hispanic Pop, Females 85 Years and Older, 2006",
			"variable_id"=>10,
			"is_percent"=>"f",
			"is_count"=>"t",
			"is_average"=>"f"
		));
	
	
	
	$response = array(
	
		'success' => true,	// <-- successProperty
		'data' => $rows,    // <-- root
		//'total' => 7	
		'total'=>10
	);
	
	echo json_encode($response);
?>
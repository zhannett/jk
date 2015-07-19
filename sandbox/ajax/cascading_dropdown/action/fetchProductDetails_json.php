<?php 
 

$json = '

	{
		"name":"Chippewa 17-inch Engineer Boot", 
		"sku": 7141832, 
		"height"=> "17 inches", 
		"lining": "Leather", 
		"colors": "Black <abbr>Oil-tanned</abbr>, Black Polishable", 
		"price" : "$187.00", 
		"features": "<abbr>Oil-tanned</abbr> or polishable <abbr>full-grain</abbr> leather uppers. <abbr>Vibram</abbr> sole. <abbr>Goodyear welt</abbr>. Padded insole. Steel safety toe."
	}';/*,
	{
		"name ": "Chippewa 11-inch Engineer Boot", 
		"sku" : 7173656, 
		"height": "11 inches", 
		"lining ": "None", 
		"colors" : "Black, Crazy Horse", 
		"rice" : "$167.00", 
		"features" : "<abbr>Oil-tanned</abbr> <abbr>full-grain</abbr> leather uppers. <abbr>Vibram</abbr> sole. <abbr>Goodyear welt</abbr>. Padded insole. Steel safety toe. Texon&reg; insole."
	};
	
	
	{
		name : 'Chippewa Harness Boot', 
		sku :7141922, 
		height: '13 inches', 
		lining : 'Leather', 
		colors : 'Black, Crazy Horse', 
		price : '$187.00', 
		features : "<abbr>Full-grain</abbr> leather uppers. Leather lining. <abbr>Vibram</abbr> sole. <abbr>Goodyear welt</abbr>.
	},
	{
		name : 'Caterpillar Tradesman Work Boot', 
		sku : 7177382, 
		height: '6 inches', 
		lining : 'Leather', 
		colors : 'Honey, Peanut', 
		price : '$87.00', 
		features : "<abbr>Full-grain</abbr> <abbr>oil-tanned</abbr> leather. Nylon mesh lining. Ortholite sock liner. EVA midsole. T84V Rubberlon outsole."
	},
	{
		name : 'Danner Foreman Pro Work Boot', 
		sku : 7141730, 
		height: '10 inches', 
		lining : 'Leather', 
		colors: 'Honey, Brown', 
		price': '$287.00', 
		features' : "Alkali-resistant <abbr>full-grain</abbr> leather. <abbr>Cambrelle</abbr> nylon lining. Fiberglass shank. <abbr>Vibram</abbr> 4014 Cristy sole. <abbr>Stitch-down</abbr> construction."
		
	},
	{
		name : 'Chippewa 17-inch Snakeproof Boot', 
		sku : 7141833, 
		height: '17 inches', 
		lining : 'Leather', 
		colors : 'Russet', 
		price : '$147.00', 
		features : "<abbr>Full-grain</abbr> leather foot. 1000 Denier <abbr>Cordura</abbr> Viper cloth shaft. <abbr>Goodyear welt</abbr>. Leather Lining. Body Cushion Insole. <abbr>Vibram</abbr> Robinson Outsole."
		
	},
	{
		name : 'Danner Grouse GTX Boot', 
		sku : 7257914, 
		height: '8 inches', 
		lining : '<abbr>Gore-Tex</abbr>', 
		colors : 'Brown', 'price' => '$207.00', 
		features : "<abbr>Full-grain</abbr> leather foot. 1000 Denier <abbr>Cordura</abbr> Viper cloth shaft. <abbr>Gore-Tex</abbr> lining. Stich-down construction."
	},
	{
		name : 'Caterpillar Logger Boot', 
		sku => 7269643, 
		height=> '8 inches', 
		lining => '<abbr>Cambrelle</abbr>', 
		colors => 'Black', 
		price => '$157.00', 
		features => "<abbr>Full-grain</abbr> leather. <abbr>Cambrelle</abbr>&reg; lining. Steel safety toe. Electrical hazard protection. Poliyou&reg; cushion insole. Rubber lug outsole."	
	}
	
  ] 
    };
*/
//json_decode($json);
var_dump(json_decode($json));
var_dump(json_decode($json, true));



?>

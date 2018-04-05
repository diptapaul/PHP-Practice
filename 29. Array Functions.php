<?php 
	include 'header.php';
?>
	<section class = "headeroption">
		<h2> Array Functions </h2>
	</section>
	<section class = "maincontent">

	<?php

		
		// array_change_key_case()

		$arr = array(
			"Dipta" => 22,
			"Pias" => 23,
			"Sourov" => 24
		);

		print_r(array_change_key_case($arr, CASE_LOWER));
		echo "<br/>";
		print_r(array_change_key_case($arr, CASE_UPPER));
		echo "<br/>";
		print_r(array_change_key_case($arr, 0));
		echo "<br/>";
		print_r(array_change_key_case($arr, 1));
		echo "<br/>";
		print("<pre>");
		print_r(array_change_key_case($arr, 1));
		print("</pre>");
		echo "<br/>";

		//-------------------------------------------------

		// array_column()

		$arr = array(
			array(
				"Name" => "Dipta Paul",
				"Age" => "22",
				"Gender" => "Male"
			),
			array(
				"Name" => "Dipan Paul",
				"Age" => "26",
				"Gender" => "Male"
			),
			array(
				"Name" => "Rupa Paul",
				"Age" => "24",
				"Gender" => "Female"
			)	
		);

		$name = array_column($arr, "Name");
		print_r($name);
		echo "<br/>";

		$gender = array_column($arr, "Gender");
		print_r($gender);
		echo "<br/>";

		//--------------------------------------------------

		// array_combine() (make it associative array)

		$name = array("Dipta", "Pias", "Sourov");
		$age = array("22", "23", "21");

		$name_age = array_combine($name, $age);
		print_r($name_age);
		echo "<br/>";

		//--------------------------------------------------


		// array_count_values()

		$name = array("Dipta", "Dipta", "Dipta", "Pias", "Pias", "Pias", "Sourov");
		$age = array("22", "22", "22", "23", "23", "23", "23", "21");

		print_r(array_count_values($name));
		echo "<br/>";
		print_r(array_count_values($age));
		echo "<br/>";

		//-------------------------------------------------

		// array_diff() (compare the first parameter with rest of the parameter and find out the unique value of first parameter)

		$array_one = array(
			"a" => "red",
			"b" => "green",
			"c" => "blue",
			"d" => "yellow"
		);
		$array_two = array(
			"a" => "red",
			"f" => "blue",
			"g" => "purple"
		);
		$array_three = array(
			"a" => "red",
			"b" => "blue",
			"d" => "yellow"
		);

		$differ = array_diff($array_one, $array_two, $array_three);

		print_r($differ);
		echo "<br/>";

		//----------------------------------------------------------------------

		// array_diff_assoc() (compare the first parameter with rest of the parameter and find out the unique key and value of first parameter)

		$differ = array_diff_assoc($array_one, $array_two, $array_three);

		print_r($differ);
		echo "<br/>";

		//--------------------------------------------------------------------------

		// array_diff_key() (compare the first parameter with rest of the parameter and find out the unique keys of first parameter)

		$differ = array_diff_key($array_one, $array_two, $array_three);

		print_r($differ);
		echo "<br/>";

		//---------------------------------------------------------------------------

		// array_intersect() (find out the similar value of the parameters)

		$differ = array_intersect($array_one, $array_two, $array_three);

		print_r($differ);
		echo "<br/>";

		//-------------------------------------------------------------------------

		// array_intersect_assoc() (find out the similar key and value of the parameters)

		$differ = array_intersect_assoc($array_one, $array_two, $array_three);

		print_r($differ);
		echo "<br/>";

		//---------------------------------------------------------------------------

		// array_intersect_key() (find out the similar key of the parameters)

		$differ = array_intersect_key($array_one, $array_two, $array_three);

		print_r($differ);
		echo "<br/>";

		//---------------------------------------------------------------------------	

		// array_key_exists() (check whether a is exists or not)

		$arr = array("hello" => 1, "world" => 2, "user" => 3);
		if(array_key_exists("hello", $arr)) {
			echo "Exists<br/>";
		}
		else {
			echo "Not Exists<br/>";
		}

		//--------------------------------------------------------------------------

		// arr_keys() (make an array with all the keys)

		$arr = array_keys($array_one);
		print_r($arr);
		echo "<br/>";

		// array_map()

		function func($data) {
			return $data * $data;
		}

		$arr = array(1, 2, 3, 4, 5);
		$arr = array_map("func", $arr);
		print_r($arr);
		echo "<br/>";

		function fun($data) {
			return (strtoupper($data));
		}

		$arr = array_map("fun", array("dipta" => "bristi", "pias" => "manisha"));
		print_r($arr);
		echo "<br>";

		//------------------------------------------------------------

		// array_merge()

		$arr = array(1, 2, 3);
		$brr = array(4, 5, 6);
		$drr = array(7, 8, 9);
		$crr = array_merge($arr, $brr, $drr);
		print_r($crr);
		echo "<br/>";

		//-------------------------------------------------------------

		// array_multisort()

		$arr_one = array("Dog", "Cat", "Cat", "Lion", "Tiger", "Horse");
		$arr_two = array("Lion", "Tiger","Ant", "Zebra", "Monkey", "Bear");
		array_multisort($arr_one, SORT_ASC, SORT_REGULAR ,$arr_two, SORT_ASC);
		print_r($arr_one);
		echo "<br/>";

		print_r($arr_two);
		echo "<br/>";

		//-------------------------------------------------------------
		
		// array_pad()

		$arr = array(1, 2);
		$result = array_pad($arr, 5, 3);
		$btr = array("red", "green");
		$btr = array_pad($btr, 5, "blue");
		print_r($result);
		echo "<br/>";
		print_r($btr);
		echo "<br/>";

		//------------------------------------------------------------

		// array_push() and array_pop()

		$arr = array(1, 2, 3, 4, 5);
		array_pop($arr);

		print_r($arr);
		echo "<br/>";

		$str = array("helo" => "world", "wel" => "come");
		array_push($str, "hell", "bell");

		print_r($str);
		echo "<br/>";

		//------------------------------------------------------------

		// array_product()

		$arr = array(1, 2, 3, 4);
		echo array_product($arr)."<br/>";

		//---------------------------------------------------

		// array_replace()

		$arr = array("mango", "apple", "guava");
		$brr = array("carrot", "pineapple");
		$crr = array_replace($arr, $brr);

		print_r($crr);
		echo "<br/>";

		$arr = array("white", "m" => "mango", "yellow", "a" => "apple");
		$brr = array("a" => "ant", "m" => "mat", "red", "green");
		$crr = array_replace($arr, $brr);

		print_r($crr);
		echo "<br/>";

		//-------------------------------------------------------------------

		// array_reverse()

		$arr = array(1, 2, 3, 4, 5, 6);
		print_r(array_reverse($arr));
		echo "<br/>";

		//---------------------------------------------------------

		// array_search()

		$arr = array("tumi" => "ami", "tumi+ami" => "amader sontan");
		$result = array_search("amader sontan", $arr);
		echo $result."<br/>";

		//-----------------------------------------------------------

		// array_shift() (delete the first index of the array)

		array_shift($arr);
		print_r($arr);
		echo "<br/>";

		// array_slice()

		$color = array("red", "green", "blue", "white", "black");
		$arr = array_slice($color, 3, 2);
		$brr = array_slice($color, -3, 2);

		print_r($arr);
		echo "<br/>";

		print_r($brr);
		echo "<br/>";

		//-------------------------------------------------

		// array_sum()

		$arr = array(1, 2, 3, 4, 5);
		echo array_sum($arr)."<br/>";

		$arr = array("a" => 1, "b" => 2, "c" => 3);
		echo array_sum($arr)."<br/>";

		//--------------------------------

		// array_unique()

		$arr = array(1, 2, 3, 4, 5, 5, 4);
		$brr = array_unique($arr);
		print_r($brr);
		echo "<br>";

		$color = array("b" => "blue", "w" => "white", "B" => "blue", "g" => "white");
		print_r(array_unique($color));
		echo "<br/>";

		//-----------------------------------

		// array_values()

		$val = array_values($color);
		print_r($val);
		echo "<br/>";

		// array_unshift()

		array_unshift($color, "red");
		print_r($color);
		echo "<br/>";

		//------------------------------------

		// array_walk()

		function myfunction($values, $keys) {
			echo $keys." comes from ".$values."<br/>";
		}

		$student = array(
			"Raihan" => "CSE",
			"Dipta" => "Math",
			"Pias" => "Bangla",
			"Shuvo" => "English"
		);

		array_walk($student, "myfunction");

		//--------------------------------------------


		// asort() (sort an associative array in ascending order according to the value)

		$arr = array("a" => "Ant", "c" => "Cat", "b" => "Bear", "d" => "Dog", "h" => "Horse", "e" => "Elephant");
		asort($arr);
		print_r($arr);
		echo "<br/>";

		//--------------------------------------------------------------------------------

		// arsort() (sort an associative array in descending order according to the value)

		$arr = array("a" => "Ant", "c" => "Cat", "b" => "Bear", "d" => "Dog", "h" => "Horse", "e" => "Elephant");
		arsort($arr);
		print_r($arr);
		echo "<br/>";

		//--------------------------------------------------------------------------------

		// ksort() (sort an associative array in ascending order according to the key)

		$arr = array("a" => "Ant", "c" => "Cat", "b" => "Bear", "d" => "Dog", "h" => "Horse", "e" => "Elephant");
		ksort($arr);
		print_r($arr);
		echo "<br/>";

		//----------------------------------------------------------------------------

		// krsort() (sort and associative array in descending order according to the key)

		$arr = array("a" => "Ant", "c" => "Cat", "b" => "Bear", "d" => "Dog", "h" => "Horse", "e" => "Elephant");
		krsort($arr);
		print_r($arr);
		echo "<br/>";

		//----------------------------------------------------------------------------------

		// compact() (add all the variables in a array)

		$a = "pias";
		$b = "dipta";
		$c = "sourov";

		$arr = compact("a", "b", "c");
		print_r($arr);
		echo "<br/>";

		//-----------------------------------------------

		// current(), next(), prev()

		$arr = array("pias", "mamun", "emad", "dipta");

		echo current($arr)."<br/>";
		next($arr);
		echo current($arr)."<br/>";
		next($arr);
		echo current($arr)."<br/>";
		prev($arr);
		echo current($arr)."<br/>";
		echo end($arr)."<br/>";

		// ------------------------------------------------

		// in_array()

		$arr = array("dipta", "pias", "mamun");

		if(in_array("dipta", $arr)) {
			echo "Yes<br/>";
		}
		else{
			echo "No<br/>";
		}

		//------------------------------------------------

		// key()

		$arr = array("38" => "dipta", "39" => "sathi", "52" => "anif");
		echo key($arr)."<br>";
		next($arr);
		echo key($arr)."<br>";

		$brr = array("dipta", "pias", "sathi");
		echo key($brr)."<br>";
		next($brr);
		echo key($brr)."<br>";

		//----------------------------------------------------------------

		// shuffle()

		$arr = array("one", "two", "three", "four");
		shuffle($arr);
		print_r($arr);
		echo "<br>";

		//----------------------------------------------------------------

	?>
<?php require 'footer.php'?>
<?php
	// echo "<br>";
	// echo "<br>";

	
?>



<?php
/*
echo '<br>';
print "<br>";
$b = &$a;
echo (int) 55.5;
var_dump((bool) "");
echo nl2br("Hello PHP
On Multiple
Lines");
var_dump(100 <=> 200); // -1
var_dump(100 <=> 100); // 0
var_dump(100 <=> 50); // 1
var_dump(100 > 50 xor 100 > 80); // False
function calculate($n1, $n2) : int {
	return $n1 + $n2;
}
$str = "Elzero";
echo "Last Letter Is {$str[-1]} <br>";
echo "Last Letter Is {$str[strlen($str) - 1]} <br>";


									While Loop And Concept Of Loop
{
	$i = 1;
	while($i <= 3):
		echo "$i\n";
		$i++;
	endwhile;
}

										Ternary Conditional Operator
{
	$a = 10;
	$result = $a > 8 ? "Good" : "Bad";
	echo "I Love PHP Because Its A " . ($a > 8 ? "Good" : "Bad") . " Language";
	echo "I Love PHP Because Its A $result Language";
}

														Loop Foreach
{
	$countries_with_discount = ["EG" => 50,"SA" => 30,"QA" => 50,"SY" => 70];
	foreach($countries_with_discount as $country => $discount):
		echo $country . ": " . $discount;
		echo "<br>";
	endforeach;
}

										Include And include_once And Require
{
	// require("test.php"); // $a = 10 [If Error Stop All Scripts]
	include_once("test.php"); // $a = 10 [If Error Continue All Scripts]
	echo $a . '<br>';
	$a = 20;
	include_once("test.php"); // $a = 10 [If Error Continue All Scripts]
	echo $a . '<br>';
	echo "Continue";
}

											Function Default Parameter Value
{
	function get_data($country = "Private",$name = "Private",$age = "Private",$address = "Private") {
		$line_one = "Your Country Is $country And Your Name Is $name <br>";
		$line_two = "Your Age Is $age And You Live In $address";

		return $line_one . $line_two;
	}
	echo get_data(address: "Cairo");
}


										Spread Syntax Arguments List
{
	function calculate(...$args) {
		// echo "Number of Arguments: " . func_num_args() . '<br>';
		// echo "Arguments Index Number 2 Is: " . func_get_arg(2) . '<br>';
		// foreach(func_get_args() as $arg):
		// 	$sum += $arg;
		// endforeach;

		$sum = 0;
		foreach($args as $arg):
			$sum += $arg;
		endforeach;

		return $sum;
	}
	echo calculate(10, 20, 30, 40, 50, 50);
}

										Function Variable And Function Exists
{
	function one() {
	return "One From Function";
	}
	$func1 = "one";
	echo $func1();
	echo "<br>";
	echo "<br>";
	if (function_exists("testing")) {
		echo testing();
	}else {
		echo "Function Not Found";
	}
	function testing() {
		return "Testing From Function";
	}
	echo "<br>";
	echo "<br>";
	echo strlen("Mahmoud Easa");
}

												Anonymous Function
{
	$msg = "Hello";
	$say_hello = function($name) use ($msg) {
		return "$msg $name";
	};
	echo $say_hello("Mahmoud");

	$nums = [10, 20, 30, 40, 50];
	function add_five($item) {
		return $item + 5;
	}
	echo "<br>";
	echo "<br>";
	$nums_after_adding_five = array_map("add_five", $nums);
	print_r($nums_after_adding_five);
	echo "<br>";
	echo "<br>";
	$nums_after_adding_ten = array_map(function($num) {return $num + 10;}, $nums);
	print_r($nums_after_adding_ten);
}

												Arrow Function
{
	$msg = "Hello";
	$say_hello = fn($name) => "$msg $name";
	echo $say_hello("Mahmoud");

	$nums = [10, 20, 30, 40, 50];
	echo "<br>";
	echo "<br>";
	$nums_after_adding_five = array_map(fn($item) => $item + 5, $nums);
	print_r($nums_after_adding_five);
	echo "<br>";
	echo "<br>";
	$nums_after_adding_ten = array_map(fn($num) => $num + 10, $nums);
	print_r($nums_after_adding_ten);
}

															String Functions
{
	String Functions
	- lcfirst(String[Required])
	- ucfirst(String[Required])
	- strtolower(String[Required])
	- strtoupper(String[Required])
	- ucwords(String[Required], Delimiters[Optional])
	- str_repeat(String[Required], Count[Required])
	- implode(Separator[Optional], Array[Required]) => join() Is Alias
	- explode(Separator[Required], String[Required], Limit[Optional])
	- str_shuffle(String[Required])
	- strrev(String[Required])
	- trim(String[Required], CharsList[Optional])
	- ltrim(String[Required], CharsList[Optional])
	- rtrim(String[Required], CharsList[Optional])
	--- Space ""
	--- Tab \t
	--- New Line \n
	--- Carriage Return \r
	--- Vertical Tab "\x0B"
	--- NULL "\0"
	- chunk_split(String[Required], Length[Optional], End[Optional])
	- strlen(String[Required])
	- str_split(String[Required], Length[Optional])
	- strip_tags(String[Required], Allowed[Optional])
	- nl2br(String[Required], XHTML[Optional])
	- strpos(String[Required], Value[Required], Start Position[Optional]) Case-Sensitive
	- strrpos(String[Required], Value[Required], Start Position[Optional]) Case-Sensitive
	- stripos(String[Required], Value[Required], Start Position[Optional]) Case-Insensitive
	- strripos(String[Required], Value[Required], Start Position[Optional]) Case-Insensitive
	- substr_count(String[Required], Value[Required], Start Position[Optional], Length[Optional])
	- parse_str(String[Required], Array[Required])
	- quotemeta(String[Required])
	- str_pad(String[Required], Length[Required], String[Optional], Pad Flag[Optional])
	--- STR_PAD_BOTH
	--- STR_PAD_LEFT
	--- STR_PAD_RIGHT
	- strtr(String[Required], From[Required], To[Required]) || strtr(String[Required], Array[Required])
	- str_replace(Find[Required], Replace With[Required], Data[Required], Replace Count[Optional])
	--- Its Case-Sensitive
	- str_ireplace(Find[Required], Replace With[Required], Data[Required], Replace Count[Optional])
	- substr_replace(String[Required], Replace With Or Insert[Required], Start[Required], Length[$])
	--- $ Positive Number => Length Of String To Be Replaced
	--- $ Negative Number => Characters Left At The End After Replacement
	--- $ 0               => Insert Instead Of Replace
	- wordwrap(String[Required], Width[Optional = 75], Break_Char[Optional = "\n"], Cut_Long[Optional = False])
	- ord(String[Required])
	- chr(Int[Required])
	- similar_text(String_One[Required], String_Two[Required], Percent[Optional])
	--- Returns The Number Of Matching Characters
	- strstr(String[Required], Search[Required], Before_Search[Optional] = False)
	--- => Alias [strchr]
	--- Case-Sensitive
	- stristr(String[Required], Search[Required], Before_Search[Optional] = False)
	--- Case-Insensitive
	- number_format(Number[Required], Decimals[Optional], Decimal_String[Optional], Separator[Optional])
}
{
															Part 1

	echo lcfirst("Elzero Web School"); // elzero Web School
	echo "<br>";
	echo "<br>";
	echo ucfirst("elzero web school"); // Elzero web school
	echo "<br>";
	echo "<br>";
	echo strtolower("Elzero Web School"); // elzero web school
	echo "<br>";
	echo "<br>";
	echo strtoupper("Elzero Web School"); // ELZERO WEB SCHOOL
	echo "<br>";
	echo "<br>";
	echo ucwords("elzero web school"); // Elzero Web School
	echo "<br>";
	echo "<br>";echo ucwords("elzero web|school", "|"); // Elzero web|School
	echo "<br>";
	echo "<br>";
	echo str_repeat("Elzero Web School # ", 3);

															Part 2

	$friends = ["Ahmed", "Osama", "Ali", "Salem"];
	$strFriends = implode(" ", $friends); // implode => join() Is Alias;
	$arrStrFriends = explode(" ", $strFriends); // implode => split() Is Alias;
	$arrStrFriendsLimit = explode(" ", $strFriends, 3); // implode => split() Is Alias;
	$arrStrFriendsLimitDeleteLast = explode(" ", $strFriends, -2); // implode => split() Is Alias;
	$randomStr = str_shuffle("Mahmoud");
	$reverseStr = strrev("  Mahmoud  ");
	$trimStr = trim("  Mahmoud  ");
	$trimLeftStr = ltrim("  Mahmoud  ");
	$trimRightStr = rtrim("  Mahmoud  ");

	$trimTapStr = trim("  Mahmoud  ", "\t");
	$trimNewLineStr = trim("  Mahmoud  ", "\n");
	$trimCarriageReturnStr = trim("  Mahmoud  ", "\r");
	$trimVerticalTapStr = trim("  Mahmoud  ", "\x0B");
	$trimNULLStr = trim("  Mahmoud  ", "\0");

	echo $strFriends . "<br>";
	echo "<pre>";
	print_r($arrStrFriends);
	print_r($arrStrFriendsLimit);
	print_r($arrStrFriendsLimitDeleteLast);
	echo "</pre>";
	echo $randomStr . "<br>";
	echo $reverseStr . "<br>";
	echo $trimStr . "<br>";
	echo $trimLeftStr . "<br>";
	echo $trimRightStr . "<br>";
	echo trim("#Elzero###", "#") . "<br>";

															Part 3

	$chunkSplit = chunk_split("Elzero Web School", 3, "@"); // Elz@ero@ We@b S@cho@ol@
	$strLength = strlen("Elzero Web School");
	$stripTags = strip_tags("<h3>Hello <b>Elzero</b></h3>");
	$stripTagsAllowTag = strip_tags("<h3>Hello <b>Elzero</b></h3>", "<h3>, <b>");
	$NL2BR = nl2br("Elzero\nWeb\nSchool", false); // Don't use self closing tag
	$strSplit = str_split("Elzero Web School");
	$strSplitLength = str_split("Elzero Web School", 3);
	
	echo $chunkSplit . "<br>";
	echo $strLength . "<br>";
	echo $stripTags . "<br>";
	echo $stripTagsAllowTag . "<br>";
	echo $NL2BR . "<br>";
	echo "<pre>";
	print_r($strSplit) . "<br>";
	print_r($strSplitLength) . "<br>";
	echo "</pre>";
	
															Part 4

	// First Find
	var_dump(strpos("Hello Hello", "H")); // 0
	echo '<br>';
	var_dump(strpos("Hello Hello", "H", 3)); // 6
	echo '<br>';
	var_dump(strpos("Hello Hello", "H", 6)); // 6
	echo '<br>';
	var_dump(strpos("Hello Hello", "h")); // False
	echo '<br>';
	var_dump(strpos("Hello Hello", "H", -2)); // False
	echo '<br>';
	var_dump(strpos("Hello Hello", "H", -5)); // 6
	echo '<br>';
	var_dump(strpos("Hello Hello", "H", -11)); // 0
	echo '<br>';
	// Last Find
	var_dump(strrpos("Hello Hello", "H")); // 6
	echo '<br>';
	var_dump(strrpos("Hello Hello", "H", 5)); // 6
	echo '<br>';
	var_dump(stripos("Hello Hello", "h")); // 0
	echo '<br>';
	var_dump(strripos("Hello Hello", "h")); // 6
	echo '<br>';
	var_dump(substr_count("Hello Hello", "He")); // 2
	echo '<br>';
	var_dump(substr_count("Hello Hello", "He", 1)); // 1
	echo '<br>';
	var_dump(substr_count("Hello Hello", "He", 1, 6)); // 0
	echo '<br>';
	var_dump(substr_count("abcdabcda", "abcda")); // 1
	
															Part 5

	parse_str("name=Osama&email=o@nn.sa&os=mac", $query);
	// parse_str("name=Osama&#038;email=o@nn.sa&#038;os=mac", $query);
	echo '<pre>';
	print_r($query);
	echo '</pre>';
	echo $query["name"] . "<br>";
	echo $query["email"] . "<br>";
	echo $query["os"] . "<br>";
	echo "Hello [] () * + . <br>"; // Hello [] () * + .
	echo quotemeta("Hello [] () * + . <br>"); // Hello \[\] \(\) \* \+ \.
	echo str_pad("12", 8, 0, STR_PAD_BOTH) . "<br>"; // 00012000
	echo str_pad("321", 8, 0, STR_PAD_BOTH) . "<br>"; // 00321000
	echo str_pad("1313", 8, 0, STR_PAD_LEFT) . "<br>"; // 00001313
	echo str_pad("15435", 8, 0, STR_PAD_LEFT) . "<br>"; // 00015435
	echo str_pad("500432", 8, 0, STR_PAD_LEFT) . "<br>"; // 00500432
	echo strtr("E@zero Web Schoo@", "@", "l"); // Elzero Web School
	echo "<br>";
	$translation = ["@" => "l", "#" => "o"];
	echo strtr("E@zer# Web Sch##@", $translation); // Elzero Web School
	
															Part 6

	echo str_replace("@", "o", "Elzer@ Web Sch@@l", $r); // Elzero Web School
	echo '<br>';
	echo "Replaces Count Is $r"; // 3
	echo '<br>';
	echo str_replace(["#", "@"], "A", "E#zer@ Web Sch@@#"); // EAzerA Web SchAAA
	echo '<br>';
	echo str_replace(["#", "@"], ["l", "o"], "E#zer@ Web Sch@@#"); // Elzero Web School

	echo '<pre>';
	print_r(str_replace("One", 1, ["One", "Two", "Three", "One", "One"]));
	echo '</pre>';

	echo '<pre>';
	print_r(str_replace(["One", "Two"], [1, 2], ["One", "Two", "Three", "One", "One"]));
	echo '</pre>';

	echo '<pre>';
	print_r(str_replace(["One", "Two", "Three"], [1, 2], ["One", "Two", "Three", "One", "One"]));
	echo '</pre>';

	echo '<pre>';
	print_r(str_ireplace(["one", "two"], [1, 2], ["One", "Two", "Three", "One", "One"]));
	echo '</pre>';
	
															Part 7

	echo substr_replace("OneTwo", 1, 0); // 1
	echo '<br>';
	echo substr_replace("OneTwo", 1, 3); // One1
	echo '<br>';
	echo substr_replace("OneTwo", 1, 5); // OneTw1
	echo '<br>';
	echo substr_replace("OneTwo", 1, -1); // OneTw1
	echo '<br>';
	echo substr_replace("OneTwo", 2, 2); // On2
	echo '<br>';
	echo substr_replace("OneTwo", 2, 2, 2); // On2wo
	echo '<br>';
	echo substr_replace("OneTwo", 2, 1, 4); // O2o
	echo '<br>';
	echo substr_replace("Elzero_Web_School", "A", 7, 3); // Elzero_A_School
	echo '<br>';
	echo substr_replace("Elzero_Web_School", "A", 7, -1); // Elzero_Al
	echo '<br>';
	echo substr_replace("Elzero_Web_School", "A", 7, -3); // Elzero_Aool
	echo '<br>';
	echo substr_replace("Elzero_Web_School", "A", 7, -9); // Elzero_Aeb_School
	echo '<br>';
	echo substr_replace("Elzero_Web_School", "A", 7, -10); // Elzero_AWeb_School
	echo '<br>';
	echo substr_replace("Elzero_Web_School", "@", 1, 0); // E@lzero_Web_School

	echo "<pre>";
	print_r(substr_replace(["OneTwo", "ThreeFour"], 1, 0)); // [0] => 1 [1] => 1
	echo "</pre>";
	
															Part 8

	$str = "Welcome To To To T Elzeroo Web School Website Very_Very_Very_Long";
	echo strlen($str) . "<br>";
	echo wordwrap($str, 8, "<br>", True);
	echo "<br>";
	echo ord("a"); // 97
	echo "<br>";
	echo chr(97); // a
	echo "<br>";
	echo similar_text("Elz@ero", "Elz_eroo");
	echo "<br>";
	echo similar_text("Elzero", "Elzeroo", $perc);
	echo "<br>";
	echo $perc;
	
															Part 9

	echo strstr("Elzero Web", "W") . "<br>"; // Web
	echo strstr("Elzero Web", "z") . "<br>"; // zero Web
	echo strstr("Elzero Web", "W", True) . "<br>"; // Elzero
	echo strlen(strstr("Elzero Web", "W", True)) . "<br>"; // 7
	echo strstr("Elzero Web", "w") . "<br>"; // False
	var_dump(strstr("Elzero Web", "w"));
	echo '<br>';
	echo stristr("Elzero Web", "w") . "<br>"; // Web
	var_dump(stristr("Elzero Web", "w")); // Web
	echo '<br>';
	echo 10_000_000; // 10000000
	echo '<br>';
	echo number_format(10000000.156023); // 10,000,000
	echo '<br>';
	echo number_format(10000000.156023, 3); // 10,000,000.156
	echo '<br>';
	echo number_format(10000000.156023, 3, "@"); // 10,000,000@156
	echo '<br>';
	echo number_format(10000000.156023, 3, "@", "#"); // 10#000#000@156
}

															Array Functions

{
	Array Functions

    - array_chunk(Array[Required], Length[Required], Preserve_Key[Optional])
    --- Split An Array Into Chunks [Return A Multidimensional Indexed Array]
    --- Preserve_Key
    ------ [False => Default] Reindex The Keys
    ------ [True] Preserve The Keys

    - array_change_key_case(Array[Required], Case[Optional])
    --- Changes The Case Of All Keys In An Array
    --- Case
    ------ [CASE_LOWER => Default] Changes The Keys To Lowercase
    ------ [CASE_UPPER] Changes The Keys To Uppercase

    - array_combine(Array_Of_Keys[Required], Array_Of_Values[Required])

    - array_count_values(Array[Required])
    --- Counts All The Values Of An Array

	- array_reverse(Array[Required], Preserve[Optional])
    --- Reverse Array Elements

    - array_flip(Array[Required])
    --- Exchange Keys With Its Values

    - count(Array[Required], Mode[Optional])
    --- Count Array Elements
    --- Mode
    ------ 0 => Default => Does Not Count Elements Of Multidimensional Arrays
    ------ 1 => Count Elements Of Multidimensional Arrays

    - in_array(Search[Required], Array[Required], Type[Optional])
    --- Checks If A Value Exists In An Array

    - array_key_exists(Key[Required], Array[Required])
    --- Check If Key Is Exists


	- array_keys(Array[Required], Value[Optional], Type[Optional])
    --- Return The Array Keys
    --- Type
    ------ False => Default => No Checking For Type
    ------ True => Check For Type

    - array_values(Array[Required])
    --- Return All The Values Of An Array

    - array_pad(Array[Required], Size[Required], Value[Required])
    --- Pad Array To The Specified Length With A Value
    --- Negative Value Add Elements Before Original Items
    --- If Size < Array Length Nothing Will Be Deleted

    - array_product(Array[Required])
    --- Calculate The Product Of Values In An Array => Return Int || Float
    --- In Mathematics, A Product Is The Result Of Multiplication

    - array_sum(Array[Required])
    -- Calculate The Sum Of Values In An Array


	--- Every Array Has An Internal Pointer To Its "Current" Element
    --- Which Is Initialized To The First Element.
    --- Functions Returns Value Of Array Element That's Currently Pointed By The Internal Pointer

    - current(Array[Required]) => Return The Current Element In An Array
    - next(Array[Required]) => Advance The Internal Pointer
    - prev(Array[Required]) => Rewind The Internal Pointer
    - reset(Array[Required]) => Put The Internal Pointer On First Element
    - end(Array[Required]) => Put The Internal Pointer On Last Element


	- array_merge(Array[Required], Other_Array/s[Optional])
    --- Merge One Or More Arrays
    ------ Later Array Key With The Same Name Override The Value Of The Previous One
    ------ Numeric Key Will Be Renumbered

    - array_replace(Array[Required], Replacement/s[Optional])
    --- Replaces Elements From Passed Arrays Into The First Array
    ------ Same Key => Value In Second Array Replace Same Key => Value In First Array
    ------ If Key In Second Array Not Found In Fisrt Array It Will Be Created

    - array_rand(Array[Required], Num[Optional])
    --- Pick One Or More Random Keys Out Of An Array

    - shuffle(Array[Required])
    --- Shuffle An Array



	- array_shift(Array[Required])
    --- Shift An Element Off The Beginning Of Array
    --- This Function Will Reset => "reset()" The Input Array Pointer

    - array_pop(Array[Required])
    --- Pop The Element Off Ehe End Of Array
    --- This Function Will Reset => "reset()" The Input Array Pointer

    - array_push(Array[Required], Values[Optional])
    --- Push One Or More Elements Onto The End Of Array
    --- You Can Use $arr[]

    - array_unshift(Array[Required], Values[Optional])
    --- Add One Element In The Beginning Of An Array
    --- This Function Will Reset => "reset()" The Input Array Pointer



	- array_slice(Array[Required], Start[Required], Length[Optional], Preserve_Keys[Optional])
    --- Extract A Slice Of The Array
    --- Start
    ------ 0 From Start
    ------ -1 From Last Element
    --- Length
    ------ Negative => Stop Slicing Until This Index
    ------ Not Set => All Elements From Start Position
    --- Preserve Keys
    ------ False => Default => Reset Keys
    ------ True => Preserve Keys
    --- If Array Have String Keys, It Will Always Preserve The Keys

    - array_splice(Array[Required], Start[Required], Length[Optional], Array[Optional])
    --- Remove A Portion Of The Array And Replace It With Something Else
    --- Start
    ------ 0 From Start
    ------ -1 From Last Element
    --- Length
    ------ Negative => Stop Removing Until This Index
    ------ Not Set => Remove All Elements From Start Position



	- sort(Array[Required], Flag[Optional])
    --- Sort An Indexed Array In Ascending Order

    - rsort(Array[Required], Flag[Optional])
    - Sort An Indexing Array In Descending Order

    - asort(Array[Required], Flag[Optional])
    --- Sort An Associative Array In Ascending Order According To The Value

    - arsort(Array[Required], Flag[Optional])
    --- Sort An Associative Array In Descending Order According To The Value

    - ksort(Array[Required], Flag[Optional])
    --- Sort An Associative Array In Ascending Order According To The Key

    - krsort(Array[Required], Flag[Optional])
    --- Sort An Associative Array In Descending Order According To The Key

    - natsort(Array[Required], Flag[Optional])
    --- Sorts An Array By Using A "Natural Order" Algorithm

    Practice
    -- Flags
    -- Our Own Sorting Function



	- array_map(Callback Function[Required], Array[Required], Other Arrays[Optional])
    --- Applies The Callback To The Elements Of The Given Arrays

    - array_filter(Array[Required], Callback Function[Required], Flag[Optional])
    --- Filter Values Of An Array Using A Callback Function
    --- Flag
    ------ ARRAY_FILTER_USE_KEY
    ------ ARRAY_FILTER_USE_BOTH
    ------ 0 Default => Send Value As Arguments


	- array_reduce(Array[Required], Callback Function[Required], Initial_Value[Optional])
    --- Reduce The Array To A Single Value
    --- Carry => The Value Of The Previous Iteration || Initial Value
    --- Item => The Value Of The Current Iteration
}
{
																Part 1

	$friends = ["Osama", "Ahmed", "Sameh", "Mahmoud", "Gamal"];
	echo '<pre>';
	print_r(array_chunk($friends, 2));
	echo '</pre>';
	$countries = ["EG" => "Egypt", "KSA" => "Saudi Arabia", "Sy" => "Syria", "USA" => "United States"];
	echo '<pre>';
	print_r(array_chunk($countries, 2, True));
	echo '</pre>';
	echo '<pre>';
	print_r(array_change_key_case($countries, CASE_UPPER));
	echo '</pre>';
	$keys = ["A", "O", "K"];
	$values = ["Ahmed", "Osama", "Kamal"];
	echo '<pre>';
	print_r(array_combine($keys, $values));
	echo '</pre>';
	$counting = ["B", "A", "A", "B", "B", "B", "C"];
	echo '<pre>';
	print_r(array_count_values($counting));
	echo '</pre>';

																Part 2

	$family = ["Osama", "Ahmed", "Sameh", "Mahmoud", "Gamal", ["Eman", "Noha"]];
	echo '<pre>';
	print_r($family);
	print_r(array_reverse($family, True));
	echo '</pre>';
	$countries = ["EG" => "Egypt", "KSA" => "Saudi Arabia", "Sy" => "Syria", "USA" => "United States"];
	echo '<pre>';
	print_r(array_flip($countries));  // Reverse Key with value [Egypt] => EG
	echo '</pre>';
	$counting = [
		"A",
		"B",
		"C",
		[1, 2, 3]
	];
	echo count($counting, 1);
	echo '<br>';
	$search = ["1", 2, 3, 4];
	if (in_array(1, $search, True)) {
		echo "The Element Is Found";
	}
	echo '<br>';
	$courses = [
		"Javascript" => 95,
		"PHP" => 100,
		"HTML" => 60,
		"CSS" => 65
	];
	if (array_key_exists("PHP", $courses)) {
		echo "The Course Is Found And The Price Is: " . $courses["PHP"];
	}

												Part 3

	$friends = ["Osama", "Ahmed", "Sameh", "Mahmoud", "Gamal", "Osama", "Eman", 1, "1"];
	echo '<pre>';
	print_r(array_keys($friends));
	echo '</pre>';
	echo '<pre>';
	print_r(array_keys($friends, "Osama"));
	echo '</pre>';
	echo '<pre>';
	print_r(array_keys($friends, 1, True));
	echo '</pre>';
	$countries = ["EG" => "Egypt", "KSA" => "Saudi Arabia", "Sy" => "Syria", "USA" => "United States"];
	echo '<pre>';
	print_r(array_values($countries));
	echo '</pre>';
	$pad = ["A", "B", "C", "D"];
	echo '<pre>';
	print_r(array_pad($pad, 10, "@")); // Increase Array and Add @ In Increases From Right
	echo '</pre>';
	echo '<pre>';
	print_r(array_pad($pad, -10, "@")); // Increase Array and Add @ In Increases From Left
	echo '</pre>';
	echo '<pre>';
	print_r(array_pad($pad, 2, "@"));
	echo '</pre>';
	$product = [10, 5, 2, 10];
	echo array_product($product) . "<br>"; // Multiply Numbers In Array
	$sum = [10, 5, 2, 10];
	echo array_sum($sum);

												Part 4 066 - Current, Next, Prev, Reset, End

	$friends = ["Osama", "Ahmed", "Sameh", "Mahmoud", "Gamal", "Eman"];
	echo current($friends) . "<br>"; // "Osama"
	echo next($friends) . "<br>"; // "Ahmed"
	echo current($friends) . "<br>"; // "Ahmed"
	echo next($friends) . "<br>"; // "Sameh"
	echo current($friends) . "<br>"; // "Sameh"
	echo prev($friends) . "<br>"; // "Ahmed"
	echo reset($friends) . "<br>"; // "Osama"
	echo current($friends) . "<br>"; // "Osama"
	echo end($friends) . "<br>"; // "Eman"
	echo current($friends) . "<br>"; // "Eman"

												Part 5 067 - Array Merge, Array Replace, Array Rand, Shuffle

	$merge_one = ["One" => "PHP", "Two" => "CSS", "Three" => "JavaScript"];
	$merge_two = ["One" => "HTML", "Four" => "Python"];
	echo '<pre>';
	print_r(array_merge($merge_one, $merge_two));
	echo '</pre>';
	$merge_three = [10 => "PHP", 20 => "CSS", 30 => "JavaScript"];
	$merge_four = [40 => "Python", "10" => "Go"];
	echo '<pre>';
	print_r(array_merge($merge_three, $merge_four));
	echo '</pre>';
	$main = ["One" => "PHP", "Two" => "CSS", "Three" => "JavaScript"];
	$replace = ["One" => "HTML", "Four" => "Python"];
	echo '<pre>';
	print_r(array_replace($main, $replace));
	echo '</pre>';
	echo '<pre>';
	print_r(array_replace($merge_three, $merge_four));
	echo '</pre>';
	$nums = ["A", "B", "C", "D"];
	echo $nums[array_rand($nums)] . "<br>"; // Return Random 1 Key Or More From Array
	echo '<pre>';
	print_r(array_rand($nums, 3)); // Return Random 1 Key Or More From Array
	echo '</pre>';
	shuffle($nums); // Shuffle The Array
	echo '<pre>';
	print_r($nums);
	echo '</pre>';

												Part 6 068 - Array Shift, Array Pop, Array Push, Array Unshift

	$chars = ["A", "B", "C", "D"];
	echo '<pre>';
	print_r($chars);
	echo '</pre>';
	$first = array_shift($chars);
	echo "$first<br>"; // "A"
	echo '<pre>';
	print_r($chars);
	echo '</pre>';
	$last = array_pop($chars);
	echo "$last<br>"; // "D"
	echo '<pre>';
	print_r($chars);
	echo '</pre>';
	array_push($chars, "X", "Y", "Z");
	echo '<pre>';
	print_r($chars);
	echo '</pre>';
	array_push($chars, "1");
	$chars[] = "1";
	echo '<pre>';
	print_r($chars);
	echo '</pre>';
	array_unshift($chars, "One", "Two", "Three");
	echo '<pre>';
	print_r($chars);
	echo '</pre>';

												Part 7 069 - Array Slice, Array Splice

	$chars = ["A", "B", "C", "D", "E", "F", "G"];
	$chars_with_string_keys = ["A" => 1, "B" => 2, "C" => 3];
	$chars_with_numeric_keys = [10 => 1, 20 => 2, 30 => 3];
	echo '<pre>';
	print_r(array_slice($chars, 2)); // No Edit In Array
	print_r(array_slice($chars, -4));
	print_r(array_slice($chars, 2, 3));
	print_r(array_slice($chars, 2, -2));
	echo '</pre>';
	echo '<pre>';
	print_r(array_slice($chars_with_string_keys, 0, 2));
	print_r(array_slice($chars_with_numeric_keys, 0, 2));
	print_r(array_slice($chars_with_numeric_keys, 0, 2, True));
	echo '</pre>';
	echo '<pre>';
	print_r($chars);
	echo '</pre>';
	$nums = [10, 20, 30, 40, 50, 60, 70];
	echo '<pre>';
	print_r(array_splice($nums, 2, 1, ["One", "Two"]));  // Edit In Array
	print_r($nums);
	echo '</pre>';

												Part 8 070 - Array Functions Part 8 [ 7 Sort Functions ]

	$names = ["Osama", "Ahmed", "Sayed", "Mahmoud", "Sameh", "Gamal"];
	sort($names);
	echo '<pre>';
	print_r($names);
	echo '</pre>';
	rsort($names);
	echo '<pre>';
	print_r($names);
	echo '</pre>';
	$countries = ["S" => "Syria", "E" => "Egypt", "I" => "Iraq", "Q" => "Qatar"];
	asort($countries);
	echo '<pre>';
	print_r($countries);
	echo '</pre>';
	arsort($countries);
	echo '<pre>';
	print_r($countries);
	echo '</pre>';
	$codes = ["1" => "Syria", "3" => "Egypt", "2" => "Iraq", "5" => "Qatar"];
	ksort($codes);
	echo '<pre>';
	print_r($codes);
	echo '</pre>';
	krsort($codes);
	echo '<pre>';
	print_r($codes);
	echo '</pre>';
	$files = ["Photo1.png", "Photo20.png", "Photo3.png"];
	sort($files);
	echo '<pre>';
	print_r($files);
	echo '</pre>';
	natsort($files);
	echo '<pre>';
	print_r($files);
	echo '</pre>';

												Part 9 071 - Array Map, Array Filter

	function add_title($fname, $lname) {
		return "Hello Mr $fname $lname";
	}
	// echo add_title("Osama");
	$first_names = ["Osama", "Ahmed", "Sayed", "Mahmoud", "Sameh", "Gamal"];
	$last_names = ["Ameer", "Samy", "Shady", "Amr", "Mohamed", "Ibrahim"];
	echo '<pre>';
	print_r(array_map("add_title", $first_names, $last_names));
	print_r(array_map(fn($f, $l) => "Hello Mr $f $l", $first_names, $last_names));
	echo '</pre>';
	$nums = [
		1 => 3,
		6 => 1,
		3 => 2,
		4 => 8,
		5 => 4
	];
	function check_nums($n1, $n2) {
		return $n1 > 4 || $n2 > 4;
	}
	echo '<pre>';
	print_r(array_filter($nums, "check_nums", ARRAY_FILTER_USE_BOTH));
	echo '</pre>';

												Part 10 072 - Array Reduce

	function add($carry, $item) {
		echo "$carry<br>";
		echo "$item<br>";
		echo $carry + $item . "<br>";
		echo "###########<br>";
		return $carry + $item;
	}
	$nums = [10, 20, 50, 100, 10];
	echo array_reduce($nums, "add", 100);
}

															Math Functions
{
	Math Functions

    - abs(Number[Required])
    --- Absolute Value => Non Negative Value

    - mt_rand(min[Optional], max[Optional]) || rand(min[Optional], max[Optional])
    --- mt_getrandmax() => Show Largest Possible Random Value
    --- Generate Random Value Via The Mersenne Twister Random Number Generator Algorithm

    - intdiv(dividend[Required], divisor[Required])
    --- Integer Division
    --- intdiv vs /

    - fmod(dividend[Required], divisor[Required])
    --- Floating Point Remainder (Modulo)
    --- fmod vs %


	- ceil(Number[Required])
    --- Round Up To Integer

    - floor(Number[Required])
    --- Round Down To Integer

	
	- round(Number[Required], Precision[Optional], Mode[Optional])
    --- Round Up To Integer
    --- Mode
    ------ PHP_ROUND_HALF_UP
    ------ PHP_ROUND_HALF_DOWN
    ------ PHP_ROUND_HALF_EVEN
    ------ PHP_ROUND_HALF_ODD

    - ceil, floor, round => Return Double


	- sqrt(Number[Required])
    --- Square Root

    - min(array[Required]) || min(Values[Required])
    --- Find Lowest Value

    - max(array[Required]) || min(Values[Required])
    --- Find Highest Value
}
{
											073 - abs, mt_rand, intdiv, fmod

	echo abs(10) . "<br>";
	echo abs(0) . "<br>";
	echo abs(-20) . "<br>";
	echo rand() . "<br>";
	echo mt_getrandmax() . "<br>";
	echo rand(50, 60) . "<br>";
	echo 10 / 5 . "<br>";
	echo gettype(10 / 5) . "<br>";
	echo 11 / 5 . "<br>";
	echo gettype(11 / 5) . "<br>";
	echo intdiv(11, 5) . "<br>";
	echo gettype(intdiv(11, 5)) . "<br>";
	echo 11.5 % 5 . "<br>";
	echo gettype(11 % 5) . "<br>";
	echo fmod(11.5, 5) . "<br>";
	echo gettype(fmod(11.5, 5)) . "<br>";

											074 - ceil, floor

	// -1 -2 -3 -4 -5 -6
	// 1  2  3  4  5  6

	echo ceil(5.99) . "<br>";
	echo ceil(5.49) . "<br>";
	echo ceil(5.10) . "<br>";
	echo ceil(5.01) . "<br>";
	echo ceil(-5.99) . "<br>"; // -5
	echo floor(5.99) . "<br>";
	echo floor(5.49) . "<br>";
	echo floor(5.10) . "<br>";
	echo floor(5.01) . "<br>";
	echo floor(-5.99) . "<br>"; // -6

											075 - round

	echo round(5.99) . "<br>";
	echo round(5.50) . "<br>";
	echo round(5.49) . "<br>";
	echo round(5.10) . "<br>";
	echo round(5.99, 1) . "<br>"; // 6
	echo round(5.94, 1) . "<br>"; // 5.9
	echo round(5.995, 2) . "<br>"; // 6
	echo round(5.994, 1) . "<br>"; // 6
	echo round(5.994, 2) . "<br>"; // 5.99
	echo round(5.99, 0, PHP_ROUND_HALF_UP) . "<br>";
	echo round(5.49, 0, PHP_ROUND_HALF_UP) . "<br>";
	echo round(5.50, 0, PHP_ROUND_HALF_DOWN) . "<br>";
	echo round(5.50, 0, PHP_ROUND_HALF_EVEN) . "<br>";
	echo round(4.50, 0, PHP_ROUND_HALF_EVEN) . "<br>";
	echo round(5.50, 0, PHP_ROUND_HALF_ODD) . "<br>";
	echo round(4.50, 0, PHP_ROUND_HALF_ODD) . "<br>";

											076 - sqrt, min, max

	echo sqrt(16) . "<br>"; // 4
	echo sqrt(25) . "<br>"; // 5
	echo sqrt(100) . "<br>"; // 10
	echo min(10, 20, -40, -30, 50) . "<br>"; // -40
	echo min([10, 20, -40, -30, 50]) . "<br>"; // -40
	echo "<pre>";
	print_r(min([1, 3, 5], [1, 2, 6]));
	echo "</pre>";
	echo max(10, 20, -40, -30, 50) . "<br>"; // 50
	echo max([10, 20, -40, -30, 50]) . "<br>"; // 50
	echo "<pre>";
	print_r(max([1, 3, 5], [1, 2, 6]));
	echo "</pre>";
}

															Filters
{
	Filter Functions

    - filter_list()
    --- Returns A List Of All Supported Filters

    - filter_id(Filter_Name[Required])

    - filter_var(Value[Required], Filter[Optional], Options[Optional])
    --- Filters A Variable With A Specified Filter


	- filter_var(Value[Required], Filter[Optional], Options[Optional])
    --- Validate Filters

    ------ FILTER_VALIDATE_BOOL => [True, 1, Yes, On]
    ---------- Flag => FILTER_NULL_ON_FAILURE => False For [False, 0, No, Off, ""] Only

    ------ FILTER_VALIDATE_URL
    ---------- Flag => FILTER_NULL_ON_FAILURE
    ---------- Flag => FILTER_FLAG_PATH_REQUIRED
    ---------- Flag => FILTER_FLAG_QUERY_REQUIRED

    ------ FILTER_VALIDATE_IP
    ---------- Flag => FILTER_NULL_ON_FAILURE
    ---------- Flag => FILTER_FLAG_IPV4
    ---------- Flag => FILTER_FLAG_IPV6

    ------ FILTER_VALIDATE_MAC
    ---------- Flag => FILTER_NULL_ON_FAILURE


	- filter_var(Value[Required], Filter[Optional], Options[Optional])
    --- Validate Filters

    ------ FILTER_VALIDATE_EMAIL
    ---------- Flag => FILTER_NULL_ON_FAILURE

    ------ FILTER_VALIDATE_INT
    ---------- Flag => FILTER_NULL_ON_FAILURE
    ---------- Options => min_range
    ---------- Options => max_range
    ---------- Convert To Int On Success

    ------ FILTER_VALIDATE_FLOAT
    ---------- Flag => FILTER_NULL_ON_FAILURE
    ---------- Options => min_range
    ---------- Options => max_range
    ---------- Convert To Float On Success


	- filter_var(Value[Required], Filter[Optional], Options[Optional])
    --- Sanitize Filters

    ------ FILTER_SANITIZE_EMAIL
    ------ Remove All But Letters + Digits + !#$%&#038;'*+-=?^_`{|}~@.[]
    ------ Test ¥

    ------ FILTER_SANITIZE_NUMBER_INT
    --------- Remove All But Digits, +, -

    ------ FILTER_SANITIZE_NUMBER_FLOAT
    --------- Remove ALL But Digits, +, - And Optionally [.,eE]
    --------- Flags => FILTER_FLAG_ALLOW_THOUSAND
    --------- Flags => FILTER_FLAG_ALLOW_FRACTION

    ------ FILTER_SANITIZE_URL
    ------ Remove All But Letters + Digits + $-_.+!*'(),{}|\\^~[]`<>#%";/?:@&=.
    ------ Test ¥ + Space


	- filter_input(Type[Required], Value[Required], Filter[Optional], Options[Optional])
    --- INPUT_GET
    --- INPUT_POST
    --- INPUT_COOKIE
    --- INPUT_SERVER
    --- INPUT_ENV

    -- FILTER_VALIDATE_INT
    -- FILTER_NULL_ON_FAILURE
}
{
											077 - filter_list, filter_id, filter_var

	echo "<pre>";
	print_r(filter_list());
	echo "</pre>";
	echo filter_id("boolean") . "<br>"; // 258
	$val = "on"; // True || 1 || "yes" || "on"
	if (filter_var($val, FILTER_VALIDATE_BOOL)) { // Or ID "258"
		echo "This Is True";
	} else {
		echo "This Is False";
	}

											078 - filter_var Validate Filters Part 1

	$bool = "Elzero"; // True | 1 | "yes" | "on"
	var_dump(filter_var($bool, FILTER_VALIDATE_BOOL, FILTER_NULL_ON_FAILURE));
	echo "<br>";
	$url = "https://elzero.org/?id=100";
	var_dump(filter_var($url, FILTER_VALIDATE_URL,
	["flags" => FILTER_NULL_ON_FAILURE | FILTER_FLAG_PATH_REQUIRED | FILTER_FLAG_QUERY_REQUIRED]));
	echo "<br>";
	$ip = "192.168.2.1";
	var_dump(filter_var($ip, FILTER_VALIDATE_IP,
	["flags" => FILTER_NULL_ON_FAILURE | FILTER_FLAG_IPV6 | FILTER_FLAG_IPV4]));
	echo "<br>";
	$mac = "00:00:5e:00:53:af";
	var_dump(filter_var($mac, FILTER_VALIDATE_MAC, FILTER_NULL_ON_FAILURE));

											079 - filter_var Validate Filters Part 2

	$email = "o@nn.sa";
	var_dump(filter_var($email, FILTER_VALIDATE_EMAIL, FILTER_NULL_ON_FAILURE));
	echo "<br>";
	$int = "90";
	var_dump(filter_var(
		$int,
		FILTER_VALIDATE_INT,
		["flags" => FILTER_NULL_ON_FAILURE, "options" => ["min_range" => 50, "max_range" => 100]]
	));
	echo "<br>";
	$float = "90.50";
	var_dump(filter_var(
		$float,
		FILTER_VALIDATE_FLOAT,
		["flags" => FILTER_NULL_ON_FAILURE, "options" => ["min_range" => 50, "max_range" => 100]]
	));

											080 - filter_var Sanitize Filters

	$email = "o@n  ¥   n.sa";
	var_dump(filter_var($email, FILTER_SANITIZE_EMAIL));
	echo "<br>";
	$int = "100 + !@@@LHKLJKJFKLJKLJFKL  f;ldkf;lsdkfl;ksdf;lkdsf===-100";
	var_dump(filter_var($int, FILTER_SANITIZE_NUMBER_INT));
	echo "<br>";
	$float = "1,950,150.65AAASSS    sdfdsfsdfsdf@@@@41";
	var_dump(filter_var(
		$float,
		FILTER_SANITIZE_NUMBER_FLOAT,
		["flags" => FILTER_FLAG_ALLOW_THOUSAND | FILTER_FLAG_ALLOW_FRACTION]
	));
	echo "<br>";
	$url = "https://el         zer¥¥¥¥¥o.org";
	var_dump(filter_var($url, FILTER_SANITIZE_URL));
	echo "<br>";

											081 - filter_input

	// echo $_GET["num"];
	echo filter_input(INPUT_GET, "num", FILTER_SANITIZE_NUMBER_INT);
	<form action="" method="GET">
	<input type="text" name="num">
	<input type="submit" value="Send">
	</form>
}

															File System Functions
{
	File System Functions
    - disk_total_space()
    --- Get Total Space In Bytes => Then We Can Get [KB, MB, GB]
    - disk_free_space() || diskfreespace()
    --- Get Free Space In Bytes => Then We Can Get [KB, MB, GB]
    - file_exists(Path)
    --- Checks If A File Or Directory Exists
    - filesize(File_Name)
    --- Get Space In Bytes


	
	- is_dir(Name)
    --- Tells If The Filename Is A Directory
    - mkdir(Path[Required], Mode[Optional] = 0777, Recursive[Optional], Context[Optional])
    --- Permissions Is Ignored On Windows
    --- Permissions Is Octal Number Start With 0
    ------ Second Number Is => Owner Permission
    ------ Third Number Is => User Group Permission
    ------ Fourth Number Is => Others Permissions
    - rmdir(Name[Required], Context[Optional])



	- chmod(File[Required], Mode[Required])
    --- Change Mode
    - fileperms(Name)
    --- Gets File Permissions
    - clearstatcache()
    --- Clear Cache

    - You Can Change Owner chown()
    - You Can Change Group chgrp()



	- basename(Path[Required], Suffix[Optional])
    --- Returns Trailing Name Component Of Path
    - dirname(Path[Required], Levels[Optional] = 1)
    --- Returns A Parent Directory's Path
    --- Levels => Number of Parent Directories To Go Up
    - realpath(Path[Required])
    --- Returns Absolute Path
    - pathinfo(Path[Required], Flags[Optional]) => Return Array
    --- PATHINFO_DIRNAME
    --- PATHINFO_BASENAME
    --- PATHINFO_EXTENSION
    --- PATHINFO_FILENAME



	- Fopen(FileName[Required], Mode[Required], IncludePath[Optional], Context[Optional])

    --- Mode
    --- [r] For Read => Pointer At The Beginning
    --- [r+] For Read & Write => Pointer At The Beginning
    --- [w] For Write => Pointer At The Beginning + Truncate To 0 Length => Create If Not Exists
    --- [w+] For Read & Write => Pointer At The Beginning + Truncate To 0 Length => Create If Not Exists

    - fgets(File[Required], Length[Optional])
    --- Get A Line From An Open File
    --- Length => Number Of Bytes To Read || End Of Line If No Length
    - fread(File[Required], Length[Required])
    --- Get A Data From An Open File
    --- Length => Maximum Number Of Bytes To Read
    - fclose(File[Required])
    --- Closes An Open File Pointer



	- Fopen(FileName[Required], Mode[Required], IncludePath[Optional], Context[Optional])

	--- Mode

	--- [a] For Write => Pointer At The End + Create If Not Exists
	--- [a+] For Read & Write => Pointer At The End + Create If Not Exists
	--- [x] Create + Open For Write => Pointer At The Beginning
	--- [x+] Create + Open For Read & Write => Pointer At The Beginning

	- fwrite(File[Required], String[Required], Length[Optional])
	--- Write To An Open File
	--- Length => Maximum Number Of Bytes To Write



	- Fopen(FileName[Required], Mode[Required], IncludePath[Optional], Context[Optional])

	--- [c]
	------ For Write
	------ Create If Not Exists
	------ No Problem If Its Exists
	------ No Truncation
	------ Pointer At The Beginning
	--- [c+] For Read &#038; Write

	- file(File[Required], Flag[Optional], Context[Optional])
	--- Read Entire File Into Array
	- feof(File[Required])
	--- Tests For EOF On A File Pointer



	- Fopen(FileName[Required], Mode[Required], IncludePath[Optional], Context[Optional])

	- rewind(File[Required])
	--- Return The Pointer To The Beginning Of The File

	- ftell(File[Required])
	--- Return Current Position Of The Pointer

	- fseek(File[Required], Offset[Required], Whence[Optional] = SEEK_SET)
	--- Go To A Position
	--- Offset In Bytes
	--- SEEK_SET => Equal To Offset
	--- SEEK_CUR => Current + Offset
	--- SEEK_END => EOF + Offset [Accept Negative]



	- glob(Pattern[Required], Flags[Optional])
	--- Find Pathnames Matching A Pattern And Return Array

	- rename(Old[Required], New[Required]) => Move
	--- Renames A File Or Directory

	- copy(Old[Required], New[Required], Context[Optional])
	--- Copy A File

	- unlink(File[Required], Context[Optional])
	--- Delete A File

	Same Concept
	- opendir()
	- readdir()
	- closedir()



	- file_get_contents(File[Required], Include_Path[Optional], Context[Optional], Start[Optional], MaxLength(Optional))
	--- Reads Entire File Into A String

	- file_put_contents(File[Required], Data[Required], Mode[Optional], Context[Optional])
	--- Write Data To File
	--- Mode
	------ FILE_APPEND => If File Exists Append To It

	- Create If Not Exists
	- Open And Close
	- Return Number Of Bytes

	Search
	- Get Set Include Path
}
{
											082 - File System Functions Part 1 [4 Functions]

	echo round(disk_total_space("C:") / 1024 / 1024 / 1024) . "<br>";
	echo round(disk_free_space("C:") / 1024 / 1024 / 1024) . "<br>";
	var_dump(file_exists("elzero.txt"));
	echo '<br>';
	echo filesize("elzero.txt");

											083 - is_dir, mkdir, rmdir
											
	// var_dump(is_dir("Lessons"));
	echo '<br>';
	// var_dump(is_dir("elzero.txt"));
	echo '<br>';
	// mkdir("Test/Upload/Files", 0777, true);
	echo '<br>';
	// rmdir("Test");
	var_dump(file_exists("Test/Upload/Files"));

											084 - chmod, fileperms, clearstatcache

	// mkdir("Y", 0700);
	echo fileperms("Y") . "<br>";
	chmod("Y", 0644);
	clearstatcache();
	echo fileperms("Y") . "<br>";

											085 - basename, dirname, realpath, pathinfo

	echo basename(__FILE__) . "<br>";
	echo basename(__FILE__, ".php") . "<br>";

	echo dirname(__FILE__, 3) . "<br>";

	echo realpath(__FILE__) . "<br>";

	echo "<pre>";
	print_r(pathinfo(__FILE__));
	echo "</pre>";

	echo pathinfo(__FILE__)["extension"] . "<br>";
	echo pathinfo(__FILE__)["dirname"] . "<br>";

	echo pathinfo(__FILE__, PATHINFO_DIRNAME). "<br>";

											086 - fopen Part 1 – fgets, fread, fclose

	$handle = fopen("elzero.txt", "r");

	// echo fgets($handle, 4);

	echo fread($handle, 1024);

	fclose($handle);

											087 - fopen Part 2 – fwrite

	$handle = fopen("elzero.txt", "r");

	fwrite($handle, "\r\nThis Is A New Line 1", 5);
	fwrite($handle, "\r\nThis Is A New Line 2");

	fclose($handle);

											088 - fopen Part 3 – feof And Loop Training

	// echo '<pre>';
	// print_r(file("elzero.txt"));
	// echo '</pre>';

	// echo count(file("elzero.txt"));

	$handle = fopen("elzero.txt", "r");

	// $line = 1;

	// while (! feof($handle)) {

	//   echo "Line $line => " . fgets($handle) . "<br>";

	//   $line++;

	// }

	for ($i = 0; $i < count(file("elzero.txt")); $i++) {

	echo fgets($handle) . "<br>";

	}

	fclose($handle);

											089 - Ftell, Fseek, Rewind

	$handle = fopen("elzero.txt", "r");

	// echo ftell($handle) . "<br>"; // 0

	// echo fgets($handle) . "<br>";

	// echo fgets($handle) . "<br>";

	// rewind($handle);

	// echo fgets($handle) . "<br>"; // Elzero

	// echo ftell($handle) . "<br>"; // 8

	echo fgets($handle) . "<br>"; // Elzero

	fseek($handle, -6, SEEK_END);

	echo fgets($handle) . "<br>"; // zero Web School

	fclose($handle);

	echo mb_strlen("School", "8bit");

											090 - Glob, Rename, Copy, Unlink

	echo "<pre>";
	print_r(glob("Old/*.*"));
	echo "</pre>";

	// Rename => Same Place
	// rename("Old/Test.txt", "Old/Testing.txt");

	// Rename => Other Place => "Cut" || "Move"
	// rename("Old/Testing.txt", "New/Testing_2.txt");

	// Move To Other Place
	// rename("Old/Elzero.pptx", "New/Elzero.pptx");

	// Copy Without Rename
	// copy("Old/Info.docx", "New/info.docx");

	// Copy With Rename
	// copy("Old/Work.txt", "New/working.txt");

	unlink("Old/Work.rtf");

											091 - File_Get_Contents, File_Put_Contents

	echo get_include_path() . "<br>";

	// echo file_get_contents("elzero.txt", true, NULL, 4, 5);

	// echo file_get_contents("https://elzero.net");

	// print_r(file("https://elzero.net"));

	echo file_put_contents("elzero.txt", "\r\nThis Is New Line", FILE_APPEND);
}

															Date And Time Functions
{
	Date And Time Functions

    - date_default_timezone_get()

    - date_default_timezone_set(timezone[Required])

    - date_create(Date/Time[Optional], Timezone[Optional])
    --- Time: Date/Time String || Current Time If NULL
    --- Timezone: Timezone String || Current Timezone

    - timezone_open(Timezone)

    - checkdate(M, D, Y) => All Required
    --- Validate A Gregorian Date

    Will Cover Later
    - date()
    - date_format()



	- date_format()

    [Year]
    - Y => Four Digits
    - y => Two Digits

    [Month]
    - m => 01-12
    - M => Text Month => 3 Letters
    - F => Full Text
    - t => Number Of Days In This Month

    [Day]
    - d => Day of The Month 1-31
    - j => Day Without Leading Zero
    - D => Text Day => 3 Letters
    - l => Full Text
    - z => Day Of The Year 0-365
    - S => st, rd, nth Suffix For Day Of The Month

    [Time]
    - a => Small am/pm
    - A => Capital AM/PM

    [Hour]
    - g => 1-12
    - h => 01-12
    - G => 0-23
    - H => 00-23

    [Minutes, Seconds, Micro]
    - i => 00-59
    - s => 00-59
    - u => Microseconds



	- date_interval_create_from_date_string()
    - date_add()
    - date_sub()
    - date_modify()


	- time()
    --- Unix Timestamp => Seconds Since 01 Jan 1970

    - getdate()

    - date_parse()


	- date_diff()
    - strtotime(DateTime, Base)
}
{
											092 - Datetime Functions Part 1 – Five Functions

	// Get Timezone

	echo date_default_timezone_get() . "<br>";

	// Print Date And Time

	echo date("Y-m-d H:i:s") . "<br>";

	// Change Timezone

	date_default_timezone_set("Africa/Cairo");

	// Print Date And Time Again

	echo date("Y-m-d H:i:s") . "<br>";

	// Get Timezone Again

	echo date_default_timezone_get() . "<br>";

	// Create Date Object

	$d = date_create("", timezone_open("Indian/Antananarivo"));

	// Echo Date With Format

	echo date_format($d, "Y-m-d H:i:s");

	// Check Date

	echo "<br>";
	var_dump(checkdate(10, 25, 1982));
	echo "<br>";
	var_dump(checkdate(31, 02, 1982));
	echo "<br>";
	var_dump(checkdate(31, 02, 3500));
	echo "<br>";
	var_dump(checkdate(-2, 02, 1982));

											093 - Datetime Functions Part 2 – Date Format Part 1

	date_default_timezone_set("Africa/Cairo");

	// $d = date_create("2022-10-01 15:5:3");
	$d = date_create();

	// Year
	echo date_format($d, "Y") . "<br>"; // 2022
	echo date_format($d, "y") . "<br>"; // 22

	// Month
	echo date_format($d, "Y-m") . "<br>"; // 2022-11
	echo date_format($d, "Y-M") . "<br>"; // 2022-Nov
	echo date_format($d, "Y-F") . "<br>"; // 2022-November
	echo date_format($d, "t") . "<br>"; // 30 Days of the Current Month

	// Day
	echo date_format($d, "Y-m-d") . "<br>"; // 2022-11-02
	echo date_format($d, "Y-m-j") . "<br>"; // 2022-11-2
	echo date_format($d, "Y-m-D") . "<br>"; // 2022-11-Tue
	echo date_format($d, "Y-m-l") . "<br>"; // 2022-11-Tuesday
	echo date_format($d, "Y-m-l z") . "<br>"; // 2022-11-Tuesday 325 Day 325 From The Year
	echo date_format($d, "Y-m-l d j D l z") . "<br>"; // 2022-11-Tuesday 22 22 Tue Tuesday 325 All Format
	echo date_format($d, "Y-m-l S") . "<br>"; // 2022-11-Tuesday nd [st, rd, nth Suffix For Day Of The Month]

											094 - Datetime Functions Part 3 – Date Format Part 2

	date_default_timezone_set("Africa/Cairo");

	// $d = date_create("2022-10-01 15:5:3");
	$d = date_create();

	// Time
	echo date_format($d, "Y-m-d g a") . "<br>"; // 2022-11-22 2 am 1-12
	echo date_format($d, "Y-m-d g A") . "<br>"; // 2022-11-22 2 AM
	echo date_format($d, "Y-m-d h a") . "<br>"; // 2022-11-22 02 am 01-12
	echo date_format($d, "Y-m-d G") . "<br>"; // 2022-11-22 2 0-23
	echo date_format($d, "Y-m-d H") . "<br>"; // 2022-11-22 02 00-23
	echo date_format($d, "Y-m-d H/i/s") . "<br>"; // 2022-10-01 15/05/03
	echo date_format($d, "Y-m-d H/i/s u") . "<br>"; // 2022-11-22 02/11/59 715815 [u => Microseconds]

											095 - Datetime Functions Part 4 – Add, Sub, Modify

	date_default_timezone_set("Africa/Cairo");

	$d = date_create();

	// date_add($d, date_interval_create_from_date_string("1 year 2 months 5 days"));

	// date_sub($d, date_interval_create_from_date_string("1 year 2 months 5 days"));

	date_modify($d, "+20 months");

	echo date_format($d, "Y/m/d H-i-s a");

											096 - Datetime Functions Part 5 – Time, Get_Date, Parse_Date

	date_default_timezone_set("Africa/Cairo");

	echo time() . "<br>"; // 1669076761 / Seconds Count From 1/1/1970

	echo time() / 60 . " Minutes<br>";
	echo time() / 60 / 60 . " Hours<br>";
	echo time() / 60 / 60 / 24 . " Days<br>";
	echo time() / 60 / 60 / 24 / 365 . " Years<br>";

	echo "<pre>";
	print_r(getdate());
	echo "</pre>";

	$t = getdate();

	echo $t["year"] . "<br>";

	echo "<pre>";
	print_r(date_parse("1985-2-31 5:25:15 UTC"));
	echo "</pre>";

											097 - Datetime Functions Part 6 – Date_Diff, Strtotime

	date_default_timezone_set("Africa/Cairo");

	$reg = date_create("2022-01-09");
	$now = date_create("now");

	$diff = date_diff($reg, $now);

	echo '<pre>';
	print_r($diff);
	echo '</pre>';

	echo "You Are A Member For " . $diff->days . " Days<br>";

	echo date("Y-m-d H:i:s", strtotime("next Friday")) . "<br>";
	echo date("Y-m-d H:i:s", strtotime("+1 year")) . "<br>";
	echo date("Y-m-d H:i:s", strtotime("tomorrow")) . "<br>";
	echo date("Y-m-d M D H:i:s", strtotime("tomorrow", strtotime("1982-10-25"))) . "<br>";

}

															Cookies
{
	Cookies

    - Examples
    --- Popup
    --- Custom Settings
    --- Remember Me => Login

    - setcookie(Name[Required], Value, Expire, Path, Domain, Secure, HTTP_Only);
    --- Name
    --- Value
    --- Expire
    --- Path
    --- Domain
    --- Secure
    --- HTTP_Only


	- setcookie(Name[Required], Value, Expire, Path, Domain, Secure, HTTP_Only);
    --- Name
    --- Value
    --- Expire
    --- Path
    --- Domain
    --- Secure
    --- HTTP_Only

    Important
    - DO NOT Store Sensitive Information
    - Not Everything Saved To Cookies


	- Modify
    - Delete
    - Add Array


	- Practice
}
{
											098 - How To Use Cookies Part 1

	setcookie("style", "dark", time() + 60 * 60 * 24 * 30);

											099 - How To Use Cookies Part 2

	setcookie("style", "dark", time() + 60 * 60 * 24 * 30, "/");
	setcookie("popup", "done", strtotime("+1 month"));

	echo "<pre>";
	print_r($_COOKIE);
	echo "</pre>";

	echo $_COOKIE["style"];

											100 - Cookies Modify And Delete

	setcookie("style[color]", "red");
	setcookie("style[font]", "Tahoma");
	setcookie("style[layout]", "boxed");

	echo "<pre>";
	print_r($_COOKIE);
	echo "</pre>";

	if (isset($_COOKIE["style"])) {
		echo $_COOKIE["style"]["font"];
	}

											101 - Cookies Practice

	if (isset($_COOKIE["background"])) {
		echo "<style>body { background-color: " . $_COOKIE["background"] . " }</style>";
	}

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		setcookie("background", $_POST["bg-color"], strtotime("+1 year"));
		header("Location: " . $_SERVER["REQUEST_URI"]);
		exit();
	}

	?>

	<form action="" method="POST">
	<input type="color" name="bg-color">
	<input type="submit" value="Choose Color">
	</form>

}

															Sessions
{
	Sessions
    - Session Is Stored On The Server
    - Session Store Only A User Key In Cookie To Know Its You
    - Key Are Generated By PHP Engine So Its Almost Impossible To Guess
    - You Need To Add It Before Any Output


	- Advanced Information
    - Edit
    - Views Count


	- Unset And Destroy
    - Login And Logout Simulation
}
{
											102 - Session Introduction

	session_start();

	$_SESSION['name'] = "Ahmed";
	$_SESSION['id'] = 1005;

	echo '<pre>';
	print_r($_SESSION);
	echo '</pre>';

	echo '<a href="test.php">Test</a>';

											103 - Session Edit And Practice

	// session_id("lkjsdklfjksdfsdf");

	session_start();

	// echo session_id();

	$_SESSION['name'] = "Elzero";

	isset($_SESSION['views']) ? $_SESSION['views']++ : $_SESSION['views'] = 1;

	echo "Hello " . $_SESSION['name'] . " Views Count Is " . $_SESSION['views'];

	echo '<a href="about.php">About</a>';

											104 - Session Destroy And Login Simulation

	session_start();

	// $_SESSION['name'] = "Elzero";
	// session_unset();
	// session_destroy();

	if ($_SERVER["REQUEST_METHOD"] === "POST") {
		if ($_POST['user'] === "Osama") {
		$_SESSION['username'] = "Elzero";
		$_SESSION['id'] = 1005;
		}
	}

	echo '<pre>';
	print_r($_SESSION);
	echo '</pre>';

	if (isset($_SESSION['username'])) {
		echo "Welcome " . $_SESSION['username'];
	} else {

	?>

	<form action="" method="POST">
	<input type="text" name="user">
	<input type="submit" value="Login">
	</form>

	<?php } ?>

	<a href="logout.php">Logout</a>
}

															Header
{
	Header
    - Send RAW HTTP Header To Client To Manipulate Info Sent By Web Server Before Any Output
    - You Can Use To Control Cache Or Force File Download

    header(Header[Required], Replace[Optional] = True, Response_Code[Optional])



}
{
											105 - Header And Redirect

	// header("HTTP/1.0 404 Not Found");
	// header("expires: Sat, 01 Jan 2022 01:00:00");
	// header("cache-control: no-cache, must-revalidate");
	// echo "<a href='test.php'>Test</a>";
	// header("Refresh:5; url=test.php");
	header("Location: test.php");
	exit;
}




$name = "Osama";
// Nowdoc
echo <<<'Now'
	Hello PHP
	Special Characters $$$ ''' """" \\\\
	Hello My Name Is $name
Now;

echo '<ul>';
	echo "<li>" . $name . "</li>";
	echo "<li>" . $name . "</li>";
	echo "<li>" . $name . "</li>";
	echo "<li>" . $name . "</li>";
echo '</ul>';

// Heredoc
echo <<<"navlinks"
	<ul>
		<li>$name</li>
		<li>$name</li>
		<li>$name</li>
		<li>$name</li>
	</ul>
navlinks;

	echo "<pre>";
	print_r([
		"A" => "Ahmed",
		"B" => "Basem",
		"Mahmoud"
	]);
	echo "</pre>";
	
	$username = "Osama";
	echo 'Hello $username';
	echo "Hello $username";

	
										// Variable Variable
{
	$a = "osama";
	$$a = "elzero";
	$$$a = "Mahmoud";
	echo $a;
	echo "<br>";
	echo $$a;
	echo "<br>";
	echo $osama;
	echo "<br>";
	echo $$$a;
	echo "<br>";
	echo $elzero;
	echo "<br>";
	echo "Hello ${$$a}";
}

										// PHP Pre-Defined Variables
{
	// echo '<pre>';
	// print_r($_SERVER);
	// echo $_SERVER["HTTP_CONNECTION"];
	// echo '</pre>';
	echo $_GET["username"];
}

												// Constants
{
	define("DB_NAME", "elzero");
	define("MAIN_NUMBER", 5);
	echo DB_NAME;
	echo "<br>";
	echo MAIN_NUMBER * 50;
}

											// Pre-Defined Constants
{
	// Search
		// PHP Predefined Constants
		// Compile Time vs Runtime
		// List of Reserved Words
	echo php_uname();
	echo '<br>';
	echo phpversion();
	echo '<br>';
	echo __LINE__;
	echo '<br>';
	echo __FILE__;
	echo '<br>';
	echo __DIR__;
}	

										// String Operators
{
	$a = "Elzero";
	$b = "Web";
	$c = "School";
	define("ELZERO", "1");
	$x = "Elzero";
	$x .= " Web School";

	function testing() {
		return 5;
	}

	echo "$a $b $c " . ELZERO . " " . testing();
	echo "<br>";
	echo "{$a} {$b} {$c} " . ELZERO;
	echo "<br>";
	echo $a . " " . $b . " " . $c . " " . ELZERO;
	echo "<br>";
	echo $x;
}

											// Array Operators
{
	$arr1 = [1 => "A", 2 => "B"];
	$arr2 = [3 => "C", 4 => "D", 5 => 50, true];
	$arr3 = $arr1 + $arr2 + [10 => "Mahmoud", "M", 7 => "AHM"];

	echo "<pre>";
	print_r($arr3);
	echo "</pre>";
}

										// Error Control Operator
{
	$a = 10;
	$b = @$a or die("Variable Not Found");
	echo "Test $b";
	echo "<br>";

	// File
	$f = @file("osama.txt") or die("File Not Found");
	echo "<pre>";
	print_r($f);
	echo "</pre>";
	echo "<br>";

	// Include
	(@include("osama.php"))  or die("Include File Not Found");
}

												// Operator Precedence
{
	$a = 10 || false; // 1 (true) => $a = (10 || false)
	$b = 10 or false; // 10 => ($b = 10) or false
}

												Example
{
	<?php $username = "Mahmoud" ?>
	<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>PHP Page | <?php echo $username ?> </title>
		<style>
			body {
				background-color: black;
				color: white;
			}
		</style>
	</head>
	<body>
		<div>Welcome <?php echo $username ?></div>
		<div><?php echo $username ?> You Scored 1000 Points</div>
		<div>
			<?php include("score.php") ?>
		</div>
	</body>
	</html>
}

									// if, Elseif, Else - Advanced Practice 
{
	if($_SERVER["REQUEST_METHOD"] === "POST") {
			// switch($_POST["lang"]){
			// 	case "ar":
			// 		echo "مرحبا " . $_POST["username"];
			// 		break;
			// 	case "en":
			// 		echo "Hello " . $_POST["username"];
			// 		break;
			// 	case "es":
			// 		echo "Hola " . $_POST["username"];
			// }

			if($_POST["lang"] == "ar") {
				header("Location: ar.php");
				exit();
			}else if ($_POST["lang"] == "en") {
				header("Location: en.php");
				exit();
			}else {
				header("Location: es.php");
				exit();
			}
		}

	<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Support</title>
	</head>
	<body>
		<form action="" method="post">
			<input type="text" name="username">
			<select name="lang">
				<option value="ar">Arabic</option>
				<option value="en">English</option>
				<option value="es">Spanish</option>
			</select>
			<input type="submit" value="Go">
		</form>
	</body>
	</html>
}

												// Alternate Syntax
{
	<?php if (10 > 10) : ?> 
		
		<!DOCTYPE html>
		<html lang="en">
		<head>
			<meta charset="UTF-8">
			<meta http-equiv="X-UA-Compatible" content="IE=edge">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<title>Document</title>
		</head>
		<body>
			<h1>If True</h1>
		</body>
		</html>

	<?php else : ?>

		<!DOCTYPE html>
		<html lang="en">
		<head>
			<meta charset="UTF-8">
			<meta http-equiv="X-UA-Compatible" content="IE=edge">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<title>Document</title>
		</head>
		<body>
			<h1>If False</h1>
		</body>
		</html>

	<?php endif; ?>
}

										// Nested If And Advanced Practice
{
	$name = "Osama";
	$is_student = true;
	$is_orphan = true;
	$country = "Egypt";
	$country_discount = 50;
	$price = 100;
	$student_discount = 10;
	$orphan_discount = 15;

	$total_discount_country_student_orphan =
		$country_discount + $student_discount + $orphan_discount;

	$total_discount_country_student =
		$country_discount + $student_discount;

	$total_discount_country_orphan =
		$country_discount + $orphan_discount;

	if ($country == "Egypt") {
		if ($is_student) {
			if($is_orphan) {
				echo "Hello $name";
				echo "<br>";
				echo "Country Discount Is: $country_discount";
				echo "<br>";
				echo "Student Discount Is: $student_discount";
				echo "<br>";
				echo "Orphan Discount Is: $orphan_discount";
				echo "<br>";
				echo "You Have Discount: $total_discount_country_student_orphan";
				echo "<br>";
				echo "The Final Price Is " . $price - $total_discount_country_student_orphan;
			}else {
				echo "Hello $name";
				echo "<br>";
				echo "Country Discount Is: $country_discount";
				echo "<br>";
				echo "Student Discount Is: $student_discount";
				echo "<br>";
				echo "You Have Discount: $total_discount_country_student";
				echo "<br>";
				echo "The Final Price Is " . $price - $total_discount_country_student;
			}
		}else if ($is_orphan) {
			echo "Hello $name";
			echo "<br>";
			echo "Country Discount Is: $country_discount";
			echo "<br>";
			echo "Orphan Discount Is: $orphan_discount";
			echo "<br>";
			echo "You Have Discount: $total_discount_country_orphan";
			echo "<br>";
			echo "The Final Price Is " . $price - $total_discount_country_orphan;
		}else {
			echo "Hello $name";
			echo "<br>";
			echo "Country Discount Is: $country_discount";
			echo "<br>";
			echo "You Have Discount: $country_discount";
			echo "<br>";
			echo "The Final Price Is " . $price - $country_discount;
		}
	}else {
		echo "Hello $name";
		echo "<br>";
		echo "No Discount";
		echo "<br>";
		echo "The Final Price Is $price";
	}
}

*/

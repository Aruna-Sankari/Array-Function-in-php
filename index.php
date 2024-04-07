<html>
<head>
<title>Array Function</title>
</head>
<body>
<h4><u>ARRAY FUNCTIONS</u></h4>
    <h5>1.ARRAY_PUSH()</h5>
    <?php
    $name = array("shiny", "rani", "raja", "abi");
    array_push($name, "priya");
    print_r($name);
    ?>

    <h5>2.ARRAY_UNSHIFT()</h5>
    <?php
    $colors = array("red", "green", "blue", "pink");
    array_unshift($colors, "violet", "yellow");
    print_r($colors);
    ?>

    <h5>3.ARRAY_POP()</h5>
    <?php
    $arr = ["TVL", "NGL", "Kadayam", "Tenkasi"];
    array_pop($arr);
    print_r($arr);
    ?>

    <h5>4.ARRAY_SHIFT()</h5>
    <?php
    $book = ["c", "c++", "Java", "PHP"];
    array_shift($book);
    print_r($book);
    ?>

    <h5>5.ARRAY_COMBINE()</h5>
    <?php
    $name = ["harish", "renu", "sara", "anu"];
    $age = [24, 36, 12, 45];
    print_r(array_combine($name, $age));
    ?>

    <h5>6.ARRAY_MERGE()</h5>
    <?php
    $name1 = ["teenu", "ram", "arjun", "maya"];
    $name2 = ["iniya", "raghu", "maha", "sneha"];
    print_r(array_merge($name1, $name2));
    ?>

    <h5>7.ARRAY_INTERSECT()</h5>
    <?php
    $name1 = ["rani", "maya", "priya", "sam"];
    $name2 = ["sam", "raja", "teenu", "priya"];
    print_r(array_intersect($name1, $name2));
    echo "<br><br>";
    print_r(array_intersect($name2, $name1));
    echo "<br><br>";
    ?>

    <?php
    $name1 = ["a" => "rani", "b" => "maya", "c" => "priya", "d" => "sam"];
    $name2 = ["e" => "rani", "f" => "maya", "g" => "teenu", "h" => "sam"];
    print_r(array_intersect($name1, $name2));
    ?>

    <h5>8.ARRAY_REVERSE() IN KEY</h5>
    <?php
    // ASSOCIATE ARRAY 
    $colors = ["a" => "red", "b" => "blue", "c" => "green", "d" => "pink"];
    print_r(array_reverse($colors));
    ?>

    <h5>9.ARRAY_DIFF()</h5>
    <?php
    $lang1 = ["C", "C++", "PHP", "CSS"];
    $lang2 = ["C", "Tally", "C++", "JAVA"];
    print_r(array_diff($lang1, $lang2));
    echo "<br><br>";
    print_r(array_diff($lang2, $lang1));
    ?>

    <h5>10.ARRAY_SLICE()</h5>
    <?php
    $name = ["anbu", "joe", "ravi", "rani"];
    print_r(array_slice($name, 2));
    echo "<br><br>";
    ?>
    <?php
    $color = ["yellow", "red", "blue", "green"];
    print_r(array_slice($color, 1, 3));
    echo "<br><br>";
    ?>
    <?php
    $book = ["Java", "C", "C++", "PHP"];
    print_r(array_slice($book, -2, 2));
    ?>

    <h5>11.ARRAY_SUM()</h5>
    <?php
    $sum = [12, 3, 4];
    print_r(array_sum($sum));
    echo "<br><br>";
    echo array_sum($sum);
    ?>

    <h5>12.ARRAY_CHANGE_KEY_CASE()</h5>
    <?php
    $name = ["Ram" => 23, "Sara" => 45, "Rani" => 78];
    print_r(array_change_key_case($name, CASE_UPPER));
    echo "<br><br>";
    print_r(array_change_key_case($name, CASE_LOWER));
    ?>

    <h5>13.ARRAY_COUNT_VALUES()</h5>
    <?php
    $book = ["c", "c++", "java", "php", "c++"];
    print_r(array_count_values($book));
    echo "<br><br>";
    ?>
    <?php
    $name = ["Ram" => 23, "Sara" => 45, "Rani" => 78, "teenu" => 23];
    print_r(array_count_values($name));
    ?>

    <h5>14.ARRAY_VALUES()</h5>
    <?php
    $list = ["sara", "tara", "maha", "iniya"];
    print_r(array_values($list));
    echo "<br><br>";
    ?>

    <?php
    $list = ["a" => "harry", "b" => "ron", "c" => "hermoine", "d" => "moana"];
    print_r(array_values($list));
    ?>

    <h5>15.IN_ARRAY()</h5>
    <?php
    $colors = ["white", "black", "red", "blue", "orange"];
    print_r(in_array("white", $colors));
    echo "<br>";
    print_r(in_array("green", $colors)); //empty
    ?>

    <h5>16.ARRAY_DIFF_KEY()</h5>
    <?php
    //It Compare only key
    $book1 = ["a" => "Java", "b" => "css", "c" => "html", "d" => "xml"];
    $book2 = ["t" => "css", "b" => "jquery", "e" => "xml", "d" => "php"];
    print_r(array_diff_key($book1, $book2));
    echo "<br><br>";
    print_r(array_diff_key($book2, $book1));
    ?>

    <h5>17.ARRAY_DIFF_ASSOC()</h5>
    <?php
    $book1 = ["a" => "Java", "b" => "css", "c" => "html", "d" => "xml", "e" => "php"];
    $book2 = ["a" => "Java", "t" => "css", "c" => "html", "d" => "xml", "e" => "jquery"];
    print_r(array_diff_assoc($book1, $book2));
    echo "<br><br>";
    print_r(array_diff_assoc($book2, $book1));
    ?>

    <h5>18.ARRAY_PAD()</h5>
    <?php
    $name = ["ravi", "durga", "navina", "priya"];
    print_r(array_pad($name, 5, "ram"));
    ?>

    <h5>19.ARRAY_FILL_KEY()</h5>
    <?php
    $book = array("a", "b", "c");
    $res = array_fill_keys($book, "arun");
    print_r($res);
    ?>

    <h5>20.ARRAY_FILL()</h5>
    <?php
    print_r(array_fill(3, 5, "nandhu"));
    ?>

    <h5>21.ARRAY_INTERSECT_KEY()</h5>
    <?php
    $name1 = array("a" => "yuva", "b" => "raji", "c" => "kumar");
    $name2 = array("a" => "arun", "e" => "subu", "c" => "sneha");
    print_r(array_intersect_key($name1, $name2));
    echo "<br><br>";
    print_r(array_intersect_key($name2, $name1));
    ?>

    <h5>22.ARRAY_MULTISORT()</h5>
    <?php
    $name1 = array("tiya", "yuva", "valli", "jeffi");
    $name2 = array("riya", "sam", "banu", "arun");
    print_r(array_multisort($name1, $name2));
    echo "<br><br>";
    print_r($name1);
    echo "<br><br>";
    print_r($name2);
    ?>

    <h5>23.ARRAY_PRODUCT()</h5>
    <?php
    $a = [4, 5];
    print_r(array_product($a));
    echo "<br><br>";
    echo "The Product of 2 No is :" . array_product($a);
    ?>

    <h5>24.ARRAY_UNIQUE()</h5>
    <?php
    $a = ["c", "c++", "php", "php", "html", "c",];
    print_r(array_unique($a));
    ?>

    <h5>25.ARRAY_KEY_EXISTS()</h5>
    <?php
    $name = ["a" => "abi", "b" => "yuva", "c" => "riya"];
    print_r(array_key_exists("b", $name));
    echo "<br>";
    print_r(array_key_exists("d", $name));
    ?>

    <h5>26.ARRAY_SEARCH()</h5>
    <?php
    $name = ["a" => "arun", "b" => "sara", "c" => "tiya"];
    print_r(array_search("arun", $name));
    ?>

    <h5>27.ARRAY_MAP()</h5>
    <?php
    $num = [1, 2, 3, 4];
    function square($n)
    {
        return $n * $n;
    }
    $squarednumbers = array_map("square", $num);
    print_r($squarednumbers);
    echo "<br><br>";
    ?>
    <?php
    $a = ["arun", "subi", "priya", "abi"];
    function upper($b)
    {
        return strtoupper($b);
    }
    $c = array_map("upper", $a);
    print_r($c);
    ?>
    <h5>28.ARRAY_FILTER()</h5>
    <?php
    $a = [2, 5, 8, 10, 14, 27];
    $b = array_filter($a, function ($c) {
        return $c % 2 === 0;
    });
    print_r($b);
    echo "<br><br>";
    ?>
    <?php
    $a = [2, 5, 19, 11, 18, 27];
    $b = array_filter($a, function ($c) {
        return $c % 2 !== 0;
    });
    print_r($b);
    echo "<br><br>";
    ?>
    <?php
    $word1 = ["dog", "cat", "elephant", "fish", "parrot"];
    $word2 = array_filter($word1, function ($word3) {
        return strlen($word3) > 3;
    });
    print_r($word2);
    ?>

    <h5>29.FLIPPING KEYS IN INDEXED ARRAY</h5>
    <?php
    $names[25] = "Ram";
    $names[34] = "Joe";
    $names[44] = "Ravi";
    echo "<pre>";
    print_r($names);
    echo "</pre>";
    $conv = array_flip($names);
    print_r($conv);
    ?>

    <h4><u>ADDITIONAL FUNCTION IN ARRAY </u></h4>
    <h5>1.UNSET()</h5>
    <?php
    $name = ["ram", "sara", "maha", "arun"];
    unset($name[2]);
    print_r($name);
    ?>

    <h5>2.IMPLODE</h5>
    <?php
    $a = [" ram ", " tom ", " sam "];
    $b = implode('and', $a);
    echo $b . "<br><br>";
    print_r($b);
    echo "<br><br>";
    ?>

    <?php
    $c = [" arun ", " tiya ", " selvi "];
    $d = implode("@", $c);
    echo $d;
    ?>

    <h5>3.EXPLODE</h5>
    <?php
    $book = "c,c++,php,html";
    $books = explode(",", $book);
    print_r($books);
    echo "<br><br>";
    foreach ($books as $x) {
        echo "Name is :$x <br>";
    }
    ?>

    <h5>4.SORT</h5>
    <?php
    $name = ["sam", "ram", "tara", "abi"];
    sort($name);
    print_r($name);
    ?>

    <h5>5.RSORT</h5>
    <?php
    $colors = ["blue", "red", "green", "pink"];
    rsort($colors);
    print_r($colors);
    ?>

    <h5>6.LIST()</h5>
    <?php
    $book = ["C", "C++", "PHP", "HTML"];
    list($a, $b, $c, $d) = $book;
    print_r($book);
    echo "<br><br>";
    echo "we learned $a,$b,$c and $d";
    ?>

    <h5>7.MAX()</h5>
    <?php
    $a = [123, 967, 3, 12, 78];
    echo "Maximum No is :" . max($a) . "<br><br>";
    print_r(max($a));
    ?>

    <h5>8.MIN()</h5>
    <?php
    $b = [190, 2, 0, 482, 37, 3300];
    echo "Minimum No is :" . min($b) . "<br><br>";
    print_r(min($b));
    ?>

    <h5>9.SIZEOF()</h5>
    <?php
    $name = ["jeni", "iniya", "devi", "priya"];
    echo sizeof($name) . "<br><br>";
    print_r(sizeof($name));
    ?>

    <h5>10.SHUFFLE()</h5>
    <?php
    $book = ["c", "c++", "php", "html", "css"];
    shuffle($book);
    print_r($book);
    ?>

    <h5>11.RANGE()</h5>
    <?php
    $array = range(1, 20);
    print_r($array);
    ?>

    <h5>12.ASORT()</h5>
    <?php
    // Associate Array in values(Ascending Order)
    $colors = ["a" => "pink", "b" => "yellow", "c" => "blue", "d" => "red"];
    asort($colors);
    print_r($colors);
    ?>

    <h5>13.ARSORT()</h5>
    <?php
    // Associate Array in values(Descending Order)
    $list = ["a" => "pen", "b" => "eraser", "c" => "note", "d" => "sharpener"];
    arsort($list);
    print_r($list);
    ?>

    <h5>14.KSORT()</h5>
    <?php
    // Associate Array in Keys(Ascending Order)
    $book = ["e" => "c", "d" => "c++", "a" => "html", "f" => "php"];
    ksort($book);
    print_r($book);
    ?>

    <h5>15.KRSORT()</h5>
    <?php
    $colors = ["5" => "skyblue", "6" => "pink", "1" => "red", "3" => "green"];
    krsort($colors);
    print_r($colors);
    ?>
	</body>
	</html>
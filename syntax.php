<!----------------------------------------Basic PHP Syntax------------------------------------------>

<?php
//    echo "<html>";
//        echo "<head>";
//            echo "<title>";
//                echo "Home";
//            echo "</title>";
//        echo "</head>";
//        echo "<body>";
//            echo "<h1>This is Heading. </h1>";
//            echo "<p>This is Paragraph. </p>";
//        echo "</body>";
//    echo "</html>";
?>

<!---------------------------------------------------------------------------------->

<!--<html>-->
<!--    <head>-->
<!--        <title>--><?php //echo "Home"; ?><!--</title>-->
<!--    </head>-->
<!--    <body>-->
<!--        <h1>--><?php //echo "This is Heading."; ?><!--</h1>-->
<!--        <p>--><?php //echo "This is Paragraph."; ?><!--</p>-->
<!---->
<!--        <input type="text" value="--><?php //echo "Hello World"; ?><!--"/>-->
<!--    </body>-->
<!--</html>-->

<!----------------------------------------Basic PHP Variable------------------------------------------>

<?php

// 3 major rules for creating variable
    /*
     * Start with $ sign
     * A-Z, a-z, 0-9, _
     * No number in first
     */
// 3 standard rules for creating variable
    /*
     * small letter
     * meaning full
     * readable
     */

    //Example:
        //major rules       standard rules
        /*
         $NAME;             $number;
         $name;             $firstName; most-usefull;
         $NaMe;             $first_name;
         $_9name;
         $name9;
         */
//
//    $firstName = "Rakib";
//    $lastName = "Hossain";
//    echo $firstName.' '.$lastName;

//    $name = "Rakib";

?>

<!----------------------------------------Basic PHP Operator------------------------------------------>

<?php

    /*
     * Arithmatic Operator
        *  Binary (+, -, *, /, %)
        *  Unary (++, --, (-))
     * Assignment Operator
        * =, +=, -=, *=, /=, .=
     * Conditional Operator
        * >, >=, <, <=, ==, !=, ===, !==
     * Logical Operator
        * &&, ||, !
     */


//    $x=10;
//    $y=20;
//    echo ++$x;
//    echo '<br/>';
//    echo $x--;
//    echo '<br/>';
//    echo $x;
//    echo '<br/>';
//    echo $x.=$y;

?>

<!----------------------------------------Basic PHP Statement------------------------------------------>

<?php
    //Statement
        /*
         * Single line Statement
         * Conditional Statement
            * If
            * If else
            * If else if
            * switch
         * Repeated Statement
            * For
            * While
            * Do while
            * Foreach
            */
//
//    $x=10;
//    $y=20;
//    if ($x>$y){
//        $z=$x+$y;
//        echo $z;
//    }
?>

<!----------------------------------------Basic PHP Function------------------------------------------>

<?php
    function demo (){
        echo "hello world";
    }
    demo();









<?php

$obj = new main();

class main
{

public function __construct()
{
  echo "<u><h1 style=text-align:center;>PHP Basics Practice - Week 4 </h1></u>"."<br>";
  $date =  date('Y-m-d', time());
  echo "The value of \$date: ".$date."<br>";

  $tar = "2017/05/24";
  echo "The value of \$tar: ".$tar."<br>";

  $year = array("2012", "396", "300","2000", "1100", "1089");
  echo "The value of \$year: ";
  print_r($year);
  echo "<br>"."<br>";

  functions::replace_char($date); 
  functions::compare_strings($date,$tar);
  functions::find_position(str_replace("-","/",$date));
  functions::string_count($date);
  functions::string_length($date);
  functions::ascii_value($date);
  functions::last_char_print($date);
  functions::separator(str_replace("-","/",$date));
  functions::leap_year($year);
}
}
class functions

{       //replacing a specific character with another character
        public function replace_char($date)
        {
          echo "<h2>2. Replacing “-“ in $date with “/“ </h2>";
          echo "New date format: " . str_replace("-","/",$date);
          echo "<br>";
          echo "<hr>";
        }

        //comparing two strings
        public function compare_strings($date,$tar)
        {
          echo "<h2>3. Comparing $date with $tar using if-elseif statement </h2>";
          $result = strcmp($date,$tar);

          if($result>0)
            echo "the future";
            else if($result<0)
              echo "the past";
            else
              echo "Oops";
  
        echo "<br>";
        echo "<hr>";
        }
       
       //find certain positions in a string
       public function find_position($date)
       {
         echo "<h2>4. Printing out all positions of “/“ in $date </h2>";  
         
         for($i=0; $i<substr_count($date,"/");$i++)
         {
          $t=$t+1;
          $t=stripos($date,"/",$t);
          echo "Position of / is: ". $t." ";
          echo "<br>";
         }
         echo "<hr>";
       }
        
        //counting the number of words in a string
        public function string_count($date)
        {
          echo "<h2>5. Counting the numbers of words in $date </h2>";
        
          $strcount=str_word_count($date);
          echo "Number of words: " . $strcount;
          echo "<br>";
          echo "<hr>";
        }

        //returning the string length
        public function string_length($date)
        {
          echo "<h2>6. Returning the length of a string </h2>";
          $a=strlen($date);
          echo "Length of the string is: " . $a;
          echo "<br>";
          echo "<hr>";
        }
        
        //finding ascii value
        public function ascii_value($date)
        {
          echo "<h2>7. Returning the ASCII value of the first character of a string </h2>";
          echo "Ascii value of the first character is " . ord($date);
          echo "<br>";
          echo "<hr>";
        }
        
        //printing last two characters in a string
        public function last_char_print($date)
        {
          echo "<h2>8. Returning the last two characters in $date </h2>";
          echo "Last two characters are: ";
          $array=str_split($date);
          $b=count($array);
          for($i=0;$i<2;$i++)
          {
            $b=$b-1;
            echo $array[$b];
            echo " ";
          }
          echo "<br>";
          echo "<hr>";
        }
        
        //breaking date into an array
        public function separator($date)
        {
          echo "<h2>9. Breaking $date into an array and setting “separator” parameter as “/“ </h2>"; 	
          echo "The separated date is: ";
          $array1=(explode("/",($date)));
          $c=count($array1);
          for($i=0;$i<$c;$i++)
          {
            echo $array1[$i]." ";
          }
          echo "<br>";
          echo "<hr>";
        }

        //finding leap year
        public function leap_year($year)
        {
          echo "<h2>10. Identifying whether each year is a leap year </h2>";
          foreach($year as $value)
          {
            for($i=0;$i<1;$i++)
            {
              switch(value)
              {
                case(($value%4)==0 and ($value%100)!=0 or ($value%400)==0);
                echo $value." = ". "True"."<br>"."<br>";
                break;
                default:
                echo $value." = "."False"."<br>"."<br>";
              }
            }
          }
        }

}
?>

<?php
// echo "This is our array page";
// Associative arrays in php
//  an assiciative array is used naed keys rather than numeric indices o store and access
// the values.
// these are also called indexed arrays


// $color = array('sam' => 'blue' , 'shashi' => 'green' , 'anudp' => 'red');

//    echo $color['sam'];
//    echo "<br>";
//    echo $color['shashi'];
//    echo "<br>";
//    echo $color['anudp'];

// foreach ($color as $key => $value){
//     echo "<br> Fav color of $key is $value";
// };

// multi-dimensional array
// 2 dimensional array or 2d

$multidimen = array(array(2,5,7,8),
            array (1,2,3,1),
            array(4,5,6,7)

);
for ($i=0; $i<count($multidimen); $i++){
    for ($j=0; $j<count($multidimen [$i]); $j++){
        echo $multidimen[$i][$j];
    }
   
    echo "<br>";
}


?>

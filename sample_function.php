<?php
function my_function($a, $b=10, $c=100) {
    echo "$a, $b, $c";
}
?>
 
<?php
my_function(1); // 1, 10, 100 출력
my_function(1, 2); // 1, 2, 100 출력
my_function(1, 2, 3); // 1, 2, 3 출력



//출처: http://csslab.tistory.com/24?category=715546 [learning DEV :D ]
?>



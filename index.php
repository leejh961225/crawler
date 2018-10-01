<?PHP

include_once 'Snoopy-2.0.0.tar.gz/Snoopy.class.php';
$snoopy = new snoopy;
$snoopy->fetch("http://stock.daum.net/item/main.daum?code=002200");
$o = "";
$txt = $snoopy->results;
$rex = "/\<em class=\"curPrice.+\"\>(.*)\<\/em\>/";
preg_match_all($rex,$txt,$o);
print_r($o[0][0]);


//Reference:  http://investor-js.blogspot.com/2013/07/php.html https://opentutorials.org/module/6/5141


?>

<?php
/* 
* INPUT : $crawl_to = "your desired website"
*/
$info = array();
function get_links($url){
    $i = 0;
    $stack = array();
    if(file_get_contents($url))
        $input = @file_get_contents($url);
    else
        die("Invalid $url, I => $i");
    $rgexp = "<a\s[^>]*href=(\"??)([^\" >]*?)\\1[^>]*>(.*)<\/a>";
    preg_match_all("/$rgexp/siU", $input, $matches);
    //print_r($matches[2]);
    $base_url = parse_url($url, PHP_URL_HOST);
    $l = $matches[2];
    foreach($l as $link){
        if(strpos($link, "#")){
            $link = substr($link, 0, strpos($link, "#"));
        }
        
        if(substr($link,0,1)=="."){
            $link = substr($link,1);
        }
        if(substr($link,0,7)=="http://"){
            $link=$link;
        }else if(substr($link,0,8)=="https://"){
            $link=$link;
        }else if(substr($link,0,2)=="//"){
            $link=substr($link,2);
        }else if(substr($link,0,1)=="#"){
            $link=$url;
        }else if(substr($link,0,7)=="mailto:"){
            $link="[".$link."]";
        }else{
            if(substr($link,0,1)!="/"){
            $link=$base_url."/".$link;
            }else{
                $link=$base_url.$link;
            }
        }
        $link = trim($link,"'");
        if(substr($link,0,8)!="https://" &&
           substr($link,0,7)!="http://" &&
           substr($link,0,1)!="["
           ){
            if(substr($link,0,8)=="https://"){
                $link = "https://".$link;
            }else{
                $link = "http://".$link;
            }
        }
        if(is_valid_url($link)){
              if(!in_array($link,$stack)){
                $stack[$i]=$link;
              $i++;
              }
        }
    }
    return $stack;
}

function is_valid_url($url){
  if (!filter_var($url, FILTER_VALIDATE_URL) === false) {
    return true;
    } else {
    return false;
    }
}

$crawl_to = "https://www.quora.com";
$info = get_links($crawl_to);
echo "Website crawled : $crawl_to upto level 2";
echo "<pre>Level = 1 Output<br><br>";
print_r($info);

$jumbo = array();
foreach($info as $key => $val){
  $jumbo[$key] = get_links($val);
  
}
echo "<pre>Level = 2 Output<br>";
print_r($jumbo);

?>

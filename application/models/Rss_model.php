<?php
//rss_model.php

class Rss_model extends CI_Model {
public function get_rss($slug = FALSE)
{

  if($slug == FALSE){
            $request = "https://news.google.com/news?cf=all&hl=en&pz=1&ned=us&output=rss";
            $response = file_get_contents($request);
            $xml = simplexml_load_string($response);
            return $xml;
        }
        else{
      switch($slug)
		 {
case "science":
  
	$url="https://news.google.com/news?pz=1&cf=all&ned=us&hl=en&topic=snc&output=rss";
	$more= '<a href="https://news.google.com/news/section?pz=1&cf=all&ned=us&topic=snc" target="_blank">More Science News</a>';
	
	break;

case "tech":

	$url="https://news.google.com/news?pz=1&cf=all&ned=us&hl=en&topic=tc&output=rss";
	$more= '<a href="https://news.google.com/news/section?pz=1&cf=all&ned=us&topic=tc" target="_blank">More Technology News</a>';
	break;

case "business":
	$url= "https://news.google.com/news?pz=1&cf=all&ned=us&hl=en&topic=b&output=rss";
	$more='<a href="https://news.google.com/news/section?pz=1&cf=all&ned=us&topic=b&siidp=c730a0dcdc133732f98d40f5aa327ad5fcea&ict=ln" target="_blank">More Business News</a>';
	break;

default: $url= "https://news.google.com/news?pz=1&cf=all&ned=us&hl=en&topic=snc&output=rss";
		 }

$request= $url;
$response= file_get_contents($request);
$xml = simplexml_load_string($response);
return $xml;
}//end else
}//end get_rss
}//end Rss_model
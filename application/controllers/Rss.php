<?php
//rss.php

class Rss extends CI_Controller {


       public function index()
{
        //$data['news'] = $this->news_model->get_news();
        //$data['title'] = 'News archive';

        //$this->load->view('templates/header', $data);
       //$this->load->view('news/index', $data);
        //$this->load->view('templates/footer');
		 //$request = "http://rss.news.yahoo.com/rss/software";
		 $request = "https://news.google.com/news?pz=1&cf=all&ned=us&hl=en&topic=snc&output=rss";
  $response = file_get_contents($request);
  $xml = simplexml_load_string($response);
  print '<h1>' . $xml->channel->title . '</h1>';
  $count=0;
  foreach($xml->channel->item as $story)
  
  { if($count==3){
	  break;}

    echo '<a href="' . $story->link . '"></a>'; 
    echo '<p>' . $story->description . '</p><br/>';
	$count++;
  }
  
  echo '<a href="https://news.google.com/news/section?pz=1&cf=all&ned=us&topic=snc" target="_blank">More Science News</a>';
  
  $request = "https://news.google.com/news?pz=1&cf=all&ned=us&hl=en&topic=tc&output=rss";
  $response = file_get_contents($request);
  $xml = simplexml_load_string($response);
  print '<h1>' . $xml->channel->title . '</h1>';
  
  $count2=0;
  foreach($xml->channel->item as $story)
  
  { if($count2==3){
	  break;}

    echo '<a href="' . $story->link . '">' . $story->title . '</a><br />'; 
    echo '<p>' . $story->description . '</p><br/>';
	$count2++;
  }
echo '<a href="https://news.google.com/news/section?pz=1&cf=all&ned=us&topic=tc" target="_blank">More Technology News</a>';

$request = "https://news.google.com/news?pz=1&cf=all&ned=us&hl=en&topic=b&output=rss";
  $response = file_get_contents($request);
  $xml = simplexml_load_string($response);
  print '<h1>' . $xml->channel->title . '</h1>';
  
  $count3=0;
  foreach($xml->channel->item as $story)
  
  { if($count3==3){
	  break;}

    echo '<a href="' . $story->link . '">' . $story->title . '</a><br />'; 
    echo '<p>' . $story->description . '</p><br/>';
	$count3++;
  }
echo '<a href="https://news.google.com/news/section?pz=1&cf=all&ned=us&topic=b&siidp=c730a0dcdc133732f98d40f5aa327ad5fcea&ict=ln" target="_blank">More Business News</a>';
}//end index()
}//end Rss

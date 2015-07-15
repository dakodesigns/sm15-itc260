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
		 $request="https://news.google.com/news?pz=1&cf=all&ned=us&hl=en&topic=tc&output=rss";
  $response = file_get_contents($request);
  $xml = simplexml_load_string($response);
  print '<h1>' . $xml->channel->title . '</h1>';
  foreach($xml->channel->item as $story)
  {
    echo '<a href="' . $story->link . '">' . $story->title . '</a><br />'; 
    echo '<p>' . $story->description . '</p><br /><br />';
  }
}//end index()
}//end Rss

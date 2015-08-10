
<?php
//views/rss/index.php
$this->load->view($this->config->item('theme') . 'header');
?>
<h2><?php echo $title ?></h2>

 <div class="main">
<?php foreach($rss->channel->item as $rss_item): ?>

        <h3><?php echo $rss_item->title ?></h3>
        <?php echo $rss_item->description; ?>

       
           <p><a href="<?php echo $rss_item ->link ?>">View Article</a></p>
        <!--  $count=0; 
   if($count==3){
    
    break;}

    echo '<a href="' . $rss_item->link . '"></a>'; 
    echo '<p>' . $rss_item->description . '</p><br/>';
  $count++; 
  echo $more;-->

<?php endforeach ?>
<?php $this->load->view($this->config->item('theme') . 'footer'); ?>




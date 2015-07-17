<?php
//views/news/feedback.php
$this->load->view($this->config->item('theme') .'header');
?>
<h2><?php echo $title ?></h2>

<b><?=$success?></b>
<?php
$this->load->view($this->config->item('theme') .'footer');
?>
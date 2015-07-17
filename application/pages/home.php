<?php
//application/views/pages/home.php
$this->load->view($this->config->item('theme') .'header');
?>

<h1>You're on the Home page!</h1>
<?php
$this->load->view($this->config->item('theme') .'footer');
?>
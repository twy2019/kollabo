<?php
require __DIR__ . '/vendor/autoload.php';
// Change the following with your app details:
// Create your own pusher account @ https://app.pusher.com
$options = array(
   'cluster' => 'eu',
   'useTLS' => true
 );
 $pusher = new Pusher\Pusher(
   '527ac893ea3e87458248',
   '39e9b3b73a596c6865c9',
   '787872',
   $options
 );
// Check the receive message
if(isset($_POST['message']) && !empty($_POST['message'])) {
  $data = $_POST['message'];
// Return the received message
if($pusher->trigger('kollabo', 'my_event', $data)) {
echo 'success';
} else {
echo 'error';
}
}
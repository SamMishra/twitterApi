<?PHP
require_once 'twitteroauth.php';

define("CONSUMER_KEY", "Your App Consumer Key");
define("CONSUMER_SECRET", "Your App Consumer Secret Key");
define("OAUTH_TOKEN", "Your App Access Token");
define("OAUTH_SECRET", "Your App Access Token Secret");

$connection = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET, OAUTH_TOKEN, OAUTH_SECRET);

$content = $connection->get('account/verify_credentials');

$status_message = 'Attaching an image to a tweet';
$image = 'Image Path';

$status = $connection->upload('statuses/update_with_media', array('status' => $status_message, 'media[]' => file_get_contents($image)));

echo json_encode($status);

?>

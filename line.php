 <?php
  

function send_LINE($msg){
 $access_token = 'DYY4/uy5ZOgl7zCl6CnMW+JLgZg1YhQCervieMDEPz0SEeaexeoadlAePefSbxAAurvRz/YLk5+LI4PnwfSvyFVQcWGZU2ACH8HMqQ7B2MJL1bScpisAKY/gxpsLTBKCvfoRTwJ/FP2/+T99YeN7EwdB04t89/1O/w1cDnyilFU='; 

  $messages = [
        'type' => 'text',
        'text' => $msg
        //'text' => $text
      ];

      // Make a POST Request to Messaging API to reply to sender
      $url = 'https://api.line.me/v2/bot/message/push';
      $data = [

        'to' => '5e0e75dc739d900ec204195b74b3354a',
        'messages' => [$messages],
      ];
      $post = json_encode($data);
      $headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);

      $ch = curl_init($url);
      curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
      curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
      $result = curl_exec($ch);
      curl_close($ch);

      echo $result . "\r\n"; 
}

?>

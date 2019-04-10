<?php 

    require 'vendor/autoload.php';
    //use MailgunMailgun;
    
    use Mailgun\Mailgun;
    $mailgun = new Mailgun('85277e7110c04139839b5d61d136be03-2416cf28-51cc328a', new \Http\Adapter\Guzzle6\Client());
    
    # Instantiate the client.
    $mgClient = new Mailgun('85277e7110c04139839b5d61d136be03-2416cf28-51cc328a');
    //$domain = "mg.rcgc.org";
    $domain="sandbox5645166ef6274e24bc026b4194a9f269.mailgun.org";
    
    
    # Make the call to the client.
    $result = $mgClient->sendMessage($domain, array(
    	'from'    => 'Developer <a01702388@itesm.mx>',
    	'to'      => 'User <roberto140298@gmail.com>',
    	'subject' => 'Hello',
    	'text'    => 'Testing some Mailgun awesomness!'
    ));

?>
<?php
  // Ensure error reporting is enabled for debugging
  /*error_reporting(E_ALL);
  ini_set('display_errors', 1);

  // Replace with your real receiving email address
  $receiving_email_address = 'erikerciku06@gmail.com';

  // Include the PHP Email Form library
  if (file_exists($php_email_form = '../assets/vendor/php-email-form/php-email-form.php')) {
    include($php_email_form);
  } else {
    die('Unable to load the "sPHP Email Form" Library!');
  }

  // Initialize PHP_Email_Form object
  $contact = new PHP_Email_Form;
  $contact->ajax = true;

  // Set the recipient email address
  $contact->to = $receiving_email_address;

  // Validate required POST fields
  if (!isset($_POST['name']) || !isset($_POST['email']) || !isset($_POST['subject']) || !isset($_POST['message'])) {
    die('All fields are required.');
  }

  $contact->from_name = $_POST['name'];
  $contact->from_email = $_POST['email'];
  $contact->subject = $_POST['subject'];

  // Uncomment below code if you want to use SMTP to send emails. Enter your correct SMTP credentials.
  $contact->smtp = array(
    'host' => 'smtp.example.com',  // replace with your SMTP server
    'username' => 'm', // replace with your SMTP username
    'password' => '', // replace with your SMTP password
    'port' => '587',               // adjust if needed, typically 587 for TLS, 465 for SSL
    'encryption' => 'tls'          // use 'ssl' if your SMTP requires SSL encryption
  );

  // Add the message details
  $contact->add_message($_POST['name'], 'From');
  $contact->add_message($_POST['email'], 'Email');
  $contact->add_message($_POST['message'], 'Message', 10);

  // Send the email and output the result
  echo $contact->send();*/

  echo "PHP is working";
?>


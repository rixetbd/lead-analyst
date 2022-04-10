<?php
class Config
{
 const SMTP_SERVER = 'smtpout.example.net';        //Set the SMTP server
 const SMTP_USERNAME = 'smtp-username';            //Set SMTP username
 const SMTP_PASSWORD = 'smtp-password';            //Set SMTP password
 const SMTP_PORT = "587";                          //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS 
 const SET_FROM_EMAIL = 'info@example.com';        //Set Mail From Email
 const SET_FROM_NAME = 'www.example.com';          //Set Mail From NAME
}
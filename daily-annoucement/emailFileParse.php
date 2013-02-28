<?php

//see http://php.net/manual/en/ for info

$filePath = "normal-email-exampleformatting.txt"; 		//file path, format is c:\\folder\freeMoney.txt.bat
$rawDataDelimiter = "\n";					//what to use to cut one string out from another into diff. rows
								//i.e. if we see the string HELLO.I.AM.SEXY and
								//we use "." as the delimiter, the array will be
								//["HELLO","I","AM","SEXY"]	

$rawData = file_get_contents($filePath); 	//sets the var $rawData to ALL of the data in $filePath

/////	pseudocode to make into code later
///
///  also here's a listing of all of the email tags I could find that define stuff
/// X is for arbitrary info, O is for useful information, - is for mixed usefulness.
///
//X 'Delivered-To: ' //email it was delivered to
///
//- 'Recieved: ' // what IP recieved the mail and when
///
//- 'X-Received: ' //functionally the same as recieved
///
//X 'Return-Path: ' //no clue, useless though.
///
//X 'Recieved-SPF: ' //is sender legit or not
///
//X 'Authentication-Results: ' //who says they're legit
///
//X X-Google-DKIM-Signature: ' //google sig/metadata, useless
///
//X 'X-BeenThere: ' //who got it and forwarded it
///
//X 'MIME-Version: ' //duh
///
//O 'From: ' //duh
///
//X 'X-Goomoji-Body: ' //are google emoticons enabled
///
//O 'Date: ' //duh
///
//X 'Message-ID: ' //duh
///
//O 'Subject-ID: ' //subject field
///
//X 'To: ' //who it's sent to other than recipient
///
//X 'Bcc: ' //who the bcc is sent to
///
//X 'X-Gm-Message-State: ' //useless
///
//X 'X-Original-Sender: ' //who sent the first instance of the email
///
//X 'X-Original-Authentication-Results: ' //was the first email legit + results
///
//X 'Precedence: ' //useless
///
//X 'Mailing-list: ' //useless
///
//X 'List-ID: ' //useless
///
//X 'X-Google-Group-Id: ' //useless
///
//X 'List-Post: ' //useless
///
//X 'List-Help: ' //useless
///
//X 'List-Archive: ' //useless
///
//X 'List-Unsubscribe: ' //useless
///
//O 'Content-Type: ' //very useful for finding when content begins (right after this!!!)
///





//$rawDataRows = explode($rawDataDelimiter,$rawData); //format is (what to use for a new row,what string)



?>

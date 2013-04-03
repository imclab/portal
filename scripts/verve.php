<?php

/*//
/ File for getting information
/ from the verve site. Henry Post.
/ 
/ Here's a note about my stripping HTML tags:
/  |Only do it AAAAFFFTTTEEEERRRR taking out/organizing
/  |other useless tags.
/  +--
/ 
/ 
/ 
/ 
/ 
/ 
/ 
/ 
/ 
*///


$filepath = "verve-feed.txt"; 	// filepath can also be a website, needs format ending with a filename,
								// http://www.google.com/ is not acceptable while http:/www.cats.com/index.html is a-ok

function stripHTMLTags($fileName)
{
	$fileDataRaw = file_get_contents($fileName);   // turns arg to string
	
	$fileDataStripped = strip_tags($fileDataRaw); // strips all html tags (just from <tag> blah </tag> you'll get blah)
	
	return $fileDataStripped;
}


//	active code goes below, for testing primarily

echo stripHTMLTags($filepath);

?>	
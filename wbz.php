<?php

function soft_encode($txt) {
		$from = array( 'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j' );
		$to = array( '!', '@', '#', '$', '%', '^', '&', '*', '(', ')' );
		$txt = base64_encode( $txt );
		$txt = str_replace( $from, $to, $txt );
		$txt = gzcompress( $txt );
		$txt = base64_encode( $txt );
		return $txt;
	}
$cht = "<?php

//////////////////////////////////////////////////////////////
//===========================================================
// license.php
//===========================================================
// SOFTACULOUS
// Version : 1.0
// Inspired by the DESIRE to be the BEST OF ALL
// ----------------------------------------------------------
// Started by: Alons
// Date:       10th Jan 2009
// Time:       21:00 hrs
// Site:       http://www.softaculous.com/ (SOFTACULOUS)
// ----------------------------------------------------------
// Please Read the Terms of use at http://www.softaculous.com
// ----------------------------------------------------------
//===========================================================
// (c)Softaculous Inc.
//===========================================================
//////////////////////////////////////////////////////////////

if(!defined('SOFTACULOUS')){

        die('Hacking Attempt');

}

\$globals['license'] = 'WEBUZO-97791-38789-52398-44604';
\$globals['lictype'] = 1;//Type 0 or 1
\$globals['primary_ip'] = '52.141.38.97';//Primary IP
\$globals['licexpires'] = '0';//Expiry Date
\$globals['last_edit'] = '1462202611';//Last Edit Time
\$globals['fast_mirrors'][] = 'https://s1.softaculous.com/a/softaculous';//Fast Mirrors
\$globals['fast_mirrors'][] = 'https://s2.softaculous.com/a/softaculous';//Fast Mirrors
\$globals['fast_mirrors'][] = 'https://s4.softaculous.com/a/softaculous';//Fast Mirrors
\$globals['fast_mirrors'][] = 'https://s7.softaculous.com/a/softaculous';//Fast Mirrors

?>";
$xxx=soft_encode($cht);
echo $xxx;?>

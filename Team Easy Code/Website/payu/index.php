<?php

if(strcasecmp($_SERVER['REQUEST_METHOD'], 'POST') == 0){
	//Request hash
	$contentType = isset($_SERVER["CONTENT_TYPE"]) ? trim($_SERVER["CONTENT_TYPE"]) : '';	
	if(strcasecmp($contentType, 'application/json') == 0){
		$data = json_decode(file_get_contents('php://input'));
		$hash=hash('sha512', $data->key.'|'.$data->txnid.'|'.$data->amount.'|'.$data->pinfo.'|'.$data->fname.'|'.$data->email.'|||||'.$data->udf5.'||||||'.$data->salt);
		$json=array();
		$json['success'] = $hash;
    	echo json_encode($json);
	
	}
	exit(0);
}
 
function getCallbackUrl()
{
	$protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
	return $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] . 'response.php';
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

<!-- this meta viewport is required for BOLT //-->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" >
<!-- BOLT Sandbox/test //-->
<!--<script id="bolt" src="https://secure.payu.in/_payment" bolt--->
<!--color="e34524" bolt-logo="http://boltiswatching.com/wp-content/uploads/2015/09/Bolt-Logo-e14421724859591.png"></script>-->
<!-- BOLT Production/Live //-->
<script id="bolt" src="https://checkout-static.citruspay.com/bolt/run/bolt.min.js" bolt-color="e34524" bolt-logo="http://boltiswatching.com/wp-content/uploads/2015/09/Bolt-Logo-e14421724859591.png"></script>
<title>Enroll</title>
</head>
<style type="text/css">
	@media only screen and (max-width: 600px) {
    .main {
        margin-left: 3%;
        margin-top: 5%;
        padding-left: 5%;
        padding-bottom: 8%;
        background-color: rgba(1, 1, 14, 0.774);
        width: 90%;
    }
    img {
        padding-top: 10%;
        margin-left: 23%;
    }
    .dv {
        padding-bottom: 5%;
    }
    .fclass {
        margin-left: 8%;
        margin-right: 0px;
        /* background-color: azure; */
        width: fit-content;
        margin-bottom: 5%;
    }
    .text {
        margin-left: 10%;
        color: rgb(241, 241, 241);
        font-size: larger;
        float: left;
        width: 180px;
    }
    .antim {
        font-size: x-large;
        margin-top: 10%;
        margin-left: 18%
    }
    input {
        margin-left: 10%;
        width: auto;
    }
}

@media only screen and (min-width: 600px) {
    .main {
        margin-left: 17%;
        margin-top: 5%;
        padding-left: 5%;
        padding-bottom: 8%;
        background-color: rgba(1, 1, 14, 0.774);
        width: 60%;
    }
    img {
        padding-top: 10%;
        margin-left: 25%;
    }
    .dv {
        padding-bottom: 5%;
    }
    .fclass {
        margin-left: 20%;
        margin-right: 0px;
        /* background-color: azure; */
        width: fit-content;
        margin-bottom: 5%;
    }
    .text {
        color: rgb(241, 241, 241);
        font-size: larger;
        float: left;
        width: 180px;
    }
    .antim {
        font-size: x-large;
        margin-top: 10%;
        margin-left: 13%
    }
    p {
        margin-left: -8%;
    }
}

@media only screen and (min-width: 768px) {
    .main {
        margin-left: 30%;
        margin-top: 5%;
        padding-left: 5%;
        padding-bottom: 8%;
        background-color: rgba(1, 1, 14, 0.774);
        width: 35%;
    }
    img {
        padding-top: 10%;
        margin-left: 30%;
    }
    .dv {
        padding-bottom: 5%;
    }
    .fclass {
        margin-left: 8%;
        margin-right: 0px;
        /* background-color: azure; */
        width: fit-content;
        margin-bottom: 5%;
    }
    .text {
        color: rgb(241, 241, 241);
        font-size: larger;
        float: left;
        width: 180px;
    }
    .antim {
        font-size: x-large;
        margin-top: 10%;
        margin-left: 35%
    }
}

@media only screen and (min-width: 992px) {
    .main {
        margin-left: 30%;
        margin-top: 5%;
        padding-left: 5%;
        padding-bottom: 8%;
        background-color: rgba(1, 1, 14, 0.774);
        width: 35%;
    }
    img {
        padding-top: 10%;
        margin-left: 25%;
    }
    .dv {
        padding-bottom: 5%;
    }
    .fclass {
        margin-left: 1%;
        margin-right: 0px;
        /* background-color: azure; */
        width: fit-content;
        margin-bottom: 5%;
    }
    .text {
        color: rgb(241, 241, 241);
        font-size: larger;
        float: left;
        width: 180px;
    }
    .antim {
        font-size: x-large;
        margin-top: 10%;
        margin-left: 35%
    }
}

@media only screen and (min-width: 1200px) {
    .main {
        width: 35%;
        margin-left: 30%;
        margin-top: 5%;
        padding-left: 5%;
        padding-bottom: 8%;
        background-color: rgba(1, 1, 14, 0.774);
        
    }
    img {
        padding-top: 10%;
        margin-left: 30%;
    }
    .dv {
        padding-bottom: 5%;
    }
    .fclass {
        margin-left: 8%;
        margin-right: 0;
        /* background-color: azure; */
        width: fit-content;
        margin-bottom: 5%;
    }
    .text {
        color: rgb(241, 241, 241);
        font-size: larger;
        float: left;
        width: 180px;
    }
    .antim {
        font-size: x-large;
        margin-top: 10%;
        margin-left: 35%
    }
}
</style>
<body style="background-image: url('https://designshack.net/wp-content/uploads/background-textures.png');">
<div class="main">
	<div >
    	<img src="images/payumoney.png" />
    </div>
    <div>
    	
	</div>
	<div class="fclass">
	<form action="#" id="payment_form">
    <input type="hidden" id="udf5" name="udf5" value="BOLT_KIT_PHP7" />
    <input type="hidden" id="surl" name="surl" value="<?php echo getCallbackUrl(); ?>" />
    <div class="dv">
    <!--<span class="text"><label>Merchant Key:</label></span>-->
    <span><input type="hidden" id="key" name="key" placeholder="Merchant Key" value="LZEaygOA" /></span>
    </div>
    
    <div class="dv">
    <!--<span class="text"><label>Merchant Salt:</label></span>-->
    <span><input type="hidden" id="salt" name="salt"  value="xf14MMHMm7" /></span>
    </div>
    <br>
    <div class="dv">
    <span class="text"><label>Transaction/Order ID:</label></span>
    <span><input type="text" id="txnid" name="txnid" placeholder="Transaction ID" value="<?php echo  "Txn" . rand(10000,99999999)?>" disabled /></span>
    </div>
    
    <div class="dv">
    <span class="text"><label>Amount:</label></span>
    <span><input type="text" id="amount" name="amount" placeholder="Amount" value="399.00" /></span>    
    </div>
    
    <div class="dv">
    <span class="text"><label>Product Info:</label></span>
    <span><input type="text" id="pinfo" name="pinfo" placeholder="Product Info" value="ECC February batch" /></span>
    </div>
    
    <div class="dv">
    <span class="text"><label>First Name:</label></span>
    <span><input type="text" id="fname" name="fname" placeholder="First Name" value="" /></span>
    </div>
    
    <div class="dv">
    <span class="text"><label>Email ID:</label></span>
    <span><input type="text" id="email" name="email" placeholder="Email ID" value="" /></span>
    </div>
    
    <div class="dv">
    <span class="text"><label>Whatsapp Number:</label></span>
    <span><input type="text" id="mobile" name="mobile" placeholder="Mobile/Cell Number" value="" /></span>
    </div>
    
    <div class="dv">
    <!-- <span class="hidden"><label>Hash:</label></span> -->
    <span><input type="hidden" id="hash" name="hash" placeholder="Hash" value="" /></span>
    </div>
    <p style="color:white;"><b>*Please take a screen shot or note the transaction id.<br>You will need it for next steps</p>
    
    <div><input class ="antim" type="submit" value="Pay Now" onclick="launchBOLT(); return false;" /></div>
	</form>
	</div>
	
</div>
<script type="text/javascript"><!--
$('#payment_form').bind('keyup blur', function(){
	$.ajax({
          url: 'index.php',
          type: 'post',
          data: JSON.stringify({ 
            key: $('#key').val(),
			salt: $('#salt').val(),
			txnid: $('#txnid').val(),
			amount: $('#amount').val(),
		    pinfo: $('#pinfo').val(),
            fname: $('#fname').val(),
			email: $('#email').val(),
			mobile: $('#mobile').val(),
			udf5: $('#udf5').val()
          }),
		  contentType: "application/json",
          dataType: 'json',
          success: function(json) {
            if (json['error']) {
			 $('#alertinfo').html('<i class="fa fa-info-circle"></i>'+json['error']);
            }
			else if (json['success']) {	
				$('#hash').val(json['success']);
            }
          }
        }); 
});
//-->
</script>
<script type="text/javascript"><!--
function launchBOLT()
{
	bolt.launch({
	key: $('#key').val(),
	txnid: $('#txnid').val(), 
	hash: $('#hash').val(),
	amount: $('#amount').val(),
	firstname: $('#fname').val(),
	email: $('#email').val(),
	phone: $('#mobile').val(),
	productinfo: $('#pinfo').val(),
	udf5: $('#udf5').val(),
	surl : $('#surl').val(),
	furl: $('#surl').val(),
	mode: 'dropout'	
},{ responseHandler: function(BOLT){
	console.log( BOLT.response.txnStatus );		
	if(BOLT.response.txnStatus != 'CANCEL')
	{
		//Salt is passd here for demo purpose only. For practical use keep salt at server side only.
		var fr = '<form action=\"'+$('#surl').val()+'\" method=\"post\">' +
		'<input type=\"hidden\" name=\"key\" value=\"'+BOLT.response.key+'\" />' +
		'<input type=\"hidden\" name=\"salt\" value=\"'+$('#salt').val()+'\" />' +
		'<input type=\"hidden\" name=\"txnid\" value=\"'+BOLT.response.txnid+'\" />' +
		'<input type=\"hidden\" name=\"amount\" value=\"'+BOLT.response.amount+'\" />' +
		'<input type=\"hidden\" name=\"productinfo\" value=\"'+BOLT.response.productinfo+'\" />' +
		'<input type=\"hidden\" name=\"firstname\" value=\"'+BOLT.response.firstname+'\" />' +
		'<input type=\"hidden\" name=\"email\" value=\"'+BOLT.response.email+'\" />' +
		'<input type=\"hidden\" name=\"udf5\" value=\"'+BOLT.response.udf5+'\" />' +
		'<input type=\"hidden\" name=\"mihpayid\" value=\"'+BOLT.response.mihpayid+'\" />' +
		'<input type=\"hidden\" name=\"status\" value=\"'+BOLT.response.status+'\" />' +
		'<input type=\"hidden\" name=\"hash\" value=\"'+BOLT.response.hash+'\" />' +
		'</form>';
		var form = jQuery(fr);
		jQuery('body').append(form);								
		form.submit();
	}
},
	catchException: function(BOLT){
 		alert( BOLT.message );
	}
});
}
//--
</script>	

</body>
</html>
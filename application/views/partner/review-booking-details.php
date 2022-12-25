<style>
    div.dropdown {
    position: relative;
    }

    div.dropdown > div.caption {
    background-color: #f2f2f2;
    padding: 11px 24px;
    border-radius: 3px;
    cursor: pointer;
    }
    div.dropdown > div.list {
    position: absolute;
    background-color: #f2f2f2;
    width: 100%;
    border-radius: 0 0 3px 3px;
    display: none;
    }

    div.dropdown > div.list > div.item {
    padding: 11px 24px;
    cursor: pointer;
    }

    div.dropdown > div.list > div.item.selected {
    font-weight: bold;
    }

    div.dropdown > div.caption:hover,
    div.dropdown > div.list > div.item:hover {
    background-color: rgb(83, 161, 214);
    color: #fff;
    }

    div.dropdown.open > div.caption {
    border-radius: 3px 3px 0 0;
    border-bottom: solid 1px #999;
    }

    div.dropdown.open > div.list {
    display: block;
    }
</style>


<!--Begin::Dashboard 1-->
<!--Begin::Row-->

<?php if($data['booking_id'] == '0') {?>
    <span style="color:red; font-size:16px;"><?php echo $data['message']; ?></span>
    <?php }else{ ?>
<?php
$description        = "Product Description";
$txnid              = date("YmdHis");     
$key_id             = "rzp_test_uGwyejFAwbnPY4";
$currency_code      = $data['currency_code'];            
$total              = ($data['amount']* 100); // 100 = 1 indian rupees
$amount             = $data['amount'];
$merchant_order_id  = $data['booking_id'];
$card_holder_name   = 'Ajay Kumar';
$email              = $data['emails'];
$phone              = $data['contacts'];
$name               = "The Travel Square";
?>

    <form name="razorpay-form" id="razorpay-form" action="<?php echo $data['callback_url']; ?>" method="POST">
        <input type="hidden" name="razorpay_payment_id" id="razorpay_payment_id" />
        <input type="hidden" name="merchant_order_id" id="merchant_order_id" value="<?php echo $merchant_order_id; ?>"/>
        <input type="hidden" name="merchant_trans_id" id="merchant_trans_id" value="<?php echo $txnid; ?>"/>
        <input type="hidden" name="merchant_product_info_id" id="merchant_product_info_id" value="<?php echo $description; ?>"/>
        <input type="hidden" name="merchant_surl_id" id="merchant_surl_id" value="<?php echo $data['surl']; ?>"/>
        <input type="hidden" name="merchant_furl_id" id="merchant_furl_id" value="<?php echo $data['furl']; ?>"/>
        <input type="hidden" name="card_holder_name_id" id="card_holder_name_id" value="<?php echo $card_holder_name; ?>"/>
        <input type="hidden" name="merchant_total" id="merchant_total" value="<?php echo $total; ?>"/>
        <input type="hidden" name="merchant_amount" id="merchant_amount" value="<?php echo $amount; ?>"/>
    </form>

    
       
   
        <input  id="pay-btn" type="submit" onclick="razorpaySubmit(this);" value="Pay Now" class="btn btn-primary" />

        <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
    <script>
        var options = {
            key:            "<?php echo $key_id; ?>",
            amount:         "<?php echo $total; ?>",
            name:           "<?php echo $name; ?>",
            description:    "Order # <?php echo $merchant_order_id; ?>",
            netbanking:     true,
            currency:       "<?php echo $currency_code; ?>", // INR
            prefill: {
                name:       "<?php echo $card_holder_name; ?>",
                email:      "<?php echo $email; ?>",
                contact:    "<?php echo $phone; ?>"
            },
            notes: {
                soolegal_order_id: "<?php echo $merchant_order_id; ?>",
            },
            handler: function (transaction) {
                document.getElementById('razorpay_payment_id').value = transaction.razorpay_payment_id;
                document.getElementById('razorpay-form').submit();
            },
            "modal": {
                "ondismiss": function(){
                    alert('Payment Failed');
                }
            }
        };

        var razorpay_pay_btn, instance;
        function razorpaySubmit(el) {
            $('#pay-btn').html('Loading ....');
            $("#pay-btn").attr("disabled", true);
            if(typeof Razorpay == 'undefined') {
                setTimeout(razorpaySubmit, 200);
                if(!razorpay_pay_btn && el) {
                    razorpay_pay_btn    = el;
                    el.disabled         = true;
                    el.value            = 'Please wait...';  
                }
            } else {
                if(!instance) {
                    instance = new Razorpay(options);
                    if(razorpay_pay_btn) {
                    razorpay_pay_btn.disabled   = false;
                    razorpay_pay_btn.value      = "Pay Now";
                    }
                }
                instance.open();
            }
        }  
    </script>

    <?php }?>    
    
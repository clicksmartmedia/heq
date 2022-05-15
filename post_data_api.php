<?php 

    $timezone = date_default_timezone_get();

    date_default_timezone_set($timezone);

    $capture_time = date('m/d/Y h:i', time());
    //defaul`t channel key
    $chKey = "general";

    //list of all possible keys and values
    $lpChannels = array(
        "google adwords"=> array(
            "lp_campaign_id"=> "3071",
            "lp_supplier_id"=> "5001",
            "lp_key"=> "e1pcgdzhnmj"
        ),
        "bing"=> array(
            "lp_campaign_id"=> "3072",
            "lp_supplier_id"=> "5002",
            "lp_key"=> "kqxc0poa75q"
        ),
        "mailchimp"=> array(
            "lp_campaign_id"=> "3073",
            "lp_supplier_id"=> "5003",
            "lp_key"=> "dgzigedf2gy"
        ),
        "drip"=> array(
            "lp_campaign_id"=> "3073",
            "lp_supplier_id"=> "5003",
            "lp_key"=> "dgzigedf2gy"
        ),
        "aweber"=> array(
            "lp_campaign_id"=> "3073",
            "lp_supplier_id"=> "5003",
            "lp_key"=> "dgzigedf2gy"
        ),
        "taboola"=> array(
            "lp_campaign_id"=> "3074",
            "lp_supplier_id"=> "5004",
            "lp_key"=> "x6gbv6puxgp"
        ),
        "th"=> array(
            "lp_campaign_id"=> "3075",
            "lp_supplier_id"=> "5005",
            "lp_key"=> "yqnczgmue0g"
        ),
        "csend"=> array(
            "lp_campaign_id"=> "3075",
            "lp_supplier_id"=> "5005",
            "lp_key"=> "yqnczgmue0g"
        ),
        "general"=> array(
            "lp_campaign_id"=>"5671",
            "lp_supplier_id"=>"10847",
            "lp_key"=>"x6gbg1dhy3z",
        ),
        "debt_settlement" => array(
            "lp_campaign_id"=>"2886",
            "lp_supplier_id"=>"4640",
            "lp_key"=>"ll1bklqsr6r",
        ),
        "credit_repair" => array(
            "lp_campaign_id"=>"3152",
            "lp_supplier_id"=>"5179",
            "lp_key"=>"yqnczxgie2x",
        )
    );

    if(isset($_REQUEST['utm_source'])){
        $findKey = strtolower(trim($_REQUEST['utm_source']));
        if(array_key_exists($findKey,$lpChannels)){
            $chKey = $findKey;
        }
    }
    /*
    $curIP = getIpAddress();
    $key = '348d5d11a8f9761bc88833f4f855ee4b7c14ef897e7c1806843f6b2a553eb9e7';
    $url = "http://api.ipinfodb.com/v3/ip-city/?key=$key&ip=$curIP&format=json";

        
    $d = file_get_contents($url);
    $data = json_decode($d , true);
    
    if(strlen($data['countryCode']))
    {
        $info = array(
            'ip' => $data['ipAddress'] ,
            'country_code' => $data['countryCode'] ,
            'country_name' => $data['countryName'] ,
            'region_name' => $data['regionName'] ,
            'city' => $data['cityName'] ,
            'zip_code' => $data['zipCode'] ,
            'latitude' => $data['latitude'] ,
            'longitude' => $data['longitude'] ,
            'time_zone' => $data['timeZone'] ,
        );
    }


    WORKING HITS

    lp_campaign_id:2885
    lp_supplier_id:4649
    lp_key:e1pcgjgin60
    lp_subid1:
    lp_subid2:
    ADDRESS:1764 Avenue H4
    ADD_CASH:0
    ANNUAL_VERIFIABLE_INCOME:no
    BAL_ONE:200001
    CITY:Lancaster
    CRED_GRADE:fair
    EMAIL:aviraa974145@gmail.com
    EST_VAL:250000
    FHA_BANK_FORECLOSURE:yes
    FNAME:Gregory
    LNAME:Suber
    NUM_MORTGAGE_LATES:NONE
    PRI_PHON:7155134971
    PROP_DESC:SINGLE_FAM
    PROP_ST:CA
    PROP_ZIP:93534
    SR_TOKEN:no
    XXTRUSTEDFORMCERTURL:no
    STATE:CA
    VA_STATUS:yes
    ZIP:93534
    CAPTURE_TIME:9/02/2021 07:18
    IP_ADDRESS:207.244.89.162



    ////////////////////////////////// WORKING //////////////////////////////////

    lp_campaign_id:2885
    lp_supplier_id:4649
    lp_key:e1pcgjgin60
    lp_subid1:
    lp_subid2:
    ADDRESS:1764 Avenue H4
    ADD_CASH:0
    ANNUAL_VERIFIABLE_INCOME:no
    BAL_ONE:200001
    CITY:Lancaster
    CRED_GRADE:fair
    EMAIL:johnyy974145@gmail.com
    EST_VAL:250000
    FHA_BANK_FORECLOSURE:yes
    FNAME:Gregory
    LNAME:Suber
    NUM_MORTGAGE_LATES:NONE
    PRI_PHON:7155134970
    PROP_DESC:SINGLE_FAM
    PROP_ST:CA
    PROP_ZIP:93534
    SR_TOKEN:
    XXTRUSTEDFORMCERTURL:
    STATE:CA
    VA_STATUS:yes
    ZIP:93534
    CAPTURE_TIME:9/02/2021 07:18
    IP_ADDRESS:2603:8001:1900:266f:2978:cafe:3d13:5e68
    
    $refinance = $_POST['refinance'];
    $property = 'SINGLE_FAM';
    $military = $_POST['military'];
    $income = $_POST['income'];
    $bankruptcy = 'yes';
    $mortgage = 'no';
    $cash_out = 100000;
    $unsecured_debt = 150000;
    $home_val = 225100;
    $rem_mort_bal = 0;
    $first_name = 'Socorro';
    $last_name = 'Shafer';
    $email = '3shiy0u1ru5@temporary-mail.net';
    $phone = '7155134985';
    $address = '358 Hickory Lane';
    $zipcode = '20036';
    $city = 'Washington';
    $state = 'DC';
    $creditscore = 'fair';
    $helpcredit = $_POST['helpcredit'];
    */

    $lp_campaign_id = $lpChannels[$chKey]["lp_campaign_id"];
    $lp_supplier_id = $lpChannels[$chKey]["lp_supplier_id"];
    $lp_key = $lpChannels[$chKey]["lp_key"];
    $lp_subid1 =(isset( $_POST['sid1'])) ? $_POST['sid1'] : '';
    $lp_subid2 = (isset($_POST['sid2'])) ? $_POST['sid2'] : '';

    $utm_source = (isset($_POST['utm_source'])) ? $_POST['utm_source'] : '';
    $utm_medium = (isset($_POST['utm_medium'])) ? $_POST['utm_medium'] : '';
    $utm_campaign = (isset($_POST['utm_campaign'])) ? $_POST['utm_campaign'] : '';
    $utm_content = (isset($_POST['utm_content'])) ? $_POST['utm_content'] : '';

    $refinance = $_POST['refinance'];
    $property = $_POST['property'];
    $military = $_POST['military'];
    $income = $_POST['income'];
    $bankruptcy = $_POST['bankruptcy'];
    $mortgage = $_POST['mortgage'];
    $cash_out = $_POST['cash_out'];
    $unsecured_debt = $_POST['unsecured_debt'];
    $home_val = $_POST['home_val'];
    $rem_mort_bal = $_POST['rem_mort_bal'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['street'];
    $zipcode = $_POST['zipcode'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $creditscore = $_POST['creditscore'];
    $helpcredit = $_POST['helpcredit'];
    $XXTRUSTEDFORMCERTURL = $_POST['xxTrustedFormCertUrl'];
    $leadid_token = $_POST['leadid_token'];

    // print_r($_POST);
    // $num_mortgage_lates = ($_POST['rem_mort_bal'])?$_POST['rem_mort_bal']:0;
    $bankruptcy = ($_POST['bankruptcy'])?$_POST['bankruptcy']:false;

    $IP_Address = getIpAddress();
    // $IP_Address = '207.244.89.162';

    $data_string = array (
        "lp_campaign_id"            => $lpChannels['general']['lp_campaign_id'],
        "lp_supplier_id"            => $lpChannels['general']['lp_supplier_id'],
        "lp_key"                    => $lpChannels['general']['lp_key'],
        "lp_subid1"                 => '',
        "lp_subid2"                 => '',
        "ADDRESS"                   => $address,
        "ADD_CASH"                  => preg_replace("/[^0-9]/", "", $cash_out),
        "ANNUAL_VERIFIABLE_INCOME"  => "no",
        "BAL_ONE"                   => preg_replace("/[^0-9]/", "", $unsecured_debt),
        "CITY"                      => $city,
        "CRED_GRADE"                => $creditscore,
        "EMAIL"                     => $email,
        "EST_VAL"                   => preg_replace("/[^0-9]/", "", $home_val),
        "FHA_BANK_FORECLOSURE"      => $bankruptcy,
        "FNAME"                     => $first_name,
        "LNAME"                     => $last_name,
        "NUM_MORTGAGE_LATES"        => $mortgage,
        "PRI_PHON"                  => $phone,
        "PROP_DESC"                 => $property,
        "PROP_ST"                   => $state,
        "PROP_ZIP"                  => $zipcode,
        "SR_TOKEN"                  => $leadid_token,
        "XXTRUSTEDFORMCERTURL"      => $XXTRUSTEDFORMCERTURL,
        "STATE"                     => $state,
        "VA_STATUS"                 => "no",
        "ZIP"                       => $zipcode,
        "CAPTURE_TIME"              => $capture_time,
        "IP_ADDRESS"                => $IP_Address
    );
    
    // print_r(json_encode($data_string));
    // exit();

    $data_encode = json_encode($data_string);
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://hookb.in/xYWxQQGYBpT0nNxxnPQw');
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'Content-Type: application/json'
    ));

    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data_encode);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 
    $responsePost = curl_exec($ch);
    curl_close($ch);

    // $data_encode_1 = $data_string;
    $data_encode_1 = json_encode($data_string);
    $ch_1 = curl_init();
    curl_setopt($ch_1, CURLOPT_URL, 'https://api.leadprosper.io/ingest');
    curl_setopt($ch_1, CURLOPT_HTTPHEADER, array(
        // 'Authorization: Token 9f24f4170d1c9c3de3a84e2dd23de6fd9a93d7e6',
        'Content-Type: application/json'
    ));

    curl_setopt($ch_1, CURLOPT_POST, 1);
    curl_setopt($ch_1, CURLOPT_POSTFIELDS, $data_encode_1);
    curl_setopt($ch_1, CURLOPT_RETURNTRANSFER, true);
 
    //Set CURLOPT_FOLLOWLOCATION to true to follow redirects.
    // curl_setopt($ch_1, CURLOPT_FOLLOWLOCATION, true);
    // $responsePost_1 = curl_exec($ch_1);
    curl_close($ch_1);

    // Send Lead For Debt Settlement
    $data_string_debt_settlement = array (
        "lp_campaign_id"            => $lpChannels['debt_settlement']['lp_campaign_id'],
        "lp_supplier_id"            => $lpChannels['debt_settlement']['lp_supplier_id'],
        "lp_key"                    => $lpChannels['debt_settlement']['lp_key'],
        "first_name"                => $first_name,
        "last_name"                 => $last_name,
        "state"                     => $state,
        "phone"                     => $phone,
        "email"                     => $email,
        "media_type"                => "Affiliate",
        "lead_source"               => "Web",
        "ad_source"                 => "Clicksmart",
        "DebtLoad"                  => $unsecured_debt,
        "TCPA"                      => "yes"
    );

    $data_encode_debt_settlement = json_encode($data_string_debt_settlement);

    $curl_debt_settlement = curl_init();
    curl_setopt($curl_debt_settlement, CURLOPT_URL, 'https://api.leadprosper.io/ingest');
    curl_setopt($curl_debt_settlement, CURLOPT_HTTPHEADER, array(
        'Content-Type: application/json'
    ));

    curl_setopt($curl_debt_settlement, CURLOPT_POST, 1);
    curl_setopt($curl_debt_settlement, CURLOPT_POSTFIELDS, $data_encode_debt_settlement);
    curl_setopt($curl_debt_settlement, CURLOPT_RETURNTRANSFER, true);
 
    //Set CURLOPT_FOLLOWLOCATION to true to follow redirects.
    // curl_setopt($curl_debt_settlement, CURLOPT_FOLLOWLOCATION, true);
    $response_debt_settlement = curl_exec($curl_debt_settlement);
    curl_close($curl_debt_settlement);

    // Send Lead For Credit Repair If Needs Help
    $data_string_credit_repair = array (
        "lp_campaign_id"            => $lpChannels['credit_repair']['lp_campaign_id'],
        "lp_supplier_id"            => $lpChannels['credit_repair']['lp_supplier_id'],
        "lp_key"                    => $lpChannels['credit_repair']['lp_key'],
        "f_name"                    => $first_name,
        "f_last_name"               => $last_name,
        "f_phone"                   => $phone
    );

    $data_encode_credit_repair = json_encode($data_string_credit_repair);

    $curl_credit_repair = curl_init();
    curl_setopt($curl_credit_repair, CURLOPT_URL, 'https://api.leadprosper.io/ingest');
    curl_setopt($curl_credit_repair, CURLOPT_HTTPHEADER, array(
        'Content-Type: application/json'
    ));

    curl_setopt($curl_credit_repair, CURLOPT_POST, 1);
    curl_setopt($curl_credit_repair, CURLOPT_POSTFIELDS, $data_encode_credit_repair);
    curl_setopt($curl_credit_repair, CURLOPT_RETURNTRANSFER, true);
 
    //Set CURLOPT_FOLLOWLOCATION to true to follow redirects.
    // curl_setopt($curl_credit_repair, CURLOPT_FOLLOWLOCATION, true);
    $response_credit_repair = curl_exec($curl_credit_repair);
    curl_close($curl_credit_repair);

    echo $response_credit_repair;

    function getIpAddress() {
        if (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            $ipAddresses = explode(',', $_SERVER['HTTP_X_FORWARDED_FOR']);
            return trim(end($ipAddresses));
        }
        else {
            return $_SERVER['REMOTE_ADDR'];
        }
    }

?>
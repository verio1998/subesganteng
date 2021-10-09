<?php

date_default_timezone_set('Asia/Jakarta');
/*
$tgl_sekarang=date("Y-m-d");//tanggal sekarang
$tgl_mulai="2021-10-06";// tanggal launching aplikasi
$jangka_waktu = strtotime('+5 days', strtotime($tgl_mulai));// jangka waktu + 365 hari
$tgl_exp=date("Y-m-d",$jangka_waktu);//tanggal expired
if ($tgl_sekarang >=$tgl_exp )
{
echo @color('red',"Script Expired, Hubungi Creator https://wa.me/6282176358295\n");
echo @color('green',"Script Ini Dipake Dan Dibeli Oleh oleh oleh dan oleh\n");
die;
}
else
{
echo @color('green',"Masih dalam jangka waktu, Jika Expired Hubungi Creator!!");
}
echo @color('purple',"\n~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~\n");
$timestamp = date("d-m-Y | H:i:s");
echo @color('nevy',$timestamp);
echo @color('green',"  | WA 082176358295 \n");
echo @color('yellow',"        Build By FERDY RAMADHAN\n");
echo @color('yellow',"      GOJEK CLUB NEW LENGKAP\n");
echo @color('red',"   Please Verify Your Device Fisrt ^^\n");
echo @color('purple',"~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~\n");
keygen:
$x9 = @file_get_contents("chrome");
if($x9 == ""){
echo @color('green',"Masukkan Password Device Anda : ");
$x9 = trim(fgets(STDIN));
d1("chrome", $x9);
}
echo @color('nevy',"Proses Verifikasi Device ID, Mohon Tunggu ..");
sleep(4);
$d6 = @file_get_contents("chace");
echo "\n";
$enkripsihash = $x9;
$passwordlogin  = $d6;
if (password_verify($passwordlogin, $enkripsihash)) {
    echo @color('yellow',"Berhasil Login");
    echo "\n";
}else{
$d3 = sessionId();
$d4 = str_replace("-","", $d3);
    //shell_exec("termux-vibrate");
    echo @color('red',"KODE MU SALAH JON!!!\n");
    echo @color('nevy',"Vertifikasi Handphone Anda =>  ");
    echo @color('yellow',$d4);
    echo @color('nevy'," Silahkan Hubungi Creator Untuk Verifikasi https://wa.me/6282176358295\n\n");
    @unlink("chace");
    d1("chace", $d4);
    @unlink("chrome");
    goto keygen;
    }
error_reporting(0);
*/
echo exec("clear");
echo @color('yellow',"\n~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~\n");
date_default_timezone_set('Asia/Kuala_Lumpur');
$timestamp = date("d-m-Y | H:i:s");
echo $timestamp;
echo @color('red'," -Build By.Rizal Wicaksono CUAN HUNTER JEMBER BERAKSI-");
echo @color('yellow',"\n~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~\n");
echo "\n";
echo @color('nevy',"Masukkan  PIN  Anda       : ");
$pin = trim(fgets(STDIN));
echo "\n";
echo @color('nevy',"Masukkan  Kode Reff  Anda : ");
$kodref = trim(fgets(STDIN));
echo "\n";
gaskansayang:
echo @color('nevy',"Masukkan Nomor Anda       : ");
$no = trim(fgets(STDIN));
echo "\n";
$file = "indo.txt";
if (!unlink($file)){
echo ("Error deleting $file  ");
}else{
echo "Deleted $file  ";
}
echo "\n";
$file = "klik.txt";
if (!unlink($file)){
echo ("Error deleting $file  ");
}else{
echo "Deleted $file  ";
}
echo "\n";
echo "\n";
$rand = rand(1000000,9999999);
$randd = rand(1000,9999);
$ra = rand(10,99);
$didii = "8c7e".$rand."c".$randd."8";
$dfu = "2".$randd."ba013af8d5f";
$dfii = 'aa81ebc4c1d9c8db '.$dfu.'ba013af8d5f';
$mil = round(microtime(true) * 1000);
$data = '{"phoneNumber":"'.$no.'","deviceId":"'.$didii.'"}';
$otpsmsreg = postidm("https://edtsapp.indomaretpoinku.com/login/api/open/login-sms", $data, $didii, $dfii);
$awalan = json_decode($otpsmsreg, true);
$msg=@$awalan["message"];
$id=@$awalan["data"]["id"];
echo @color('yellow',"Pesan : ");
echo @color('nevy',$msg);
echo "\n";
echo @color('yellow',"ID nya: ");
echo @color('nevy',$id);
echo "\n";
echo @color('green',"Masukkan OTP Anda : ");
$otp = trim(fgets(STDIN));
$data = '{"phoneNumber":"'.$no.'","otp":"'.$otp.'","deviceId":"'.$didii.'"}';
$verifotp = postidm("https://edtsapp.indomaretpoinku.com/login/api/open/login-verification-sms", $data, $didii, $dfii);
$keduaa = json_decode($verifotp, true);
$msg=@$keduaa["message"];
$token=@$keduaa["data"]["access_token"];
$getdata = getrequestidm("https://edtsapp.indomaretpoinku.com/customer/api/mobile/get-data-customer", $didii, $dfii, $token);
$ketiga = json_decode($getdata, true);
$msg=@$ketiga["message"];
$isnew=@$ketiga["data"]["isNewRegister"];
$idlu=@$ketiga["data"]["id"];
$memberid=@$ketiga["data"]["memberId"];
echo @color('yellow',"Pesan              : ");
echo @color('nevy',$msg);
echo "\n";
echo @color('yellow',"Apakah Member Baru : ");
echo @color('nevy',$isnew);
echo "\n";
$getdata = getrequestidm("https://edtsapp.indomaretpoinku.com/customer/api/is-whatsapp-verified", $didii, $dfii, $token);
$getdata = getrequestidm("https://edtsapp.indomaretpoinku.com/configuration/api/mobile/skip-module/tr-skip-module", $didii, $dfii, $token);
$data = '{"phoneNumber":"'.$no.'","deviceId":"'.$didii.'"}';
$pinawal = postlog("https://edtsapp.indomaretpoinku.com/login/api/open/pin/is-pin-exist", $data, $didii, $dfii, $token);
$data = '';
$pinawal = postlog("https://edtsapp.indomaretpoinku.com/customer/api/remove-isaku-token", $data, $didii, $dfii, $token);
$getdata = getrequestidm("https://edtsapp.indomaretpoinku.com/configuration/api/mobile/sy-app-version/get-version-key/ANDROID", $didii, $dfii, $token);
$data = '{"userId":'.$idlu.',"deviceType":"01","deviceId":"'.$didii.'","fcmToken":"eFTMJxsiRVeZfBmByCiq-Z:APA91bG9Bqn3kbWPazfnF4TTnDXp4VU0dT23P9h1xMGvbf0Hcy7ROGVmVzNTZOytYlbTKzw6idKizWtoaWWRBDJ2FUzBsHwSpb9Vq84zVTEEiTWkQq5KnccKaaINzQYZFfjG5ZIxCqhZ"}';
$fcm = postlog("https://edtsapp.indomaretpoinku.com/notification/api/push-notifications/fcm-registration", $data, $didii, $dfii, $token);
echo "\n";
$data = '{"pinCode":"'.$pin.'"}';
$inputpin = postlog("https://edtsapp.indomaretpoinku.com/login/api/pin/create-pin", $data, $didii, $dfii, $token);
$cekkupon = getrequestidm("https://edtsapp.indomaretpoinku.com/coupon/api/mobile/coupons?unpaged=true", $didii, $dfii, $token);
$adakah = getrequestidm("https://edtsapp.indomaretpoinku.com/coupon/api/mobile/coupons/has-new-coupon", $didii, $dfii, $token);
$data = '{"couponPromoCode":"'.$kodref.'"}';
$input = postlog("https://edtsapp.indomaretpoinku.com/coupon/api/mobile/gift/redeem", $data, $didii, $dfii, $token);
$keempat = json_decode($input, true);
$msg=@$keempat["message"];
$cnama=@$keempat["data"]["content"][0]["couponName"];
echo @color('yellow',"Pesan  : ");
echo @color('nevy',$msg);
echo "\n";
echo @color('yellow',"Status : ");
echo @color('nevy',$cnama);
echo "\n";
echo "\n";
sleep(3);
tunggudong:
$cekkupon = getrequestidm("https://edtsapp.indomaretpoinku.com/coupon/api/mobile/coupons?unpaged=true", $didii, $dfii, $token);
$ind = json_decode($cekkupon, true);
$m=@$ind["data"]["content"][0]["status"];
$g=@$ind["data"]["content"][0]["couponCode"];
$gc=@$ind["data"]["content"][0]["couponName"];
$a=@$ind["data"]["content"][1]["couponCode"];
$ac=@$ind["data"]["content"][1]["couponName"];
$b=@$ind["data"]["content"][2]["couponCode"];
$bc=@$ind["data"]["content"][2]["couponName"];
$c=@$ind["data"]["content"][3]["couponCode"];
$cc=@$ind["data"]["content"][3]["couponName"];
$dc=@$ind["data"]["content"][4]["couponCode"];
$e=@$ind["data"]["content"][4]["couponName"];
$ec=@$ind["data"]["content"][5]["couponCode"];
$f=@$ind["data"]["content"][5]["couponName"];
$fc=@$ind["data"]["content"][6]["couponName"];
$d=@$ind["data"]["content"][6]["couponCode"];
$del=@$ind["data"]["content"][7]["couponName"];
$deld=@$ind["data"]["content"][7]["couponCode"];
$semb=@$ind["data"]["content"][8]["couponName"];
$sembd=@$ind["data"]["content"][8]["couponCode"];
$luh=@$ind["data"]["content"][9]["couponName"];
$luhd=@$ind["data"]["content"][9]["couponCode"];
$las=@$ind["data"]["content"][10]["couponName"];
$lasd=@$ind["data"]["content"][10]["couponCode"];
$wolas=@$ind["data"]["content"][11]["couponName"];
$wolasd=@$ind["data"]["content"][11]["couponCode"];
$golas=@$ind["data"]["content"][12]["couponName"];
$golasd=@$ind["data"]["content"][12]["couponCode"];
$patlas=@$ind["data"]["content"][13]["couponName"];
$patlasd=@$ind["data"]["content"][13]["couponCode"];
$molas=@$ind["data"]["content"][14]["couponName"];
$molasd=@$ind["data"]["content"][14]["couponCode"];
$namlas=@$ind["data"]["content"][15]["couponName"];
$namlasd=@$ind["data"]["content"][15]["couponCode"];
echo "\n";
echo @color('yellow',"[1] $ac \n    > $a \n\n");
echo @color('green',"[2] $bc \n    > $b \n\n");
echo @color('nevy',"[3] $cc \n    > $c \n\n");
echo @color('red',"[4] $e \n    > $dc \n\n");
echo @color('blue',"[5] $f \n     > $ec \n\n");
echo @color('nevy',"[6] $fc \n    > $d \n\n");
echo @color('purple',"[7] $gc \n    > $g \n\n");
echo @color('green',"[8] $del \n    > $deld \n\n");
echo @color('yellow',"[9] $semb \n    > $sembd \n\n");
echo @color('red',"[10] $luh \n    > $luhd \n\n");
echo @color('purple',"[11] $las \n    > $lasd \n\n");
echo @color('green',"[12] $wolas \n    > $wolasd \n\n");
echo @color('yellow',"[13] $golas \n    > $golasd \n\n");
echo @color('nevy',"[14] $patlas \n    > $patlasd \n\n");
echo @color('purple',"[15] $molas \n    > $molasd \n\n");
echo @color('green',"[16] $namlas \n    > $namlasd \n\n");
if($m == "issued"){
$s = $ac;
$t = $bc;
$r = $cc;
$i = $e;
$n = $f;
$gg = $fc;
$z = $gc;
$pan = $del;
$lan = $semb;
$sepul = $luh;
$sebel = $las;
$duobel = $wolas;
$gobel = $golas;
$patbel = $patlas;
$mobel = $molas;
$nambel = $namlas;
$vv = str_replace("/","", $s);
$mm = str_replace("/","", $t);
$nn = str_replace("/","", $r);
$kk = str_replace("/","", $i);
$cc = str_replace("/","", $n);
$xx = str_replace("/","", $gg);
$ll = str_replace("/","", $z);
$aa =str_replace("\r\n","", $g);
$bisa = str_replace("/","", $pan);
$bisad = str_replace("/","", $lan);
$bisadd = str_replace("/","", $sepul);
$bisaddd = str_replace("/","", $sebel);
$bisadddd = str_replace("/","", $duobel);
$bisaddddd = str_replace("/","", $gobel);
$bisadddddd = str_replace("/","", $patbel);
$bisaddddddd = str_replace("/","", $mobel);
$bisadddddddd = str_replace("/","", $nambel);
save (''.$ll.'.txt', $aa);
save (''.$vv.'.txt', $a);
save (''.$mm.'.txt', $b);
save (''.$nn.'.txt', $c);
save (''.$kk.'.txt', $dc);
save (''.$cc.'.txt', $ec);
save (''.$xx.'.txt', $d);
save (''.$bisa.'.txt', $deld);
save (''.$bisad.'.txt', $sembd);
save (''.$bisadd.'.txt', $luhd);
save (''.$bisaddd.'.txt', $lasd);
save (''.$bisadddd.'.txt', $wolasd);
save (''.$bisaddddd.'.txt', $golasd);
save (''.$bisadddddd.'.txt', $patlasd);
save (''.$bisaddddddd.'.txt', $molasd);
save (''.$bisadddddddd.'.txt', $namlasd);
sleep(2);
echo "\n";
}
else if($vv == ''){
	echo @color('red'," Kupon Belum Masuk \n");
	echo @color('red',"Mencoba Ambil Kupon Lagi \n\n");
	echo @color('red',"Tunggu Sejenak \n\n");
	goto tunggudong;
	}


    echo @color('red',"\n~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~\n");
    $timestamp = date("d-m-Y | H:i:s");
    echo @color('green', $timestamp);
    echo @color('nevy'," |    Auto Regist Klik + Tempel Kupon\n");
    echo @color('green',".           BISMILLAH BERSYUKUR NIKMATNYA \n");
    echo @color('nevy',"                    CUAN HUNTER JEMBER \n");
    echo @color('nevy',"                       BERAKSI.  \n");
    echo @color('nevy',"                        AMAN ");
    echo @color('red',"\n~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~\n");
    echo "\n";
    echo @color('yellow',"Notice!!! \n");
    echo @color('nevy',"Harap Dibaca Sebelum Bertanya!!! \n\n");
    echo @color('nevy',"- Jika ingin Berhenti Pencet Ctrl Dan Huruf C \n");
    $t6 = explode("\n",@file_get_contents("Diskon Rp 25.000 Klik Indomaret.txt"));
    $ac = count($t6)-1;
    $kupo=$t6;
    $kpnn = $kupo[0];
    $kpnnn = str_replace("\r","", $kpnn);
    $kpn = $kpnnn;
    echo "\n";
    echo @color('yellow',"Nomor Anda         : ");
    echo $no;
    echo "\n";
    echo @color('green',"Kupon Anda         : ");
    echo $kpn;
    $rand = rand(1000,9999);
    $ran = rand(1000000,9999999);
    $ra = rand(100000,999999);
    okedeh:
$pass = $pin;
$publicReg = getRequestt("https://api.klikindomaret.com/api/Customer/GetByMobilePhone?mobilePhone=".$no);
$sotp = getRequestt("https://api.klikindomaret.com/api/PreRegistration/SendOTPSMS?NoHP=".$no);
$ot = rand(1000000,9999999);
echo @color('green',"\nMasukkan OTP Anda  : ");
$otp = trim(fgets(STDIN));
$valid = getRequestt("https://api.klikindomaret.com/api/PreRegistration/ValidationOTPCodeSMS?NoHP=".$no."&otpCode=".$otp);
$inde = json_decode($valid, true);
$to=@$inde[0]["Message"];
echo @color('yellow',"Pesan : ".$to);
echo "\n";
if($to == "Kode OTP salah."){
goto okedeh;
}
yesah:
echo "\n";
$tok = "740f".$rand."bebcf74f9b7c25d48e".$ran."f6aa01da5ddb".$ra."c7eaf61bb78ad";
$appv = getRequestt("https://api.klikindomaret.com/api/MobileAppsVersion/getDevice_Token?device_token=".$tok);
$index = json_decode($appv, true);
$tokee=@$index["Message"];
$name = name();
$email = strtolower(str_replace(" ", "", $name) . mt_rand(100,999999) . "@gmail.com");
$ra = rand(0,225);
$ras = rand(0,225);
$raa = rand(0,225);
$rab = rand(0,225);
$ip = "$ra.$ras.$raa.$rab";
sleep(2);
$data = '{"FName":"'.$name.'","LName":"","Email":null,"KonfirmasiEmail":"","Gender":"Wanita","Mobile":"'.$no.'","Password":"'.$pass.'","ConfirmPassword":"'.$pass.'","IsConfirmed":true,"district":{"id":2483,"name":"Gunung Sahari Selatan"},"isShowPassword":false,"isShowPasswordConfirm":false,"errorMessageEmail":null,"errorMessageConfirmPassword":null,"ID":"00000000-0000-0000-0000-000000000000","IPAddress":"'.$ip.'","IsSubscribed":0,"IsNewsLetterSubscriber":0,"AllowSMS":false,"LastUpdate":"0001-01-01T00:00:00","DateOfBirth":"1990-05-13T00:00:00.000Z","DateOfBirthStringFormatted":"1990-05-13","TypePushEmail":0,"IsUpload":false,"IsActivated":false,"MobileVerified":true,"DateOfBirthExists":"0001-01-01T00:00:00","OTPValidationExpired":false,"IsFromOtherSystem":false,"OTPCount":0,"OTPAvailable":0}';
echo @color('purple',"Password Akun Anda : ");
echo @color('nevy',$pass);
$input = postt("https://api.klikindomaret.com/api/Customer/RegisterViaMobileApps?districtID=2483&mfp_id=".$tokee, $data);
$ind = json_decode($input, true);
$kupon=@$ind["ResponseID"];
$pesanan=@$ind[0]["Message"];
echo "\n";
echo @color('green',$pesanan);
echo "\n";
sleep(2);
$cek = getRequestt("https://api.klikindomaret.com/api/Customer/GetByID/".$kupon."?mfp_id=".$tokee);
$i = json_decode($cek, true);
$k=@$i[0]["CreatedBy"];
$nm=@$i[0]["FName"];
echo "\n";
echo @color('yellow',"Nama Akun Anda     : ");
echo @color('green',$nm);
if ($pesanan == "Alamat e-mail sudah terdaftar"){
	echo "\n";
	echo @color('red'," Nomor Anda $no Sudah Terdaftar Di Klik Indomaret");
	echo "\n";
}
if ($k == "Customer"){
	echo "\n";
	echo @color('green',"                SUKSES!!");
	echo "\n";
}
$data = '{"Email":"'.$no.'","Password":"'.$pass.'"}';
$login = postt("https://account-api-v2.klikindomaret.com/api/Customer/LoginViaMobileApps?isMobile=true&device_token=".$tok."&districtID=51409&TrafficSource=", $data);
$modify = json_decode($login, true);
$rid=@$modify["ResponseID"];
$id=@$modify["ResponseObject"]["ID"];
$log=@$modify["Message"];
$token=@$modify["ResponseObject"]["Token"];
echo "\n";
echo @color('nevy',"Login ");
echo @color('yellow',$log);
echo "\n\n";
$awalan = getRequestt("https://api.klikindomaret.com/api/CustomerAddress/GetByCustomerId?custId=".$id);
$awaln = getRequestt("https://api.klikindomaret.com/api/CustomerAddress/GetByCustomerId?custId=".$id);
$wilayah = getRequestt("https://api.klikindomaret.com/api/Store/GetListByAreaWilayahStore?Lat=-6.160609555928087&Long=106.86568703502417");
$pilih = getRequestt("https://api.klikindomaret.com/api/ShoppingCart/GetStoreAttributesFromStoreCode?StoreCodes=TKHU");
$pilih = getRequestt("https://api.klikindomaret.com/api/ShoppingCart/GetStoreAttributesFromStoreCode?StoreCodes=TKHU&StoreCodeDest=&CustomerID=".$id);
$data = '{"CustomerID":"'.$id.'","AddressType":0,"StoreCode":"TKHU"}';
$addd = postset("https://account-api-v2.klikindomaret.com/api/CustomerAddress/SetAddressTypeAndDefaultStore?mfp_id=".$rid."&isChangeAddress=False&ShoppingCartID=00000000-0000-0000-0000-000000000000", $data, $id, $token);
$barang = getRequestt("https://api.klikindomaret.com/api/ShoppingCart/ModifyCart?regionID=66430dfd-0211-47d3-9e74-165b28e1f284&scId=&cId=".$id."&cartRef=mobile&mod=add&id=&isPair=false&mfp_id=".$rid."&qty=1&pId=608f974a-2110-4d57-89cb-36f8a9f6291e&Origin=Android&NearestStoreLocation=&ChildDOB=&CustomerLatitude=&CustomerLongitude=&StoreCode=TKHU&StoreCodeDest=");
$ridbb = json_decode($barang, true);
$ridbc=@$ridbb[0]["ResponseID"];
$cek = getRequestt("https://api.klikindomaret.com/api/ShoppingCart/GetMyCartCount?cartId=".$ridbc."&customerId=".$id);
$barak = getRequestt("https://api.klikindomaret.com/api/ShoppingCart/ModifyCart?regionID=66430dfd-0211-47d3-9e74-165b28e1f284&scId=".$ridbc."&cId=".$id."&cartRef=mobile&mod=add&id=&isPair=false&mfp_id=".$rid."&qty=1&pId=1d1a7f13-2387-44d8-894a-5e3a310fefc2&Origin=Android&NearestStoreLocation=&ChildDOB=&CustomerLatitude=&CustomerLongitude=&StoreCode=TKHU&StoreCodeDest=");
$cek = getRequestt("https://api.klikindomaret.com/api/ShoppingCart/GetMyCartCount?cartId=".$ridbc."&customerId=".$id);
$barak = getRequestt("https://api.klikindomaret.com/api/ShoppingCart/ModifyCart?regionID=66430dfd-0211-47d3-9e74-165b28e1f284&scId=".$ridbc."&cId=".$id."&cartRef=mobile&mod=add&id=&isPair=false&mfp_id=".$rid."&qty=2&pId=a3f4e5a8-3638-47ea-8c3a-1119d78eef55&Origin=Android&NearestStoreLocation=&ChildDOB=&CustomerLatitude=&CustomerLongitude=&StoreCode=TKHU&StoreCodeDest=");
$cek = getRequestt("https://api.klikindomaret.com/api/ShoppingCart/GetMyCartCount?cartId=".$ridbc."&customerId=".$id);
$barak = getRequestt("https://api.klikindomaret.com/api/ShoppingCart/ModifyCart?regionID=66430dfd-0211-47d3-9e74-165b28e1f284&scId=".$ridbc."&cId=".$id."&cartRef=mobile&mod=add&id=&isPair=false&mfp_id=".$rid."&qty=1&pId=31b7469b-e136-4c6a-90c3-02a552f718b0&Origin=Android&NearestStoreLocation=&ChildDOB=&CustomerLatitude=&CustomerLongitude=&StoreCode=TKHU&StoreCodeDest=");
$cek = getRequestt("https://api.klikindomaret.com/api/ShoppingCart/GetMyCartCount?cartId=".$ridbc."&customerId=".$id);
$barak = getRequestt("https://api.klikindomaret.com/api/ShoppingCart/ModifyCart?regionID=66430dfd-0211-47d3-9e74-165b28e1f284&scId=".$ridbc."&cId=".$id."&cartRef=mobile&mod=add&id=&isPair=false&mfp_id=".$rid."&qty=4&pId=7e45275d-9222-43e9-8d46-0864877e3e77&Origin=Android&NearestStoreLocation=&ChildDOB=");
$ceki = getRequestt("https://api.klikindomaret.com/api/ShoppingCart/GetMyCartCount?cartId=".$ridbc."&customerId=".$id);
$baraki = getRequestt("https://api.klikindomaret.com/api/ShoppingCart/ModifyCart?regionID=66430dfd-0211-47d3-9e74-165b28e1f284&scId=".$ridbc."&cId=".$id."&cartRef=mobile&mod=add&id=&isPair=false&mfp_id=".$rid."&qty=5&pId=c0ce410e-4b36-4c9d-b48c-f32ac98c26bf&Origin=Android&NearestStoreLocation=&ChildDOB=&CustomerLatitude=&CustomerLongitude=&StoreCode=TKHU&StoreCodeDest=");
$ridbbbb = json_decode($barak, true);
$ridbccd=@$ridbbbb[0]["ResponseID"];
$barak = getRequestt("https://api.klikindomaret.com/api/ShoppingCart/ModifyCart?regionID=66430dfd-0211-47d3-9e74-165b28e1f284&scId=".$ridbc."&cId=".$id."&cartRef=mobile&mod=add&id=&isPair=false&mfp_id=".$rid."&qty=3&pId=37260311-226e-43bd-bd36-49a7d0737afb&Origin=Android&NearestStoreLocation=&ChildDOB=");
$cek = getRequestt("https://api.klikindomaret.com/api/ShoppingCart/GetMyCartCount?cartId=".$ridbccd."&customerId=".$id);
$data = '{"Code":"GIGI10","ShoppingCartID":"'.$ridbc.'","CustomerID":"'.$id.'","RegionID":"66430dfd-0211-47d3-9e74-165b28e1f284","SalesOrderNo":"","Nominal":""}';
$cull = postt("https://api.klikindomaret.com/api/Voucher/BookingVoucherCoupon?mfp_id=".$rid, $data);
$sayang = json_decode($cull, true);
$ferdyyy=@$sayang["ResponseObject"]["status"];
$ramadhannn=@$sayang["ResponseObject"]["keterangan"];
$data = '{"Code":"'.$kpn.'","ShoppingCartID":"'.$ridbc.'","CustomerID":"'.$id.'","RegionID":"66430dfd-0211-47d3-9e74-165b28e1f284","SalesOrderNo":"","Nominal":""}';
$cull = postt("https://api.klikindomaret.com/api/Voucher/BookingVoucherCoupon?mfp_id=".$rid, $data);
$sayang = json_decode($cull, true);
$fee=@$sayang["ResponseObject"]["status"];
$ramm=@$sayang["ResponseObject"]["keterangan"];
echo @color('green'," Kupon 25/150 ");
echo "\n";
echo @color('yellow'," Status     : ");
echo @color('green',$fee);
echo "\n";
echo @color('yellow'," Keterangan : ");
echo @color('green',$ramm);
echo "\n";
echo "\n";
if ($fee == "FAILED"){
	echo @color('red'," Kupon $kpn (Diskon di klik Indomaret) Gagal Di Klaim Ke No $no Karena Status FAILED  \n");
	echo @color('red'," Nomor Dan Kupon Akan Di Save di  Nomor Dan Kupon Gagal.txt \n\n");
	echo @color('red',"Akan Menghapus File Diskon Rp 25.000 Klik Indomaret.txt \n\n");
	saved ('Nomor Dan Kupon Gagal.txt', $no, $kpn);
	$file = "Diskon Rp 25.000 Klik Indomaret.txt";
if (!unlink($file)){
echo ("Error deleting $file  ");
}else{
echo "Deleted $file  ";
}
echo "\n";
}else if($fee == "SUCCESS"){
	echo @color('green',"Berhasil Di Tempel !! \n\n");
	echo @color('green',"Nomor Akan Di Simpan Di Nomor Tempel.txt \n");
    echo @color('green',"Akan Menghapus File Diskon Rp 25.000 Klik Indomaret.txt \n\n");
	saved ('Nomor Tempel.txt', $no, $pass);
	$file = "Diskon Rp 25.000 Klik Indomaret.txt";
if (!unlink($file)){
echo ("Error deleting $file  ");
}else{
echo "Deleted $file  ";
}
echo "\n";
}
goto gaskansayang;
function postset($url, $data=null, $id, $token)
    {
      $ch = curl_init();
      curl_setopt($ch, CURLOPT_URL, $url);
      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($ch, CURLOPT_POST, 1);
           $header[]='User-Agent: okhttp/3.12.1';
           $header[]='authorization: Bearer '.$id.'#'.$token;
           $header[]='applicationkey: indomaret';
           $header[]='Content-Type: application/json';
     curl_setopt($ch, CURLOPT_AUTOREFERER, true);
     curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
     curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
     curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
     curl_setopt($ch, CURLOPT_COOKIEJAR, "klik.txt");
     curl_setopt($ch, CURLOPT_COOKIEFILE, "klik.txt");
     $response = curl_exec($ch);
     $httpcode = curl_getinfo($ch);
    if (!$httpcode)
        return false;
    else {
        $header = substr($response, 0, curl_getinfo($ch, CURLINFO_HEADER_SIZE));
        $body   = substr($response, curl_getinfo($ch, CURLINFO_HEADER_SIZE));
    }
    $json = json_decode($body, true);
    print_r ($json);
    return $response;
}
function post($url, $data=null)
    {
      $ch = curl_init();
      curl_setopt($ch, CURLOPT_URL, $url);
      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($ch, CURLOPT_POST, 1);
           $header[]='User-Agent: okhttp/3.12.1';
           $header[]='Connection: Keep-Alive';
           $header[]='Content-Type: application/json';
     curl_setopt($ch, CURLOPT_AUTOREFERER, true);
     curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
     curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
     curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
     curl_setopt($ch, CURLOPT_COOKIEJAR, "klik.txt");
     curl_setopt($ch, CURLOPT_COOKIEFILE, "klik.txt");
     $response = curl_exec($ch);
     $httpcode = curl_getinfo($ch);
    if (!$httpcode)
        return false;
    else {
        $header = substr($response, 0, curl_getinfo($ch, CURLINFO_HEADER_SIZE));
        $body   = substr($response, curl_getinfo($ch, CURLINFO_HEADER_SIZE));
    }
    $json = json_decode($body, true);
    print_r ($json);
    return $response;
}
function getRequest($url)
    {
      $ch = curl_init();
      curl_setopt($ch, CURLOPT_URL, $url);
      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
           $header[]='User-Agent: okhttp/3.12.1';
           $header[]='Connection: Keep-Alive';
     curl_setopt($ch, CURLOPT_AUTOREFERER, true);
     curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
     curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
     curl_setopt($ch, CURLOPT_COOKIEJAR, "klik.txt");
     curl_setopt($ch, CURLOPT_COOKIEFILE, "klik.txt");
     $response = curl_exec($ch);
     $httpcode = curl_getinfo($ch);
    if (!$httpcode)
        return false;
    else {
        $header = substr($response, 0, curl_getinfo($ch, CURLINFO_HEADER_SIZE));
        $body   = substr($response, curl_getinfo($ch, CURLINFO_HEADER_SIZE));
    }
    $json = json_decode($body, true);
    print_r ($json);
    return $response;
}
function postt($url, $data=null)
    {
      $ch = curl_init();
      curl_setopt($ch, CURLOPT_URL, $url);
      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($ch, CURLOPT_POST, 1);
           $header[]='User-Agent: okhttp/3.12.1';
           $header[]='Connection: Keep-Alive';
           $header[]='Content-Type: application/json';
     curl_setopt($ch, CURLOPT_AUTOREFERER, true);
     curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
     curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
     curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
     curl_setopt($ch, CURLOPT_COOKIEJAR, "klik.txt");
     curl_setopt($ch, CURLOPT_COOKIEFILE, "klik.txt");
     $response = curl_exec($ch);
     $httpcode = curl_getinfo($ch);
    if (!$httpcode)
        return false;
    else {
        $header = substr($response, 0, curl_getinfo($ch, CURLINFO_HEADER_SIZE));
        $body   = substr($response, curl_getinfo($ch, CURLINFO_HEADER_SIZE));
    }
    $json = json_decode($body, true);
    print_r ($json);
    return $response;
}
function getRequestt($url)
    {
      $ch = curl_init();
      curl_setopt($ch, CURLOPT_URL, $url);
      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
           $header[]='User-Agent: okhttp/3.12.1';
           $header[]='Connection: Keep-Alive';
     curl_setopt($ch, CURLOPT_AUTOREFERER, true);
     curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
     curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
     curl_setopt($ch, CURLOPT_COOKIEJAR, "klik.txt");
     curl_setopt($ch, CURLOPT_COOKIEFILE, "klik.txt");
     $response = curl_exec($ch);
     $httpcode = curl_getinfo($ch);
    if (!$httpcode)
        return false;
    else {
        $header = substr($response, 0, curl_getinfo($ch, CURLINFO_HEADER_SIZE));
        $body   = substr($response, curl_getinfo($ch, CURLINFO_HEADER_SIZE));
    }
    $json = json_decode($body, true);
    print_r ($json);
    return $response;
}
function savec($filename, $content, $pass)
{
    $save = fopen($filename, "a");
    fputs($save, "$content kupon $pass\n");
    fclose($save);
}
function save($filename, $content)
{
    $save = fopen($filename, "a");
    fputs($save, "$content\n");
    fclose($save);
}
function saved($filename, $content, $pass)
{
    $save = fopen($filename, "a");
    fputs($save, "$content = $pass\n");
    fclose($save);
}
function savedd($filename, $content, $pass)
{
    $save = fopen($filename, "a");
    fputs($save, "$content = $pass\n");
    fclose($save);
}
function saveddd($filename, $content, $barcode)
{
    $save = fopen($filename, "a");
    fputs($save, "$content = $barcode\n");
    fclose($save);
}
function postRequestd($url, $data=null)
    {
      $ch = curl_init();
      curl_setopt($ch, CURLOPT_URL, $url);
      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($ch, CURLOPT_POST, 1);
           $header[]='user-agent: okhttp/4.9.0';
           $header[]='content-type: application/json; charset=UTF-8';
     curl_setopt($ch, CURLOPT_AUTOREFERER, true);
     curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
     curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
     curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
     curl_setopt($ch, CURLOPT_COOKIEJAR, "indo.txt");
     curl_setopt($ch, CURLOPT_COOKIEFILE, "indo.txt");
     $response = curl_exec($ch);
     $httpcode = curl_getinfo($ch);
    if (!$httpcode)
        return false;
    else {
        $header = substr($response, 0, curl_getinfo($ch, CURLINFO_HEADER_SIZE));
        $body   = substr($response, curl_getinfo($ch, CURLINFO_HEADER_SIZE));
    }
    $json = json_decode($body, true);
    print_r ($json);
    return $response;
}
function postd($url, $data=null, $tok)
    {
      $ch = curl_init();
      curl_setopt($ch, CURLOPT_URL, $url);
      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($ch, CURLOPT_POST, 1);
           $header[]='user-agent: okhttp/4.9.0';
           $header[]='content-type: application/json; charset=UTF-8';
           $header[]='authorization: Bearer '.$toke;
     curl_setopt($ch, CURLOPT_AUTOREFERER, true);
     curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
     curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
     curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
     curl_setopt($ch, CURLOPT_COOKIEJAR, "indo.txt");
     curl_setopt($ch, CURLOPT_COOKIEFILE, "indo.txt");
     $response = curl_exec($ch);
     $httpcode = curl_getinfo($ch);
    if (!$httpcode)
        return false;
    else {
        $header = substr($response, 0, curl_getinfo($ch, CURLINFO_HEADER_SIZE));
        $body   = substr($response, curl_getinfo($ch, CURLINFO_HEADER_SIZE));
    }
    $json = json_decode($body, true);
    print_r ($json);
    return $response;
}
function getRequestd($url, $tokenn)
    {
      $ch = curl_init();
      curl_setopt($ch, CURLOPT_URL, $url);
      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
           $header[]='user-agent: okhttp/4.9.0';
           $header[]='authorization: Bearer '.$tokenn;
     curl_setopt($ch, CURLOPT_AUTOREFERER, true);
     curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
     curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
     curl_setopt($ch, CURLOPT_COOKIEJAR, "indo.txt");
     curl_setopt($ch, CURLOPT_COOKIEFILE, "indo.txt");
     $response = curl_exec($ch);
     $httpcode = curl_getinfo($ch);
    if (!$httpcode)
        return false;
    else {
        $header = substr($response, 0, curl_getinfo($ch, CURLINFO_HEADER_SIZE));
        $body   = substr($response, curl_getinfo($ch, CURLINFO_HEADER_SIZE));
    }
    $json = json_decode($body, true);
    print_r ($json);
    return $response;
}
function saveddddd($filename, $content)
{
    $save = fopen($filename, "a");
    fputs($save, "$content\r\n");
    fclose($save);
}
function postttt($url, $data=null)
    {
      $ch = curl_init();
      curl_setopt($ch, CURLOPT_URL, $url);
      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($ch, CURLOPT_POST, 1);
           $header[]='User-Agent: okhttp/3.12.1';
           $header[]='Connection: Keep-Alive';
           $header[]='Content-Type: application/json';
     curl_setopt($ch, CURLOPT_AUTOREFERER, true);
     curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
     curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
     curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
     curl_setopt($ch, CURLOPT_COOKIEJAR, "klik.txt");
     curl_setopt($ch, CURLOPT_COOKIEFILE, "klik.txt");
     $response = curl_exec($ch);
     $httpcode = curl_getinfo($ch);
    if (!$httpcode)
        return false;
    else {
        $header = substr($response, 0, curl_getinfo($ch, CURLINFO_HEADER_SIZE));
        $body   = substr($response, curl_getinfo($ch, CURLINFO_HEADER_SIZE));
    }
    $json = json_decode($body, true);
    print_r ($json);
    return $response;
}
function getRequesttt($url)
    {
      $ch = curl_init();
      curl_setopt($ch, CURLOPT_URL, $url);
      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
           $header[]='User-Agent: okhttp/3.12.1';
           $header[]='Connection: Keep-Alive';
     curl_setopt($ch, CURLOPT_AUTOREFERER, true);
     curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
     curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
     curl_setopt($ch, CURLOPT_COOKIEJAR, "klik.txt");
     curl_setopt($ch, CURLOPT_COOKIEFILE, "klik.txt");
     $response = curl_exec($ch);
     $httpcode = curl_getinfo($ch);
    if (!$httpcode)
        return false;
    else {
        $header = substr($response, 0, curl_getinfo($ch, CURLINFO_HEADER_SIZE));
        $body   = substr($response, curl_getinfo($ch, CURLINFO_HEADER_SIZE));
    }
    $json = json_decode($body, true);
    print_r ($json);
    return $response;
}

function savetttt($filename, $content, $kupon)
{
    $save = fopen($filename, "a");
    fputs($save, "$content kupon $kupon\r\n");
    fclose($save);
}
    function posttttt($url, $data=null)
    {
      $ch = curl_init();
      curl_setopt($ch, CURLOPT_URL, $url);
      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($ch, CURLOPT_POST, 1);
           $header[]='User-Agent: okhttp/3.12.1';
           $header[]='Connection: Keep-Alive';
           $header[]='Content-Type: application/json';
     curl_setopt($ch, CURLOPT_AUTOREFERER, true);
     curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
     curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
     curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
     curl_setopt($ch, CURLOPT_COOKIEJAR, "klik.txt");
     curl_setopt($ch, CURLOPT_COOKIEFILE, "klik.txt");
     $response = curl_exec($ch);
     $httpcode = curl_getinfo($ch);
    if (!$httpcode)
        return false;
    else {
        $header = substr($response, 0, curl_getinfo($ch, CURLINFO_HEADER_SIZE));
        $body   = substr($response, curl_getinfo($ch, CURLINFO_HEADER_SIZE));
    }
    $json = json_decode($body, true);
    print_r ($json);
    return $response;
}
function getRequestttt($url)
    {
      $ch = curl_init();
      curl_setopt($ch, CURLOPT_URL, $url);
      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
           $header[]='User-Agent: okhttp/3.12.1';
           $header[]='Connection: Keep-Alive';
     curl_setopt($ch, CURLOPT_AUTOREFERER, true);
     curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
     curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
     curl_setopt($ch, CURLOPT_COOKIEJAR, "klik.txt");
     curl_setopt($ch, CURLOPT_COOKIEFILE, "klik.txt");
     $response = curl_exec($ch);
     $httpcode = curl_getinfo($ch);
    if (!$httpcode)
        return false;
    else {
        $header = substr($response, 0, curl_getinfo($ch, CURLINFO_HEADER_SIZE));
        $body   = substr($response, curl_getinfo($ch, CURLINFO_HEADER_SIZE));
    }
    $json = json_decode($body, true);
    print_r ($json);
    return $response;
}
function name()
    {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "http://ninjaname.horseridersupply.com/indonesian_name.php");
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    $ex = curl_exec($ch);
    preg_match_all('~(&bull; (.*?)<br/>&bull; )~', $ex, $name);
    return $name[2][mt_rand(0, 14) ];
    }
function fcm($url, $data=null, $didi, $dfi, $tokeyt)
    {
      $ch = curl_init();
      curl_setopt($ch, CURLOPT_URL, $url);
      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($ch, CURLOPT_POST, 1);
           $header[]='user-agent: okhttp/4.9.0';
           $header[]='accept-encoding: gzip';
           $header[]='authorization: Bearer '.$tokeyt;
           $header[]='Host: edtsapp.indomaretpoinku.com';
           $header[]='content-type: application/json; charset=UTF-8';
           $header[]='key: ZWR0czIwMjE6MHBsbW9rbg==';
           $header[]='{"app_version":"3.9.0","device_class":"Phone","device_family":"'.$dfi.'","device_id":"'.$didi.'","os_name":"Android Q","os_version":"Android 10"}';
     curl_setopt($ch, CURLOPT_AUTOREFERER, true);
     curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
     curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
     curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
     curl_setopt($ch, CURLOPT_COOKIEJAR, "indo.txt");
     curl_setopt($ch, CURLOPT_COOKIEFILE, "indo.txt");
     $response = curl_exec($ch);
     $httpcode = curl_getinfo($ch);
    if (!$httpcode)
        return false;
    else {
        $header = substr($response, 0, curl_getinfo($ch, CURLINFO_HEADER_SIZE));
        $body   = substr($response, curl_getinfo($ch, CURLINFO_HEADER_SIZE));
    }
    $json = json_decode($body, true);
    print_r ($json);
    return $response;
}
function getmodule($url, $didi, $dfi, $tokeyt)
    {
      $ch = curl_init();
      curl_setopt($ch, CURLOPT_URL, $url);
      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
           $header[]='user-agent: okhttp/4.9.0';
           $header[]='authorization: Bearer '.$tokeyt;
           $header[]='Host: edtsapp.indomaretpoinku.com';
           $header[]='key: ZWR0czIwMjE6MHBsbW9rbg==';
           $header[]='{"app_version":"3.9.0","device_class":"Phone","device_family":"'.$dfi.'","device_id":"'.$didi.'","os_name":"Android Q","os_version":"Android 10"}';
     curl_setopt($ch, CURLOPT_AUTOREFERER, true);
     curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
     curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
     curl_setopt($ch, CURLOPT_COOKIEJAR, "indo.txt");
     curl_setopt($ch, CURLOPT_COOKIEFILE, "indo.txt");
     $response = curl_exec($ch);
     $httpcode = curl_getinfo($ch);
    if (!$httpcode)
        return false;
    else {
        $header = substr($response, 0, curl_getinfo($ch, CURLINFO_HEADER_SIZE));
        $body   = substr($response, curl_getinfo($ch, CURLINFO_HEADER_SIZE));
    }
    $json = json_decode($body, true);
    print_r ($json);
    return $response;
}
function postfcm($url, $data=null, $didi, $dfi)
    {
      $ch = curl_init();
      curl_setopt($ch, CURLOPT_URL, $url);
      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($ch, CURLOPT_POST, 1);
           $header[]='user-agent: okhttp/4.9.0';
           $header[]='accept-encoding: gzip';
           $header[]='Host: edtsapp.indomaretpoinku.com';
           $header[]='content-type: application/json; charset=UTF-8';
           $header[]='key: ZWR0czIwMjE6MHBsbW9rbg==';
           $header[]='{"app_version":"3.9.0","device_class":"Phone","device_family":"'.$dfi.'","device_id":"'.$didi.'","os_name":"Android Q","os_version":"Android 10"}';
     curl_setopt($ch, CURLOPT_AUTOREFERER, true);
     curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
     curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
     curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
     curl_setopt($ch, CURLOPT_COOKIEJAR, "indo.txt");
     curl_setopt($ch, CURLOPT_COOKIEFILE, "indo.txt");
     $response = curl_exec($ch);
     $httpcode = curl_getinfo($ch);
    if (!$httpcode)
        return false;
    else {
        $header = substr($response, 0, curl_getinfo($ch, CURLINFO_HEADER_SIZE));
        $body   = substr($response, curl_getinfo($ch, CURLINFO_HEADER_SIZE));
    }
    $json = json_decode($body, true);
    print_r ($json);
    return $response;
}
function getawal($url, $didi, $dfi)
    {
      $ch = curl_init();
      curl_setopt($ch, CURLOPT_URL, $url);
      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
           $header[]='user-agent: okhttp/4.9.0';
           $header[]='Host: edtsapp.indomaretpoinku.com';
           $header[]='key: ZWR0czIwMjE6MHBsbW9rbg==';
           $header[]='{"app_version":"3.9.0","device_class":"Phone","device_family":"'.$dfi.'","device_id":"'.$didi.'","os_name":"Android Q","os_version":"Android 10"}';
     curl_setopt($ch, CURLOPT_AUTOREFERER, true);
     curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
     curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
     curl_setopt($ch, CURLOPT_COOKIEJAR, "indo.txt");
     curl_setopt($ch, CURLOPT_COOKIEFILE, "indo.txt");
     $response = curl_exec($ch);
     $httpcode = curl_getinfo($ch);
    if (!$httpcode)
        return false;
    else {
        $header = substr($response, 0, curl_getinfo($ch, CURLINFO_HEADER_SIZE));
        $body   = substr($response, curl_getinfo($ch, CURLINFO_HEADER_SIZE));
    }
    $json = json_decode($body, true);
    print_r ($json);
    return $response;
}
function posttrack($url, $data=null)
    {
      $ch = curl_init();
      curl_setopt($ch, CURLOPT_URL, $url);
      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($ch, CURLOPT_POST, 1);
           $header[]='user-agent: okhttp/4.9.0';
           $header[]='accept-encoding: gzip';
           $header[]='Host: asia-southeast2-idm-corp-prd.cloudfunctions.net';
           $header[]='content-type: application/json; charset=UTF-8';
           $header[]='authorization: NNKSkTdooQo7vUGVG5eGkgYSVW7SabSjffafao35nfoan3ygfaa';
     curl_setopt($ch, CURLOPT_AUTOREFERER, true);
     curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
     curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
     curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
     curl_setopt($ch, CURLOPT_COOKIEJAR, "indo.txt");
     curl_setopt($ch, CURLOPT_COOKIEFILE, "indo.txt");
     $response = curl_exec($ch);
     $httpcode = curl_getinfo($ch);
    if (!$httpcode)
        return false;
    else {
        $header = substr($response, 0, curl_getinfo($ch, CURLINFO_HEADER_SIZE));
        $body   = substr($response, curl_getinfo($ch, CURLINFO_HEADER_SIZE));
    }
    $json = json_decode($body, true);
    print_r ($json);
    return $response;
}
function postRequest($url, $data=null)
    {
      $ch = curl_init();
      curl_setopt($ch, CURLOPT_URL, $url);
      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($ch, CURLOPT_POST, 1);
           $header[]='user-agent: okhttp/4.9.0';
           $header[]='content-type: application/json; charset=UTF-8';
     curl_setopt($ch, CURLOPT_AUTOREFERER, true);
     curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
     curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
     curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
     curl_setopt($ch, CURLOPT_COOKIEJAR, "indo.txt");
     curl_setopt($ch, CURLOPT_COOKIEFILE, "indo.txt");
     $response = curl_exec($ch);
     $httpcode = curl_getinfo($ch);
    if (!$httpcode)
        return false;
    else {
        $header = substr($response, 0, curl_getinfo($ch, CURLINFO_HEADER_SIZE));
        $body   = substr($response, curl_getinfo($ch, CURLINFO_HEADER_SIZE));
    }
    $json = json_decode($body, true);
    print_r ($json);
    return $response;
}
function fcmm($url, $data=null, $didii, $dfii, $tokeytt)
    {
      $ch = curl_init();
      curl_setopt($ch, CURLOPT_URL, $url);
      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($ch, CURLOPT_POST, 1);
           $header[]='user-agent: okhttp/4.9.0';
           $header[]='accept-encoding: gzip';
           $header[]='authorization: Bearer '.$tokeytt;
           $header[]='Host: edtsapp.indomaretpoinku.com';
           $header[]='content-type: application/json; charset=UTF-8';
           $header[]='key: ZWR0czIwMjE6MHBsbW9rbg==';
           $header[]='{"app_version":"3.9.0","device_class":"Phone","device_family":"'.$dfii.'","device_id":"'.$didii.'","os_name":"Android Q","os_version":"Android 10"}';
     curl_setopt($ch, CURLOPT_AUTOREFERER, true);
     curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
     curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
     curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
     curl_setopt($ch, CURLOPT_COOKIEJAR, "indo.txt");
     curl_setopt($ch, CURLOPT_COOKIEFILE, "indo.txt");
     $response = curl_exec($ch);
     $httpcode = curl_getinfo($ch);
    if (!$httpcode)
        return false;
    else {
        $header = substr($response, 0, curl_getinfo($ch, CURLINFO_HEADER_SIZE));
        $body   = substr($response, curl_getinfo($ch, CURLINFO_HEADER_SIZE));
    }
    $json = json_decode($body, true);
    print_r ($json);
    return $response;
}
function getmodulee($url, $didii, $dfii, $tokeytt)
    {
      $ch = curl_init();
      curl_setopt($ch, CURLOPT_URL, $url);
      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
           $header[]='user-agent: okhttp/4.9.0';
           $header[]='authorization: Bearer '.$tokeytt;
           $header[]='Host: edtsapp.indomaretpoinku.com';
           $header[]='key: ZWR0czIwMjE6MHBsbW9rbg==';
           $header[]='{"app_version":"3.9.0","device_class":"Phone","device_family":"'.$dfii.'","device_id":"'.$didii.'","os_name":"Android Q","os_version":"Android 10"}';
     curl_setopt($ch, CURLOPT_AUTOREFERER, true);
     curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
     curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
     curl_setopt($ch, CURLOPT_COOKIEJAR, "indo.txt");
     curl_setopt($ch, CURLOPT_COOKIEFILE, "indo.txt");
     $response = curl_exec($ch);
     $httpcode = curl_getinfo($ch);
    if (!$httpcode)
        return false;
    else {
        $header = substr($response, 0, curl_getinfo($ch, CURLINFO_HEADER_SIZE));
        $body   = substr($response, curl_getinfo($ch, CURLINFO_HEADER_SIZE));
    }
    $json = json_decode($body, true);
    print_r ($json);
    return $response;
}
function postfcmm($url, $data=null, $didii, $dfii)
    {
      $ch = curl_init();
      curl_setopt($ch, CURLOPT_URL, $url);
      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($ch, CURLOPT_POST, 1);
           $header[]='user-agent: okhttp/4.9.0';
           $header[]='accept-encoding: gzip';
           $header[]='Host: edtsapp.indomaretpoinku.com';
           $header[]='content-type: application/json; charset=UTF-8';
           $header[]='key: ZWR0czIwMjE6MHBsbW9rbg==';
           $header[]='{"app_version":"3.9.0","device_class":"Phone","device_family":"'.$dfii.'","device_id":"'.$didii.'","os_name":"Android Q","os_version":"Android 10"}';
     curl_setopt($ch, CURLOPT_AUTOREFERER, true);
     curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
     curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
     curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
     curl_setopt($ch, CURLOPT_COOKIEJAR, "indo.txt");
     curl_setopt($ch, CURLOPT_COOKIEFILE, "indo.txt");
     $response = curl_exec($ch);
     $httpcode = curl_getinfo($ch);
    if (!$httpcode)
        return false;
    else {
        $header = substr($response, 0, curl_getinfo($ch, CURLINFO_HEADER_SIZE));
        $body   = substr($response, curl_getinfo($ch, CURLINFO_HEADER_SIZE));
    }
    $json = json_decode($body, true);
    print_r ($json);
    return $response;
}
function getawall($url, $didii, $dfii)
    {
      $ch = curl_init();
      curl_setopt($ch, CURLOPT_URL, $url);
      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
           $header[]='user-agent: okhttp/4.9.0';
           $header[]='Host: edtsapp.indomaretpoinku.com';
           $header[]='key: ZWR0czIwMjE6MHBsbW9rbg==';
           $header[]='{"app_version":"3.9.0","device_class":"Phone","device_family":"'.$dfii.'","device_id":"'.$didii.'","os_name":"Android Q","os_version":"Android 10"}';
     curl_setopt($ch, CURLOPT_AUTOREFERER, true);
     curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
     curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
     curl_setopt($ch, CURLOPT_COOKIEJAR, "indo.txt");
     curl_setopt($ch, CURLOPT_COOKIEFILE, "indo.txt");
     $response = curl_exec($ch);
     $httpcode = curl_getinfo($ch);
    if (!$httpcode)
        return false;
    else {
        $header = substr($response, 0, curl_getinfo($ch, CURLINFO_HEADER_SIZE));
        $body   = substr($response, curl_getinfo($ch, CURLINFO_HEADER_SIZE));
    }
    $json = json_decode($body, true);
    print_r ($json);
    return $response;
}
function posttrackk($url, $data=null)
    {
      $ch = curl_init();
      curl_setopt($ch, CURLOPT_URL, $url);
      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($ch, CURLOPT_POST, 1);
           $header[]='user-agent: okhttp/4.9.0';
           $header[]='accept-encoding: gzip';
           $header[]='Host: asia-southeast2-idm-corp-prd.cloudfunctions.net';
           $header[]='content-type: application/json; charset=UTF-8';
           $header[]='authorization: NNKSkTdooQo7vUGVG5eGkgYSVW7SabSjffafao35nfoan3ygfaa';
     curl_setopt($ch, CURLOPT_AUTOREFERER, true);
     curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
     curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
     curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
     curl_setopt($ch, CURLOPT_COOKIEJAR, "indo.txt");
     curl_setopt($ch, CURLOPT_COOKIEFILE, "indo.txt");
     $response = curl_exec($ch);
     $httpcode = curl_getinfo($ch);
    if (!$httpcode)
        return false;
    else {
        $header = substr($response, 0, curl_getinfo($ch, CURLINFO_HEADER_SIZE));
        $body   = substr($response, curl_getinfo($ch, CURLINFO_HEADER_SIZE));
    }
    $json = json_decode($body, true);
    print_r ($json);
    return $response;
}

function postlog($url, $data=null, $didii, $dfii, $token)
    {
      $ch = curl_init();
      curl_setopt($ch, CURLOPT_URL, $url);
      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($ch, CURLOPT_POST, 1);
           $header[]='authorization: Bearer '.$token;
           $header[]='user-agent: okhttp/5.0.0-alpha.2';
           $header[]='content-type: application/json; charset=UTF-8';
           $header[]='key: ZWR0czIwMjE6MHBsbW9rbg==';
           $header[]='apps: {"app_version":"3.9.0","device_class":"Phone","device_family":"'.$dfii.'","device_id":"'.$didii.'","os_name":"Android Q","os_version":"Android 10"}';
     curl_setopt($ch, CURLOPT_AUTOREFERER, true);
     curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
     curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
     curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
     curl_setopt($ch, CURLOPT_COOKIEJAR, "indo.txt");
     curl_setopt($ch, CURLOPT_COOKIEFILE, "indo.txt");
     $response = curl_exec($ch);
     $httpcode = curl_getinfo($ch);
    if (!$httpcode)
        return false;
    else {
        $header = substr($response, 0, curl_getinfo($ch, CURLINFO_HEADER_SIZE));
        $body   = substr($response, curl_getinfo($ch, CURLINFO_HEADER_SIZE));
    }
    $json = json_decode($body, true);
    print_r ($json);
    return $response;
}


function postidm($url, $data=null, $didii, $dfii)
    {
      $ch = curl_init();
      curl_setopt($ch, CURLOPT_URL, $url);
      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($ch, CURLOPT_POST, 1);
           $header[]='user-agent: okhttp/5.0.0-alpha.2';
           $header[]='content-type: application/json; charset=UTF-8';
           $header[]='key: ZWR0czIwMjE6MHBsbW9rbg==';
           $header[]='apps: {"app_version":"3.9.0","device_class":"Phone","device_family":"'.$dfii.'","device_id":"'.$didii.'","os_name":"Android Q","os_version":"Android 10"}';
     curl_setopt($ch, CURLOPT_AUTOREFERER, true);
     curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
     curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
     curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
     curl_setopt($ch, CURLOPT_COOKIEJAR, "indo.txt");
     curl_setopt($ch, CURLOPT_COOKIEFILE, "indo.txt");
     $response = curl_exec($ch);
     $httpcode = curl_getinfo($ch);
    if (!$httpcode)
        return false;
    else {
        $header = substr($response, 0, curl_getinfo($ch, CURLINFO_HEADER_SIZE));
        $body   = substr($response, curl_getinfo($ch, CURLINFO_HEADER_SIZE));
    }
    $json = json_decode($body, true);
    print_r ($json);
    return $response;
}


function getrequestidm($url, $didii, $dfii, $token)
    {
      $ch = curl_init();
      curl_setopt($ch, CURLOPT_URL, $url);
      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
           $header[]='user-agent: okhttp/5.0.0-alpha.2';
           $header[]='authorization: Bearer '.$token;
           $header[]='Host: edtsapp.indomaretpoinku.com';
           $header[]='key: ZWR0czIwMjE6MHBsbW9rbg==';
           $header[]='apps: {"app_version":"3.9.0","device_class":"Phone","device_family":"'.$dfii.'","device_id":"'.$didii.'","os_name":"Android Q","os_version":"Android 10"}';
     curl_setopt($ch, CURLOPT_AUTOREFERER, true);
     curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
     curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
     curl_setopt($ch, CURLOPT_COOKIEJAR, "indo.txt");
     curl_setopt($ch, CURLOPT_COOKIEFILE, "indo.txt");
     $response = curl_exec($ch);
     $httpcode = curl_getinfo($ch);
    if (!$httpcode)
        return false;
    else {
        $header = substr($response, 0, curl_getinfo($ch, CURLINFO_HEADER_SIZE));
        $body   = substr($response, curl_getinfo($ch, CURLINFO_HEADER_SIZE));
    }
    $json = json_decode($body, true);
    print_r ($json);
    return $response;
}

function color($color = 'default' , $text)
    {
        $arraycolor = array(
            'red'       => '1;31',
            'green'     => '1;32',
            'yellow'    => '1;33',
            'blue'      => '1;34',
            'nevy'      => '1;36',
            'purple'    => '1;35',
        );  
        return "\033[".$arraycolor[$color]."m".$text."\033[0m";
    }
    function d1($v28, $w29)
{
    $s2a = fopen($v28, "a");
    fputs($s2a, $w29);
    fclose($s2a);
}
function sessionId()
{
      return sprintf(
         '%04x%04x-%04x-%04x-%04x-%04x%04x%04x',
         mt_rand(0, 0xffff),
         mt_rand(0, 0xffff),
         mt_rand(0, 0xffff),
         mt_rand(0, 0x0fff) | 0x4000,
         mt_rand(0, 0x3fff) | 0x8000,
         mt_rand(0, 0xffff),
         mt_rand(0, 0xffff),
         mt_rand(0, 0xffff)
      );
}
function uniqueId()
{
      return sprintf(
         '%04x%04x%04x%04x',
         mt_rand(0, 0xffff),
         mt_rand(0, 0xffff),
         mt_rand(0, 0xffff),
         mt_rand(0, 0x0fff) | 0x4000,
         mt_rand(0, 0x3fff) | 0x8000,
         mt_rand(0, 0xffff),
         mt_rand(0, 0xffff),
         mt_rand(0, 0xffff)
      );
}
?>
<?php
class RSA{
    public static $num;
function encRSA($M){
    $data[0]=1;
    for($i=0;$i<=35;$i++)
    {
        $rest[$i]= pow($M, 1)%119;
        if($data[$i]>119)
        {
            $data[$i+1]=$data[$i]*$rest[$i]%119;
        }else{
            $data[$i+1]=$data[$i]*$rest[$i];
        }
    }
    $get=$data[35]%119;
    return $get;
}

function decRSA($E){
    $data[0]=1;
    for($i=0;$i<=11;$i++)
    {
        $rest[$i]= pow($E, 1)%119;
        if($data[$i]>119)
        {
            $data[$i+1]=$data[$i]*$rest[$i]%119;
        }else{
            $data[$i+1]=$data[$i]*$rest[$i];
        }
    }
    $get=$data[11]%119;
    return $get;
}
//private $words = "last day i go to school by bus i am in harry soo";
//encrypt
function Encrypt($words){
    $enc='';
for($i=0;$i<strlen($words);$i++)
{
    RSA::$num = strlen($words);
    $m = ord($words[$i]);
    if($m<=119){
        $enc=$enc.chr($this->encRSA($m));
    }else{
        $enc = $enc.$words[$i];
    }
}
return $enc;
    }

//decrypt
function Decrypt($enc){
$dec='';
for($i=0;$i<RSA::$num;$i++)
{
    $m = ord($enc[$i]);
    if($m<=119){
        $dec=$dec.chr($this->decRSA($m));
    }else{
        $dec = $dec.$enc[$i];
    }
}
return $dec;
    }



// $words is the string wanted to be encrypted
// $enc is the encrypted words
// $dec is the decryption of $enc
}

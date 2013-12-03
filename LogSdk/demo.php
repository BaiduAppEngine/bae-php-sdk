<?php  
require_once dirname(__FILE__).'/BaeLog.class.php';

$secret = array("user"=>"YuguhtbbyzK2Xyi7mn5dFIaB","passwd"=>"axUoGuc5GVi6j3cDnliXB3vfFEDuZr2XD" );
$log = BaeLog::getInstance($secret);
if(NULL !=  $log)
{
   $log->setLogLevel(16);
   for($i=0;$i<3;$i++)
   {
       $ret = $log->Fatal("lelllllllllllllll");
        if(false === $ret)
        {
            $code = $log->getResultCode();
            echo "$code<br/>";
        }else{
            echo "Success<br/>";
        }
   }
}

<!--form method="POST" action="http://ncdc.nctucs.net/adv,/cgi-bin/weblogin.cgi?"
 enctype="multipart/form-data">
<!--input type="text" name="username" value=""/>
<!--input type="password" name="password" value=""/>
<!--input type="submit" value="login"> <INPUT type="reset">
<!--/form>
<?php
function login($username,$password)
{
    $url=curl_init("http://ncdc.nctucs.net/adv,/cgi-bin/weblogin.cgi?password=$password&username=$username");
    $respense=curl_exec($url);
    echo $response;
    curl_close($url);
    #$Rq= new HttpRequest("http://ncdc.nctucs.net/adv,/cgi-bin/weblogin.cgi?password=$password&username=$username",HttpRequest::METH_POST);
 #   try{
  #      $Rq -> send();
        
   # }catch (HttpException $ex)
   # {
   #     echo $ex;
   # }
}
?>

<?php 
    
//ob_start();

if(isset($_POST['submit']))
{
    
    
    if(isset($_POST['user_name'],$_POST['user_pswd'],$_POST['token'])){

        if(server::login($_POST['user_name'],$_POST['user_pswd'],$_POST['token'])){
            
            //ob_end_clean();
            echo "<script> alert('Login Sucess') </script>";
            echo "Welcome Admin"."<br/>";
            echo "SSS Assignment"."<br/>";
        }
        else{
        
                echo "<script> alert('Login Failed') </script>";
                echo "Login Failed ! "."<br/>"."Authorization Failed!! Please reset!";
        }
        
        }

}



class server{
public static function generate(){

    
return $_SESSION['token']=base64_encode(openssl_random_pseudo_bytes(32));

}

public static function login($username, $password,$token){

    if($username=="admin" && $password=="123" && isset($_POST['token'])&& $token===$_POST['token'])
    {
        unset($_POST['token']);
        return true;
    }
    else
    {
        return false;
        
    }
}






}




?>

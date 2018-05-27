<?php
class users{
	public function __construct(){
		try{
			require('config.php');
			$this->connexion=new PDO('mysql:host='.$host.';dbname='.$db,$user,$pass, array (PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'UTF8\''));
            mysql_query("SET NAMES 'utf8'"); 
		}
		catch(PDOExeption $m)
		{
			echo 'erreur'.$m->getMessage();
		}
	}

    public function valide_user($login,$motdepasse){
    	$sql="SELECT login,motdepasse,type from users Where login='$login' && motdepasse='$motdepasse'";
        $res=$this->connexion->query($sql);
        $test=$res->fetch(PDO::FETCH_ASSOC);
        return $test;
    	
    
}
    public function get_users(){
        $sql="SELECT login,motdepasse,type from users WHERE type!='admin'";
        $res=$this->connexion->query($sql);
        while($txt=$res->fetch(PDO::FETCH_ASSOC)){
        $tab[]=$txt;
        }
    return @$tab;
    }
        
    

public function modif_user($login,$Nlogin,$motdepasse){
    	$sql="UPDATE  users SET login='$Nlogin',motdepasse='$motdepasse'  WHERE login='$login'";
    	$req=$this->connexion->prepare($sql);
    	$test=$req->execute();
    	if($test){
    	return true;
    	}else return false;
}
public function modif_user1($login,$Nlogin,$motdepasse,$type){
        $sql="UPDATE  users SET login='$Nlogin',motdepasse='$motdepasse',type='$type'  WHERE login='$login'";
        $req=$this->connexion->prepare($sql);
        $test=$req->execute();
        if($test){
        return true;
        }else return false;
}
    public function supp_user($login){
        $sql="delete from users where login='$login'";
        $req=$this->connexion->prepare($sql);
        $req->execute();
        return true;
        }
    public function exist_user($login){
    	$sql="SELECT login from users Where login='$login'";
    	$res=$this->connexion->query($sql);
    	$test=$res->fetch(PDO::FETCH_ASSOC);
    	if(!empty($test)){
    		return false;
    	}else
    	return true;
 
    
}
    public function get_user($login){
        $sql="SELECT login,motdepasse,type from users Where login='$login'";
        $res=$this->connexion->query($sql);
        $test=$res->fetch(PDO::FETCH_ASSOC);
        return $test;
 
    
}
    public function ajt_user($login,$motdepasse,$type){
        $sql="insert into users values('','$login','$motdepasse','$type')";
        $req=$this->connexion->prepare($sql);
        $s=$req->execute();


        if($s){
        return true;
    }
    else return false;
    }

}

<?php
class chiffres{
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

    public function aff_chiffre($type){
    	$sql="SELECT valeur from chiffres Where type='$type'";
    	$res=$this->connexion->query($sql);
    	$txt=$res->fetch(PDO::FETCH_ASSOC);
    		return $txt;
    	
    
}
    public function modif_chiffre($valeur,$type){
    	$sql="UPDATE  chiffres SET valeur='$valeur' WHERE type='$type'";
    	$req=$this->connexion->prepare($sql);
    	$test=$req->execute();
    	if($test){
    	return true;
    	}else return true;
}
        public function recherche($search){
            $sql = "SELECT type,valeur FROM chiffres WHERE type Like '%$search%' ";
            $res=$this->connexion->query($sql);
            while($txt=$res->fetch(PDO::FETCH_ASSOC)){
            $tab[]=$txt;
            }
            if (!empty($tab)) {
                return @$tab;
            }else{
               return "";
            }
            
        
        }

}

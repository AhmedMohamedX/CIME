<?php
class valeurs{
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

    public function aff_valeur($type){
    	$sql="SELECT texte from valeurs Where type='$type'";
    	$res=$this->connexion->query($sql);
    	$txt=$res->fetch(PDO::FETCH_ASSOC);
    		return $txt;
    	
    
}
        public function modif_val($id,$type,$texte){
        $sql="UPDATE  valeurs SET type='$type',texte='$texte'  WHERE id='$id'";
        $req=$this->connexion->prepare($sql);
        $test=$req->execute();
        if($test){
        return true;
        }else return false;
}
        public function get_vals(){
             $sql="SELECT * from valeurs  ";
             $res=$this->connexion->query($sql);
        while($txt=$res->fetch(PDO::FETCH_ASSOC)){
            $tab[]=$txt;
        }

    return @$tab;
        
   
}
            public function get_val($id){
      $sql="SELECT * from valeurs Where id='$id'";
      $res=$this->connexion->query($sql);
      $txt=$res->fetch(PDO::FETCH_ASSOC);
            return $txt;
      }

}

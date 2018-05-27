<?php
class tarifs{
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

        public function aff_tarif($nom,$type){
             $sql="SELECT * from tarifs Where nom='$nom' && type='$type'";
             $res=$this->connexion->query($sql);
             $txt=$res->fetch(PDO::FETCH_ASSOC);
        
                   return $txt;
        
   
}        public function aff_tarifs(){
             $sql="SELECT * from tarifs  ";
             $res=$this->connexion->query($sql);
        while($txt=$res->fetch(PDO::FETCH_ASSOC)){
            $tab[]=$txt;
        }

    return @$tab;
        
   
}
            public function get_tarif($id){
      $sql="SELECT * from tarifs Where id='$id'";
      $res=$this->connexion->query($sql);
      $txt=$res->fetch(PDO::FETCH_ASSOC);
            return $txt;
      }
              public function modif_tarf($id,$nom,$h,$p,$e,$s,$t){
        $sql="UPDATE  tarifs SET nom='$nom',nbrheures='$h',nbrprojets='$p',nbrenseignants='$e',nbrsalles='$s',tarif='$t'  WHERE id='$id'";
        $req=$this->connexion->prepare($sql);
        $test=$req->execute();
        if($test){
        return true;
        }else return false;
}
}

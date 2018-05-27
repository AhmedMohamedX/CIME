<?php
class equips{
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

    public function get_equips($plateforme){
        $sql="SELECT id,nom,photo,version from equipements WHERE plateforme='$plateforme'";
        $res=$this->connexion->query($sql);
        while($txt=$res->fetch(PDO::FETCH_ASSOC)){
            $tab[]=$txt;
        }
    return @$tab;
    }
                public function ajt_equip($nom,$version,$plateforme,$photo){
        $sql="insert into equipements values('','$plateforme','$nom','$photo','$version')";
        $req=$this->connexion->prepare($sql);
        $s=$req->execute();


        if($s){
        return true;
    }
    else return false;
    } 
        public function supp_equip($id){
        $sql="delete from equipements WHERE id='$id'";
        $req=$this->connexion->prepare($sql);
        $req->execute();
        return true;
        }
      public function get_equip($id){
      $sql="SELECT id,nom,version,photo,plateforme from equipements Where id='$id'";
      $res=$this->connexion->query($sql);
      $txt=$res->fetch(PDO::FETCH_ASSOC);
            return $txt;
      }
        public function modif_equip($id,$nom,$version,$photo){
        $sql="UPDATE  equipements SET nom='$nom',version='$version',photo='$photo'  WHERE id='$id'";
        $req=$this->connexion->prepare($sql);
        $test=$req->execute();
        if($test){
        return true;
        }else return false;
}

        public function recherche($search){
            $sql = "SELECT nom,plateforme,version FROM equipements WHERE nom Like '%$search%' OR plateforme Like '%$search%' OR version Like '%$search%' ";
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

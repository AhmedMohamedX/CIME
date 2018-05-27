<?php
class plans{
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

        public function aff_plans($plateforme){
             $sql="SELECT nom,fichier from plannings Where plateforme='$plateforme'";
             $res=$this->connexion->query($sql);
             while($txt=$res->fetch(PDO::FETCH_ASSOC)){
             $tab[]=$txt;
             }
        
            return @$tab;
        
   
}
        public function ajt_plan($nom,$plateforme,$photo){
        $sql="insert into plannings values('','$nom','$photo','$plateforme')";
        $req=$this->connexion->prepare($sql);
        $s=$req->execute();


        if($s){
        return true;
    }
    else return false;
    }
            public function aff_plans1($plateforme){
             $sql="SELECT id,nom,fichier from plannings Where plateforme='$plateforme'";
             $res=$this->connexion->query($sql);
             while($txt=$res->fetch(PDO::FETCH_ASSOC)){
             $tab[]=$txt;
             }
        
            return @$tab;
        
   
}
        public function supp_plan($id){
        $sql="delete from plannings WHERE id='$id'";
        $req=$this->connexion->prepare($sql);
        $req->execute();
        return true;
        }
                public function aff_plan($id){
      $sql="SELECT Fichier,nom,plateforme from plannings Where id='$id'";
      $res=$this->connexion->query($sql);
      $txt=$res->fetch(PDO::FETCH_ASSOC);
            return $txt;
      }
                                public function modif_plan($id,$nom,$photo){
        $sql="UPDATE  plannings SET nom='$nom',fichier='$photo'  WHERE id='$id'";
        $req=$this->connexion->prepare($sql);
        $test=$req->execute();
        if($test){
        return true;
        }else return false;
}
        public function recherche($search){
            $sql = "SELECT nom,plateforme,fichier FROM plannings WHERE nom Like '%$search%' OR plateforme Like '%$search%' ";
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

<?php
class res{
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


        public function ajt_res($ecole,$annee,$option,$plateforme,$nbre,$intitule,$dated,$datef,$tranches,$encadre,$encadrer,$complete,$completer,$demandeur,$date,$statut){
        $sql="insert into reservation values('','$ecole','$annee','$option','$plateforme','$nbre','$intitule','$dated','$datef','$tranches','$encadre','$encadrer','$complete','$completer','$demandeur','$date','$statut')";
        $req=$this->connexion->prepare($sql);
        $s=$req->execute();


        if($s){
        return true;
    }
    else return false;
    } 
        public function aff_demande($type){
        $sql="SELECT * from reservation WHERE statut='$type'";
        $res=$this->connexion->query($sql);
        while($txt=$res->fetch(PDO::FETCH_ASSOC)){
            $tab[]=$txt;
        }

    return @$tab;
    }
            public function supp_res($id){
        $sql="delete from reservation WHERE id='$id'";
        $req=$this->connexion->prepare($sql);
        $req->execute();
        return true;
        }
        public function set_res($id,$set){
        $sql="UPDATE  reservation SET statut='$set'  WHERE id='$id'";
        $req=$this->connexion->prepare($sql);
        $test=$req->execute();
        if($test){
        return true;
        }else return false;
}
        public function aff_demande1($id){
        $sql="SELECT * from reservation WHERE id='$id'";
      $res=$this->connexion->query($sql);
      $txt=$res->fetch(PDO::FETCH_ASSOC);
            return $txt;
        
    }
            public function aff_demande2($type,$plat){
        $sql="SELECT * from reservation WHERE statut='$type' AND plateforme='$plat' ";
        $res=$this->connexion->query($sql);
        while($txt=$res->fetch(PDO::FETCH_ASSOC)){
            $tab[]=$txt;
        }

    return @$tab;
    }
            public function aff_demande3($login,$etat){
        $sql="SELECT * from reservation WHERE demandeur='$login' AND statut='$etat'";
        $res=$this->connexion->query($sql);
        while($txt=$res->fetch(PDO::FETCH_ASSOC)){
            $tab[]=$txt;
        }

    return @$tab;
    }


}

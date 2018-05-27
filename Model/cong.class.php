<?php
class cong{
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


        public function ajt_cong($nom,$prenom,$fonction,$responsable,$dated,$datef,$etat,$demandeur,$date){
        $sql="insert into conges values('','$nom','$prenom','$fonction','$responsable','$dated','$datef','$etat','$demandeur','$date')";
        $req=$this->connexion->prepare($sql);
        $s=$req->execute();


        if($s){
        return true;
    }
    else return false;
    } 
                public function aff_cong($login,$etat){
        $sql="SELECT * from conges WHERE demandeur='$login' AND etat='$etat'";
        $res=$this->connexion->query($sql);
        while($txt=$res->fetch(PDO::FETCH_ASSOC)){
            $tab[]=$txt;
        }

    return @$tab;
    }
        public function aff_cong1($id){
        $sql="SELECT * from conges WHERE id='$id'";
      $res=$this->connexion->query($sql);
      $txt=$res->fetch(PDO::FETCH_ASSOC);
            return $txt;
        
    }
                public function aff_cong2($etat,$resp){
        $sql="SELECT * from conges WHERE etat='$etat' AND responsable='$resp' ";
        $res=$this->connexion->query($sql);
        while($txt=$res->fetch(PDO::FETCH_ASSOC)){
            $tab[]=$txt;
        }

    return @$tab;
    }
            public function set_cong($id,$set){
        $sql="UPDATE  conges SET etat='$set'  WHERE id='$id'";
        $req=$this->connexion->prepare($sql);
        $test=$req->execute();
        if($test){
        return true;
        }else return false;
}
                public function aff_cong3($etat){
        $sql="SELECT * from conges WHERE etat='$etat'  ";
        $res=$this->connexion->query($sql);
        while($txt=$res->fetch(PDO::FETCH_ASSOC)){
            $tab[]=$txt;
        }

    return @$tab;
    }
                public function supp_cong($id){
        $sql="delete from conges WHERE id='$id'";
        $req=$this->connexion->prepare($sql);
        $req->execute();
        return true;
        }

}

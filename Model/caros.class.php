<?php
class caros{
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

    public function get_caro($ordre){
        $sql="SELECT nom from carousel WHERE ordre='$ordre'";
        $res=$this->connexion->query($sql);
        $txt=$res->fetch(PDO::FETCH_ASSOC);
    		return $txt;
    }
        public function get_caro1($id){
        $sql="SELECT * from carousel WHERE id='$id'";
        $res=$this->connexion->query($sql);
        $txt=$res->fetch(PDO::FETCH_ASSOC);
    		return $txt;
    }
        public function get_caros(){
        $sql="SELECT * from carousel ";
        $res=$this->connexion->query($sql);
        while($txt=$res->fetch(PDO::FETCH_ASSOC)){
            $tab[]=$txt;
        }

    return @$tab;
    }
        public function supp_car($id){
        $sql="delete from carousel WHERE id='$id'";
        $req=$this->connexion->prepare($sql);
        $req->execute();
        return true;
        }
                public function ajt_car($ordre,$nom){
        $sql="insert into carousel values('','$nom','$ordre')";
        $req=$this->connexion->prepare($sql);
        $s=$req->execute();


        if($s){
        return true;
    }
    else return false;
    } 
        public function exist($ordre){
        $sql="SELECT * from carousel WHERE ordre='$ordre'";
        $res=$this->connexion->query($sql);
        $txt=$res->fetch(PDO::FETCH_ASSOC);
    		if (empty($txt)) {
    			return true;
    		}else 
    		return false;
    }
        public function modif_car($id,$ordre,$nom){
        $sql="UPDATE  carousel SET nom='$nom',ordre='$ordre'  WHERE id='$id'";
        $req=$this->connexion->prepare($sql);
        $test=$req->execute();
        if($test){
        return true;
        }else return false;
}
}

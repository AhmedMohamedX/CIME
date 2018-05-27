<?php
class tem{
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

    public function get_temoig(){
        $sql="SELECT * from témoignages ";
        $res=$this->connexion->query($sql);
        while($txt=$res->fetch(PDO::FETCH_ASSOC)){
            $tab[]=$txt;
        }
    return @$tab;
    }
            public function ajt_tem($nom,$fonction,$texte,$photo){
        $sql="insert into témoignages values('','$texte','$nom','$photo','$fonction')";
        $req=$this->connexion->prepare($sql);
        $s=$req->execute();


        if($s){
        return true;
    }
    else return false;
    } 
            public function supp_tem($id){
        $sql="delete from témoignages WHERE id='$id'";
        $req=$this->connexion->prepare($sql);
        $req->execute();
        return true;
        }
                    public function get_tem($id){
      $sql="SELECT * from témoignages Where id='$id'";
      $res=$this->connexion->query($sql);
      $txt=$res->fetch(PDO::FETCH_ASSOC);
            return $txt;
      }
                          public function modif_tem($id,$nom,$fonction,$texte,$photo){
        $sql="UPDATE  témoignages SET nom='$nom',texte='$texte',photo='$photo',fonction='$fonction'  WHERE id='$id'";
        $req=$this->connexion->prepare($sql);
        $test=$req->execute();
        if($test){
        return true;
        }else return false;
}
}

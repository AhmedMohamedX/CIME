<?php
class histos{
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

    public function get_histo(){
        $sql="SELECT * from historique ORDER BY date ASC ";
        $res=$this->connexion->query($sql);
        while($txt=$res->fetch(PDO::FETCH_ASSOC)){
            $tab[]=$txt;
        }
    return @$tab;
    }
    public function supp_his($id){
        $sql="delete from historique where id='$id'";
        $req=$this->connexion->prepare($sql);
        $req->execute();
        return true;
        }
    public function ajt_his($titre,$texte,$date,$photo){
        $sql="insert into historique values('','$titre','$texte','$date','$photo')";
        $req=$this->connexion->prepare($sql);
        $s=$req->execute();


        if($s){
        return true;
    }
    else return false;
    } 
            public function get_his($id){
    	$sql="SELECT * from historique Where id='$id'";
    	$res=$this->connexion->query($sql);
    	$txt=$res->fetch(PDO::FETCH_ASSOC);
    		return $txt;
    	}
    public function modif_his($id,$titre,$date,$texte,$photo){
        $sql="UPDATE  historique SET titre='$titre',date='$date',photo='$photo',texte='$texte'  WHERE id='$id'";
        $req=$this->connexion->prepare($sql);
        $test=$req->execute();
        if($test){
        return true;
        }else return false;
}
}

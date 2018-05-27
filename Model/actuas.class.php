<?php
class actuas{
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

    public function get_actuas(){
        $sql="SELECT photo,date,texte,titre,id from actualites ORDER BY date desc ";
        $res=$this->connexion->query($sql);
        while($txt=$res->fetch(PDO::FETCH_ASSOC)){
            $tab[]=$txt;
        }
    return @$tab;
    }
        public function get_actua($id){
    	$sql="SELECT photo,date,texte,titre,id from actualites Where id='$id'";
    	$res=$this->connexion->query($sql);
    	$txt=$res->fetch(PDO::FETCH_ASSOC);
    		return $txt;
    	}
    	 public function get_numrows(){
    	$sql="SELECT * from actualites ";
        $res=$this->connexion->query($sql);
        while($txt=$res->fetch(PDO::FETCH_ASSOC)){
            $tab[]=$txt;
        }
    	$txt1 = count($tab);
    		return $txt1;
    	}
            public function ajt_act($titre,$texte,$date,$photo){
        $sql="insert into actualites values('','$date','$texte','$titre','$photo')";
        $req=$this->connexion->prepare($sql);
        $s=$req->execute();


        if($s){
        return true;
    }
    else return false;
    }    
    public function supp_act($id){
        $sql="delete from actualites where id='$id'";
        $req=$this->connexion->prepare($sql);
        $req->execute();
        return true;
        }
        public function modif_act($id,$titre,$date,$texte,$photo){
        $sql="UPDATE  actualites SET titre='$titre',date='$date',photo='$photo',texte='$texte'  WHERE id='$id'";
        $req=$this->connexion->prepare($sql);
        $test=$req->execute();
        if($test){
        return true;
        }else return false;
}
    	public function recherche($search){
            $sql = "SELECT photo,date,texte,titre,id FROM actualites WHERE titre Like '%$search%' ";
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

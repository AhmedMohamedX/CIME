<?php
class contacts{
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

    public function get_contacts(){
         $sql="SELECT id,nom,fonction,mail,linkedin,texte,photo from contacts WHERE fonction!='Directeur & Fondateur - CIME'";
        $res=$this->connexion->query($sql);
        while($txt=$res->fetch(PDO::FETCH_ASSOC)){
            $tab[]=$txt;
        }
    return @$tab;
    }
    public function get_directeur(){
        $sql="SELECT id,nom,fonction,mail,linkedin,texte,photo from contacts WHERE fonction='Directeur & Fondateur - CIME'";
        $res=$this->connexion->query($sql);
    	$txt=$res->fetch(PDO::FETCH_ASSOC);
    	return $txt;
    }
        public function ajt_cont($nom,$fonction,$mail,$linkedin,$texte,$photo){
        $sql="insert into contacts values('','$nom','$fonction','$mail','$linkedin','$texte','$photo')";
        $req=$this->connexion->prepare($sql);
        $s=$req->execute();


        if($s){
        return true;
    }
    else return false;
    }    
        public function supp_cont($id){
        $sql="delete from contacts where id='$id'";
        $req=$this->connexion->prepare($sql);
        $req->execute();
        return true;
        }
        public function get_cont($id){
        $sql="SELECT id,nom,fonction,mail,linkedin,texte,photo from contacts Where id='$id'";
        $res=$this->connexion->query($sql);
        $test=$res->fetch(PDO::FETCH_ASSOC);
        return $test;
 
    
}
        public function modif_cont($id,$nom,$fonction,$mail,$link,$texte,$photo){
        $sql="UPDATE  contacts SET nom='$nom',fonction='$fonction',mail='$mail',linkedin='$link',texte='$texte',photo='$photo'  WHERE id='$id'";
        $req=$this->connexion->prepare($sql);
        $test=$req->execute();
        if($test){
        return true;
        }else return false;
}

        public function recherche($search){
            $sql = "SELECT nom,fonction,mail FROM contacts WHERE nom Like '%$search%' OR fonction Like '%$search%' ";
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

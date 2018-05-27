<?php
class faqs{
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

    public function aff_faqs(){
    	$sql="SELECT * from faq ";
    	$res=$this->connexion->query($sql);
    	while($txt=$res->fetch(PDO::FETCH_ASSOC)){
             $tab[]=$txt;
             }
        
            return @$tab;
    	
    
}
        public function ajt_faq($question,$response){
        $sql="insert into faq values('','$question','$response')";
        $req=$this->connexion->prepare($sql);
        $s=$req->execute();


        if($s){
        return true;
    }
    else return false;
    } 
        public function supp_faq($id){
        $sql="delete from faq where id='$id'";
        $req=$this->connexion->prepare($sql);
        $req->execute();
        return true;
        }
            public function get_faq($id){
        $sql="SELECT * from faq Where id='$id'";
        $res=$this->connexion->query($sql);
        $test=$res->fetch(PDO::FETCH_ASSOC);
        return $test;
 
    
}
public function modif_faq($id,$question,$response){
    	$sql="UPDATE  faq SET question='$question',reponse='$response'  WHERE id='$id'";
    	$req=$this->connexion->prepare($sql);
    	$test=$req->execute();
    	if($test){
    	return true;
    	}else return false;
}

        public function recherche($search){
        $sql="SELECT * from faq WHERE question Like '%$search%' OR reponse Like '%$search%' ";
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

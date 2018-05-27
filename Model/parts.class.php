<?php
class parts{
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

        public function aff_parts($type){
             $sql="SELECT id,logo,lien,type from partenaires Where type='$type'";
             $res=$this->connexion->query($sql);
             while($txt=$res->fetch(PDO::FETCH_ASSOC)){
             $tab[]=$txt;
             }
        
            return @$tab;
        
   
}
      public function aff_parts_all(){
             $sql="SELECT logo,lien from partenaires ";
             $res=$this->connexion->query($sql);
             while($txt=$res->fetch(PDO::FETCH_ASSOC)){
             $tab[]=$txt;
             }
        
            return @$tab;
        
   
}
    public function supp_part($id){
        $sql="delete from partenaires WHERE id='$id'";
        $req=$this->connexion->prepare($sql);
        $req->execute();
        return true;
        }
            public function ajt_part($type,$lien,$logo){
        $sql="insert into partenaires values('','$logo','$type','$lien')";
        $req=$this->connexion->prepare($sql);
        $s=$req->execute();


        if($s){
        return true;
    }
    else return false;
    } 
            public function aff_part($id){
      $sql="SELECT id,logo,lien,type from partenaires Where id='$id'";
      $res=$this->connexion->query($sql);
      $txt=$res->fetch(PDO::FETCH_ASSOC);
            return $txt;
      }
              public function modif_part($id,$type,$lien,$logo){
        $sql="UPDATE  partenaires SET type='$type',lien='$lien',logo='$logo'  WHERE id='$id'";
        $req=$this->connexion->prepare($sql);
        $test=$req->execute();
        if($test){
        return true;
        }else return false;
}
}

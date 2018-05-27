<?php
class infos{
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

    public function aff_infos(){
    	$sql="SELECT * from infos  ";
    	$res=$this->connexion->query($sql);
    	$txt=$res->fetch(PDO::FETCH_ASSOC);
    		return $txt;
    	
    
}
    public function modif_info($adr,$F,$P,$M,$H){
        $sql="UPDATE  infos SET adresse='$adr',telF='$F',telP='$P',mail='$M',horaires='$H' ";
        $req=$this->connexion->prepare($sql);
        $test=$req->execute();
        if($test){
        return true;
        }else return false;
}

}

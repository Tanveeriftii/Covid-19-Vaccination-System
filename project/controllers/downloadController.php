<?php	

require_once 'models/db_config.php';


if (isset($_POST["btn_certificate"])){

	
    $_SESSION["loggedpublic"] = $name;
    $_SESSION["nid"] = $nid;


    header("Location: downloadVaccineCertificate.php ");



}









function getPublicCertificate($nid){
		$query ="select c.*,p.name as 'p_name',p.nid as 'p_nid',p.gender as 'p_gender',p.address as 'p_address',p.occupation as 'p_occupation', p.center as 'p_center'
         from publiccertificate c left join publicreg p on c.c_id = p.nid WHERE c_id = $nid";
		
		$rs = get($query);
		if(count($rs)>0){
		return $rs[0];
		}
		else{
			return false;
		}
		
	}


    ?>



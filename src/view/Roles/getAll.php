<?php
//print_r($data);
foreach ($data as $role) {
   echo $role->getId().$role." ".$role->getNom()."<br/>";
}
?>
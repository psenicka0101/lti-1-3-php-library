<?php
namespace IMSGlobal\LTI;

interface Database {
    public function find_registration_by_issuer($iss, $extraid);
    public function find_deployment($iss, $extraid, $deployment_id);
}

?>

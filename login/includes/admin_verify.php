<?php
class Admin_Verify extends DbConn
{
    public function verifyUser($uid, $verify)
    {
        try {
            $vdb = new DbConn;
            $tbl_admin = $vdb->tbl_admin;
            $verr = '';

        // prepare sql and bind parameters
        $vstmt = $vdb->conn->prepare('UPDATE '.$tbl_admin.' SET verified = :verify WHERE id = :uid');
            $vstmt->bindParam(':uid', $uid);
            $vstmt->bindParam(':verify', $verify);
            $vstmt->execute();

        } catch (PDOException $v) {

            $verr = 'Error: ' . $v->getMessage();

        }

    //Determines returned value ('true' or error code)
    $resp = ($verr == '') ? 'true' : $verr;

        return $resp;

    }
}

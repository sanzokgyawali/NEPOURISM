<?php
class localItem extends common
{
    public function getLocalItems()
    {
        $sql="select * from tbl_local_items where route_id=$id";
        return $this->select($sql);
    }
}
?>
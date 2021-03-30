<?php
class FirstPageContents
{
    public $myLinkToAdmin;

    public function __construct()
    {
        $this->mLinkToAdmin = Link::ToAdmin();
    }
}
?>
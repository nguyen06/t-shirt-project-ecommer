<?php
    class first_page_contents
    {
        public $mLinkToAdmind;

        public function __construct()
        {
            $this->mLinkToAdmin = Link::ToAdmin();
        }
    }

?>
<?php
class StoreAdmin
{
    public $mSiteUrl;
    //define template for page menu
    public $mMenuCell = 'blank.tpl';
    //define the template file for the page contents
    public $mContentsCell = 'blank.tpl';

    public function __construct()
    {
        $this->mSiteUrl = Link::Build('','htpps');

        //enfore page to be accessed through HTTPS if USE_SSL is on
        if(USE_SSL == 'yes' && getenv('HTTPS') != 'on' )
        {
            header('Location:https://'.getenv('SERVER_NAME').getenv('REQUEST_URI'));
            exit();
        }
    }
    public function init()
    {
        // If admin is not logged in, load the admin_login template
        if(!(isset($_SESSION['admin_logged'])) || $_SESSION['admin_logged'] != true)
        {
            $this->mContentsCell = 'admin_login.tpl';
        }else{
            // If admin is logged in, load the admin menu page
            $this->mMenuCell = 'admin_menu.tpl';

            //If logged out
            if(isset($_GET['page']) && ($_GET['page'] == 'Logout'))
            {
                unset($_SESSION['admin_logged']);
                header('Location: ' .Link::ToAdmin());

                exit();
            }
        }
    }

}

?>
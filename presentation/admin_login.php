<?php
class AdminLogin{
    public $mUsername;
    public $mLoginMessage="";
    public $mLinkToAdmin;
    public $mLinkToIndex;

    public function __construct()
    {
        // Verify if the correct username and passpord have been supplied
        if(isset($_POST['submit']))
        {
            if($_POST['username'] == ADMIN_USERNAME && $_POST['password'] == ADMIN_PASSWORD)
            {
                $_SESSION['admin_logged'] = true;

                header('Location: ' . Link::ToAdmin());
                exit();
            }
            else{
                $this->mLoginMessage = 'Login failed. Please try again';
            }

            $this->mLinkToAdmin = Link::ToAdmin();
            $this->mLinkToIndex = Link::ToIndex();
        }
    }
}

?>
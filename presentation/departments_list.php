<?php
    // Manages the departments list
    class DepartmentsList
    {
        // Plubic variables available in department_list.tpl smarty templey 
        public $mSelectedDepartment = 0;
        public $mDepartments;

        // Constructor reads query string parameter
        public function __construct()
        {
            //If DepartmentID exists in the query string, we are visiting a department
            if(isset($_GET['DepartmentId']))
                $this->mSelectedDepartment = (int)$_GET['DepartmentId'];
            elseif(isset($_GET['ProductId']) && isset($_SESSION['link_to_continue_shopping']))
            {
                $continue_shopping = Link::QueryStringToArray($_SESSION['link_to_continue_shopping']);

                if(array_key_exists('DepartmentId',$continue_shopping))
                    $this->mSelectDepartedDepartment = (int)$continue_shopping['DepartmentId'];
            }
        }

        // Calls business tier method to read departments list and create their links
        public function init()
        {
            
            // Get the list of department from the business tier
            $this->mDepartments = Catalog::GetDepartments();

            //Create the department links
            for($i=0; $i < count($this->mDepartments); $i++)
                // $this->mDepartments[$i]['link_to_department'] = 'index.php?DepartmentID='.$this->mDepartments[$i]['department_id'];
                $this->mDepartments[$i]['link_to_department'] = Link::ToDepartment($this->mDepartments[$i]['department_id']);

            }
    }
?>
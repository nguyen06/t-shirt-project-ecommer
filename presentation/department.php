<?php
//Deal with retreiving department details
class department
{
    public $mName;
    public $mDescription;

    //private members
    private $_mDepartmentId;
    private $_mCategoryId;

    public function __construct()
    {
        //We need to have departmentId in the query string
        if(isset($_GET['DepartmentId']))
            $this->_mDepartmentId = (int)$_GET['DepartmentId'];
        else
            trigger_error('DepartmentId not found');
        
        if(isset($_GET['CategoryId']))
            $this->_mCategoryId = (int)$_GET['CategoryId'];
    }

    public function init()
    {
        $department_details = Catalog::GetDepartmentDetails($this->_mDepartmentId);
        
        $this->mName = $department_details['name'];
        $this->mDescription = $department_details['description'];

        //if visiting a category
        if(isset($this->_mCategoryId))
        {
            $category_details = Catalog::GetCategoryDetails($this->_mCategoryId);
            $this->mName = $this->mName.' &raquo; '.$category_details['name'];
            $this->mDescription = $category_details['description'];
        }
    
    }
}
?>
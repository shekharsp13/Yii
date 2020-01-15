<?php 
class User extends CActiveRecord
{
    public $username;
    public $password;
    
    private $_identity;
    public function rules()
    {
        return array(
            // username and password are required
            array('username, password', 'required'),
            
           
        );
    }
    

    
}

?>
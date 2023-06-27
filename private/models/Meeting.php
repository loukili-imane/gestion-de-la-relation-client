<?php
class Meeting extends Model{

    public function validate($DATA)
    {
        $this->errors = array();

        //check for class name
        if(empty($DATA['class']) || !preg_match('/^[a-z A-Z0-9]+$/', $DATA['class']))
        {
            $this->errors['class'] = "Only letters & numbers allowed in class name";
        }
 
        if(count($this->errors) == 0)
        {
            return true;
        }

        return false;
    }
}


?>
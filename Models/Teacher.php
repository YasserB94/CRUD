<?php
    class Teacher{
        private int $id;
        private string $name;
        
        public function __construct(int $teacherId, string $teachername){

            $this->id = $teacherId;
            $this->name = $teachername;
         
        }

        public function getID()
        {
            return $this->id;
        }

        public function getName(){
            return $this->name;
        }
    
    }
?>



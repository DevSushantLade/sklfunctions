<?php
    namespace sklfunctions;

    class sklfunctions{
        public function GetGreetings(){
            return 'Hello World';
        }

        public function generate(){
            return $this->GetGreetings();
        }
    }
?>
<?php
    class calculation{
        public $numberA;
        public $numberB;
        public $operation;
        public $result;
        public function __construct($numberA, $numberB, $operation){
            $this->numberA = $numberA;
            $this->numberB = $numberB;
            $this->operation = $operation;
        }
        public function calculate(){
            switch ($this->operation) {
                case 'sum':
                    $this->result = $this->numberA + $this->numberB;
                    break;
                case 'minus':
                    $this->result = $this->numberA - $this->numberB;
                    break;
                case 'mul':
                    $this->result = $this->numberA * $this->numberB;
                    break;
                case 'div':
                    $this->result = $this->numberA / $this->numberB;
                    break;
                default:
                    $this->result = 0;
                    break;
            }
        }
    }
    if(isset($_POST["submit"])){
        $numberA = $_POST["numberA"];
        $numberB = $_POST["numberB"];
        $operation = $_POST["operation"];
        $cal = new calculation($numberA, $numberB, $operation);
        $cal->calculate();
        $funcCal = $cal->result;
    }


    function calcAreaCircle($radius){
        $pi = 3.14;
        $area = $pi * $radius * $radius;
        return $area;
    }
    function calcRadisCircle($area){
        $pi = 3.14;
        $radius = sqrt($area / $pi);
        return $radius;
    }
    if(isset($_POST["submitCircle"])){
        $superficies = $_POST["superficies"];
        $radius = $_POST["radius"];
        if($superficies != "" && $radius != ""){
            $message = "<span>Please enter only superficies or radius</span>";
        }
        if($superficies != ""){
            $radius = calcRadisCircle($superficies);
        }
        if($radius != ""){
            $superficies = calcAreaCircle($radius);
        }
    }

    class ReplaceString{
        public $findString;
        public $replaceString;
        public $inputString;
        public $result;
        public function __construct($findString, $replaceString, $inputString){
            $this->findString = $findString;
            $this->replaceString = $replaceString;
            $this->inputString = $inputString;
        }
        public function replace(){
            $this->result = str_replace($this->findString, $this->replaceString, $this->inputString);
        }
    }

    if(isset($_POST["submitString"])){
        $findString = $_POST["findString"];
        $replaceString = $_POST["replaceString"];
        $inputString = $_POST["inputString"];
        $replace = new ReplaceString($findString, $replaceString, $inputString);
        $replace->replace();
        $funcReplace = $replace->result;
    }
?>
class ParkingSystem {
    /**
     * @param Integer $big
     * @param Integer $medium
     * @param Integer $small
     */
    function __construct($big, $medium, $small) {
        $this->big=$big;
        $this->medium=$medium;
        $this->small=$small;
    }
  
    /**
     * @param Integer $carType
     * @return Boolean
     */
    function addCar($carType) {
        if ($carType == 1 ) {
            if ($this->big==0) {
                return false;
            }
            else {
                $this->big-- ;
                return true;
            }
    }
     	else if ($carType == 2 ) {
            if ($this->medium==0) {
                return false;
            }
            else {
                $this->medium-- ;
                return true;
            }
    }
     	else if ($carType == 3) {
            if ($this->small==0) {
                return false;
            }
            else {
                $this->small--;
                return true;
            }
    }
    }
}
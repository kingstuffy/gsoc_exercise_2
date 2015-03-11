<?php

class Time{
    
    protected $minute;
    protected $format;

    //initializes the class variables
    public function __construct($hour, $minute) {
        $this->hour = intval($hour);
        $this->minute = intval($minute);
    }
    
    //fetches the angle
    public function getAngle()
    {
        return $this->calcAngle();
    }
    
    //calculates the angle between the hands of the clock
    private function calcAngle()
    {
        //converts the time to 12hrs time where applicable
        $hour = ($this->hour > 12) ? (24 - $this->hour) : $this->hour;
        $minute = $this->minute;
        //gets the angle the hour makes with 12
        $hour_angle = $this->calcHourAngle($hour, $minute);
        //gets the angle the minute makes with 12
        $minute_angle = $this->calcMinAngle($minute);
        //calculates the absolute difference in angle
        $angle_difference = abs($hour_angle - $minute_angle);
        return $angle_difference;
    }
    
    //calculates the angle the hour hand makes with 12
    private function calcHourAngle($hour, $minute)
    {
        //sets the angle to 0 if the hour is 12 or 1
        if($hour == 0 || $hour == 12)
        {
            $angle_from_hour = 0;
        }
        else{
            $angle_from_hour = ($hour / 12) * 360;
        }
        
        //takes into consideration the movement of the hour hand due to the minute hand
        if($minute == 60 || $minute == 0)
        {
            $angle_from_minute = 0;
        }
        else{
            $angle_from_minute = ($minute / 60) * 30;
        }
        $total_angle = $angle_from_hour + $angle_from_minute;
        
        return $total_angle;
    }
    
    //calculates the angle the minute hand makes with 12
    private function calcMinAngle($minute)
    {
        //sets the angle to 0 if the minute is 0
        if($minute == 0)
        {
            $angle_from_minute = 0;
        }
        else{
            $angle_from_minute = ($minute / 60) * 360;
        }
        
        return $angle_from_minute;
    }
    
    
    
}
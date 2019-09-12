<?php
/** 
 * Calculate Dates Functions
 * 
 * PHP version 7.2
 * 
 * @category Test
 * @package  Author
 * @author   Javier Ramirez <javierramirez@EXAMPLE.COM>
 * @license  http://milicense.com Licencia
 * @link     http://test.com
 */
class CalculateIntervalDates
{

    public $endDate;
    
    /**
     * Constructor for initial function
     * 
     * @param Datetime $datetime date give to make calculations
     */
    function __construct($datetime)
    {
    
        $this->start_datetime = new DateTime($datetime);
    
    }

    /**
     * Calculate a date with an interval to add a new date
     * 
     * @param DateTime     $datetime Date time given for calculate
     * @param DateInterval $interval  to add to the new date
     * 
     * @return $datetime_copy 
     */
    public static function addIntervalToDate($datetime, DateInterval $interval)
    {
        $datetime_copy = clone($datetime);
        $datetime_copy->add($interval);
        return $datetime_copy;
    }
    
    /**
     * Calculate a date with an interval to sub a new date
     * 
     * @param DateTime     $datetime Date time given from the constructor
     * @param DateInterval $interval  to sub to the new date
     * 
     * @return $datetime_copy
     */
    public static function subIntervalToDate(
        DateTime $datetime,
        DateInterval $interval
    ) {
        $datetime_copy = clone($datetime);
        $datetime_copy->sub($interval);
        return $datetime_copy;
    }
    
    /**
     * Calculate a date with an interval to add a new date
     * 
     * @param DateTime $endDate the date for the difference
     * 
     * @return DateTime is the difference for datetime
     */
    public function differenceOfDates($endDate)
    {
        return $this->start_datetime->diff($endDate);
    }
}
?>

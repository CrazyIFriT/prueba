<?php
/** 
 * Funcion para calculo de multiplicacion rusa.
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
    
    private $_datetime;
    /**
     * Constructor for initial function
     * 
     * @param $_datetime $_datetime date give to make calculations
     */
    function __construct($_datetime)
    {
    
        $this->start_datetime = new DateTime($_datetime);
    
    }

    /**
     * Calculate a date with an interval to add a new date
     * 
     * @param DateTime     $_datetime Date time given from the constructor
     * @param DateInterval $interval  to add to the new date
     * 
     * @return $datetime_copy 
     */
    public static function addIntervalToDate($_datetime, DateInterval $interval)
    {
        $datetime_copy = clone $_datetime;
        $datetime_copy->add($interval);
        return $datetime_copy;
    }
    
    /**
     * Calculate a date with an interval to sub a new date
     * 
     * @param DateTime     $_datetime Date time given from the constructor
     * @param DateInterval $interval  to sub to the new date
     * 
     * @return $datetime_copy
     */
    public static function subIntervalToDate(
        DateTime $_datetime,
        DateInterval $interval
    ) {
        $datetime_copy = clone $_datetime;
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
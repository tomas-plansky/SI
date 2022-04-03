<?php

require '../AbstractCondition.php';

/**
 * This class represents a condition, which checks whether the current time
 * is after or equal to the given time.
 * <p>
 * It uses the UNIX timestamp to determine the time.
 * 
 * @see AbstractCondition
 * @author Tomáš Plánský
 */
class TimeCondition extends AbstractCondition {
    
    /**
     * The time, which is compared to the current time.
     */
    private $time;
    
    /**
     * Creates a new instance of TimeCondition.
     * 
     * @param int $time The time to check
     * @param bool $inverted TRUE if the condition should be inverted, FALSE otherwise. Default is FALSE.
     */
    public function __construct(int $time, bool $inverted = false) {
        parent::__construct($inverted);
        $this->time = $time;
    }
    
    /**
     * Evaluates the condition by comparing the current time to the given time.
     * 
     * @return bool TRUE if the current time is after or equal to the given time,
     */
    public function evaluate(): bool {
        return time() >= $this->time;
    }
    
}
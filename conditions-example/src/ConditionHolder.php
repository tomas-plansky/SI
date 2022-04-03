<?php

/**
 * This class represents a holder, that holds a list
 * of conditions, which we can evaluate.
 * 
 * @author Tomáš Plánský
 */
class ConditionHolder {

    /**
     * The list of held conditions.
     */
    private $conditions;

    /**
     * Creates a new instance of ConditionHolder.
     */
    public function __construct() {
        $this->conditions = array();
    }

    /**
     * Adds a condition to the list.
     * 
     * @param ICondition $condition The condition to add
     */
    public function addCondition(ICondition $condition) {
        $this->conditions[] = $condition;
    }

    /**
     * Clears the list of conditions.
     */
    public function clearConditions() {
        $this->conditions = array();
    }

    /**
     * Evaluates the held conditions.
     * 
     * @return TRUE if all conditions are met, FALSE otherwise
     */
    public function evaluate(): bool {
        foreach ($this->conditions as $condition) {
            // Evaluate the condition and invert the result if necessary
            if ($condition->isInverted() === $condition->evaluate()) {
                // Condition is not met, return FALSE
                return false;
            }
            // Condition is met, continue
        }
        return true;
    }


}
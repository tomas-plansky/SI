<?php

/**
 * This interface represents a condition.
 * <p>
 * A great use-case for conditions is making a system that can be used
 * by the client to make certain actions only allowed if all conditions
 * defined by the client are met.
 * 
 * @author Tomáš Plánský
 */
interface ICondition
{
    /**
     * Evaluates the condition.
     * 
     * @return bool TRUE if the condition is met, FALSE otherwise
     */
    public function evaluate(): bool;

    /**
     * Checks whether the condition is inverted.
     * 
     * @return bool TRUE if the condition is inverted, FALSE otherwise
     */
    public function isInverted(): bool;

    /**
     * Sets the condition to be inverted.
     * 
     * @param bool $inverted TRUE if the condition should be inverted, FALSE otherwise
     */
    public function setInverted(bool $inverted);

}
<?php

/**
 * This class represents an abstract implementation of the ICondition interface.
 * 
 * @see ICondition
 * @author Tomáš Plánský
 */
abstract class AbstractCondition implements ICondition {

    protected bool $inverted;

    /**
     * Default condition constructor.
     * 
     * @param bool $inverted TRUE if the condition should be inverted, FALSE otherwise. Default is FALSE.
     */
    public function __construct(bool $inverted = false) {
        $this->inverted = $inverted;
    }

    public function isInverted(): bool{
        return $this->inverted;
    }

    public function setInverted(bool $inverted): void{
        $this->inverted = $inverted;
    }

}
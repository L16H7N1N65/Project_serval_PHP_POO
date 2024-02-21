<?php
abstract class AbstractBaseClass
{
    protected $_currentX;
    protected $_currentY;
    protected $_direction;
    
    // Abstract getters
    abstract public function getCurrentX();
    abstract public function getCurrentY();
    abstract public function getDirection();

    // Abstract setters
    abstract public function setCurrentX($currentX);
    abstract public function setCurrentY($currentY);
    abstract public function setDirection($direction);
}

class BaseClass extends AbstractBaseClass
{
    private $_dbh;
    private $_avatar_id;

    public function __construct($currentX, $currentY, $direction, $avatar_id)
    {
        $this->_dbh = new Database();
        $this->_currentX = $currentX;
        $this->_currentY = $currentY;
        $this->_direction = $direction;
        $this->_avatar_id = $avatar_id;
    }

    // Getters and setters for $_currentX, $_currentY and $_direction
    public function getCurrentX() {
        return $this->_currentX;
    }

    public function setCurrentX($currentX) {
        if (is_integer($currentX)) {
            $this->_currentX = $currentX;
        }
    }

    public function getCurrentY() {
        return $this->_currentY;
    }

    public function setCurrentY($currentY) {
        if (is_integer($currentY)) {
            $this->_currentY = $currentY;
        }
    }

    public function getDirection() {
        return $this->_direction;
    }

    public function setDirection($direction) {
        if (is_integer($direction)) {
            $this->_direction = $direction;
        }
    }

// Methods for checking possible movements

    private function _checkMove($newX, $newY) {
        $stmt = $this->_dbh->prepare("SELECT * FROM `obstacles` WHERE `x` = :x AND `y` = :y AND `avatar_id` = :avatar_id");
        $stmt->bindParam(':x', $newX);
        $stmt->bindParam(':y', $newY);
        $stmt->bindParam(':avatar_id', $this->_avatar_id);
        $stmt->execute();
        return $stmt->rowCount() == 0;
    }
    
    private function _checkDirection($newDirection) {
        $stmt = $this->_dbh->prepare("SELECT * FROM `obstacles` WHERE `x` = :x AND `y` = :y AND `avatar_id` = :avatar_id");
        $stmt->bindParam(':x', $this->_currentX);
        $stmt->bindParam(':y', $this->_currentY);
        $stmt->bindParam(':avatar_id', $this->_avatar_id);
        $stmt->execute();
        return $stmt->rowCount() == 0;

    }
    public function checkForward() {
        $newY = $this->_currentY + ($this->_direction == 0 ? 1 : ($this->_direction == 2 ? -1 : 0));
        $newX = $this->_currentX + ($this->_direction == 1 ? 1 : ($this->_direction == 3 ? -1 : 0));
        return $this->_checkMove($newX, $newY);
    }

    public function checkBack() {
        $newY = $this->_currentY - ($this->_direction == 0 ? 1 : ($this->_direction == 2 ? -1 : 0));
        $newX = $this->_currentX - ($this->_direction == 1 ? 1 : ($this->_direction == 3 ? -1 : 0));
        return $this->_checkMove($newX, $newY);
    }

    public function checkRight() {
        $newDirection = ($this->_direction + 1) % 4;
        return $this->_checkDirection($newDirection);
    }

    public function checkLeft() {
        $newDirection = ($this->_direction + 3) % 4; // same as -1 -> modulo
        return $this->_checkDirection($newDirection);
    }

    public function checkTurnRight() {
        return true;
    }

    public function checkTurnLeft() {
        return true;
    }

    // Methods for performing movements
    public function goForward() {
        if ($this->checkForward()) {
            $this->_currentY += $this->_direction == 0 ? 1 : ($this->_direction == 2 ? -1 : 0);
            $this->_currentX += $this->_direction == 1 ? 1 : ($this->_direction == 3 ? -1 : 0);
        }
    }

    public function goBack() {
        if ($this->checkBack()) {
            $this->_currentY -= $this->_direction == 0 ? 1 : ($this->_direction == 2 ? -1 : 0);
            $this->_currentX -= $this->_direction == 1 ? 1 : ($this->_direction == 3 ? -1 : 0);
        }
    }

    public function goRight() {
        if ($this->checkRight()) {
            $this->_direction = ($this->_direction + 1) % 4;
        }
    }

    public function goLeft() {
        if ($this->checkLeft()) {
            $this->_direction = ($this->_direction + 3) % 4;
        }
    }
}
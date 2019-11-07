<?php


class TimeTravel
{

    /**
     * @var DateTime
     */
    public $start;

    /**
     * @var DateTime
     */
    public $end;


//----------------------GETTERS AND SETTERS-------------------------//


    /**
     * @return DateTime
     */
    public function getStart()
    {
        return $this->start;
    }

    /**
     * @param DateTime $start
     * @return TimeTravel
     */
    public function setStart($start)
    {
        $this->start = $start;
        return $this;
    }

    /**
     * @return DateTime
     */
    public function getEnd()
    {
        return $this->end;
    }

    /**
     * @param DateTime $end
     * @return TimeTravel
     */
    public function setEnd($end)
    {
        $this->end = $end;
        return $this;
    }

//-----------------CONSTRUCTOR---------------------------//

public function __construct()
{
    $this -> start = new DateTime();
    $this -> end = new DateTime();
}

//-----------------METHODS---------------------------//

public function getTravelInfo() {

        $interval = $this->start->diff($this->end);
        return $interval ->format('il y a %Y années, %m mois, %d jours, %h heures, %i minutes et %s secondes entres les deux dates');
}

public function findDate(DateInterval $interval)
{
    $findDate = $this->start->sub($interval);
    return $findDate->format("d/m/Y");

}

public function backToFutureStepByStep(DatePeriod $step)
{
    $array =[];
    foreach ($step as $date) {
        $array[] .= $date ->format('M d Y A H:i') . "<br/>" ;
    }

    return $array;
}

}
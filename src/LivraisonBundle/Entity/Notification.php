<?php

namespace LivraisonBundle\Entity;
use SBC\NotificationsBundle\Model\BaseNotification;
use Doctrine\ORM\Mapping as ORM;

/**
 * Notification
 *
 * @ORM\Table(name="notification")
 * @ORM\Entity(repositoryClass="LivraisonBundle\Repository\NotificationRepository")
 */

class Notification extends BaseNotification implements \JsonSerializable
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */

    private $id;

     /**
     * @var bool
     * 
     * @ORM\Column(name="seens", type="boolean")
     */
    public $seens;

    public function __construct()
    {
        parent::__construct();
        $this->seens = false;
    }


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

     /**
     * @return boolean
     */
    public function isSeen()
    {
        return $this->seens;
    }

     /**
     * @param boolean $seens
     * @return BaseNotification
     */
    public function setSeens($seens)
    {
        $this->seens = true;
        
        return $this;
    }


    function jsonSerialize()
    {
        return get_object_vars($this);
    }
    
}


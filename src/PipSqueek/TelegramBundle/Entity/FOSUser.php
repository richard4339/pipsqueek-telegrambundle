<?php

namespace PipSqueek\TelegramBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User as BaseUser;

/**
 * FOSUser
 *
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 * @ORM\HasLifecycleCallbacks
 */
class FOSUser extends BaseUser
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    protected $id;

    /**
     * @param string $email
     *
     * @return FOSUser
     */
    public function setEmail($email)
    {

//        $this->setGravatar(get_gravatar($email));

        return parent::setEmail($email);
    }


}

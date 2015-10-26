<?php
namespace db\DbBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="Case")
 */
class Case
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id; 

    /**
     * @ORM\Column(type="integer", scale=2)
     */
    protected $suspectId;

    /**
     * @ORM\Column(type="integer", scale=2)
     * @ORM\OneToOne(targetEntity="Acme\UserBundle\Entity\User", inversedBy="lessons*removethis : name of the variable in user.php*")    
     * @ORM\JoinColumn(name="id", referencedColumnName="id")
     */
    protected $policeOfficerId;


}
<?php
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 *  @ORM\Table(name="formation")
 */
class  Formation
{
    /** @ORM\Id 
     * @ORM\Column(type="integer") 
     * @ORM\GeneratedValue 
     */
    private $id;
    /** @ORM\Column(type="string") **/
    private $nom;
     /** @ORM\Column(type="string") **/
    private $date;
     /** @ORM\Column(type="integer") **/
    private $duree;
 /**
     * Many formation have one lieu. This is the owning side.
     * @ORM\ManyToOne(targetEntity="Lieu", inversedBy="formations")
     * @ORM\JoinColumn(name="lieu_id", referencedColumnName="id")
     */
    private $lieu;

    public  function __construct()
    {

    }
    public function getId()
    {
        return $this->id;
    }

    public function setId()
    {
        $this->id = $id;
    }

    public function getNom()
    {
        return $this->nom;
    }

    public function setNom()
    {
        $this->nom = $nom;
    }
    public function getDate()
    {
        return $this->date;
    }

    public function setDate()
    {
        $this->date = $date;
    }
    public function getDuree()
    {
        return $this->duree;
    }

    public function setDuree()
    {
        $this->duree = $duree;
    }
    public function getLieu()
    {
        return $this->lieu;
    }

    public function setLieu()
    {
        $this->lieu= $lieu;
    }



}

?>
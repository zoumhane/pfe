<?php
/**
 * Created by PhpStorm.
 * User: AbdelHamid
 * Date: 25/03/2016
 * Time: 19:55
 */

namespace Documents;
use Doctrine\ODM\MongoDB\Mapping\Annotations as ODM;

/** @ODM\Document */
class Action
{

    /** @ODM\Id */
    private $id;
    /** @ODM\Field(type="string") */
    private $Nom;
    /** @ODM\Field(type="string") */
    private $Description;
    /**
     * @ODM\ReferenceMany(targetDocument="Etape")
     */
    private $etapes=array();

    /**
     * @return mixed
     */
    public function getEtapes()
    {
        return $this->etapes;
    }

    /**
     * @param mixed $etapes
     */
    public function setEtapes($etapes)
    {
        $this->etapes = $etapes;
    }

    /**
     * Action constructor.
     */
    public function __construct()
    {
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->Nom;
    }

    /**
     * @param mixed $Nom
     */
    public function setNom($Nom)
    {
        $this->Nom = $Nom;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->Description;
    }

    /**
     * @param mixed $Description
     */
    public function setDescription($Description)
    {
        $this->Description = $Description;
    }
}
<?php
/**
 * Created by PhpStorm.
 * User: Sami
 * Date: 03/11/2017
 * Time: 20:19
 */

namespace TuniParking\BackOfficeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * parking
 *
 * @ORM\Table(name="parking")
 * @ORM\Entity
 */
class Parking
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    protected $id;
    /**
     * @var string
     *
     * @ORM\Column(name="libelle", type="string", length=255, nullable=true)
     */
    private $libelle;

    /**
     * @var string
     *
     * @ORM\Column(name="contact", type="string", length=255, nullable=true)
     */
    private $contact;
    /**
     * @var string
     *
     * @ORM\Column(name="siteWeb", type="string", length=255, nullable=true)
     */
    private $siteWeb;
    /**
     * @var string
     *
     * @ORM\Column(name="adress", type="string", length=255, nullable=true)
     */
    private $adress;
    /**
     * @var float
     *
     * @ORM\Column(name="lat", type="float", length=255, nullable=true)
     */
    private $lat;
    /**
     * @var float
     *
     * @ORM\Column(name="long", type="float", length=255, nullable=true)
     */
    private $long;
    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=255, nullable=true)
     */
    private $type;
    /**
     * @var string
     *
     * @ORM\Column(name="covered", type="string", length=255, nullable=true)
     */
    private $covered;
    /**
     * @var string
     *
     * @ORM\Column(name="cameracurv", type="string", length=255, nullable=true)
     */
    private $cameracurv;
    /**
     * @var string
     *
     * @ORM\Column(name="handicappedfriendly", type="string", length=255, nullable=true)
     */
    private $handicappedfriendly;

    /**
     * @var string
     *
     * @ORM\Column(name="depannageauto", type="string", length=255, nullable=true)
     */
    private $depannageauto;

    /**
     * @var string
     *
     * @ORM\Column(name="guarded", type="string", length=255, nullable=true)
     */
    private $guarded;
    /**
     * @var string
     *
     * @ORM\Column(name="reservationadistance", type="string", length=255, nullable=true)
     */

    private $reservationadistance;
    /**
     * @var string
     *
     * @ORM\Column(name="logo", type="string", length=255, nullable=true)
     */
    private $logo;
    /**
     * @var integer
     *
     * @ORM\Column(name="nbrePlaceVide", type="integer", nullable=true)
     */
    private $nbrePlaceVide;
    /**
     * @var integer
     *
     * @ORM\Column(name="nbrePlaceTotal", type="integer", nullable=true)
     */
    private $nbrePlaceTotal;
    /**
     * @var float
     *
     * @ORM\Column(name="prixParHeure", type="float", nullable=true)
     */
    private $prixParHeure;
    /**
     * @var float
     *
     * @ORM\Column(name="prixParNuit", type="float", nullable=true)
     */
    private $prixParNuit;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * @param string $libelle
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;
    }

    /**
     * @return string
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * @param string $contact
     */
    public function setContact($contact)
    {
        $this->contact = $contact;
    }

    /**
     * @return string
     */
    public function getSiteWeb()
    {
        return $this->siteWeb;
    }

    /**
     * @param string $siteWeb
     */
    public function setSiteWeb($siteWeb)
    {
        $this->siteWeb = $siteWeb;
    }

    /**
     * @return string
     */
    public function getAdress()
    {
        return $this->adress;
    }

    /**
     * @param string $adress
     */
    public function setAdress($adress)
    {
        $this->adress = $adress;
    }

    /**
     * @return float
     */
    public function getLat()
    {
        return $this->lat;
    }

    /**
     * @param float $lat
     */
    public function setLat($lat)
    {
        $this->lat = $lat;
    }

    /**
     * @return float
     */
    public function getLong()
    {
        return $this->long;
    }

    /**
     * @param float $long
     */
    public function setLong($long)
    {
        $this->long = $long;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @return int
     */
    public function getNbrePlaceVide()
    {
        return $this->nbrePlaceVide;
    }

    /**
     * @param int $nbrePlaceVide
     */
    public function setNbrePlaceVide($nbrePlaceVide)
    {
        $this->nbrePlaceVide = $nbrePlaceVide;
    }

    /**
     * @return int
     */
    public function getNbrePlaceTotal()
    {
        return $this->nbrePlaceTotal;
    }

    /**
     * @param int $nbrePlaceTotal
     */
    public function setNbrePlaceTotal($nbrePlaceTotal)
    {
        $this->nbrePlaceTotal = $nbrePlaceTotal;
    }

    /**
     * @return float
     */
    public function getPrixParHeure()
    {
        return $this->prixParHeure;
    }

    /**
     * @param float $prixParHeure
     */
    public function setPrixParHeure($prixParHeure)
    {
        $this->prixParHeure = $prixParHeure;
    }

    /**
     * @return float
     */
    public function getPrixParNuit()
    {
        return $this->prixParNuit;
    }

    /**
     * @param float $prixParNuit
     */
    public function setPrixParNuit($prixParNuit)
    {
        $this->prixParNuit = $prixParNuit;
    }
}
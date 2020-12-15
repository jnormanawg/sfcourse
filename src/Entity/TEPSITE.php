<?php

namespace App\Entity;

use App\Repository\TEPSITERepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TEPSITERepository::class)
 */
class TEPSITE
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $T_EP_SITE_EP_ID;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $SITE;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $DM_SITE_DESC;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $XXAWG_STORE_NAME;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $XXAWG_STORE_CITY;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $XXAWG_STORE_ADD;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $XXAWG_STORE_PHONE;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $XXAWG_STORE_ZIP;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $T_EP_PARENT_STORE_ID;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTEPSITEEPID(): ?int
    {
        return $this->T_EP_SITE_EP_ID;
    }

    public function setTEPSITEEPID(int $T_EP_SITE_EP_ID): self
    {
        $this->T_EP_SITE_EP_ID = $T_EP_SITE_EP_ID;

        return $this;
    }

    public function getSITE(): ?string
    {
        return $this->SITE;
    }

    public function setSITE(string $SITE): self
    {
        $this->SITE = $SITE;

        return $this;
    }

    public function getDMSITEDESC(): ?string
    {
        return $this->DM_SITE_DESC;
    }

    public function setDMSITEDESC(string $DM_SITE_DESC): self
    {
        $this->DM_SITE_DESC = $DM_SITE_DESC;

        return $this;
    }

    public function getXXAWGSTORENAME(): ?string
    {
        return $this->XXAWG_STORE_NAME;
    }

    public function setXXAWGSTORENAME(string $XXAWG_STORE_NAME): self
    {
        $this->XXAWG_STORE_NAME = $XXAWG_STORE_NAME;

        return $this;
    }

    public function getXXAWGSTORECITY(): ?string
    {
        return $this->XXAWG_STORE_CITY;
    }

    public function setXXAWGSTORECITY(?string $XXAWG_STORE_CITY): self
    {
        $this->XXAWG_STORE_CITY = $XXAWG_STORE_CITY;

        return $this;
    }

    public function getXXAWGSTOREADD(): ?string
    {
        return $this->XXAWG_STORE_ADD;
    }

    public function setXXAWGSTOREADD(?string $XXAWG_STORE_ADD): self
    {
        $this->XXAWG_STORE_ADD = $XXAWG_STORE_ADD;

        return $this;
    }

    public function getXXAWGSTOREPHONE(): ?string
    {
        return $this->XXAWG_STORE_PHONE;
    }

    public function setXXAWGSTOREPHONE(?string $XXAWG_STORE_PHONE): self
    {
        $this->XXAWG_STORE_PHONE = $XXAWG_STORE_PHONE;

        return $this;
    }

    public function getXXAWGSTOREZIP(): ?string
    {
        return $this->XXAWG_STORE_ZIP;
    }

    public function setXXAWGSTOREZIP(string $XXAWG_STORE_ZIP): self
    {
        $this->XXAWG_STORE_ZIP = $XXAWG_STORE_ZIP;

        return $this;
    }

    public function getTEPPARENTSTOREID(): ?int
    {
        return $this->T_EP_PARENT_STORE_ID;
    }

    public function setTEPPARENTSTOREID(?int $T_EP_PARENT_STORE_ID): self
    {
        $this->T_EP_PARENT_STORE_ID = $T_EP_PARENT_STORE_ID;

        return $this;
    }
}

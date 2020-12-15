<?php

namespace App\Entity;

use App\Repository\TEPORGANIZATIONRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TEPORGANIZATIONRepository::class)
 */
class TEPORGANIZATION
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
    private $T_EP_ORGANIZATION_EP_ID;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $ORGANIZATION;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $DM_ORG_DESC;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTEPORGANIZATIONEPID(): ?int
    {
        return $this->T_EP_ORGANIZATION_EP_ID;
    }

    public function setTEPORGANIZATIONEPID(int $T_EP_ORGANIZATION_EP_ID): self
    {
        $this->T_EP_ORGANIZATION_EP_ID = $T_EP_ORGANIZATION_EP_ID;

        return $this;
    }

    public function getORGANIZATION(): ?string
    {
        return $this->ORGANIZATION;
    }

    public function setORGANIZATION(string $ORGANIZATION): self
    {
        $this->ORGANIZATION = $ORGANIZATION;

        return $this;
    }

    public function getDMORGDESC(): ?string
    {
        return $this->DM_ORG_DESC;
    }

    public function setDMORGDESC(string $DM_ORG_DESC): self
    {
        $this->DM_ORG_DESC = $DM_ORG_DESC;

        return $this;
    }
}

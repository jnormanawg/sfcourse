<?php

namespace App\Entity;

use App\Repository\AnkerRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=AnkerRepository::class)
 */
class Anker
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
    private $ankerid;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $anker_name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $author;

    /**
     * @ORM\Column(type="datetime")
     */
    private $last_updated;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAnkerid(): ?int
    {
        return $this->ankerid;
    }

    public function setAnkerid(int $ankerid): self
    {
        $this->ankerid = $ankerid;

        return $this;
    }

    public function getAnkerName(): ?string
    {
        return $this->anker_name;
    }

    public function setAnkerName(string $anker_name): self
    {
        $this->anker_name = $anker_name;

        return $this;
    }

    public function getAuthor(): ?string
    {
        return $this->author;
    }

    public function setAuthor(string $author): self
    {
        $this->author = $author;

        return $this;
    }

    public function getLastUpdated(): ?\DateTimeInterface
    {
        return $this->last_updated;
    }

    public function setLastUpdated(\DateTimeInterface $last_updated): self
    {
        $this->last_updated = $last_updated;

        return $this;
    }
}

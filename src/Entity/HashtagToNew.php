<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\HashtagToNewRepository")
 */
class HashtagToNew
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $new_id;

    /**
     * @ORM\Column(type="integer")
     */
    private $hashtag_id;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNewId(): ?int
    {
        return $this->new_id;
    }

    public function setNewId(int $new_id): self
    {
        $this->new_id = $new_id;

        return $this;
    }

    public function getHashtagId(): ?int
    {
        return $this->hashtag_id;
    }

    public function setHashtagId(int $hashtag_id): self
    {
        $this->hashtag_id = $hashtag_id;

        return $this;
    }
}

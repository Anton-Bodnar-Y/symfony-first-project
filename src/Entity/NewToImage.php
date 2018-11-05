<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\NewToImageRepository")
 */
class NewToImage
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
    private $image_id;

    /**
     * @ORM\Column(type="integer")
     */
    private $new_id;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getImageId(): ?int
    {
        return $this->image_id;
    }

    public function setImageId(int $image_id): self
    {
        $this->image_id = $image_id;

        return $this;
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
}

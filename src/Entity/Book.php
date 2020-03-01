<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

class Book
{
    private $id;

    private $title;

    private $author;

    private $release_date;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getAuthor(): ?string
    {
        return $this->author;
    }

    public function setAuthor(?string $author): self
    {
        $this->author = $author;

        return $this;
    }

    public function getReleaseDate(): ?int
    {
        return $this->release_date;
    }

    public function setReleaseDate(?int $release_date): self
    {
        $this->release_date = $release_date;

        return $this;
    }
}

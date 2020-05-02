<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass="App\Repository\TaskRepository")
 */
class Task
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true, options={"comment":"Нание задачи или мероприятия"})
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=255, options={"comment":"функционал"})
     */
    private $task_funct;

    /**
     * @ORM\Column(type="integer", nullable=true, options={"comment":"сколько человек необходимо"})
     */
    private $count;

    /**
     * @ORM\Column(type="date", nullable=true, options={"comment":"Дата с"})
     */
    private $date_start;

    /**
     * @ORM\Column(type="date", nullable=true, options={"comment":"Дата до"})
     */
    private $date_end;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getTaskFunct(): ?string
    {
        return $this->task_funct;
    }

    public function setTaskFunct(string $task_funct): self
    {
        $this->task_funct = $task_funct;

        return $this;
    }

    public function getCount(): ?int
    {
        return $this->count;
    }

    public function setCount(?int $count): self
    {
        $this->count = $count;

        return $this;
    }

    public function getDateStart(): ?\DateTimeInterface
    {
        return $this->date_start;
    }

    public function setDateStart(?\DateTimeInterface $date_start): self
    {
        $this->date_start = $date_start;

        return $this;
    }

    public function getDateEnd(): ?\DateTimeInterface
    {
        return $this->date_end;
    }

    public function setDateEnd(?\DateTimeInterface $date_end): self
    {
        $this->date_end = $date_end;

        return $this;
    }
}

<?php
// src/Entity/User.php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $lastname;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $firstname;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $childfirstname;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $arrivalbirth;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $birth;

    /**
     * @ORM\Column(type="string", length=1000, nullable=true)
     */
    private $comment;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Context", inversedBy="users")
     */
    private $context;



    public function __construct()
    {
        parent::__construct();
        $this->contexts = new ArrayCollection();
        $this->context = new ArrayCollection();
        // your own logic
    }

    public function getLastname(): ?string
    {
        return $this->lastname;
    }

    public function setLastname(string $lastname): self
    {
        $this->lastname = $lastname;

        return $this;
    }

    public function getFirstname(): ?string
    {
        return $this->firstname;
    }

    public function setFirstname(string $firstname): self
    {
        $this->firstname = $firstname;

        return $this;
    }

    public function getChildfirstname(): ?string
    {
        return $this->childfirstname;
    }

    public function setChildfirstname(?string $childfirstname): self
    {
        $this->childfirstname = $childfirstname;

        return $this;
    }

    public function getArrivalbirth(): ?string
    {
        return $this->arrivalbirth;
    }

    public function setArrivalbirth(?string $arrivalbirth): self
    {
        $this->arrivalbirth = $arrivalbirth;

        return $this;
    }

    public function getBirth(): ?\DateTimeInterface
    {
        return $this->birth;
    }

    public function setBirth(?\DateTimeInterface $birth): self
    {
        $this->birth = $birth;

        return $this;
    }

    public function getComment(): ?string
    {
        return $this->comment;
    }

    public function setComment(?string $comment): self
    {
        $this->comment = $comment;

        return $this;
    }

    /**
     * @return Collection|Context[]
     */
    public function getContext(): Collection
    {
        return $this->context;
    }

    public function addContext(Context $context): self
    {
        if (!$this->context->contains($context)) {
            $this->context[] = $context;
        }

        return $this;
    }

    public function removeContext(Context $context): self
    {
        if ($this->context->contains($context)) {
            $this->context->removeElement($context);
        }

        return $this;
    }


}
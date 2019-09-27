<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ContextRepository")
 */
class Context
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $name;




    /* start relation OneToMany ie 1 context for many articles*/
    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Articles", mappedBy="context")
     */
    private $articles;

    public function __construct()
    {
        $this->articles = new ArrayCollection();
        $this->news = new ArrayCollection();
        $this->users = new ArrayCollection();
    }

    /**
     * @return mixed
     */
    public function getArticles()
    {
        return $this->articles;
    }

    /* end relation OneToMany context vs articles */



    /* start relation OneToMany ie 1 context for many news*/
    /**
     * @ORM\OneToMany(targetEntity="App\Entity\News", mappedBy="context")
     */
    private $news;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\User", mappedBy="context")
     */
    private $users;



    /*public function __construct()
    {
        $this->news = new ArrayCollection();
    }*/

    /**
     * @return mixed
     */
    public function getNews()
    {
        return $this->news;
    }

    /* end relation OneToMany context vs news */




    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }



    /**
     * @return Collection|User[]
     */
    public function getUsers(): Collection
    {
        return $this->users;
    }

    public function addUser(User $user): self
    {
        if (!$this->users->contains($user)) {
            $this->users[] = $user;
            $user->addContext($this);
        }

        return $this;
    }

    public function removeUser(User $user): self
    {
        if ($this->users->contains($user)) {
            $this->users->removeElement($user);
            $user->removeContext($this);
        }

        return $this;
    }


}

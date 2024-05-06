<?php

namespace App\Entity;

use App\Repository\AnimalRepository;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AnimalRepository::class)]
class Animal
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 50)]
    private ?string $prenom = null;

    //#[ORM\Column(length: 255)]
    //private ?string $etat = null;

    /**
     * @var Collection<int, RapportVeterinaire>
     */
    #[ORM\OneToMany(targetEntity: RapportVeterinaire::class, mappedBy: 'animal', cascade: "remove")]
    private ?Collection $rapportVeterinaire = null;

    #[ORM\ManyToOne(inversedBy: 'animals')]
    private ?Race $race = null;

    #[ORM\ManyToOne(inversedBy: 'animals')]
    private ?Habitat $habitat = null;

    #[ORM\OneToOne(cascade: ['persist', 'remove'])]
    private ?ImageAnimal $imageAnimal = null;

    public function __construct()
    {
        $this->rapportVeterinaire = new ArrayCollection();
       
    }

    public function __toString()
    {
        return $this->getPrenom();
        
    }

 

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): static
    {
        $this->prenom = $prenom;

        return $this;
    }

    //public function getEtat(): ?string
    //{
      //  return $this->etat;
    //}

    //public function setEtat(?string $etat): static
    //{
      //  $this->etat = $etat;

        //return $this;
    //}

    /**
     * @return Collection<int, RapportVeterinaire>
     */
    public function getRapportVeterinaire(): ?Collection
    {
        return $this->rapportVeterinaire;
    }

    public function addRapportVeterinaire(?RapportVeterinaire $rapportVeterinaire): static
    {
        if (!$this->rapportVeterinaire->contains($rapportVeterinaire)) {
            $this->rapportVeterinaire->add($rapportVeterinaire);
            $rapportVeterinaire->setAnimal($this);
        }

        return $this;
    }

    public function removeRapportVeterinaire(?RapportVeterinaire $rapportVeterinaire): static
    {
        if ($this->rapportVeterinaire->removeElement($rapportVeterinaire)) {
            // set the owning side to null (unless already changed)
            if ($rapportVeterinaire->getAnimal() === $this) {
                $rapportVeterinaire->setAnimal(null);
            }
        }

        return $this;
    }

    public function getRace(): ?Race
    {
        return $this->race;
    }

    public function setRace(?Race $race): static
    {
        $this->race = $race;

        return $this;
    }

    public function getHabitat(): ?Habitat
    {
        return $this->habitat;
    }

    public function setHabitat(?Habitat $habitat): static
    {
        $this->habitat = $habitat;

        return $this;
    }

    public function getImageAnimal(): ?ImageAnimal
    {
        return $this->imageAnimal;
    }

    public function setImageAnimal(?ImageAnimal $imageAnimal): static
    {
        $this->imageAnimal = $imageAnimal;

        return $this;
    }
}

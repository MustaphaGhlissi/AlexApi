<?php

namespace Api\ApiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Rows
 *
 * @ORM\Table(name="rows")
 * @ORM\Entity(repositoryClass="Api\ApiBundle\Repository\RowsRepository")
 */
class Rows
{
    /**
     *@ORM\ManyToOne(targetEntity="Api\ApiBundle\Entity\Pages", inversedBy="rows")
     */
    private $pages;


    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="cols", type="integer")
     */
    private $cols;

    /**
     * @var int
     *
     * @ORM\Column(name="position", type="integer")
     */
    private $position;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated_at", type="datetime")
     */
    private $updatedAt;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set cols
     *
     * @param integer $cols
     *
     * @return Rows
     */
    public function setCols($cols)
    {
        $this->cols = $cols;

        return $this;
    }

    /**
     * Get cols
     *
     * @return int
     */
    public function getCols()
    {
        return $this->cols;
    }

    /**
     * Set position
     *
     * @param integer $position
     *
     * @return Rows
     */
    public function setPosition($position)
    {
        $this->position = $position;

        return $this;
    }

    /**
     * Get position
     *
     * @return int
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     *
     * @return Rows
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Get updatedAt
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * Set pages
     *
     * @param \Api\ApiBundle\Entity\Pages $pages
     *
     * @return Rows
     */
    public function setPages(\Api\ApiBundle\Entity\Pages $pages = null)
    {
        $this->pages = $pages;

        return $this;
    }

    /**
     * Get pages
     *
     * @return \Api\ApiBundle\Entity\Pages
     */
    public function getPages()
    {
        return $this->pages;
    }
}

<?php

namespace Api\ApiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ContentSoundCloud
 *
 * @ORM\Table(name="content_sound_cloud")
 * @ORM\Entity(repositoryClass="Api\ApiBundle\Repository\ContentSoundCloudRepository")
 */
class ContentSoundCloud
{
    /**
     *@ORM\ManyToOne(targetEntity="Api\ApiBundle\Entity\Pages", inversedBy="soundClouds")
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
     * @ORM\Column(name="position", type="integer")
     */
    private $position;

    /**
     * @var int
     *
     * @ORM\Column(name="col", type="integer")
     */
    private $col;

    /**
     * @var string
     *
     * @ORM\Column(name="content_type", type="text")
     */
    private $contentType;

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
     * Set position
     *
     * @param integer $position
     *
     * @return ContentSoundCloud
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
     * Set col
     *
     * @param integer $col
     *
     * @return ContentSoundCloud
     */
    public function setCol($col)
    {
        $this->col = $col;

        return $this;
    }

    /**
     * Get col
     *
     * @return int
     */
    public function getCol()
    {
        return $this->col;
    }

    /**
     * Set contentType
     *
     * @param string $contentType
     *
     * @return ContentSoundCloud
     */
    public function setContentType($contentType)
    {
        $this->contentType = $contentType;

        return $this;
    }

    /**
     * Get contentType
     *
     * @return string
     */
    public function getContentType()
    {
        return $this->contentType;
    }

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     *
     * @return ContentSoundCloud
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
     * @return ContentSoundCloud
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

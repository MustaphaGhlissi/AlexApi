<?php

namespace Api\ApiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ContentVideo
 *
 * @ORM\Table(name="content_video")
 * @ORM\Entity(repositoryClass="Api\ApiBundle\Repository\ContentVideoRepository")
 */
class ContentVideo
{
    /**
     * @ORM\OneToOne(targetEntity="Api\ApiBundle\Entity\Image")
     */
    private $image;

    /**
     *@ORM\ManyToOne(targetEntity="Api\ApiBundle\Entity\Pages", inversedBy="videos")
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
     * @var string
     *
     * @ORM\Column(name="video_url", type="text")
     */
    private $videoUrl;

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
     * Set videoUrl
     *
     * @param string $videoUrl
     *
     * @return ContentVideo
     */
    public function setVideoUrl($videoUrl)
    {
        $this->videoUrl = $videoUrl;

        return $this;
    }

    /**
     * Get videoUrl
     *
     * @return string
     */
    public function getVideoUrl()
    {
        return $this->videoUrl;
    }

    /**
     * Set position
     *
     * @param integer $position
     *
     * @return ContentVideo
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
     * @return ContentVideo
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
     * @return ContentVideo
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
     * @return ContentVideo
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
     * Set image
     *
     * @param \Api\ApiBundle\Entity\Image $image
     *
     * @return ContentVideo
     */
    public function setImage(\Api\ApiBundle\Entity\Image $image = null)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return \Api\ApiBundle\Entity\Image
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set pages
     *
     * @param \Api\ApiBundle\Entity\Pages $pages
     *
     * @return ContentVideo
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

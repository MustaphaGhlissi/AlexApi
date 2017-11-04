<?php

namespace Api\ApiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Image
 *
 * @ORM\Table(name="image")
 * @ORM\Entity(repositoryClass="Api\ApiBundle\Repository\ImageRepository")
 */
class Image
{
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
     * @ORM\Column(name="original", type="text")
     */
    private $original;

    /**
     * @var string
     *
     * @ORM\Column(name="retina", type="text")
     */
    private $retina;

    /**
     * @var string
     *
     * @ORM\Column(name="large", type="text")
     */
    private $large;

    /**
     * @var string
     *
     * @ORM\Column(name="large_retina", type="text")
     */
    private $largeRetina;

    /**
     * @var string
     *
     * @ORM\Column(name="medium", type="text")
     */
    private $medium;

    /**
     * @var string
     *
     * @ORM\Column(name="medium_retina", type="text")
     */
    private $mediumRetina;

    /**
     * @var string
     *
     * @ORM\Column(name="small", type="text")
     */
    private $small;

    /**
     * @var string
     *
     * @ORM\Column(name="small_retina", type="text")
     */
    private $smallRetina;

    /**
     * @var string
     *
     * @ORM\Column(name="thumb", type="text")
     */
    private $thumb;

    /**
     * @var string
     *
     * @ORM\Column(name="thumb_retina", type="text")
     */
    private $thumbRetina;

    /**
     * @var string
     *
     * @ORM\Column(name="file_type", type="text")
     */
    private $fileType;

    /**
     * @var string
     *
     * @ORM\Column(name="alt", type="text")
     */
    private $alt;

    /**
     * @var int
     *
     * @ORM\Column(name="crop_top", type="integer")
     */
    private $cropTop;

    /**
     * @var int
     *
     * @ORM\Column(name="crop_right", type="integer")
     */
    private $cropRight;

    /**
     * @var int
     *
     * @ORM\Column(name="crop_bottom", type="integer")
     */
    private $cropBottom;

    /**
     * @var int
     *
     * @ORM\Column(name="crop_left", type="integer")
     */
    private $cropLeft;

    /**
     * @var string
     *
     * @ORM\Column(name="orientation", type="text")
     */
    private $orientation;

    /**
     * @var int
     *
     * @ORM\Column(name="crop_scale", type="integer")
     */
    private $cropScale;

    /**
     * @var bool
     *
     * @ORM\Column(name="enlargeable", type="boolean")
     */
    private $enlargeable;

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
     * Set original
     *
     * @param string $original
     *
     * @return Image
     */
    public function setOriginal($original)
    {
        $this->original = $original;

        return $this;
    }

    /**
     * Get original
     *
     * @return string
     */
    public function getOriginal()
    {
        return $this->original;
    }

    /**
     * Set retina
     *
     * @param string $retina
     *
     * @return Image
     */
    public function setRetina($retina)
    {
        $this->retina = $retina;

        return $this;
    }

    /**
     * Get retina
     *
     * @return string
     */
    public function getRetina()
    {
        return $this->retina;
    }

    /**
     * Set large
     *
     * @param string $large
     *
     * @return Image
     */
    public function setLarge($large)
    {
        $this->large = $large;

        return $this;
    }

    /**
     * Get large
     *
     * @return string
     */
    public function getLarge()
    {
        return $this->large;
    }

    /**
     * Set largeRetina
     *
     * @param string $largeRetina
     *
     * @return Image
     */
    public function setLargeRetina($largeRetina)
    {
        $this->largeRetina = $largeRetina;

        return $this;
    }

    /**
     * Get largeRetina
     *
     * @return string
     */
    public function getLargeRetina()
    {
        return $this->largeRetina;
    }

    /**
     * Set medium
     *
     * @param string $medium
     *
     * @return Image
     */
    public function setMedium($medium)
    {
        $this->medium = $medium;

        return $this;
    }

    /**
     * Get medium
     *
     * @return string
     */
    public function getMedium()
    {
        return $this->medium;
    }

    /**
     * Set mediumRetina
     *
     * @param string $mediumRetina
     *
     * @return Image
     */
    public function setMediumRetina($mediumRetina)
    {
        $this->mediumRetina = $mediumRetina;

        return $this;
    }

    /**
     * Get mediumRetina
     *
     * @return string
     */
    public function getMediumRetina()
    {
        return $this->mediumRetina;
    }

    /**
     * Set small
     *
     * @param string $small
     *
     * @return Image
     */
    public function setSmall($small)
    {
        $this->small = $small;

        return $this;
    }

    /**
     * Get small
     *
     * @return string
     */
    public function getSmall()
    {
        return $this->small;
    }

    /**
     * Set smallRetina
     *
     * @param string $smallRetina
     *
     * @return Image
     */
    public function setSmallRetina($smallRetina)
    {
        $this->smallRetina = $smallRetina;

        return $this;
    }

    /**
     * Get smallRetina
     *
     * @return string
     */
    public function getSmallRetina()
    {
        return $this->smallRetina;
    }

    /**
     * Set thumb
     *
     * @param string $thumb
     *
     * @return Image
     */
    public function setThumb($thumb)
    {
        $this->thumb = $thumb;

        return $this;
    }

    /**
     * Get thumb
     *
     * @return string
     */
    public function getThumb()
    {
        return $this->thumb;
    }

    /**
     * Set thumbRetina
     *
     * @param string $thumbRetina
     *
     * @return Image
     */
    public function setThumbRetina($thumbRetina)
    {
        $this->thumbRetina = $thumbRetina;

        return $this;
    }

    /**
     * Get thumbRetina
     *
     * @return string
     */
    public function getThumbRetina()
    {
        return $this->thumbRetina;
    }

    /**
     * Set fileType
     *
     * @param string $fileType
     *
     * @return Image
     */
    public function setFileType($fileType)
    {
        $this->fileType = $fileType;

        return $this;
    }

    /**
     * Get fileType
     *
     * @return string
     */
    public function getFileType()
    {
        return $this->fileType;
    }

    /**
     * Set alt
     *
     * @param string $alt
     *
     * @return Image
     */
    public function setAlt($alt)
    {
        $this->alt = $alt;

        return $this;
    }

    /**
     * Get alt
     *
     * @return string
     */
    public function getAlt()
    {
        return $this->alt;
    }

    /**
     * Set cropTop
     *
     * @param integer $cropTop
     *
     * @return Image
     */
    public function setCropTop($cropTop)
    {
        $this->cropTop = $cropTop;

        return $this;
    }

    /**
     * Get cropTop
     *
     * @return int
     */
    public function getCropTop()
    {
        return $this->cropTop;
    }

    /**
     * Set cropRight
     *
     * @param integer $cropRight
     *
     * @return Image
     */
    public function setCropRight($cropRight)
    {
        $this->cropRight = $cropRight;

        return $this;
    }

    /**
     * Get cropRight
     *
     * @return int
     */
    public function getCropRight()
    {
        return $this->cropRight;
    }

    /**
     * Set cropBottom
     *
     * @param integer $cropBottom
     *
     * @return Image
     */
    public function setCropBottom($cropBottom)
    {
        $this->cropBottom = $cropBottom;

        return $this;
    }

    /**
     * Get cropBottom
     *
     * @return int
     */
    public function getCropBottom()
    {
        return $this->cropBottom;
    }

    /**
     * Set cropLeft
     *
     * @param integer $cropLeft
     *
     * @return Image
     */
    public function setCropLeft($cropLeft)
    {
        $this->cropLeft = $cropLeft;

        return $this;
    }

    /**
     * Get cropLeft
     *
     * @return int
     */
    public function getCropLeft()
    {
        return $this->cropLeft;
    }

    /**
     * Set orientation
     *
     * @param string $orientation
     *
     * @return Image
     */
    public function setOrientation($orientation)
    {
        $this->orientation = $orientation;

        return $this;
    }

    /**
     * Get orientation
     *
     * @return string
     */
    public function getOrientation()
    {
        return $this->orientation;
    }

    /**
     * Set cropScale
     *
     * @param integer $cropScale
     *
     * @return Image
     */
    public function setCropScale($cropScale)
    {
        $this->cropScale = $cropScale;

        return $this;
    }

    /**
     * Get cropScale
     *
     * @return int
     */
    public function getCropScale()
    {
        return $this->cropScale;
    }

    /**
     * Set enlargeable
     *
     * @param boolean $enlargeable
     *
     * @return Image
     */
    public function setEnlargeable($enlargeable)
    {
        $this->enlargeable = $enlargeable;

        return $this;
    }

    /**
     * Get enlargeable
     *
     * @return bool
     */
    public function getEnlargeable()
    {
        return $this->enlargeable;
    }

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     *
     * @return Image
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
}

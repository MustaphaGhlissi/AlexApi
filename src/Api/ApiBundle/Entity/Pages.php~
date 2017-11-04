<?php

namespace Api\ApiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pages
 *
 * @ORM\Table(name="pages")
 * @ORM\Entity(repositoryClass="Api\ApiBundle\Repository\PagesRepository")
 */
class Pages
{

    /**
     *@ORM\OneToMany(targetEntity="Api\ApiBundle\Entity\Rows", mappedBy="pages")
     */
    private $rows;

    /**
     *@ORM\OneToMany(targetEntity="Api\ApiBundle\Entity\ContentImages", mappedBy="pages")
     */
    private $contentImages;

    /**
     *@ORM\OneToMany(targetEntity="Api\ApiBundle\Entity\ContentRichText", mappedBy="pages")
     */
    private $richTexts;

    /**
     *@ORM\OneToMany(targetEntity="Api\ApiBundle\Entity\ContentVideo", mappedBy="pages")
     */
    private $videos;

    /**
     *@ORM\OneToMany(targetEntity="Api\ApiBundle\Entity\ContentSoundCloud", mappedBy="pages")
     */
    private $soundClouds;

    /**
     *@ORM\OneToMany(targetEntity="Api\ApiBundle\Entity\ContentSection", mappedBy="pages")
     */
    private $sections;

    /**
     * @ORM\OneToOne(targetEntity="Api\ApiBundle\Entity\Image")
     */
    private $thumbnail;

    /**
     * @ORM\OneToOne(targetEntity="Api\ApiBundle\Entity\Pages")
     */
    private $parent;

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
     * @ORM\Column(name="title", type="text")
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="meta_tags", type="text")
     */
    private $metaTags;

    /**
     * @var string
     *
     * @ORM\Column(name="meta_description", type="text")
     */
    private $metaDescription;

    /**
     * @var string
     *
     * @ORM\Column(name="page_type", type="text")
     */
    private $pageType;

    /**
     * @var string
     *
     * @ORM\Column(name="page_layout", type="text")
     */
    private $pageLayout;

    /**
     * @var bool
     *
     * @ORM\Column(name="autoselect", type="boolean")
     */
    private $autoselect;

    /**
     * @var string
     *
     * @ORM\Column(name="slug", type="text")
     */
    private $slug;

    /**
     * @var string
     *
     * @ORM\Column(name="country", type="text")
     */
    private $country;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="soundbite", type="text")
     */
    private $soundbite;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

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
     * Set title
     *
     * @param string $title
     *
     * @return Pages
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set metaTags
     *
     * @param string $metaTags
     *
     * @return Pages
     */
    public function setMetaTags($metaTags)
    {
        $this->metaTags = $metaTags;

        return $this;
    }

    /**
     * Get metaTags
     *
     * @return string
     */
    public function getMetaTags()
    {
        return $this->metaTags;
    }

    /**
     * Set metaDescription
     *
     * @param string $metaDescription
     *
     * @return Pages
     */
    public function setMetaDescription($metaDescription)
    {
        $this->metaDescription = $metaDescription;

        return $this;
    }

    /**
     * Get metaDescription
     *
     * @return string
     */
    public function getMetaDescription()
    {
        return $this->metaDescription;
    }

    /**
     * Set pageType
     *
     * @param string $pageType
     *
     * @return Pages
     */
    public function setPageType($pageType)
    {
        $this->pageType = $pageType;

        return $this;
    }

    /**
     * Get pageType
     *
     * @return string
     */
    public function getPageType()
    {
        return $this->pageType;
    }

    /**
     * Set pageLayout
     *
     * @param string $pageLayout
     *
     * @return Pages
     */
    public function setPageLayout($pageLayout)
    {
        $this->pageLayout = $pageLayout;

        return $this;
    }

    /**
     * Get pageLayout
     *
     * @return string
     */
    public function getPageLayout()
    {
        return $this->pageLayout;
    }

    /**
     * Set autoselect
     *
     * @param boolean $autoselect
     *
     * @return Pages
     */
    public function setAutoselect($autoselect)
    {
        $this->autoselect = $autoselect;

        return $this;
    }

    /**
     * Get autoselect
     *
     * @return bool
     */
    public function getAutoselect()
    {
        return $this->autoselect;
    }

    /**
     * Set slug
     *
     * @param string $slug
     *
     * @return Pages
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;

        return $this;
    }

    /**
     * Get slug
     *
     * @return string
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * Set country
     *
     * @param string $country
     *
     * @return Pages
     */
    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Get country
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Pages
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set soundbite
     *
     * @param string $soundbite
     *
     * @return Pages
     */
    public function setSoundbite($soundbite)
    {
        $this->soundbite = $soundbite;

        return $this;
    }

    /**
     * Get soundbite
     *
     * @return string
     */
    public function getSoundbite()
    {
        return $this->soundbite;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Pages
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     *
     * @return Pages
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
     * Set thumbnail
     *
     * @param \Api\ApiBundle\Entity\Image $thumbnail
     *
     * @return Pages
     */
    public function setThumbnail(\Api\ApiBundle\Entity\Image $thumbnail = null)
    {
        $this->thumbnail = $thumbnail;

        return $this;
    }

    /**
     * Get thumbnail
     *
     * @return \Api\ApiBundle\Entity\Image
     */
    public function getThumbnail()
    {
        return $this->thumbnail;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->rows = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add row
     *
     * @param \Api\ApiBundle\Entity\Rows $row
     *
     * @return Pages
     */
    public function addRow(\Api\ApiBundle\Entity\Rows $row)
    {
        $this->rows[] = $row;

        return $this;
    }

    /**
     * Remove row
     *
     * @param \Api\ApiBundle\Entity\Rows $row
     */
    public function removeRow(\Api\ApiBundle\Entity\Rows $row)
    {
        $this->rows->removeElement($row);
    }

    /**
     * Get rows
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getRows()
    {
        return $this->rows;
    }

    /**
     * Add contentImage
     *
     * @param \Api\ApiBundle\Entity\ContentImages $contentImage
     *
     * @return Pages
     */
    public function addContentImage(\Api\ApiBundle\Entity\ContentImages $contentImage)
    {
        $this->contentImages[] = $contentImage;

        return $this;
    }

    /**
     * Remove contentImage
     *
     * @param \Api\ApiBundle\Entity\ContentImages $contentImage
     */
    public function removeContentImage(\Api\ApiBundle\Entity\ContentImages $contentImage)
    {
        $this->contentImages->removeElement($contentImage);
    }

    /**
     * Get contentImages
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getContentImages()
    {
        return $this->contentImages;
    }

    /**
     * Add richText
     *
     * @param \Api\ApiBundle\Entity\ContentRichText $richText
     *
     * @return Pages
     */
    public function addRichText(\Api\ApiBundle\Entity\ContentRichText $richText)
    {
        $this->richTexts[] = $richText;

        return $this;
    }

    /**
     * Remove richText
     *
     * @param \Api\ApiBundle\Entity\ContentRichText $richText
     */
    public function removeRichText(\Api\ApiBundle\Entity\ContentRichText $richText)
    {
        $this->richTexts->removeElement($richText);
    }

    /**
     * Get richTexts
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getRichTexts()
    {
        return $this->richTexts;
    }

    /**
     * Add video
     *
     * @param \Api\ApiBundle\Entity\ContentVideo $video
     *
     * @return Pages
     */
    public function addVideo(\Api\ApiBundle\Entity\ContentVideo $video)
    {
        $this->videos[] = $video;

        return $this;
    }

    /**
     * Remove video
     *
     * @param \Api\ApiBundle\Entity\ContentVideo $video
     */
    public function removeVideo(\Api\ApiBundle\Entity\ContentVideo $video)
    {
        $this->videos->removeElement($video);
    }

    /**
     * Get videos
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getVideos()
    {
        return $this->videos;
    }

    /**
     * Add soundCloud
     *
     * @param \Api\ApiBundle\Entity\ContentSoundCloud $soundCloud
     *
     * @return Pages
     */
    public function addSoundCloud(\Api\ApiBundle\Entity\ContentSoundCloud $soundCloud)
    {
        $this->soundClouds[] = $soundCloud;

        return $this;
    }

    /**
     * Remove soundCloud
     *
     * @param \Api\ApiBundle\Entity\ContentSoundCloud $soundCloud
     */
    public function removeSoundCloud(\Api\ApiBundle\Entity\ContentSoundCloud $soundCloud)
    {
        $this->soundClouds->removeElement($soundCloud);
    }

    /**
     * Get soundClouds
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSoundClouds()
    {
        return $this->soundClouds;
    }

    /**
     * Add section
     *
     * @param \Api\ApiBundle\Entity\ContentSection $section
     *
     * @return Pages
     */
    public function addSection(\Api\ApiBundle\Entity\ContentSection $section)
    {
        $this->sections[] = $section;

        return $this;
    }

    /**
     * Remove section
     *
     * @param \Api\ApiBundle\Entity\ContentSection $section
     */
    public function removeSection(\Api\ApiBundle\Entity\ContentSection $section)
    {
        $this->sections->removeElement($section);
    }

    /**
     * Get sections
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSections()
    {
        return $this->sections;
    }

    /**
     * Set parent
     *
     * @param \Api\ApiBundle\Entity\Pages $parent
     *
     * @return Pages
     */
    public function setParent(\Api\ApiBundle\Entity\Pages $parent = null)
    {
        $this->parent = $parent;

        return $this;
    }

    /**
     * Get parent
     *
     * @return \Api\ApiBundle\Entity\Pages
     */
    public function getParent()
    {
        return $this->parent;
    }
}

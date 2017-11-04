<?php

namespace Api\ApiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ContentSection
 *
 * @ORM\Table(name="content_section")
 * @ORM\Entity(repositoryClass="Api\ApiBundle\Repository\ContentSectionRepository")
 */
class ContentSection
{
    /**
     *@ORM\ManyToOne(targetEntity="Api\ApiBundle\Entity\Pages", inversedBy="sections")
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
     * @ORM\Column(name="text", type="text")
     */
    private $text;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="text")
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="slug", type="text")
     */
    private $slug;

    /**
     * @var string
     *
     * @ORM\Column(name="short_desription", type="text")
     */
    private $shortDesription;

    /**
     * @var string
     *
     * @ORM\Column(name="more_text", type="text")
     */
    private $moreText;

    /**
     * @var string
     *
     * @ORM\Column(name="less_text", type="text")
     */
    private $lessText;

    /**
     * @var bool
     *
     * @ORM\Column(name="is_expanded", type="boolean")
     */
    private $isExpanded;

    /**
     * @var bool
     *
     * @ORM\Column(name="is_expandable", type="boolean")
     */
    private $isExpandable;

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
     * @ORM\Column(name="udated_at", type="datetime")
     */
    private $udatedAt;


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
     * Set text
     *
     * @param string $text
     *
     * @return ContentSection
     */
    public function setText($text)
    {
        $this->text = $text;

        return $this;
    }

    /**
     * Get text
     *
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Set title
     *
     * @param string $title
     *
     * @return ContentSection
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
     * Set slug
     *
     * @param string $slug
     *
     * @return ContentSection
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
     * Set shortDesription
     *
     * @param string $shortDesription
     *
     * @return ContentSection
     */
    public function setShortDesription($shortDesription)
    {
        $this->shortDesription = $shortDesription;

        return $this;
    }

    /**
     * Get shortDesription
     *
     * @return string
     */
    public function getShortDesription()
    {
        return $this->shortDesription;
    }

    /**
     * Set moreText
     *
     * @param string $moreText
     *
     * @return ContentSection
     */
    public function setMoreText($moreText)
    {
        $this->moreText = $moreText;

        return $this;
    }

    /**
     * Get moreText
     *
     * @return string
     */
    public function getMoreText()
    {
        return $this->moreText;
    }

    /**
     * Set lessText
     *
     * @param string $lessText
     *
     * @return ContentSection
     */
    public function setLessText($lessText)
    {
        $this->lessText = $lessText;

        return $this;
    }

    /**
     * Get lessText
     *
     * @return string
     */
    public function getLessText()
    {
        return $this->lessText;
    }

    /**
     * Set isExpanded
     *
     * @param boolean $isExpanded
     *
     * @return ContentSection
     */
    public function setIsExpanded($isExpanded)
    {
        $this->isExpanded = $isExpanded;

        return $this;
    }

    /**
     * Get isExpanded
     *
     * @return bool
     */
    public function getIsExpanded()
    {
        return $this->isExpanded;
    }

    /**
     * Set isExpandable
     *
     * @param boolean $isExpandable
     *
     * @return ContentSection
     */
    public function setIsExpandable($isExpandable)
    {
        $this->isExpandable = $isExpandable;

        return $this;
    }

    /**
     * Get isExpandable
     *
     * @return bool
     */
    public function getIsExpandable()
    {
        return $this->isExpandable;
    }

    /**
     * Set position
     *
     * @param integer $position
     *
     * @return ContentSection
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
     * @return ContentSection
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
     * @return ContentSection
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
     * Set udatedAt
     *
     * @param \DateTime $udatedAt
     *
     * @return ContentSection
     */
    public function setUdatedAt($udatedAt)
    {
        $this->udatedAt = $udatedAt;

        return $this;
    }

    /**
     * Get udatedAt
     *
     * @return \DateTime
     */
    public function getUdatedAt()
    {
        return $this->udatedAt;
    }

    /**
     * Set pages
     *
     * @param \Api\ApiBundle\Entity\Pages $pages
     *
     * @return ContentSection
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

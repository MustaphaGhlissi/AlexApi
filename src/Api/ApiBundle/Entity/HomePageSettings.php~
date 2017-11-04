<?php

namespace Api\ApiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * HomePageSettings
 *
 * @ORM\Table(name="home_page_settings")
 * @ORM\Entity(repositoryClass="Api\ApiBundle\Repository\HomePageSettingsRepository")
 */
class HomePageSettings
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
     * @var bool
     *
     * @ORM\Column(name="splashscreen", type="boolean")
     */
    private $splashscreen;

    /**
     * @var int
     *
     * @ORM\Column(name="poster_size_x", type="integer")
     */
    private $posterSizeX;

    /**
     * @var int
     *
     * @ORM\Column(name="poster_size_y", type="integer")
     */
    private $posterSizeY;

    /**
     * @var int
     *
     * @ORM\Column(name="start_position_x", type="integer")
     */
    private $startPositionX;

    /**
     * @var int
     *
     * @ORM\Column(name="start_position_y", type="integer")
     */
    private $startPositionY;

    /**
     * @var string
     *
     * @ORM\Column(name="default_index_order_col", type="string", length=255)
     */
    private $defaultIndexOrderCol;

    /**
     * @var string
     *
     * @ORM\Column(name="default_index_order_by", type="string", length=255)
     */
    private $defaultIndexOrderBy;

    /**
     * @var string
     *
     * @ORM\Column(name="index_cols", type="string", length=255)
     */
    private $indexCols;

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
     * Set splashscreen
     *
     * @param boolean $splashscreen
     *
     * @return HomePageSettings
     */
    public function setSplashscreen($splashscreen)
    {
        $this->splashscreen = $splashscreen;

        return $this;
    }

    /**
     * Get splashscreen
     *
     * @return bool
     */
    public function getSplashscreen()
    {
        return $this->splashscreen;
    }

    /**
     * Set posterSizeX
     *
     * @param integer $posterSizeX
     *
     * @return HomePageSettings
     */
    public function setPosterSizeX($posterSizeX)
    {
        $this->posterSizeX = $posterSizeX;

        return $this;
    }

    /**
     * Get posterSizeX
     *
     * @return int
     */
    public function getPosterSizeX()
    {
        return $this->posterSizeX;
    }

    /**
     * Set posterSizeY
     *
     * @param integer $posterSizeY
     *
     * @return HomePageSettings
     */
    public function setPosterSizeY($posterSizeY)
    {
        $this->posterSizeY = $posterSizeY;

        return $this;
    }

    /**
     * Get posterSizeY
     *
     * @return int
     */
    public function getPosterSizeY()
    {
        return $this->posterSizeY;
    }

    /**
     * Set startPositionX
     *
     * @param integer $startPositionX
     *
     * @return HomePageSettings
     */
    public function setStartPositionX($startPositionX)
    {
        $this->startPositionX = $startPositionX;

        return $this;
    }

    /**
     * Get startPositionX
     *
     * @return int
     */
    public function getStartPositionX()
    {
        return $this->startPositionX;
    }

    /**
     * Set startPositionY
     *
     * @param integer $startPositionY
     *
     * @return HomePageSettings
     */
    public function setStartPositionY($startPositionY)
    {
        $this->startPositionY = $startPositionY;

        return $this;
    }

    /**
     * Get startPositionY
     *
     * @return int
     */
    public function getStartPositionY()
    {
        return $this->startPositionY;
    }

    /**
     * Set defaultIndexOrderCol
     *
     * @param string $defaultIndexOrderCol
     *
     * @return HomePageSettings
     */
    public function setDefaultIndexOrderCol($defaultIndexOrderCol)
    {
        $this->defaultIndexOrderCol = $defaultIndexOrderCol;

        return $this;
    }

    /**
     * Get defaultIndexOrderCol
     *
     * @return string
     */
    public function getDefaultIndexOrderCol()
    {
        return $this->defaultIndexOrderCol;
    }

    /**
     * Set defaultIndexOrderBy
     *
     * @param string $defaultIndexOrderBy
     *
     * @return HomePageSettings
     */
    public function setDefaultIndexOrderBy($defaultIndexOrderBy)
    {
        $this->defaultIndexOrderBy = $defaultIndexOrderBy;

        return $this;
    }

    /**
     * Get defaultIndexOrderBy
     *
     * @return string
     */
    public function getDefaultIndexOrderBy()
    {
        return $this->defaultIndexOrderBy;
    }

    /**
     * Set indexCols
     *
     * @param string $indexCols
     *
     * @return HomePageSettings
     */
    public function setIndexCols($indexCols)
    {
        $this->indexCols = $indexCols;

        return $this;
    }

    /**
     * Get indexCols
     *
     * @return string
     */
    public function getIndexCols()
    {
        return $this->indexCols;
    }

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     *
     * @return HomePageSettings
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

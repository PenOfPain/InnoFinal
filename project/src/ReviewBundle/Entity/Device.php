<?php

namespace ReviewBundle\Entity\Entity;

/**
 * Device
 */
class Device
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var int
     */
    private $reviewId;

    /**
     * @var string
     */
    private $mark;

    /**
     * @var float
     */
    private $price;

    /**
     * @var string
     */
    private $category;


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
     * Set reviewId
     *
     * @param integer $reviewId
     *
     * @return Device
     */
    public function setReviewId($reviewId)
    {
        $this->reviewId = $reviewId;

        return $this;
    }

    /**
     * Get reviewId
     *
     * @return int
     */
    public function getReviewId()
    {
        return $this->reviewId;
    }

    /**
     * Set mark
     *
     * @param string $mark
     *
     * @return Device
     */
    public function setMark($mark)
    {
        $this->mark = $mark;

        return $this;
    }

    /**
     * Get mark
     *
     * @return string
     */
    public function getMark()
    {
        return $this->mark;
    }

    /**
     * Set price
     *
     * @param float $price
     *
     * @return Device
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return float
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set category
     *
     * @param string $category
     *
     * @return Device
     */
    public function setCategory($category)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return string
     */
    public function getCategory()
    {
        return $this->category;
    }
}

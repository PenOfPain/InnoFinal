<?php

namespace ReviewBundle\Entity;

/**
 * Review
 * @ORM\Table(name="review")
 * @ORM\Entity(repositoryClass="ReviewBundle\Repository\ReviewRepository")
 */
class Review
{
    /**
     * @var int
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="rating", type="integer")
     * @Assert\NotBlank()
     * @Assert\Range(
     *      min = 1,
     *      max = 20,
     *      minMessage = "La note doit être comprise entre 1 et 20",
     *      maxMessage = "La note doit être comprise entre 1 et 20"
     * )
     */
    private $rating;

    /**
     * @var text
     * @ORM\Column(name="comment", type="text")
     */
    private $comment;

    /**
     * @var User
     * @ORM\ManyToOne(targetEntity="UserBundle\Entity\User", inversedBy="reviews")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    private $user;


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
     * Set rating
     *
     * @param integer $rating
     *
     * @return Review
     */
    public function setRating($rating)
    {
        $this->rating = $rating;

        return $this;
    }

    /**
     * Get rating
     *
     * @return int
     */
    public function getRating()
    {
        return $this->rating;
    }

    /**
     * Set comment
     *
     * @param string $comment
     *
     * @return Review
     */
    public function setComment($comment)
    {
        $this->comment = $comment;

        return $this;
    }

    /**
     * Get comment
     *
     * @return string
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Set user
     *
     * @param string $user
     *
     * @return Review
     */
    public function setUser($user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return string
     */
    public function getUser()
    {
        return $this->user;
    }
}

<?php

namespace ReviewBundle\Entity\Entity;

/**
 * Review
 */
class Review
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $comment;

    /**
     * @var int
     */
    private $note;

    /**
     * @var int
     */
    private $userId;

    /**
     * @var User
     *
     * @ORM\ManyToOne(targetEntity="User", inversedBy="review")
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
     * Set note
     *
     * @param integer $note
     *
     * @return Review
     */
    public function setNote($note)
    {
        $this->note = $note;

        return $this;
    }

    /**
     * Get note
     *
     * @return int
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Set userId
     *
     * @param integer $userId
     *
     * @return Review
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get userId
     *
     * @return int
     */
    public function getUserId()
    {
        return $this->userId;
    }


    /**
    * Set user
    *
    * @param User $user
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
    * @return User
    */
   public function getUser()
   {
       return $this->user;
   }
}

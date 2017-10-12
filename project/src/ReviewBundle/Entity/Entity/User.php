<?php

namespace ReviewBundle\Entity\Entity;

/**
 * User
 */
class User
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $login;

    /**
     * @var string
     */
    private $password;



    /**
        * @var array
        *
        * @ORM\OneToMany(targetEntity="ReviewBundle\Entity\Review", mappedBy="User")
        */
       private $reviews;



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
     * Set login
     *
     * @param string $login
     *
     * @return User
     */

    public function setLogin($login)
    {
        $this->login = $login;

        return $this;
    }

    /**
     * Get login
     *
     * @return string
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * Set password
     *
     * @param string $password
     *
     * @return User
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }


    /**
    * Set reviews
    *
    * @param array $reviews
    *
    * @return User
    */
   public function setReviews($reviews)
   {
       $this->reviews = $reviews;
       return $this;
   }
   /**
    * Get reviews
    *
    * @return array
    */
   public function getReviews()
   {
       return $this->reviews;
   }
}

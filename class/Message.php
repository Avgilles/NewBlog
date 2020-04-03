<?php

/** 
 * @Entity 
 * **/

class Message {
   /**
   * @Id @Column(type="integer")
   * @GeneratedValue
   **/
    private $id;
    /**
     * @Column(type="string", length=160)
     **/
    private $texte;
     /**
    *  @Column(type="string", length=160, nullable=true)
     **/
    private $datepost;
     /**
     * @ManyToOne(targetEntity="Utilisateur") 
     * @JoinColumn( nullable=false)
     **/
    
    private $utilisateur;


    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set texte.
     *
     * @param string $texte
     *
     * @return Message
     */
    public function setTexte($texte)
    {
        $this->texte = $texte;

        return $this;
    }

    /**
     * Get texte.
     *
     * @return string
     */
    public function getTexte()
    {
        return $this->texte;
    }

    /**
     * Set datepost.
     *
     * @param \DateTime $datepost
     *
     * @return Message
     */
    public function setDatepost($datepost)
    {
        $this->datepost = $datepost;

        return $this;
    }

    /**
     * Get datepost.
     *
     * @return \DateTime
     */
    public function getDatepost()
    {
        return $this->datepost;
    }

    /**
     * Set utilisateur.
     *
     * @param \Utilisateur $utilisateur
     *
     * @return Message
     */
    public function setUtilisateur(\Utilisateur $utilisateur)
    {
        $this->utilisateur = $utilisateur;

        return $this;
    }

    /**
     * Get utilisateur.
     *
     * @return \Utilisateur
     */
    public function getUtilisateur()
    {
        return $this->utilisateur;
    }








}



?>
<?php
/**
 * Created by PhpStorm.
 * User: jiharu
 * Date: 2018-01-09
 * Time: 오후 5:38
 */

class NavListDto extends CI_Model
{
    private $externalName;
    private $internalName;
    private $isRoot;
    private $owner;
    private $showState;

    public function __construct($externalName, $internalName, $isRoot, $owner, $showState)
    {
        parent::__consrtuct();
        $this->externalName = $externalName;
        $this->internalName = $internalName;
        $this->isRoot = $isRoot;
        $this->owner = $owner;
        $this->showState = $showState;
    }

    /**
     * @return mixed
     */
    public function getExternalName()
    {
        return $this->externalName;
    }

    /**
     * @param mixed $externalName
     */
    public function setExternalName($externalName)
    {
        $this->externalName = $externalName;
    }

    /**
     * @return mixed
     */
    public function getInternalName()
    {
        return $this->internalName;
    }

    /**
     * @param mixed $internalName
     */
    public function setInternalName($internalName)
    {
        $this->internalName = $internalName;
    }

    /**
     * @return mixed
     */
    public function getisRoot()
    {
        return $this->isRoot;
    }

    /**
     * @param mixed $isRoot
     */
    public function setIsRoot($isRoot)
    {
        $this->isRoot = $isRoot;
    }

    /**
     * @return mixed
     */
    public function getOwner()
    {
        return $this->owner;
    }

    /**
     * @param mixed $owner
     */
    public function setOwner($owner)
    {
        $this->owner = $owner;
    }

    /**
     * @return mixed
     */
    public function getShowState()
    {
        return $this->showState;
    }

    /**
     * @param mixed $showState
     */
    public function setShowState($showState)
    {
        $this->showState = $showState;
    }

}
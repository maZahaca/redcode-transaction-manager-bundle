<?php
namespace RedCode\TransactionManagerBundle\Model;
use RedCode\Transaction\IAccount;

/**
 * @author maZahaca
 */
class Account implements IAccount
{
    /**
     * @var int
     */
    protected $id;

    /**
     * @var float
     */
    protected $amount;

    /**
     * Get id of Account
     * @return int
     */
    function getId()
    {
        return $this->id;
    }

    /**
     * Get account amount
     * @return float
     */
    function getAmount()
    {
        return $this->amount;
    }

    /**
     * Set account amount
     * @param float $amount
     * @return mixed
     */
    function setAmount($amount)
    {
        $this->amount = $amount;
    }
}

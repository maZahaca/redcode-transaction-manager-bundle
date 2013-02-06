<?php
namespace RedCode\TransactionManagerBundle\Model;

use RedCode\Transaction\ITransaction;

/**
 * @author maZahaca
 */

class Transaction implements ITransaction
{
    /**
     * @var int
     */
    protected $id;

    /**
     * @var \RedCode\Transaction\IAccount
     */
    protected $accountFrom;

    /**
     * @var \RedCode\Transaction\IAccount
     */
    protected $accountTo;

    /**
     * @var \DateTime
     */
    protected $createdAt;

    /**
     * @var \DateTime
     */
    protected $executedAt;

    /**
     * @var float
     */
    protected $amount;

    /**
     * @var int
     */
    protected $status;

    /**
     * Get Transaction Id
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get account from
     * @return IAccount
     */
    public function getAccountFrom()
    {
        return $this->accountFrom;
    }

    /**
     * Get account to
     * @return IAccount
     */
    public function getAccountTo()
    {
        return $this->accountTo;
    }

    /**
     * Get created date
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Get Executed date
     * @return \DateTime|null
     */
    public function getExecutedAt()
    {
        return $this->executedAt;
    }

    /**
     * Set executed at
     * @param \DateTime $date
     * @return mixed
     */
    public function setExecutedAt(\DateTime $date)
    {
        $this->executedAt = $date;
    }

    /**
     * Amount of transaction
     * @return float
     */
    public function getAmount()
    {
        $this->amount;
    }

    /**
     * Get transaction status
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }
}

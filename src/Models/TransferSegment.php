<?php

namespace AndrewSvirin\Ebics\Models;

/**
 * Segment item.
 *
 * @license http://www.opensource.org/licenses/mit-license.html  MIT License
 * @author Andrew Svirin
 */
final class TransferSegment extends Segment
{
    /**
     * @var string
     */
    private $transactionId;

    /**
     * @var int|null
     */
    private $segmentNumber;

    /**
     * @var int|null
     */
    private $numSegments;

    /**
     * @var string
     */
    private $orderData;

    /**
     * @var bool
     */
    private $isLastSegment;

    public function getTransactionId(): ?string
    {
        return $this->transactionId;
    }

    public function setTransactionId(?string $id): void
    {
        $this->transactionId = $id;
    }

    public function getSegmentNumber(): ?int
    {
        return $this->segmentNumber;
    }

    public function setSegmentNumber(?int $segmentNumber): void
    {
        $this->segmentNumber = $segmentNumber;
    }

    public function getNumSegments(): ?int
    {
        return $this->numSegments;
    }

    public function setNumSegments(?int $numSegments): void
    {
        $this->numSegments = $numSegments;
    }

    public function getOrderData(): string
    {
        return $this->orderData;
    }

    public function setOrderData(string $orderData): void
    {
        $this->orderData = $orderData;
    }

    public function setIsLastSegment(bool $isLastSegment): void
    {
        $this->isLastSegment = $isLastSegment;
    }

    public function getIsLastSegment(): bool
    {
        return $this->isLastSegment;
    }
}

<?php

declare(strict_types=1);

namespace Flux\OdooApiClient\Model\Object\Snailmail\Letter\Format;

use DateTimeInterface;
use Flux\OdooApiClient\Model\Object\Base;
use Flux\OdooApiClient\Model\Object\Mail\Message;
use Flux\OdooApiClient\Model\Object\Res\Users;

/**
 * Odoo model : snailmail.letter.format.error
 * Name : snailmail.letter.format.error
 *
 * Model super-class for transient records, meant to be temporarily
 * persistent, and regularly vacuum-cleaned.
 *
 * A TransientModel has a simplified access rights management, all users can
 * create new records, and may only access the records they created. The
 * superuser has unrestricted access to all TransientModel records.
 */
final class Error extends Base
{
    /**
     * Message
     *
     * @var Message
     */
    private $message_id;

    /**
     * Add a Cover Page
     *
     * @var bool
     */
    private $snailmail_cover;

    /**
     * Created by
     *
     * @var Users
     */
    private $create_uid;

    /**
     * Created on
     *
     * @var DateTimeInterface
     */
    private $create_date;

    /**
     * Last Updated by
     *
     * @var Users
     */
    private $write_uid;

    /**
     * Last Updated on
     *
     * @var DateTimeInterface
     */
    private $write_date;

    /**
     * @param Message $message_id
     */
    public function setMessageId(Message $message_id): void
    {
        $this->message_id = $message_id;
    }

    /**
     * @param bool $snailmail_cover
     */
    public function setSnailmailCover(bool $snailmail_cover): void
    {
        $this->snailmail_cover = $snailmail_cover;
    }

    /**
     * @return Users
     */
    public function getCreateUid(): Users
    {
        return $this->create_uid;
    }

    /**
     * @return DateTimeInterface
     */
    public function getCreateDate(): DateTimeInterface
    {
        return $this->create_date;
    }

    /**
     * @return Users
     */
    public function getWriteUid(): Users
    {
        return $this->write_uid;
    }

    /**
     * @return DateTimeInterface
     */
    public function getWriteDate(): DateTimeInterface
    {
        return $this->write_date;
    }
}

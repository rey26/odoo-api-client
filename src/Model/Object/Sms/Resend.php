<?php

declare(strict_types=1);

namespace Flux\OdooApiClient\Model\Object\Sms;

use DateTimeInterface;
use Flux\OdooApiClient\Model\Object\Base;
use Flux\OdooApiClient\Model\OdooRelation;
use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Odoo model : sms.resend
 * ---
 * Name : sms.resend
 * ---
 * Info :
 * Model super-class for transient records, meant to be temporarily
 *         persistent, and regularly vacuum-cleaned.
 *
 *         A TransientModel has a simplified access rights management, all users can
 *         create new records, and may only access the records they created. The
 *         superuser has unrestricted access to all TransientModel records.
 */
final class Resend extends Base
{
    /**
     * Message
     * ---
     * Relation : many2one (mail.message)
     * @see \Flux\OdooApiClient\Model\Object\Mail\Message
     * ---
     * Searchable : yes
     * Sortable : yes
     *
     * @var OdooRelation
     */
    private $mail_message_id;

    /**
     * Recipients
     * ---
     * Relation : one2many (sms.resend.recipient -> sms_resend_id)
     * @see \Flux\OdooApiClient\Model\Object\Sms\Resend\Recipient
     * ---
     * Searchable : yes
     * Sortable : no
     *
     * @var OdooRelation[]|null
     */
    private $recipient_ids;

    /**
     * Has Cancel
     * ---
     * Searchable : no
     * Sortable : no
     *
     * @var bool|null
     */
    private $has_cancel;

    /**
     * Has Insufficient Credit
     * ---
     * Searchable : no
     * Sortable : no
     *
     * @var bool|null
     */
    private $has_insufficient_credit;

    /**
     * Created by
     * ---
     * Relation : many2one (res.users)
     * @see \Flux\OdooApiClient\Model\Object\Res\Users
     * ---
     * Searchable : yes
     * Sortable : yes
     *
     * @var OdooRelation|null
     */
    private $create_uid;

    /**
     * Created on
     * ---
     * Searchable : yes
     * Sortable : yes
     *
     * @var DateTimeInterface|null
     */
    private $create_date;

    /**
     * Last Updated by
     * ---
     * Relation : many2one (res.users)
     * @see \Flux\OdooApiClient\Model\Object\Res\Users
     * ---
     * Searchable : yes
     * Sortable : yes
     *
     * @var OdooRelation|null
     */
    private $write_uid;

    /**
     * Last Updated on
     * ---
     * Searchable : yes
     * Sortable : yes
     *
     * @var DateTimeInterface|null
     */
    private $write_date;

    /**
     * @param OdooRelation $mail_message_id Message
     *        ---
     *        Relation : many2one (mail.message)
     *        @see \Flux\OdooApiClient\Model\Object\Mail\Message
     *        ---
     *        Searchable : yes
     *        Sortable : yes
     */
    public function __construct(OdooRelation $mail_message_id)
    {
        $this->mail_message_id = $mail_message_id;
    }

    /**
     * @param bool|null $has_insufficient_credit
     */
    public function setHasInsufficientCredit(?bool $has_insufficient_credit): void
    {
        $this->has_insufficient_credit = $has_insufficient_credit;
    }

    /**
     * @param DateTimeInterface|null $write_date
     */
    public function setWriteDate(?DateTimeInterface $write_date): void
    {
        $this->write_date = $write_date;
    }

    /**
     * @return DateTimeInterface|null
     *
     * @SerializedName("write_date")
     */
    public function getWriteDate(): ?DateTimeInterface
    {
        return $this->write_date;
    }

    /**
     * @param OdooRelation|null $write_uid
     */
    public function setWriteUid(?OdooRelation $write_uid): void
    {
        $this->write_uid = $write_uid;
    }

    /**
     * @return OdooRelation|null
     *
     * @SerializedName("write_uid")
     */
    public function getWriteUid(): ?OdooRelation
    {
        return $this->write_uid;
    }

    /**
     * @param DateTimeInterface|null $create_date
     */
    public function setCreateDate(?DateTimeInterface $create_date): void
    {
        $this->create_date = $create_date;
    }

    /**
     * @return DateTimeInterface|null
     *
     * @SerializedName("create_date")
     */
    public function getCreateDate(): ?DateTimeInterface
    {
        return $this->create_date;
    }

    /**
     * @param OdooRelation|null $create_uid
     */
    public function setCreateUid(?OdooRelation $create_uid): void
    {
        $this->create_uid = $create_uid;
    }

    /**
     * @return OdooRelation|null
     *
     * @SerializedName("create_uid")
     */
    public function getCreateUid(): ?OdooRelation
    {
        return $this->create_uid;
    }

    /**
     * @return bool|null
     *
     * @SerializedName("has_insufficient_credit")
     */
    public function isHasInsufficientCredit(): ?bool
    {
        return $this->has_insufficient_credit;
    }

    /**
     * @return OdooRelation
     *
     * @SerializedName("mail_message_id")
     */
    public function getMailMessageId(): OdooRelation
    {
        return $this->mail_message_id;
    }

    /**
     * @param bool|null $has_cancel
     */
    public function setHasCancel(?bool $has_cancel): void
    {
        $this->has_cancel = $has_cancel;
    }

    /**
     * @return bool|null
     *
     * @SerializedName("has_cancel")
     */
    public function isHasCancel(): ?bool
    {
        return $this->has_cancel;
    }

    /**
     * @param OdooRelation $item
     */
    public function removeRecipientIds(OdooRelation $item): void
    {
        if (null === $this->recipient_ids) {
            $this->recipient_ids = [];
        }

        if ($this->hasRecipientIds($item)) {
            $index = array_search($item, $this->recipient_ids);
            unset($this->recipient_ids[$index]);
        }
    }

    /**
     * @param OdooRelation $item
     */
    public function addRecipientIds(OdooRelation $item): void
    {
        if ($this->hasRecipientIds($item)) {
            return;
        }

        if (null === $this->recipient_ids) {
            $this->recipient_ids = [];
        }

        $this->recipient_ids[] = $item;
    }

    /**
     * @param OdooRelation $item
     *
     * @return bool
     */
    public function hasRecipientIds(OdooRelation $item): bool
    {
        if (null === $this->recipient_ids) {
            return false;
        }

        return in_array($item, $this->recipient_ids);
    }

    /**
     * @param OdooRelation[]|null $recipient_ids
     */
    public function setRecipientIds(?array $recipient_ids): void
    {
        $this->recipient_ids = $recipient_ids;
    }

    /**
     * @return OdooRelation[]|null
     *
     * @SerializedName("recipient_ids")
     */
    public function getRecipientIds(): ?array
    {
        return $this->recipient_ids;
    }

    /**
     * @param OdooRelation $mail_message_id
     */
    public function setMailMessageId(OdooRelation $mail_message_id): void
    {
        $this->mail_message_id = $mail_message_id;
    }

    /**
     * @return string
     */
    public static function getOdooModelName(): string
    {
        return 'sms.resend';
    }
}

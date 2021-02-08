<?php

declare(strict_types=1);

namespace Tests\FluxSE\OdooApiClient\TestModel\Object\Mail\Tracking;

use DateTimeInterface;
use FluxSE\OdooApiClient\Model\Object\Base;
use FluxSE\OdooApiClient\Model\OdooRelation;
use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Odoo model : mail.tracking.value
 * ---
 * Name : mail.tracking.value
 * ---
 * Info :
 * Main super-class for regular database-persisted Odoo models.
 *
 *         Odoo models are created by inheriting from this class::
 *
 *                 class user(Model):
 *                         ...
 *
 *         The system will later instantiate the class once per database (on
 *         which the class' module is installed).
 */
final class Value extends Base
{
    /**
     * Field
     * ---
     * Relation : many2one (ir.model.fields)
     * @see \Tests\FluxSE\OdooApiClient\TestModel\Object\Ir\Model\Fields
     * ---
     * Searchable : yes
     * Sortable : yes
     *
     * @var OdooRelation
     */
    private $field;

    /**
     * Field Description
     * ---
     * Searchable : yes
     * Sortable : yes
     *
     * @var string
     */
    private $field_desc;

    /**
     * Field Type
     * ---
     * Searchable : yes
     * Sortable : yes
     *
     * @var string|null
     */
    private $field_type;

    /**
     * Field Groups
     * ---
     * Searchable : no
     * Sortable : no
     *
     * @var string|null
     */
    private $field_groups;

    /**
     * Old Value Integer
     * ---
     * Searchable : yes
     * Sortable : yes
     *
     * @var int|null
     */
    private $old_value_integer;

    /**
     * Old Value Float
     * ---
     * Searchable : yes
     * Sortable : yes
     *
     * @var float|null
     */
    private $old_value_float;

    /**
     * Old Value Monetary
     * ---
     * Searchable : yes
     * Sortable : yes
     *
     * @var float|null
     */
    private $old_value_monetary;

    /**
     * Old Value Char
     * ---
     * Searchable : yes
     * Sortable : yes
     *
     * @var string|null
     */
    private $old_value_char;

    /**
     * Old Value Text
     * ---
     * Searchable : yes
     * Sortable : yes
     *
     * @var string|null
     */
    private $old_value_text;

    /**
     * Old Value DateTime
     * ---
     * Searchable : yes
     * Sortable : yes
     *
     * @var DateTimeInterface|null
     */
    private $old_value_datetime;

    /**
     * New Value Integer
     * ---
     * Searchable : yes
     * Sortable : yes
     *
     * @var int|null
     */
    private $new_value_integer;

    /**
     * New Value Float
     * ---
     * Searchable : yes
     * Sortable : yes
     *
     * @var float|null
     */
    private $new_value_float;

    /**
     * New Value Monetary
     * ---
     * Searchable : yes
     * Sortable : yes
     *
     * @var float|null
     */
    private $new_value_monetary;

    /**
     * New Value Char
     * ---
     * Searchable : yes
     * Sortable : yes
     *
     * @var string|null
     */
    private $new_value_char;

    /**
     * New Value Text
     * ---
     * Searchable : yes
     * Sortable : yes
     *
     * @var string|null
     */
    private $new_value_text;

    /**
     * New Value Datetime
     * ---
     * Searchable : yes
     * Sortable : yes
     *
     * @var DateTimeInterface|null
     */
    private $new_value_datetime;

    /**
     * Message ID
     * ---
     * Relation : many2one (mail.message)
     * @see \Tests\FluxSE\OdooApiClient\TestModel\Object\Mail\Message
     * ---
     * Searchable : yes
     * Sortable : yes
     *
     * @var OdooRelation
     */
    private $mail_message_id;

    /**
     * Tracking field sequence
     * ---
     * Searchable : yes
     * Sortable : yes
     *
     * @var int|null
     */
    private $tracking_sequence;

    /**
     * Created by
     * ---
     * Relation : many2one (res.users)
     * @see \Tests\FluxSE\OdooApiClient\TestModel\Object\Res\Users
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
     * @see \Tests\FluxSE\OdooApiClient\TestModel\Object\Res\Users
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
     * @param OdooRelation $field Field
     *        ---
     *        Relation : many2one (ir.model.fields)
     *        @see \Tests\FluxSE\OdooApiClient\TestModel\Object\Ir\Model\Fields
     *        ---
     *        Searchable : yes
     *        Sortable : yes
     * @param string $field_desc Field Description
     *        ---
     *        Searchable : yes
     *        Sortable : yes
     * @param OdooRelation $mail_message_id Message ID
     *        ---
     *        Relation : many2one (mail.message)
     *        @see \Tests\FluxSE\OdooApiClient\TestModel\Object\Mail\Message
     *        ---
     *        Searchable : yes
     *        Sortable : yes
     */
    public function __construct(OdooRelation $field, string $field_desc, OdooRelation $mail_message_id)
    {
        $this->field = $field;
        $this->field_desc = $field_desc;
        $this->mail_message_id = $mail_message_id;
    }

    /**
     * @param OdooRelation $mail_message_id
     */
    public function setMailMessageId(OdooRelation $mail_message_id): void
    {
        $this->mail_message_id = $mail_message_id;
    }

    /**
     * @param float|null $new_value_monetary
     */
    public function setNewValueMonetary(?float $new_value_monetary): void
    {
        $this->new_value_monetary = $new_value_monetary;
    }

    /**
     * @return string|null
     *
     * @SerializedName("new_value_char")
     */
    public function getNewValueChar(): ?string
    {
        return $this->new_value_char;
    }

    /**
     * @param string|null $new_value_char
     */
    public function setNewValueChar(?string $new_value_char): void
    {
        $this->new_value_char = $new_value_char;
    }

    /**
     * @return string|null
     *
     * @SerializedName("new_value_text")
     */
    public function getNewValueText(): ?string
    {
        return $this->new_value_text;
    }

    /**
     * @param string|null $new_value_text
     */
    public function setNewValueText(?string $new_value_text): void
    {
        $this->new_value_text = $new_value_text;
    }

    /**
     * @return DateTimeInterface|null
     *
     * @SerializedName("new_value_datetime")
     */
    public function getNewValueDatetime(): ?DateTimeInterface
    {
        return $this->new_value_datetime;
    }

    /**
     * @param DateTimeInterface|null $new_value_datetime
     */
    public function setNewValueDatetime(?DateTimeInterface $new_value_datetime): void
    {
        $this->new_value_datetime = $new_value_datetime;
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
     * @return int|null
     *
     * @SerializedName("tracking_sequence")
     */
    public function getTrackingSequence(): ?int
    {
        return $this->tracking_sequence;
    }

    /**
     * @param float|null $new_value_float
     */
    public function setNewValueFloat(?float $new_value_float): void
    {
        $this->new_value_float = $new_value_float;
    }

    /**
     * @param int|null $tracking_sequence
     */
    public function setTrackingSequence(?int $tracking_sequence): void
    {
        $this->tracking_sequence = $tracking_sequence;
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
     * @param OdooRelation|null $create_uid
     */
    public function setCreateUid(?OdooRelation $create_uid): void
    {
        $this->create_uid = $create_uid;
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
     * @param DateTimeInterface|null $create_date
     */
    public function setCreateDate(?DateTimeInterface $create_date): void
    {
        $this->create_date = $create_date;
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
     * @param OdooRelation|null $write_uid
     */
    public function setWriteUid(?OdooRelation $write_uid): void
    {
        $this->write_uid = $write_uid;
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
     * @param DateTimeInterface|null $write_date
     */
    public function setWriteDate(?DateTimeInterface $write_date): void
    {
        $this->write_date = $write_date;
    }

    /**
     * @return float|null
     *
     * @SerializedName("new_value_monetary")
     */
    public function getNewValueMonetary(): ?float
    {
        return $this->new_value_monetary;
    }

    /**
     * @return float|null
     *
     * @SerializedName("new_value_float")
     */
    public function getNewValueFloat(): ?float
    {
        return $this->new_value_float;
    }

    /**
     * @return OdooRelation
     *
     * @SerializedName("field")
     */
    public function getField(): OdooRelation
    {
        return $this->field;
    }

    /**
     * @return float|null
     *
     * @SerializedName("old_value_float")
     */
    public function getOldValueFloat(): ?float
    {
        return $this->old_value_float;
    }

    /**
     * @param OdooRelation $field
     */
    public function setField(OdooRelation $field): void
    {
        $this->field = $field;
    }

    /**
     * @return string
     *
     * @SerializedName("field_desc")
     */
    public function getFieldDesc(): string
    {
        return $this->field_desc;
    }

    /**
     * @param string $field_desc
     */
    public function setFieldDesc(string $field_desc): void
    {
        $this->field_desc = $field_desc;
    }

    /**
     * @return string|null
     *
     * @SerializedName("field_type")
     */
    public function getFieldType(): ?string
    {
        return $this->field_type;
    }

    /**
     * @param string|null $field_type
     */
    public function setFieldType(?string $field_type): void
    {
        $this->field_type = $field_type;
    }

    /**
     * @return string|null
     *
     * @SerializedName("field_groups")
     */
    public function getFieldGroups(): ?string
    {
        return $this->field_groups;
    }

    /**
     * @param string|null $field_groups
     */
    public function setFieldGroups(?string $field_groups): void
    {
        $this->field_groups = $field_groups;
    }

    /**
     * @return int|null
     *
     * @SerializedName("old_value_integer")
     */
    public function getOldValueInteger(): ?int
    {
        return $this->old_value_integer;
    }

    /**
     * @param int|null $old_value_integer
     */
    public function setOldValueInteger(?int $old_value_integer): void
    {
        $this->old_value_integer = $old_value_integer;
    }

    /**
     * @param float|null $old_value_float
     */
    public function setOldValueFloat(?float $old_value_float): void
    {
        $this->old_value_float = $old_value_float;
    }

    /**
     * @param int|null $new_value_integer
     */
    public function setNewValueInteger(?int $new_value_integer): void
    {
        $this->new_value_integer = $new_value_integer;
    }

    /**
     * @return float|null
     *
     * @SerializedName("old_value_monetary")
     */
    public function getOldValueMonetary(): ?float
    {
        return $this->old_value_monetary;
    }

    /**
     * @param float|null $old_value_monetary
     */
    public function setOldValueMonetary(?float $old_value_monetary): void
    {
        $this->old_value_monetary = $old_value_monetary;
    }

    /**
     * @return string|null
     *
     * @SerializedName("old_value_char")
     */
    public function getOldValueChar(): ?string
    {
        return $this->old_value_char;
    }

    /**
     * @param string|null $old_value_char
     */
    public function setOldValueChar(?string $old_value_char): void
    {
        $this->old_value_char = $old_value_char;
    }

    /**
     * @return string|null
     *
     * @SerializedName("old_value_text")
     */
    public function getOldValueText(): ?string
    {
        return $this->old_value_text;
    }

    /**
     * @param string|null $old_value_text
     */
    public function setOldValueText(?string $old_value_text): void
    {
        $this->old_value_text = $old_value_text;
    }

    /**
     * @return DateTimeInterface|null
     *
     * @SerializedName("old_value_datetime")
     */
    public function getOldValueDatetime(): ?DateTimeInterface
    {
        return $this->old_value_datetime;
    }

    /**
     * @param DateTimeInterface|null $old_value_datetime
     */
    public function setOldValueDatetime(?DateTimeInterface $old_value_datetime): void
    {
        $this->old_value_datetime = $old_value_datetime;
    }

    /**
     * @return int|null
     *
     * @SerializedName("new_value_integer")
     */
    public function getNewValueInteger(): ?int
    {
        return $this->new_value_integer;
    }

    /**
     * @return string
     */
    public static function getOdooModelName(): string
    {
        return 'mail.tracking.value';
    }
}

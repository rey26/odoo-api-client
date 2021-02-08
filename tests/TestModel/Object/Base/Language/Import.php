<?php

declare(strict_types=1);

namespace Tests\FluxSE\OdooApiClient\TestModel\Object\Base\Language;

use DateTimeInterface;
use FluxSE\OdooApiClient\Model\Object\Base;
use FluxSE\OdooApiClient\Model\OdooRelation;
use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Odoo model : base.language.import
 * ---
 * Name : base.language.import
 * ---
 * Info :
 * Model super-class for transient records, meant to be temporarily
 *         persistent, and regularly vacuum-cleaned.
 *
 *         A TransientModel has a simplified access rights management, all users can
 *         create new records, and may only access the records they created. The
 *         superuser has unrestricted access to all TransientModel records.
 */
final class Import extends Base
{
    /**
     * Language Name
     * ---
     * Searchable : yes
     * Sortable : yes
     *
     * @var string
     */
    private $name;

    /**
     * ISO Code
     * ---
     * ISO Language and Country code, e.g. en_US
     * ---
     * Searchable : yes
     * Sortable : yes
     *
     * @var string
     */
    private $code;

    /**
     * File
     * ---
     * Searchable : yes
     * Sortable : yes
     *
     * @var mixed
     */
    private $data;

    /**
     * File Name
     * ---
     * Searchable : yes
     * Sortable : yes
     *
     * @var string
     */
    private $filename;

    /**
     * Overwrite Existing Terms
     * ---
     * If you enable this option, existing translations (including custom ones) will be overwritten and replaced by
     * those in this file
     * ---
     * Searchable : yes
     * Sortable : yes
     *
     * @var bool|null
     */
    private $overwrite;

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
     * @param string $name Language Name
     *        ---
     *        Searchable : yes
     *        Sortable : yes
     * @param string $code ISO Code
     *        ---
     *        ISO Language and Country code, e.g. en_US
     *        ---
     *        Searchable : yes
     *        Sortable : yes
     * @param mixed $data File
     *        ---
     *        Searchable : yes
     *        Sortable : yes
     * @param string $filename File Name
     *        ---
     *        Searchable : yes
     *        Sortable : yes
     */
    public function __construct(string $name, string $code, $data, string $filename)
    {
        $this->name = $name;
        $this->code = $code;
        $this->data = $data;
        $this->filename = $filename;
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
     * @param bool|null $overwrite
     */
    public function setOverwrite(?bool $overwrite): void
    {
        $this->overwrite = $overwrite;
    }

    /**
     * @return string
     *
     * @SerializedName("name")
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return bool|null
     *
     * @SerializedName("overwrite")
     */
    public function isOverwrite(): ?bool
    {
        return $this->overwrite;
    }

    /**
     * @param string $filename
     */
    public function setFilename(string $filename): void
    {
        $this->filename = $filename;
    }

    /**
     * @return string
     *
     * @SerializedName("filename")
     */
    public function getFilename(): string
    {
        return $this->filename;
    }

    /**
     * @param mixed $data
     */
    public function setData($data): void
    {
        $this->data = $data;
    }

    /**
     * @return mixed
     *
     * @SerializedName("data")
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param string $code
     */
    public function setCode(string $code): void
    {
        $this->code = $code;
    }

    /**
     * @return string
     *
     * @SerializedName("code")
     */
    public function getCode(): string
    {
        return $this->code;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public static function getOdooModelName(): string
    {
        return 'base.language.import';
    }
}

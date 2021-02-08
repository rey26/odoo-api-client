<?php

declare(strict_types=1);

namespace Tests\FluxSE\OdooApiClient\TestModel\Object\Account\Group;

use DateTimeInterface;
use FluxSE\OdooApiClient\Model\Object\Base;
use FluxSE\OdooApiClient\Model\OdooRelation;
use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Odoo model : account.group.template
 * ---
 * Name : account.group.template
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
final class Template extends Base
{
    /**
     * Parent
     * ---
     * Relation : many2one (account.group.template)
     * @see \Tests\FluxSE\OdooApiClient\TestModel\Object\Account\Group\Template
     * ---
     * Searchable : yes
     * Sortable : yes
     *
     * @var OdooRelation|null
     */
    private $parent_id;

    /**
     * Name
     * ---
     * Searchable : yes
     * Sortable : yes
     *
     * @var string
     */
    private $name;

    /**
     * Code Prefix Start
     * ---
     * Searchable : yes
     * Sortable : yes
     *
     * @var string|null
     */
    private $code_prefix_start;

    /**
     * Code Prefix End
     * ---
     * Searchable : yes
     * Sortable : yes
     *
     * @var string|null
     */
    private $code_prefix_end;

    /**
     * Chart Template
     * ---
     * Relation : many2one (account.chart.template)
     * @see \Tests\FluxSE\OdooApiClient\TestModel\Object\Account\Chart\Template
     * ---
     * Searchable : yes
     * Sortable : yes
     *
     * @var OdooRelation
     */
    private $chart_template_id;

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
     * @param string $name Name
     *        ---
     *        Searchable : yes
     *        Sortable : yes
     * @param OdooRelation $chart_template_id Chart Template
     *        ---
     *        Relation : many2one (account.chart.template)
     *        @see \Tests\FluxSE\OdooApiClient\TestModel\Object\Account\Chart\Template
     *        ---
     *        Searchable : yes
     *        Sortable : yes
     */
    public function __construct(string $name, OdooRelation $chart_template_id)
    {
        $this->name = $name;
        $this->chart_template_id = $chart_template_id;
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
     * @param OdooRelation $chart_template_id
     */
    public function setChartTemplateId(OdooRelation $chart_template_id): void
    {
        $this->chart_template_id = $chart_template_id;
    }

    /**
     * @return OdooRelation|null
     *
     * @SerializedName("parent_id")
     */
    public function getParentId(): ?OdooRelation
    {
        return $this->parent_id;
    }

    /**
     * @return OdooRelation
     *
     * @SerializedName("chart_template_id")
     */
    public function getChartTemplateId(): OdooRelation
    {
        return $this->chart_template_id;
    }

    /**
     * @param string|null $code_prefix_end
     */
    public function setCodePrefixEnd(?string $code_prefix_end): void
    {
        $this->code_prefix_end = $code_prefix_end;
    }

    /**
     * @return string|null
     *
     * @SerializedName("code_prefix_end")
     */
    public function getCodePrefixEnd(): ?string
    {
        return $this->code_prefix_end;
    }

    /**
     * @param string|null $code_prefix_start
     */
    public function setCodePrefixStart(?string $code_prefix_start): void
    {
        $this->code_prefix_start = $code_prefix_start;
    }

    /**
     * @return string|null
     *
     * @SerializedName("code_prefix_start")
     */
    public function getCodePrefixStart(): ?string
    {
        return $this->code_prefix_start;
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
     *
     * @SerializedName("name")
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param OdooRelation|null $parent_id
     */
    public function setParentId(?OdooRelation $parent_id): void
    {
        $this->parent_id = $parent_id;
    }

    /**
     * @return string
     */
    public static function getOdooModelName(): string
    {
        return 'account.group.template';
    }
}

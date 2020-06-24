<?php

declare(strict_types=1);

namespace Flux\OdooApiClient\Model\Object\Account\Tax;

use DateTimeInterface;
use Flux\OdooApiClient\Model\Object\Account\Account\Template as Template3;
use Flux\OdooApiClient\Model\Object\Account\Chart\Template as TemplateAlias;
use Flux\OdooApiClient\Model\Object\Account\Tax\Repartition\Line\Template as Template2;
use Flux\OdooApiClient\Model\Object\Account\Tax\Template as TemplateAliasAlias;
use Flux\OdooApiClient\Model\Object\Base;
use Flux\OdooApiClient\Model\Object\Res\Users;

/**
 * Odoo model : account.tax.template
 * Name : account.tax.template
 *
 * Main super-class for regular database-persisted Odoo models.
 *
 * Odoo models are created by inheriting from this class::
 *
 * class user(Model):
 * ...
 *
 * The system will later instantiate the class once per database (on
 * which the class' module is installed).
 */
final class Template extends Base
{
    /**
     * Chart Template
     *
     * @var null|TemplateAlias
     */
    private $chart_template_id;

    /**
     * Tax Name
     *
     * @var null|string
     */
    private $name;

    /**
     * Tax Scope
     *
     * @var null|array
     */
    private $type_tax_use;

    /**
     * Tax Computation
     *
     * @var null|array
     */
    private $amount_type;

    /**
     * Active
     *
     * @var bool
     */
    private $active;

    /**
     * Children Taxes
     *
     * @var TemplateAliasAlias
     */
    private $children_tax_ids;

    /**
     * Sequence
     *
     * @var null|int
     */
    private $sequence;

    /**
     * Amount
     *
     * @var null|float
     */
    private $amount;

    /**
     * Display on Invoices
     *
     * @var string
     */
    private $description;

    /**
     * Included in Price
     *
     * @var bool
     */
    private $price_include;

    /**
     * Affect Subsequent Taxes
     *
     * @var bool
     */
    private $include_base_amount;

    /**
     * Analytic Cost
     *
     * @var bool
     */
    private $analytic;

    /**
     * Repartition for Invoices
     *
     * @var Template2
     */
    private $invoice_repartition_line_ids;

    /**
     * Repartition for Refund Invoices
     *
     * @var Template2
     */
    private $refund_repartition_line_ids;

    /**
     * Tax Group
     *
     * @var Group
     */
    private $tax_group_id;

    /**
     * Tax Due
     *
     * @var array
     */
    private $tax_exigibility;

    /**
     * Cash Basis Transition Account
     *
     * @var Template3
     */
    private $cash_basis_transition_account_id;

    /**
     * Base Tax Received Account
     *
     * @var Template3
     */
    private $cash_basis_base_account_id;

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
     * @param null|TemplateAlias $chart_template_id
     */
    public function setChartTemplateId(TemplateAlias $chart_template_id): void
    {
        $this->chart_template_id = $chart_template_id;
    }

    /**
     * @param bool $include_base_amount
     */
    public function setIncludeBaseAmount(bool $include_base_amount): void
    {
        $this->include_base_amount = $include_base_amount;
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
    public function getCreateDate(): DateTimeInterface
    {
        return $this->create_date;
    }

    /**
     * @return Users
     */
    public function getCreateUid(): Users
    {
        return $this->create_uid;
    }

    /**
     * @param Template3 $cash_basis_base_account_id
     */
    public function setCashBasisBaseAccountId(Template3 $cash_basis_base_account_id): void
    {
        $this->cash_basis_base_account_id = $cash_basis_base_account_id;
    }

    /**
     * @param Template3 $cash_basis_transition_account_id
     */
    public function setCashBasisTransitionAccountId(Template3 $cash_basis_transition_account_id): void
    {
        $this->cash_basis_transition_account_id = $cash_basis_transition_account_id;
    }

    /**
     * @param array $tax_exigibility
     */
    public function removeTaxExigibility(array $tax_exigibility): void
    {
        if ($this->hasTaxExigibility($tax_exigibility)) {
            $index = array_search($tax_exigibility, $this->tax_exigibility);
            unset($this->tax_exigibility[$index]);
        }
    }

    /**
     * @param array $tax_exigibility
     */
    public function addTaxExigibility(array $tax_exigibility): void
    {
        if ($this->hasTaxExigibility($tax_exigibility)) {
            return;
        }

        $this->tax_exigibility[] = $tax_exigibility;
    }

    /**
     * @param array $tax_exigibility
     * @param bool $strict
     *
     * @return bool
     */
    public function hasTaxExigibility(array $tax_exigibility, bool $strict = true): bool
    {
        return in_array($tax_exigibility, $this->tax_exigibility, $strict);
    }

    /**
     * @param array $tax_exigibility
     */
    public function setTaxExigibility(array $tax_exigibility): void
    {
        $this->tax_exigibility = $tax_exigibility;
    }

    /**
     * @param Group $tax_group_id
     */
    public function setTaxGroupId(Group $tax_group_id): void
    {
        $this->tax_group_id = $tax_group_id;
    }

    /**
     * @param Template2 $refund_repartition_line_ids
     */
    public function setRefundRepartitionLineIds(Template2 $refund_repartition_line_ids): void
    {
        $this->refund_repartition_line_ids = $refund_repartition_line_ids;
    }

    /**
     * @param Template2 $invoice_repartition_line_ids
     */
    public function setInvoiceRepartitionLineIds(Template2 $invoice_repartition_line_ids): void
    {
        $this->invoice_repartition_line_ids = $invoice_repartition_line_ids;
    }

    /**
     * @param bool $analytic
     */
    public function setAnalytic(bool $analytic): void
    {
        $this->analytic = $analytic;
    }

    /**
     * @param bool $price_include
     */
    public function setPriceInclude(bool $price_include): void
    {
        $this->price_include = $price_include;
    }

    /**
     * @param null|string $name
     */
    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    /**
     * @param string $description
     */
    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    /**
     * @param null|float $amount
     */
    public function setAmount(?float $amount): void
    {
        $this->amount = $amount;
    }

    /**
     * @param null|int $sequence
     */
    public function setSequence(?int $sequence): void
    {
        $this->sequence = $sequence;
    }

    /**
     * @param TemplateAliasAlias $children_tax_ids
     */
    public function setChildrenTaxIds(TemplateAliasAlias $children_tax_ids): void
    {
        $this->children_tax_ids = $children_tax_ids;
    }

    /**
     * @param bool $active
     */
    public function setActive(bool $active): void
    {
        $this->active = $active;
    }

    /**
     * @param ?array $amount_type
     */
    public function removeAmountType(?array $amount_type): void
    {
        if ($this->hasAmountType($amount_type)) {
            $index = array_search($amount_type, $this->amount_type);
            unset($this->amount_type[$index]);
        }
    }

    /**
     * @param ?array $amount_type
     */
    public function addAmountType(?array $amount_type): void
    {
        if ($this->hasAmountType($amount_type)) {
            return;
        }

        if (null === $this->amount_type) {
            $this->amount_type = [];
        }

        $this->amount_type[] = $amount_type;
    }

    /**
     * @param ?array $amount_type
     * @param bool $strict
     *
     * @return bool
     */
    public function hasAmountType(?array $amount_type, bool $strict = true): bool
    {
        if (null === $this->amount_type) {
            return false;
        }

        return in_array($amount_type, $this->amount_type, $strict);
    }

    /**
     * @param null|array $amount_type
     */
    public function setAmountType(?array $amount_type): void
    {
        $this->amount_type = $amount_type;
    }

    /**
     * @param ?array $type_tax_use
     */
    public function removeTypeTaxUse(?array $type_tax_use): void
    {
        if ($this->hasTypeTaxUse($type_tax_use)) {
            $index = array_search($type_tax_use, $this->type_tax_use);
            unset($this->type_tax_use[$index]);
        }
    }

    /**
     * @param ?array $type_tax_use
     */
    public function addTypeTaxUse(?array $type_tax_use): void
    {
        if ($this->hasTypeTaxUse($type_tax_use)) {
            return;
        }

        if (null === $this->type_tax_use) {
            $this->type_tax_use = [];
        }

        $this->type_tax_use[] = $type_tax_use;
    }

    /**
     * @param ?array $type_tax_use
     * @param bool $strict
     *
     * @return bool
     */
    public function hasTypeTaxUse(?array $type_tax_use, bool $strict = true): bool
    {
        if (null === $this->type_tax_use) {
            return false;
        }

        return in_array($type_tax_use, $this->type_tax_use, $strict);
    }

    /**
     * @param null|array $type_tax_use
     */
    public function setTypeTaxUse(?array $type_tax_use): void
    {
        $this->type_tax_use = $type_tax_use;
    }

    /**
     * @return DateTimeInterface
     */
    public function getWriteDate(): DateTimeInterface
    {
        return $this->write_date;
    }
}

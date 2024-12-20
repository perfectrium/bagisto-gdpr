<?php

namespace Webkul\GDPR\DataGrids\Shop;

use Illuminate\Support\Facades\DB;
use Webkul\DataGrid\DataGrid;

class GDPRRequestList extends DataGrid
{
    /**
     * @var integer
     */
    protected $primaryColumn = 'id';

    protected $sortOrder = 'desc'; //asc or desc

    public function prepareQueryBuilder()
    {
        $customerId = auth()->guard('customer')->user()->id;

        return DB::table('gdpr_data_request as gdpr')
            ->addSelect('gdpr.id','gdpr.request_status','gdpr.request_type','gdpr.message','gdpr.created_at','gdpr.updated_at')
            ->where('gdpr.customer_id', $customerId);
    }

    public function prepareColumns()
    {
        $this->addColumn([
            'index' =>  'id',
            'label' => trans('gdpr::app.shop.customer-index-field.id'),
            'type' => 'integer',
            'searchable' => true,
            'sortable' => true,
            'filterable' => true
        ]);

        $this->addColumn([
            'index' => 'request_status',
            'label' => trans('gdpr::app.shop.customer-index-field.request-status'),
            'type' => 'string',
            'searchable' => true,
            'sortable' => false,
            'filterable' => false,
        ]);

        $this->addColumn([
            'index' => 'request_type',
            'label' => trans('gdpr::app.shop.customer-index-field.request-type'),
            'type' => 'string',
            'sortable' => false,
            'searchable' => true,
            'filterable' => false,
        ]);

        $this->addColumn([
            'index' => 'message',
            'label' => trans('gdpr::app.shop.customer-index-field.message'),
            'type' => 'string',
            'sortable' => false,
            'searchable' => true,
            'filterable' => false,
        ]);

        $this->addColumn([
            'index' => 'created_at',
            'label' => trans('gdpr::app.shop.customer-index-field.created-at'),
            'type' => 'datetime',
            'sortable' => true,
            'searchable' => false,
            'filterable' => true
        ]);

        $this->addColumn([
            'index' => 'updated_at',
            'label' => trans('gdpr::app.shop.customer-index-field.updated-at'),
            'type' => 'datetime',
            'sortable' => true,
            'searchable' => false,
            'filterable' => true
        ]);
    }
}

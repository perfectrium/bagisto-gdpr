<?php

return [
    'shop' => [
        'customer' => [
            'menu-name' => 'Data Request',
            'title' => 'Data Request',
            'terms-and-conditions' => 'Terms & Conditions',
            'cookie' => [
                'cookie-description' => 'We and selected third parties use cookies or similar technologies for technical purposes and, with your consent, for other purposes as specified in the',
                'privacy-policy' => 'Privacy Policy',
                'learn-more-and-customize' => 'Learn more and customize',
                'accept' => 'Accept',
                'reject'   => 'Reject',
                'your-cookie-consent-preferences' => 'Your Cookie Consent Preferences',
                'save-and-continue' => 'Save and continue',
                'strictly-necessary' => 'Strictly Necessary',
                'basic-interactions-and-functionalities' => 'Basic Interactions & Functionalities',
                'experience-enhancement' => 'Experience Enhancement',
                'measurement' => 'Measurement',
                'targeting-and-advertising' => 'Targeting & Advertising',

            ]
        ],

        'customer-gdpr-data-request' => [
            'heading' => 'Customer Data Request',
            'request-data-access' => 'Request Data Access',
            'get-pdf' => 'Get Pdf',
            'get-html' => 'Get Html',
            'request-data-update' => 'Request Data Update',
            'update-description' => 'Update Description',
            'submit-request' => 'Submit Request',
            'request-to-delete-account' => 'Request To Delete Account',
            'delete-reason' => 'Delete Reason',
            'request-list' => 'Request List',
            'request-type-update' => 'Update',
            'request-type-delete' => 'Delete',
            'request-sent-successfully' => 'Request Sent Successfully',
            'success-verify' => 'Request Sent Successfully, an e-mail has been sent for verification',
            'success-verify-email-unsent' => 'Request Sent Successfully, but verification e-mail unsent',
            'unable-to-sent' => 'Unable To Sent Request, Try Again Later',
        ],

        'pdf' => [
            'default-store-view' => 'Default Store View',
            'account-information' => 'Account Information',
            'first-name'    =>  'First Name',
            'last-name'     =>  'Last Name',
            'email'         =>  'Email',
            'gender'        =>  'Gender',
            'dob'           =>  'Date Of Birth',
            'phone'         =>  'Phone',
            'address-information' => 'Address Information',
            'address' => 'Address',
            'city' => 'City',
            'company'   => 'Company',
            'country'   => 'Country',
            'order-information' => 'Order Information',
            'order' =>  'Order',
            'order-id'  => 'Order ID',
            'status'    => 'Status',
            'shipping'  => 'Shipping',
            'customer-first-name'   => 'Customer First Name',
            'customer-last-name'  =>  'Customer Last Name',
            'customer-company-name' => 'Customer Company Name',
            'order-quantity'    => 'Order Quantity',
            'order-amount'  => 'Order Amount',
        ],

        'customer-index-field' => [
            'id' => 'Id',
            'customer_id' => 'Customer ID',
            'request-status' => 'Request Status',
            'request-type' => 'Request Type',
            'status' => 'Status',
            'message' => 'Message',
            'created-at' => 'Created Date',
            'updated-at' => 'Updated Date'
        ],

    ],

    'mail' => [
        'new-data-request' => [
            'heading' => 'Data Request',
            'hello' => 'Hello :name',
            'gdpr-id' => 'GDPR Id :',
            'summary' => 'Summary of Request',
            'request-type' => 'Request Type',
            'request-status' => 'Request Status',
            'message' => 'Message',
            'thank-you' => 'Thank you',
            'status-of-request' => 'Status Of Request',
            'new-request-for-data-delete' => 'New Request For Data Delete',
            'new-request-for-data-update' => 'New Request For Data Update',
        ],
        'customer-data-table-heading' => [
            'product-name' => 'Product Name',
            'sku' => 'Sku',
            'qty' => 'Qty',
            'reason' => 'Reason',
        ],
    ],

    'admin' => [
        'layouts' => [
            'gdpr' => 'GDPR',
            'gdpr-data-request' => 'GDPR Data Request',
        ],
        'tabs' => [
            'gdpr' => 'GDPR'
        ],
        'title' => [
            'index' => 'GDPR',
            'data-request' => 'GDPR Data Request',
            'edit' => 'Edit Data Request',
            'edit-heading' => 'Edit Data Request'
        ],

        'create-gdpr' => [
            'create-btn-title' => 'Create GDPR',
            'general' => 'General Settings',
            'general-data-request' => 'General',
            'customer-agreement' => 'Customer Agreement',
            'enabled-gdpr' => 'Enabled GDPR',
            'enabled-customer-data-agreement' => 'Enabled Customer Data Agreement',
            'agreement-checkbox-label' => 'Agreement Checkbox Label',
            'agreement-checkbox-link-label' => 'Agreement Checkbox Link Text',
            'agreement-content' => 'Agreement Content',
            'agreement-cms-page' => 'Select Terms & Conditions page',
            'cookie-message-settings' => 'Cookie Message Settings',
            'enabled-cookie-notice' => 'Enabled Cookie Notice',
            'cookie-block-display-position' => 'Cookie Block Display Position',
            'cookie-static-block-identifier' => 'Cookie Static Block Identifier',
            'email-templates-settings' => 'Email Templates Settings',
            'data-update-request-template' => 'Data Update Request Template',
            'data-delete-request-template' => 'Data Delete Request Template',
            'request-status-update-template' => 'Request Status Update Template',
            'request-status-delete-template' => 'Request Status Delete Template',
            'update-gdpr-data' => 'Update GDPR Data',
            'update-success' => 'GDPR Updated Successfully',
            'update-fail' => 'Unable to Update',
            'save-btn' => 'Save',
            'status' => 'Status',
        ],

        'admin-name' => [
            'gdpr' => 'GDPR',
        ],

        'gdpr-tab' => [
            'heading' => 'GDPR',
            'data-request-heading' => 'GDPR Data Request',
            'customer-name' => 'Customer Name'
        ],

        'data-request' => [
            'edit-data-request' => 'Edit Data Request',
            'delete-data-request' => 'Delete Data Request'
        ],

        'settings' => [
            'fields' => [
                'channel-code' => 'Channel Code',
                'locale-code' => 'Locale Code',
                'active' => 'Active',
                'inactive' => 'Inactive',
                'enabled-gdpr' => 'GDPR',
                'enabled-customer-data-agreement' => 'Customer Data Agreement',
                'enabled-cookie-notice' => 'Cookie Notice',
            ],
            'response' => [
                'delete-success' => 'GDPR setting deleted successfully',
                'delete-failed' => 'Unable to Delete',
            ],
        ],
    ],

    'status' => [
        'status-name' => [
            'pending' => 'Pending',
            'processing' => 'Processing',
            'item_canceled' => 'Item Canceled',
            'solved' => 'Solved',
            'declined' => 'Declined',
            'received_package' => 'Received Package',
            'dispatched_package' => 'Dispatched Package',
            'not_received_package_yet' => 'Not received package yet',
        ],
    ],

    'response' => [
        'update-success' => 'Data Request updated successfully and Email Sent to Customer.',
        'update-success-without-email' => 'Data Request updated successfully.',
        'delete-success' => 'Data Request deleted successfully.',
        'attribute-reason-error' => 'Unable to Delete.',
        'update-success-unsent-email' => 'Data Request updated successfully But Email unsent to Customer.',
    ],

    'general' => [
        'create' => 'Create'
    ]
];

define(
    [
        'uiComponent',
        'Magento_Checkout/js/model/payment/renderer-list'
    ],
    function (
        Component,
        rendererList
    ) {
        'use strict';
        rendererList.push(
            {
                type: 'cashpayment',
                component: 'Pointeger_CashPayment/js/view/payment/method-renderer/cashpayment'
            }
        );
        return Component.extend({});
    }
);

<?php
/**
 * Novalnet payment module
 *
 * This file is used for the admin English language.
 *
 * @author    Novalnet AG
 * @copyright Copyright by Novalnet
 * @link      https://www.novalnet.de
 * @license   https://www.novalnet.de/payment-plugins/kostenlos/lizenz
 *
 * Script: novalnet_lang.php
 */

$sLangName = 'English';

$aLang = [
    'charset'                                           => 'UTF-8',
    'TAB_NOVALNET_ORDERS'                                 => 'Novalnet',
    'SHOP_MODULE_GROUP_novalnetGlobalSettings'          => 'Novalnet API Configuration',
    'SHOP_MODULE_sProductActivationKey'                 => 'Product activation key',
    'HELP_SHOP_MODULE_sProductActivationKey'            => 'Get your Product activation key from the <a class="novalnet_config_link" href="https://admin.novalnet.de" target="_blank">Novalnet Admin Portal</a> Project > Choose your project > API credentials >API Signature (Product activation key)',
    'SHOP_MODULE_sPaymentAccessKey'                     => 'Payment access key',
    'HELP_SHOP_MODULE_sPaymentAccessKey'                => 'Get your Payment access key from the <a class="novalnet_config_link" href="https://admin.novalnet.de" target="_blank">Novalnet Admin Portal</a> Project > Choose your project > API credentials >Payment access key',
    'SHOP_MODULE_sTariffId'                             => 'Select Tariff ID',
    'HELP_SHOP_MODULE_sTariffId'                        => 'Select a Tariff ID to match the preferred tariff plan you created at the Novalnet Admin Portal for this project ',
    'SHOP_MODULE_sTariffId_None'                        => 'None',
    'SHOP_MODULE_GROUP_novalnetGlobalSettingsWebhook'   => 'Notification / Webhook URL Setup',
    'SHOP_MODULE_blWebhookNotification'                 => 'Allow manual testing of the Notification / Webhook URL',
    'HELP_SHOP_MODULE_blWebhookNotification'            => 'Enable this to test the Novalnet Notification / Webhook URL manually. Disable this before setting your shop live to block unauthorized calls from external parties',
    'SHOP_MODULE_blWebhookSendMail'                     => 'Send e-mail to',
    'HELP_MODULE_blWebhookSendMail'                     => 'Notification / Webhook URL execution messages will be sent to this e-mail',
    'SHOP_MODULE_sWebhooksUrl'                          => 'Notification / Webhook URL',
    'HELP_SHOP_MODULE_sWebhooksUrl'                     => 'Notification / Webhook URL is required to keep the merchant’s database/system synchronized with the Novalnet account (e.g. delivery status). Refer the Installation Guide for more information',
    'NOVALNET_CONFIRM_BOOKED'                           => 'Are you sure you want to book the order amount?',
    'NOVALNET_PAYMENT_NOT'                              => 'This tab is for novalnet orders only',
    'NOVALNET_INSTALMENT_SNO'                           => 'S.no',
    'NOVALNET_INSTALMENT_TID'                           => 'Novalnet transaction ID',
    'NOVALNET_INSTALMENT_DATE'                          => 'Date',
    'NOVALNET_INSTALMENT_AMOUNT'                        => 'Amount',
    'NOVALNET_INSTALMENT_NEXT_CYCLE'                    => 'Next cycle date',
    'NOVALNET_INSTALMENT_STATUS'                        => 'Status',
    'NOVALNET_INSTALMENT_REFUND'                        => 'Instalment refund',
    'NOVALNET_INSTALMENT_REFUND_ACTION'                 => 'Refund',
    'NOVALNET_INSTALMENT_REFUND_AMOUNT'                 => 'Refund amount',
    'NOVALNET_INSTALMENT_REFUND_REASON'                 => 'Reason for refund (optional)',
    'NOVALNET_INSTALMENT_REFUND_CONFIRM'                => 'Confirm',
    'NOVALNET_INSTALMENT_REFUND_CANCEL'                 => 'Cancel',
    'NOVALNET_INSTALMENT_CANCEL_ALL_CYCLE'              => 'Cancel All Instalment',
    'NOVALNET_INSTALMENT_CANCEL_REMAINING_CYCLE'        => 'Cancel All Remaining Instalment',
    'NOVALNET_INSTALMENT_CANCEL'                        => 'Instalment Cancel',
    'NOVALNET_INSTALMENT_HEADER'                        => 'Instalment Orders Details',
    'NOVALNET_AMOUNT_BOOKED_MESSAGE'                    => '<br><br>Your order has been booked with the amount of %s. Your new TID for the booked amount: %s',
    'NOVALNET_BOOK_AMOUNT_TITLE'                        => 'Book transaction',
    'NOVALNET_BOOK_AMOUNT_LABEL'                        => 'Transaction booking amount',
    'NOVALNET_PAYMENT_ACTION_CAPTURE'                   => 'Capture',
    'NOVALNET_PAYMENT_ACTION_AUTHORIZE'                 => 'Authorize',
    'NOVALNET_MANAGE_TRANSACTION_TITLE'                 => 'Manage transaction process',
    'NOVALNET_MANAGE_TRANSACTION_LABEL'                 => 'Please select status',
    'NOVALNET_CONFIRM'                                  => 'Confirm',
    'NOVALNET_CANCEL'                                   => 'Cancel',
    'NOVALNET_UPDATE_AMOUNT_TITLE'                      => 'Amount update',
    'NOVALNET_UPDATE_AMOUNT_LABEL'                      => 'Update transaction amount',
    'NOVALNET_CENTS'                                    => '(in minimum unit of currency.<br> E.g. enter 100 which is equal to 1.00)',
    'NOVALNET_REFUND_AMOUNT_TITLE'                      => 'Refund process',
    'NOVALNET_REFUND_AMOUNT_LABEL'                      => 'Please enter the refund amount',
    'NOVALNET_REFUND_REFERENCE_LABEL'                   => 'Reason for refund (optional):',
    'NOVALNET_AMOUNT_REFUNDED_PARENT_TID_MESSAGE'       => '<br><br>The refund has been executed for the TID: %s with the amount of %s',
    'NOVALNET_AMOUNT_REFUNDED_CHILD_TID_MESSAGE'        => '. Your new TID for the refund amount: %s',
    'NOVALNET_STATUS_UPDATE_CONFIRMED_MESSAGE'          => '<br><br>The transaction has been confirmed on %s, %s <br>',
    'NOVALNET_STATUS_UPDATE_CANCELED_MESSAGE'           => '<br><br>The transaction has been canceled on %s, %s <br>',
    'NOVALNET_AMOUNT_UPDATED_MESSAGE'                   => '<br><br><br>The transaction amount %s has been updated successfully on %s, %s',
    'NOVALNET_TRANSACTION_DETAILS'                      => 'Novalnet transaction details',
    'NOVALNET_TRANSACTION_ID'                           => '<br> Novalnet transaction ID: %s',
    'NOVALNET_TEST_ORDER'                               => '<br>Test order<br>',
    'NOVALNET_UPDATE_AMOUNT_DUEDATE_TITLE'              => 'Change the  amount / due date',
    'NOVALNET_UPDATE_DUEDATE_LABEL'                     => 'Transaction due date',
    'NOVALNET_DUE_DATE'                                 => '<br>Due date: ',
    'NOVALNET_ACCOUNT'                                  => '<br>Account holder: %s',
    'NOVALNET_ORDER_NO'                                 => 'Order number ',
    'NOVALNET_INVALID_STATUS'                           => 'Please select status',
    'NOVALNET_INVALID_AMOUNT'                           => 'The amount is invalid',
    'NOVALNET_INVALID_DUEDATE'                          => 'Invalid due date',
    'NOVALNET_INVALID_PAST_DUEDATE'                     => 'The date should be in future',
    'NOVALNET_CONFIRM_CAPTURE'                          => 'Are you sure you want to capture the payment?',
    'NOVALNET_CONFIRM_CANCEL'                           => 'Are you sure you want to cancel the payment?',
    'NOVALNET_CONFIRM_AMOUNT_UPDATE'                    => 'Are you sure you want to change the order amount?',
    'NOVALNET_CONFIRM_DUEDATE_UPDATE'                   => 'Are you sure you want to change the order amount or due date?',
    'NOVALNET_CONFIRM_REFUND'                           => 'Are you sure you want to refund the amount?',
    'NOVALNET_CALLBACK_INSTALMENT_MESSAGE'              => '<br><br>A new instalment has been received for the TID:%s with amount %s. The new instalment TID: %s',
    'NOVALNET_CALLBACK_INSTALMENT_CANCEL_MESSAGE'       => '<br><br>Instalment has been cancelled for the TID: %s on %s & ',
    'NOVALNET_PAYMENT_REMAINTER1_MESSAGE'               => '<br><br>Payment Reminder 1 has been sent to the customer',
    'NOVALNET_PAYMENT_REMAINTER2_MESSAGE'               => '<br><br>Payment Reminder 2 has been sent to the customer',
    'NOVALNET_COLLECTION_AGENCY_MESSAGE'                => '<br><br>The transaction has been submitted to the collection agency. Collection Reference: %s',
    'NOVALNET_INVOICE_BANK_DESC'                        => '<br>Please transfer the amount of %s to the following account',
    'NOVALNET_INSTALMENT_INVOICE_BANK_DESC'             => '<br>Please transfer the instalment cycle amount of %s to the following account',
    'NOVALNET_INVOICE_BANK_DESC_WITH_DUE'               => '<br>Please transfer the amount of %s to the following account on or before %s',
    'NOVALNET_INSTALMENT_INVOICE_BANK_DESC_WITH_DUE'    => '<br>Please transfer the instalment cycle amount of %s to the following account on or before %s',
    'NOVALNET_CALLBACK_UPDATE_STATUS_ONHOLD'            => '<br><br>The transaction status has been changed from pending to on hold for the TID: %s on %s <br>',
    'NOVALNET_CALLBACK_UPDATE_STATUS_UPDATE'            => '<br><br>The transaction has been updated succesfully for the TID %s on %s <br>',
    'NOVALNET_CALLBACK_UPDATE_DUEDATE'                  => '<br><br>Transaction updated successfully for the TID %s with amount %s and due date %s <br>',
    'NOVALNET_CALLBACK_UPDATE_AMOUNT'                   => '<br><br>Transaction updated successfully for the TID %s with amount %s <br>',
    'NOVALNET_CALLBACK_CREDIT'                          => '<br><br>Credit has been successfully received for the TID : %s with amount %s on %s.Please refer PAID order details in our Novalnet Admin Portal for the TID %s',
    'NOVALNET_CALLBACK_CHARGEBACK'                      => '<br><br>Chargeback executed successfully for the TID : %1$s amount: %2$s on %3$s.The subsequent TID: %4$s',
    'NOVALNET_CALLBACK_REFUND_TEXT'                     => '<br><br>Refund has been initiated for the TID: %s with the amount %s',
    'NOVALNET_CALLBACK_INSTALMENT_REFUND_TEXT'          => 'Refund has been initiated with the amount %s',
    'NOVALNET_CALLBACK_REFUND_TID_TEXT'                 => '<br><br>Refund has been initiated for the TID: %s with the amount %s. New TID: %s for the refunded amount',
    'NOVALNET_INVOICE_MULTI_REF_DESCRIPTION'            => '<br>Please use the following reference as the payment reference, as only through this way your payment is matched and assigned to the order:',
    'NOVALNET_AMOUNT_DATE_UPDATED_MESSAGE'              => '<br><br><br>The transaction has been updated with amount %s and due date with %s',
    'NOVALNET_AMOUNT_SLIP_EXPIRY_DATE_UPDATED_MESSAGE'  => '<br><br><br>The transaction has been updated with amount %s and slip expiry date with %s',
    'NOVALNET_IBAN'                                     => '<br>IBAN: %s',
    'NOVALNET_BIC'                                      => '<br>BIC: %s',
    'NOVALNET_BANK'                                     => '<br>Bank: %s %s',
    'NOVALNET_PLACE'                                    => '<br>Place: %s',
    'NOVALNET_PAYMENT_REFERENCE_1'                      => '<br>Payment Reference : %s',
    'NOVALNET_ZERO_BOOKING_TEXT'                        => '<br>This order processed as a zero amount booking',
    'NOVALNET_TEST_MODE_MESSAGE'                        => 'The payment will be processed in the test mode therefore amount for this transaction will not be charged.',
    'NOVALNET_PAYMENT_TYPE'                             => 'Payment with',
    'NOVALNET_INVOICE_COMMENTS_TITLE'                   => '<br><br>Please transfer the amount to the below mentioned account details of our payment processor Novalnet<br>',
    'NOVALNET_AMOUNT'                                   => '<br>Amount: %s',
    'NOVALNET_CHECK_HASH_FAILED_ERROR'                  => 'While redirecting some data has been changed. The hash check failed',
    'NOVALNET_PLEASE_SELECT'                            => '--Select--',
    'NOVALNET_UPDATE'                                   => 'Update',
    'NOVALNET_DEFAULT_ERROR_MESSAGE'                    => '<br>Payment was not successful. An error occurred',
    'NOVALNET_INVALID_NAME_EMAIL'                       => '<br>Customer name/email fields are not valid',
    'NOVALNET_SLIP_EXPIRY_DATE'                         => '<br>Slip expiry date (in days): %s',
    'NOVALNET_STORE_NEAR_YOU'                           => '<br>Store(s) near to you:<br>',
    'NOVALNET_MULTIBANCO_TEXT'                          => '<br>Please use the following payment reference details to pay the amount of %s at a Multibanco ATM or through your internet banking.',
    'NOVALNET_MULTIBANCO_PARTNER_REFERENCE'             => '<br>Partner Payment Reference: %s',
    'NOVALNET_INVOICE_PENDING_TEXT'                     => '<br>Your order is being verified. Once confirmed, we will send you our bank details to which the order amount should be transferred. Please note that this may take up to 24 hours',
    'NOVALNET_SEPA_PENDING_TEXT'                        => '<br>Your order is under verification and we will soon update you with the order status. Please note that this may take upto 24 hours.',
    'PAYMENT_METHOD'                                    => 'Payment Method',
    'GENERAL'                                           => '%s',
    'NOVALNET_PAYMENT_FAILED'                           => '<br>Payment Failed %s',
    'NOVALNET_MANDATORY_ERROR'                          => 'Please fill in the required fields',
    'NOVALNET_WEBHOOK_SUCCESS_TEXT'                     => 'Notification / Webhook URL is configured successfully in Novalnet Admin Portal',
    'NOVALNET_GOOGLEPAY_DESC'                           => '<br>Your order was successfully processed using Google Pay (%s **** %s)',
    'NOVALNET_APPLEPAY_DESC'                            => '<br>Your order was successfully processed using Apple Pay (%s **** %s)',
    'NOVALNET_INSTALMENT_REMAINING_CANCEL_MESSAGE'      => '<br><br>Instalment has been stopped for the TID: %s on %s',
    'NOVALNET_INSTALMENT_STATUS_COMPLETED'              => 'Completed',
    'NOVALNET_INSTALMENT_STATUS_PENDING'                => 'Pending',
    'NOVALNET_INSTALMENT_STATUS_CANCELLED'              => 'Cancelled',
    'NOVALNET_INSTALMENT_STATUS_REFUNDED'               => 'Refunded',
    'NOVALNET_BARZAHLEN_BUTTON'                         => 'Pay now with Barzahlen',
    'INSTALMENT_CANCEL_ALL_ALERT'                       => 'Are you sure you want to cancel all the cycles?',
    'INSTALMENT_REMAINING_ALL_ALERT'                    => 'Are you sure you want to cancel the remaining cycles?',
];

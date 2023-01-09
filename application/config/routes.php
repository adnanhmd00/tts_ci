<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'Partner/index';

$route['partner'] = 'Partner/index';
$route['partner/adddeal'] = 'Partner/postDeal';
$route['partner/deals'] = 'Partner/allDeals';
$route['partner/mydeals'] = 'Partner/myDeals';
$route['partner/login'] = 'PartnerLogin/login';
$route['logout'] = 'Partner/logout';
$route['partner/register'] = 'PartnerLogin/register';
$route['thank-you'] = 'PartnerLogin/thankYou';
$route['partnerlogin'] = 'PartnerLogin/loginForm';
$route['partnerregister'] = 'PartnerLogin/registerForm';
$route['all-bookings/(:num)'] = 'PartnerLogin/allBookings/$1'; //Adnan (For all bookings of a user by id)
$route['partner/deal/(:num)'] = 'Partner/dealDetail/$1';
$route['partner/edit/(:num)'] = 'Partner/editDeal/$1';
$route['partner/edit/deal/image/(:num)'] = 'Partner/editDealImage/$1';
$route['partner/edit/deal/date/(:num)'] = 'Partner/editDealDate/$1';
$route['partner/edit/deal/inclusion/(:num)'] = 'Partner/editDealInclusion/$1';
$route['partner/edit/deal/delete/image/(:num)/(:num)'] = 'Partner/deleteDealImage/$1/$2';
$route['partner/edit/deal/delete/date/(:num)/(:num)'] = 'Partner/deleteDealDate/$1/$2';
$route['postdeal'] = 'Partner/postDealForm';
$route['editdealform/(:num)'] = 'Partner/editDealForm/$1';
$route['partner/learn-how-to-sell'] = 'Partner/learnHowToSell';
$route['privacy-policy'] = 'Partner/privacyPolicy';
$route['terms-and-conditions'] = 'Partner/termsAndConditions';
$route['partner/add-blogs'] = 'Partner/addBlogs';
$route['add/blog'] = 'Partner/submitBlog';
$route['show-blogs'] = 'Blogs/blogs';
$route['show-blog/(:num)'] = 'Blogs/blog/$1';
$route['partner/advertisement-plan'] = 'Partner/advertisementPlan';
$route['partner-help'] = 'Partner/partnerHelp';
$route['travel-news'] = 'Partner/travelNews';
$route['web-checkin'] = 'Partner/webCheckin';
$route['crm'] = 'Partner/CRM';
/*******************EXPERIENCE*******************/
$route['experience'] = 'Experience/index';
$route['experience-detail/(:any)'] = 'Experience/experienceGallery/$1';
$route['experience-list/(:any)'] = 'Experience/experienceList/$1';
/*******************BOOKING*******************/
$route['partner-booking/(:any)'] = 'Partner/booking/$1';
$route['partner-booking-form'] = 'PartnerBooking/booking_form/';
$route['flight-travellers-details']['POST'] = 'Partner/travellersDetails';
/*******************BOOKING*******************/

$route['partner-travpay'] = 'Partner/travPay';
$route['partner-travpay-add-money'] = 'Partner/addMoneyToWallet';

$route['partner-ppc'] = 'Partner/ppc';
$route['partner-buy'] = 'Partner/buyPage';
$route['partner-manage-leads'] = 'Partner/manageLeads';
$route['partner-purchase-leads'] = 'Partner/prchasedLeads';
$route['purchase-lead'] = 'Partner/purchaseleads';

$route['search-flight-results']['POST'] = 'Partner/searchFlightResults';
$route['review-flight-details']['POST'] = 'Partner/reviewFlightDetails';
$route['customer-booking-details']['POST'] = 'Partner/customerBookingDetails';
$route['callback']['POST'] = 'Partner/callback';
$route['success-transaction'] = 'Partner/successTransaction';
$route['failed-transaction'] = 'Partner/failedTransaction';

$route['partner-contact/(:any)'] = 'Partner/contact/$1';
$route['partner-contact-form'] = 'Partner/contactForm/';
$route['wallet-transactions/(:any)'] = 'Partner/walletTransactions/$1';
// $route['transaction-details'] = 'Partner/transactionDetails/';
$route['transaction-details/(:any)'] = 'Partner/transactionDetails/$1';
$route['send-money-to-bank/(:any)'] = 'Partner/sendMoneyToBank/$1';
$route['send-money-to-bank-form-remit'] = 'Partner/sendMoneyToBankFormRemit/';
$route['send-money-to-bank-form-own'] = 'Partner/sendMoneyToBankFormOwn/';
$route['send-money-to-bank-form-request'] = 'Partner/sendMoneyToBankFormRequest/';
$route['all-payment-requests'] = 'Partner/paymentRequests/';
$route['client-settlement'] = 'Partner/client_settlement/';
$route['partner-booking-cancellation'] = 'Partner/cancellation_form/';
$route['client-settlement-form'] = 'Partner/client_settlement_form/';
$route['partner-booking-cancellation-form'] = 'Partner/cancellation_form_submit/';
$route['currency-tracker'] = 'Partner/currency_tracker/';
$route['partner-terminal'] = 'Partner/terminal_agent/';
$route['web-checkin'] = 'Partner/web_checkin/';
$route['support-center'] = 'Partner/support_center';
$route['edit-partner-deal-price'] = 'Partner/edit_partner_deal_price/';
$route['PR/create-order/(:any)'] = 'PaymentRequest/createOrder/$1';
$route['PR/rzp-fetch-response/(:any)/(:any)/(:any)/(:any)/(:any)']='PaymentRequest/fetchResponse/$1/$2/$3/$4/$5';
$route['rzp-add-money']='RazorPayPayment/createOrder';
$route['rzp-fetch-response/(:any)/(:any)/(:any)/(:any)']='RazorPayPayment/fetchResponse/$1/$2/$3/$4';


// $route['seller'] = 'Seller/index';
$route['seller/post-deal'] = 'Seller/postDeal';
$route['seller/post-deal-from'] = 'Seller/postDealForm';


/*********************************TREK*******************/

$route['seller-hastrek/post'] = 'HasTrek/post';
$route['generate-invoice/(:any)'] = 'Partner/generatePdf/$1';
$route['partner-agent-request-verification']='Partner/requestAgentVerification';
$route['partner-agent-request-verification-form']='Partner/requestAgentVerificationForm';

/*********************************TREK*******************/


$route['seller'] = 'Seller/index';
$route['seller/adddeal'] = 'Seller/postDeal';
$route['seller/deals'] = 'Seller/allDeals';
$route['seller/mydeals'] = 'Seller/myDeals';
$route['seller/login'] = 'SellerLogin/login';
$route['sellerlogin'] = 'SellerLogin/loginForm';

$route['seller/deal/(:num)'] = 'Seller/dealDetail/$1';
$route['seller/edit/(:num)'] = 'Seller/editDeal/$1';
$route['seller/edit/deal/image/(:num)'] = 'Seller/editDealImage/$1';
$route['seller/edit/deal/date/(:num)'] = 'Seller/editDealDate/$1';
$route['seller/edit/deal/inclusion/(:num)'] = 'Seller/editDealInclusion/$1';
$route['seller/edit/deal/delete/image/(:num)/(:num)'] = 'Seller/deleteDealImage/$1/$2';
$route['seller/edit/deal/delete/date/(:num)/(:num)'] = 'Seller/deleteDealDate/$1/$2';


$route['seller/learn-how-to-sell'] = 'Seller/learnHowToSell';
$route['seller/add-blogs'] = 'Seller/addBlogs';
$route['add/blog'] = 'Seller/submitBlog';
$route['show-blogs'] = 'Blogs/blogs';
$route['show-blog/(:num)'] = 'Blogs/blog/$1';
$route['seller/advertisement-plan'] = 'Seller/advertisementPlan';
$route['seller-help'] = 'Seller/partnerHelp';

$route['seller-travpay'] = 'Seller/travPay';
$route['seller-travpay-add-money'] = 'Seller/addMoneyToWallet';

$route['seller-ppc'] = 'Seller/ppc';
$route['seller-buy'] = 'Seller/buyPage';
$route['seller-manage-leads'] = 'Seller/manageLeads';
$route['seller-purchase-leads'] = 'Seller/prchasedLeads';
$route['purchase-lead'] = 'Seller/purchaseleads';


$route['seller-contact/(:any)'] = 'Seller/contact/$1';
$route['seller-contact-form'] = 'Seller/contactForm/';
$route['seller-wallet-transactions/(:any)'] = 'Seller/walletTransactions/$1';
// $route['transaction-details'] = 'Partner/transactionDetails/';
$route['seller-transaction-details/(:any)'] = 'Seller/transactionDetails/$1';
$route['seller-send-money-to-bank/(:any)'] = 'Seller/sendMoneyToBank/$1';
$route['seller-send-money-to-bank-form-remit'] = 'Seller/sendMoneyToBankFormRemit/';
$route['seller-send-money-to-bank-form-own'] = 'Seller/sendMoneyToBankFormOwn/';
$route['seller-send-money-to-bank-form-request'] = 'Seller/sendMoneyToBankFormRequest/';
$route['seller-all-payment-requests'] = 'Seller/paymentRequests/';
$route['seller-client-settlement'] = 'Seller/client_settlement/';
$route['seller-seller-booking-cancellation'] = 'Seller/cancellation_form/';
$route['seller-client-settlement-form'] = 'Seller/client_settlement_form/';
$route['seller-booking-cancellation-form'] = 'Seller/cancellation_form_submit/';
$route['seller-currency-tracker'] = 'Seller/currency_tracker/';
$route['seller-terminal'] = 'Seller/terminal_agent/';
$route['seller-edit-seller-deal-price'] = 'Seller/edit_partner_deal_price/';
$route['seller-PR/create-order/(:any)'] = 'PaymentRequest/createOrder/$1';
$route['seller-PR/rzp-fetch-response/(:any)/(:any)/(:any)/(:any)/(:any)']='PaymentRequest/fetchResponse/$1/$2/$3/$4/$5';
$route['seller-rzp-add-money']='SellerRazorPayPayment/createOrder';
$route['seller-rzp-fetch-response/(:any)/(:any)/(:any)/(:any)']='SellerRazorPayPayment/fetchResponse/$1/$2/$3/$4';


/*********************************FLIGHT START*******************/

$route['search-flight'] = 'Partner/searchFlight';
$route['coming-soon'] = 'Partner/comingSoon';
$route['search-result'] = 'Partner/flightSearchResult';
$route['traveller-details'] = 'Partner/flightTravellersDetails';
$route['app-image-options'] = 'Partner/appImageOptions';
$route['flight-app-image']['POST'] = 'Partner/flightAppImage';
$route['post-app-image']['POST'] = 'Partner/postAppImage';
$route['app-image-edit'] = 'Partner/editAppImageTable';
$route['app-image-update']['POST'] = 'Partner/updateAppImageTable';
$route['app-image-table'] = 'Partner/appImageTable';

/*********************************FLIGHT ENDS*******************/

// $route['seller'] = 'Seller/index';
$route['seller/post-deal'] = 'Seller/postDeal';
$route['seller/post-deal-from'] = 'Flight/postDealForm';


/*********************************TREK*******************/

$route['seller-hastrek/post'] = 'HasTrek/post';
$route['seller-generate-invoice/(:any)'] = 'Seller/generatePdf/$1';
$route['seller-agent-request-verification']='Seller/requestAgentVerification';
$route['seller-agent-request-verification-form']='Seller/requestAgentVerificationForm';

/*********************************TREK*******************/


$route['404_override'] = 'partner/login';
// $route['404_override'] = "errors/page_missing";

$route['translate_uri_dashes'] = FALSE;

/*********************************FD*******************/
$route['group-fare-request'] = 'Partner/fd_group_fare';
$route['add-group-fare-request'] = 'Partner/add_fd_group_fare';
$route['international-fd'] = 'Partner/internationalFD';
$route['domestic-fd'] = 'Partner/domesticFD';

// ---------------------------------APP-----------------------------------------

$route['app'] = 'AppPartner/index';
$route['app/adddeal'] = 'AppPartner/postDeal';
$route['app/deals'] = 'AppPartner/allDeals';
$route['app/mydeals'] = 'AppPartner/myDeals';
$route['app/login'] = 'AppAppLogin/login';
$route['applogin'] = 'AppAppLogin/loginForm';
$route['app/all-bookings/(:num)'] = 'AppAppLogin/allBookings/$1'; //Adnan (For all bookings of a user by id)
$route['app/deal/(:num)'] = 'AppPartner/dealDetail/$1';
$route['app/edit/(:num)'] = 'AppPartner/editDeal/$1';
$route['app/edit/deal/image/(:num)'] = 'AppPartner/editDealImage/$1';
$route['app/edit/deal/date/(:num)'] = 'AppPartner/editDealDate/$1';
$route['app/edit/deal/inclusion/(:num)'] = 'AppPartner/editDealInclusion/$1';
$route['app/edit/deal/delete/image/(:num)/(:num)'] = 'AppPartner/deleteDealImage/$1/$2';
$route['app/edit/deal/delete/date/(:num)/(:num)'] = 'AppPartner/deleteDealDate/$1/$2';
$route['app/postdeal'] = 'AppPartner/postDealForm';
$route['app/editdealform/(:num)'] = 'AppPartner/editDealForm/$1';
$route['app/learn-how-to-sell'] = 'AppPartner/learnHowToSell';
$route['app/privacy-policy'] = 'AppPartner/privacyPolicy';
$route['app/terms-and-conditions'] = 'AppPartner/termsAndConditions';
$route['app/add-blogs'] = 'AppPartner/addBlogs';
$route['app/add/blog'] = 'AppPartner/submitBlog';


$route['app/show-blogs'] = 'AppBlogs/blogs';
$route['app/show-blog/(:num)'] = 'AppBlogs/blog/$1';
$route['app/advertisement-plan'] = 'AppPartner/advertisementPlan';
$route['app/partner-help'] = 'AppPartner/partnerHelp';
/*******************EXPERIENCE*******************/
$route['app/experience'] = 'AppExperience/index';
$route['app/experience-detail/(:any)'] = 'AppExperience/experienceGallery/$1';
$route['app/experience-list/(:any)'] = 'AppExperience/experienceList/$1';
/*******************BOOKING*******************/
$route['app/partner-booking/(:any)'] = 'AppPartner/booking/$1';
$route['app/partner-booking-form'] = 'AppPartnerBooking/booking_form/';
$route['app/flight-travellers-details']['POST'] = 'AppPartner/travellersDetails';
/*******************BOOKING*******************/

$route['app/partner-travpay'] = 'AppPartner/travPay';
$route['app/partner-travpay-add-money'] = 'AppPartner/addMoneyToWallet';

$route['app/partner-ppc'] = 'AppPartner/ppc';
$route['app/partner-buy'] = 'AppPartner/buyPage';
$route['app/partner-manage-leads'] = 'AppPartner/manageLeads';
$route['app/partner-purchase-leads'] = 'AppPartner/prchasedLeads';
$route['app/purchase-lead'] = 'AppPartner/purchaseleads';

$route['app/search-flight-results']['POST'] = 'AppPartner/searchFlightResults';

$route['app/partner-contact/(:any)'] = 'AppPartner/contact/$1';
$route['app/partner-contact-form'] = 'AppPartner/contactForm/';
$route['app/wallet-transactions/(:any)'] = 'AppPartner/walletTransactions/$1';
// $route['app/transaction-details'] = 'Partner/transactionDetails/';
$route['app/transaction-details/(:any)'] = 'AppPartner/transactionDetails/$1';
$route['app/send-money-to-bank/(:any)'] = 'AppPartner/sendMoneyToBank/$1';
$route['app/send-money-to-bank-form-remit'] = 'AppPartner/sendMoneyToBankFormRemit/';
$route['app/send-money-to-bank-form-own'] = 'AppPartner/sendMoneyToBankFormOwn/';
$route['app/send-money-to-bank-form-request'] = 'AppPartner/sendMoneyToBankFormRequest/';
$route['app/all-payment-requests'] = 'AppPartner/paymentRequests/';
$route['app/client-settlement'] = 'AppPartner/client_settlement/';
$route['app/partner-booking-cancellation'] = 'AppPartner/cancellation_form/';
$route['app/client-settlement-form'] = 'AppPartner/client_settlement_form/';
$route['app/partner-booking-cancellation-form'] = 'AppPartner/cancellation_form_submit/';
$route['app/currency-tracker'] = 'AppPartner/currency_tracker/';
$route['app/partner-terminal'] = 'AppPartner/terminal_agent/';
$route['app/edit-partner-deal-price'] = 'AppPartner/edit_partner_deal_price/';
$route['app/PR/create-order/(:any)'] = 'AppPaymentRequest/createOrder/$1';
$route['app/PR/rzp-fetch-response/(:any)/(:any)/(:any)/(:any)/(:any)'] = 'AppPaymentRequest/fetchResponse/$1/$2/$3/$4/$5';
$route['app/rzp-add-money']='AppRazorPayPayment/createOrder';
$route['app/rzp-fetch-response/(:any)/(:any)/(:any)/(:any)']='AppRazorPayPayment/fetchResponse/$1/$2/$3/$4';


// $route['app/seller'] = 'Seller/index';
$route['app/seller/post-deal'] = 'AppSeller/postDeal';
$route['app/seller/post-deal-from'] = 'AppSeller/postDealForm';


/*********************************TREK*******************/

$route['app/seller-hastrek/post'] = 'AppHasTrek/post';
$route['app/generate-invoice/(:any)'] = 'AppPartner/generatePdf/$1';
$route['app/partner-agent-request-verification']='AppPartner/requestAgentVerification';
$route['app/partner-agent-request-verification-form']='AppPartner/requestAgentVerificationForm';

/*********************************TREK*******************/
/*********************************PROFILE*************************/
$route['partner-profile'] = 'Partner/profile';
$route['update-profile'] = 'Partner/updateProfile';
/*********************************PROFILE************************/


$route['app/seller'] = 'AppSeller/index';
$route['app/seller/adddeal'] = 'AppSeller/postDeal';
$route['app/seller/deals'] = 'AppSeller/allDeals';
$route['app/seller/mydeals'] = 'AppSeller/myDeals';
$route['app/seller/login'] = 'AppSellerLogin/login';
$route['app/sellerlogin'] = 'AppSellerLogin/loginForm';

$route['app/seller/deal/(:num)'] = 'AppSeller/dealDetail/$1';
$route['app/seller/edit/(:num)'] = 'AppSeller/editDeal/$1';
$route['app/seller/edit/deal/image/(:num)'] = 'AppSeller/editDealImage/$1';
$route['app/seller/edit/deal/date/(:num)'] = 'AppSeller/editDealDate/$1';
$route['app/seller/edit/deal/inclusion/(:num)'] = 'AppSeller/editDealInclusion/$1';
$route['app/seller/edit/deal/delete/image/(:num)/(:num)'] = 'AppSeller/deleteDealImage/$1/$2';
$route['app/seller/edit/deal/delete/date/(:num)/(:num)'] = 'AppSeller/deleteDealDate/$1/$2';


$route['app/seller/learn-how-to-sell'] = 'AppSeller/learnHowToSell';
$route['app/seller/add-blogs'] = 'AppSeller/addBlogs';
$route['app/add/blog'] = 'AppSeller/submitBlog';
$route['app/show-blogs'] = 'AppBlogs/blogs';
$route['app/show-blog/(:num)'] = 'AppBlogs/blog/$1';
$route['app/seller/advertisement-plan'] = 'AppSeller/advertisementPlan';
$route['app/seller-help'] = 'AppSeller/partnerHelp';

$route['app/seller-travpay'] = 'AppSeller/travPay';
$route['app/seller-travpay-add-money'] = 'AppSeller/addMoneyToWallet';

$route['app/seller-ppc'] = 'AppSeller/ppc';
$route['app/seller-buy'] = 'AppSeller/buyPage';
$route['app/seller-manage-leads'] = 'AppSeller/manageLeads';
$route['app/seller-purchase-leads'] = 'AppSeller/prchasedLeads';
$route['app/purchase-lead'] = 'AppSeller/purchaseleads';


$route['app/seller-contact/(:any)'] = 'AppSeller/contact/$1';
$route['app/seller-contact-form'] = 'AppSeller/contactForm/';
$route['app/seller-wallet-transactions/(:any)'] = 'AppSeller/walletTransactions/$1';
// $route['app/transaction-details'] = 'Partner/transactionDetails/';
$route['app/seller-transaction-details/(:any)'] = 'AppSeller/transactionDetails/$1';
$route['app/seller-send-money-to-bank/(:any)'] = 'AppSeller/sendMoneyToBank/$1';
$route['app/seller-send-money-to-bank-form-remit'] = 'AppSeller/sendMoneyToBankFormRemit/';
$route['app/seller-send-money-to-bank-form-own'] = 'AppSeller/sendMoneyToBankFormOwn/';
$route['app/seller-send-money-to-bank-form-request'] = 'AppSeller/sendMoneyToBankFormRequest/';
$route['app/seller-all-payment-requests'] = 'AppSeller/paymentRequests/';
$route['app/seller-client-settlement'] = 'AppSeller/client_settlement/';
$route['app/seller-seller-booking-cancellation'] = 'AppSeller/cancellation_form/';
$route['app/seller-client-settlement-form'] = 'AppSeller/client_settlement_form/';
$route['app/seller-booking-cancellation-form'] = 'AppSeller/cancellation_form_submit/';
$route['app/seller-currency-tracker'] = 'AppSeller/currency_tracker/';
$route['app/seller-terminal'] = 'AppSeller/terminal_agent/';
$route['app/seller-edit-seller-deal-price'] = 'AppSeller/edit_partner_deal_price/';
$route['app/seller-PR/create-order/(:any)'] = 'AppPaymentRequest/createOrder/$1';
$route['app/seller-PR/rzp-fetch-response/(:any)/(:any)/(:any)/(:any)/(:any)']='AppPaymentRequest/fetchResponse/$1/$2/$3/$4/$5';
$route['app/seller-rzp-add-money']='App/SellerRazorPayPayment/createOrder';
$route['app/seller-rzp-fetch-response/(:any)/(:any)/(:any)/(:any)']='App/SellerRazorPayPayment/fetchResponse/$1/$2/$3/$4';


/*********************************FLIGHT START*******************/

$route['app/search-flight'] = 'AppPartner/searchFlight';
$route['app/coming-soon'] = 'AppPartner/comingSoon';
$route['app/search-result'] = 'AppPartner/flightSearchResult';
$route['app/traveller-details'] = 'AppPartner/flightTravellersDetails';
$route['app/app-image-options'] = 'AppPartner/appImageOptions';
$route['app/flight-app-image']['POST'] = 'AppPartner/flightAppImage';
$route['app/post-app-image']['POST'] = 'AppPartner/postAppImage';
$route['app/app-image-edit'] = 'AppPartner/editAppImageTable';
$route['app/app-image-update']['POST'] = 'AppPartner/updateAppImageTable';
$route['app/app-image-table'] = 'AppPartner/appImageTable';

/*********************************FLIGHT ENDS*******************/

// $route['app/seller'] = 'Seller/index';
$route['app/seller/post-deal'] = 'AppSeller/postDeal';
$route['app/seller/post-deal-from'] = 'App/Flight/postDealForm';


/*********************************TREK*******************/

$route['app/seller-hastrek/post'] = 'AppHasTrek/post';
$route['app/seller-generate-invoice/(:any)'] = 'AppSeller/generatePdf/$1';
$route['app/seller-agent-request-verification']='App/Seller/requestAgentVerification';
$route['app/seller-agent-request-verification-form']='App/Seller/requestAgentVerificationForm';


$route['partner-login'] = 'App/RestApi/login';
$route['partner-register'] = 'App/RestApi/register';
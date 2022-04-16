CREATE TABLE `administrator` (
  `id` int DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `pass` varchar(255) DEFAULT NULL,
  `types` varchar(255) DEFAULT NULL
);

CREATE TABLE `admin_packages` (
  `id` int NOT NULL,
  `supplier_id` varchar(255) DEFAULT NULL,
  `package_id` varchar(255) DEFAULT NULL,
  `pkg_name` varchar(255) NOT NULL,
  `pkg_img` varchar(255) NOT NULL,
  `city_to` varchar(255) NOT NULL,
  `city_from` varchar(255) NOT NULL,
  `num_nights` varchar(255) NOT NULL,
  `num_days` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `ex_covered` varchar(255) NOT NULL,
  `exp_date` varchar(255) NOT NULL,
  `inclusion` varchar(255) NOT NULL,
  `descrip` varchar(255) NOT NULL,
  `t_c` varchar(255) NOT NULL,
  `pkg_price` varchar(255) NOT NULL
);


CREATE TABLE `airports` (
  `name` varchar(56) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `code` varchar(3) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `stateCode` varchar(2) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `countryCode` varchar(2) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `countryName` varchar(32) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL
); 


CREATE TABLE `airport_codes` (
  `airport_code` varchar(50) CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `name` varchar(200) CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `cityCode` varchar(50) CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `cityName` varchar(200) CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `countryName` varchar(200) CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `countryCode` varchar(200) CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `timezone` varchar(8) CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `lat` varchar(32) CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `lon` varchar(32) CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `numAirports` int DEFAULT NULL,
  `city` enum('true','false') CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL
);

CREATE TABLE `leads` (
  `id` int NOT NULL,
  `partner_id` varchar(10) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `leaving_from` varchar(100) NOT NULL,
  `going_to` varchar(100) NOT NULL,
  `start_date` varchar(20) NOT NULL,
  `end_date` varchar(20) NOT NULL,
  `total_pax` varchar(100) NOT NULL,
  `adults` varchar(10) NOT NULL,
  `kids` varchar(10) NOT NULL,
  `infants` varchar(10) NOT NULL,
  `class_of_travel` varchar(100) NOT NULL,
  `preferred_airline` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `origin` varchar(100) NOT NULL,
  `currency` varchar(10) NOT NULL,
  `price` varchar(10) NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` datetime DEFAULT NULL
);

CREATE TABLE `leads_given` (
  `id` int NOT NULL,
  `partner_id` varchar(10) NOT NULL,
  `lead` varchar(10) DEFAULT NULL
);


CREATE TABLE `login` (
  `id` int NOT NULL,
  `name` varchar(100) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `stime` varchar(100) NOT NULL
);


CREATE TABLE `mail_form` (
  `id` int NOT NULL,
  `datasheet` varchar(255) NOT NULL,
  `attachment` varchar(255) NOT NULL,
  `mail_template` varchar(255) NOT NULL
);


CREATE TABLE `packages_booking` (
  `id` int NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `start_date` varchar(255) NOT NULL,
  `end_date` varchar(255) NOT NULL,
  `adults` varchar(255) NOT NULL,
  `child` varchar(255) NOT NULL,
  `coupon_code` varchar(255) NOT NULL
);


CREATE TABLE `packages_enquiry` (
  `id` int NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `mobile` varchar(255) DEFAULT NULL,
  `leaving_from` varchar(255) DEFAULT NULL,
  `going_to` varchar(255) DEFAULT NULL,
  `start_date` varchar(255) DEFAULT NULL,
  `end_date` varchar(255) DEFAULT NULL,
  `total_pax` varchar(255) DEFAULT NULL,
  `adults` varchar(255) DEFAULT NULL,
  `kids` varchar(255) DEFAULT NULL,
  `infants` varchar(255) DEFAULT NULL,
  `class_of_travel` varchar(255) NOT NULL,
  `preferred_airline` varchar(255) DEFAULT NULL,
  `descrip` varchar(255) DEFAULT NULL,
  `origin` varchar(255) DEFAULT NULL
);



CREATE TABLE `package_codes` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `b2c_cost_per_adult` varchar(255) NOT NULL,
  `b2b_cost_per_adult` varchar(255) NOT NULL,
  `b2c_cost_per_child` varchar(255) NOT NULL DEFAULT '0',
  `b2b_cost_per_child` varchar(255) NOT NULL,
  `package_sharing` varchar(255) NOT NULL,
  `tax` varchar(255) NOT NULL,
  `discount` varchar(255) NOT NULL,
  `booking_amount` varchar(255) NOT NULL
);


CREATE TABLE `partner` (
  `id` int NOT NULL,
  `name` varchar(100) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `pass` varchar(100) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `gender` enum('MALE','FEMALE','OTHER') NOT NULL DEFAULT 'MALE',
  `state` varchar(100) DEFAULT NULL,
  `address` varchar(1000) DEFAULT NULL,
  `lm` varchar(100) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `tags` varchar(255) DEFAULT NULL,
  `noe` varchar(100) DEFAULT NULL,
  `coe` varchar(100) DEFAULT NULL,
  `tof` varchar(100) DEFAULT NULL,
  `st` varchar(100) DEFAULT NULL,
  `ct` varchar(100) DEFAULT NULL,
  `oa` varchar(100) DEFAULT NULL,
  `ato` varchar(100) DEFAULT NULL,
  `gst` varchar(100) DEFAULT NULL,
  `ocn` varchar(100) DEFAULT NULL,
  `omid` varchar(100) DEFAULT NULL,
  `web` varchar(100) DEFAULT NULL,
  `pcno` varchar(100) DEFAULT NULL,
  `acno` varchar(100) DEFAULT NULL,
  `uac` varchar(100) DEFAULT NULL,
  `upc` varchar(100) DEFAULT NULL,
  `bn` varchar(100) DEFAULT NULL,
  `ahn` varchar(100) DEFAULT NULL,
  `ifsc` varchar(100) DEFAULT NULL,
  `an` varchar(100) DEFAULT NULL,
  `ucl` varchar(100) DEFAULT NULL,
  `elecb` varchar(100) DEFAULT NULL,
  `inta` varchar(100) DEFAULT NULL,
  `intb` varchar(100) DEFAULT NULL,
  `exta` varchar(100) DEFAULT NULL,
  `extb` varchar(100) DEFAULT NULL,
  `stime` varchar(100) DEFAULT NULL,
  `status` enum('pending','disapproved','approved') NOT NULL DEFAULT 'pending',
  `type` enum('partner','seller') DEFAULT 'partner',
  `seller_type` enum('DMC','HR','EO','CC','HT') DEFAULT NULL,
  `travpay_id` varchar(15) NOT NULL,
  `supplier_id` varchar(255) DEFAULT NULL,
  `supplier_pass` varchar(255) DEFAULT NULL,
  `mark` mediumtext,
  `currency` varchar(10) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` datetime DEFAULT NULL
); 


CREATE TABLE `partners_hotel` (
  `id` int NOT NULL,
  `partner_id` int DEFAULT NULL,
  `hotel_id` int DEFAULT NULL
);


CREATE TABLE `screenshot` (
  `id` int NOT NULL,
  `mobile` varchar(11) DEFAULT NULL,
  `screenshot` varchar(255) NOT NULL
); 

CREATE TABLE `students` (
  `id` int NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `phone_no` int NOT NULL
);


CREATE TABLE `suppliers` (
  `id` int NOT NULL,
  `name` varchar(100) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `dob` varchar(100) DEFAULT NULL,
  `gender` varchar(100) DEFAULT NULL,
  `state` varchar(100) DEFAULT NULL,
  `address` varchar(1000) DEFAULT NULL,
  `lm` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `tags` varchar(255) DEFAULT NULL,
  `noe` varchar(100) DEFAULT NULL,
  `coe` varchar(100) DEFAULT NULL,
  `tof` varchar(100) DEFAULT NULL,
  `st` varchar(100) DEFAULT NULL,
  `ct` varchar(100) DEFAULT NULL,
  `oa` varchar(100) DEFAULT NULL,
  `ato` varchar(100) DEFAULT NULL,
  `gst` varchar(100) DEFAULT NULL,
  `ocn` varchar(100) DEFAULT NULL,
  `omid` varchar(100) DEFAULT NULL,
  `web` varchar(100) DEFAULT NULL,
  `pcno` varchar(100) DEFAULT NULL,
  `acno` varchar(100) DEFAULT NULL,
  `uac` varchar(100) DEFAULT NULL,
  `upc` varchar(100) DEFAULT NULL,
  `bn` varchar(100) DEFAULT NULL,
  `ahn` varchar(100) DEFAULT NULL,
  `ifsc` varchar(100) DEFAULT NULL,
  `an` varchar(100) DEFAULT NULL,
  `ucl` varchar(100) DEFAULT NULL,
  `elecb` varchar(100) DEFAULT NULL,
  `inta` varchar(100) DEFAULT NULL,
  `intb` varchar(100) DEFAULT NULL,
  `exta` varchar(100) DEFAULT NULL,
  `extb` varchar(100) DEFAULT NULL,
  `status` varchar(111) DEFAULT NULL,
  `type` int DEFAULT NULL
); 

CREATE TABLE `supplier_activity` (
  `id` int NOT NULL,
  `supplier_id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `descrip` varchar(255) NOT NULL,
  `from_time` varchar(255) NOT NULL,
  `to_time` varchar(255) NOT NULL,
  `types` varchar(255) NOT NULL,
  `cost` varchar(255) NOT NULL
);



CREATE TABLE `supplier_cab` (
  `id` int NOT NULL,
  `supplier_id` varchar(255) NOT NULL,
  `car_name` varchar(255) NOT NULL,
  `car_img` varchar(255) NOT NULL,
  `from_city` varchar(255) NOT NULL,
  `to_city` varchar(255) NOT NULL,
  `price_km` varchar(255) NOT NULL,
  `total_price` varchar(255) NOT NULL,
  `seats` varchar(255) NOT NULL
);


CREATE TABLE `supplier_flight` (
  `id` int NOT NULL,
  `supplier_id` varchar(255) NOT NULL,
  `flight_type` varchar(255) NOT NULL,
  `flight_price_type` varchar(255) NOT NULL,
  `airport_from` varchar(255) NOT NULL,
  `airport_to` varchar(255) NOT NULL,
  `departure_time` varchar(255) NOT NULL,
  `arrival_time` varchar(255) NOT NULL,
  `stops` varchar(255) NOT NULL,
  `stop1` varchar(255) DEFAULT NULL,
  `stop2` varchar(255) DEFAULT NULL,
  `stop3` varchar(255) DEFAULT NULL,
  `price` varchar(255) NOT NULL,
  `calendar` varchar(255) NOT NULL
); 



CREATE TABLE `supplier_hotel` (
  `id` int NOT NULL,
  `supplier_id` varchar(255) NOT NULL,
  `hotel_name` varchar(255) NOT NULL,
  `hotel_img_url` varchar(255) NOT NULL,
  `hotel_address` varchar(255) NOT NULL,
  `hotel_city` varchar(255) NOT NULL,
  `room_name_1` varchar(255) NOT NULL,
  `b2b_price_1` varchar(255) NOT NULL,
  `b2c_price_1` varchar(255) NOT NULL,
  `room_name_2` varchar(255) DEFAULT NULL,
  `b2b_price_2` varchar(255) DEFAULT NULL,
  `b2c_price_2` varchar(255) DEFAULT NULL,
  `room_name_3` varchar(255) DEFAULT NULL,
  `b2b_price_3` varchar(255) DEFAULT NULL,
  `b2c_price_3` varchar(255) DEFAULT NULL,
  `room_name_4` varchar(255) DEFAULT NULL,
  `b2b_price_4` varchar(255) DEFAULT NULL,
  `b2c_price_4` varchar(255) DEFAULT NULL
);


CREATE TABLE `supplier_packages` (
  `id` int NOT NULL,
  `supplier_id` varchar(255) DEFAULT NULL,
  `pkg_name` varchar(255) NOT NULL,
  `pkg_img` varchar(255) NOT NULL,
  `city_to` varchar(255) NOT NULL,
  `city_from` varchar(255) NOT NULL,
  `num_nights` varchar(255) NOT NULL,
  `num_days` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `ex_covered` varchar(255) NOT NULL,
  `exp_date` varchar(255) NOT NULL,
  `inclusion` varchar(255) NOT NULL,
  `descrip` varchar(255) NOT NULL,
  `t_c` varchar(255) NOT NULL,
  `pkg_price` varchar(255) NOT NULL
);


CREATE TABLE `tbl_adv_pack` (
  `id` int NOT NULL,
  `text` text NOT NULL,
  `image` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` datetime DEFAULT NULL
);

CREATE TABLE `tbl_adv_pack_buying_details` (
  `id` int NOT NULL,
  `user_id` varchar(10) NOT NULL,
  `user_type` varchar(50) NOT NULL,
  `amount` double(40,2) NOT NULL,
  `transaction_id` varchar(500) NOT NULL,
  `bank` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` datetime DEFAULT NULL
);

CREATE TABLE `tbl_adv_with_us` (
  `id` int NOT NULL,
  `user_id` varchar(10) NOT NULL,
  `user_type` varchar(10) NOT NULL,
  `adv_pack_id` varchar(10) NOT NULL,
  `transaction_id` varchar(500) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` datetime DEFAULT NULL
); 


CREATE TABLE `tbl_blog` (
  `id` int NOT NULL,
  `user_id` varchar(10) DEFAULT NULL,
  `user_type` enum('Partner','Seller') DEFAULT NULL,
  `headline` text NOT NULL,
  `tagline` text NOT NULL,
  `blog` text,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` datetime DEFAULT NULL
); 

CREATE TABLE `tbl_blog_image` (
  `id` int NOT NULL,
  `blog_id` varchar(10) NOT NULL,
  `image` text NOT NULL,
  `position` int NOT NULL
);


CREATE TABLE `tbl_booking` (
  `id` int NOT NULL,
  `user_type` varchar(10) NOT NULL,
  `user_type_id` varchar(10) NOT NULL,
  `deal_type` varchar(10) NOT NULL,
  `deal_type_id` varchar(10) NOT NULL,
  `deal_combined_id` varchar(10) NOT NULL,
  `customer_first_name` varchar(100) NOT NULL,
  `customer_last_name` varchar(100) NOT NULL,
  `email` varchar(80) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` datetime DEFAULT NULL,
  `travel_date` date NOT NULL,
  `return_date` date NOT NULL,
  `pax` varchar(10) NOT NULL,
  `currency` varchar(10) NOT NULL,
  `price` varchar(10) NOT NULL
);


CREATE TABLE `tbl_booking_payment_details` (
  `id` int NOT NULL,
  `booking_id` varchar(10) NOT NULL,
  `payment_id` varchar(10) NOT NULL,
  `payment_type` enum('COMPLETE','PARTIAL') NOT NULL
);

CREATE TABLE `tbl_currency` (
  `id` int NOT NULL,
  `name` varchar(100) NOT NULL,
  `symbol` varchar(10) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` datetime DEFAULT NULL
);

CREATE TABLE `tbl_deal_dates` (
  `id` int NOT NULL,
  `deal_id` varchar(10) NOT NULL,
  `dates` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` datetime DEFAULT NULL
); 


CREATE TABLE `tbl_deal_image` (
  `id` int NOT NULL,
  `deal_id` varchar(10) NOT NULL,
  `image` text NOT NULL,
  `position` varchar(10) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` datetime DEFAULT NULL
); 


CREATE TABLE `tbl_deal_inclusion` (
  `id` int NOT NULL,
  `deal_id` varchar(10) NOT NULL,
  `inclusion` enum('Flight','Transfer','Visa','Hotels','Sightseeing') NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` datetime DEFAULT NULL
); 

CREATE TABLE `tbl_deal_partner` (
  `id` int NOT NULL,
  `id_tag` varchar(10) DEFAULT NULL,
  `partner_id` varchar(10) NOT NULL,
  `deal_type_id` varchar(10) NOT NULL,
  `title` text NOT NULL,
  `currency_id` varchar(10) NOT NULL,
  `new_price` varchar(10) NOT NULL COMMENT 'b2b price',
  `old_price` varchar(10) DEFAULT NULL COMMENT 'b2c price',
  `noofdays` varchar(10) NOT NULL,
  `noofnights` varchar(10) NOT NULL,
  `tac` varchar(10) NOT NULL,
  `unit_type` enum('Per Person','Per Night') NOT NULL,
  `details` text NOT NULL,
  `cancelation_policy` text,
  `dates_of_travel` date NOT NULL,
  `destination` text NOT NULL,
  `valid_untill` date NOT NULL,
  `hotel_name_room_meal` text,
  `flight_trip_type` enum('One Way','Round Trip') DEFAULT NULL,
  `package_type` enum('Fixed Departure','Customised','Regular') DEFAULT NULL,
  `inclusion` enum('Flights','Transfer','Visa','Hotels','Sightseeing') DEFAULT NULL,
  `status` enum('pending','approved','rejected') NOT NULL DEFAULT 'pending',
  `is_verified` enum('YES') DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` datetime DEFAULT NULL
);


CREATE TABLE `tbl_deal_type` (
  `id` int NOT NULL,
  `name` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` datetime DEFAULT NULL
);


CREATE TABLE `tbl_hastrek_deal` (
  `id` int NOT NULL,
  `dealer_id` varchar(10) NOT NULL,
  `dealer_type` varchar(10) NOT NULL,
  `package_name` text NOT NULL,
  `package_type` varchar(2) NOT NULL,
  `trek_type` varchar(10) NOT NULL,
  `from_city` text NOT NULL,
  `destination_city` text NOT NULL,
  `things_to_carry` text NOT NULL,
  `medical_advisory` text NOT NULL,
  `exclusion` text NOT NULL,
  `cancellation_policy` text NOT NULL,
  `refund_policy` text NOT NULL,
  `terms` text NOT NULL,
  `days` varchar(5) NOT NULL,
  `nights` varchar(5) NOT NULL,
  `currency` varchar(10) NOT NULL,
  `price_per` enum('PERSON','DAY') NOT NULL,
  `price_b2b` varchar(10) NOT NULL,
  `price_b2c` varchar(10) NOT NULL COMMENT 'Booking Amount',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` datetime DEFAULT NULL
); 


CREATE TABLE `tbl_ht_dates` (
  `id` int NOT NULL,
  `ht_id` varchar(10) NOT NULL,
  `dates` varchar(50) NOT NULL,
  `price_b2b` varchar(10) NOT NULL,
  `price_b2c` varchar(10) NOT NULL,
  `currency` varchar(10) NOT NULL
);


CREATE TABLE `tbl_ht_daywise_itineary` (
  `id` int NOT NULL,
  `ht_id` varchar(10) NOT NULL,
  `day_` varchar(2) NOT NULL,
  `details` text NOT NULL
); 



CREATE TABLE `tbl_ht_included_inclusion` (
  `id` int NOT NULL,
  `ht_id` varchar(10) NOT NULL,
  `ht_inclusion_id` varchar(10) NOT NULL,
  `details` text NOT NULL
); 


CREATE TABLE `tbl_ht_inclusion` (
  `id` int NOT NULL,
  `name` varchar(100) NOT NULL,
  `trim_name` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` datetime DEFAULT NULL
);


CREATE TABLE `tbl_ht_location_covered` (
  `id` int NOT NULL,
  `ht_id` varchar(10) NOT NULL,
  `locations` varchar(100) NOT NULL
);


CREATE TABLE `tbl_ht_package_images` (
  `id` int NOT NULL,
  `ht_id` varchar(10) NOT NULL,
  `image` text NOT NULL,
  `position` varchar(10) NOT NULL
);


CREATE TABLE `tbl_ht_package_type` (
  `id` int NOT NULL,
  `name` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` datetime DEFAULT NULL
);


CREATE TABLE `tbl_ht_pickup_drop_locations` (
  `id` int NOT NULL,
  `ht_id` varchar(10) NOT NULL,
  `location_type` enum('PICKUP','DROP') DEFAULT NULL,
  `location` text NOT NULL,
  `timings` varchar(10) NOT NULL
);


CREATE TABLE `tbl_ht_promotional_banner` (
  `id` int NOT NULL,
  `ht_id` varchar(10) NOT NULL,
  `image` text NOT NULL
); 


CREATE TABLE `tbl_ht_trek_type` (
  `id` int NOT NULL,
  `country` text NOT NULL,
  `city` text NOT NULL,
  `place` text NOT NULL,
  `content` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` datetime DEFAULT NULL
);


CREATE TABLE `tbl_ht_video` (
  `id` int NOT NULL,
  `ht_id` varchar(10) NOT NULL,
  `video` text NOT NULL
); 



CREATE TABLE `tbl_payment_request` (
  `id` int NOT NULL,
  `amount` varchar(10) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `email` varchar(80) NOT NULL,
  `name` varchar(100) NOT NULL,
  `request_from_id` varchar(10) NOT NULL,
  `request_from_type` enum('SELLER','PARTNER','ADMIN','USER') NOT NULL,
  `currency` varchar(10) NOT NULL,
  `payment_link` text NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` datetime DEFAULT NULL
);


CREATE TABLE `tbl_quote_request` (
  `id` int NOT NULL,
  `request_from` varchar(10) NOT NULL,
  `deal_id` varchar(10) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` datetime DEFAULT NULL
); 



CREATE TABLE `tbl_request_agent_verification` (
  `id` int NOT NULL,
  `dealer_id` varchar(10) NOT NULL,
  `dealer_type` varchar(10) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `email` varchar(80) NOT NULL,
  `name` varchar(80) NOT NULL,
  `status` enum('VERIFIED','NAN') NOT NULL,
  `reason` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` datetime DEFAULT NULL
); 



CREATE TABLE `tbl_wallet` (
  `id` int NOT NULL,
  `razorpay_order_id` varchar(50) DEFAULT NULL,
  `tag_to` varchar(10) NOT NULL,
  `user_id` varchar(10) NOT NULL,
  `user_type` enum('PARTNER','SELLER','USER') NOT NULL,
  `type` enum('CREDIT','DEBIT') NOT NULL,
  `mode` enum('CASH','ONLINE','ACCOUNTTRANSFER','IMPS','UPI','CREDITCARD','TRAVPAY') NOT NULL,
  `via` varchar(50) DEFAULT NULL,
  `amount` varchar(10) NOT NULL,
  `currency_id` varchar(10) NOT NULL,
  `status` enum('SUCCESS','FAILURE','PENDING') DEFAULT 'PENDING',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` datetime DEFAULT NULL
);


CREATE TABLE `tbl_wallet_details` (
  `id` int NOT NULL,
  `wallet_id` varchar(10) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `card_number` varchar(20) DEFAULT NULL,
  `expiry_month` varchar(10) DEFAULT NULL,
  `expiry_year` varchar(10) NOT NULL,
  `cvv_number` varchar(50) DEFAULT NULL,
  `rzp_payment_id` varchar(100) DEFAULT NULL,
  `rzp_order_id` varchar(100) DEFAULT NULL,
  `rzp_signature` varchar(100) DEFAULT NULL
); 


CREATE TABLE `tbl_wallet_transaction_details` (
  `id` int NOT NULL,
  `wallet_id` varchar(10) NOT NULL,
  `transaction_for` varchar(100) DEFAULT NULL,
  `transaction_type` enum('FULL','PARTIAL') NOT NULL DEFAULT 'FULL',
  `payee_id` varchar(10) DEFAULT NULL,
  `payee_type` enum('USER','SELLER','PARTNER','ADMIN') DEFAULT NULL,
  `benificiary_id` varchar(10) DEFAULT NULL,
  `benificiary_type` enum('USER','SELLER','PARTNER','ADMIN') DEFAULT NULL,
  `payee_name` text,
  `payee_email` varchar(80) DEFAULT NULL,
  `payee_phone` varchar(10) DEFAULT NULL,
  `benificiary_name` varchar(100) DEFAULT NULL,
  `benificiary_email` varchar(100) DEFAULT NULL,
  `benificiary_phone` varchar(10) DEFAULT NULL,
  `benificiary_holder_name` text,
  `benificiary_account_number` varchar(100) DEFAULT NULL,
  `benificiary_ifsc` text,
  `benificiary_bank_name` text,
  `payee_account_number` varchar(100) DEFAULT NULL,
  `payee_holder_name` text,
  `payee_ifsc` text,
  `payee_bank_name` text
); 




CREATE TABLE `users_profile` (
  `id` int NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `contact` varchar(15) NOT NULL,
  `dob` date DEFAULT NULL,
  `gender` varchar(15) DEFAULT NULL,
  `marital_status` varchar(15) DEFAULT NULL,
  `aniversary_date` date DEFAULT NULL,
  `passport_number` varchar(50) DEFAULT NULL,
  `nationality` varchar(30) DEFAULT NULL,
  `issuing_country` varchar(50) DEFAULT NULL,
  `expiry` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
); 



CREATE TABLE `visa` (
  `id` int NOT NULL,
  `from_country` varchar(255) NOT NULL,
  `to_country` varchar(255) NOT NULL,
  `visa_name` varchar(255) NOT NULL,
  `visa_type` varchar(255) NOT NULL,
  `visa_duration` varchar(255) NOT NULL,
  `processing_time` varchar(255) NOT NULL,
  `supply_rate` varchar(255) NOT NULL,
  `b2b_visa_price` varchar(255) NOT NULL,
  `b2c_visa_price` varchar(255) NOT NULL,
  `processing_fee` varchar(255) NOT NULL,
  `visa_description` varchar(255) NOT NULL,
  `supplier_name` varchar(255) NOT NULL,
  `supplier_number` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL
); 




CREATE TABLE `visa_countries` (
  `id` int NOT NULL,
  `country` varchar(255) NOT NULL
);

CREATE TABLE `whatsapp` (
  `id` int NOT NULL,
  `company` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `mobile` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `groups` varchar(255) DEFAULT NULL
);


ALTER TABLE `app_images`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `cancellation_refund`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `client_settlement`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `contact_form`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `currency_tracker`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

ALTER TABLE `leads`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `leads_given`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `packages_booking`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `package_codes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

ALTER TABLE `partner`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `suppliers`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `supplier_activity`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

ALTER TABLE `supplier_cab`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

ALTER TABLE `supplier_flight`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);


ALTER TABLE `supplier_hotel`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `supplier_packages`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

ALTER TABLE `tbl_adv_pack`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `tbl_adv_pack_buying_details`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `tbl_adv_with_us`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `tbl_blog`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `tbl_blog_image`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `tbl_booking`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `tbl_booking_payment_details`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `tbl_currency`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `tbl_deal_dates`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `tbl_deal_image`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `tbl_deal_inclusion`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `tbl_deal_partner`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `tbl_deal_type`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `tbl_hastrek_deal`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `tbl_ht_dates`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `tbl_ht_daywise_itineary`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `tbl_ht_included_inclusion`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `tbl_ht_inclusion`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `tbl_ht_location_covered`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `tbl_ht_package_images`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `tbl_ht_package_type`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `tbl_ht_pickup_drop_locations`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `tbl_ht_promotional_banner`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `tbl_ht_trek_type`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `tbl_ht_video`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `tbl_payment_request`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `tbl_quote_request`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `tbl_request_agent_verification`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `tbl_wallet`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `tbl_wallet_details`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `tbl_wallet_transaction_details`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `users_profile`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `visa`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

ALTER TABLE `visa_countries`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

ALTER TABLE `whatsapp`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `app_images`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

ALTER TABLE `bookings`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

ALTER TABLE `cancellation_refund`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

ALTER TABLE `client_settlement`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

ALTER TABLE `contact_form`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

ALTER TABLE `currency_tracker`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

ALTER TABLE `jobs`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=142;

ALTER TABLE `leads`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

ALTER TABLE `leads_given`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

ALTER TABLE `packages_booking`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

ALTER TABLE `package_codes`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

ALTER TABLE `partner`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

ALTER TABLE `suppliers`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

ALTER TABLE `supplier_activity`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

ALTER TABLE `supplier_cab`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

ALTER TABLE `supplier_flight`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

ALTER TABLE `supplier_hotel`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

ALTER TABLE `supplier_packages`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

ALTER TABLE `tbl_adv_pack`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

ALTER TABLE `tbl_adv_pack_buying_details`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

ALTER TABLE `tbl_adv_with_us`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

ALTER TABLE `tbl_blog`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

ALTER TABLE `tbl_blog_image`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

ALTER TABLE `tbl_booking`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

ALTER TABLE `tbl_booking_payment_details`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

ALTER TABLE `tbl_currency`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

ALTER TABLE `tbl_deal_dates`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

ALTER TABLE `tbl_deal_image`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

ALTER TABLE `tbl_deal_inclusion`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

ALTER TABLE `tbl_deal_partner`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

ALTER TABLE `tbl_deal_type`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

ALTER TABLE `tbl_hastrek_deal`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

ALTER TABLE `tbl_ht_dates`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

ALTER TABLE `tbl_ht_daywise_itineary`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

ALTER TABLE `tbl_ht_included_inclusion`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

ALTER TABLE `tbl_ht_inclusion`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

ALTER TABLE `tbl_ht_location_covered`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

ALTER TABLE `tbl_ht_package_images`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

ALTER TABLE `tbl_ht_package_type`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

ALTER TABLE `tbl_ht_pickup_drop_locations`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

ALTER TABLE `tbl_ht_promotional_banner`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

ALTER TABLE `tbl_ht_trek_type`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

ALTER TABLE `tbl_ht_video`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

ALTER TABLE `tbl_payment_request`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

ALTER TABLE `tbl_quote_request`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

ALTER TABLE `tbl_request_agent_verification`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

ALTER TABLE `tbl_wallet`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;

ALTER TABLE `tbl_wallet_details`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

ALTER TABLE `tbl_wallet_transaction_details`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

ALTER TABLE `users_profile`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

ALTER TABLE `visa`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

ALTER TABLE `visa_countries`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

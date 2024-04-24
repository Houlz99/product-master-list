<?php

namespace App\Http\Controllers\Api\Practice;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class AnswerController extends Controller
{
    public function fix()
    {
        $pdo = DB::connection()->getPdo();

        $arr = [[1,NULL,1,'windows','121.122.44.133',101.598100,3.120100,'Petaling Jaya, Selangor, Malaysia','Google Chrome',0,'active','2022-03-28 06:46:08','2022-03-28 06:46:08'],[2,NULL,1,'windows','121.122.44.133',101.598100,3.120100,'Petaling Jaya, Selangor, Malaysia','Google Chrome',0,'active','2022-03-28 06:47:17','2022-03-28 06:47:17'],[3,NULL,2,'windows','121.122.44.133',101.598100,3.120100,'Petaling Jaya, Selangor, Malaysia','Google Chrome',0,'active','2022-03-28 06:58:27','2022-03-28 06:58:27'],[4,NULL,3,'windows','121.122.44.133',101.598100,3.120100,'Petaling Jaya, Selangor, Malaysia','Google Chrome',0,'active','2022-03-28 07:01:12','2022-03-28 07:01:12'],[5,NULL,2,'windows','121.122.44.133',101.598100,3.120100,'Petaling Jaya, Selangor, Malaysia','Google Chrome',0,'active','2022-03-28 07:33:37','2022-03-28 07:33:37'],[6,NULL,2,'windows','121.122.44.133',101.598100,3.120100,'Petaling Jaya, Selangor, Malaysia','Google Chrome',0,'active','2022-03-28 07:34:00','2022-03-28 07:34:00'],[7,NULL,2,'windows','121.122.44.133',101.598100,3.120100,'Petaling Jaya, Selangor, Malaysia','Google Chrome',0,'active','2022-03-28 07:35:44','2022-03-28 07:35:44'],[8,1,3,'windows','121.122.44.133',101.598100,3.120100,'Petaling Jaya, Selangor, Malaysia','Google Chrome',0,'active','2022-03-28 07:37:34','2022-03-28 07:37:34'],[9,NULL,2,'windows','121.122.44.133',101.598100,3.120100,'Petaling Jaya, Selangor, Malaysia','Google Chrome',0,'active','2022-03-28 07:38:47','2022-03-28 07:38:47'],[10,NULL,4,'windows','121.122.44.133',101.598100,3.120100,'Petaling Jaya, Selangor, Malaysia','Google Chrome',0,'active','2022-03-28 08:51:15','2022-03-28 08:51:15'],[11,2,5,'windows','121.122.44.133',101.598100,3.120100,'Petaling Jaya, Selangor, Malaysia','Google Chrome',0,'active','2022-03-28 09:04:26','2022-03-28 09:04:26'],[12,NULL,2,'windows','121.122.44.133',101.598100,3.120100,'Petaling Jaya, Selangor, Malaysia','Google Chrome',0,'active','2022-03-28 09:08:11','2022-03-28 09:08:11'],[13,NULL,2,'windows','121.122.44.133',101.598100,3.120100,'Petaling Jaya, Selangor, Malaysia','Google Chrome',0,'active','2022-03-28 09:14:25','2022-03-28 09:14:25'],[14,NULL,2,'windows','121.122.44.133',101.598100,3.120100,'Petaling Jaya, Selangor, Malaysia','Google Chrome',0,'active','2022-03-28 09:16:15','2022-03-28 09:16:15'],[15,4,6,'windows','121.122.44.133',101.598100,3.120100,'Petaling Jaya, Selangor, Malaysia','Google Chrome',0,'active','2022-03-28 09:18:14','2022-03-28 09:18:14'],[16,2,7,'windows','121.122.44.133',101.598100,3.120100,'Petaling Jaya, Selangor, Malaysia','Google Chrome',0,'active','2022-03-28 10:01:10','2022-03-28 10:01:10'],[17,2,8,'windows','121.122.44.133',101.598100,3.120100,'Petaling Jaya, Selangor, Malaysia','Google Chrome',0,'active','2022-03-28 10:05:52','2022-03-28 10:05:52'],[18,2,9,'windows','121.122.44.133',101.598100,3.120100,'Petaling Jaya, Selangor, Malaysia','Google Chrome',0,'active','2022-03-28 10:19:00','2022-03-28 10:19:00'],[19,2,10,'windows','121.122.44.133',101.598100,3.120100,'Petaling Jaya, Selangor, Malaysia','Google Chrome',0,'active','2022-03-29 02:27:51','2022-03-29 02:27:51'],[20,NULL,11,'windows','121.122.44.133',101.598100,3.120100,'Petaling Jaya, Selangor, Malaysia','Google Chrome',0,'active','2022-03-29 02:31:15','2022-03-29 02:31:15'],[21,NULL,2,'windows','121.122.44.133',101.598100,3.120100,'Petaling Jaya, Selangor, Malaysia','Google Chrome',0,'active','2022-03-30 07:14:34','2022-03-30 07:14:34'],[22,NULL,5,'windows','121.122.44.133',101.598100,3.120100,'Petaling Jaya, Selangor, Malaysia','Google Chrome',0,'suspend','2022-03-30 08:27:34','2022-03-30 08:27:34'],[23,NULL,7,'windows','121.122.44.133',101.598100,3.120100,'Petaling Jaya, Selangor, Malaysia','Google Chrome',0,'suspend','2022-03-30 08:27:55','2022-03-30 08:27:55'],[24,NULL,8,'windows','121.122.44.133',101.598100,3.120100,'Petaling Jaya, Selangor, Malaysia','Google Chrome',0,'suspend','2022-03-30 08:28:24','2022-03-30 08:28:24'],[25,NULL,9,'windows','121.122.44.133',101.598100,3.120100,'Petaling Jaya, Selangor, Malaysia','Google Chrome',0,'suspend','2022-03-30 08:28:30','2022-03-30 08:28:30'],[26,NULL,12,'windows','121.122.44.133',101.598100,3.120100,'Petaling Jaya, Selangor, Malaysia','Google Chrome',0,'active','2022-03-30 08:28:45','2022-03-30 08:28:45'],[27,NULL,2,'windows','121.122.44.133',101.598100,3.120100,'Petaling Jaya, Selangor, Malaysia','Google Chrome',0,'active','2022-03-31 08:26:08','2022-03-31 08:26:08'],[28,NULL,2,'windows','121.122.44.133',101.598100,3.120100,'Petaling Jaya, Selangor, Malaysia','Google Chrome',0,'active','2022-04-01 04:52:45','2022-04-01 04:52:45'],[29,NULL,13,'mac','121.122.44.133',101.598100,3.120100,'Petaling Jaya, Selangor, Malaysia','Google Chrome',0,'active','2022-04-06 01:42:51','2022-04-06 01:42:51'],[30,5,13,'mac',NULL,101.743845,3.091358,'Kuala Lumpur,Wilayah Persekutuan Kuala Lumpur,Malaysia','Apple Safari',1,'active','2022-04-06 01:54:07','2022-04-06 01:54:07'],[31,5,14,'mac','121.122.44.133',101.598100,3.120100,'Petaling Jaya, Selangor, Malaysia','Google Chrome',1,'active','2022-04-06 02:42:33','2022-04-06 02:42:33'],[32,3,14,'windows',NULL,101.741006,3.082128,'Kuala Lumpur,Wilayah Persekutuan Kuala Lumpur,Malaysia','Google Chrome',1,'active','2022-04-06 02:43:58','2022-04-06 02:43:58'],[33,6,15,'windows','121.122.44.133',101.598100,3.120100,'Petaling Jaya, Selangor, Malaysia','Google Chrome',1,'active','2022-04-06 02:46:34','2022-04-06 02:46:34'],[34,3,14,'windows',NULL,101.741006,3.082128,'Kuala Lumpur,Wilayah Persekutuan Kuala Lumpur,Malaysia','Google Chrome',1,'active','2022-04-06 03:00:45','2022-04-06 03:00:45'],[35,3,14,'windows',NULL,101.744002,3.091272,'Kuala Lumpur,Wilayah Persekutuan Kuala Lumpur,Malaysia','Google Chrome',1,'active','2022-04-06 03:04:38','2022-04-06 03:04:38'],[36,6,14,'windows','121.122.44.133',101.598100,3.120100,'Petaling Jaya, Selangor, Malaysia','Google Chrome',1,'active','2022-04-06 03:05:48','2022-04-06 03:05:48'],[37,7,16,'mac',NULL,101.743844,3.091428,'Kuala Lumpur,Wilayah Persekutuan Kuala Lumpur,Malaysia','Apple Safari',1,'active','2022-04-06 04:00:14','2022-04-06 04:00:14'],[38,8,17,'mac',NULL,101.743850,3.091377,'Kuala Lumpur,Wilayah Persekutuan Kuala Lumpur,Malaysia','Apple Safari',1,'active','2022-04-06 04:01:09','2022-04-06 04:01:09'],[39,11,19,'linux',NULL,101.752414,3.099099,'Hulu Langat,Selangor,Malaysia','Google Chrome',1,'active','2022-04-06 04:02:34','2022-04-06 04:02:34'],[40,12,20,'linux','2404:160:8051:a101:bf70:328f:29d2:9f43',101.710500,3.038400,'Seri Kembangan, Selangor, Malaysia','Google Chrome',1,'active','2022-04-06 04:02:42','2022-04-06 04:02:42'],[41,5,18,'mac',NULL,101.743866,3.091277,'Kuala Lumpur,Wilayah Persekutuan Kuala Lumpur,Malaysia','Apple Safari',1,'active','2022-04-06 04:04:39','2022-04-06 04:04:39'],[42,13,21,'mac',NULL,101.743830,3.091399,'Kuala Lumpur,Wilayah Persekutuan Kuala Lumpur,Malaysia','Apple Safari',1,'active','2022-04-06 04:05:50','2022-04-06 04:05:50'],[43,14,22,'mac',NULL,101.743852,3.091395,'Kuala Lumpur,Wilayah Persekutuan Kuala Lumpur,Malaysia','Apple Safari',1,'active','2022-04-06 04:06:32','2022-04-06 04:06:32'],[44,15,23,'linux',NULL,101.734370,3.099099,'Kuala Lumpur,Federal Territory of Kuala Lumpur,Malaysia','Google Chrome',1,'active','2022-04-06 04:07:09','2022-04-06 04:07:09'],[45,16,24,'mac',NULL,101.787828,3.056712,'Cheras,Selangor,Malaysia','Apple Safari',1,'active','2022-04-06 04:07:31','2022-04-06 04:07:31'],[46,17,25,'mac','121.122.44.133',101.598100,3.120100,'Petaling Jaya, Selangor, Malaysia','Apple Safari',1,'active','2022-04-06 04:07:47','2022-04-06 04:07:47'],[47,18,26,'linux',NULL,101.743939,3.091195,'Kuala Lumpur,Wilayah Persekutuan Kuala Lumpur,Malaysia','Google Chrome',1,'active','2022-04-06 04:09:08','2022-04-06 04:09:08'],[48,19,27,'linux','121.122.44.133',101.598100,3.120100,'Petaling Jaya,Selangor,Malaysia','Google Chrome',1,'active','2022-04-06 04:09:40','2022-04-06 04:09:40'],[49,20,28,'mac',NULL,101.743861,3.091337,'Kuala Lumpur,Wilayah Persekutuan Kuala Lumpur,Malaysia','Apple Safari',1,'active','2022-04-06 04:09:46','2022-04-06 04:09:46'],[50,21,29,'linux',NULL,101.743947,3.091237,'Kuala Lumpur,Wilayah Persekutuan Kuala Lumpur,Malaysia','Google Chrome',1,'active','2022-04-06 04:10:58','2022-04-06 04:10:58'],[51,22,30,'linux','113.211.132.150',101.674700,3.119100,'Kuala Lumpur, Kuala Lumpur, Malaysia','Google Chrome',1,'active','2022-04-06 04:13:11','2022-04-06 04:13:11'],[52,NULL,12,'linux','2402:1980:828a:24c:54b2:de7e:87ae:28c7',101.533000,3.085070,'Shah Alam, Selangor, Malaysia','Google Chrome',0,'suspend','2022-04-06 05:09:27','2022-04-06 05:09:27'],[53,NULL,4,'linux','2402:1980:828a:24c:54b2:de7e:87ae:28c7',101.533000,3.085070,'Shah Alam, Selangor, Malaysia','Google Chrome',0,'suspend','2022-04-06 05:11:11','2022-04-06 05:11:11'],[54,NULL,4,'windows','121.122.44.133',101.598100,3.120100,'Petaling Jaya, Selangor, Malaysia','Google Chrome',0,'active','2022-04-06 05:12:10','2022-04-06 05:12:10'],[55,NULL,31,'windows','2001:ee0:4fb7:490:80d4:cc9d:9cc8:3535',106.658100,10.832600,'Ho Chi Minh City, Ho Chi Minh, Vietnam','Google Chrome',0,'active','2022-04-06 06:25:38','2022-04-06 06:25:38'],[56,NULL,31,'windows','2001:ee0:4fb7:490:80d4:cc9d:9cc8:3535',106.658100,10.832600,'Ho Chi Minh City, Ho Chi Minh, Vietnam','Google Chrome',0,'suspend','2022-04-06 06:26:21','2022-04-06 06:26:21'],[57,NULL,32,'windows','2001:ee0:4fb7:490:89b8:f450:93c:9fa1',106.658100,10.832600,'Ho Chi Minh City, Ho Chi Minh, Vietnam','Google Chrome',0,'active','2022-04-06 06:30:46','2022-04-06 06:30:46'],[58,NULL,4,'linux',NULL,101.743992,3.091275,'Kuala Lumpur,Wilayah Persekutuan Kuala Lumpur,Malaysia','Google Chrome',1,'active','2022-04-06 07:37:05','2022-04-06 07:37:05'],[59,3,33,'windows',NULL,101.741006,3.082167,'Kuala Lumpur,Wilayah Persekutuan Kuala Lumpur,Malaysia','Google Chrome',1,'suspend','2022-04-08 03:25:27','2022-04-08 03:25:27'],[60,23,30,'mac','115.164.202.25',101.707035,3.148114,'Kuala Lumpur,Wilayah Persekutuan Kuala Lumpur,Malaysia','Apple Safari       ',1,'active','2022-04-15 06:06:12','2022-04-15 06:06:12'],[61,23,21,'mac','115.164.202.25',101.707003,3.148113,'Kuala Lumpur,Selangor,Malaysia','Apple Safari',1,'active','2022-04-15 06:18:25','2022-04-15 06:18:25'],[62,23,24,'mac','115.164.202.25',101.707100,3.148110,'Kuala Lumpur,Wilayah Persekutuan Kuala Lumpur,Malaysia','Apple Safari',1,'active','2022-04-15 06:38:17','2022-04-15 06:38:17'],[63,2,4,'windows','121.122.44.133',101.741006,3.082128,'Kuala Lumpur,Wilayah Persekutuan Kuala Lumpur,Malaysia','Google Chrome',1,'active','2022-04-18 02:59:37','2022-04-18 03:08:41'],[64,5,24,'mac','121.122.44.133',101.743879,3.091144,'Kuala Lumpur,Wilayah Persekutuan Kuala Lumpur,Malaysia','Apple Safari',1,'active','2022-04-18 03:56:25','2022-04-18 03:56:25'],[65,24,34,'mac','121.122.44.133',101.743856,3.091419,'Kuala Lumpur,Wilayah Persekutuan Kuala Lumpur,Malaysia','Apple Safari',1,'active','2022-04-18 06:51:43','2022-04-18 06:51:43'],[66,24,35,'mac','121.122.44.133',101.743891,3.091393,'Kuala Lumpur,Wilayah Persekutuan Kuala Lumpur,Malaysia','Apple Safari',1,'active','2022-04-18 06:53:28','2022-04-18 06:53:28'],[67,NULL,36,'windows','121.122.44.133',101.741006,3.101036,'Kuala Lumpur,Federal Territory of Kuala Lumpur,Malaysia','Google Chrome',1,'active','2022-04-20 02:42:22','2022-04-20 02:42:22'],[68,24,37,'mac','121.122.44.133',101.743873,3.091314,'Kuala Lumpur,Wilayah Persekutuan Kuala Lumpur,Malaysia','Apple Safari',1,'active','2022-04-20 02:49:41','2022-04-20 02:49:41'],[69,NULL,36,'linux','27.125.249.6',101.744009,3.091269,'Kuala Lumpur,Wilayah Persekutuan Kuala Lumpur,Malaysia','Google Chrome',1,'active','2022-04-20 02:57:33','2022-04-20 02:57:33'],[70,3,38,'windows','121.122.44.133',101.741006,3.082128,'Kuala Lumpur,Wilayah Persekutuan Kuala Lumpur,Malaysia','Google Chrome',1,'active','2022-04-20 03:03:33','2022-04-20 03:03:33'],[71,24,39,'mac','121.122.44.133',101.743878,3.091403,'Kuala Lumpur,Wilayah Persekutuan Kuala Lumpur,Malaysia','Apple Safari',1,'active','2022-04-20 03:09:26','2022-04-20 03:09:26'],[72,3,40,'windows','121.122.44.133',101.741006,3.082128,'Kuala Lumpur,Wilayah Persekutuan Kuala Lumpur,Malaysia','Google Chrome',1,'active','2022-04-20 03:24:07','2022-04-20 03:24:07'],[73,3,40,'linux','121.122.44.133',101.743994,3.091262,'Kuala Lumpur,Wilayah Persekutuan Kuala Lumpur,Malaysia','Google Chrome',1,'active','2022-04-20 03:29:09','2022-04-20 03:29:09'],[74,3,40,'windows','121.122.44.133',101.598100,3.120100,'Petaling Jaya,Selangor,Malaysia','Google Chrome',1,'active','2022-04-20 04:12:03','2022-04-20 04:12:03'],[75,5,24,'mac','121.122.44.133',101.743837,3.091333,'Kuala Lumpur,Wilayah Persekutuan Kuala Lumpur,Malaysia','Apple Safari',1,'active','2022-04-20 04:33:27','2022-04-20 04:33:27'],[76,3,24,'windows','121.122.44.133',101.598100,3.120100,'Petaling Jaya,Selangor,Malaysia','Google Chrome',1,'active','2022-04-20 05:42:44','2022-04-20 05:42:44'],[77,3,24,'windows','121.122.44.133',101.741006,3.082128,'Kuala Lumpur,Wilayah Persekutuan Kuala Lumpur,Malaysia','Google Chrome',1,'suspend','2022-04-20 05:43:15','2022-04-20 05:43:15'],[78,3,40,'windows','121.122.44.133',101.598100,3.120100,'Petaling Jaya,Selangor,Malaysia','Google Chrome',1,'active','2022-04-20 06:42:45','2022-04-20 06:42:45'],[79,3,41,'windows','121.122.44.133',101.598100,3.120100,'Petaling Jaya,Selangor,Malaysia','Google Chrome',1,'active','2022-04-20 06:43:11','2022-04-20 06:43:11'],[80,5,21,'mac','121.122.44.133',101.743838,3.091258,'Kuala Lumpur,Wilayah Persekutuan Kuala Lumpur,Malaysia','Apple Safari',1,'active','2022-04-20 06:55:31','2022-04-20 06:55:31'],[81,NULL,42,'mac','121.122.44.133',101.598100,3.120100,'Petaling Jaya,Selangor,Malaysia','Google Chrome',1,'active','2022-04-25 02:35:14','2022-04-25 02:35:14'],[82,3,38,'windows','121.122.44.133',101.741006,3.101075,'Kuala Lumpur,Federal Territory of Kuala Lumpur,Malaysia','Google Chrome',1,'active','2022-04-26 07:18:31','2022-04-26 07:18:31'],[83,5,14,'mac','121.122.44.133',101.598100,3.120100,'Petaling Jaya,Selangor,Malaysia','Google Chrome',1,'suspend','2022-04-27 04:04:16','2022-04-27 04:04:16'],[84,5,43,'mac','121.122.44.133',101.598100,3.120100,'Petaling Jaya,Selangor,Malaysia','Google Chrome',1,'active','2022-04-27 04:04:40','2022-04-27 04:04:40'],[85,3,43,'windows','121.122.44.133',101.743982,3.091287,'Kuala Lumpur,Wilayah Persekutuan Kuala Lumpur,Malaysia','Google Chrome',1,'active','2022-04-27 04:06:07','2022-04-27 04:06:07'],[86,5,44,'mac','121.122.44.133',101.598100,3.120100,'Petaling Jaya,Selangor,Malaysia','Google Chrome',1,'active','2022-04-27 04:28:42','2022-04-27 04:28:42'],[87,5,44,'mac','121.122.44.133',101.598100,3.120100,'Petaling Jaya,Selangor,Malaysia','Apple Safari',1,'active','2022-04-28 03:45:52','2022-04-28 03:45:52'],[88,24,45,'mac','121.122.44.133',101.598100,3.120100,'Petaling Jaya,Selangor,Malaysia','Google Chrome',1,'active','2022-04-28 03:46:54','2022-04-28 03:46:54'],[89,24,46,'mac','121.122.44.133',101.598100,3.120100,'Petaling Jaya,Selangor,Malaysia','Google Chrome',1,'active','2022-05-05 04:24:07','2022-05-05 04:24:07'],[90,24,47,'mac','121.122.44.133',101.598100,3.120100,'Petaling Jaya,Selangor,Malaysia','Google Chrome',1,'active','2022-05-05 04:58:36','2022-05-05 04:58:36'],[91,24,48,'mac','121.122.44.133',101.598100,3.120100,'Petaling Jaya,Selangor,Malaysia','Google Chrome',1,'active','2022-05-05 04:59:18','2022-05-05 04:59:18'],[92,5,49,'mac','121.122.44.133',101.598100,3.120100,'Petaling Jaya,Selangor,Malaysia','Google Chrome',1,'active','2022-05-11 08:02:08','2022-05-11 08:02:08'],[93,2,50,'windows','121.122.44.133',101.741006,3.101094,'Kuala Lumpur,Wilayah Persekutuan Kuala Lumpur,Malaysia','Google Chrome',1,'active','2022-05-11 08:04:34','2022-05-11 08:04:34'],[94,5,51,'mac','121.122.44.133',101.598100,3.120100,'Petaling Jaya,Selangor,Malaysia','Google Chrome',1,'active','2022-05-11 08:07:12','2022-05-11 08:07:12'],[95,26,52,'linux','183.171.88.158',101.743953,3.091253,'Kuala Lumpur,Wilayah Persekutuan Kuala Lumpur,Malaysia','Google Chrome',1,'active','2022-05-11 08:53:19','2022-05-11 08:53:19'],[96,10,53,'mac','121.122.44.133',101.743825,3.091662,'Kuala Lumpur,Wilayah Persekutuan Kuala Lumpur,Malaysia','Apple Safari',1,'active','2022-05-11 08:59:52','2022-05-11 08:59:52'],[97,26,54,'linux','183.171.88.158',101.743934,3.091241,'Kuala Lumpur,Wilayah Persekutuan Kuala Lumpur,Malaysia','Google Chrome',1,'active','2022-05-11 09:02:31','2022-05-11 09:02:31'],[98,5,52,'mac','121.122.44.133',101.743825,3.091294,'Kuala Lumpur,Wilayah Persekutuan Kuala Lumpur,Malaysia','Apple Safari',1,'active','2022-05-11 09:03:04','2022-05-11 09:03:04'],[99,10,52,'mac','121.122.44.133',101.743825,3.091662,'Kuala Lumpur,Wilayah Persekutuan Kuala Lumpur,Malaysia','Apple Safari',1,'suspend','2022-05-11 09:04:20','2022-05-11 09:04:20'],[100,5,26,'mac','121.122.44.133',101.598100,3.120100,'Petaling Jaya,Selangor,Malaysia','Google Chrome',1,'active','2022-05-17 07:47:11','2022-05-17 07:47:11'],[101,NULL,55,'mac','121.122.44.133',101.598100,3.120100,'Petaling Jaya,Selangor,Malaysia','Google Chrome',1,'active','2022-05-18 09:45:05','2022-05-18 09:45:05'],[102,NULL,56,'mac','115.132.37.237',101.713609,3.059875,'Kuala Lumpur,Wilayah Persekutuan Kuala Lumpur,Malaysia','Apple Safari',1,'active','2022-06-12 15:27:00','2022-06-12 15:27:00'],[103,NULL,57,'mac','121.122.44.133',101.743998,3.091160,'Kuala Lumpur,Wilayah Persekutuan Kuala Lumpur,Malaysia','Google Chrome',1,'active','2022-07-04 05:47:10','2022-07-04 05:47:10'],[104,NULL,58,'mac','121.122.44.133',101.744001,3.091162,'Kuala Lumpur,Wilayah Persekutuan Kuala Lumpur,Malaysia','Google Chrome',1,'active','2022-07-04 06:08:56','2022-07-04 06:08:56'],[105,NULL,59,'mac','121.122.44.133',101.744010,3.091124,'Kuala Lumpur,Wilayah Persekutuan Kuala Lumpur,Malaysia','Google Chrome',1,'suspend','2022-07-04 06:16:53','2022-07-04 06:16:53'],[106,28,60,'mac','121.122.44.133',101.744019,3.091144,'Kuala Lumpur,Wilayah Persekutuan Kuala Lumpur,Malaysia','Google Chrome',1,'active','2022-07-04 06:21:45','2022-07-04 06:23:40'],[107,5,30,'mac','121.122.44.133',101.743925,3.091412,'Kuala Lumpur,Wilayah Persekutuan Kuala Lumpur,Malaysia','Apple Safari',1,'active','2022-07-05 07:38:25','2022-07-05 07:38:25']];

        $maxUserId = 0;
        $maxUserScanId = 0;

        foreach ($arr as $key => $ass) {
            if($ass[1] !== null && $ass[1] > $maxUserId) {
                $maxUserId = $ass[1];
            }

            if($ass[2] !== null && $ass[2] > $maxUserScanId) {
                $maxUserScanId = $ass[2];
            }
        }

        for($i=1; $i<=$maxUserId; $i++) {
            $newEmail = 'email_' . $i;

            $statement = "INSERT INTO users (name, email, password) VALUES (?, ?, ?)";
            $pdo->prepare($statement)->execute(['test_name', $newEmail, 'pass']);
        }

        for($i=1; $i<=$maxUserScanId; $i++) {
            $statement = "INSERT INTO user_scans (scan_name) VALUES (?)";
            $pdo->prepare($statement)->execute(['test_name']);
        }

        echo 'fixed';
    }

    public function finalAnswer() {
        $pdo = DB::connection()->getPdo();

        $statements = [
            "CREATE TABLE IF NOT EXISTS user_scan_tracks_by_user (
                id BIGINT AUTO_INCREMENT PRIMARY KEY,
                date DATE,
                user_id BIGINT(20) unsigned DEFAULT NULL,
                scan_count INT,
                INDEX `user_scan_tracks_by_user_user_id_index` (`user_id`),
                CONSTRAINT `user_scan_tracks_by_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
            )",
            "CREATE TABLE IF NOT EXISTS user_scan_tracks_by_browser (
                id BIGINT AUTO_INCREMENT PRIMARY KEY,
                date DATE,
                browser varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
                scan_count INT
            )",
            "CREATE TABLE IF NOT EXISTS user_scan_tracks_by_ip (
                id BIGINT AUTO_INCREMENT PRIMARY KEY,
                date DATE,
                ip_address varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
                scan_count INT
            )",
        ];

        foreach ($statements as $statement) {
            $pdo->exec($statement);
        }

        $pdo->exec("INSERT INTO user_scan_tracks_by_user (date, user_id, scan_count)
                    SELECT DATE(created_at), user_id, COUNT(*) FROM user_scan_tracks
                    GROUP BY DATE(created_at), user_id");

        $pdo->exec("INSERT INTO user_scan_tracks_by_browser (date, browser, scan_count)
                    SELECT DATE(created_at), browser, COUNT(*) FROM user_scan_tracks
                    GROUP BY DATE(created_at), browser");
        
        $pdo->exec("INSERT INTO user_scan_tracks_by_ip (date, ip_address, scan_count)
                    SELECT DATE(created_at), ip_address, COUNT(*) FROM user_scan_tracks
                    GROUP BY DATE(created_at), ip_address");


        echo 'done';
    }

    public function execute () {

        return $this->calcFib([0, 1], 100);

    }

    public function calcFib (array $fibs, int $target) {
        $targetIndex = $target - 1;
        $fibLength = count($fibs);
        
        if ($fibLength === $target) {
            $targetValue = $fibs;
            
            return $fibs[$targetIndex];
        }
        
        $fibs[] = $fibs[$fibLength - 1] + $fibs[$fibLength - 2];

        return $this->calcFib($fibs, $target);
    }
}
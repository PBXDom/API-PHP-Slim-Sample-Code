<?php
/**
 * &lt;PBXDom API&gt;
 * @version 2.1.0
 */

require_once __DIR__ . '/vendor/autoload.php';

$app = new Slim\App();


/**
 * GET callsGet
 * Summary: 
 * Notes: Gets &#x60;Calls&#x60; info. 

 */
$app->GET('/Calls', function($request, $response, $args) {
            
            $queryParams = $request->getQueryParams();
            $rptType = $queryParams['rptType'];    $rptId = $queryParams['rptId'];    $start = $queryParams['start'];    $limit = $queryParams['limit'];    $sortBy = $queryParams['sortBy'];    $sortType = $queryParams['sortType'];    $fromDate = $queryParams['fromDate'];    $toDate = $queryParams['toDate'];    $duration = $queryParams['duration'];    $phone = $queryParams['phone'];    $phone1 = $queryParams['phone1'];    $co = $queryParams['co'];    $ext = $queryParams['ext'];    $pbxId = $queryParams['pbxId'];    $callSource = $queryParams['callSource'];    $callType = $queryParams['callType'];    $direction = $queryParams['direction'];    $callerName = $queryParams['callerName'];    $did = $queryParams['did'];    $dnis = $queryParams['dnis'];    $acc = $queryParams['acc'];    $ring = $queryParams['ring'];    $cost = $queryParams['cost'];    $group = $queryParams['group'];    
            
            
            $response->write('How about implementing callsGet as a GET method ?');
            return $response;
            });


/**
 * GET featuresChartsGet
 * Summary: 
 * Notes: Gets &#x60;Charts&#x60; list. 

 */
$app->GET('/Features/charts', function($request, $response, $args) {
            
            
            
            
            $response->write('How about implementing featuresChartsGet as a GET method ?');
            return $response;
            });


/**
 * GET featuresReportsGet
 * Summary: 
 * Notes: Gets &#x60;Reports&#x60; list. 

 */
$app->GET('/Features/reports', function($request, $response, $args) {
            
            
            
            
            $response->write('How about implementing featuresReportsGet as a GET method ?');
            return $response;
            });


/**
 * GET featuresWidgetGet
 * Summary: 
 * Notes: Gets &#x60;Widgets&#x60; list. 

 */
$app->GET('/Features/widget', function($request, $response, $args) {
            
            
            
            
            $response->write('How about implementing featuresWidgetGet as a GET method ?');
            return $response;
            });



$app->run();

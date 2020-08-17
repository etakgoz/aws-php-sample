<?php
require("lib/init.php");

use Aws\S3\S3Client;  
use Aws\Exception\AwsException;

if (ENVIRONMENT === 'LOCAL') {
    $s3Client = new S3Client([
        'region' => 'eu-west-1',
        'version' => 'latest',
        'credentials' => [
            'key'    => AWS_ACCESS_KEY,
            'secret' => AWS_ACCESS_SECRET,
        ]
    ]);
} else {
    $s3Client = new S3Client([
        'region' => 'eu-west-1',
        'version' => 'latest'
    ]);   
}


//Listing all S3 Bucket
$buckets = $s3Client->listBuckets();
foreach ($buckets['Buckets'] as $bucket) {
    echo $bucket['Name'] . "<br/>";
}
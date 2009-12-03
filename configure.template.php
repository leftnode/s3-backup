<?php

/**
 * Configuration variables.
 */

/* S3 connection information. */
$s3AccessKeyId = '';
$s3AccessKey   = '';

/**
 * The max number of objects per bucket, if the bucket count
 * exceeds this amount, oldest objects will be deleted after the newest object is uploaded.
 */
$bucketMaxCount = array(
	'bucket.name' => 3
);

/* Database connection and backup file information. The name of the database is specified when invoking the program. */
$dbServer    = '';
$dbUsername  = '';
$dbPassword  = '';

/* Default access method for how the buckets and files should be created. Possible values: private, public-read, public-read-write */
$accessMethod = 'public-read';

/* Required email address (or name) for database backups. Use GPG to create a public/private key, and put the name of the recipient here. */
$gpgRecipient = '';

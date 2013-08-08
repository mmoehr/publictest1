<?php
error_reporting(E_ALL);
ini_set('html_errors', 1);
ini_set('diyplay_errors', 1);

define('SECRET', '02ks9vKJX-3');

if(!isset($_GET['code']) || $_GET['code'] != SECRET) {
    die('kein Zugriff');
}

define('TYPO3_MODE', true);
require_once ('../typo3conf/localconf.php');
require_once ('class.db.php');
require_once ('class.remove.php');



die($typo_db_username.'<br>'.$typo_db_password);


// DB Object
$db = new DB($typo_db_host, $typo_db_username, $typo_db_password, $typo_db);

// Remove Object
$remove = new Remove($db);

# $remove->removeDeadLinks();


/*
// hard delete
$media = $remove->getMediaToDelete();
# $remove->backupMedia($media, 'backup');
$remove->deleteMedia($media);

echo '<p>Dateien gelöscht</p>';

$hardDeletedRows = $remove->hardDelete();
echo '<h4>Hard deleted rows: '.$hardDeletedRows.'</h4>';


// soft delete
#$softDeletedRows = $remove->softDelete();
#echo '<h4>Soft deleted rows: '.$softDeletedRows.'</h4>';
*/




// additional get remaining articles

# $remain = $remove->exportRemainingNews();

## $media = $remove->getMediaToDelete();
// make backup
## $remove->backupMedia($media, 'backup');


# echo '<pre>'.print_r($media, 1).'</pre>';
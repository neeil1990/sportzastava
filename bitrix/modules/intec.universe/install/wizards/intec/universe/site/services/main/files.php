<? include(__DIR__.'/../.begin.php') ?>
<?

use Bitrix\Main\Loader;
use intec\core\base\Collection;
use intec\core\helpers\FileHelper;
use intec\core\helpers\Html;

/**
 * @var Collection $data
 * @var CWizardBase $wizard
 * @var CWizardStep $this
 */

$rewrite = $mode !== WIZARD_MODE_UPDATE;

$data->set('macros', []);
$macros = [
    'SITE_DIR' => WIZARD_SITE_DIR,
    'SITE_DIR_MACROS' => WIZARD_SITE_DIR,
    'SITE_NAME' => Html::encode($wizard->GetVar("siteName")),
    'SITE_PHONE' => Html::encode($wizard->GetVar("sitePhone")),
    'SITE_MAIL' => Html::encode($wizard->GetVar("siteMail")),
    'SITE_ADDRESS' => Html::encode($wizard->GetVar("siteAddress")),
    'SITE_META_DESCRIPTION' => Html::encode($wizard->GetVar("siteMetaDescription")),
    'SITE_META_KEYWORDS' => Html::encode($wizard->GetVar("siteMetaKeywords"))
];

$pathFrom = FileHelper::normalizePath(WIZARD_ABSOLUTE_PATH.'/site/public/'.LANGUAGE_ID, '/').'/';
$pathTo = FileHelper::normalizePath(WIZARD_SITE_PATH, '/').'/';

if (FileHelper::isDirectory($pathFrom)) {
    CopyDirFiles($pathFrom, $pathTo, $rewrite, $recursive = true, $remove = false);
    CWizardUtil::ReplaceMacrosRecursive($pathTo, $macros);
    CWizardUtil::ReplaceMacros($pathTo.'_index.php', $macros);
    CWizardUtil::ReplaceMacros($pathTo.'.section.php', $macros);

    if ($mode === WIZARD_MODE_UPDATE)
        if (FileHelper::isFile($pathTo.'_index.php'))
            unlink($pathTo.'_index.php');
}

$data->set('macros', $macros);
?>
<? include(__DIR__.'/../.end.php') ?>
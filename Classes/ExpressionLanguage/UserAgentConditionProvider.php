<?php
declare(strict_types=1);

namespace CodersCare\Device\ExpressionLanguage;

use CodersCare\Device\ExpressionLanguage\FunctionsProvider\UserAgentConditionFunctionsProvider;
use TYPO3\CMS\Core\ExpressionLanguage\AbstractProvider;
use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;
use TYPO3\CMS\Core\Utility\GeneralUtility;

/**
 * Class UserAgentConditionProvider
 *
 * @internal
 */
class UserAgentConditionProvider extends AbstractProvider {
    public function __construct()
    {
        if (!class_exists('Spyc')) {
            require_once ExtensionManagementUtility::extPath('device') . '/Contrib/mustangostang/spyc/Spyc.php';
        }
        if (!class_exists('DeviceDetector\DeviceDetector')) {
            require_once ExtensionManagementUtility::extPath('device') . '/Contrib/piwik/device-detector/autoload.php';
        }
        $this->expressionLanguageVariables = [
            'userAgent' => GeneralUtility::getIndpEnv('HTTP_USER_AGENT'),
        ];
        $this->expressionLanguageProviders = [
            UserAgentConditionFunctionsProvider::class,
        ];
    }
}

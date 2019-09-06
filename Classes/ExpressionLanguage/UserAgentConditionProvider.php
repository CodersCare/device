<?php
declare(strict_types=1);

namespace CodersCare\Tracer\ExpressionLanguage;

use CodersCare\Tracer\ExpressionLanguage\FunctionsProvider\UserAgentConditionFunctionsProvider;
use TYPO3\CMS\Core\ExpressionLanguage\AbstractProvider;
use TYPO3\CMS\Core\Utility\GeneralUtility;

/**
 * Class UserAgentConditionProvider
 *
 * @internal
 */
class UserAgentConditionProvider extends AbstractProvider {
    public function __construct()
    {
        $this->expressionLanguageVariables = [
            'userAgent' => GeneralUtility::getIndpEnv('HTTP_USER_AGENT'),
        ];
        $this->expressionLanguageProviders = [
            UserAgentConditionFunctionsProvider::class,
        ];
    }
}

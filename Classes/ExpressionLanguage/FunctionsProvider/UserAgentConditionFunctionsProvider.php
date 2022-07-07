<?php
declare(strict_types=1);

namespace CodersCare\Device\ExpressionLanguage\FunctionsProvider;

use DeviceDetector\DeviceDetector;
use DeviceDetector\Parser\Device\AbstractDeviceParser;
use Symfony\Component\ExpressionLanguage\ExpressionFunction;
use Symfony\Component\ExpressionLanguage\ExpressionFunctionProviderInterface;
use TYPO3\CMS\Core\Utility\GeneralUtility;

/**
 * Class UserAgentConditionFunctionsProvider
 * @internal
 */
class UserAgentConditionFunctionsProvider implements ExpressionFunctionProviderInterface {
    /**
     * @return ExpressionFunction[] An array of Function instances
     */
    public function getFunctions()
    {
        return [
            $this->getDeviceFunction(),
        ];
    }

    protected function getDeviceFunction(): ExpressionFunction
    {
        return new ExpressionFunction('device', function () {
            // Not implemented, we only use the evaluator
        }, function ($arguments, $str) {
            AbstractDeviceParser::setVersionTruncation(AbstractDeviceParser::VERSION_TRUNCATION_NONE);
            /** @var $dd DeviceDetector */
            $dd = GeneralUtility::makeInstance(DeviceDetector::class);
            $dd->setUserAgent(GeneralUtility::getIndpEnv('HTTP_USER_AGENT'));
            $dd->parse();
            switch (trim($str)) {
                case 'Bot':
                    return $dd->isBot();
                    break;
                case 'Browser':
                    return $dd->isBrowser();
                    break;
                case 'Camera':
                    return $dd->isCamera();
                    break;
                case 'CarBrowser':
                    return $dd->isCarBrowser();
                    break;
                case 'Console':
                    return $dd->isConsole();
                    break;
                case 'Desktop':
                    return $dd->isDesktop();
                    break;
                case 'FeaturePhone':
                    return $dd->isFeaturephone();
                    break;
                case 'FeedReader':
                    return $dd->isFeedReader();
                    break;
                case 'Library':
                    return $dd->isLibrary();
                    break;
                case 'MediaPlayer':
                    return $dd->isMediaPlayer();
                    break;
                case 'Mobile':
                    return $dd->isMobile();
                    break;
                case 'MobileApp':
                    return $dd->isMobileApp();
                    break;
                case 'Peripheral':
                    return $dd->isPeripheral();
                    break;
                case 'Phablet':
                    return $dd->isPhablet();
                    break;
                case 'PIM':
                    return $dd->isPIM();
                    break;
                case 'PortableMediaPlayer':
                    return $dd->isPortableMediaPlayer();
                    break;
                case 'SmartDisplay':
                    return $dd->isSmartDisplay();
                    break;
                case 'SmartSpeaker':
                    return $dd->isSmartSpeaker();
                    break;
                case 'Smartphone':
                    return $dd->isSmartphone();
                    break;
                case 'Tablet':
                    return $dd->isTablet();
                    break;
                case 'TouchEnabled':
                    return $dd->isTouchEnabled();
                    break;
                case 'TV':
                    return $dd->isTV();
                    break;
                case 'Wearable':
                    return $dd->isWearable();
                    break;
                default:
                    return false;
            }
        });
    }

}

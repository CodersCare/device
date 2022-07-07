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
class UserAgentConditionFunctionsProvider implements ExpressionFunctionProviderInterface
{
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
            /** @var DeviceDetector $device_detector */
            $device_detector = GeneralUtility::makeInstance(DeviceDetector::class);
            $device_detector->setUserAgent(GeneralUtility::getIndpEnv('HTTP_USER_AGENT'));
            $device_detector->parse();
            switch (trim($str)) {
                case 'Bot':
                    return $dd->isBot();
                    break;
                case 'Browser':
                    return $device_detector->isBrowser();
                    break;
                case 'Camera':
                    return $device_detector->isCamera();
                    break;
                case 'CarBrowser':
                    return $device_detector->isCarBrowser();
                    break;
                case 'Console':
                    return $device_detector->isConsole();
                    break;
                case 'Desktop':
                    return $device_detector->isDesktop();
                    break;
                case 'FeaturePhone':
                    return $device_detector->isFeaturePhone();
                    break;
                case 'FeedReader':
                    return $device_detector->isFeedReader();
                    break;
                case 'Library':
                    return $device_detector->isLibrary();
                    break;
                case 'MediaPlayer':
                    return $device_detector->isMediaPlayer();
                    break;
                case 'Mobile':
                    return $device_detector->isMobile();
                    break;
                case 'MobileApp':
                    return $device_detector->isMobileApp();
                    break;
                case 'Peripheral':
                    return $dd->isPeripheral();
                    break;
                case 'Phablet':
                    return $device_detector->isPhablet();
                    break;
                case 'PIM':
                    return $device_detector->isPIM();
                    break;
                case 'PortableMediaPlayer':
                    return $device_detector->isPortableMediaPlayer();
                    break;
                case 'SmartDisplay':
                    return $device_detector->isSmartDisplay();
                    break;
                case 'SmartSpeaker':
                    return $dd->isSmartSpeaker();
                    break;
                case 'Smartphone':
                    return $device_detector->isSmartphone();
                    break;
                case 'Tablet':
                    return $device_detector->isTablet();
                    break;
                case 'TouchEnabled':
                    return $dd->isTouchEnabled();
                    break;
                case 'TV':
                    return $device_detector->isTV();
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

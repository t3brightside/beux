<?php
namespace Brightside\Beux\Pagemodule;

use TYPO3\CMS\Backend\Template\Components\ModifyButtonBarEvent;
use TYPO3\CMS\Core\Imaging\IconFactory;
use TYPO3\CMS\Core\Imaging\Icon;
use TYPO3\CMS\Backend\Template\Components\ButtonBar;
use \TYPO3\CMS\Core\Utility\GeneralUtility;
use Psr\Http\Message\ServerRequestInterface;

class ModifyPageEditButtons {
    private const TABLE_NAME = 'sys_note';
    private const ALLOWED_MODULES = [
        'web_layout',
        'web_list',
        'web_info_overview',
        'web_info_translations',
        'web_info_pagets',
    ];

    public function __invoke(
        ModifyButtonBarEvent $event,
    ): void
    {
        $request = $this->getRequest();
        $module = $request->getAttribute('module');
        if($module) {
            $module = $module->getIdentifier();
        }

        $iconFactory = GeneralUtility::makeInstance(IconFactory::class);
        $buttonBar = $event->getButtonBar();
        $buttons = $event->getButtons();
        $button[0][0] = '';
     //   $button[0][0] = $buttonBar
       //     ->makeLinkButton()
         //   ->setHref('#')
         //   ->setTitle('TEST')
         //   ->setIcon($iconFactory->getIcon('actions-system-cache-clear', Icon::SIZE_SMALL))
         //   ->setShowLabelText(true)
       // ;
     //   debug($event);
     //   debug($button);
    #    $event->addButton($button, ButtonBar::BUTTON_POSITION_LEFT, 3);
        $buttons[ButtonBar::BUTTON_POSITION_LEFT] = array_merge($button);
// show no buttons
//$buttons[ButtonBar::BUTTON_POSITION_LEFT] = array_merge();
if($module === 'web_layout') {

    } else {

    }
    }
    protected function getRequest(): ServerRequestInterface
    {
        return $GLOBALS['TYPO3_REQUEST'];
    }
}

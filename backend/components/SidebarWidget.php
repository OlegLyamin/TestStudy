<?php
/**
 * Created by PhpStorm.
 * User: mrlya
 * Date: 25.08.2018
 * Time: 14:23
 */
namespace backend\components;


use dmstr\widgets\Menu;
use yii\helpers\ArrayHelper;
use yii\helpers\Url;

class SidebarWidget extends Menu
{
    /**
     * @inheritdoc
     */
    protected function renderItem($item)
    {
        if (isset($item['items'])) {
            $labelTemplate = '<a href="{url}">{icon} {label} <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i> {badges}</span></a>';
            $linkTemplate = '<a href="{url}">{icon} {label} <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i> {badges}</span></a>';
        } elseif (isset($item['badges'])) {
            $labelTemplate = '<a href="{url}">{icon} {label} <span class="pull-right-container"> {badges}</span></a>';
            $linkTemplate = '<a href="{url}">{icon} {label} <span class="pull-right-container"> {badges} </span></a>';
        } else {
            $labelTemplate = $this->labelTemplate;
            $linkTemplate = $this->linkTemplate;
        }

        $replacements = [
            '{label}' => strtr($this->labelTemplate, ['{label}' => $item['label']]),
            '{icon}' => empty($item['icon']) ? $this->defaultIconHtml
                : '<i class="' . self::$iconClassPrefix . $item['icon'] . '"></i> ',
            '{url}' => isset($item['url']) ? Url::to($item['url']) : 'javascript:void(0);',
            '{badges}' => isset($item['badges']) ? $this->returnBadgesList($item['badges']) : '',
        ];

        $template = ArrayHelper::getValue($item, 'template', isset($item['url']) ? $linkTemplate : $labelTemplate);
        //print_r($replacements);die();
        return strtr($template, $replacements);
    }

    /**
     * @param $badges
     * @return string
     */
    private function returnBadgesList($badges)
    {
        if (!is_array($badges)) {
            return '';
        }
        $sort_array = array_reverse($badges);
        $badgeTemplate = '<small class="label pull-right bg-{color}">{text}</small>';
        $badgeList = '';
        foreach ($sort_array as $badge) {
            $replacement = [
                '{color}' => empty($badge['color']) ? '' : strtolower($badge['color']),
                '{text}' => empty($badge['text']) ? '' : $badge['text']
            ];

            $badgeList .= strtr($badgeTemplate, $replacement);
        }

        return $badgeList;
    }
}
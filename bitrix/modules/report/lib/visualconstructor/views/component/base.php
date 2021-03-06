<?php

namespace Bitrix\Report\VisualConstructor\Views\Component;

use Bitrix\Report\VisualConstructor\Entity\Widget;
use Bitrix\Report\VisualConstructor\Helper\Widget as WidgetHelper;
use Bitrix\Report\VisualConstructor\View;

/**
 * Base class for component content type for widgets in report dashboard.
 *
 * @package Bitrix\Report\VisualConstructor\Views\Component
 */
abstract class Base extends View
{
	private $componentName;
	private $componentParameters;


	/**
	 * Base component type view constructor.
	 */
	public function __construct()
	{
		$this->setJsClassName('BX.Report.Dashboard.Content.Html');
	}

	/**
	 * @return mixed
	 */
	public function getComponentName()
	{
		return $this->componentName;
	}

	/**
	 * Setter for component name.
	 *
	 * @param string $componentName Component name.
	 * @return void
	 */
	public function setComponentName($componentName)
	{
		$this->componentName = $componentName;
	}


	/**
	 * @return string
	 */
	public function getComponentParameters()
	{
		return $this->componentParameters;
	}

	/**
	 * Component paremeters setter.
	 *
	 * @param array $componentParameters Parameters which pass to component.
	 * @return void
	 */
	public function setComponentParameters($componentParameters)
	{
		$this->componentParameters = $componentParameters;
	}

	/**
	 * Handle all data prepared for this view.
	 *
	 * @param array $calculatedPerformedData Performed data from report handler.
	 * @return array
	 */
	public function handlerFinallyBeforePassToView($calculatedPerformedData)
	{
		$result['data'] = $calculatedPerformedData;
		return $result;
	}


	/**
	 * Method to modify Content which pass to widget view, in absoulte end.
	 *
	 * @param Widget $widget Widget entity.
	 * @param bool $withCalculatedData Marker for calculate or no data in widget.
	 * @return array
	 */
	public function prepareWidgetContent(Widget $widget, $withCalculatedData = false)
	{
		$resultWidget = parent::prepareWidgetContent($widget, $withCalculatedData);

		$resultWidget['content']['params']['color'] = $resultWidget['config']['color'];
		$result = $this->getCalculatedPerformedData($widget, $withCalculatedData);


		$componentResult = $this->includeComponent($this->getComponentName(), array(
			'WIDGET' => $widget,
			'RESULT' => $result,
		));

		$resultWidget['content']['params']['html'] = $componentResult['html'];
		$resultWidget['content']['params']['css'] = $componentResult['css'];
		$resultWidget['content']['params']['js'] = $componentResult['js'];
		return $resultWidget;
	}

	/**
	 * Get calculated and foram,ted data.
	 *
	 * @param Widget $widget Widget Entity.
	 * @param bool $withCalculatedData Marker for calculate or no data in widget.
	 * @return array|null
	 */
	protected function getCalculatedPerformedData(Widget $widget, $withCalculatedData)
	{
		static $data;
		if (!$data)
		{
			$data = $withCalculatedData ? WidgetHelper::getCalculatedPerformedData($this, $widget) : array();
			$data = $this->handlerFinallyBeforePassToView($data);
		}
		return $data;
	}

	/**
	 * @param $componentName
	 * @param array $params
	 * @return mixed
	 */
	private function includeComponent($componentName, $params = array())
	{
		global $APPLICATION;
		ob_start();
		$APPLICATION->IncludeComponent(
			$componentName,
			'',
			$params
		);
		$componentContent = ob_get_clean();
		$result['html'] = $componentContent;
		$result['js'] = $APPLICATION->arHeadScripts;
		$result['css'] = $APPLICATION->sPath2css;
		return $result;

	}

}
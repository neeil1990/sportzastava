<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
use intec\constructor\models\Build;
?>
<?
$oBuild = Build::getCurrent();
if (!empty($oBuild)) {
	$oPage = $oBuild->getPage();
	$oProperties = $oPage->getProperties();
	$personal_data = $oProperties->get('inform_about_processing_personal_data');
}
?>
<div class="intec-content">
	<div class="intec-content-wrapper">
		<div class="registration_page">
			<div class="bx_registration_page">
				<h4>
					<?=GetMessage("AUTH_REGISTER")?>
				</h4>
				<div class="registration-info">
					<div class="registration-info-text">
						<?=GetMessage("RERISTRATION_DESCRIPTION");?>
					</div>
				</div>
				<?
				ShowMessage($arParams["~AUTH_RESULT"]);
				if($arResult["USE_EMAIL_CONFIRMATION"] === "Y" && is_array($arParams["AUTH_RESULT"]) &&  $arParams["AUTH_RESULT"]["TYPE"] === "OK") {?>
					<p><?echo GetMessage("AUTH_EMAIL_SENT")?></p>
				<?} else {?>
					<?if($arResult["USE_EMAIL_CONFIRMATION"] === "Y"):?>
						<p><?echo GetMessage("AUTH_EMAIL_WILL_BE_SENT")?></p>
					<?endif?>
					<!--noindex-->
					<form method="post" action="<?=$arResult["AUTH_URL"]?>" name="bform">
						<?if (strlen($arResult["BACKURL"]) > 0):?>
							<input type="hidden" name="backurl" value="<?=$arResult["BACKURL"]?>" />
						<?endif?>

						<input type="hidden" name="AUTH_FORM" value="Y" />
						<input type="hidden" name="TYPE" value="REGISTRATION" />

						<div class="form-group">
							<label><?=GetMessage("AUTH_NAME")?></label>
							<input type="text" name="USER_NAME" maxlength="50" value="<?=$arResult["USER_NAME"]?>" class="form-control form-control-local" />
						</div>

						<div class="form-group">
							<label><?=GetMessage("AUTH_LAST_NAME")?></label>
							<input type="text" name="USER_LAST_NAME" maxlength="50" value="<?=$arResult["USER_LAST_NAME"]?>" class="form-control form-control-local" />
						</div>

						<div class="form-group">
							<label>
								<span class="starrequired">*</span>
								<?=GetMessage("AUTH_LOGIN_MIN")?>
							</label>
							<input type="text" name="USER_LOGIN" maxlength="50" value="<?=$arResult["USER_LOGIN"]?>" class="form-control form-control-local" />
						</div>
						<div class="form-group">
							<label>
								<span class="starrequired">*</span><?=GetMessage("AUTH_PASSWORD_REQ")?>
							</label>
							<input type="password" name="USER_PASSWORD" maxlength="50" value="<?=$arResult["USER_PASSWORD"]?>" class="form-control form-control-local" />
						</div>
						<div class="form-group">
							<label>
								<span class="starrequired">*</span><?=GetMessage("AUTH_CONFIRM")?>
							</label>
							<input type="password" name="USER_CONFIRM_PASSWORD" maxlength="50" value="<?=$arResult["USER_CONFIRM_PASSWORD"]?>" class="form-control form-control-local" />
						</div>
						<div class="form-group">
							<label>
								<span class="starrequired">*</span><?=GetMessage("AUTH_EMAIL")?>
							</label>
							<input type="text" name="USER_EMAIL" maxlength="255" value="<?=$arResult["USER_EMAIL"]?>" class="form-control form-control-local" />
						</div>

						<div class="form-group">
							<?$APPLICATION->IncludeComponent("bitrix:main.userconsent.request", "userconsent.request.checkbox",
								array(
									"ID" => 1,
									"IS_CHECKED" => "Y",
									"AUTO_SAVE" => "N",
									"IS_LOADED" => "Y",
									"INPUT_NAME" => "RULE",
									"REPLACE" => array(
										"button_caption" => GetMessage("AUTH_REGISTER"),
									),
								)
							);?>
						</div>
						<!-- User properties -->
						<?if($arResult["USER_PROPERTIES"]["SHOW"] == "Y"):?>
						<?=strLen(trim($arParams["USER_PROPERTY_NAME"])) > 0 ? $arParams["USER_PROPERTY_NAME"] : GetMessage("USER_TYPE_EDIT_TAB")?>
						<?foreach ($arResult["USER_PROPERTIES"]["DATA"] as $FIELD_NAME => $arUserField):?>
						<?if ($arUserField["MANDATORY"]=="Y"):?><span class="required">*</span><?endif;?>
						<?=$arUserField["EDIT_FORM_LABEL"]?>:</td><td>
							<?$APPLICATION->IncludeComponent(
								"bitrix:system.field.edit",
								$arUserField["USER_TYPE"]["USER_TYPE_ID"],
								array("bVarsFromForm" => $arResult["bVarsFromForm"], "arUserField" => $arUserField, "form_name" => "bform"), null, array("HIDE_ICONS"=>"Y"));?>
							<?endforeach;?>
							<?endif;?>
							<!-- /User properties -->
							<!-- CAPTCHA -->
							<?if ($arResult["USE_CAPTCHA"] == "Y"):?>
								<div class="captcha form-group">
									<?=GetMessage("CAPTCHA_REGF_TITLE")?>
									<br>
									<input type="hidden" name="captcha_sid" value="<?=$arResult["CAPTCHA_CODE"]?>" />
									<img src="/bitrix/tools/captcha.php?captcha_sid=<?=$arResult["CAPTCHA_CODE"]?>" width="180" height="40" alt="CAPTCHA" />
									<label>
										<span class="starrequired">*</span>
										<?=GetMessage("CAPTCHA_REGF_PROMT")?>:</label>
									<input type="text" name="captcha_word" maxlength="50" value="" class="form-control form-control-local" />
								</div>
							<?endif?>
							<br>
							<input type="submit" name="Register" value="<?=GetMessage("AUTH_REGISTER")?>" class="reg-button intec-button intec-button-s-7 intec-button-cl-common" />
							<!-- /CAPTCHA -->
							<div style="clear:both;"></div>
					</form>
					<!--/noindex-->
				<?}?>
			</div>
			<script type="text/javascript">
				document.bform.USER_NAME.focus();
			</script>
		</div>
	</div>
</div>

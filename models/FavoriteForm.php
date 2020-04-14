<?php
/* * ********************************************************************************************
 * 								Open Real Estate
 * 								----------------
 * 	version				:	%TAG%
 * 	copyright			:	(c) %YEAR% Monoray
 * 							http://monoray.net
 * 							http://monoray.ru
 *
 * 	website				:	http://open-real-estate.info/en
 *
 * 	contact us			:	http://open-real-estate.info/en/contact-us
 *
 * 	license:			:	http://open-real-estate.info/en/license
 * 							http://open-real-estate.info/ru/license
 *
 * This file is part of Open Real Estate
 *
 * ********************************************************************************************* */

class FavoriteForm extends CFormModel
{
    public $model_id;
    public $model_name;

    public function rules()
    {
        return [
            ['model_id, model_name', 'required'],
        ];
    }
}
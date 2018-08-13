<?php
/**
 * Description.
 *
 * @package ${namespace}
 * @Since 1.0.0
 * @author Timothy Hill
 * @link https://executivesuiteit.com
 * @license
 */

namespace app\models;

use Yii;
use yii\base\Model;

class EntryForm extends Model {
	public $name;
	public $email;

	public function rules() {
		return [
			[['name', 'email'], 'required'],
			['email', 'email'],
		];
	}

}
/* Gibberish?
$model = new EntryForm();
$model->name = 'Qiang';
$model->email = 'bad';
if ($model->validate()) {
	//Good!
} else {
	//Failure!
	//Use $model-getErros()
}
*/
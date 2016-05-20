<?php
require_once(drupal_get_path('module', 'signup_extra') . '/src/SignupBase.php');

class Sicode extends SignupBase {
  protected static $hook = 'sicode';
  protected $module = 'sicode';

  static function validateValues(array $values) {
    $item = true;
    $item &= static::validateRegcodeCode($values);
    return $item;
  }

  static protected function validateRegcodeCode(array $values) {
    global $user;
    $index = 'regcode_code';
    $item = $values['signup_form_data'][$index];
    $edit = [$index => $item];
    module_invoke_all('regcode_validate', $edit, $user);
    $code = regcode_use($item);

    if (!is_object($code)) {
      form_set_error('regcode_code', regcode_errormsg($code));
      watchdog('regcode', 'User entered invalid registration code (@code)', ['@code' => $item], WATCHDOG_WARNING);
      return false;
    }

    regcode_use_helper($edit, $user);
    return true;
  }

  protected function doForm() {
    parent::doForm();
    $form = &$this->form;
    $form['#validate'][] = 'sicode_form_signup_form_validate';
    $form['#submit'][] = 'sicode_form_signup_form_submit';
    $this->formRegcode();
    return $form;
  }

  protected function formRegcode() {
    $form = &$this->getSignupFormData();
    $signup = &$this->form['#signup'];
    $index = 'regcode_code';
    $form[$index] = [
      '#type' => 'textfield',
      '#title' => t('Signup Code'),
      '#description' => t('Please enter your Signup code.'),
      '#required' => true,
      '#default_value' => empty($signup) ? '' : sicode_get_code($signup->sid),
    ];

    if (isset($_GET['regcode'])) {
      $form[$index]['#value'] = check_plain($_GET['regcode']);
      $form[$index]['#description'] = null;
      $form[$index]['#disabled'] = true;
    }

  }

  protected function doSubmit() {
    global $user;
    dpm(__FUNCTION__);
    //dpm($this->state);
    //dpm($this->getValues());
    return;

    $edit = [];
    regcode_use_helper($edit, $user);
    $sicode = new stdClass;

    if (isset($form_state['values']['signup_username'])) {
      $account = user_load(['name' => $form_state['values']['signup_username']]);
      $uid = $account->uid;
    } else {
      $uid = $user->uid;
    }
    //$sicode->sid = sicode_get_sid($user->uid, $form['nid']['#value']); //origin by albert, get current user id for save it, this is used for in-node signup
    $sicode->sid = sicode_get_sid($uid, $form['nid']['#value']);
    $sicode->code = trim($form['collapse']['signup_user_form']['regcode_code']['#value']);

    sicode_save($sicode);

    return [];
  }

}

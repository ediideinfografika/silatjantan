<?php

namespace Drupal\json_form\Plugin\Field\FieldWidget;

use Drupal\Core\Field\FieldItemListInterface;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Field\WidgetBase;
use Drupal\Core\StringTranslation\StringTranslationTrait;
use Drupal\Core\Url;
use Drupal\Component\Utility\Html;
use Drupal\Core\Link;

/**
 * JSON Form widget.
 *
 * @FieldWidget(
 *   id = "json_form_field",
 *   label = @Translation("JSON Form"),
 *   field_types = {
 *     "string_long"
 *   }
 * )
 */
class JsonFormWidget extends WidgetBase {

  use StringTranslationTrait;

  /**
   * {@inheritdoc}
   */
  public static function defaultSettings() {
    return [
        'json_form' => '',
        'show_textarea' => FALSE,
        'json_form_default_value' => '',
      ] + parent::defaultSettings();
  }

  /**
   * {@inheritdoc}
   */
  public function settingsForm(array $form, FormStateInterface $form_state) {

    $json_forms_link = $this->getJsonFormLink();
    $element['json_form'] = [
      '#type' => 'textarea',
      '#title' => $this->t('JSON Form'),
      '#description' => $this->t('JSON Form configuration. More info @moreinfo.', [
        '@moreinfo' => $json_forms_link,
      ]),
      '#default_value' => $this->getSetting('json_form'),
      '#required' => TRUE,
      '#min' => 1,
    ];
    $element['json_form_default_value'] = [
      '#type' => 'textarea',
      '#title' => $this->t('JSON Form default value'),
      '#description' => $this->t('JSON Form default value. More info @moreinfo.', [
        '@moreinfo' => $json_forms_link,
      ]),
      '#default_value' => $this->getSetting('json_form_default_value'),
      '#required' => FALSE,
      '#min' => 1,
    ];
    $element['show_textarea'] = [
      '#type' => 'checkbox',
      '#title' => $this->t('Show JSON Form textarea'),
      '#default_value' => $this->getSetting('show_textarea'),
      '#required' => FALSE,
    ];
    return $element;
  }

  /**
   * Get json form library link to give info in settings form.
   *
   * @return string
   *   Json form repository link HTML markup.
   */
  public function getJsonFormLink() {
    $url = Url::fromUri('https://github.com/brutusin/json-forms');
    $url->setAbsolute();
    $json_forms_link_render = Link::fromTextAndUrl('here', $url)->toRenderable();
    $json_forms_link_render['#attributes']['target'] = '_blank';
    $json_forms_link = render($json_forms_link_render);
    return $json_forms_link;
  }

  /**
   * {@inheritdoc}
   */
  public function formElement(FieldItemListInterface $items, $delta, array $element, array &$form, FormStateInterface $form_state) {
    $field_name = $this->fieldDefinition->getName();
    $entity = $form_state->getFormObject()->getEntity();
    $identifier = $field_name . '-' . $delta . '-jsonform';
    $item = $items[$delta];
    $css_class = $this->getSetting('show_textarea') ? '' : 'json-form-hidden';

    // Set different values for default values form:
    // - Drupal selector.
    // - Json form default value origin.
    if (reset($form['#parents']) == 'default_value_input') {
      $selector = '[data-drupal-selector="' . Html::getId('edit-default-value-input-' . $field_name . '-' . $delta . '-value') . '"]';
      $default_value = $this->getWidgetDefaultValue($item);
    }
    else {
      $default_value = !$entity->isNew() ? $item->value : $this->getWidgetDefaultValue($item);
      $selector = '[data-drupal-selector="' . Html::getId('edit-' . $field_name . '-' . $delta . '-value') . '"]';
    }

    $element['value'] = $element + [
      '#suffix' => '<div id="' . $identifier . '"></div>',
      '#type' => 'textarea',
      '#default_value' => !empty($default_value) ? $default_value : '{}',
      '#attributes' => ['class' => [$css_class]],
      '#attached' => [
        'library' => [
          'json_form/json-form',
          'json_form/json-form-widget',
        ],
        'drupalSettings' => [
          'jsonFormFieldWidget' => [
            $identifier => [
              'schema' => json_decode($this->getSetting('json_form')),
              'identifier' => $identifier,
              'textarea' => $selector,
            ],
          ],
        ],
      ],
    ];
    return $element;
  }

  /**
   * Get defauilt raw value of widget.
   *
   * @param \Drupal\Core\Field\FieldItemInterface|null $item
   *   Field item.
   *
   * @return string
   *   Default value.
   */
  public function getWidgetDefaultValue($item) {
    if (!empty($item->value)) {
      $value = $item->value;
    }
    else {
      $value = $this->getSetting('json_form_default_value');
    }
    return $value;
  }

  /**
   * Get defauilt value of widget.
   *
   * @param \Drupal\Core\Field\FieldItemInterface|null $item
   *   Field item.
   *
   * @return object
   *   Default value, in json format.
   */
  public function getWidgetDefaultValueJson($item) {
    $value = $this->getWidgetDefaultValue($item);
    return json_decode($value);
  }

  /**
   * {@inheritdoc}
   */
  public function settingsSummary() {
    $summary = [];

    $json_form = $this->getSetting('json_form');
    $summary[] = t('Configured: @configured', ['@configured' => !empty($json_form) ? t('Yes') : t('No')]);

    return $summary;
  }

}

<?php

namespace Drupal\facet_extension\Plugin\facets\widget;

use Drupal\Core\Form\FormStateInterface;
use Drupal\facets\FacetInterface; 
use Drupal\facets\Widget\WidgetPluginBase;

/**
 * Facets state radio widget.
 *
 * @FacetsWidget(
 *   id = "zalando_list",
 *   label = @Translation("Zalando list"),
 *   description = @Translation("A configurable widget that shows a list of links."),
 * )
 */
class ZalandoListWidget extends WidgetPluginBase {

  /**
   * {@inheritdoc}
   */
  public function defaultConfiguration() {
    return [
      'default_option_label' => 'Any',
    ] + parent::defaultConfiguration();
  }


  /**
   * Appends widget library and relevant information for it to build array.
   *
   * @param array $build
   *   Reference to build array.
   */
  protected function appendWidgetLibrary(array &$build) {
    $build['#attached']['library'][] = 'facets/drupal.facets.checkbox-widget';
    $build['#attributes']['class'][] = 'js-facets-zalando-links';
  }

  /**
   * {@inheritdoc}
   */
  public function build(FacetInterface $facet) {
    $build = parent::build($facet);
    $build['#attributes']['class'][] = 'js-facets-radio-links';
    $build['#attached']['drupalSettings']['facets']['radioWidget'][$facet->id()]['facet-default-radio-label'] = $this->getConfiguration()['default_option_label'];
    $build['#attached']['library'][] = 'facets_widgets/state_radio_widget';
    $build['#attached']['library'][] = 'facets/drupal.facets.general';
    return $build;
  }

  /**
   * {@inheritdoc}
   */
  public function buildConfigurationForm(array $form, FormStateInterface $form_state, FacetInterface $facet) {
    $config = $this->getConfiguration();

    $message = $this->t('To achieve the standard behavior of a list of radios, you need to enable the facet setting below <em>"Ensure that only one result can be displayed"</em>.');
    $form['warning'] = [
      '#markup' => '<div class="messages messages--warning">' . $message . '</div>',
    ];

    $form += parent::buildConfigurationForm($form, $form_state, $facet);

    $form['default_option_label'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Default option label'),
      '#default_value' => $config['default_option_label'],
    ];

    return $form;
  }

}

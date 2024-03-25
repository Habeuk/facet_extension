<?php

namespace Drupal\facet_extension\Plugin\facets\widget;

use Drupal\facets\FacetInterface;
use Drupal\facets\Plugin\facets\widget\LinksWidget;
use Drupal\facets\Result\ResultInterface;
use Drupal\Core\Form\FormStateInterface;

/**
 * Facets zalando link list widget.
 *
 * @FacetsWidget(
 *   id = "facet_extension_list",
 *   label = @Translation("Facet extension : List of links"),
 *   description = @Translation("A simple widget that shows a list of links"),
 * )
 */
class ListWidget extends LinksWidget {
  
  /**
   *
   * {@inheritdoc}
   */
  public function defaultConfiguration() {
    return [
      'layoutgenentitystyles_view' => 'facet_extension/field-accordion'
    ] + parent::defaultConfiguration();
  }
  
  /**
   *
   * {@inheritdoc}
   * @see \Drupal\facets\Plugin\facets\widget\LinksWidget::build()
   */
  public function build(FacetInterface $facet) {
    $build = parent::build($facet);
    // dump($build);
    return $build;
  }
  
  /**
   *
   * {@inheritdoc}
   */
  public function buildConfigurationForm(array $form, FormStateInterface $form_state, FacetInterface $facet) {
    $form = parent::buildConfigurationForm($form, $form_state, $facet);
    return $form;
  }
  
}
<?php

namespace Drupal\facet_extension\Plugin\facets\widget;

use Drupal\facets\FacetInterface;
use Drupal\facets\Plugin\facets\widget\LinksWidget;
use Drupal\facets\Result\ResultInterface;

/**
 * Facets zalando link list widget.
 *
 * @FacetsWidget(
 *   id = "zalando_list",
 *   label = @Translation("Zalando list"),
 *   description = @Translation("A configurable widget that shows a list of links."),
 * )
 */
class ZalandoListWidget extends LinksWidget {

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
    $build['#attached']['library'][] = 'facet_extension/zalando_link_list';
    $build['#attributes']['class'][] = 'facets-zalando-links';
  }


  /**
   * {@inheritdoc}
   */
  protected function buildListItems(FacetInterface $facet, ResultInterface $result) {
    $items = parent::buildListItems($facet, $result);

    $items['#attributes']['data-drupal-facet-widget-element-class'] = 'facets-link';

    return $items;
  }

  /**
   * {@inheritdoc}
   */
  public function build(FacetInterface $facet) {
    return parent::build($facet);
  }

}

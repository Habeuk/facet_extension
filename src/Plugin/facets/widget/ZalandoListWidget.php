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
    $build['#attached']['library'][] = 'facets/drupal.facets.checkbox-widget';
    $build['#attributes']['class'][] = 'js-facets-zalando-links';
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
    $build = parent::build($facet);
    $build['#attributes']['class'][] = 'js-facets-radio-links';
    $build['#attached']['drupalSettings']['facets']['radioWidget'][$facet->id()]['facet-default-radio-label'] = $this->getConfiguration()['default_option_label'];
    $build['#attached']['library'][] = 'facets_widgets/state_radio_widget';
    $build['#attached']['library'][] = 'facets/drupal.facets.general';
    return $build;
  }

}

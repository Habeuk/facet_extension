<?php

namespace Drupal\facet_extension\Plugin\search_api\display;

use Drupal\search_api\Plugin\search_api\display\ViewsDisplayBase;

/**
 * Represents a Views page display.
 *
 * @SearchApiDisplay(
 *   id = "views_page_render",
 *   views_display_type = "page_render",
 *   deriver = "Drupal\facet_extension\Plugin\search_api\display\ViewsDisplayFacetExtensionDeriver"
 * )
 */
class ViewsPageRender extends ViewsDisplayBase {
  
}
/**
 * @file
 * Render a zalando property style like facet
 */

(function ($, Drupal) {

    var svg = '<svg viewBox="0 0 24 24" width="1em" height="1em" fill="currentColor" class="zds-icon RC794g X9n9TI DlJ4rT _5Yd-hZ _9l1hln DlJ4rT SpRgR2 nXkCf3 I_qHp3" focusable="false" aria-hidden="true"><path d="M2.859 7.475a.75.75 0 0 1 1.06 0l7.55 7.55a.751.751 0 0 0 1.06 0l7.551-7.55a.75.75 0 1 1 1.061 1.06l-7.55 7.55a2.252 2.252 0 0 1-3.182 0l-7.55-7.55a.748.748 0 0 1 0-1.06z"></path></svg>';
   $(".block-facet--zalando-list .title").after(svg);
   console.log($(".block-facet--zalando-list .title"));
  
  
  })(jQuery, Drupal);
  
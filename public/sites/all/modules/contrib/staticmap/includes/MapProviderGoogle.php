<?php
/**
 * @file
 * Google provider.
 */

/**
 * Class MapProviderGoogle
 */
class MapProviderGoogle extends MapProviderBase {
  public $apiUri = 'http://maps.google.com/maps/api/staticmap?';

  /**
   * Parameters builder.
   *
   * @inhetirdoc
   */
  public function buildParams(&$items, &$settings) {
    $parameters = array(
      'size' => $settings['preset']['mapsize'],
      'maptype' => $settings['preset']['maptype'],
      'markers' => implode('|', $items),
      'sensor' => 'false',
    );

    $premier_id = variable_get('staticmap_google_premier', '');
    if ($premier_id) {
      $parameters['client'] = $premier_id;
    }

    return $parameters;
  }

  /**
   * Preset form altering.
   *
   * @inhetirdoc
   */
  public function presetFormAlter(&$form, &$form_state, $preset_data) {
    $elements = array();

    $elements['maptype'] = array(
      '#type' => 'select',
      '#title' => t('Map Type'),
      '#default_value' => (!empty($preset_data['maptype'])) ? $preset_data['maptype'] : '',
      '#options' => $this->mapTypes(),
    );

    return $elements;
  }

  /**
   * Summary settings for field formatter.
   *
   * @inhetirdoc
   */
  public function fieldFormatterSettingsSummary($field, $instance, $view_mode, $preset_data) {
    $maptypes = $this->mapTypes();

    return t(
      'Map Style: @maptype',
      array(
        '@maptype' => !empty($maptypes[$preset_data['maptype']]) ? $maptypes[$preset_data['maptype']] : '',
      )
    );
  }

  /**
   * List of map types.
   *
   * @return array
   *   Array with map type names.
   */
  private function mapTypes() {
    return
      array(
        'roadmap' => t('Roadmap'),
        'satellite' => t('Satellite'),
        'hybrid' => t('Hybrid'),
        'terrain' => t('Terrain'),
      );
  }
}

<?php

/**
 * @file
 * Contains FeedsExXml.
 */

/**
 * Parses XML documents with QueryPath.
 */
class FeedsExQueryPathXml extends FeedsExXml {

  /**
   * The QueryPath object used for parsing.
   *
   * @var QueryPath
   */
  protected $queryPath;

  /**
   * Options passed to QueryPath.
   *
   * @var array
   */
  protected $queryPathOptions = array(
    'ignore_parser_warnings' => TRUE,
    'use_parser' => 'xml',
    'strip_low_ascii' => FALSE,
    'replace_entities' => FALSE,
    'omit_xml_declaration' => TRUE,
    'encoding' => 'UTF-8',
  );

  /**
   * {@inheritdoc}
   */
  protected function setUp(FeedsSource $source, FeedsFetcherResult $fetcher_result) {
    $document = $this->prepareDocument($source, $fetcher_result);
    $parser = new QueryPath($document, NULL, $this->queryPathOptions);
    $this->queryPath = $parser->find($this->config['context']['value']);

    $state = $source->state(FEEDS_PARSE);

    // Calculate the total once. If the total is zero, this will only execute
    // once anyway.
    if (!$state->total) {
      $state->total = $this->queryPath->size();
    }

    $state->start = $state->pointer ? $state->pointer : 0;
    $limit = $state->start + $source->importer->getLimit();
    $state->pointer = $limit > $state->total ? $state->total : $limit;
  }

  /**
   * {@inheritdoc}
   */
  protected function cleanUp(FeedsSource $source, FeedsParserResult $result) {
    // Try to free up some memory. There shouldn't be any other references to
    // $this->queryPath.
    unset($this->queryPath);
  }

  /**
   * {@inheritdoc}
   */
  protected function executeContext(FeedsSource $source, FeedsFetcherResult $fetcher_result) {
    $state = $source->state(FEEDS_PARSE);
    return $this->queryPath->slice($state->start, $source->importer->getLimit());
  }

  /**
   * {@inheritdoc}
   */
  protected function executeSourceExpression($machine_name, $expression, $row) {
    $result = new QueryPath($row, $expression, $this->queryPathOptions);

    if ($result->size() == 0) {
      return;
    }

    if (strlen($this->config['sources'][$machine_name]['attribute'])) {
      return $result->attr($this->config['sources'][$machine_name]['attribute']);
    }

    $return = array();
    if (!empty($this->config['sources'][$machine_name]['raw'])) {
      foreach ($result as $node) {
        $return[] = $this->getRawValue($node);
      }
    }
    else {
      foreach ($result as $node) {
        $return[] = $node->text();
      }
    }

    // Return a single value if there's only one value.
    return count($return) === 1 ? $return[0] : $return;
  }

  /**
   * Returns the raw value.
   *
   * @param QueryPath $node
   *   The QueryPath object to return a raw value for.
   *
   * @return string
   *   A raw string value.
   */
  protected function getRawValue(QueryPath $node) {
    return $node->xml();
  }

  /**
   * {@inheritdoc}
   */
  protected function validateExpression(&$expression) {
    $expression = trim($expression);
    if (!$expression) {
      return;
    }
    try {
      $parser = new QueryPath(NULL, $expression);
    }
    catch (CSSParseException $e) {
      return check_plain($e->getMessage());
    }
  }

  /**
   * {@inheritdoc}
   */
  protected function configFormTableHeader() {
    return array(
      'attribute' => t('Attribute'),
    ) + parent::configFormTableHeader();
  }

  /**
   * {@inheritdoc}
   */
  protected function configFormTableColumn(array &$form_state, $column_name, array $source) {
    switch ($column_name) {
      case 'attribute':
        return array(
          '#type' => 'textfield',
          '#title' => t('Attribute name'),
          '#title_display' => 'invisible',
          '#default_value' => !empty($source['attribute']) ? $source['attribute'] : '',
          '#size' => 10,
        );

      default:
        return parent::configFormTableColumn($form_state, $column_name, $source);
    }
  }

}

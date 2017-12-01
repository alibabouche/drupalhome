<?php

namespace Drupal\dev_d8\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\node\Entity\Node;
use \Symfony\Component\HttpFoundation\Request;
/**
 * Class FormationController.
 */
class FormationController extends ControllerBase {

  /**
   * Listarticle.
   *
   * @return string
   *   Return Hello string.
   */
  public function listArticle(Request $request) {
      $render[] =  \Drupal::formBuilder()->getForm('Drupal\dev_d8\Form\ArticleFilterForm');
      
      $tags = $request->get('tags');
      dsm($tags);
      
      
      
      $nodeTotal = \drupal::entityQuery('node')
              ->condition('type', 'article')
              ->condition('field_tags',1)
              ->count()->execute();
      //dsm($nodeTotal);
      
      
      $nids = \drupal::entityQuery('node')
              ->condition('type', 'article')
              ->condition('field_tags',1)
              ->pager(3)->execute();
      
      
      $node = Node::loadMultiple($nids);
      
      $view_builder = \Drupal::entityTypeManager()->getViewBuilder('node');
      
      
      
      $render[] = $view_builder->viewMultiple($node, 'connex');
      
      pager_default_initialize($nodeTotal, 3);
      
      $render[] = ['#type' => 'pager'];
      
      //dsm($render);
      
    return $render;
  }

}

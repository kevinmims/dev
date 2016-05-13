<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Mms;

return array(
    'router' => array(
        'routes' => array(
            
            

            /*'dashbaord' => array(
                'type' => 'Literal',
                'options' => array(
                    'route' => '/dashboard',
                    'defaults' => array(
                        'controller' => 'Mms\Controller\DashboardController',
                        'action' => 'index'
                    )
                )
            ),
*/
            // The following is a route to simplify getting started creating
            // new controllers and actions without needing to create a new
            // module. Simply drop new controllers in, and you can access them
            // using the path /application/:controller/:action
            'mms' => array(
                'type'    => 'Literal',
                'options' => array(
                    'route'    => '/mms',
                    'defaults' => array(
                        '__NAMESPACE__' => 'Mms\Controller',
                        'controller'    => 'Index',
                        'action'        => 'index',
                    ),
                ),
                'may_terminate' => true,
                'child_routes' => array(
                    'dashbaord' => array(
                        'type' => 'Segment',
                        'options' => array(
                            'route' => '/dashboard',
                            'defaults' => array(
                                'controller' => 'Mms\Controller\Dashboard',
                                'action' => 'index'
                            )
                        )
                    ),
                    'ratchet' => array(
                        'type' => 'Segment',
                        'options' => array(
                            'route' => '/ratchet',
                            'defaults' => array(
                                'controller' => 'Mms\Controller\Ratchet',
                                'action' => 'index'
                            )
                        )
                    ),
                    'workstation' => array(
                        'type' => 'Segment',
                        'options' => array(
                            'route' => '/workstation',
                            'defaults' => array(
                                'controller' => 'Mms\Controller\Workstation',
                                'action' => 'index'
                            )
                        )
                    ),
                    'reporting' => array(
                        'type' => 'Segment',
                        'options' => array(
                            'route' => '/reporting',
                            'defaults' => array(
                                'controller' => 'Mms\Controller\Reporting',
                                'action' => 'index'
                            )
                        )
                    ),
                    'imposition' => array(
                        'type' => 'Segment',
                        'options' => array(
                            'route' => '/imposition',
                            'defaults' => array(
                                'controller' => 'Mms\Controller\Imposition',
                                'action' => 'index'
                            )
                        )
                    ),
                ),
            ),
            
        ),
    ),
    'navigation' => array(
         'default' => array(
             array(
                 'label' => 'Imposition',
                 'route' => 'imposition',
             ),
             array(
                 'label' => 'Page #1',
                 'route' => 'page-1',
                 'pages' => array(
                     array(
                         'label' => 'Child #1',
                         'route' => 'page-1-child',
                     ),
                 ),
             ),
             array(
                 'label' => 'Page #2',
                 'route' => 'page-2',
             ),
         ),
    ),
    'service_manager' => array(
        'abstract_factories' => array(
            'Zend\Cache\Service\StorageCacheAbstractServiceFactory',
            'Zend\Log\LoggerAbstractServiceFactory',
        ),
        'factories' => array(
            'translator' => 'Zend\Mvc\Service\TranslatorServiceFactory',
            'navigation' => 'Zend\Navigation\Service\DefaultNavigationFactory',
        ),
    ),
    'translator' => array(
        'locale' => 'en_US',
        'translation_file_patterns' => array(
            array(
                'type'     => 'gettext',
                'base_dir' => __DIR__ . '/../language',
                'pattern'  => '%s.mo',
            ),
        ),
    ),
    'controllers' => array(
        'invokables' => array(
            'Mms\Controller\Index' => 'Mms\Controller\IndexController',
            'Mms\Controller\Dashboard' => 'Mms\Controller\DashboardController',
            'Mms\Controller\Ratchet' => 'Mms\Controller\RatchetController',
            'Mms\Controller\Workstation' => 'Mms\Controller\WorkstationController',
            'Mms\Controller\Reporting' => 'Mms\Controller\ReportingController',
            'Mms\Controller\Imposition' => 'Mms\Controller\ImpositionController'
        ),
    ),
    'view_manager' => array(
        
        'template_path_stack' => array(
            __DIR__ . '/../view',
        ),
    ),
    // Placeholder for console routes
    'console' => array(
        'router' => array(
            'routes' => array(
            ),
        ),
    ),
);

<?php 

namespace WCMystore\API;

use WP_REST_Controller;
use WP_REST_Server;

class CategoriesController extends WP_REST_Controller {

	protected $namespace = 'wcmystore/v1';
	protected $rest_base = 'categories';

    public function __construct() {
        $this->register_routes();
    }
    
	public function register_routes() {

		register_rest_route(
            $this->namespace,
            '/' . $this->rest_base,
            [
                [
                    'methods'             => WP_REST_Server::READABLE,
                    'callback'            => [ $this, 'get_items' ],
                ],
                
                [
                    'methods'             => WP_REST_Server::CREATABLE,
                    'callback'            => [ $this, 'create_item' ],
                ]
            ]
        );
	}

    public function create_item( $request ) {

        $response = [
            'data' => [],
            'message' => __( 'Unknown source.', '' ),
        ];

        $response = rest_ensure_response( $response );

        return $response;
    }


	public function get_items( $request ) {

        $response = [
            'data' => [],
            'message' => __( 'Unknown source.', '' ),
        ];

        $response = rest_ensure_response( $response );

        return $response;
	}
}
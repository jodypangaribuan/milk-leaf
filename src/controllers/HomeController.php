<?php
require_once __DIR__ . '/../models/ContentModel.php';

/**
 * HomeController Class
 * Handles homepage-related requests
 */
class HomeController {
    private $contentModel;
    
    public function __construct() {
        $this->contentModel = new ContentModel();
    }
    
    /**
     * Display homepage
     */
    public function index() {
        $data = $this->contentModel->getHomeContent();
        require_once __DIR__ . '/../views/home.php';
    }
} 
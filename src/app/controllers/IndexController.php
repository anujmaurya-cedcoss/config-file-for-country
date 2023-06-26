<?php
use Phalcon\Mvc\Controller;

class IndexController extends Controller
{
    public function indexAction()
    {
        // redirected to view
    }
    public function timeAction() {
        $country = $_POST['country'];
        date_default_timezone_set($this->config[$country]);
        $this->view->time = date("d-m-Y h:i:s");
        $this->view->country = $country;
    }
}

<?php

class MainController {
    public function Home() {
        $this->render("Home");
    }

    public function Cart() {
        $this->render("Cart");
    }
    
    public function Login() {
        $this->render("Login");
    }

    public function Product() {
        $this->render("Product");
    }

    public function Products() {
        $this->render("Products");
    }

    public function Register() {
        $this->render("Register");
    }

    public function NotFound() {
        $this->render("404");
    }

    private function Render($view, $data = []) {
        // Transmet les données aux vues
        extract($data);

        // Inclut la vue demandée
        $viewFile = __DIR__ . "/../views/" . $view . ".php";
        if (file_exists($viewFile)) {
            require_once $viewFile;
        } else {
            echo "View not found: $view";
        }
    }
}

?>

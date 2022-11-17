<?php
    // require all model classes
    // require '/Model/model.php';
    // $model = new Model();


    class Controler
    {
        // Functions that includes the vues
        private function homepage()
        {
            include './Vue/vue_homepage.php';
        }

        private function contact()
        {
            include 'Vue/vue_contact.php';
        }

        private function projets()
        {
            include 'Vue/vue_projets.php';
        }

        // Main controler
        public function displayVue()
        {
            if (isset($_GET['action'])) 
            {
               switch($_GET['action'])
               {
                case 'contact' : 
                    $this->contact();
                    break;
                case 'projets' :
                    $this->projets();
                    break;
               }
            }
            else
            {
                $this->homepage();
            }
        }
    }
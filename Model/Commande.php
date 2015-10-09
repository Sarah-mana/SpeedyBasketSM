<?php


class Commande {
        private $id_commande = null;
	private $c_dateretrait = null;
	private $id_statut = null;
	private $montantTva = null;
	private $totalTTC_panier = null;
	private $qteTotalArticles = null;
	

	public function __construct(){

				
	}
        public function getId_commande() {
            return $this->id_commande;
        }

        public function getC_dateretrait() {
            return $this->c_dateretrait;
        }

        public function getId_statut() {
            return $this->id_statut;
        }

        public function setId_commande($id_commande) {
            $this->id_commande = $id_commande;
        }

        public function setC_dateretrait($c_dateretrait) {
            $this->c_dateretrait = $c_dateretrait;
        }

        public function setId_statut($id_statut) {
            $this->id_statut = $id_statut;
        }
        
        
        
 
}

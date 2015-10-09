<?php


class LigneCmd {
        private $id_article = null;
	private $id_cmd = null;
	private $qte_cmde = null;
        private $prixLigneCmd = null;

	function __construct() {
            
        }
        
        function getId_article() {
            return $this->id_article;
        }
        
        function setId_article($id_article) {
            $this->id_article = $id_article;
        }

        function getQte_cmde() {
            return $this->qte_cmde;
        }
        
        function setQte_cmde($qte_cmde) {
            $this->qte_cmde = $qte_cmde;
        }
        
        function getId_cmd() {
            return $this->id_cmd;
        }

        function setId_cmd($id_cmd) {
            $this->id_cmd = $id_cmd;
        }

}

 <?php

include("/../entities/EmailEntity.php");

class Email_model extends CI_Model {
    
    public function __construct() {
        $this->load->database();
    }

    public function get_email($slug = FALSE) {
        if ($slug === FALSE) {
            $query = $this->db->get('email');
            return $query->result_array();
        }

        $query = $this->db->get_where('email', array('id' => $slug));
        
        
        $emailEntity = new EmailEntity();
        
        
        return $query->row_array();
    }
    
   
    public function insert_email() {
        $this->load->helper('url');
 
        $emailEntity = new EmailEntity();
        $emailEntity->setDestinatario($this->input->post('destinatario'));
        $emailEntity->setCorpo($this->input->post('corpo'));
        $emailEntity->setAssunto($this->input->post('assunto'));
        $emailEntity->setRemetente($this->input->post('remetente'));
        $emailEntity->setEnviado($this->input->post('enviado'));
        $emailEntity->setDatagravacao($this->input->post('datagravacao'));
        $emailEntity->setDataenvio($this->input->post('dataenvio'));
           
        $slug = url_title($this->input->post('title'), 'dash', TRUE);

        $data = array(
           'destinatario' => $this->input->post('destinatario'),
           'corpo' => $this->input->post('corpo'),
           'assunto' => $this->input->post('assunto'),
           'remetente' => $this->input->post('remetente'),
           'enviado' => $this->input->post('enviado'),
           'datagravacao' => $this->input->post('datagravacao'),
           'dataenvio' => $this->input->post('dataenvio')
           
        ); //que ele continue carregando 

        return $this->db->insert('email', $data);
    }
}
?>
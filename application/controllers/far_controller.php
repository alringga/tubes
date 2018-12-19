<?php
defined('BASEPATH') OR exit ('no direct script access allowed');

class far_controller extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->library(array('form_validation'));
		$this->load->helper(array('form', 'url'));
		$this->load->model('far_model');
	}

	public function index(){
		
    $korban=$this->far_model->getkorban();
   $this->load->view('home', array('korban'=> $korban)); 
	}

	public function tampilLoginSar(){
		$this->load->view('loginsar');	
	}
	public function loginsar() {   
  $username=htmlspecialchars($this->input->post('username',TRUE),ENT_QUOTES); 
  $password=htmlspecialchars($this->input->post('password',TRUE),ENT_QUOTES); 
 
        $cek_sar=$this->far_model->masuksar($username,$password); 
 
        if($cek_sar->num_rows() > 0){  
            $data=$cek_sar->row_array(); 
            $this->session->set_userdata('masuksar',TRUE); 
            $this->session->set_userdata('ses_username',$data['username']); 
            $this->session->set_userdata('ses_password',$data['password']); 
            redirect('far_controller/tampiladminsar');
        } else {
          echo "<script>  
   alert('password dan username salah !') 
   </script>"; 
   $this->load->view('loginsar');
        }
      
  }
  public function logindinas() {   
  $username=htmlspecialchars($this->input->post('username',TRUE),ENT_QUOTES); 
  $password=htmlspecialchars($this->input->post('password',TRUE),ENT_QUOTES); 
 
        $cek_sar=$this->far_model->masukdinas($username,$password); 
 
        if($cek_sar->num_rows() > 0){  
            $data=$cek_sar->row_array(); 
            $this->session->set_userdata('masukdinas',TRUE); 
            $this->session->set_userdata('ses_username',$data['username']); 
            $this->session->set_userdata('ses_password',$data['password']); 
            redirect('far_controller/tampiladmindinas');
        } else {
          echo " <script>  
   alert('password dan username salah !') 
   </script>"; 
   $this->load->view('logindinas');
        }
      
  }

  public function add_datakorban()
  {
    $korban = $this->far_model->getkorban();
    $this->load->view('form_addkorban',array('korban' => $korban));
  }

  public function tambahtim(){
    $this->load->view('form_addtim');
  }

  public function add_dataalat()
  {
    $this->load->view('form_addalat');
  }
  public function do_insert()
  {
    $nama_dpn = $_POST['nama_dpn'];
    $nama_blkng = $_POST['nama_blkng'];
    $umur = $_POST['umur'];
    $jenis_klmn = $_POST['jenis_klmn'];
    $alamat = $_POST['alamat'];
    $no_ktp = $_POST['no_ktp'];
    $triase = $_POST['triase'];
    $data_insert = array(
      'nama_dpn' => $nama_dpn,
      'nama_blkng' => $nama_blkng,
      'umur' => $umur,
      'jenis_klmn' => $jenis_klmn,
      'alamat' => $alamat,
      'no_ktp' => $no_ktp,
      'triase' => $triase,
    );
    $res = $this->far_model->InsertData('data_korban',$data_insert);
    if ($res>=1) {
      redirect('far_controller/tampilkorbansar');
    }else {
      echo "Gagal";
    }
  }
  public function do_insertsar()
  {
    $nama_dpn = $_POST['nama_dpn'];
    $nama_blkng = $_POST['nama_blkng'];
    $umur = $_POST['umur'];
    $jenis_klmn = $_POST['jenis_klmn'];
    $alamat = $_POST['alamat'];
    $id_timsar = $_POST['id_timsar'];
    $data_insert = array(
      'nama_dpn' => $nama_dpn,
      'nama_blkng' => $nama_blkng,
      'umur' => $umur,
      'jenis_klmn' => $jenis_klmn,
      'alamat' => $alamat,
      'id_timsar' => $id_timsar,
      
    );
    $res = $this->far_model->InsertDatasar('data_tim',$data_insert);
    if ($res>=1) {
      redirect('far_controller/tampilrelawandinas');
    }else {
      echo "<script>  
   alert('password dan username salah !') 
   </script>"; 
   $this->load->view('form_addtim');
    }
  }
  public function do_insertalatsar()
  {
    $nama_orang = $_POST['nama_orang'];
    $nama_alat = $_POST['nama_alat'];
    $status = $_POST['status'];
    $data_insert = array(
      'nama_orang' => $nama_orang,
      'nama_alat' => $nama_alat,
      'status' => $status,
      
    );
    $res = $this->far_model->InsertDataalatsar('data_alat',$data_insert);
    if ($res>=1) {
      redirect('far_controller/tampilalatsar');
    }else {
      echo "<script>  
   alert('password dan username salah !') 
   </script>"; 
   $this->load->view('form_addtim');
    }
  }
  public function do_insertalatdinas()
  {
    $nama_orang = $_POST['nama_orang'];
    $nama_alat = $_POST['nama_alat'];
    $status = $_POST['status'];
    $data_insert = array(
      'nama_orang' => $nama_orang,
      'nama_alat' => $nama_alat,
      'status' => $status,
      
    );
    $res = $this->far_model->InsertDataalatsar('data_alat',$data_insert);
    if ($res>=1) {
      redirect('far_controller/tampilalatdinas');
    }else {
      echo "<script>  
   alert('password dan username salah !') 
   </script>"; 
   $this->load->view('form_addtim');
    }
  }

  public function edit_datakorban($id_korban){
     $korban = $this->far_model->getkorban(" where id_korban = '$id_korban'");
      $data = array(
        "nama_dpn" => $korban[0]['nama_dpn'],
        "nama_blkng" => $korban[0]['nama_blkng'],
        "umur" => $korban[0]['umur'],
        "jenis_klmn" => $korban[0]['jenis_klmn'],
        "alamat" => $korban[0]['alamat'],
        "no_ktp" => $korban[0]['no_ktp'],
        "triase" => $korban[0]['triase'],
      );
      $this->load->view('form.editkorban', $data);
    }

      public function do_updatekorban(){
      $nama_dpn = $_POST['nama_dpn'];
    $nama_blkng = $_POST['nama_blkng'];
    $umur = $_POST['umur'];
    $jenis_klmn = $_POST['jenis_klmn'];
    $alamat = $_POST['alamat'];
    $no_ktp = $_POST['no_ktp'];
    $triase = $_POST['triase'];
    $data_insert = array(
      'nama_dpn' => $nama_dpn,
      'nama_blkng' => $nama_blkng,
      'umur' => $umur,
      'jenis_klmn' => $jenis_klmn,
      'alamat' => $alamat,
      'no_ktp' => $no_ktp,
      'triase' => $triase,
      );
      $where = array('umur' => $umur);
      $res = $this->far_model->UpdateData('korban',$data_update,$where);
      if ($res>=1) {
        redirect('far_controller/tampilkorbansar');
      }
    }
    public function do_deletekorban($id_korban){
      $where = array('id_korban' => $id_korban);
      $res = $this->far_model->DeleteData('data_korban', $where);
      if ($res>=1) {
        redirect('far_controller/tampilkorbansar');
      }
    }
    public function do_deleterelawan($id_sar){
      $where = array('id_sar' => $id_sar);
      $res = $this->far_model->DeleteData('data_tim', $where);
      if ($res>=1) {
        redirect('far_controller/tampilrelawandinas');
      }
    }
     public function do_deletealatsar($id_alat){
      $where = array('id_alat' => $id_alat);
      $res = $this->far_model->DeleteDataalatsar('data_alat', $where);
      if ($res>=1) {
        redirect('far_controller/tampilalatsar');
      }
    }
     public function do_deletealatdinas($id_alat){
      $where = array('id_alat' => $id_alat);
      $res = $this->far_model->DeleteDataalatdinas('data_alat', $where);
      if ($res>=1) {
        redirect('far_controller/tampilalatdinas');
      }
    }



	public function tampilRegisterSar(){
		$this->load->view('registrasisar');
	}
	public function tampilLogindinas(){
		$this->load->view('logindinas');	
	}
	public function tampilRegisterdinas(){
		$this->load->view('registrasidinas');	
	}
	public function tampiladminsar(){
		$this->load->view('adminsar');	
	}
	public function tampiladmindinas(){
		$this->load->view('admindinas');	
	}
	public function tampilalatdinas(){
    $alat=$this->far_model->getalat();
		$this->load->view('alatdinas', array('alat'=>$alat));	
	}
	public function tampilrelawandinas(){
    $sar=$this->far_model->getrelawan();
		$this->load->view('tabelrelawandinas', array('sar'=>$sar));	
	}
	public function tampilkorbandinas(){
    $korban=$this->far_model->getkorban();
		$this->load->view('tabelkorbandinas', array('korban'=> $korban));	
	}
	public function tampilalatsar(){
    $alat=$this->far_model->getalat();
		$this->load->view('alat', array('alat'=> $alat));	
	}
	public function tampilkorbansar(){
    $korban=$this->far_model->getkorban();
		$this->load->view('tablekorban', array('korban'=> $korban));	
	}
  public function tampilformtambah(){
    $this->load->view('form_add');  
  }
  public function tampilformedit(){
    $this->load->view('form_edit');  
  }

	public function registersar() {  
  $this->form_validation->set_rules('nama', 'NAMA','required'); 
        $this->form_validation->set_rules('username', 'username','required'); 
        $this->form_validation->set_rules('email','EMAIL','required|valid_email'); 
        $this->form_validation->set_rules('password','PASSWORD','required'); 

  if($this->form_validation->run() == FALSE) { 
   echo " <script>  
   alert('Terdapat kesalahan') 
   </script>"; 
   $this->load->view('registrasisar'); 
  } else { 
   $data['nama'] = $this->input->post('nama'); 
            $data['username'] = $this->input->post('username'); 
            $data['email'] = $this->input->post('email');  
            $data['password'] = md5($this->input->post('password')); 
  
 
   $this->far_model->daftarsar($data); 
 
   echo "<script>  
   alert('Selamat akun Anda berhasil didaftarkan, silahkan tunggu proses aktifasi agar akun Anda dapat digunakan') 
   </script>"; 
   $this->load->view('adminsar'); 
  } 
 }

 //registrasi dinas//
 public function registerdinas() {  
  $this->form_validation->set_rules('nama', 'NAMA','required'); 
        $this->form_validation->set_rules('username', 'username','required'); 
        $this->form_validation->set_rules('email','EMAIL','required|valid_email'); 
        $this->form_validation->set_rules('password','PASSWORD','required'); 

  if($this->form_validation->run() == FALSE) { 
   echo " <script>  
   alert('Terdapat kesalahan') 
   </script>"; 
   $this->load->view('registrasidinas'); 
  } else { 
   $data['nama'] = $this->input->post('nama'); 
            $data['username'] = $this->input->post('username'); 
            $data['email'] = $this->input->post('email');  
            $data['password'] = md5($this->input->post('password')); 
  
 
   $this->far_model->daftardinas($data); 
 
   echo "<script>  
   alert('Selamat akun Anda berhasil didaftarkan, silahkan tunggu proses aktifasi agar akun Anda dapat digunakan') 
   </script>"; 
   $this->load->view('admindinas'); 
  } 
 }

 
}
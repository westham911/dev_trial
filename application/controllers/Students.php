
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Students extends CI_Controller {

  /**
   * Index for trail web site
   */
  public function index() {
      $this->load->view('header');

      //Call showStudents()
      $this->showStudents();

      $this->load->view('footer');

  }

    /**
     * Display all of students
     */
  public function showStudents()
  {
      if(!empty($_POST))
      {
          $searchTxt = $_POST['search'];
          $sql = "select * from students where first_name like '%$searchTxt%' or last_name like '%$searchTxt%'";
      }
      else
      {
          $sql = "select * from students";
      }

      //call StModel model
      $this->load->model('StModel','',TRUE);
      $res = $this->StModel->stActions($sql);

      //pass result to view page
      $data['student_list'] = $res;
      $this->load->view('students',$data);
   }


    /**
     * Add new student
     */
    public function add()
    {
        $this->load->view('header');
        $this->load->view('add');
        $this->load->view('footer');
    }

    public function addStudent()
    {
        $firstName=$_POST['firstName'];
        $lastName=$_POST['lastName'];
        $password=$_POST['password'];
        $email=$_POST['email'];
        $phoneNum=$_POST['phone'];


        $sql = "insert into students (password, first_name, last_name, email, phone_num) 
                     values ('$password', '$firstName', '$lastName', '$email', '$phoneNum')";

        //call StModel model
        $this->load->model('StModel');
        $res = $this->StModel->stActions($sql);

        //return to student list page
        redirect('Students');

    }

    /**
     * Update Student
     */
    public function update()
    {
        $this->load->view('header');

        if(!empty($_GET['id']))
        {
            $id=$_GET['id'];
            $sql="select * from students where id=$id";


            //call StModel model
            $this->load->model('StModel','',TRUE);
            $res = $this->StModel->stActions($sql);


            //pass result to view page
            $data['row'] = $res->row_array();  // one row
            $this->load->view('update',$data);

        }

        $this->load->view('footer');
    }

    public function updateStudent(){

        $stID = $_POST['st_id'];
        $firstName=$_POST['firstName'];
        $lastName=$_POST['lastName'];
        $email=$_POST['email'];
        $phoneNum=$_POST['phone'];


        $sql = "update students set first_name='$firstName', last_name='$lastName', email='$email', phone_num='$phoneNum' where id=$stID";

        echo $sql;

        $this->load->model('StModel','',TRUE);
        $res = $this->StModel->stActions($sql);

        //return to student list page
        redirect('Students');

    }

    /**
     * Delete Student
     */
    public function deleteStudent()
    {
        $stID = $_GET['stID'];

        $sql = "delete from students where id = $stID";

        $this->load->model('StModel','',TRUE);
        $res = $this->StModel->stActions($sql);

        //return to student list page
        redirect('Students');
    }
}

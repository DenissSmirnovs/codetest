<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<body>
<style>
   body {
    background-image: url(http://hd.at.ua/wall2012-01/HD.at.ua-1920-1080-022.jpg); /* ???? ? ???????? ??????????? */
    /* ne */
   }
  </style>
<div class="container">
  <h2>Pievieno savu interesantu jaunumu ! :)) </h2>
  <form role="form">
    <div class="form-group">
      <label for="nos">Title:</label>
      <input type="nos" class="form-control" id="email" name= "article" placeholder="Enter title">
    </div>
<div class="form-group">
  <label for="comment">Comment:</label>
  <textarea class="form-control" rows="5" id="comment"></textarea>
</div>
    <div class="form-group">
      <label for="date">Date:</label>
      <input type="date" class="form-control" id="pwd" name= "data" placeholder="Enter date, datuma formats: 2015-11-11 ">
    </div>
    
    </div>
    <button type="Submit " class="btn btn-default">Pievienot</button>
  </form>
</div>

</body> 
</html>


<!--my first git commit-->
<p> Hello GitHub </p> 
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class First extends CI_Controller {


	public function index()
	{
		$this->load->view('hello_view');
	}
    

    
    function articles() {
        
        $this->load->model('articles_model');
        $data['articles'] = $this->articles_model->get_articles();
        $this->load->view('articles_view', $data);
    }
    function add_article() {
        $data['title'] = $_POST['title'];
        $data['text'] = $_POST['article'];
        $data['data'] = $_POST['data'];
        
        $this->load->model('articles_model');
        
        $this->articles_model->add_article($data);
    }  
}

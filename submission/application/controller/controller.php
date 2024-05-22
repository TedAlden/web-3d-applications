<?php
// MVC controller class
class Controller {

	// Public variables for constructor class
	public $load;
	public $model;
	
	// Constructor
	function __construct($pageMethod = null)
	{
		$this->load = new Load();
		$this->model = new Model();
		$this->$pageMethod();
	}
	
	// Default index.php method, with no view specified
    function home()
	{
		// Redirect to the mainPage view
		header('Location: index.php/mainPage');
	}

	// MainPage view
	function mainPage()
	{
		// Get data from database via model
		$data = $this->model->dbGetData();
		// Supply this data to the main coca cola view
		$this->load->view('viewCocaCola', $data);	
	}

	// These three methods folling are only examples of what you could do to play aorund with storing and
	// accessing your data — you might show a deeper understanding by developing other CRUD (Create, Read, Update, and Delete) methods

	// Create table
	function apiCreateTable()
	{
		$data = $this->model->dbCreateTable();
		$this->load->view('viewMessage', $data);
	}

	// Insert data into table
	function apiInsertData()
	{
		$data = $this->model->dbInsertData();
	   	$this->load->view('viewMessage', $data);
	}

	// View database data formatted into an HTML table
	function apiGetDataTable()
	{
		$data = $this->model->dbGetData();
		$this->load->view('viewDatabaseTable', $data);
	}

	// View database data as raw JSON
	function apiGetDataJson()
	{
		$data = $this->model->dbGetData();
		echo json_encode($data);
	}
}
?>
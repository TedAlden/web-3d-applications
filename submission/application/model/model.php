<?php
class Model {
	// Property declaration, in this case we are declaring a variable or handeler that points to the database connection, this will become a PDO object
	public $dbhandle;
	
	// Method to create database connection using PHP Data Objects (PDO) as the interface to SQLite
	public function __construct()
	{
		// Set up the database source name (DSN)
		$dsn = 'sqlite:./db/test1.db';
		
		// Then create a connection to a database with the PDO() function
		try {	
			// Change connection string for different databases, currently using SQLite
			$this->dbhandle = new PDO($dsn, 'user', 'password', array(
    													PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    													PDO::ATTR_EMULATE_PREPARES => false,
														));
			// $this->dbhandle->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			// echo 'Database connection created</br></br>';
		}
		catch (PDOEXception $e) {
			echo "I'm sorry, Martin. I'm afraid I can't connect to the database!";
			// Generate an error message if the connection fails
        	print new Exception($e->getMessage());
    	}
	}
	
	public function dbCreateTable()
	{
		try {
			$this->dbhandle->exec("CREATE TABLE Model_3D (Id INTEGER PRIMARY KEY, brand TEXT, brandYear TEXT, brandLocation TEXT, x3dPath TEXT, x3dModelTitle TEXT, x3dCreationMethod TEXT, modelTitle TEXT, modelSubtitle TEXT, modelDescription TEXT)");
			return "Model_3D table is successfully created inside test1.db file";
		}
		catch (PD0EXception $e){
			print new Exception($e->getMessage());
		}
		$this->dbhandle = NULL;
	}
	
	// This is a simple fix to represent, what would in reality be, a table in the database containing the brand names. 
	// The database schema would then contain a foreign key for each drink entry linking back to the brand name
	// This stuture allows us to read the list of brand names to populate a menu in a view
	public function dbGetBrand()
	{
		// Return the car Brand Names
		return array("-", "Coke", "Coke Light","Coke Zero","Sprite", "Dr Pepper", "Fanta");
	}

	public function dbInsertData()
	{
		try{
			$this->dbhandle->exec(
			"INSERT INTO Model_3D (Id, brand, brandYear, brandLocation, x3dPath, x3dModelTitle, x3dCreationMethod, modelTitle, modelSubtitle, modelDescription) 
				VALUES (1, 'Coke', '1886', 'New York Harbour', '../application/assets/x3d/coke.x3d', 'X3D Coke Model', 'This X3D model of the Coke can has been created in 3ds Max, exported to VRML97 and converted, using the instantreality transcoders, to X3D for display online.', 'History of Coca Cola','Atlanta Beginnings','It was 1886, and in New York Harbour, workers were constructing the Statue of Liberty. Eight hundred miles away, another great American symbol was about to be unveiled. Like many people who change history, John Pemberton, an Atlanta pharmacist, was inspired by simple curiosity. One afternoon, he stirred up a fragrant, caramel-coloured liquid and, when it was done, he carried it a few doors down to Jacobs Pharmacy. Here, the mixture was combined with carbonated water and sampled by customers who all agreed - this new drink was something special. So Jacobs Pharmacy put it on sale for five cents (about 3p) a glass.'); " .
			"INSERT INTO Model_3D (Id, brand, brandYear, brandLocation, x3dPath, x3dModelTitle, x3dCreationMethod, modelTitle, modelSubtitle, modelDescription) 
				VALUES (2, 'Sprite', '1959', 'West Germany', '../application/assets/x3d/sprite.x3d', 'X3D Sprite Model', 'This X3D model of the Sprite can has been created in 3ds Max, exported to VRML97 and converted, using the instantreality transcoders, to X3D for display online.', 'Sprite — Fanta Klare Zitrone','First introduced in 1961','Crisp, refreshing, clean-tasting Sprite is now the worlds leading lemon and lime flavoured soft drink and is sold in more than 190 different countries. Sprite Zero, part of Coca Colas no sugar Zero range, offers the delicious lemon lime taste of Sprite without the sugar or calories.'); " .
			"INSERT INTO Model_3D (Id, brand, brandYear, brandLocation, x3dPath, x3dModelTitle, x3dCreationMethod, modelTitle, modelSubtitle, modelDescription) 
				VALUES (3, 'Dr Pepper', '1885', 'Texas', '../application/assets/x3d/pepper.x3d', 'X3D Dr Pepper Model', 'This X3D model of the Dr Pepper can has been created in 3ds Max, exported to VRML97 and converted, using the instantreality transcoders, to X3D for display online.', 'Dr Pepper — Liquid Sunshine','23 fruit flavours','Dr Peppers unique, sparkling blend of 23 fruit flavours has been around for well over a century and its still the same, with that distinctive flavour you just cant quite put your tongue on. It was created by Texas pharmacist Charles Alderton in 1885. He gave a sample of the first ever batch to Wade Morrison, a local shop owner, and Mr Morrison instantly agreed to stock the drink. The distinctive, bold taste of Dr Pepper has been popular ever since.'); ");
			return "X3D model data inserted successfully inside test1.db";
		}
		catch(PD0EXception $e) {
			print new Exception($e->getMessage());
		}
		$this->dbhandle = NULL;
	}

	public function dbGetData(){
		try{
			// Prepare a statement to get all records from the Model_3D table
			$sql = 'SELECT * FROM Model_3D';
			// Use PDO query() to query the database with the prepared SQL statement
			$stmt = $this->dbhandle->query($sql);
			// Set up an array to return the results to the view
			$result = null;
			// Set up a variable to index each row of the array
			$i=-0;
			// Use PDO fetch() to retrieve the results from the database using a while loop
			// Use a while loop to loop through the rows	
			while ($data = $stmt->fetch()) {
				// Don't worry about this, it's just a simple test to check we can output a value from the database in a while loop
				// echo '</br>' . $data['x3dModelTitle'];
				// Write the database conetnts to the results array for sending back to the view
				$result[$i]['brand'] = $data['brand']; // Not used in the view, instead using the fake dbGetBrand() function above
				$result[$i]['year'] = $data['brandYear'];
				$result[$i]['location'] = $data['brandLocation'];
				$result[$i]['x3dPath'] = $data['x3dPath'];
				$result[$i]['x3dModelTitle'] = $data['x3dModelTitle'];
				$result[$i]['x3dCreationMethod'] = $data['x3dCreationMethod'];
				$result[$i]['modelTitle'] = $data['modelTitle'];
				$result[$i]['modelSubtitle'] = $data['modelSubtitle'];
				$result[$i]['modelDescription'] = $data['modelDescription'];
				//increment the row index
				$i++;
			}
		}
		catch (PD0EXception $e) {
			print new Exception($e->getMessage());
		}
		// Close the database connection
		$this->dbhandle = NULL;
		// Send the response back to the view
		return $result;
	}
	
	//Method to simulate the model data
	public function model3D_info()
	{
		// Simulate the model's data
		return array(
			'model_1' => 'Coke Light',
			'image3D_1' => 'Coke Light',

			'model_2' => 'Coke Zero',
			'image3D_2' => 'Coke Zero',

			'model_3' => 'Coke',
			'image3D_3' => 'Coke',

			'model_4' => 'Dr Pepper',
			'image3D_4' => 'Dr Pepper',

			'model_5' => 'Fanta',
			'image3D_5' => 'Fanta',

			'model_6' => 'Sprite',
			'image3D_6' => 'Sprite'
		);
	}
}
?>
<?php
/**
 * Created by PhpStorm.
 * User: shinkendo
 * Date: 04.06.14
 * Time: 10:16
 */

class Data {
	/**
	 * holds all the parsed data
	 *
	 * @var array holds the paresd data
	 */
	private $parsedData = array();
    private $dateList = array();
	/**
	 * @var array a list of the layer names
	 */
	private $layerList = array(
        'rain' => 'Weather',
	    'temp' => 'Temperature',
        'wind' => 'Wind',
		'pollen' => 'Pollen Exposure'

    );
	/**
	 * A list of all the available regions, with their coordinates, names and Ids
	 * @var array a list of the regions
	 */
	private $regionList = array(
        1 => array(
	        'id' => 1,
            'name' => 'Genf ',
            'x' => 100,
            'y' => 520,
        ),
        2 => array(
	        'id' => 2,
            'name' => 'Wallis',
            'x' => 400,
            'y' => 520,
        ),
        3 => array(
	        'id' => 3,
            'name' => 'Tessin',
            'x' => 650,
            'y' => 480,
        ),
        4 => array(
	        'id' => 4,
            'name' => 'Graubünden',
            'x' => 800,
            'y' => 350,
        ),
        5 => array(
	        'id' => 5,
            'name' => 'Zürich',
            'x' => 575,
            'y' => 200,
        ),
        6 => array(
	        'id'=> 6,
            'name' => 'Bern',
            'x' => 380,
            'y' => 320,
        ),
        7 => array(
	        'id' => 7,
	        'name' => 'Basel',
            'x' => 280,
            'y' => 160
        ),/**
	    8 => array(
		    'id' => 8,
		    'name' => 'St Gallen',
		    'x' => 800,
			'y' => 100
	    )*/
    );
	/**
	 * Weather situation list
	 * @var array a list of the weather situations
	 */
	private $weatherList = array(
		0 => 'No data available',
		1 => 'Clear Sky',
		2 => 'Overcast',
		3 => 'Precipitation',
		4 => 'Thunderstorm',
		5 => 'Snowfall'
	);
	/**
	 * Pollen exposure list
	 * @var array a list of all the pollen exposure situations
	 */
	private $pollenList = array(
		0 => 'No Exposure',
		1 => 'Minimal',
		2 => 'Medium',
		3 => 'Maximal'
	);
	/**
	 * Wind directions are given always from where the wind is coming from.
	 * the Arrow needs to be flipped accordingly
	 * @var array of wind directions
	 */
	private $windDirectionList = array(
		'NN' => array(
			'id' => '0',
			'name' => 'No Wind',
		),
		'N' => array(
			'id' => '1',
			'name' => 'North',
		),
		'NE' => array(
			'id' => '2',
			'name' => 'Northeast',
		),
		'E' => array(
			'id' => '3',
			'name' => 'East',
		),
		'SE' => array(
			'id' => '4',
			'name' => 'Southeast',
		),
		'S' => array(
			'id' => '5',
			'name' => 'South',
		),
		'SW' => array(
			'id' => '6',
			'name' => 'Southwest'
		),
		'W' => array(
			'id' => '7',
			'name' => 'West',
		),
		'NW' => array(
			'id' => '8',
			'name' => 'Northwest',
		),
	);

	/**
	 * get a list of all the available regiions
	 * @return array the region list
	 */
	public function getRegionList(){
        return $this->regionList;
    }

	/**
	 * get a list of all the available dates
	 * @return array the date list
	 */
	public function getDateList(){
        return $this->dateList;
    }

	/**
	 * get a list of all the available layers
	 * @return array the layer list
	 */
	public function  getLayerList(){
		return $this->layerList;
	}

	/**
	 * get a list of all the available weather situations
	 * @return array the weather list
	 */
	public function getWeatherList(){
		return $this->weatherList;
	}

	/**
	 * get a list of all the available pollen exposure situations
	 * @return array the polle situation list
	 */
	public function getPollenList(){
		return $this->pollenList;
	}

	/**
	 * get a list of all the available wind directions
	 *
	 * the wind directions are properly refactored to international use
	 * @return array the wind direction list
	 */
	public function getWindDirectionList(){
		return $this->windDirectionList;
	}

	/**
	 * forces to create a new comma separated file with all the necessary data
	 */
	public function reloadData(){

		//$handle = fopen('http://localhost/SPWR/ch-gibm-m-307/wetter.php' , 'r');
		$handle = fopen('http://www.steampilot.ch/demo/spwr/ch-gibm-m-307/wetter.php' , 'r');
		file_put_contents('wetter.csv', $handle);
		fclose($handle);
	}

	/**
	 * parses the comma separated file
	 */
	public function parseData(){
        $handle = fopen('wetter.csv' , 'r');

	    $lineNr = 0;
	    $dateNr = 0;
        while(($line = fgetcsv($handle,'50',';' ))){
            $parsedLine = array(
				'date' => $line[0],
	            'region' => $line[1],
                'weather' => $line[2],
                'temp' => $line[3],
                'wind' => $line[4],
                'pollen' => $line[5]
            );
	        $temp = explode('/', $parsedLine['temp']);
			$wind = explode('/',$parsedLine['wind']);
	        $windDir = $wind[0];
	        if($windDir == 'O') {
		        $windDir = 'E';
	        } elseif($windDir == 'SO'){
		        $windDir = 'SE';
	        } elseif($windDir == 'NO') {
		        $windDir = 'NE';
	        }
	        $this->parsedData[$parsedLine['date']][$parsedLine['region']] = array(
		        'weather' => $parsedLine['weather'],
		        'minTemp' => $temp[0],
		        'maxTemp' => $temp[1],
		        'windDirection' => $windDir,
		        'windSpeed' => $wind[1],
		        'pollen'=> $parsedLine['pollen']
	        );
	        //parse the date List
	        if($lineNr == 0 ){
		        $this->dateList[$dateNr] = $parsedLine['date'];
		        $dateNr = $dateNr +1;
	        } elseif (0 == $lineNr % 7){
		        $this->dateList[$dateNr] = $parsedLine['date'];
		        $dateNr = $dateNr +1;

	        }
	        $lineNr = $lineNr +1;
        }

    }

	/**
	 * gets the parsed data by delegate to parse data function
	 * if the comma separated data file will be created in case it dos not exist
	 * if the user wants to reload the data a new csv file wil be created
	 * @param bool $reload
	 * @return array
	 */
	public function getData($reload = false){
		if ($reload === true) {
			$this->reloadData();
			$this->parseData();
		} else {
			if(file_exists('wetter.csv')){
				$this->parseData();
			} else {
				$this->reloadData();
				$this->parseData();
			}
		}
		return $this->parsedData;
	}
}
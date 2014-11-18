<?php
/**
 * Created by PhpStorm.
 * User: ShinKenDo
 * Date: 15.06.14
 * Time: 17:34
 */
require_once 'Data.php';
class Map {
	/**
	 * @var the selected date
	 */
	private $date;
	/**
	 * @var the selected layer, eg: rain, temp, wind, pollen
	 */
	private $layer;
	/**
	 * @var array the parsed data from Data.php
	 */
	private $data;
	/**
	 * @var array a list of the available parsed dates
	 */
	private $dateList;
	/**
	 * @var array a list of the weather situations
	 */
	private $weatherList;
	/**
	 * @var array a list of the regions with coordinates and names
	 */
	private $regionList;
	/**
	 * @var array a list of the pollen magnitudes
	 */
	private $pollenList;
	/**
	 * @var array a list of all the available wind directions
	 */
	private $windDirectionList;
	/**
	 * @var string the path of the base map
	 */
	private $map = 'image/map.png';
	/**
	 * @var string the path of the true type font
	 */
	private $font = 'font/ubuntu.ttf';

	/**
	 * creates a weather forecast map
	 *
	 * @return string the path of the created weather forecast map
	 */
	private function createWeatherMap(){
		$map = imagecreatefrompng($this->map);
		$black = imagecolorallocate($map,0,0,0);
		//creating the legend
		for ($i = 0; $i < 6 ; $i++){
			$icon = imagecreatefrompng("image/weather/${i}.png");
			imagecopyresampled($map,$icon,0,50*($i),0,0,45,45,imagesx($icon), imagesy($icon));
			imagettftext($map,15,0,60,25 + 50*$i,$black,$this->font,$this->weatherList[$i]);
			imagedestroy($icon);

		}
		//placing the icons and values
		foreach($this->regionList as $region ) {
			$weatherId = $this->data[$this->date][$region['id']]['weather'];
			if ($weatherId == null) {$weatherId = 0;}
			$icon = imagecreatefrompng("image/weather/${weatherId}.png");
			$iconPos_x = $region['x'] - imagesx($icon) / 2 ;
			$iconPos_y = $region['y'] - imagesy($icon) / 2 ;
			imagecopy($map,$icon,$iconPos_x,$iconPos_y-20,0,0,imagesx($icon),imagesy($icon));
			imagedestroy($icon);
		}
		//creating the footer
		imagettftext($map,10, 0, 10, imagesy($map)- 60, $black,$this->font,sprintf('Swiss Weather Map for: %s',$this->date));
		imagettftext($map,10, 0, 10, imagesy($map) - 30, $black, $this->font, sprintf("Created:%s ©steampilot.ch",$this->dateList[0]));
		$outputPath = 'output/'.$this->date.'_'.$this->layer.'.png';
		imagepng($map,$outputPath);
		imagedestroy($map);
		//building and returning the path of the created map
		return sprintf('<image src="%s" class="img-responsive">',$outputPath);
	}

	/**
	 * creates a pollen exposure map
	 *
	 * @return string the path of the created pollen exposure map
	 */
	private function createPollenMap(){
		//creating the legend
		$map = imagecreatefrompng($this->map);
		$black = imagecolorallocate($map,0,0,0);
		for ($i = 0; $i < 4 ; $i++){
			$icon = imagecreatefrompng("image/pollen/${i}.png");
			imagecopyresampled($map,$icon,0,55*($i),0,0,50,50,imagesx($icon), imagesy($icon));
			imagettftext($map,15,0,60,25 + 55*$i,$black,$this->font,$this->pollenList[$i]);
			imagedestroy($icon);

		}
		//placing the icons and values
		foreach($this->regionList as $region ) {
			$pollenId = $this->data[$this->date][$region['id']]['pollen'];
			$bg = imagecreatefrompng("image/pollen/bg.png");
			$icon = imagecreatefrompng("image/pollen/${pollenId}.png");
			$iconPos_x = $region['x'] - imagesx($icon) / 2 ;
			$iconPos_y = $region['y'] - imagesy($icon) / 2 ;
			imagecopy($map,$bg,$iconPos_x,$iconPos_y-10,0,0,imagesx($icon),imagesy($icon));
			imagecopy($map,$icon,$iconPos_x,$iconPos_y-10,0,0,imagesx($icon),imagesy($icon));
			imagedestroy($icon);
			imagedestroy($bg);
		}
		//creating the footer
		imagettftext($map,10, 0, 10, imagesy($map)- 60, $black,$this->font,sprintf('Swiss Pollen Exposure for: %s',$this->date));
		imagettftext($map,10, 0, 10, imagesy($map) - 30, $black, $this->font, sprintf("Created:%s ©steampilot.ch",$this->dateList[0]));
		$outputPath = 'output/'.$this->date.'_'.$this->layer.'.png';
		imagepng($map,$outputPath);
		imagedestroy($map);
		//building and returning the path of the created map
		return sprintf('<image src="%s" class="img-responsive">',$outputPath);
	}

	/**
	 * createsa wind map
	 *
	 * @return string the path of the created wind map
	 */
	private function createWindMap(){
		//creating the legend
		$map = imagecreatefrompng($this->map);
		$black = imagecolorallocate($map,0,0,0);
		$compass = imagecreatefrompng('image/wind/compass.png');
		imagecopy($map,$compass,0,0,0,0,imagesx($compass),imagesy($compass));
		imagedestroy($compass);
		//placing the icons and values
		foreach($this->regionList as $region ) {
			$windId = $this->windDirectionList[$this->data[$this->date][$region['id']]['windDirection']]['id'];
			$windSpeed = $this->data[$this->date][$region['id']]['windSpeed'];
			$bg = imagecreatefrompng('image/wind/bg.png');
			$iconbg = imagecreatefrompng('image/wind/iconbg.png');
			$icon = imagecreatefrompng("image/wind/${windId}.png");
			$iconPos_x = $region['x'] - 80 / 2 ;
			$iconPos_y = $region['y'] - 80 / 2 ;
			imagecopyresampled($map,$iconbg,$iconPos_x,$iconPos_y,0,0,80,80,imagesx($icon), imagesy($icon));
			imagecopyresampled($map,$icon,$iconPos_x,$iconPos_y,0,0,80,80,imagesx($icon), imagesy($icon));
			imagecopy($map,$bg,$iconPos_x +80, $iconPos_y+40,0,0,imagesx($bg),imagesy($bg));
			imagettftext($map,30, 0, $iconPos_x + 80, $iconPos_y+80, $black,$this->font,sprintf('%s km/h',$windSpeed));

			imagedestroy($icon);
			imagedestroy($iconbg);
			imagedestroy($bg);

		}
		//creating the footer
		imagettftext($map,10, 0, 10, imagesy($map)- 60, $black,$this->font,sprintf('Swiss Wind Map for: %s',$this->date));
		imagettftext($map,10, 0, 10, imagesy($map) - 40, $black, $this->font, sprintf("Created:%s ©steampilot.ch",$this->dateList[0]));
		imagettftext($map,10, 0, 10, imagesy($map) - 20, $black, $this->font, sprintf("The arrow points in the direction the wind is blowing to",$this->dateList[0]));
		$outputPath = 'output/'.$this->date.'_'.$this->layer.'.png';
		imagepng($map,$outputPath);
		imagedestroy($map);
		//building and returning the path of the created map
		return sprintf('<image src="%s" class="img-responsive" >',$outputPath);
	}

	/**
	 * creates a temperature map
	 *
	 * @return string the path for the created temperature map
	 */
	private function createTempMap(){
		//creating the legend
		$map = imagecreatefrompng($this->map);
		$black = imagecolorallocate($map,0,0,0);
		$blue = imagecolorallocate($map,0,0,255);
		$iconbg = imagecreatefrompng('image/temp/iconbg.png');
		$icon = imagecreatefrompng('image/temp/icon.png');
		//imagecopy($map,$icon,0, 0,0,0, imagesx($icon), imagesy($icon));
		imagecopyresampled($map,$icon,0,0,0,0,128,128,imagesx($icon), imagesy($icon));
		imagedestroy($icon);
		imagedestroy($iconbg);

		//placing the icons and values
		foreach($this->regionList as $region ) {
			$minTemp = $this->data[$this->date][$region['id']]['minTemp'];
			$maxTemp = $this->data[$this->date][$region['id']]['maxTemp'];
			$bg = imagecreatefrompng('image/temp/bg.png');
			if(($minTemp < 0) and ($maxTemp < 0)) {
				$icon = imagecreatefrompng("image/temp/iconMinus.png");
			} elseif(($minTemp > 0 ) and ($maxTemp > 0)){
				$icon = imagecreatefrompng("image/temp/iconPlus.png");
			} else {
				$icon = imagecreatefrompng("image/temp/icon.png");
			}
			$iconbg = imagecreatefrompng('image/temp/iconbg.png');

			$iconPos_x = $region['x'] - 80 / 2 ;
			$iconPos_y = $region['y'] - 80 / 2 ;
			imagecopyresampled($map,$iconbg,$iconPos_x,$iconPos_y,0,0,80,80,imagesx($icon), imagesy($icon));
			imagecopyresampled($map,$icon,$iconPos_x,$iconPos_y,0,0,80,80,imagesx($icon), imagesy($icon));
			imagecopy($map,$bg,$iconPos_x +80, $iconPos_y-10,0,0,imagesx($bg)-40,imagesy($bg));
			imagecopy($map,$bg,$iconPos_x +80, $iconPos_y-10 + imagesy($bg),0,0,imagesx($bg)-40,imagesy($bg));
			if($minTemp < 0) {$minTempColor = $blue;} else {$minTempColor = $black;}
			if($maxTemp < 0) {$maxTempColor = $blue;} else {$maxTempColor = $black;}
			imagettftext($map,30, 0, $iconPos_x + 80, $iconPos_y+30, $maxTempColor,$this->font,sprintf('%s °C',$maxTemp));
			imagettftext($map,30, 0, $iconPos_x + 80, $iconPos_y+70, $minTempColor,$this->font,sprintf('%s °C',$minTemp));

			imagedestroy($icon);
			imagedestroy($iconbg);
			imagedestroy($bg);
		}
		//creating the footer
		imagettftext($map,10, 0, 10, imagesy($map)- 60, $black,$this->font,sprintf('Swiss Temperature Map for: %s',$this->date));
		imagettftext($map,10, 0, 10, imagesy($map) - 30, $black, $this->font, sprintf("Created:%s ©steampilot.ch",$this->dateList[0]));
		$outputPath = 'output/'.$this->date.'_'.$this->layer.'.png';
		imagepng($map,$outputPath);
		imagedestroy($map);
		//building and returning the path of the created map
		return sprintf('<image src="%s" class="img-responsive">',$outputPath);
	}

	/**
	 * the constructor
	 * fetches the parsed data from Data.php according to the selected date and layer
	 * @param $date the selected date
	 * @param $layer the selected layer
	 */
	public function __construct($date, $layer ){
		$this->date = $date;
		$this->layer = $layer;
		$data = new Data();
		$this->data = $data->getData(false);
		$this->dateList = $data->getDateList();
		$this->weatherList = $data->getWeatherList();
		$this->regionList = $data->getRegionList();
		$this->pollenList = $data->getPollenList();
		$this->windDirectionList = $data->getWindDirectionList();

	}

	/**
	 * get the map according to the selected layer
	 * @return string the html image tag to display the map
	 */
	public function getMap(){
		if ($this->layer == 'rain') {
			return $this->createWeatherMap();
		}
		elseif ($this->layer == 'wind') {
			return $this->createWindMap();
		}
		elseif($this->layer == 'pollen') {
			return $this->createPollenMap();
		}
		elseif ($this->layer == 'temp') {
			return $this->createTempMap();
		} else {
			return sprintf('<img src="%s"', $this->map);
		}
	}

} 
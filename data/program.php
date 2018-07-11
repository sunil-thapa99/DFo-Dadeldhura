<?php
class Program
{
	
	function getProgramTypes()
	{
		global $conn;
		$sql = "SElECT * FROM programtype order by weight";
		$result = $conn->exec($sql);
		return $result;	
	}
	function getProgramLevel()
	{
		global $conn;
		$sql = "SElECT * FROM programlevel order by weight";
		$result = $conn->exec($sql);
		return $result;	
	}
	
	function getTypeById($id)
	{
		global $conn;
		$id=cleanQuery($id);
		$sql = "SElECT * FROM programtype where id='$id'";
		$result = $conn->exec($sql);
		$type=$conn->fetchArray($result);
		return $type;
	}
	
	function getCategories($selected)
	{
		global $conn;
		//global $times;
		
		$sql = "SElECT * FROM programtype WHERE publish='Yes'";		
		$result = $conn->exec($sql);
		while($row = $conn -> fetchArray($result))
		{
			//$spaces = $this->spaces($times);
			echo '<option value="' . $row['id'] . '"';
			if($selected == $row['id'])
				echo 'selected="selected"';
			echo '>' .$row['program_name'] . '</option>';
						
		}
	}
	
	function getByParentId($parentId)
	{
		global $conn;
		
		$parentId = cleanQuery($parentId);
		
		$sql = "SElECT id FROM programtype WHERE id = '$parentId'";
		$result = $conn->exec($sql);
		return $result;
	}
	
	function getLastWeight($programId)
	{
		global $conn;
		$categoryId = cleanQuery($categoryId);
		
		$sql = "SElECT weight FROM program WHERE program_type='$programId' ORDER BY weight DESC LIMIT 1";
		$result = $conn->exec($sql);
		$numRows = $conn -> numRows($result);
		if($numRows > 0)
		{
			$row = $conn->fetchArray($result);
			return $row['weight'] + 10;
		}
		else
			return 10;
	}
	
	function saveTraining($id, $program_name, $program_type, $program_from, $program_code, $program_level, $participant_number, $male_number, $female_number, $lowcast_number, $indigenous_number, $other, $date, $publish, $weight)
	{
		global $conn;
		
		$id = cleanQuery($id);
		$program_name = cleanQuery($program_name);
		$program_type = cleanQuery($program_type);
		$program_from = cleanQuery($program_from);
		$program_code = cleanQuery($program_code);
		$program_level = cleanQuery($program_level);
		$participant_number = cleanQuery($participant_number);
		$male_number = cleanQuery($male_number);
		$female_number = cleanQuery($female_number);
		$lowcast_number = cleanQuery($lowcast_number);
		$indigenous_number = cleanQuery($indigenous_number);
		$other = cleanQuery($other);
		$date = cleanQuery($date);
		$publish = cleanQuery($publish);
		$weight = cleanQuery($weight);
		
		if($id > 0)
		$sql = "UPDATE program
						SET
							program_name = '$program_name',
							program_type = '$program_type',
							program_from = '$program_from',
							program_code='$program_code',
							program_level = '$program_level',
							participant_number = '$participant_number',
							male_number = '$male_number',
							female_number = '$female_number',
							lowcast_number = '$lowcast_number',
							indigenous_number = '$indigenous_number',
							other = '$other',
							date = '$date',
							publish = '$publish',
							weight = '$weight'
						WHERE
							id = '$id'";
		else
		$sql = "INSERT INTO program
						SET
							program_name = '$program_name',
							program_type = '$program_type',
							program_from = '$program_from',
							program_code='$program_code',
							program_level = '$program_level',
							participant_number = '$participant_number',
							male_number = '$male_number',
							female_number = '$female_number',
							lowcast_number = '$lowcast_number',
							indigenous_number = '$indigenous_number',
							other = '$other',
							date = '$date',
							publish = '$publish',
							weight = '$weight'";
		
		$conn->exec($sql);
		if($id > 0)
			return $conn -> affRows();
		return $conn->insertId();
	}
	
	function saveNursery($id, $program_name, $program_type, $program_from, $nursery_type, $nursery_number, $production_number, $distribution_number, $date, $publish, $weight)
	{
		global $conn;
		
		$id = cleanQuery($id);
		$program_name = cleanQuery($program_name);
		$program_type = cleanQuery($program_type);
		$program_from = cleanQuery($program_from);
		$nursery_type = cleanQuery($nursery_type);
		$nursery_number = cleanQuery($nursery_number);
		$production_number = cleanQuery($production_number);
		$distribution_number = cleanQuery($distribution_number);
		$date = cleanQuery($date);
		$publish = cleanQuery($publish);
		$weight = cleanQuery($weight);
		
		if($id > 0)
		$sql = "UPDATE program
						SET
							program_name = '$program_name',
							program_type = '$program_type',
							program_from = '$program_from',
							nursery_type = '$nursery_type',
							nursery_number = '$nursery_number',
							production_number = '$production_number',
							distribution_number = '$distribution_number',
							date = '$date',
							publish = '$publish',
							weight = '$weight'
						WHERE
							id = '$id'";
		else
		$sql = "INSERT INTO program
						SET
							program_name = '$program_name',
							program_type = '$program_type',
							program_from = '$program_from',
							nursery_type = '$nursery_type',
							nursery_number = '$nursery_number',
							production_number = '$production_number',
							distribution_number = '$distribution_number',
							date = '$date',
							publish = '$publish',
							weight = '$weight'";
		
		$conn->exec($sql);
		if($id > 0)
			return $conn -> affRows();
		return $conn->insertId();
	}
	
	function saveProgramProgress($id, $program_name, $program_type, $program_from, $crop_name, $participant_number, $area_unit, $area_amount, $production_unit, 	$production_amount, $date, $publish, $weight)
	{
		global $conn;
		
		$id = cleanQuery($id);
		$program_name = cleanQuery($program_name);
		$program_type = cleanQuery($program_type);
		$program_from = cleanQuery($program_from);
		$crop_name = cleanQuery($crop_name);
		$participant_number = cleanQuery($participant_number);
		$area_unit = cleanQuery($area_unit);
		$area_amount = cleanQuery($area_amount);
		$production_unit = cleanQuery($production_unit);
		$production_amount = cleanQuery($production_amount);
		$date = cleanQuery($date);
		//echo $date; die();
		$publish = cleanQuery($publish);
		$weight = cleanQuery($weight);
		
		if($id > 0)
		$sql = "UPDATE program
						SET
							program_name = '$program_name',
							program_type = '$program_type',
							program_from = '$program_from',
							crop_name = '$crop_name',
							participant_number = '$participant_number',
							area_unit = '$area_unit',
							area_amount = '$area_amount',
							production_unit = '$production_unit',
							production_amount = '$production_amount',
							date = '$date',
							publish = '$publish',
							weight = '$weight'
						WHERE
							id = '$id'";
		else
		$sql = "INSERT INTO program
						SET
							program_name = '$program_name',
							program_type = '$program_type',
							program_from = '$program_from',
							crop_name = '$crop_name',
							participant_number = '$participant_number',
							area_unit = '$area_unit',
							area_amount = '$area_amount',
							production_unit = '$production_unit',
							production_amount = '$production_amount',
							date = '$date',
							publish = '$publish',
							weight = '$weight'";
		
		$conn->exec($sql);
		if($id > 0)
			return $conn -> affRows();
		return $conn->insertId();
	}
	
	function getNameById($id)
	{
		global $conn;
		
		$sql = "SElECT program_name FROM programtype WHERE id = '$id'";
		$result = $conn->exec($sql);
		$row = $conn->fetchArray($result);
		return $row['program_name'];
	}
	
	function getByType($type)
	{
		global $conn;

		$type = cleanQuery($type);	
		$sql = "SElECT * FROM program WHERE program_type='$type' ORDER BY weight";
		$result = $conn->exec($sql);
		return $result;
	}
	
	function getById($id)
	{
		global $conn;

		$id = cleanQuery($id);

		$sql = "SElECT * FROM program WHERE id = '$id'";
		$result = $conn->exec($sql);
		
		return $result;
	}
	
	function delete($id)
	{  
		global $conn;
		
		$id = cleanQuery($id);
		
		//$result = $this->getById($id);
		//$row = $conn->fetchArray($result);
		//$file = "../" . CMS_DIARY_DIR . $row['image'];
		//if (file_exists($file) && !empty($row['image']))
		//	unlink($file);
		
		$sql = "DELETE FROM program WHERE id = '$id'";
		$conn->exec($sql);
	}
	
	function getLastWeightStatistics($district)
	{
		global $conn;
		$district = cleanQuery($district);
		
		$sql = "SElECT weight FROM statistics where district='$district' ORDER BY weight DESC LIMIT 1";
		$result = $conn->exec($sql);
		$numRows = $conn -> numRows($result);
		if($numRows > 0)
		{
			$row = $conn->fetchArray($result);
			return $row['weight'] + 10;
		}
		else
			return 10;
	}
	
	function getByIdStatistics($id)
	{
		global $conn;
		$id = cleanQuery($id);
		$sql = "SElECT * FROM statistics WHERE id = '$id'";
		$result = $conn->exec($sql);
		return $result;
	}
	
	function saveStatistics($id, $district, $vdc_muncipality, $total_familyno, $total_population, $farmer_familyno, $farmer_population, $crop_name, $crop_code, $total_areaunit, $irrigated_area, $nonirrigated_area, $total_area, $production_unit, $production_amount, $farmer_unit, $farmer_price, $market_unit, $market_price, $productivity, $publish, $weight)
	{
		global $conn;
		
		$id = cleanQuery($id);
		$district = cleanQuery($district);
		$vdc_muncipality = cleanQuery($vdc_muncipality);
		$total_familyno = cleanQuery($total_familyno);
		$total_population = cleanQuery($total_population);
		$farmer_familyno = cleanQuery($farmer_familyno);
		$farmer_population=cleanQuery($farmer_population);
		$crop_name=cleanQuery($crop_name);	
		$crop_code=cleanQuery($crop_code);
		$total_areaunit=cleanQuery($total_areaunit);
		$irrigated_area=cleanQuery($irrigated_area);
		$nonirrigated_area = cleanQuery($nonirrigated_area);
		$total_area = cleanQuery($total_area);
		$production_unit = cleanQuery($production_unit);
		$production_amount = cleanQuery($production_amount);
		$farmer_unit = cleanQuery($farmer_unit);
		$farmer_price = cleanQuery($farmer_price);
		$market_unit = cleanQuery($market_unit);
		$market_price = cleanQuery($market_price);
		$productivity = cleanQuery($productivity);
		$publish=cleanQuery($publish);
		$weight=cleanQuery($weight);
		
		if($id > 0)
		$sql = "UPDATE statistics
						SET
							district = '$district',
							vdc_muncipality = '$vdc_muncipality',
							total_familyno = '$total_familyno',
							total_population = '$total_population',
							farmer_familyno = '$farmer_familyno',
							farmer_population = '$farmer_population',
							crop_name = '$crop_name',
							crop_code = '$crop_code',
							total_areaunit = '$total_areaunit',
							irrigated_area = '$irrigated_area',
							nonirrigated_area = '$nonirrigated_area',
							total_area = '$total_area',
							production_unit = '$production_unit',
							production_amount = '$production_amount',
							farmer_unit =  '$farmer_unit',
							farmer_price = '$farmer_price',
							market_unit = '$market_price',
							market_price = '$market_price',
							productivity = '$productivity',
							publish='$publish',
							weight = '$weight'						
						WHERE
							id = '$id'";
		else
		$sql = "INSERT INTO statistics SET district = '$district', vdc_muncipality = '$vdc_muncipality',total_familyno = '$total_familyno',total_population = '$total_population', farmer_familyno = '$farmer_familyno',farmer_population = '$farmer_population',crop_name = '$crop_name',crop_code = '$crop_code',total_areaunit = '$total_areaunit',irrigated_area = '$irrigated_area',nonirrigated_area = '$nonirrigated_area',total_area = '$total_area',production_unit = '$production_unit', production_amount = '$production_amount',farmer_unit =  '$farmer_unit',farmer_price = '$farmer_price',market_unit = '$market_unit',market_price = '$market_price',productivity = '$productivity',publish='$publish',weight = '$weight'";
		//echo $sql; die();
		$conn->exec($sql);
		if($id > 0)
			return $conn -> affRows();
		return $conn->insertId();
	}
	
	function getStatistics($district)
	{
		global $conn;
		$district = cleanQuery($district);
		//$type = cleanQuery($type);	
		$sql = "SElECT * FROM statistics where district='$district' ORDER BY weight";
		$result = $conn->exec($sql);
		return $result;
	}
	
	function deleteStatistics($id)
	{  
		global $conn;
		$id = cleanQuery($id);
		//$result = $this->getByIdStatistics($id);
		$sql = "DELETE FROM statistics WHERE id = '$id'";
		$conn->exec($sql);
	}
	
	function getDistrictByRegion($region)
	{
		global $conn;
		
		$region = cleanQuery($region);

		$sql="select * from district where dev_region='$region'";
		$result = $conn->exec($sql);
		return $result;
	}
	
	function getByDistrict($district)
	{
		global $conn;
		
		$district = cleanQuery($district);

		$sql="select * from statistics where district='$district'";
		$result = $conn->exec($sql);
		return $result;
	}
	
	function getCropStatistics($district)
	{
		global $conn;
		$district = cleanQuery($district);
		
		$sql="select * from statistics where district='$district' order by weight";
		$result = $conn->exec($sql);
		return $result;
	}	
	
}

?>

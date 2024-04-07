<?php
class Station extends DB
{
	private $_pref_cd;
	private $_line_cd;
	
	public function setPrefCd( $cd ){
		$this->_pref_cd = $cd;
	}
	public function setLineCd( $cd ){
		$this->_line_cd = $cd;
	}

	public function getLineList(){
		
		$PDO = self::ConnectDB();
		
		try {
			$query = 'SELECT line.line_name,line.line_cd ';
				$query .= 'FROM line ';
				$query .= 'LEFT JOIN station ON line.line_cd = station.line_cd ';
			$query .= 'WHERE station.pref_cd = :pref_cd ';
			$query .= 'GROUP BY line.line_name, line.line_cd ';
			$stmt = $PDO->prepare( $query );
			$stmt->bindValue(':pref_cd',$this->_pref_cd,PDO::PARAM_INT);
			$stmt->execute();
			
			$data = array();
			while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
				$data[] = array(
					'line_name' => $row['line_name'],
					'line_cd' => $row['line_cd']
				);
			}
			//var_dump($data);
			return $data;
		} catch (PDOException $e) {
			print_r($e->getMessage().":".$query);
			exit();
		}
	}
	
	public function getStationList(){
		
		$PDO = self::ConnectDB();
		
		try {
			$query = 'SELECT station_name,station_cd ';
			$query .= 'FROM station ';
			$query .= 'WHERE line_cd = :line_cd ';
			$stmt = $PDO->prepare( $query );
			$stmt->bindValue(':line_cd',$this->_line_cd,PDO::PARAM_INT);
			$stmt->execute();
			
			$data = array();
			while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
				$data[] = array(
					'station_name' => $row['station_name'],
					'station_cd' => $row['station_cd']
				);
			}
			//var_dump($data);
			return $data;
		} catch (PDOException $e) {
			print_r($e->getMessage().":".$query);
			exit();
		}
	}
}

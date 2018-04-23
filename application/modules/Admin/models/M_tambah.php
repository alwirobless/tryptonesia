<?php 
class M_tambah extends CI_Model{
	//OOP Model New
	public function select($table)
	{
		$this->db->select('*');
		$this->db->from($table);
		return $this->db->get();
	}
	public function select_groupby($table,$select,$group_by,$order,$option)
	{
		$this->db->select($select);
		$this->db->from($table);
		$this->db->group_by($group_by);
		$this->db->order_by($order,$option);		
		return $this->db->get();
	}
	public function select_where($table,$array,$order,$option)
	{
		$this->db->from($table);
		$this->db->where($array);
		$this->db->order_by($order,$option);		
        return $this->db->get();		
	}
	public function select_where_groupby($table,$select,$array,$group_by,$order,$option)
	{
		$this->db->select($select);
		$this->db->from($table);
		$this->db->group_by($group_by);
		$this->db->where($array);
		$this->db->order_by($order,$option);		
        return $this->db->get();		
	}
	public function select_join_where_not_in($table,$table2,$join_1,$where,$key1,$isi1)
	{
		$this->db->from($table);
        $this->db->join($table2,$join_1);
		$this->db->where($where);
		$this->db->where_not_in($key1,$isi1);
		return $this->db->get();		
	}
	public function insert($table,$data)
	{
		$this->db->insert($table,$data);
		return $this->db->affected_rows();
	}
	public function update($table,$data,$where)
	{
		$this->db->update($table,$data,$where);
	}
	public function delete($table,$where)
	{
		$this->db->delete($table,$where);
	}
	public function select_join_where($table,$table2,$join_1,$where,$select,$order,$option,$type)
	{
		$this->db->select($select);		
		$this->db->from($table);
        $this->db->join($table2,$join_1,$type);
		$this->db->where($where);
		$this->db->order_by($order,$option);
        return $this->db->get();
	}
	public function select_join_where_groupby($table,$table2,$join_1,$where,$select,$group_by,$order,$option,$type)
	{
		$this->db->select($select);		
		$this->db->from($table);
        $this->db->join($table2,$join_1,$type);
		$this->db->where($where);
		$this->db->group_by($group_by);
		$this->db->order_by($order,$option);
        return $this->db->get();
	}
	public function select_join_2_where_groupby($table,$table2,$join_1,$table3,$join_2,$where,$select,$group_by,$order,$option)
	{
		$this->db->select($select);		
		$this->db->from($table);
        $this->db->join($table2,$join_1);
        $this->db->join($table3,$join_2);
		$this->db->where($where);
		$this->db->group_by($group_by);
		$this->db->order_by($order,$option);
        return $this->db->get();
	}
	public function select_join_3_where_groupby($table,$table2,$join_1,$table3,$join_2,$table4,$join_3,$where,$select,$group_by,$order,$option)
	{
		$this->db->select($select);		
		$this->db->from($table);
        $this->db->join($table2,$join_1);
        $this->db->join($table3,$join_2);
        $this->db->join($table4,$join_3);
		$this->db->where($where);
		$this->db->group_by($group_by);
		$this->db->order_by($order,$option);
        return $this->db->get();
	}
	public function select_join_type_3_where_groupby($table,$table2,$join_1,$table3,$join_2,$table4,$join_3,$where,$select,$group_by,$order,$option)
	{
		$this->db->select($select);		
		$this->db->from($table);
        $this->db->join($table2,$join_1,'LEFT');
        $this->db->join($table3,$join_2,'LEFT');
        $this->db->join($table4,$join_3,'LEFT');
		$this->db->where_in($where);
		$this->db->group_by($group_by);
		$this->db->order_by($order,$option);
        return $this->db->get();
	}

	public function select_join_type_3_groupby($table,$table2,$join_1,$type1,$table3,$join_2,$type2,$table4,$join_3,$type3,$select,$group_by,$order,$option)
	{
		$this->db->select($select);		
		$this->db->from($table);
        $this->db->join($table2,$join_1,$type1);
        $this->db->join($table3,$join_2,$type2);
        $this->db->join($table4,$join_3,$type3);
		$this->db->group_by($group_by);
		$this->db->order_by($order,$option);
        return $this->db->get();
	}
	public function select_join_type_4_where_groupby($table,$table2,$join_1,$type1,$table3,$join_2,$type2,$table4,$join_3,$type3,$table5,$join_4,$type4,$where,$select,$group_by,$order,$option)
	{
		$this->db->select($select);		
		$this->db->from($table);
        $this->db->join($table2,$join_1,$type1);
        $this->db->join($table3,$join_2,$type2);
        $this->db->join($table4,$join_3,$type3);
        $this->db->join($table5,$join_4,$type4);
		$this->db->group_by($group_by);
		$this->db->order_by($order,$option);
        return $this->db->get();
	}
	public function alternatif($table,$table2,$join_1,$type1,$table3,$join_2,$type2,$table4,$join_3,$type3,$table5,$join_4,$type4,$where,$where2,$where3,$select,$group_by,$order,$option)
	{
		$this->db->select($select);		
		$this->db->from($table);
        $this->db->join($table2,$join_1,$type1);
        $this->db->join($table3,$join_2,$type2);
        $this->db->join($table4,$join_3,$type3);
        $this->db->join($table5,$join_4,$type4);
		$this->db->where($where);
		$this->db->or_where($where2);
		$this->db->where_in($where3);
		$this->db->group_by($group_by);
		$this->db->order_by($order,$option);
        return $this->db->get();
	}
	//End OOP Model New

	function tampil_data($table){
		$this->db->select('*');
		$this->db->from($table);
		return $this->db->get();
	}
	function tampil_data_rata_id($table,$kolom,$kolom2,$isi)
	{
		$this->db->select_avg($kolom);
		$this->db->where($kolom2, $isi);
		return $this->db->get($table);
	}
	function tampil_data_limit($table){
		$this->db->select('*');
		$this->db->from($table);
		$this->db->limit(1);
		return $this->db->get();
	}
	function tampil_data_id($table,$kolom,$isi){
		$this->db->select('*');
		$this->db->from($table);
		$this->db->where($kolom, $isi);
		//$this->db->like($kolom,$isi);
		return $this->db->get();
	}
	function tampil_data_id_sum($table,$kolom,$isi,$kolom2){
		$this->db->select_sum($kolom2);
		$this->db->from($table);
		$this->db->where($kolom, $isi);
		//$this->db->like($kolom,$isi);
		return $this->db->get();
	}
	function tampil_data_2_id_sum($table,$kolom,$isi,$kolom2,$isi2,$kolom3){
		$this->db->select($kolom3);
		$this->db->from($table);
		$this->db->where($kolom, $isi);
		$this->db->where($kolom2, $isi2);
		//$this->db->like($kolom,$isi);
		return $this->db->get();
	}
	function tampil_data_id_or($table,$kolom,$isi,$kolom2,$isi2){
		$this->db->select('*');
		$this->db->from($table);
		$this->db->where($kolom, $isi);
		$this->db->or_where($kolom2, $isi2);
		return $this->db->get();
	}	
	function input_data($data,$table){
		try {
		$ins=$this->db->insert($table,$data);
		?>
		<script type="text/javascript">
			swal("Good job!", "You clicked the button!", "success")
		</script>
		<?php	
		} catch (Exception $e) {			
		}
	}
	function tampil_data_2_id($data1, $kolom1, $data2, $kolom2, $tbl){
		$this->db->select('*');
		$this->db->from($tbl);
		$this->db->where($kolom1, $data1);
		$this->db->where($kolom2, $data2);
		return $this->db->get();
	}
	function tampil_data_2_id_or($data1, $kolom1, $data2, $kolom2,$data_or,$kolom_or, $tbl){
		$this->db->select('*');
		$this->db->from($tbl);
		$this->db->where($kolom1, $data1);
		$this->db->where($kolom2, $data2);
		$this->db->or_where($kolom_or,$data_or);
		$this->db->where($kolom1, $data1);
		return $this->db->get();
	}
	function kode_unik($table,$kolom,$length,$tri_kode){
		$this->db->select("RIGHT(".$table.".".$kolom.",".$length.") as kode",FALSE);
		$this->db->order_by(''.$kolom.'','desc');
		$this->db->limit(1);
		$query = $this->db->get(''.$table.'');

		if ($query->num_rows() <> 0 ){
			$data = $query->row();
			$kode = intval($data->kode) + 1;
		}else{
			$kode = 1;			
		}	
		$kodemax = str_pad($kode, $length, "0", STR_PAD_LEFT);
		$kodejadi = $tri_kode.$kodemax;

		return $kodejadi;
	}
	function kode_unik2($table,$kolom,$length,$tri_kode,$lengthleft){
		$this->db->select("RIGHT(".$table.".".$kolom.",".$length.") as kode",FALSE);
		$this->db->where("LEFT(".$kolom.",".$lengthleft.")",$tri_kode);
		$this->db->order_by(''.$kolom.'','desc');
		$this->db->limit(1);
		$query = $this->db->get(''.$table.'');

		if ($query->num_rows() <> 0 ){
			$data = $query->row();
			$kode = intval($data->kode) + 1;
		}else{
			$kode = 1;			
		}	
		$kodemax = str_pad($kode, $length, "0", STR_PAD_LEFT);
		$kodejadi = $tri_kode.$kodemax;

		return $kodejadi;
	}
	function update_data($table,$data,$kolom,$isi){
		$this->db->where($kolom,$isi);
		$this->db->update($table,$data);
	}
	
	function update_data_2_id($table,$data,$kolom,$isi,$kolom2,$isi2){
		$this->db->where($kolom,$isi);
		$this->db->where($kolom2,$isi2);
		$this->db->update($table,$data);
	}
	function delete_data($table,$kolom,$isi)
	{
		$this->db->where($kolom,$isi);
		$this->db->delete($table);	
	}
	function delete_data_2_id($table,$kolom,$isi,$kolom2,$isi2)
	{
		$this->db->where($kolom,$isi);
		$this->db->where($kolom2,$isi2);
		$this->db->delete($table);	
	}
	public function join_by_id($table,$isi1,$table2,$isi2,$kolom,$data)
	{
		$this->db->from($table);
        $this->db->join($table2,''.$table.'.'.$isi1.'='.$table2.'.'.$isi2.'');
		$this->db->where_in($kolom, $data);
        return $this->db->get();
	}
	public function join_by_2_id($table,$isi1,$table2,$isi2,$kolom,$data,$kolom2,$data2)
	{
		$this->db->from($table);
        $this->db->join($table2,''.$table.'.'.$isi1.'='.$table2.'.'.$isi2.' ');
		$this->db->where($kolom, $data);
		$this->db->where($kolom2, $data2);
        return $this->db->get();
	}
	public function join_not_by_id($table,$isi1,$table2,$isi2,$kolom,$data)
	{
		$this->db->from($table);
        $this->db->join($table2,''.$table.'.'.$isi1.'='.$table2.'.'.$isi2.'');
		$this->db->where_not_in($kolom, $data);
        return $this->db->get();
	}
	public function join($table,$isi1,$table2,$isi2)
	{
		$this->db->from($table);
        $this->db->join($table2,''.$table.'.'.$isi1.'='.$table2.'.'.$isi2.'');
		//$this->db->like('Brand_Name','an');
        return $this->db->get();
	}
	public function join_2($table,$isi1,$table2,$isi2,$table3,$isi3)
	{
		$this->db->from($table);
        $this->db->join($table2,''.$table.'.'.$isi1.'='.$table2.'.'.$isi2.'','left');
        $this->db->join($table3,''.$table2.'.'.$isi3.'='.$table3.'.'.$isi3.'','left');
        return $this->db->get();
	}
	public function join_2_by_id($table,$isi1,$table2,$isi2,$table3,$isi3,$isi4,$kolom,$data)
	{
		$this->db->from($table);
        $this->db->join($table2,''.$table.'.'.$isi1.'='.$table2.'.'.$isi2.'');
        $this->db->join($table3,''.$table2.'.'.$isi3.'='.$table3.'.'.$isi3.' AND '.$table2.'.'.$isi4.'='.$table3.'.'.$isi4.'');
		$this->db->where($kolom, $data);
        return $this->db->get();
	}
	public function withdraw($table,$isi1,$table2,$isi2,$table3,$isi3,$kolom,$data)
	{
		$this->db->from($table);
        $this->db->join($table2,''.$table.'.'.$isi1.'='.$table2.'.'.$isi2.'');
        $this->db->join($table3,''.$table2.'.'.$isi3.'='.$table3.'.'.$isi3.'');
		$this->db->where($kolom, $data);
        return $this->db->get();
	}
	public function join_4_by_id($table,$isi1,$table2,$isi2,$table3,$isi3,$table4,$isi4,$isi5,$table5,$isi6,$array)
	{
		$this->db->from($table);
        $this->db->join($table2,''.$table.'.'.$isi1.'='.$table2.'.'.$isi2.'');
        $this->db->join($table3,''.$table2.'.'.$isi3.'='.$table3.'.'.$isi3.'');
        $this->db->join($table4,''.$table3.'.'.$isi4.'='.$table4.'.'.$isi4.' AND '.$table3.'.'.$isi5.'='.$table4.'.'.$isi5.'');
        $this->db->join($table5,''.$table.'.'.$isi6.'='.$table5.'.'.$isi6.'');
		$this->db->where($array);
        return $this->db->get();        
	}
	public function laporan_all($table,$isi1,$table2,$isi2,$table3,$isi3,$col1,$col2,$col3,$col4)
	{
		$this->db->select(''.$col1.' as col1,'.$col2.'as col2,'.$col3.'as col3,'.$col4.'as col4');
		$this->db->from($table);
        $this->db->join($table2,''.$table.'.'.$isi1.'='.$table2.'.'.$isi2.'');
        $this->db->join($table2,''.$table3.'.'.$isi3.'='.$table2.'.'.$isi2.'');
//		$this->db->group_by($col1);
        return $this->db->get();	
	}
	public function laporan($table,$isi1,$table2,$isi2,$col1,$col2,$col3)
	{
		$this->db->select(''.$col1.' as col1,'.$col2.'as col2,'.$col3.'as col3');
		$this->db->from($table);
        $this->db->join($table2,''.$table.'.'.$isi1.'='.$table2.'.'.$isi2.'');
		$this->db->group_by($col1);
        return $this->db->get();	
	}
	public function laporan_by_id($table,$isi1,$table2,$isi2,$col1,$col2,$col3,$kolom,$data)
	{
		$this->db->select(''.$col1.' as col1,'.$col2.'as col2,'.$col3.'as col3');
		$this->db->from($table);
        $this->db->join($table2,''.$table.'.'.$isi1.'='.$table2.'.'.$isi2.'');
        $this->db->where($kolom,$data);
		$this->db->group_by($col1);
        return $this->db->get();	
	}
	public function Data_bertingkat($table,$id,$kolom,$kolom1,$name)
	{
		$fetch="<option value='0'>--Pilih--</pilih>";

	//	$this->db->order_by('name','ASC');
		$data1= $this->M_tambah->tampil_data_id($table,$kolom,$id)->result();

		foreach ($data1 as $data ){
		$value = $data->$kolom1;
		$text  = $data->$name;
		$fetch.= "<option value='$value'>$text</option>";
		}

		return $fetch;

	}


	/*public function alternatif($table,$isi1,$table2,$isi2,$table3,$isi3,$table4,$isi4,$col1,$col2,$col3,$col4,$col5,$col6,$col7,$col8)
	{
		$this->db->select(''.$col1.','.$col2.','.$col3.','.$col4.','.$col5.','.$col6.','.$col7.','.$col8.'');
		$this->db->from($table);
        $this->db->join($table2,''.$table.'.'.$isi1.'='.$table2.'.'.$isi4.'','left');
        $this->db->join($table3,''.$table.'.'.$isi1.'='.$table3.'.'.$isi4.'','left');
        $this->db->join($table4,''.$table.'.'.$isi1.'='.$table4.'.'.$isi4.'','left');
		$this->db->group_by($col2);
        return $this->db->get();
	}*/

	public function alternatif_id($table,$isi1,$table2,$isi2,$table3,$isi3,$table4,$isi4,$col1,$col2,$col3,$col4,$col5,$col6,$col7,$kolom,$data)
	{
		$this->db->select(''.$col1.','.$col2.','.$col3.','.$col4.','.$col5.','.$col6.','.$col7.'');
		$this->db->from($table);
        $this->db->join($table2,''.$table.'.'.$isi1.'='.$table2.'.'.$isi4.'','left');
        $this->db->join($table3,''.$table.'.'.$isi1.'='.$table3.'.'.$isi4.'','left');
        $this->db->join($table4,''.$table.'.'.$isi1.'='.$table4.'.'.$isi4.'','left');
        $this->db->where($kolom,$data);
		$this->db->group_by($col1,$col2,$col3,$col4,$col5);
        return $this->db->get();
	}

	public function search($table,$table2,$isi2,$kolom,$keyword)
	{
		$this->db->from($table);
        $this->db->join($table2,$isi2);
		$this->db->like($kolom,$keyword);
        return $this->db->get();
	}

	
}

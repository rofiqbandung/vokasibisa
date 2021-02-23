<?php

class CategoryNewsModel extends CI_Model
	{
        function tampil_data()
        {
            $kategori = $this->db->get('news_category');
            return $kategori;
        }


        function input_data($data)
        {
            if($this->db->insert("news_category", $data)){
				return TRUE;
			}else{
				return false;
			}
        }


        function delete_category($id)
        {
            $this->db->where('id_category', $id)->delete('news_category');
        }

        function get_update($id)
        {
            $category = $this->db->where('id_category', $id)->get('news_category');

			return $category;
        }


        function update_Category($id, $data)
        {
            if($this->db->where('id_category', $id)->update("news_category", $data)){
				return true;
			}else{
				return false;
			}
        }

        

    }


?>
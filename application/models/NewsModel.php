<?php

class NewsModel extends CI_Model
	{
        function tampil_data()
        {
            $berita =  $this->db->get('news');
            return $berita;
        }

        function relation_category()
        {
			$kategori = $this->db->where('category_status', 1)->get('news_category');
			return $kategori;
		}

        function relation_table()
		{
			// $berita = $this->db->select('*')->join('news_category', 'news_category.id_category = news.id_category')->where('berita_status', 1)->get('news');
			// return $berita;
            // $berita = $this->db->from('news')->join('news_category', 'news_category.id_category = news.id_category')->get();
            // return $berita;

            $this->db->select('*');
            $this->db->from('news');
            $this->db->join('news_category', 'news_category.id_category = news.id_category');
            $query = $this->db->get();
            return $query->result_array();
		}

        function add_news($data)
        {	
			if($this->db->insert("news", $data)){
				return true;
			}else{
				return false;
			}

		}

        function trash_news($id)
        {
            $this->db->where('id_berita', $id)->delete('news');
        }

        function relation_data($id)
		{
			$berita = $this->db->select('*')->join('news_category', 'news_category.id_category = news.id_category')->where('id_berita', $id)->where('berita_status', 1)->get('news');

			return $berita;
		}

        function update_news($id, $data){
			if($this->db->where('id_berita', $id)->update("news", $data)){
				return true;
			}else{
				return false;
			}
		}
    }


?>
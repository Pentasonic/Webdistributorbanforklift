<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Ays_model extends CI_Model
{
    // Function Get Data
    public function getDataUser()
    {
        $user = $this->db->from("user")->get();
        return $user;
    }
    public function getDataMerek()
    {
        $merek = $this->db->from("merek a")
        ->join("user b", "a.id_creator=b.id_user")
        ->join("asset c", "a.id_gambar=c.id_asset")
        ->get();
        return $merek;
    }
    public function getDataMerekWhere($where)
    {
        $merek = $this->db->from("merek a")
        ->join("asset c", "a.id_gambar=c.id_asset")
        ->where($where)->get();
        return $merek;
    }
    public function getDataKategoriWhere($where)
    {
        $kategori = $this->db->from("kategori")
        ->where($where)->get();
        return $kategori;
    }
    public function getDataJenisWhere($where)
    {
        $jenis = $this->db->from("jenis_produk")
        ->where($where)->get();
        return $jenis;
    }
    public function getDataUserWhere($where)
    {
        $user = $this->db->from("user")->where($where)->get();
        return $user;
    }

    public function getDataProduk()
    {
        $produk = $this->db->select('*, a.status as sts')->from("produk a")
            ->join("user b", "a.id_creator=b.id_user")
            ->join("asset c", "a.id_gambar=c.id_asset")
            ->get();
        return $produk;
    }
    public function getDataProdukRandom()
    {
        $produk = $this->db->select('*, a.status as sts')->from("produk_view a")
            ->join("user b", "a.id_creator=b.id_user")
            ->join("asset c", "a.id_gambar=c.id_asset")
            ->join("merek e","a.id_merek=e.id_merek")
            ->order_by('RAND()') // mengacak urutan data
            ->limit(4) // membatasi jumlah data yang diambil
            ->get();
        return $produk;
    }
    public function getDataProdukWhere($where)
    {
        $produk = $this->db->select('*,a.nama_produk as name')->from("produk a")
            ->join("user b", "a.id_creator=b.id_user")
            ->join("asset c", "a.id_gambar=c.id_asset")
            ->join("kategori d","a.id_kategori=d.id_kategori")
            ->join("merek e","a.id_merek=e.id_merek")
            ->join("jenis_produk f","a.id_jenis_produk=f.id_jenis_produk")
            ->where($where)
            ->get();
        return $produk;
    }
    public function getDataProdukWhereView($where)
    {
        $produk = $this->db->select('*,a.nama_produk as name')->from("produk_view a")
            ->join("user b", "a.id_creator=b.id_user")
            ->join("asset c", "a.id_gambar=c.id_asset")
            ->join("kategori d","a.id_kategori=d.id_kategori")
            ->join("merek e","a.id_merek=e.id_merek")
            ->join("jenis_produk f","a.id_jenis_produk=f.id_jenis_produk")
            ->where($where)
            ->get();
        return $produk;
    }
    public function getDataProdukWherePage($page, $id)
    {
        $produk_per_page = 12;
        if($id != null){

            $whereProduk = array("status_publikasi" => "publik", "a.status" => "aktif", "a.id_jenis_produk" => $id);
        }else{

            $whereProduk = array("status_publikasi" => "publik", "a.status" => "aktif");
        }
        $produk = $this->db->select('*,a.nama_produk as name')->from("produk a")
            ->join("user b", "a.id_creator=b.id_user")
            ->join("asset c", "a.id_gambar=c.id_asset")
            ->join("kategori d","a.id_kategori=d.id_kategori")
            ->join("merek e","a.id_merek=e.id_merek")
            ->join("jenis_produk f","a.id_jenis_produk=f.id_jenis_produk")
            ->where($whereProduk)
            ->limit($produk_per_page, (($produk_per_page*$page)-$produk_per_page))
            ->get();
        return $produk;
    }
    public function getDataProdukWherePageView($page, $id)
    {
        $produk_per_page = 12;
        if($id != null){

            $whereProduk = array("status_publikasi" => "publik", "a.status" => "aktif", "a.id_jenis_produk" => $id);
        }else{

            $whereProduk = array("status_publikasi" => "publik", "a.status" => "aktif");
        }
        $produk = $this->db->select('*,a.nama_produk as name')->from("produk_view a")
            ->join("user b", "a.id_creator=b.id_user")
            ->join("asset c", "a.id_gambar=c.id_asset")
            ->join("kategori d","a.id_kategori=d.id_kategori")
            ->join("merek e","a.id_merek=e.id_merek")
            ->join("jenis_produk f","a.id_jenis_produk=f.id_jenis_produk")
            ->where($whereProduk)
            ->limit($produk_per_page, (($produk_per_page*$page)-$produk_per_page))
            ->get();
        return $produk;
    }
    public function getDataProdukWhereSearchView($idMerek,$search)
    {
        if($idMerek){
            $produk = $this->db->query("SELECT * FROM produk_view a join user b  on a.id_creator=b.id_user join asset c on a.id_gambar=c.id_asset join kategori d on a.id_kategori=d.id_kategori join merek e on a.id_merek=e.id_merek WHERE a.status='aktif' AND a.id_merek=".$idMerek."");
            return $produk;
            
        }else if($search){
            $produk = $this->db->query("SELECT * FROM produk_view a join user b  on a.id_creator=b.id_user join asset c on a.id_gambar=c.id_asset join kategori d on a.id_kategori=d.id_kategori join merek e on a.id_merek=e.id_merek WHERE a.status='aktif' AND a.nama_produk LIKE '%".$search."%'");
            return $produk;
            
        }else if($idMerek && $search){
            $produk = $this->db->query("SELECT * FROM produk_view a join user b  on a.id_creator=b.id_user join asset c on a.id_gambar=c.id_asset join kategori d on a.id_kategori=d.id_kategori join merek e on a.id_merek=e.id_merek WHERE a.status='aktif' AND a.id_merek=".$idMerek." AND a.nama_produk LIKE '%".$search."%'");
            return $produk;
            
        }else{
            $produk = $this->db->query("SELECT * FROM produk_view a join user b  on a.id_creator=b.id_user join asset c on a.id_gambar=c.id_asset join kategori d on a.id_kategori=d.id_kategori join merek e on a.id_merek=e.id_merek WHERE a.status='aktif'");
            return $produk;

        }
    }

    public function getDataGallery()
    {
        $gallery = $this->db->select('*, a.status as sts')->from("gallery a")
            ->join("user b", "a.id_creator = b.id_user")
            ->join("asset c", "a.id_asset = c.id_asset")
            ->get();
        return $gallery;
    }
    public function getDataGalleryWhere($where)
    {
        $gallery = $this->db->select('*, a.status as sts')->from("gallery a")
            ->join("user b", "a.id_creator=b.id_user")
            ->join("asset c", "a.id_asset=c.id_asset")
            ->where($where)->get();
        return $gallery;
    }
    public function getDataGalleryWhereView($where)
    {
        $gallery = $this->db->select('*, a.status as sts')->from("gallery_view a")
            ->join("user b", "a.id_creator=b.id_user")
            ->join("asset c", "a.id_asset=c.id_asset")
            ->where($where)->get();
        return $gallery;
    }
    public function getDataAbout()
    {
        $about = $this->db->from("about a")
            ->join('asset b', 'a.gambar_about = b.id_asset')
            ->get();
        return $about;
    }

    public function getDataSetting()
    {
        $setting_global = $this->db->from("global_setting a")
            ->join('asset b', 'a.gambar_ico = b.id_asset')
            ->get();
        return $setting_global;
    }
    public function getDataSlider()
    {
        $slider = $this->db->select('*,a.status AS statusa')
        ->from("slider a")
            ->join('asset b', 'a.gambar_slider = b.id_asset')
            ->join("user c", "a.id_creator=c.id_user")
            ->get();
        return $slider;
    }
    public function getDataPages()
    {
        $pages = $this->db->select('*,a.status AS statusa')
        ->from("pages a")
            ->join('asset b', 'a.gambar_pages = b.id_asset')
            ->join("user c", "a.id_creator=c.id_user")
            ->get();
        return $pages;
    }
    public function getDataPagesOnly($id)
    {
        $pages = $this->db->select('*,a.status AS statusa')
        ->from("pages a")
            ->join('asset b', 'a.gambar_pages = b.id_asset')
            ->join("user c", "a.id_creator=c.id_user")
            ->where("id_pages",$id)
            ->get();
        return $pages;
    }
    public function getDataSliderWhere($where)
    {
        $slider = $this->db->from("slider a")
            ->join('asset b', 'a.gambar_slider = b.id_asset')
            ->where($where)->get();
        return $slider;
    }
    public function getDataPagesWhere($where)
    {
        $slider = $this->db->from("pages a")
            ->join('asset b', 'a.gambar_pages = b.id_asset')
            ->where($where)->get();
        return $slider;
    }

    public function getDataImage()
    {
        $image = $this->db->from("asset a")
            ->join("user b", "a.id_creator = b.id_user")
            ->get();
        return $image;
    }
    public function getDataKategori()
    {
        $kategori = $this->db->from("kategori a")
            ->join("user b", "a.id_creator = b.id_user")
            ->get();
        return $kategori;
    }
    public function getDataJenis()
    {
        $kategori = $this->db->from("jenis_produk a")
            ->join("user b", "a.id_creator = b.id_user")
            ->get();
        return $kategori;
    }
    public function getDataFeedback()
    {
        $feedback = $this->db->from("feedback")->get();
        return $feedback;
    }
    public function getDataVisitor()
    {
        $visitor = $this->db->from("visitor")->get();
        return $visitor;
    }
    public function getDataVisitorWhere($where)
    {
        $visitor = $this->db->select('*,COUNT(id_produk) as sum_val')
        ->from("visitor")
            ->where($where)
            ->group_by('year,month')
            ->order_by('id','asc')
            ->get();
        return $visitor;
    }
    public function getDataMinatWhere($where)
    {
        $minat = $this->db->select('a.*,COUNT(a.id_produk) as sum_val,b.nama_produk')
        ->from("visitor a")
        ->join('produk b','a.id_produk=b.id_produk')
            ->where($where)
            ->group_by('a.id_produk')
            ->order_by('a.id','asc')
            ->get();
        return $minat;
    }

    // function Post/update Data
    public function saveData($tabel, $data)
    {
        return $this->db->insert($tabel, $data);
    }
    public function saveDataId($tabel, $data)
    {
        $this->db->insert($tabel, $data);
        $insert_id = $this->db->insert_id();
        return $insert_id;

        return  $insert_id;
    }
    public function updateData($tabel, $data, $where)
    {
        $update = $this->db->where($where);
        $update = $this->db->update($tabel, $data);
        return $update;
    }
    public function postDataUser()
    { // via Form/Serialize

    }
    public function postDataFeedback()
    {
    }
    public function postDataVisitor()
    {
    }
    public function postDataMinat()
    {
    }

    public function putDataUser()
    { // via Form/Serialize

    }
    public function patchDataUser($id, $data)
    { // via JQuery Slider action

    }

    public function postDataProduk()
    { // via Form/Serialize

    }
    public function putDataProduk()
    { // via Form/Serialize

    }
    public function patchDataProduk($id, $data)
    { // via JQuery Slider action

    }

    public function postDataGallery()
    { // via Form/Serialize

    }
    public function putDataGallery()
    { // via Form/Serialize

    }
    public function patchDataGallery($id, $data)
    { // via JQuery Slider action

    }

    public function putDataSetting()
    { // via Form/Serialize

    }

    public function cekSlug($tableName, $slug)
    {
        // Validasi dan bersihkan $slug jika diperlukan

        $query = $this->db->select('*')->from($tableName)->where('slug', $slug)->get();

        // Periksa apakah ada hasil yang ditemukan
        if ($query && $query->num_rows() > 0) {
            // Slug telah digunakan
            return true;
        } else {
            // Slug belum digunakan
            return false;
        }
    }



    // function Delete Data (Only Status Show)

}

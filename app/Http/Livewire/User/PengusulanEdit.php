<?php
namespace App\Http\Livewire\User;

use Livewire\Component;
use App\Models\WarisanBudaya;
use Illuminate\Support\Facades\Storage;

class PengusulanEdit extends Component
{
    public $judul;
    public $lokasi;
    public $pelaku;
    public $domain;
    public $kondisi;
    public $deskripsi;
    public $selected_id;
    public $foto;

    protected $rules = [
        'domain' => 'required',
        'kondisi' => 'required',
        'judul' => 'required',
        'lokasi' => 'required',
        'deskripsi' => 'required',
    ];

    public function mount(WarisanBudaya $pengusulan)
    {
        $this->judul = $pengusulan->judul;
        $this->lokasi = $pengusulan->lokasi;
        $this->pelaku = $pengusulan->pelaku;
        $this->domain = $pengusulan->domain;
        $this->kondisi = $pengusulan->kondisi;
        $this->deskripsi = $pengusulan->deskripsi;
        $this->selected_id = $pengusulan->id;
        $this->foto = json_encode($pengusulan->foto);
    }

    public function render()
    {
        return view('livewire.user.pengusulan-edit');
    }

    public function save()
    {
        $this->validate();

        $warisan_budaya = WarisanBudaya::find($this->selected_id);

        $warisan_budaya->judul = $this->judul;
        $warisan_budaya->lokasi = $this->lokasi;
        $warisan_budaya->pelaku = $this->pelaku;
        $warisan_budaya->domain = $this->domain;
        $warisan_budaya->kondisi = $this->kondisi;
        $warisan_budaya->deskripsi = $this->deskripsi;
        $warisan_budaya->foto = json_encode($this->uploadFoto());
        $warisan_budaya->save();
        if(null != json_decode($this->foto) || json_decode($this->foto)[0] != 'default.jpg'){
            $foto = json_decode($this->foto);
            $foto = array_walk($foto, function($item){
                unlink(public_path('upload/'.$item)); 
            });

        }

        session()->flash('message', 'Berhasil mengubah pengusulan');
        return redirect()->to('/user/pengusulan/'.$this->selected_id);

    }

    public function uploadFoto(){
        $dom = new \DomDocument();
        $dom->loadHTML($this->deskripsi, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);

        $images = $dom->getElementsByTagName('img');
        $list_images = array();
        foreach($images as $k => $img){
            $data = $img->getAttribute('src');
            // dd(parse_url($data));
            if(sizeof(parse_url($data))>2){
                $data = 'data:image/jpg;base64,'.base64_encode(file_get_contents($data));
            }
            // dd($data);
            list($type, $data) = explode(';', $data);
            list(, $data)      = explode(',', $data);
            $data = base64_decode($data);
            $mime_type = finfo_buffer(finfo_open(), $data, FILEINFO_MIME_TYPE);
            $image_name = time().$k.'.'.$this->fileExtension($mime_type);
            $image_location= "/upload/" . $image_name;
            // dd($data);
            file_put_contents(public_path() . $image_location, $data);
            
            array_push($list_images, $image_name);
            $img->removeAttribute('src');
            $img->setAttribute('src', $image_location);
        }

        $this->deskripsi = $dom->saveHTML();

        return $list_images;
    }

    public function fileExtension($mime_type)
    {
        $ext = explode("/", $mime_type);
        return $ext[1];
    }
}

<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Event as EventModel;

class Event extends Component
{
    public $judul, $konten, $start, $end, $selected_id, $message;
    public $is_create = false;
    public $is_update = false;

    protected $rules = [
        'judul' => 'required',
        'konten' => 'required',
        "start" => 'required',
        'end' => 'required'
    ];

    public function render()
    {
        return view('livewire.admin.event.main', ['event' => EventModel::orderByDesc("id")->get()]);
    }

    public function create()
    {
        $this->is_create = true;
        $this->dispatchBrowserEvent('create');
    }

    public function save()
    {
        $this->validate($this->rules);
        $event = EventModel::create([
            'title' => $this->judul,
            'konten' => $this->konten,
            'start' => $this->start,
            'end' => $this->end
        ]);

        $this->is_create = false;
        $this->is_update = false;
        $this->message = "Berhasil membuat Event. Lihat Event <a href='" . route('detail-event', ['event' => $event->id]) . "' target='_blank'>di sini</a>";
    }

    public function deleteId($id)
    {
        $event = EventModel::findOrFail($id);
        $this->judul = $event->title;
        $this->selected_id = $id;
    }

    public function delete()
    {
        // dd($this->selected_id);
        $event = EventModel::findOrFail($this->selected_id);
        $event->delete();
        $this->selected_id = null;
        $this->judul = null;
        $this->message = "Berhasil menghapus Event.";
    }

    public function edit($id)
    {
        $event = EventModel::findOrFail($id);

        $this->judul = $event->title;
        $this->konten = $event->konten;
        $this->start = $event->start;
        $this->end = $event->end;
        $event->save();

        $this->is_update = false;

        $this->message = "Berhasil memperbarui Event.";
    }

    public function update()
    {
        $event = EventModel::findOrFail($this->selected_id);

        $event->tittle = $this->judul;
        $event->konten = $this->konten;
        $event->start = $this->start;
        $event->end = $this->end;
        $event->save();

        $this->is_update = false;

        $this->message = "Berhasil memperbarui Event.";
    }
}

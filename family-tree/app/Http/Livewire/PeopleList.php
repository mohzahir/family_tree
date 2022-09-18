<?php

namespace App\Http\Livewire;

use App\Models\Person;
use Livewire\Component;
use Livewire\WithPagination;

class PeopleList extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $searchText;

    public function delete($id)
    {
        $person = Person::findOrFail($id);
        $person->delete();
    }

    public function render()
    {
        return view('livewire.people-list', [
            'data' => Person::where('big_family_id', auth()->user()->big_family_id)->orderBy('id', 'desc')
                ->when($this->searchText, function ($q) {
                    $q->where('name', "like", "%" . $this->searchText . "%");
                })
                ->paginate(20)
        ]);
    }
}

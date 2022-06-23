<?php

namespace App\Http\Livewire;

use App\Models\Family;
use App\Models\Person;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithPagination;

class FamiliesList extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $searchText;

    public function delete($id)
    {
        $family = Family::findOrFail($id);
        $family->delete();
    }

    public function render()
    {
        return view('livewire.families-list', [
            'data' => Family::orderBy('families.id', 'desc')->select(['people.id as person_id', 'people.name', 'families.id as id', 'families.father_id', 'families.mother_id'])
                ->join('people', 'people.id', 'families.father_id')
                ->when($this->searchText, function ($q) {
                    $q->where('people.name', "like", "%" . $this->searchText . "%");
                })->paginate(20),
            // 'data' => DB::table('families')
            //     ->join('people', 'people.id', 'families.father_id')
            //     ->when($this->searchText, function ($q) {
            //         $q->where('name', "like", "%" . $this->searchText . "%");
            //     })
            //     ->orderBy('families.id', 'desc')
            //     ->paginate(8),
        ]);
    }
}

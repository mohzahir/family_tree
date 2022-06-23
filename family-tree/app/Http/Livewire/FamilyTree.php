<?php

namespace App\Http\Livewire;

use App\Models\Family;
use App\Models\Person;
use Livewire\Component;

class FamilyTree extends Component
{
    public $person;

    public function getChildBranch($child_id, $index = 0)
    {
        $child = Person::findOrFail($child_id);
        $father_or_mother = $child->gender == 'male' ? 'father_id' : 'mother_id';
        if ($child->gender == 'male') {
            $families = Family::where('father_id', $child->id)->get();
            $branch['partners'] = [];
            $branch['person'] = $child;
            foreach ($families as $key => $family) {
                $partner = Person::find($family->mother_id);
                array_push($branch['partners'], $partner);
            }
            $branch['children'] = $child->sons($father_or_mother);
            foreach ($branch['children'] as $child) {
                $child->hasChildren = Family::where($father_or_mother, $child->id)->exists();
            }
            $this->dispatchBrowserEvent('new-branch', ['branch' => $branch, 'index' => $index]);
            // dd($branch);
        } else {
            $families = Family::where('mother_id', $child->id)->get();
            $branch['partners'] = [];
            $branch['person'] = $child;
            foreach ($families as $key => $family) {
                $partner = Person::find($family->father_id);
                array_push($branch['partners'], $partner);
            }
            $branch['children'] = $child->sons($father_or_mother);
            foreach ($branch['children'] as $child) {
                $child->hasChildren = Family::where($father_or_mother, $child->id)->exists();
            }
            $this->dispatchBrowserEvent('new-branch', ['branch' => $branch, 'index' => $index]);
            // dd($branch);
        }
    }

    public function render()
    {
        return view('livewire.family-tree');
    }
}

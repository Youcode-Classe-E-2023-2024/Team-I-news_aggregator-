<?php

namespace App\Livewire;

use Livewire\Component;

use App\Models\AdminSide\Rsslist;

use Livewire\WithPagination;

class RssDashboard extends Component
{
    use WithPagination;
    public $search = '';
    public $perPage = 4;
    public $admin = '';

    public $sortBy = 'name';
    public $sortDirection = 'DESC';

    public function delete(Rsslist $rss) {
        $rss->delete();
    }

    public function setSortBy($field) {
        if ($this->sortBy === $field) {
            $this->sortDirection = $this->sortDirection === 'asc' ? 'desc' : 'asc';
        } else {
            $this->sortDirection = 'asc';
        }

        $this->sortBy = $field;
    }

    public function render()
    {
        $rssLinks = Rsslist::search($this->search)
            ->orderBy($this->sortBy, $this->sortDirection)
            ->paginate($this->perPage);

        return view('livewire.rss-dashboard',compact('rssLinks'));
    }
}

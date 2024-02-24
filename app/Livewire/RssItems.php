<?php

namespace App\Livewire;

use Livewire\Component;

use App\Models\AdminSide\RssItem;

use Livewire\WithPagination;

class RssItems extends Component
{
    use WithPagination;
    public $search = '';
    public $perPage = 8;
    public $admin = '';

    public $sortBy = 'name';
    public $sortDirection = 'DESC';

    public function delete(RssItem $rss) {
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
        $rssItems = RssItem::search($this->search)
            ->orderBy($this->sortBy, $this->sortDirection)
            ->paginate($this->perPage);

        return view('livewire.rss-items',compact('rssItems'));
    }
}

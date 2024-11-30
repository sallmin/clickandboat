<?php

namespace App\Livewire;

use App\Models\Boat as BoatModal;
use Filament\Forms\Components\Checkbox;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Form;
use Livewire\Component;

class Boat extends Component implements HasForms
{
    use InteractsWithForms;

    public $boat = [
        'name' => '',
        'longitude' => '',
        'skippint' => false,
        'quick_bookings' => false,
    ];

    public function mount()
    {
        $this->form->fill();
    }

    public function save()
    {
        $data = $this->form->getState();

        BoatModal::create($data['boat']);

        session()->flash('success', 'Boat created successfully!');
    }

    public function render()
    {
        return view('livewire.boat')->layout('layouts.app');
    }

    public function form(Form $form): Form
    {
        return $form->schema([
            Section::make('Boat Details')
                ->schema([
                    TextInput::make('boat.name')
                        ->unique('boats', 'name')
                        ->required(),
                    TextInput::make('boat.longitude')
                        ->required(),
                    Checkbox::make('boat.skipping'),
                    Checkbox::make('boat.quick_booking'),
                ]),
        ]);
    }
}

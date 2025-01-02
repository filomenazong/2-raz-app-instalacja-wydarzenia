<?php

namespace App\Livewire\Users;

use App\Models\User;
use App\Enums\Auth\RoleType;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Blade;
use Illuminate\Database\Eloquent\Builder;
use PowerComponents\LivewirePowerGrid\Button;
use PowerComponents\LivewirePowerGrid\Column;
use PowerComponents\LivewirePowerGrid\Facades\Filter;
use PowerComponents\LivewirePowerGrid\PowerGridFields;
use PowerComponents\LivewirePowerGrid\Facades\PowerGrid;
use PowerComponents\LivewirePowerGrid\PowerGridComponent;


final class UserTable extends PowerGridComponent
{
    public string $tableName = 'user-table-geyhqp-table';

    public function setUp(): array
    {
        $this->showCheckBox();

        return [
            PowerGrid::header()
                ->showSearchInput(),
            PowerGrid::footer()
                ->showPerPage()
                ->showRecordCount(),
        ];
    }

    public function datasource(): Builder
    {
        return User::query();
    }

    public function relationSearch(): array
    {
        return [];
    }

    public function fields(): PowerGridFields
    {
        return PowerGrid::fields()
            ->add('id')
            ->add('name')
            ->add('email')
            ->add('created_at');
    }

    public function columns(): array
    {
        return [
            Column::make('Id', 'id'),
            Column::make('Name', 'name')
                ->sortable()
                ->searchable(),

            Column::make('Email', 'email')
                ->sortable()
                ->searchable(),

            Column::make('Created at', 'created_at_formatted', 'created_at')
                ->sortable(),

            Column::make('Created at', 'created_at')
                ->sortable()
                ->searchable(),

            Column::action('Action')
        ];
    }

    public function filters(): array
    {
        return [
        ];
    }
//przykładowa akcja
//assignAdminRoleAction
    #[\Livewire\Attributes\On('edit')]
    public function assignAdminRoleAction($id): void
    {
        //$this->authorize('update', Auth::user());
        User::findOrFail($id)->assignRole(RoleType::ADMIN->value);
    }

    public function actions( User $user): array
    {
        return [
            Button::add('assignAdminRoleAction')
                ->slot(Blade::render('<x-wireui-icon name="shield-check" class="w-5 h-5" mini />'))
                ->tooltip(__('users.actions.assign_admin_role'))
                ->class('text-gray-500')
                ->dispatch('assignAdminRoleAction', ['id' => $user->id]),
        ];
    }

    /*
    public function actionRules($row): array
    {
       return [
            // Hide button edit for ID 1
            Rule::button('edit')
                ->when(fn($row) => $row->id === 1)
                ->hide(),
        ];
    }
    */
}

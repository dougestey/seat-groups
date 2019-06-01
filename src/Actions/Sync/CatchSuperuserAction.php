<?php

namespace Herpaderpaldent\Seat\SeatGroups\Actions\Sync;

use Seat\Web\Models\Group;

class CatchSuperuserAction
{
    protected $group;

    protected $roles;

    public function __construct()
    {
        $this->roles = collect();
    }

    public function execute(Group $group)
    {
        $this->group = $group;

        //Catch superuser permissions
        foreach ($this->group->roles as $role) {
            foreach ($role->permissions as $permission) {
                if ($permission->title === 'superuser') {
                    $this->roles->push($role->id);
                }
            }

            switch ($role->title) {
              case 'Members':
                  $this->$roles->push($role->id);
                  break;
              case 'Command':
                  $this->$roles->push($role->id);
                  break;
              case 'Director':
                  $this->$roles->push($role->id);
                  break;
              case 'Executor':
                  $this->$roles->push($role->id);
                  break;
              case 'Content':
                  $this->$roles->push($role->id);
                  break;
              case 'Leadership':
                  $this->$roles->push($role->id);
                  break;
              case 'Logistics':
                  $this->$roles->push($role->id);
                  break;
              case 'Supers':
                  $this->$roles->push($role->id);
                  break;
              case 'Allies':
                  $this->$roles->push($role->id);
                  break;
              case 'PHEW_Leadership':
                  $this->$roles->push($role->id);
                  break;
              case 'HTP_Leadership':
                  $this->$roles->push($role->id);
                  break;
              case 'Arton_Leadership':
                  $this->$roles->push($role->id);
                  break;
              case 'SAS_Leadership':
                  $this->$roles->push($role->id);
                  break;
            }
        }

        return $this->roles;
    }
}

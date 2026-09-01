<?php

declare(strict_types=1);

namespace Liberu\CRM\WorkManagement\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Liberu\Foundation\Organizations\Models\Team;
use Illuminate\Database\Eloquent\Model;

/** @property int $team_id @property bool $completed */
final class ChecklistItem extends Model
{
    public function team(): BelongsTo
    {
        return $this->belongsTo(Team::class);
    }

    protected $table = 'crm_work_checklist_items';

    protected $fillable = ['work_item_id', 'team_id', 'actor_id', 'title', 'completed', 'position'];

    protected function casts(): array
    {
        return ['completed' => 'boolean', 'position' => 'integer'];
    }
}

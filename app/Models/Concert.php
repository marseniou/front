<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Concert extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'slug', 'place', 'program', 'image', 'global_event', 'ticket_link', 'have_ticket', 'date'];

    public function scopeFromNowOn(Builder $query): void
    {
        $query->where('date','>=', Carbon::now());
    }
}

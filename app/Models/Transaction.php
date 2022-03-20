<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public $type_names = [
        1 => 'Topup',
        2 => 'Buying',
        3 => 'Refund',
    ];


    public function sender() {
        return $this->belongsTo(User::class);
    }


    public function receiver() {
        return $this->belongsTo(User::class);
    }


    protected function typeName(): Attribute{
        $get = function() {
            $type      = $this->type;
            $typeNames = collect($this->type_names);
            $typeName  = $typeNames->first(fn($_, $key) => $key === $type);

            return $typeName ?? 'Unknown';
        };

        return Attribute::make($get);
    }
}

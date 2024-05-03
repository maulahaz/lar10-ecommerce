<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    // $table->foreignId('user_id')->constrained('users')->cascadeOnDelete();
    //         $table->decimal('grand_total', 10,2)->nullable();
    //         $table->string('payment_method')->nullable();
    //         $table->string('payment_status')->nullable();
    //         $table->enum('status',['new','processing','shipped','delivered', 'cancelled'])->default('new');
    //         $table->string('currency')->nullable();
    //         $table->decimal('shipping_amount', 10,2)->nullable();
    //         $table->string('shipping_method')->nullable();
    //         $table->text('notes')->nullable();

    protected $fillable = ['user_id', 'grand_total', 'payment_method', 'payment_status', 'status', 'currency', 'shipping_amount', 'shipping_method', 'notes'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function items()
    {
        return $this->hasMany(OrderItem::class);
    }

    public function address()
    {
        return $this->hasOne(Address::class);
    }
}

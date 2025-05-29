<?php

use App\Models\Customer;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Http\Traits\AuditColumnTrait;

return new class extends Migration {
    use AuditColumnTrait, SoftDeletes;
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('phone');
            $table->string('address')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('country')->nullable();
            $table->string('postal_code')->nullable();
            $table->string('customer_type')->nullable();
            $table->decimal('credit_limit', 15, 2)->nullable();
            $table->string('tax_id')->nullable();
            $table->boolean('status')->default(Customer::STATUS_ACTIVE)->comment(Customer::STATUS_ACTIVE . 'Active' . Customer::STATUS_DEACTIVE . 'Dactive');
            $table->timestamps();
            $table->softDeletes();
            $this->addAdminAudidColumns($table);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('customers', function (Blueprint $table) {
            $table->dropColumn('status');
            $table->dropSoftDeletes();
            $this->dropAdminAudColumns($table);
        });
    }
};
